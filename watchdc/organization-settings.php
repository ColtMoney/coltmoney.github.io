<?php include "inc/head.php"; ?>

<div class="wrapper">
    <aside class="left-sidebar">
        <?php include "inc/sidebar.php"; ?>
    </aside>
    <main class="main-content">
        <div class="wrapper_tabs">
            <?php $tabs = ["Settings", "Security", "Activity", "Root list"]; ?>
            <?php include "inc/tabs-top.php"; ?>
        </div>
        <div id="tab-0" class="tabs-content current">
            <div class="card-group">
                <div class="left">
                    <?php include "inc/card-organization.php"; ?>
                </div>
                <div class="right">
                    <div class="card card-info">
                        <h3 class="lg-title">Main information</h3>
                        <p>
                            When you change your info, an email will be sent to your new adress for verification
                        </p>
                        <div class="form-control">
                            <label class="form-label">Organization name</label>
                            <input type="text" class="control" placeholder="Large Input">
                        </div>
                        <h3 class="lg-title">Organization website</h3>
                        <p>
                            When you change your info, an email will be sent to your new adress for verification
                        </p>
                        <div class="form-control">
                            <label class="form-label">Enter link</label>
                            <input type="text" class="control" placeholder="https://">
                        </div>
                        <div class="btns-wrap">
                            <a href="#" class="cancel">Don’t Save</a>
                            <a href="#" class="btn btn-secondary">Save changes</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="tab-1" class="tabs-content">
            <div class="card-group">
                <div class="left">
                    <?php include "inc/card-organization.php"; ?>
                </div>
                <div class="right">
                    <div class="card card-info">
                        <h3 class="lg-title">Secure your organization</h3>
                        <p>
                            When you change your info, an email will be sent to your new adress for verification
                        </p>
                        <div class="form-control">
                            <label class="form-label">Minimum password length</label>
                            <div class="control-details">
                                <input type="text" class="control" placeholder="0">
                                <div class="details-field">Symbol (s)</div>
                            </div>
                        </div>
                        <div class="form-control">
                            <label class="checkbox">
                                <input type="checkbox" checked="checked">
                                <span class="checkmark"></span>
                                <div class="checkbox-text">Require at least one uppercase letter</div>
                            </label>
                        </div>
                        <div class="form-control">
                            <label class="checkbox">
                                <input type="checkbox" checked="checked">
                                <span class="checkmark"></span>
                                <div class="checkbox-text">Require at least one lowercase letter</div>
                            </label>
                        </div>
                        <div class="form-control">
                            <label class="checkbox">
                                <input type="checkbox" checked="checked">
                                <span class="checkmark"></span>
                                <div class="checkbox-text">Require at least one number</div>
                            </label>
                        </div>
                        <div class="form-control">
                            <label class="checkbox">
                                <input type="checkbox" checked="checked">
                                <span class="checkmark"></span>
                                <div class="checkbox-text">Require at least one symbol character</div>
                            </label>
                        </div>
                        <div class="form-control">
                            <label class="form-label">Password expires in</label>
                            <div class="control-details">
                                <input type="text" class="control" placeholder="0">
                                <div class="details-field">Day (s)</div>
                            </div>
                        </div>
                        <div class="form-control">
                            <label class="form-label">Enforce password history</label>
                            <div class="control-details">
                                <input type="text" class="control" placeholder="0">
                                <div class="details-field">Password remembered</div>
                            </div>
                        </div>
                        <div class="btns-wrap">
                            <a href="#" class="cancel">Don’t Save</a>
                            <a href="#" class="btn btn-secondary">Save changes</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="tab-2" class="tabs-content">
            <div class="card-group">
                <div class="left">
                    <?php include "inc/card-organization.php"; ?>
                </div>
                <div class="right">
                    <div class="table_wrpr table-custom">
                        <div class="table-top-title">
                            <h4>Recent logins</h4>
                        </div>
                        <table class="table organization_table">
                            <thead>
                                <tr>
                                    <th>
                                        <a href="" class="grey_circle_badge">
                                            <?php include "img/user-icon.svg"; ?>
                                        </a>
                                    </th>
                                    <th>Name</th>
                                    <th>IP address</th>
                                    <th>Geoposition</th>
                                    <th>Date</th>
                                    <th>Operation</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php for ($i = 0; $i < 10; ++$i) : ?>
                                    <tr>
                                        <td>
                                            <div class="organization_table_img_wrpr">
                                                <img src="img/organization_logo.jpg" alt="">
                                            </div>
                                        </td>
                                        <td>
                                            Jackie Richards
                                        </td>
                                        <td>66.249.65.216</td>
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
            </div>
        </div>
        <div id="tab-3" class="tabs-content">
            <div class="card-group">
                <div class="left">
                    <?php include "inc/card-organization.php"; ?>
                </div>
                <div class="right">
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
                                                <div class="icon"><?php include "img/ip-icon-1.svg"; ?></div>Add new IP range
                                            </a>
                                            <a href="#">
                                                <div class="icon"><?php include "img/ip-icon-2.svg"; ?></div>Add new IP
                                            </a>
                                        </div>
                                    </div>
                                    <table class="table organization_table">
                                        <thead>
                                            <tr>
                                                <th>
                                                    <a href="" class="grey_circle_badge">
                                                        <?php include "img/user-icon.svg"; ?>
                                                    </a>
                                                </th>
                                                <th>Name</th>
                                                <th>IP address</th>
                                                <th>Geoposition</th>
                                                <th>Date</th>
                                                <th>Operation</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php for ($i = 0; $i < 10; ++$i) : ?>
                                                <tr>
                                                    <td>
                                                        <div class="organization_table_img_wrpr">
                                                            <img src="img/organization_logo.jpg" alt="">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        Jackie Richards
                                                    </td>
                                                    <td>66.249.65.216</td>
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
                            </li>
                            <li class="tab-content__item js-tab-content" data-tabs="2">
                                <div class="table_wrpr table-custom">
                                    <div class="table-top-title">
                                        <h4>Black IP-addresses</h4>
                                        <div class="api-action-group">
                                            <a href="#">
                                                <div class="icon"><?php include "img/ip-icon-1.svg"; ?></div>Add new IP range
                                            </a>
                                            <a href="#">
                                                <div class="icon"><?php include "img/ip-icon-2.svg"; ?></div>Add new IP
                                            </a>
                                        </div>
                                    </div>
                                    <table class="table organization_table">
                                        <thead>
                                            <tr>
                                                <th>
                                                    <a href="" class="grey_circle_badge">
                                                        <?php include "img/user-icon.svg"; ?>
                                                    </a>
                                                </th>
                                                <th>Name</th>
                                                <th>IP address</th>
                                                <th>Geoposition</th>
                                                <th>Date</th>
                                                <th>Operation</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php for ($i = 0; $i < 10; ++$i) : ?>
                                                <tr>
                                                    <td>
                                                        <div class="organization_table_img_wrpr">
                                                            <img src="img/organization_logo.jpg" alt="">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        Jackie Richards
                                                    </td>
                                                    <td>66.249.65.216</td>
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
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>

