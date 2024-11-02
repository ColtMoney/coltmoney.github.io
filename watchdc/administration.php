<?php include "inc/head.php"; ?>

<div class="wrapper">
    <aside class="left-sidebar">
        <?php include "inc/sidebar.php"; ?>
    </aside>
    <main class="main-content">
        <div class="wrapper_tabs">
            <?php $tabs = ["Users & Roles", "License", "Inventory"]; ?>
            <?php include "inc/tabs-top.php"; ?>
        </div>
        <div id="tab-0" class="tabs-content current">
            <div class="table_wrpr table-custom">
                <div class="table-top-title">
                    <h4>Report name</h4>
                </div>
                <table class="table organization_table">
                    <thead>
                        <tr>
                            <th>
                                <a href="" class="grey_circle_badge">
                                    <?php include "img/user-icon.svg"; ?>
                                </a>
                            </th>
                            <th>Account</th>
                            <th>Position</th>
                            <th>Organization</th>
                            <th>Account status</th>
                            <th>Last activity</th>
                            <th>Role</th>
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
                                <td>System Administrator</td>
                                <td><a class="table-link" href="#">Oschadbank</a></td>
                                <td>Active</td>
                                <td>Feb 26 16:58 <span class="period">5 days ago</span></td>
                                <td>Administrator</td>
                                <td>
                                    <div class="operation-actions">
                                        <a href="#">Delete</a>
                                        <span>|</span>
                                        <a href="#">Edit</a>
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
        <div id="tab-1" class="tabs-content">
            <div class="license-top-items">
                <div class="license-item">
                    <span>License status</span>
                    <div class="btn-wrap">
                        <a href="#" class="btn btn-primary">OK</a>
                    </div>
                </div>
                <div class="license-item">
                    <span>License model</span>
                    <div class="license-list">
                        <p>Co-termination</p>
                        <p>Convert to per-device licensing </p>
                    </div>
                </div>
                <div class="license-item">
                    <span>License model</span>
                    <div class="license-list">
                        <p>May 14, 2021</p>
                        <p>(436 days from now)</p>
                    </div>
                </div>
                <div class="license-item">
                    <span>MX Advanced Security</span>
                    <div class="btn-wrap">
                        <a href="#" class="btn btn-primary">Enabled</a>
                    </div>
                </div>
            </div>
            <div class="tabs">
                <ul class="tab-header">
                    <li class="tab-header__item js-tab-trigger active" data-tabs="1">Information</li>
                    <li class="tab-header__item js-tab-trigger" data-tabs="2">History</li>
                </ul>
                <ul class="tab-content">
                    <li class="tab-content__item js-tab-content active" data-tabs="1">
                        <div class="table_wrpr table-custom">
                            <table class="table organization_table">
                                <thead>
                                    <tr>
                                        <th>Device name</th>
                                        <th>License limit</th>
                                        <th>Current device count</th>
                                        <th>Operation</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php for ($i = 0; $i < 10; ++$i) : ?>
                                        <tr>
                                            <td>
                                                Device name
                                            </td>
                                            <td>2</td>
                                            <td>156</td>
                                            <td>
                                                <div class="operation-actions">
                                                    <a href="#">Delete</a>
                                                    <span>|</span>
                                                    <a href="#">Edit</a>
                                                </div>
                                            </td>
                                        </tr>
                                    <?php endfor; ?>
                                </tbody>
                            </table>
                        </div>
                    </li>
                    <li class="tab-content__item js-tab-content" data-tabs="2">
                        <div class="table_wrpr table-custom">
                            <table class="table organization_table">
                                <thead>
                                    <tr>
                                        <th>
                                            <label class="checkbox">
                                                <input type="checkbox">
                                                <span class="checkmark"></span>
                                            </label>
                                        </th>
                                        <th>Device name</th>
                                        <th>Status</th>
                                        <th>IP adress</th>
                                        <th>Device type</th>
                                        <th>Category</th>
                                        <th>Vendor</th>
                                        <th>Interfaces</th>
                                        <th>Discovered time</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php for ($i = 0; $i < 10; ++$i) : ?>
                                        <tr>
                                            <td>
                                                <label class="checkbox">
                                                    <input type="checkbox">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </td>
                                            <td>
                                                172.21.2.101
                                            </td>
                                            <td>Critical</td>
                                            <td>172.21.2.101</td>
                                            <td>ESXServer</td>
                                            <td>Server</td>
                                            <td>VMware</td>
                                            <td>0</td>
                                            <td>5 days ago</td>
                                        </tr>
                                    <?php endfor; ?>
                                </tbody>
                            </table>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <div id="tab-2" class="tabs-content">
            <div class="table_wrpr table-custom">
                <div class="table-top-title">
                    <h4>Report name</h4>
                </div>
                <table class="table organization_table">
                    <thead>
                        <tr>
                            <th>Device name</th>
                            <th>Serial number</th>
                            <th>Model</th>
                            <th>Claimed on</th>
                            <th>Order number</th>
                            <th>Country/Region</th>
                            <th>Operation</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php for ($i = 0; $i < 10; ++$i) : ?>
                            <tr>
                                <td>
                                    172.21.2.101
                                </td>
                                <td>Q2GD-LBXM-FTCC</td>
                                <td>Server</td>
                                <td>Feb 26 16:58 <div class="period">5 days ago</div>
                                </td>
                                <td>1</td>
                                <td>Hollywood</td>
                                <td>
                                    <div class="operation-actions">
                                        <a href="#">Delete</a>
                                        <span>|</span>
                                        <a href="#">Edit</a>
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
    </main>
</div>

<?php include "inc/footer.php"; ?>