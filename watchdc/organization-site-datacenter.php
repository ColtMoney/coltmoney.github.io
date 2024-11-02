<?php include "inc/head.php"; ?>

    <div class="wrapper">
        <aside class="left-sidebar">
            <div class="sidebar-panel">
                <ul class="top-nav">
                    <li class="menu_mobile"><a href="#"><?php include "img/menu_mobile_burger.svg" ?></a></li>
                    <li><a href="#"><?php include "img/logo-icon.svg" ?></a></li>
                    <li><a href="#"><?php include "img/star-icon.svg" ?></a></li>
                    <li><a href="#"><?php include "img/search-icon.svg" ?></a></li>
                    <li><a href="#"><?php include "img/plus-icon.svg" ?></a></li>
                </ul>
                <ul class="bottom-info">
                    <li class="bell-info"><a href="#"><?php include "img/bell-icon.svg"; ?>
                            <div class="message-count">2</div>
                        </a></li>
                    <li class="question-info"><a href="#"><?php include "img/question-circle-icon.svg"; ?></a></li>
                </ul>
            </div>
			<?php include "inc/alerts-notifications.php"; ?>
            <div class="sidebar-navigation">
                <a href="#" class="sidebar_logo">
                    <img src="img/logo-wmdc.png" alt="">
                </a>
                <div class="accordion-item">
                    <div class="accordion-title">
                        <div class="icon"><?php include "img/select-arrow.svg"; ?></div>
                        <span>Organization name</span>
                        <a href="" class="accordion_plus_btn" data-popup-target="new_organization_popup">
							<?php include "img/plus-icon.svg"; ?>
                        </a>
                    </div>
                </div>
                <div class="accordion-item">
                    <div class="accordion-title">
                        <div class="icon"><?php include "img/select-arrow.svg"; ?></div>
                        <span>Site name</span>
                        <a href="" class="accordion_plus_btn" data-popup-target="new_site_popup">
							<?php include "img/plus-icon.svg"; ?>
                        </a>
                    </div>
                </div>
                <div class="accordion-item active">
                    <div class="accordion-title">
                        <div class="icon"><?php include "img/select-arrow.svg"; ?></div>
                        <span>Data center name</span>
                        <a href="" class="accordion_plus_btn" data-popup-target="new_site_two_popup">
							<?php include "img/plus-icon.svg"; ?>
                        </a>
                    </div>
                    <div class="accordion-content">
                        <div class="menu-item">
                            <ul>
                                <li><a href="#">Data Center Name 1</a></li>
                                <li><a href="#">Data Center Name 2</a></li>
                                <li><a href="#">Data Center Name 3</a></li>
                                <li><a href="#">Data Center Name 4</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="user-info">
                    <div class="img-wrap">
                        <img src="img/user-img.jpg" alt="">
                    </div>
                    <div class="user-details">
                        <div class="user-name">Jackie Richards</div>
                        <div class="settings">
                            <div class="setting-icon"><?php include "img/setting-icon.svg"; ?></div>
                            <span>Account setting</span>
                        </div>
                    </div>
                </div>
            </div>
        </aside>
        <main class="main-content">
            <ul class="big_breadcrumbs">
                <li><a href="">Organizations</a></li>
                <li><a href="">Site</a></li>
                <li>Data center</li>
            </ul>
            <div class="recently_opened">
                <label class="light_label">Recently opened</label>
                <div class="recently_opened_items">
                    <a href="" class="recently_opened_item active">
                        <div class="img_wrpr">
                            <img src="img/organization_logo.jpg" alt="">
                        </div>
                        <div class="text_info">
                            <h3 class="name">Organization name</h3>
                            <div class="last_visit">Last visit 8 hours ago</div>
                        </div>
                    </a>
                    <a href="" class="recently_opened_item">
                        <div class="img_wrpr">
                            <img src="img/organization_logo.jpg" alt="">
                        </div>
                        <div class="text_info">
                            <h3 class="name">Organization name</h3>
                            <div class="last_visit">Last visit 8 hours ago</div>
                        </div>
                    </a>
                    <a href="" class="recently_opened_item">
                        <div class="img_wrpr">
                            <img src="img/organization_logo.jpg" alt="">
                        </div>
                        <div class="text_info">
                            <h3 class="name">Organization name</h3>
                            <div class="last_visit">Last visit 8 hours ago</div>
                        </div>
                    </a>
                    <a href="" class="recently_opened_item">
                        <div class="img_wrpr">
                            <img src="img/organization_logo.jpg" alt="">
                        </div>
                        <div class="text_info">
                            <h3 class="name">Organization name</h3>
                            <div class="last_visit">Last visit 8 hours ago</div>
                        </div>
                    </a>
                    <a href="" class="recently_opened_item">
                        <div class="img_wrpr">
                            <img src="img/organization_logo.jpg" alt="">
                        </div>
                        <div class="text_info">
                            <h3 class="name">Organization name</h3>
                            <div class="last_visit">Last visit 8 hours ago</div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="table_controls">
                <form action="" class="search_input_form">
                    <input type="text" class="search_input" placeholder="Search organization">
                    <button class="search_input_btn">
						<?php include "img/search_input_icon.svg"; ?>
                    </button>
                </form>
            </div>

            <div class="sites_map">
                <div class="sites_table_wrpr overflow_auto">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>Site name</th>
                            <th>Adress</th>
                        </tr>
                        </thead>
                        <tbody>
						<?php for ( $i = 0; $i < 6; ++ $i ): ?>
                            <tr>
                                <td>Site name</td>
                                <td>London, Park Lane no. 1</td>
                            </tr>
						<?php endfor; ?>
                        </tbody>
                    </table>
                </div>
                <section class="maps">
                    <div id="map"></div>
                    <script type="text/javascript">
                        var Mymap;

                        function initMap() {
                            Mymap = new google.maps.Map(document.getElementById('map'), {
                                center: {lat: 21.475640, lng: -18.504091},
                                zoom: 3,
                                disableDefaultUI: true,
                                mapTypeId: google.maps.MapTypeId.ROADMAP,
                                styles: [
                                    {
                                        "featureType": "road",
                                        "elementType": "geometry",
                                        "stylers": [
                                            {
                                                "visibility": "off"
                                            }
                                        ]
                                    },
                                    {
                                        "featureType": "poi",
                                        "elementType": "geometry",
                                        "stylers": [
                                            {
                                                "visibility": "off"
                                            }
                                        ]
                                    },
                                    {
                                        "featureType": "landscape",
                                        "elementType": "geometry",
                                        "stylers": [
                                            {
                                                "color": "#fffffa"
                                            }
                                        ]
                                    },
                                    {
                                        "featureType": "water",
                                        "stylers": [
                                            {
                                                "lightness": 50
                                            }
                                        ]
                                    },
                                    {
                                        "featureType": "road",
                                        "elementType": "labels",
                                        "stylers": [
                                            {
                                                "visibility": "off"
                                            }
                                        ]
                                    },
                                    {
                                        "featureType": "transit",
                                        "stylers": [
                                            {
                                                "visibility": "off"
                                            }
                                        ]
                                    },
                                    {
                                        "featureType": "administrative",
                                        "elementType": "geometry",
                                        "stylers": [
                                            {
                                                "lightness": 40
                                            }
                                        ]
                                    }
                                ]
                            });

                            setMarkers(Mymap, points);

                            var image_1 = {
                                url: 'img/map_marker.svg',
                                scaledSize: new google.maps.Size(32, 32),
                            }

                            var marker = new google.maps.Marker({
                                position: {lat: -10.696367, lng: -47.993053},
                                map: Mymap,
                                icon: image_1,
                            });

                            var marker_2 = new google.maps.Marker({
                                position: {lat: -11.120422, lng: -74.441158},
                                map: Mymap,
                                icon: image_1,
                            });

                            var marker_3 = new google.maps.Marker({
                                position: {lat: 51.315317, lng: -73.708513},
                                map: Mymap,
                                icon: image_1,
                            });

                            var marker_4 = new google.maps.Marker({
                                position: {lat: 55.748059, lng: 37.635370},
                                map: Mymap,
                                icon: image_1,
                            });

                            var marker_5 = new google.maps.Marker({
                                position: {lat: 24.135335, lng: 45.891555},
                                map: Mymap,
                                icon: image_1,
                            });

                            var marker_6 = new google.maps.Marker({
                                position: {lat: 28.303972, lng: 3.282328},
                                map: Mymap,
                                icon: image_1,
                            });

                            var marker_7 = new google.maps.Marker({
                                position: {lat: 20.322104, lng: -10.547192},
                                map: Mymap,
                                icon: image_1,
                            });

                            // var marker_8 = new google.maps.Marker({
                            //     position: {lat: -3.106268, lng: 24.722493},
                            //     map: Mymap,
                            //     icon: image_1,
                            // });
                        }

                        var points = [
                            ['Iowa State Capitol', -3.106268, 24.722493, 12, '<div class="details_card">\n' +
                            '                        <div class="left_info">\n' +
                            '                            <h3 class="card_title">Site name</h3>\n' +
                            '                            <a href="" class="card_site">example.xyz</a>\n' +
                            '                            <div class="card_bottom_info">\n' +
                            '                                <div class="col">\n' +
                            '                                    <span class="light_text">Site quantity</span>\n' +
                            '                                    <p>6 sites</p>\n' +
                            '                                </div>\n' +
                            '                                <div class="col">\n' +
                            '                                    <span class="light_text">Data center quantity</span>\n' +
                            '                                    <p>32 data centers</p>\n' +
                            '                                </div>\n' +
                            '                                <div class="col">\n' +
                            '                                    <span class="light_text">Alerts</span>\n' +
                            '                                    <p>125</p>\n' +
                            '                                </div>\n' +
                            '                            </div>\n' +
                            '                        </div>\n' +
                            '                        <div class="diagram_info">\n' +
                            '                            <div class="diagramm_text">\n' +
                            '                                <div class="percents">43.6%</div>\n' +
                            '                                <span>Total Visits</span>\n' +
                            '                            </div>\n' +
                            '                            <svg width="114" height="114" viewBox="0 0 114 114" fill="none" xmlns="http://www.w3.org/2000/svg">\n' +
                            '<path d="M1.425 57C0.637993 57 -0.00186157 57.6383 0.017807 58.425C0.287193 69.2002 3.60716 79.6893 9.60623 88.6675C15.8695 98.0411 24.7717 105.347 35.187 109.661C45.6024 113.975 57.0632 115.104 68.1201 112.905C79.1771 110.705 89.3335 105.277 97.3051 97.3051C105.277 89.3335 110.705 79.1771 112.905 68.1201C115.104 57.0632 113.975 45.6024 109.661 35.187C105.347 24.7717 98.0411 15.8695 88.6675 9.60623C79.6893 3.60716 69.2002 0.287195 58.425 0.0178095C57.6383 -0.0018599 57 0.637995 57 1.425C57 2.21201 57.6383 2.84804 58.425 2.86875C68.6364 3.13749 78.5746 6.29003 87.0841 11.9759C95.989 17.926 102.93 26.3831 107.028 36.2777C111.127 46.1723 112.199 57.0601 110.11 67.5641C108.02 78.0682 102.863 87.7168 95.2898 95.2898C87.7168 102.863 78.0682 108.02 67.5641 110.11C57.0601 112.199 46.1723 111.127 36.2777 107.028C26.3831 102.93 17.926 95.9891 11.9759 87.0841C6.29002 78.5746 3.13748 68.6365 2.86875 58.425C2.84805 57.6383 2.21201 57 1.425 57Z" fill="#00474F"></path>\n' +
                            '<path d="M12.485 45.2177C11.8546 45.0509 11.2068 45.4265 11.0557 46.0608C8.86736 55.2514 9.48397 64.8974 12.8406 73.7479C16.337 82.9669 22.6309 90.8604 30.8399 96.3217C39.0488 101.783 48.7612 104.538 58.6151 104.201C68.4689 103.864 77.9702 100.451 85.7867 94.4415C93.6031 88.4318 99.3428 80.1266 102.201 70.6902C105.059 61.2539 104.892 51.1597 101.723 41.823C98.555 32.4863 92.544 24.3753 84.5331 18.6274C76.8424 13.1091 67.6788 10.0345 58.2344 9.78761C57.5826 9.77058 57.0531 10.3001 57.0523 10.9522C57.0516 11.6043 57.5799 12.1319 58.2317 12.1498C67.183 12.3956 75.8663 15.3152 83.1565 20.546C90.7668 26.0066 96.4773 33.712 99.4873 42.5818C102.497 51.4517 102.656 61.0412 99.9408 70.0057C97.2256 78.9702 91.773 86.8603 84.3473 92.5694C76.9217 98.2786 67.8955 101.521 58.5343 101.841C49.1731 102.161 39.9464 99.5438 32.1479 94.3556C24.3494 89.1673 18.3701 81.6685 15.0486 72.9105C11.8668 64.521 11.2766 55.3791 13.3393 46.6652C13.4895 46.0307 13.1154 45.3846 12.485 45.2177Z" fill="#006D75"></path>\n' +
                            '<path d="M20.4792 57.0001C19.962 57.0001 19.5415 57.4195 19.5544 57.9366C19.7315 65.0174 21.9132 71.9102 25.8554 77.8102C29.9713 83.97 35.8213 88.771 42.6657 91.606C49.5101 94.441 57.0414 95.1828 64.3074 93.7375C71.5734 92.2922 78.2476 88.7248 83.4861 83.4863C88.7246 78.2478 92.292 71.5736 93.7373 64.3076C95.1826 57.0417 94.4408 49.5103 91.6058 42.6659C88.7707 35.8215 83.9698 29.9715 77.81 25.8556C71.91 21.9134 65.0172 19.7317 57.9363 19.5547C57.4193 19.5417 56.9999 19.9622 56.9999 20.4794C56.9999 20.9966 57.4193 21.4145 57.9363 21.4281C64.6467 21.6047 71.1775 23.6764 76.7695 27.4129C82.6213 31.3229 87.1822 36.8804 89.8755 43.3826C92.5688 49.8848 93.2735 57.0396 91.9004 63.9423C90.5274 70.8449 87.1383 77.1855 82.1618 82.162C77.1852 87.1386 70.8447 90.5276 63.942 91.9007C57.0394 93.2737 49.8845 92.569 43.3824 89.8757C36.8802 87.1824 31.3227 82.6215 27.4126 76.7697C23.6762 71.1777 21.6045 64.6469 21.4279 57.9366C21.4143 57.4196 20.9963 57.0001 20.4792 57.0001Z" fill="#87E8DE"></path>\n' +
                            '</svg>\n' +
                            '                        </div>\n' +
                            '                    </div>', 'A'],
                        ];

                        function setMarkers(map, locations) {

                            var image_1 = {
                                url: 'img/map_marker.svg',
                                scaledSize: new google.maps.Size(32, 32),
                            }

                            for (var i = 0; i < locations.length; i++) {

                                var place = locations[i];
                                var myLatLng = new google.maps.LatLng(place[1], place[2]);

                                var marker = new google.maps.Marker({
                                    position: {lat: -3.106268, lng: 24.722493},
                                    map: map,
                                    title: place[0],
                                    icon: image_1,
                                    zIndex: place[3]
                                });

                                function addInfoWindow(marker, message) {
                                    var infoWindow = new google.maps.InfoWindow({
                                        content: message
                                    });
                                    google.maps.event.addListener(marker, 'click', function () {
                                        infoWindow.open(map, marker);
                                    });
                                }

                                addInfoWindow(marker, place[4]);
                            }
                        }
                    </script>
                    <script async defer
                            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAGLYEy6zq-xrw6eQBr4Ctuy3oFC7XnGzY&callback=initMap"
                            type="text/javascript"></script>
                </section>
            </div>
        </main>
    </div>

    <div class="html_popups">
        <div class="popup_wrpr new_organization_popup">
            <div class="popup_wrpr_inner">
                <div class="popup">
                    <a href="" class="close_popup_btn">
						<?php include "img/close_icon.svg" ?>
                    </a>
                    <h4 class="sm-title text-center">New Organization</h4>
                    <form action="">
                        <div class="form-control text_center">
                            <label class="form-label">Information about organization</label>
                        </div>
                        <div class="form-control">
                            <label class="form-label">Organization Name</label>
                            <input type="text" class="control" placeholder="Enter name">
                        </div>
                        <div class="form-control">
                            <label class="form-label">Address</label>
                            <input type="text" class="control" placeholder="Location">
                        </div>
                        <div class="form-control">
                            <label class="form-label">Website URL</label>
                            <input type="text" class="control" placeholder="https://">
                        </div>
                        <div class="form-control text_center">
                            <label class="form-label">Information about you</label>
                        </div>
                        <div class="form-control">
                            <label class="form-label">First name</label>
                            <input type="text" class="control" placeholder="Enter name">
                        </div>
                        <div class="form-control">
                            <label class="form-label">Last name</label>
                            <input type="text" class="control" placeholder="Enter last name">
                        </div>
                        <div class="form-control">
                            <label class="form-label">Email</label>
                            <input type="email" class="control" placeholder="mail@example.com">
                        </div>
                        <div class="form-control">
                            <label class="form-label">Phone number</label>
                            <div class="control-with-dropdown phone_control">
                                <div class="select-dropdown">
                                    <div class="selected-wrap">
                                        <div class="selected-item"><?php include "img/phone-flag-1.svg"; ?></div>
                                        <div class="expand-down"><?php include "img/select-arrow.svg"; ?></div>
                                    </div>
                                    <div class="dropdown-list">
                                        <div class="drop-item">
                                            <div class="flag-icon"><?php include "img/phone-flag-1.svg"; ?></div>
                                            <span>US</span>
                                        </div>
                                        <div class="drop-item">
                                            <div class="flag-icon"><?php include "img/phone-flag-1.svg"; ?></div>
                                            <span>US</span>
                                        </div>
                                        <div class="drop-item">
                                            <div class="flag-icon"><?php include "img/phone-flag-1.svg"; ?></div>
                                            <span>US</span>
                                        </div>
                                    </div>
                                </div>
                                <input type="tel" class="control" placeholder="___ __ __">
                            </div>
                        </div>
                        <div class="btn-wrap">
                            <button class="btn btn-primary">Enter</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="popup_wrpr new_site_popup">
            <div class="popup_wrpr_inner">
                <div class="popup">
                    <a href="" class="close_popup_btn">
						<?php include "img/close_icon.svg" ?>
                    </a>
                    <h4 class="sm-title text-center">New Site</h4>
                    <form action="">
                        <div class="form-control">
                            <label class="form-label">Site Name</label>
                            <input type="text" class="control" placeholder="Enter name">
                        </div>
                        <div class="form-control">
                            <label class="form-label">Address</label>
                            <input type="text" class="control" placeholder="Location">
                        </div>
                        <div class="btn-wrap">
                            <button class="btn btn-primary">Enter</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="popup_wrpr new_site_two_popup">
            <div class="popup_wrpr_inner">
                <div class="popup">
                    <a href="" class="close_popup_btn">
						<?php include "img/close_icon.svg" ?>
                    </a>
                    <h4 class="sm-title text-center">New Site</h4>
                    <form action="">
                        <div class="form-control">
                            <label class="form-label">Site Name</label>
                            <input type="text" class="control" placeholder="Enter name">
                        </div>
                        <div class="btn-wrap">
                            <button class="btn btn-primary">Enter</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

<?php include "inc/footer.php"; ?>