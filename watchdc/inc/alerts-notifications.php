<div class="alerts_notifications">
    <a href="" class="close_popup_btn alerts_notifications_close">
        <?php include "img/close_icon.svg" ?>
    </a>
    <div class="wrapper_tabs">
        <?php $tabs = [ "Live", "History" ]; ?>
        <?php include "inc/tabs-top.php"; ?>
    </div>
    <div class="alerts_notif_body">
        <div id="tab-0" class="tabs-content current">
            <div class="mb_40">
                <label class="light_green_label single">Today</label>
                <div class="alert_notif_item category_1">
                    <div class="item_header">
                        <h3 class="allerts_message">Alerts message</h3>
                        <div class="alert_notif_status processing">Processing</div>
                    </div>
                    <div class="item_body">
                        <div class="col">
                            <label class="light_green_label">Organization name</label>
                            <p class="item_text">Organization name</p>
                        </div>
                        <div class="col">
                            <label class="light_green_label">Site name</label>
                            <p class="item_text">Site name</p>
                        </div>
                        <div class="col">
                            <label class="light_green_label">Data center name</label>
                            <p class="item_text">Data center name</p>
                        </div>
                    </div>
                </div>
            </div>
            <label class="light_green_label single">Earlier</label>
            <div class="alert_notif_item category_1">
                <div class="item_header">
                    <h3 class="allerts_message">Alerts message</h3>
                    <div class="alert_notif_status processing">Processing</div>
                </div>
                <div class="item_body">
                    <div class="col">
                        <label class="light_green_label">Organization name</label>
                        <p class="item_text">Organization name</p>
                    </div>
                    <div class="col">
                        <label class="light_green_label">Site name</label>
                        <p class="item_text">Site name</p>
                    </div>
                    <div class="col">
                        <label class="light_green_label">Data center name</label>
                        <p class="item_text">Data center name</p>
                    </div>
                </div>
            </div>
            <div class="alert_notif_item category_2">
                <div class="item_header">
                    <h3 class="allerts_message">Alerts message</h3>
                    <div class="alert_notif_status warning">Warning</div>
                </div>
                <div class="item_body">
                    <div class="col">
                        <label class="light_green_label">Organization name</label>
                        <p class="item_text">Organization name</p>
                    </div>
                    <div class="col">
                        <label class="light_green_label">Site name</label>
                        <p class="item_text">Site name</p>
                    </div>
                    <div class="col">
                        <label class="light_green_label">Data center name</label>
                        <p class="item_text">Data center name</p>
                    </div>
                </div>
            </div>
            <div class="alert_notif_item category_3">
                <div class="item_header">
                    <h3 class="allerts_message">Alerts message</h3>
                    <div class="alert_notif_status warning">Warning</div>
                </div>
                <div class="item_body">
                    <div class="col">
                        <label class="light_green_label">Organization name</label>
                        <p class="item_text">Organization name</p>
                    </div>
                    <div class="col">
                        <label class="light_green_label">Site name</label>
                        <p class="item_text">Site name</p>
                    </div>
                    <div class="col">
                        <label class="light_green_label">Data center name</label>
                        <p class="item_text">Data center name</p>
                    </div>
                </div>
            </div>
            <?php for ($i = 0; $i < 7; ++$i): ?>
                <div class="alert_notif_item category_1">
                    <div class="item_header">
                        <h3 class="allerts_message">Alerts message</h3>
                        <div class="alert_notif_status processing">Processing</div>
                    </div>
                    <div class="item_body">
                        <div class="col">
                            <label class="light_green_label">Organization name</label>
                            <p class="item_text">Organization name</p>
                        </div>
                        <div class="col">
                            <label class="light_green_label">Site name</label>
                            <p class="item_text">Site name</p>
                        </div>
                        <div class="col">
                            <label class="light_green_label">Data center name</label>
                            <p class="item_text">Data center name</p>
                        </div>
                    </div>
                </div>
            <?php endfor; ?>
        </div>
        <div id="tab-1" class="tabs-content">
        
        </div>
    </div>
</div>