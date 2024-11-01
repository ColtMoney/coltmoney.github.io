$(document).ready(function () {

    let socket = new WebSocket((window.location.protocol == 'http:' ? 'ws' : 'wss') + "://" + window.location.host + ":6001/socket");
    let conversationId = false;
    let apiToken = $('meta[name="api-token"]').attr('content');
    let $conversationList = $('#conversationList');
    let $messageList = $('#messageList');
    let $inputMessage = $('#inputMessage');
    let conversationUsers = [];
    let $messHeader = $('.mes_header_user_info');
    let conv_page = 1;
    let conv_last_page = 2;
    let page = 1;
    let loadPage = true;
    let searchText = null;
    let $searchInput = $('#searchInput');
    let $inputFile = $('#inputFile');
    let $sendBtn = $('.btn-send-message');
    let fileSrc = null;
    let fileName = null;

    socket.onopen = function (e) {
        console.log('Socket connected.');

        sendGetConversations();

        if (conversationUsers.indexOf(userId) === -1) {
            conversationUsers.push(userId);
        }

        setInterval(() => {
            $(".timeago[timestamp]").each(function (i, el) {
                let date = ago($(el).attr("timestamp") * 1000) + ' ago';

                date = date.replace(/ seconds| second/gi, 's')
                    .replace(/ minutes| minute/gi, 'm')
                    .replace(/ hours| hour/gi, 'h')
                    .replace(/ days| day/gi, 'd')
                    .replace(/ weeks| week/gi, 'w')
                    .replace(/ months| month/gi, 'm')
                    .replace(/ years| year/gi, 'y');

                if (date.replace(/[^+\d]/g, '') !== '0' && date !== '-1s ago') {
                    $(el).text(date);
                }
            });
        }, 1000)

        // setInterval(() => {
        //     socket.send(JSON.stringify({
        //         command: 'checkOnline',
        //         apiToken: apiToken,
        //         users: conversationUsers
        //     }));
        // }, 10000)
    };

    socket.close = function (e) {
        console.log('Socket disconnected.');
    };

    socket.onmessage = function (event) {
        let data = JSON.parse(event.data);

        if (typeof data !== 'undefined' && typeof data.command !== 'undefined') {
            switch (data.command) {
                case "getConversations":
                    if (data.success) {
                        $conversationList.html('');

                        $.each(data.conversations.data, function (i, item) {
                            let $block = $('.clone_conversation_block').clone().removeClass('clone_conversation_block');
                            let user = null;

                            $.each(item.conversation.participants, function (j, participant) {
                                if (participant.messageable.id !== authUserId) {
                                    user = participant.messageable;
                                }
                            });
                            $block.find('.user_name .name').text(user.name + ' ' + user.last_name);

                            console.log(item.conversation.unread);

                            if (item.conversation.unread > 0) {
                                console.log($block.find('.message_item_controls .income'));
                                $block.find('.message_item_controls .income').css('display', 'inline-block');
                            }

                            if (item.conversation.last_message !== null) {
                                console.log(item.conversation.last_message);

                                if (item.conversation.last_message.body.file !== null) {
                                    $block.find('.message_item_file').css('display', 'flex');
                                } else {
                                    $block.find('.message_item_file').css('display', 'none');
                                }

                                if (item.conversation.last_message.body.text.length) {
                                    if (item.conversation.last_message.body.file !== null) {
                                        $block.find('.right_info_left p').text((item.conversation.last_message.sender.id === authUserId ? 'You: ' : '')
                                            + item.conversation.last_message.body.text);
                                        $block.find('.right_info_left p').append('<br><span>' + item.conversation.last_message.body.fileName + '</span>');
                                    } else {
                                        $block.find('.right_info_left p').text((item.conversation.last_message.sender.id === authUserId ? 'You: ' : '')
                                            + item.conversation.last_message.body.text);
                                    }
                                } else {
                                    $block.find('.right_info_left p').append('<span>' + item.conversation.last_message.body.fileName + '</span>');
                                }
                                $block.find('.timeago').text(item.conversation.last_message.created_ago).attr('timestamp', item.conversation.last_message.created_timestamp);
                            }
                            $block.data('id', item.conversation_id);
                            $block.data('user', user.id);

                            if (item.conversation_id === conversationId) {
                                $block.addClass('active');
                                console.log('active added', $block);
                            } else if (item.conversation.unread > 0) {
                                console.log('unread');
                                $block.find('.message_item_controls .income').show();
                            }

                            if (conversationUsers.indexOf(user.id) === -1) {
                                conversationUsers.push(user.id);
                            }

                            if (item.settings !== null && item.settings.flagged) {
                                $block.find('.flag-conversation.not-active').hide();
                                $block.find('.flag-conversation.active').show();
                            } else {
                                $block.find('.flag-conversation.active').hide();
                                $block.find('.flag-conversation.not-active').show();
                            }


                            $conversationList.append($block);
                        });

                        $('.messages_amount .total').text(data.conversations.total);

                        let from = data.conversations.from == null ? 0 : data.conversations.from;
                        let to = data.conversations.to == null ? 0 : data.conversations.to;

                        $('.messages_amount .page-size').text(from+'-'+to);

                        conv_last_page = data.conversations.last_page;

                        if (conversationId === false && userId !== false) {
                            $.each($conversationList.find('tr'), function (i, item) {
                                if (userId === $(item).data('user')) {
                                    $(item).click();
                                }
                            });
                        }

                        if (data.unreadTotalCount > 0) {
                            $('.new-msg-block').show();
                            $('.new-msg-block .number').text(data.unreadTotalCount);
                        } else {
                            $('.new-msg-block').hide();
                        }
                    }
                    break;

                case "getConversation":
                    if (data.success) {
                        if (page === 1) {
                            sendGetConversations();

                            // $('.right_btns.disable_block').removeClass('disable_block');
                            // $('.messages_main_controls.disable_block').removeClass('disable_block');
                            $messageList.html('');
                            $inputMessage.val('');

                            $messHeader.find('img').attr('src', data.participant.avatar);
                            // if (data.participant.online) {
                            //     $messHeader.find('.online_status').addClass('online');
                            // } else {
                            //     $messHeader.find('.online_status').removeClass('online');
                            // }
                            $messHeader.find('.user_name').text(data.participant.name + ' ' + data.participant.last_name);
                            $messHeader.find('.img_wrpr_wrpr').show();
                            fileSrc = null;
                            fileName = null;
                            $('.custom-file-label-mess span').text('');
                            $('.custom-file-label-mess').hide();
                        }

                        let scrollHeightBefore = $messageList[0].scrollHeight;
                        let scrollTopBefore = $messageList.scrollTop();

                        $.each(data.messages.data, function (i, item) {
                            $block = $('.clone_conversation_message').clone().removeClass('clone_conversation_message');

                            if (item.body.file !== null) {
                                if (item.body.text.length) {
                                    $block.find('.message_text p').text(item.body.text);
                                    $block.find('.message_text p').append('<br>');
                                }
                                $block.find('.message_text p').append('<a download="' + item.body.fileName + '" href="' + item.body.file + '" target="_blank">' + item.body.fileName + '</a>');
                            } else {
                                $block.find('.message_text p').text(item.body.text);
                            }

                            $block.find('.message-time').text(item.created_ago).attr('timestamp', item.created_timestamp);

                            if (item.sender.id == authUserId) {
                                $block.addClass('your-message');
                            } else {
                                $block.addClass('person-message');
                            }

                            if ($('.mark-messages').hasClass('active') && $block.hasClass('your-message')) {
                                $block.find('.message_item_mark').css('display', 'flex');
                            }

                            $block.data('id', item.id);

                            $messageList.prepend($block);
                        });

                        if (data.messages.data.length < 25) {
                            loadPage = false;
                        } else {
                            loadPage = true;
                        }

                        let scrollHeightAfter = $messageList[0].scrollHeight;

                        if (page === 1) {
                            $messageList.slimScroll({scrollTo: $messageList[0].scrollHeight});
                        } else {
                            $messageList.slimScroll({scrollTo: scrollHeightAfter - (scrollHeightBefore - scrollTopBefore)});
                        }
                    }
                    break;

                case "sendMessage":
                    sendGetConversations();

                    if (data.success) {
                        conversationId = data.conversation_id;

                        $block = $('.clone_conversation_message').clone().removeClass('clone_conversation_message');

                        data.message.body = JSON.parse(data.message.body);

                        // $block.find('.img_wrpr img').attr('src', data.message.sender.avatar);

                        if (data.message.body.file !== null) {
                            if (data.message.body.text.length) {
                                $block.find('.message_text p').text(data.message.body.text);
                                $block.find('.message_text p').append('<br>');
                            }
                            $block.find('.message_text p').append('<a download="' + data.message.body.fileName + '" href="' + data.message.body.file + '" target="_blank">' + data.message.body.fileName + '</a>');
                        } else {
                            $block.find('.message_text p').text(data.message.body.text);
                        }

                        $block.find('.message-time').text(data.message.created_ago).attr('timestamp', data.message.created_timestamp);

                        if (data.message.sender.id == authUserId) {
                            $block.addClass('your-message');
                        } else {
                            socket.send(JSON.stringify({
                                command: 'readConversation',
                                apiToken: apiToken,
                                conversationId: conversationId
                            }));

                            $block.addClass('person-message');
                        }

                        if ($('.mark-messages').hasClass('active') && $block.hasClass('your-message')) {
                            $block.find('.message_item_mark').css('display', 'flex');
                        }

                        $messageList.append($block);
                        $messageList.slimScroll({scrollTo: $messageList[0].scrollHeight});
                    }
                    break;

                case "checkOnline":
                    // if (data.success) {
                    //
                    //     $.each($conversationList.find('li'), function (i, item) {
                    //         if (data.users[$(item).data('user')]) {
                    //             $(item).find('.online_status').addClass('online');
                    //         } else {
                    //             $(item).find('.online_status').removeClass('online');
                    //         }
                    //
                    //         if ($(item).data('user') === userId) {
                    //             if (data.users[$(item).data('user')]) {
                    //                 $messHeader.find('.online_status').addClass('online');
                    //             } else {
                    //                 $messHeader.find('.online_status').removeClass('online');
                    //             }
                    //         }
                    //     });
                    //
                    //
                    //     if (userId) {
                    //         if (data.users[userId]) {
                    //             $messHeader.find('.online_status').addClass('online');
                    //         } else {
                    //             $messHeader.find('.online_status').removeClass('online');
                    //         }
                    //     }
                    // }
                    break;

                case "removeConversation":
                    if (data.success) {
                        Swal.fire(
                            'Deleted!',
                            'Chat has been deleted.',
                            'success'
                        )

                        sendGetConversations();

                        $messHeader.find('.user_name').text('');
                        $('.right_btns').addClass('disable_block');
                        $('.messages_main_controls').addClass('disable_block');
                        $messageList.html('');
                        $inputMessage.val('');
                        $messHeader.find('.img_wrpr_wrpr').hide();
                        fileSrc = null;
                        fileName = null;
                        userId = false;
                        conversationId = false;
                        $('.custom-file-label-mess span').text('');
                        $('.custom-file-label-mess').hide();

                        $('.messages_s').removeClass('chat_open');
                    }
                    break;

                case "removeConversations":
                    if (data.success) {
                        Swal.fire(
                            'Deleted!',
                            'Chats has been deleted.',
                            'success'
                        )

                        sendGetConversations();

                        $.each(data.conversations, function (i, conversation_id) {
                            if (conversation_id == conversationId) {
                                $messHeader.find('.user_name').text('');
                                $messageList.html('');
                                $inputMessage.val('');
                                $messHeader.find('.img_wrpr_wrpr').hide();
                                fileSrc = null;
                                fileName = null;
                                userId = false;
                                conversationId = false;
                                $('.custom-file-label-mess span').text('');
                                $('.custom-file-label-mess').hide();

                                $('.messages_s').removeClass('chat_open');
                            }
                        });

                    }
                    break;

                case "removeMessages":
                    if (data.success) {
                        page = 1;

                        socket.send(JSON.stringify({
                            command: 'getConversation',
                            apiToken: apiToken,
                            conversationId: conversationId,
                            page: page
                        }));

                        Swal.fire(
                            'Deleted!',
                            'Messages has been deleted.',
                            'success'
                        );
                    }
                    break;

                case "getConversationFiles":
                    if (data.success) {
                        $('#fileList').html('');

                        $.each(data.files, function (i, file) {
                            let $block = $('.clone_file_message').clone().removeClass('clone_file_message');
                            $block.find('a').attr('href', file.file).attr('download', file.fileName);
                            $block.find('p').text(file.fileName);
                            $('#fileList').append($block);
                        });
                    }
                    break;
            }
        }
    };

    $('#conversationList').on('click', '.message_table_item td:not(:nth-child(1))', function() {
        $('.messages_s').addClass('chat_open');

        $(this).closest('.message_table_item').addClass('this_message_chat');

        $('#conversationList tr').removeClass('active');
        $(this).find('.messages_left_list_item').addClass('active');

        conversationId = $(this).parents('.message_table_item').data('id');
        userId = $(this).parent().data('user');
        page = 1;
        loadPage = true;

        socket.send(JSON.stringify({
            command: 'getConversation',
            apiToken: apiToken,
            conversationId: conversationId,
            page: page
        }));

        return false;
    });

    $sendBtn.on('click', function () {
        sendMessage();
        return false;
    });

    function sendMessage() {
        if ($sendBtn.hasClass('disable_block')) {
            return false;
        }

        let message = $inputMessage.val();
        $inputMessage.val('');

        if (message.length || fileSrc !== null) {
            socket.send(JSON.stringify({
                command: 'sendMessage',
                apiToken: apiToken,
                conversationId: conversationId,
                userId: userId,
                message: message,
                file: fileSrc,
                fileName: fileName,
            }));

            fileSrc = null;
            fileName = null;
            $('.custom-file-label-mess span').text('');
            $('.custom-file-label-mess').hide();
        }
    }

    $('.messages_left_list_wrpr').slimScroll({
        start: 'top',
        position: 'right',
        height: 'calc(100vh - 180px)',
    });

    $messageList.slimScroll({
        start: 'bottom',
        position: 'right',
        height: 'calc(100vh - 260px)',
    });

    $messageList.slimscroll().bind('slimscrolling', function (e, pos) {
        if (pos <= 600 && loadPage && $messageList[0].scrollHeight !== $messageList.outerHeight()) {
            page++;
            loadPage = false;

            socket.send(JSON.stringify({
                command: 'getConversation',
                apiToken: apiToken,
                conversationId: conversationId,
                page: page
            }));
        }
    });

    $searchInput.on('keyup', function (event) {
        searchText = $(this).val();

        sendGetConversations();
    });

    $('.messages_search_btn').click(function () {
        $('.messages_search_form').toggleClass('active');
        $(this).toggleClass('active');

        if (!$(this).hasClass('active')) {
            $searchInput.val('');
            searchText = '';

            sendGetConversations();
        }
    });

    $inputFile.on('change', function () {
        if (typeof $(this).prop('files')[0] !== 'undefined') {
            fileSrc = null;
            fileName = null;
            $('.custom-file-label-mess span').text('');
            $('.custom-file-label-mess').hide();
            $sendBtn.addClass('disable_block');

            let file = $(this).prop('files')[0];
            let data = new FormData();
            data.append('file', file);
            data.append('api_token', $('meta[name="api-token"]').attr('content'));

            $.ajax({
                url: '/api/upload',
                data: data,
                processData: false,
                contentType: false,
                type: 'POST',
                success: function (data) {
                    $sendBtn.removeClass('disable_block');
                    $('.custom-file-label-mess span').text(file.name);
                    $('.custom-file-label-mess').show();
                    fileSrc = data.src;
                    fileName = file.name;
                    $inputFile.val('');
                },
                error: function (jqXHR) {
                    $inputFile.val('');
                    $sendBtn.removeClass('disable_block');
                    let response = JSON.parse(jqXHR.responseText);
                    swal.fire('Error!', response.errors.file[0], 'error');
                }
            });
        }
    });

    $('.file-label-close').on('click', function () {
        fileSrc = null;
        fileName = null;
        $('.custom-file-label-mess span').text('');
        $('.custom-file-label-mess').hide();
    });

    $('#deleteConversation').on('click', function () {
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.value) {
                socket.send(JSON.stringify({
                    command: 'removeConversation',
                    apiToken: apiToken,
                    conversationId: conversationId
                }));
            }
        })
    });

    $('.messages_amount_prev').on('click', function (e) {
        e.preventDefault();

        if (conv_page-1 >= 1) {
            conv_page--;

            sendGetConversations();
        }
    });

    $('.messages_amount_next').on('click', function (e) {
        e.preventDefault();

        if (conv_page+1 <= conv_last_page) {
            conv_page++;

            sendGetConversations();
        }
    });

    function sendGetConversations() {
        socket.send(JSON.stringify({
            command: 'getConversations',
            apiToken: apiToken,
            searchText: searchText,
            page: conv_page,
            type: type,
        }));
    }

    $('#conversationList').on('click', '.flag-conversation', function () {
        $(this).hide();

        let status = false;

        if ($(this).hasClass('active')) {
            $(this).parents('.flag-conversation-item').find('.flag-conversation.not-active').show();
        } else {
            $(this).parents('.flag-conversation-item').find('.flag-conversation.active').show();
            status = true;
        }

        let id = $(this).parents('.message_table_item').data('id');

        console.log($(this).parents('.message_table_item'), id);

        socket.send(JSON.stringify({
            command: 'toggleFlag',
            apiToken: apiToken,
            conversationId: id,
            status: status
        }));
    });

    $('#deleteConversations').on('click', function (e) {
        e.preventDefault();

        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.value) {
                let conversations = [];

                $('.checkbox-conversation:checked').each(function (i, el) {
                    conversations.push($(el).parents('.message_table_item').data('id'));
                });

                socket.send(JSON.stringify({
                    command: 'removeConversations',
                    apiToken: apiToken,
                    conversations: conversations
                }));
            }
        })
    });

    $('.close_message_btn').on('click', function () {
        conversationId = false;
        $('.message_table_item.active').removeClass('active');
    });

    $('#conversationList').on('click', '.checkbox-conversation', function () {
        if ($('.checkbox-conversation:checked').length > 0) {
            $('.group-chats-delete').css('display', 'flex');
        } else {
            $('.group-chats-delete').hide();
        }
    });

    $('.mark-messages').on('click', function (e) {
        e.preventDefault();

        if ($(this).hasClass('active')) {
            $('.your-message .message_item_mark').hide();
            $('.your-message .message_item_mark .checkbox-message').prop('checked', false);
        } else {
            $('.your-message .message_item_mark').css('display', 'flex');
        }

        $(this).toggleClass('active');
        $('.delete-messages').toggleClass('active');
        $('.delete-conversation').toggleClass('active');
    });

    $('#deleteMessages').on('click', function (e) {
        e.preventDefault();

        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.value) {
                let messages = [];

                $('.checkbox-message:checked').each(function (i, el) {
                    messages.push($(el).parents('.message-item').data('id'));
                });

                socket.send(JSON.stringify({
                    command: 'removeMessages',
                    apiToken: apiToken,
                    messages: messages
                }));
            }
        })
    });
});
