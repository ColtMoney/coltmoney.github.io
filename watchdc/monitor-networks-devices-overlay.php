<?php include "inc/head.php"; ?>

    <div class="wrapper">
        <aside class="left-sidebar">
			<?php include "inc/sidebar.php"; ?>
        </aside>
        <main class="main-content">
            <div class="wrapper_tabs pfa_page_tabs">
				<?php $tabs = [
					"Servers & Workstations",
					"Routers and Firewalls",
					"Switches",
					"OS",
					"WMDC Sensor Hub",
					"Storage"
				]; ?>
				<?php include "inc/tabs-top.php"; ?>
            </div>
            <div id="tab-0" class="tabs-content current">
                <div class="numberstat_cards_wrpr">
                    <div class="numberstat_card_item">
                        <h3 class="item_title">Critical errors</h3>
                        <div class="number_line">
                            <span>9</span>
                            <span>5</span>
                            <span>2</span>
                            <span>1</span>
                        </div>
                    </div>
                    <div class="numberstat_card_item">
                        <h3 class="item_title">Total System Performance</h3>
                        <div class="number_line">
                            <span>9</span>
                            <span>5</span>
                            <span>2</span>
                            <span>1</span>
                        </div>
                    </div>
                    <div class="numberstat_card_item">
                        <h3 class="item_title">Active Alerts</h3>
                        <div class="number_line">
                            <span>9</span>
                            <span>5</span>
                            <span>2</span>
                            <span>1</span>
                        </div>
                    </div>
                    <div class="numberstat_card_item">
                        <h3 class="item_title">Total System Health</h3>
                        <div class="number_line">
                            <span>9</span>
                            <span>5</span>
                            <span>2</span>
                            <span>1</span>
                        </div>
                    </div>
                    <div class="numberstat_card_item">
                        <h3 class="item_title">Critical errors</h3>
                        <div class="number_line">
                            <span>9</span>
                            <span>5</span>
                            <span>2</span>
                            <span>1</span>
                        </div>
                    </div>
                </div>
                <div class="row m_t_45">
                    <div class="col-20">
                        <div class="box_diagram">
							<?php include "img/in-progress_3.svg" ?>
                        </div>
                    </div>
                    <div class="col-80">
                        <div class="module-box module-box_1">
                            <div class="header-box">
                                <h3 class="title">Data Center Related</h3>

                                <div class="wrapper_icon wrapper_icon_2">
                                    <a href="#" class="linked_icon download_link">
                                <span class="icon">
                                    <?php include "img/traceroute.svg" ?>
                                </span>
                                        Trace route
                                    </a>
                                    <a href="#" class="linked_icon download_link">
                                <span class="icon">
                                    <?php include "img/ping.svg" ?>
                                </span>
                                        Ping
                                    </a>
                                </div>
                            </div>
                            <div class="body-box">
                                <div class="wrap_table_data_center">
                                    <table class="table_data_center">
                                        <thead>
                                        <tr>
                                            <td>
                                                <div class="form-control">
                                                    <label class="checkbox">
                                                        <input type="checkbox" checked>
                                                        <span class="checkmark"></span>
                                                    </label>
                                                </div>
                                            </td>
                                            <td>Device name</td>
                                            <td>Status</td>
                                            <td>IP Address</td>
                                            <td>Device type</td>
                                            <td>Category</td>
                                            <td>Vendor</td>
                                            <td>Interfaces</td>
                                            <td>Discovered time</td>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>
                                                <div class="form-control">
                                                    <label class="checkbox">
                                                        <input type="checkbox">
                                                        <span class="checkmark"></span>
                                                    </label>
                                                </div>
                                            </td>
                                            <td>OPM-Switch</td>
                                            <td>
                                                <div class="alert_notif_status error">Error</div>
                                            </td>
                                            <td>192.168.50.130</td>
                                            <td>HP Switch J8698A</td>
                                            <td>Switch</td>
                                            <td>Hewlett-Packard</td>
                                            <td>43</td>
                                            <td>11 days ago</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-control">
                                                    <label class="checkbox">
                                                        <input type="checkbox" checked>
                                                        <span class="checkmark"></span>
                                                    </label>
                                                </div>
                                            </td>
                                            <td>OPM-Switch</td>
                                            <td>
                                                <div class="alert_notif_status error">Error</div>
                                            </td>
                                            <td>192.168.50.130</td>
                                            <td>HP Switch J8698A</td>
                                            <td>Switch</td>
                                            <td>Hewlett-Packard</td>
                                            <td>43</td>
                                            <td>11 days ago</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-control">
                                                    <label class="checkbox">
                                                        <input type="checkbox">
                                                        <span class="checkmark"></span>
                                                    </label>
                                                </div>
                                            </td>
                                            <td>OPM-Switch</td>
                                            <td>
                                                <div class="alert_notif_status error">Error</div>
                                            </td>
                                            <td>192.168.50.130</td>
                                            <td>HP Switch J8698A</td>
                                            <td>Switch</td>
                                            <td>Hewlett-Packard</td>
                                            <td>43</td>
                                            <td>11 days ago</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-control">
                                                    <label class="checkbox">
                                                        <input type="checkbox">
                                                        <span class="checkmark"></span>
                                                    </label>
                                                </div>
                                            </td>
                                            <td>OPM-Switch</td>
                                            <td>
                                                <div class="alert_notif_status error">Error</div>
                                            </td>
                                            <td>192.168.50.130</td>
                                            <td>HP Switch J8698A</td>
                                            <td>Switch</td>
                                            <td>Hewlett-Packard</td>
                                            <td>43</td>
                                            <td>11 days ago</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-control">
                                                    <label class="checkbox">
                                                        <input type="checkbox">
                                                        <span class="checkmark"></span>
                                                    </label>
                                                </div>
                                            </td>
                                            <td>OPM-Switch</td>
                                            <td>
                                                <div class="alert_notif_status error">Error</div>
                                            </td>
                                            <td>192.168.50.130</td>
                                            <td>HP Switch J8698A</td>
                                            <td>Switch</td>
                                            <td>Hewlett-Packard</td>
                                            <td>43</td>
                                            <td>11 days ago</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-control">
                                                    <label class="checkbox">
                                                        <input type="checkbox">
                                                        <span class="checkmark"></span>
                                                    </label>
                                                </div>
                                            </td>
                                            <td>OPM-Switch</td>
                                            <td>
                                                <div class="alert_notif_status error">Error</div>
                                            </td>
                                            <td>192.168.50.130</td>
                                            <td>HP Switch J8698A</td>
                                            <td>Switch</td>
                                            <td>Hewlett-Packard</td>
                                            <td>43</td>
                                            <td>11 days ago</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-control">
                                                    <label class="checkbox">
                                                        <input type="checkbox">
                                                        <span class="checkmark"></span>
                                                    </label>
                                                </div>
                                            </td>
                                            <td>OPM-Switch</td>
                                            <td>
                                                <div class="alert_notif_status error">Error</div>
                                            </td>
                                            <td>192.168.50.130</td>
                                            <td>HP Switch J8698A</td>
                                            <td>Switch</td>
                                            <td>Hewlett-Packard</td>
                                            <td>43</td>
                                            <td>11 days ago</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-control">
                                                    <label class="checkbox">
                                                        <input type="checkbox">
                                                        <span class="checkmark"></span>
                                                    </label>
                                                </div>
                                            </td>
                                            <td>OPM-Switch</td>
                                            <td>
                                                <div class="alert_notif_status error">Error</div>
                                            </td>
                                            <td>192.168.50.130</td>
                                            <td>HP Switch J8698A</td>
                                            <td>Switch</td>
                                            <td>Hewlett-Packard</td>
                                            <td>43</td>
                                            <td>11 days ago</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-control">
                                                    <label class="checkbox">
                                                        <input type="checkbox">
                                                        <span class="checkmark"></span>
                                                    </label>
                                                </div>
                                            </td>
                                            <td>OPM-Switch</td>
                                            <td>
                                                <div class="alert_notif_status error">Error</div>
                                            </td>
                                            <td>192.168.50.130</td>
                                            <td>HP Switch J8698A</td>
                                            <td>Switch</td>
                                            <td>Hewlett-Packard</td>
                                            <td>43</td>
                                            <td>11 days ago</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-control">
                                                    <label class="checkbox">
                                                        <input type="checkbox">
                                                        <span class="checkmark"></span>
                                                    </label>
                                                </div>
                                            </td>
                                            <td>OPM-Switch</td>
                                            <td>
                                                <div class="alert_notif_status error">Error</div>
                                            </td>
                                            <td>192.168.50.130</td>
                                            <td>HP Switch J8698A</td>
                                            <td>Switch</td>
                                            <td>Hewlett-Packard</td>
                                            <td>43</td>
                                            <td>11 days ago</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="table-bottom-control">
                                    <div class="display-setting">
                                        <div class="show-count">
                                            <div>1-15</div>
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
            </div>
            <div id="tab-1" class="tabs-content">
            </div>
        </main>
    </div>

<?php include "inc/system-info-popup.php"; ?>

<?php include "inc/footer.php"; ?>