<div class="html_popups">
    <div class="popup_wrpr new_site_two_popup">
        <div class="popup_wrpr_inner">
            <div class="popup">
                <a href="" class="close_popup_btn">
                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M9.21425 8L15.3666 0.666406C15.4697 0.544531 15.383 0.359375 15.2236 0.359375H13.3533C13.2432 0.359375 13.1377 0.408594 13.065 0.492969L7.99081 6.54219L2.91659 0.492969C2.84628 0.408594 2.74081 0.359375 2.62831 0.359375H0.758C0.598625 0.359375 0.511906 0.544531 0.615031 0.666406L6.76738 8L0.615031 15.3336C0.591931 15.3608 0.57711 15.394 0.57233 15.4293C0.56755 15.4647 0.57301 15.5006 0.588063 15.533C0.603116 15.5653 0.627129 15.5926 0.657252 15.6117C0.687375 15.6308 0.722341 15.6408 0.758 15.6406H2.62831C2.73847 15.6406 2.84394 15.5914 2.91659 15.507L7.99081 9.45781L13.065 15.507C13.1353 15.5914 13.2408 15.6406 13.3533 15.6406H15.2236C15.383 15.6406 15.4697 15.4555 15.3666 15.3336L9.21425 8Z" fill="#8594A8"></path>
                    </svg>
                </a>
                <h3 class="lg-title text-center mb-24">Add new IP to black list</h3>
                <form>
                    <div class="form-control">
                        <label class="form-label">Source IP-address</label>
                        <div class="select">
                            <select>
                                <option value="1">Subnet</option>
                                <option value="2">Subnet 1</option>
                                <option value="3">Subnet 2</option>
                                <option value="4">Subnet 3</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-control">
                        <label class="form-label">IP-address</label>
                        <input type="text" class="control">
                    </div>
                    <div class="form-control">
                        <label class="form-label">Subnet mask</label>
                        <input type="text" class="control"
                    </div>
                    <div class="btn-wrap">
                        <button class="btn btn-primary">Add</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include "inc/footer.php"; ?>