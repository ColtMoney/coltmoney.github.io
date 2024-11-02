<?php include "inc/head.php"; ?>

<div class="wrapper">
    <aside class="left-sidebar">
        <?php include "inc/sidebar.php"; ?>
    </aside>
    <main class="main-content">
        <div class="wrapper_tabs">
            <?php $tabs = ["My account", "My activity", "Root list", "App synchronization"]; ?>
            <?php include "inc/tabs-top.php"; ?>
        </div>
        <div class="card-group">
            <div class="left">
                <?php include "inc/card-account.php"; ?>
            </div>
            <div class="right">
                <div id="tab-0" class="tabs-content current">
                    <div class="account-card-wrap">
                        <div class="card card-info">
                            <h3 class="lg-title">Main information</h3>
                            <p>
                                When you change your info, an email will be sent to your new adress for verification
                            </p>
                            <div class="account-item account-main-info">
                                <div class="control-col-2">
                                    <div class="form-control">
                                        <label class="form-label">First name</label>
                                        <input type="text" class="control" placeholder="Large Input">
                                    </div>
                                    <div class="form-control">
                                        <label class="form-label">Last name</label>
                                        <input type="text" class="control" placeholder="Large Input">
                                    </div>
                                    <div class="form-control">
                                        <label class="form-label">Phone number</label>
                                        <div class="control-with-dropdown">
                                            <div class="select-dropdown">
                                                <div class="selected-wrap">
                                                    <div class="selected-item"><?php include "img/phone-flag-1.svg"; ?></div>
                                                    <div class="expand-down"><?php include "img/select-arrow.svg"; ?></div>
                                                </div>
                                                <div class="dropdown-list">
                                                    <div class="drop-item">
                                                        <div class="flag-icon"><?php include "img/phone-flag-1.svg"; ?></div><span>US</span>
                                                    </div>
                                                    <div class="drop-item">
                                                        <div class="flag-icon"><?php include "img/phone-flag-1.svg"; ?></div><span>US</span>
                                                    </div>
                                                    <div class="drop-item">
                                                        <div class="flag-icon"><?php include "img/phone-flag-1.svg"; ?></div><span>US</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <input type="tel" class="control">
                                        </div>
                                    </div>
                                    <div class="form-control">
                                        <label class="form-label">Country</label>
                                        <input type="text" class="control" placeholder="Large Input">
                                    </div>
                                    <div class="form-control">
                                        <label class="form-label">State/Country</label>
                                        <input type="text" class="control" placeholder="Large Input">
                                    </div>
                                    <div class="form-control">
                                        <label class="form-label">Country</label>
                                        <input type="text" class="control" placeholder="Large Input">
                                    </div>
                                </div>
                                <div class="group-control">
                                    <div class="form-control">
                                        <label class="form-label">Adress</label>
                                        <input type="text" class="control" placeholder="Large Input">
                                    </div>
                                    <div class="form-control">
                                        <label class="form-label">Postcode</label>
                                        <input type="text" class="control" value="99524">
                                    </div>
                                </div>
                            </div>
                            <h3 class="lg-title">Password</h3>
                            <p>
                                When you change your email adress, an email will be sent to your new adress for verification
                            </p>
                            <div class="account-item account-password">
                                <div class="btn-wrap">
                                    <a href="#" class="btn btn-default">Change</a>
                                </div>
                            </div>
                            <h3 class="lg-title">Email adress</h3>
                            <p>
                                When you change your email adress, an email will be sent to your new adress for verification
                            </p>
                            <div class="account-item account-email">
                                <div class="form-control">
                                    <input type="text" class="control" placeholder="Large Input" value="example@mail.com">
                                </div>
                                <div class="btn-wrap">
                                    <a href="#" class="btn btn-default">Change</a>
                                </div>
                            </div>
                            <h3 class="lg-title">Two-factor authentification</h3>
                            <p>
                                If we register an attempt to log in from an unknown device or from an unknown browser, we will ask you to enter the code
                            </p>
                            <div class="account-item account-password">
                                <div class="btn-wrap">
                                    <a href="#" class="btn btn-default">Set up</a>
                                </div>
                            </div>
                            <h3 class="lg-title">Timezone</h3>
                            <p>
                                If you want to track alerts in a different time zone, change the settings below
                            </p>
                            <div class="account-item account-timezone">
                                <div class="form-control">
                                    <div class="control-search">
                                        <div class="icon icon-search"><?php include "img/search-icon.svg"; ?></div>
                                        <input type="text" class="control" placeholder="Large Input" value="UTC+10:30 Australia Australia (Lord Howe Island Lord Howe Island)">
                                    </div>
                                </div>
                            </div>
                            <div class="btns-wrap">
                                <a href="#" class="cancel">Don’t Save</a>
                                <a href="#" class="btn btn-secondary">Save changes</a>
                            </div>
                        </div>
                        <div class="card-sidebar">
                            <ul>
                                <li class="active">
                                    <a href="#">
                                        <div class="icon"><?php include "img/user-icon.svg"; ?></div>Main information
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="icon"><?php include "img/email-icon.svg"; ?></div>Email
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="icon"><?php include "img/key-icon.svg"; ?></div>Two-factor authentication
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="icon"><?php include "img/time-zone-icon.svg"; ?></div>Time zone
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div id="tab-1" class="tabs-content">
                    <div class="table_wrpr table-custom">
                        <div class="table-top-title">
                            <h4>Recent logins</h4>
                        </div>
                        <table class="table organization_table">
                            <thead>
                                <tr>
                                    <th>IP address</th>
                                    <th>MAC address</th>
                                    <th>Geoposition</th>
                                    <th>Date</th>
                                    <th>Operation</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php for ($i = 0; $i < 10; ++$i) : ?>
                                    <tr>
                                        <td>66.249.65.216</td>
                                        <td>00-14-22-01-23-45</td>
                                        <td>Ukraine, Kiev region, Kiev</td>
                                        <td>10.24.2020 10:22</td>
                                        <td>
                                            <div class="operation-actions">
                                                <a href="#">Add to white list</a>
                                                <span>|</span>
                                                <a href="#">Add to black list</a>
                                            </div>
                                        </td>
                                    </tr>
                                <?php endfor; ?>
                            </tbody>
                        </table>
                        <div class="table-bottom-control">
                            <div class="display-setting">
                                <div class="show-count">
                                    <div class="show">1-15</div>
                                    <ul class="drop-down default">
                                        <li>Show 15</li>
                                        <li>Show 45</li>
                                        <li>Show 65</li>
                                        <li>Show 85</li>
                                    </ul>
                                </div>
                                <span>of</span>
                                <div class="all-item-count">120</div>
                            </div>
                            <ul class="breadcrumbs">
                                <li class="pag-item prev"><?php include "img/arrow-left.svg"; ?></li>
                                <li class="pag-item">1</li>
                                <li class="pag-dot"><?php include "img/pag-dots.svg"; ?></li>
                                <li class="pag-item">4</li>
                                <li class="pag-item">5</li>
                                <li class="pag-item">6</li>
                                <li class="pag-item">7</li>
                                <li class="pag-item">8</li>
                                <li class="pag-dot"><?php include "img/pag-dots.svg"; ?></li>
                                <li class="pag-item">50</li>
                                <li class="pag-item next"><?php include "img/arrow-right.svg"; ?></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div id="tab-2" class="tabs-content">
                    <div class="tabs">
                        <ul class="tab-header">
                            <li class="tab-header__item js-tab-trigger active" data-tabs="1">White list</li>
                            <li class="tab-header__item js-tab-trigger" data-tabs="2">Black list</li>
                        </ul>
                        <ul class="tab-content">
                            <li class="tab-content__item js-tab-content active" data-tabs="1">
                                <div class="table_wrpr table-custom">
                                    <div class="table-top-title">
                                        <h4>Allowed IP-addresses</h4>
                                        <div class="api-action-group">
                                            <a href="#">
                                                <div class="icon"><?php include "img/ip-icon-2.svg"; ?></div>Add new IP
                                            </a>
                                        </div>
                                    </div>
                                    <table class="table organization_table">
                                        <thead>
                                            <tr>
                                                <th>IP address</th>
                                                <th>MAC address</th>
                                                <th>Geoposition</th>
                                                <th>Operation</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php for ($i = 0; $i < 10; ++$i) : ?>
                                                <tr>
                                                    <td>66.249.65.216</td>
                                                    <td>00-14-22-01-23-45</td>
                                                    <td>Ukraine, Kiev region, Kiev</td>
                                                    <td>
                                                        <div class="operation-actions">
                                                            <a href="#">Add to white list</a>
                                                            <span>|</span>
                                                            <a href="#">Add to black list</a>
                                                        </div>
                                                    </td>
                                                </tr>
                                            <?php endfor; ?>
                                        </tbody>
                                    </table>
                                    <div class="table-bottom-control">
                                        <div class="display-setting">
                                            <div class="show-count">
                                                <div class="show">1-15</div>
                                                <ul class="drop-down default">
                                                    <li>Show 15</li>
                                                    <li>Show 45</li>
                                                    <li>Show 65</li>
                                                    <li>Show 85</li>
                                                </ul>
                                            </div>
                                            <span>of</span>
                                            <div class="all-item-count">120</div>
                                        </div>
                                        <ul class="breadcrumbs">
                                            <li class="pag-item prev"><?php include "img/arrow-left.svg"; ?></li>
                                            <li class="pag-item">1</li>
                                            <li class="pag-dot"><?php include "img/pag-dots.svg"; ?></li>
                                            <li class="pag-item">4</li>
                                            <li class="pag-item">5</li>
                                            <li class="pag-item">6</li>
                                            <li class="pag-item">7</li>
                                            <li class="pag-item">8</li>
                                            <li class="pag-dot"><?php include "img/pag-dots.svg"; ?></li>
                                            <li class="pag-item">50</li>
                                            <li class="pag-item next"><?php include "img/arrow-right.svg"; ?></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="tab-content__item js-tab-content" data-tabs="2">
                                <div class="table_wrpr table-custom">
                                    <div class="table-top-title">
                                        <h4>Black IP-addresses</h4>
                                        <div class="api-action-group">
                                            <a href="#">
                                                <div class="icon"><?php include "img/ip-icon-2.svg"; ?></div>Add new IP
                                            </a>
                                        </div>
                                    </div>
                                    <table class="table organization_table">
                                        <thead>
                                            <tr>
                                                <th>IP address</th>
                                                <th>MAC address</th>
                                                <th>Geoposition</th>
                                                <th>Operation</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php for ($i = 0; $i < 10; ++$i) : ?>
                                                <tr>
                                                    <td>66.249.65.216</td>
                                                    <td>00-14-22-01-23-45</td>
                                                    <td>Ukraine, Kiev region, Kiev</td>
                                                    <td>
                                                        <div class="operation-actions">
                                                            <a href="#">Delete</a>
                                                        </div>
                                                    </td>
                                                </tr>
                                            <?php endfor; ?>
                                        </tbody>
                                    </table>
                                    <div class="table-bottom-control">
                                        <div class="display-setting">
                                            <div class="show-count">
                                                <div class="show">1-15</div>
                                                <ul class="drop-down default">
                                                    <li>Show 15</li>
                                                    <li>Show 45</li>
                                                    <li>Show 65</li>
                                                    <li>Show 85</li>
                                                </ul>
                                            </div>
                                            <span>of</span>
                                            <div class="all-item-count">120</div>
                                        </div>
                                        <ul class="breadcrumbs">
                                            <li class="pag-item prev"><?php include "img/arrow-left.svg"; ?></li>
                                            <li class="pag-item">1</li>
                                            <li class="pag-dot"><?php include "img/pag-dots.svg"; ?></li>
                                            <li class="pag-item">4</li>
                                            <li class="pag-item">5</li>
                                            <li class="pag-item">6</li>
                                            <li class="pag-item">7</li>
                                            <li class="pag-item">8</li>
                                            <li class="pag-dot"><?php include "img/pag-dots.svg"; ?></li>
                                            <li class="pag-item">50</li>
                                            <li class="pag-item next"><?php include "img/arrow-right.svg"; ?></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div id="tab-3" class="tabs-content">
                    <div class="application-wrap">
                        <div class="app-top-items not-synced">
                            You have not synced with any application yet
                        </div>
                        <div class="app-top-items synchronization">
                            <div class="app-item">
                                <div class="img-wrap">
                                    <img src="img/app-img-1.png" alt="">
                                </div>
                                <div class="app-item-content">
                                    <div class="app-name">App name</div>
                                    <p>
                                        You have synchronized WMDC with this application
                                    </p>
                                </div>
                                <div class="more-info">
                                    <div class="more-btn"><?php include "img/more-vertical-icon.svg"; ?></div>
                                </div>
                            </div>
                            <div class="app-item">
                                <div class="img-wrap">
                                    <img src="img/app-img-1.png" alt="">
                                </div>
                                <div class="app-item-content">
                                    <div class="app-name">App name</div>
                                    <p>
                                        You have synchronized WMDC with this application
                                    </p>
                                </div>
                                <div class="more-info">
                                    <div class="more-btn"><?php include "img/more-vertical-icon.svg"; ?></div>
                                </div>
                            </div>
                            <div class="app-item">
                                <div class="img-wrap">
                                    <img src="img/app-img-1.png" alt="">
                                </div>
                                <div class="app-item-content">
                                    <div class="app-name">App name</div>
                                    <p>
                                        You have synchronized WMDC with this application
                                    </p>
                                </div>
                                <div class="more-info">
                                    <div class="more-btn"><?php include "img/more-vertical-icon.svg"; ?></div>
                                </div>
                            </div>
                        </div>
                        <div class="app-bottom-items">
                            <div class="app-item">
                                <div class="img-wrap">
                                    <img src="img/app-img-1.png" alt="">
                                </div>
                                <div class="app-item-content">
                                    <div class="app-name">App name</div>
                                    <p>
                                        You have synchronized WMDC with this application
                                    </p>
                                </div>
                                <div class="more-info">
                                    <div class="more-btn"><?php include "img/more-vertical-icon.svg"; ?></div>
                                </div>
                            </div>
                            <div class="app-item">
                                <div class="img-wrap">
                                    <img src="img/pp-icon.png" alt="">
                                </div>
                                <div class="app-item-content">
                                    <div class="app-name">App name</div>
                                    <p>
                                        You have synchronized WMDC with this application
                                    </p>
                                </div>
                                <div class="more-info">
                                    <div class="more-btn"><?php include "img/more-vertical-icon.svg"; ?></div>
                                </div>
                            </div>
                            <div class="app-item">
                                <div class="img-wrap">
                                    <img src="img/google-icon.png" alt="">
                                </div>
                                <div class="app-item-content">
                                    <div class="app-name">App name</div>
                                    <p>
                                        You have synchronized WMDC with this application
                                    </p>
                                </div>
                                <div class="more-info">
                                    <div class="more-btn"><?php include "img/more-vertical-icon.svg"; ?></div>
                                </div>
                            </div>
                            <div class="app-item">
                                <div class="img-wrap">
                                    <img src="img/mail-icon.png" alt="">
                                </div>
                                <div class="app-item-content">
                                    <div class="app-name">App name</div>
                                    <p>
                                        You have synchronized WMDC with this application
                                    </p>
                                </div>
                                <div class="more-info">
                                    <div class="more-btn"><?php include "img/more-vertical-icon.svg"; ?></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>

<?php include "inc/footer.php"; ?>