<?php include "inc/head.php"; ?>

<div class="wrapper">
    <aside class="left-sidebar">
        <?php include "inc/sidebar.php"; ?>
    </aside>
    <main class="main-content">
        <div class="wrapper_tabs">
            <?php $tabs = ["Topology", "Device & Object List"]; ?>
            <?php include "inc/tabs-top.php"; ?>
        </div>
        <div id="tab-0" class="tabs-content current">
            <div class="card-group">
                <div class="left">
                    <div class="available_columns_block">
                        <h3 class="title">Available Devices</h3>
                        <form action="" class="search_input_form">
                            <input type="text" class="search_input" placeholder="Search organization">
                            <button class="search_input_btn">
                                <?php include "img/search_input_icon.svg"; ?>
                            </button>
                        </form>
                        <ul class="simple_links_list">
                            <li><a href="">Collectors</a></li>
                            <li><a href="">Sensor Hubs</a></li>
                            <li><a href="">Customer devices</a></li>
                            <li><a href="">Sensors</a></li>
                        </ul>
                        <div class="btn-wrap">
                            <a href="" class="btn btn-secondary">Add device</a>
                        </div>
                    </div>
                </div>
                <div class="right">
                    <div class="tabs">
                        <ul class="tab-header">
                            <li class="tab-header__item js-tab-trigger active" data-tabs="1">Map Name</li>
                            <li class="tab-header__item js-tab-trigger" data-tabs="2">Map Name</li>
                            <a href="#" class="add_new_map">
                                <div class="icon"><?php include "img/add_map.svg" ?></div>
                                Add new map
                            </a>
                        </ul>
                        <ul class="tab-content">
                            <li class="tab-content__item js-tab-content active" data-tabs="1">
                                <div class="map-box" id="map-box">
                                    <canvas id="map-1"></canvas>
                                    <img src="img/map-itm.png" id="map-itm-img">
                                    <img src="img/map-itm-main.png" id="map-itm-img-main">
                                    <img src="img/map-itm-big.png" id="map-itm-img-big">
                                    <div id="map-big-1" class="map-itm-content">
                                        <div class="icon"><?php include "img/computer-icon.svg"; ?></div>
                                        <div class="type">Computer</div>
                                        <ul>
                                            <li><span>IP:</span>10.35.32.45</li>
                                            <li><span>MAC:</span>225.225.255.225</li>
                                        </ul>
                                    </div>
                                    <div id="canvas-change" class="canvas-change">Change</div>
                                </div>
                            </li>
                            <li class="tab-content__item js-tab-content" data-tabs="2">

                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div id="tab-1" class="tabs-content">
            <div class="table_wrpr table-custom">
                <div class="table-top-title">
                    <h4>Report name</h4>
                </div>
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
                                <td><span class="t-status success">Success</span></td>
                                <td>172.21.2.101</td>
                                <td>ESXServer</td>
                                <td>Server</td>
                                <td>VMware</td>
                                <td>0</td>
                                <td><span class="period">5 days ago</span></td>
                            </tr>
                        <?php endfor; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </main>
</div>

<div class="html_popups">
    <div class="popup_wrpr operations_popup new-device">
        <div class="popup_wrpr_inner">
            <div class="popup">
                <a href="" class="close_popup_btn">
                    <?php include "img/close_icon.svg" ?>
                </a>
                <h4 class="lg-title">Node Status Only</h4>
                <p class="sm-descr">Only ICMP Status</p>
                <form>
                    <div class="form-control">
                        <label class="form-label">Set IP Address</label>
                        <input type="text" class="control">
                        <p class="control-descr">Please allow ICMPv4 from the node firewall settings</p>
                    </div>
                    <h2 class="big-title">SNMP Enabled Nodes</h2>
                    <div class="form-control">
                        <label class="form-label">Set IP Address</label>
                        <input type="text" class="control">
                    </div>
                    <div class="form-control">
                        <label class="form-label">Status</label>
                        <div class="select">
                            <select>
                                <option value="1">v1</option>
                                <option value="2">v2</option>
                                <option value="3">v3</option>
                                <option value="4">v4</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-control sm-control">
                        <label class="form-label">SNMP Port</label>
                        <input type="text" class="control" placeholder="161">
                    </div>
                    <div class="form-control">
                        <div class="control-with-icon">
                            <div class="control-icon"><?php include "img/user-icon.svg"; ?></div>
                            <input type="text" class="control" placeholder="Login">
                        </div>
                    </div>
                    <div class="form-control">
                        <div class="control-with-icon">
                            <div class="control-icon"><?php include "img/unlock-icon.svg"; ?></div>
                            <input type="password" class="control control-password" placeholder="Password">
                            <div class="change-control-type"><?php include "img/eye-icon.svg"; ?></div>
                        </div>
                    </div>
                    <div class="group-title">
                        <h2 class="big-title">WMI Enables Nodes</h2>
                        <p class="sm-descr">For Microsoft Windows nodes</p>
                    </div>
                    <div class="form-control">
                        <label class="form-label">Set IP Address</label>
                        <input type="text" class="control" placeholder="Enter name">
                    </div>
                    <div class="form-control">
                        <div class="control-with-icon">
                            <div class="control-icon"><?php include "img/user-icon.svg"; ?></div>
                            <input type="text" class="control" placeholder="Login">
                        </div>
                    </div>
                    <div class="form-control">
                        <div class="control-with-icon">
                            <div class="control-icon"><?php include "img/unlock-icon.svg"; ?></div>
                            <input type="password" class="control control-password" placeholder="Password">
                            <div class="change-control-type"><?php include "img/eye-icon.svg"; ?></div>
                        </div>
                    </div>
                </form>
                <div class="btn-wrap">
                    <a href="" class="btn btn-primary">
                        Test the connectivity
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="in_html">
    <?php include "inc/system-info-popup-5.php"; ?>
</div>

<?php include "inc/footer.php"; ?>