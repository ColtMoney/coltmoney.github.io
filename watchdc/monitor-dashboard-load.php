<?php include "inc/head.php"; ?>

    <div class="wrapper">
        <aside class="left-sidebar">
			<?php include "inc/sidebar.php"; ?>
        </aside>
        <main class="main-content">

            <div class="wrapper_tabs">
				<?php $tabs = [ "Data Center Related", "System & Networks Related", "Environment Related" ]; ?>
				<?php include "inc/tabs-top.php"; ?>

                <div class="wrapper_icon">
                    <a href="#" class="btn_icon_only">
						<?php include "img/editor-form.svg" ?>
                    </a>
                    <a href="#" class="btn_icon_only">
						<?php include "img/plus_top.svg" ?>
                    </a>
                </div>
            </div>

            <div id="tab-0" class="tabs-content current">
                <div class="row">
                    <div class="col-50">
                        <div class="module-box">
                            <div class="header-box">
                                <h3 class="title">Data Center Health</h3>
                            </div>
                            <div class="body-box">
                                <div class="wrapper">
                                    <ul class="legend-list">
                                        <li>
                                            <span class="circle color_1"></span>
                                            <span class="text">Systems & Networks Health</span>
                                        </li>
                                        <li>
                                            <span class="circle color_2"></span>
                                            <span class="text">Environmental Health</span>
                                        </li>
                                    </ul>
                                    <div class="percentage">
                                        <img src="img/percentage.svg" alt="">
                                    </div>
                                </div>
                                <div class="chart">
                                    <img src="img/bubble-chart.svg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-50">
                        <div class="module-box">
                            <div class="header-box">
                                <h3 class="title">Data Center Performance</h3>
                            </div>
                            <div class="body-box">
                                <div class="wrapper">
                                    <ul class="legend-list">
                                        <li>
                                            <span class="circle color_1"></span>
                                            <span class="text">Systems & Networks Health</span>
                                        </li>
                                        <li>
                                            <span class="circle color_2"></span>
                                            <span class="text">Environmental Health</span>
                                        </li>
                                    </ul>
                                    <div class="percentage">
                                        <img src="img/percentage_2.svg" alt="">
                                    </div>
                                </div>
                                <div class="chart">
                                    <img src="img/bubble-chart.svg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-40">
                        <div class="module-box no_padding">
                            <div class="body-box">
								<?php include "inc/zoom-block.php"; ?>
                                <div class="chart">
                                    <img src="img/topology.svg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-60">
                        <div class="module-box module-box_bg">
                            <div class="header-box">
                                <h3 class="title">Data Center Related <span>All Alerts (1339)</span></h3>
                                <div class="wrapper_icon">
                                    <a href="#" class="btn_icon_only">
										<?php include "img/fullscreen.svg" ?>
                                    </a>
                                </div>
                            </div>
                            <div class="body-box">
                                <div class="tabs">
                                    <ul class="tab-header">
                                        <li class="tab-header__item js-tab-trigger active" data-tabs="1">All (1339)</li>
                                        <li class="tab-header__item js-tab-trigger" data-tabs="2">Critical <span
                                                    class="critical">(839)</span></li>
                                        <li class="tab-header__item js-tab-trigger" data-tabs="3">Warning <span
                                                    class="warning">(85)</span></li>
                                        <li class="tab-header__item js-tab-trigger" data-tabs="4">Informational <span
                                                    class="informational">(415)</span></li>
                                    </ul>

                                    <ul class="tab-content">
                                        <li class="tab-content__item js-tab-content active" data-tabs="1">
                                            <div class="overflow_auto">
                                                <div class="module-table">
                                                    <div class="item_table critical">
                                                        <div class="left">
                                                            <h4 class="title">HP NC553i Dual Port FlexFabric 10Gb
                                                                Converged
                                                                Network
                                                                Adapter-Local Area Connection
                                                            </h4>
                                                            <div class="wrap_item">
                                                                <div class="item">
                                                                    <div class="label">Time</div>
                                                                    <div class="date">10.12.2020
                                                                        <span class="time">10:25</span>
                                                                        <span class="ago">5 min ago</span>
                                                                    </div>
                                                                </div>
                                                                <div class="item">
                                                                    <div class="label">Device</div>
                                                                    <div class="device">Device name</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="right">
                                                            <div class="alert_notif_status error">Error</div>
                                                        </div>
                                                    </div>
                                                    <div class="item_table critical">
                                                        <div class="left">
                                                            <h4 class="title">HP NC553i Dual Port FlexFabric 10Gb
                                                                Converged
                                                                Network
                                                                Adapter-Local Area Connection
                                                            </h4>
                                                            <div class="wrap_item">
                                                                <div class="item">
                                                                    <div class="label">Time</div>
                                                                    <div class="date">10.12.2020
                                                                        <span class="time">10:25</span>
                                                                        <span class="ago">5 min ago</span>
                                                                    </div>
                                                                </div>
                                                                <div class="item">
                                                                    <div class="label">Device</div>
                                                                    <div class="device">Device name</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="right">
                                                            <div class="alert_notif_status error">Error</div>
                                                        </div>
                                                    </div>
                                                    <div class="item_table critical">
                                                        <div class="left">
                                                            <h4 class="title">HP NC553i Dual Port FlexFabric 10Gb
                                                                Converged
                                                                Network
                                                                Adapter-Local Area Connection
                                                            </h4>
                                                            <div class="wrap_item">
                                                                <div class="item">
                                                                    <div class="label">Time</div>
                                                                    <div class="date">10.12.2020
                                                                        <span class="time">10:25</span>
                                                                        <span class="ago">5 min ago</span>
                                                                    </div>
                                                                </div>
                                                                <div class="item">
                                                                    <div class="label">Device</div>
                                                                    <div class="device">Device name</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="right">
                                                            <div class="alert_notif_status error">Error</div>
                                                        </div>
                                                    </div>
                                                    <div class="item_table critical">
                                                        <div class="left">
                                                            <h4 class="title">HP NC553i Dual Port FlexFabric 10Gb
                                                                Converged
                                                                Network
                                                                Adapter-Local Area Connection
                                                            </h4>
                                                            <div class="wrap_item">
                                                                <div class="item">
                                                                    <div class="label">Time</div>
                                                                    <div class="date">10.12.2020
                                                                        <span class="time">10:25</span>
                                                                        <span class="ago">5 min ago</span>
                                                                    </div>
                                                                </div>
                                                                <div class="item">
                                                                    <div class="label">Device</div>
                                                                    <div class="device">Device name</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="right">
                                                            <div class="alert_notif_status error">Error</div>
                                                        </div>
                                                    </div>
                                                    <div class="item_table critical">
                                                        <div class="left">
                                                            <h4 class="title">HP NC553i Dual Port FlexFabric 10Gb
                                                                Converged
                                                                Network
                                                                Adapter-Local Area Connection
                                                            </h4>
                                                            <div class="wrap_item">
                                                                <div class="item">
                                                                    <div class="label">Time</div>
                                                                    <div class="date">10.12.2020
                                                                        <span class="time">10:25</span>
                                                                        <span class="ago">5 min ago</span>
                                                                    </div>
                                                                </div>
                                                                <div class="item">
                                                                    <div class="label">Device</div>
                                                                    <div class="device">Device name</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="right">
                                                            <div class="alert_notif_status error">Error</div>
                                                        </div>
                                                    </div>
                                                    <div class="item_table critical">
                                                        <div class="left">
                                                            <h4 class="title">HP NC553i Dual Port FlexFabric 10Gb
                                                                Converged
                                                                Network
                                                                Adapter-Local Area Connection
                                                            </h4>
                                                            <div class="wrap_item">
                                                                <div class="item">
                                                                    <div class="label">Time</div>
                                                                    <div class="date">10.12.2020
                                                                        <span class="time">10:25</span>
                                                                        <span class="ago">5 min ago</span>
                                                                    </div>
                                                                </div>
                                                                <div class="item">
                                                                    <div class="label">Device</div>
                                                                    <div class="device">Device name</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="right">
                                                            <div class="alert_notif_status error">Error</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="tab-content__item js-tab-content" data-tabs="2">
                                            <div class="overflow_auto">
                                                <div class="module-table">
                                                    <div class="item_table critical">
                                                        <div class="left">
                                                            <h4 class="title">HP NC553i Dual Port FlexFabric 10Gb
                                                                Converged
                                                                Network
                                                                Adapter-Local Area Connection
                                                            </h4>
                                                            <div class="wrap_item">
                                                                <div class="item">
                                                                    <div class="label">Time</div>
                                                                    <div class="date">10.12.2020
                                                                        <span class="time">10:25</span>
                                                                        <span class="ago">5 min ago</span>
                                                                    </div>
                                                                </div>
                                                                <div class="item">
                                                                    <div class="label">Device</div>
                                                                    <div class="device">Device name</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="right">
                                                            <div class="alert_notif_status error">Error</div>
                                                        </div>
                                                    </div>
                                                    <div class="item_table critical">
                                                        <div class="left">
                                                            <h4 class="title">HP NC553i Dual Port FlexFabric 10Gb
                                                                Converged
                                                                Network
                                                                Adapter-Local Area Connection
                                                            </h4>
                                                            <div class="wrap_item">
                                                                <div class="item">
                                                                    <div class="label">Time</div>
                                                                    <div class="date">10.12.2020
                                                                        <span class="time">10:25</span>
                                                                        <span class="ago">5 min ago</span>
                                                                    </div>
                                                                </div>
                                                                <div class="item">
                                                                    <div class="label">Device</div>
                                                                    <div class="device">Device name</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="right">
                                                            <div class="alert_notif_status error">Error</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="tab-content__item js-tab-content" data-tabs="3">
                                            <div class="overflow_auto">
                                                <div class="module-table">
                                                    <div class="item_table critical">
                                                        <div class="left">
                                                            <h4 class="title">HP NC553i Dual Port FlexFabric 10Gb
                                                                Converged
                                                                Network
                                                                Adapter-Local Area Connection
                                                            </h4>
                                                            <div class="wrap_item">
                                                                <div class="item">
                                                                    <div class="label">Time</div>
                                                                    <div class="date">10.12.2020
                                                                        <span class="time">10:25</span>
                                                                        <span class="ago">5 min ago</span>
                                                                    </div>
                                                                </div>
                                                                <div class="item">
                                                                    <div class="label">Device</div>
                                                                    <div class="device">Device name</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="right">
                                                            <div class="alert_notif_status error">Error</div>
                                                        </div>
                                                    </div>
                                                    <div class="item_table critical">
                                                        <div class="left">
                                                            <h4 class="title">HP NC553i Dual Port FlexFabric 10Gb
                                                                Converged
                                                                Network
                                                                Adapter-Local Area Connection
                                                            </h4>
                                                            <div class="wrap_item">
                                                                <div class="item">
                                                                    <div class="label">Time</div>
                                                                    <div class="date">10.12.2020
                                                                        <span class="time">10:25</span>
                                                                        <span class="ago">5 min ago</span>
                                                                    </div>
                                                                </div>
                                                                <div class="item">
                                                                    <div class="label">Device</div>
                                                                    <div class="device">Device name</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="right">
                                                            <div class="alert_notif_status error">Error</div>
                                                        </div>
                                                    </div>
                                                    <div class="item_table critical">
                                                        <div class="left">
                                                            <h4 class="title">HP NC553i Dual Port FlexFabric 10Gb
                                                                Converged
                                                                Network
                                                                Adapter-Local Area Connection
                                                            </h4>
                                                            <div class="wrap_item">
                                                                <div class="item">
                                                                    <div class="label">Time</div>
                                                                    <div class="date">10.12.2020
                                                                        <span class="time">10:25</span>
                                                                        <span class="ago">5 min ago</span>
                                                                    </div>
                                                                </div>
                                                                <div class="item">
                                                                    <div class="label">Device</div>
                                                                    <div class="device">Device name</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="right">
                                                            <div class="alert_notif_status error">Error</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="tab-content__item js-tab-content" data-tabs="4">
                                            <div class="overflow_auto">
                                                <div class="module-table">
                                                    <div class="item_table critical">
                                                        <div class="left">
                                                            <h4 class="title">HP NC553i Dual Port FlexFabric 10Gb
                                                                Converged
                                                                Network
                                                                Adapter-Local Area Connection
                                                            </h4>
                                                            <div class="wrap_item">
                                                                <div class="item">
                                                                    <div class="label">Time</div>
                                                                    <div class="date">10.12.2020
                                                                        <span class="time">10:25</span>
                                                                        <span class="ago">5 min ago</span>
                                                                    </div>
                                                                </div>
                                                                <div class="item">
                                                                    <div class="label">Device</div>
                                                                    <div class="device">Device name</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="right">
                                                            <div class="alert_notif_status error">Error</div>
                                                        </div>
                                                    </div>
                                                    <div class="item_table critical">
                                                        <div class="left">
                                                            <h4 class="title">HP NC553i Dual Port FlexFabric 10Gb
                                                                Converged
                                                                Network
                                                                Adapter-Local Area Connection
                                                            </h4>
                                                            <div class="wrap_item">
                                                                <div class="item">
                                                                    <div class="label">Time</div>
                                                                    <div class="date">10.12.2020
                                                                        <span class="time">10:25</span>
                                                                        <span class="ago">5 min ago</span>
                                                                    </div>
                                                                </div>
                                                                <div class="item">
                                                                    <div class="label">Device</div>
                                                                    <div class="device">Device name</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="right">
                                                            <div class="alert_notif_status error">Error</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="tab-1" class="tabs-content">
                <div class="row">
                    <div class="col-40">
                        <div class="module-box module-box_1">
                            <div class="header-box">
                                <h3 class="title">Devices by CPU Utilization</h3>
                                <div class="wrapper_icon">
                                    <a href="#" class="btn_icon_only">
										<?php include "img/fullscreen.svg" ?>
                                    </a>
                                    <a href="#" class="btn_icon_only">
										<?php include "img/reload.svg" ?>
                                    </a>
                                </div>
                            </div>
                            <div class="body-box">
                                <div class="chart">
                                    <img src="img/area-chart-negative-values.svg" alt="">
                                </div>
                                <div class="wrap_device_table overflow_auto">
                                    <table class="device_table">
                                        <thead>
                                        <tr>
                                            <td>Device name</td>
                                            <td>Min</td>
                                            <td>Max</td>
                                            <td>Avg</td>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>OPM-Server25</td>
                                            <td>99</td>
                                            <td>99</td>
                                            <td><img src="img/good.svg" alt=""></td>
                                        </tr>
                                        <tr>
                                            <td>OPM-Server25</td>
                                            <td>99</td>
                                            <td>99</td>
                                            <td><img src="img/good.svg" alt=""></td>
                                        </tr>
                                        <tr>
                                            <td>OPM-Server25</td>
                                            <td>99</td>
                                            <td>99</td>
                                            <td><img src="img/low.svg" alt=""></td>
                                        </tr>
                                        <tr>
                                            <td>OPM-Server25</td>
                                            <td>99</td>
                                            <td>99</td>
                                            <td><img src="img/good.svg" alt=""></td>
                                        </tr>
                                        <tr>
                                            <td>OPM-Server25</td>
                                            <td>99</td>
                                            <td>99</td>
                                            <td><img src="img/good.svg" alt=""></td>
                                        </tr>
                                        <tr>
                                            <td>OPM-Server25</td>
                                            <td>99</td>
                                            <td>99</td>
                                            <td><img src="img/middle.svg" alt=""></td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="module-box module-box_1">
                            <div class="header-box">
                                <h3 class="title">Devices by Memory Utilization</h3>
                                <div class="wrapper_icon">
                                    <a href="#" class="btn_icon_only">
										<?php include "img/fullscreen.svg" ?>
                                    </a>
                                    <a href="#" class="btn_icon_only">
										<?php include "img/refresh.svg" ?>
                                    </a>
                                </div>
                            </div>
                            <div class="body-box">
                                <div class="chart">
                                    <img src="img/area-chart-negative-values.svg" alt="">
                                </div>
                                <div class="wrap_device_table overflow_auto">
                                    <table class="device_table">
                                        <thead>
                                        <tr>
                                            <td>Device name</td>
                                            <td>Min</td>
                                            <td>Max</td>
                                            <td>Avg</td>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>OPM-Server25</td>
                                            <td>99</td>
                                            <td>99</td>
                                            <td><img src="img/low.svg" alt=""></td>
                                        </tr>
                                        <tr>
                                            <td>OPM-Server25</td>
                                            <td>99</td>
                                            <td>99</td>
                                            <td><img src="img/middle.svg" alt=""></td>
                                        </tr>
                                        <tr>
                                            <td>OPM-Server25</td>
                                            <td>99</td>
                                            <td>99</td>
                                            <td><img src="img/low.svg" alt=""></td>
                                        </tr>
                                        <tr>
                                            <td>OPM-Server25</td>
                                            <td>99</td>
                                            <td>99</td>
                                            <td><img src="img/good.svg" alt=""></td>
                                        </tr>
                                        <tr>
                                            <td>OPM-Server25</td>
                                            <td>99</td>
                                            <td>99</td>
                                            <td><img src="img/middle.svg" alt=""></td>
                                        </tr>
                                        <tr>
                                            <td>OPM-Server25</td>
                                            <td>99</td>
                                            <td>99</td>
                                            <td><img src="img/good.svg" alt=""></td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-60">
                        <div class="module-box">
                            <div class="header-box">
                                <h3 class="title">Devices by Disk Utilization</h3>
                                <div class="wrapper_icon">
                                    <a href="#" class="btn_icon_only">
										<?php include "img/fullscreen.svg" ?>
                                    </a>
                                    <a href="#" class="btn_icon_only">
										<?php include "img/reload.svg" ?>
                                    </a>
                                </div>
                            </div>
                            <div class="body-box">

                                <div class="table_utilization">
                                    <div class="left">
                                        <div class="row_devices">
                                            <div class="item">
                                                <div class="title">Used (Compressed)</div>
                                                <div class="info">5.9 Gb <span>(75.9 Mb)</span></div>
                                            </div>
                                            <div class="item">
                                                <div class="title">Available</div>
                                                <div class="info">1.9 Gb</div>
                                            </div>
                                            <div class="item">
                                                <div class="title">Allocated</div>
                                                <div class="info">14.4 Gb <span>/ 21.3 Gb</span></div>
                                            </div>
                                            <div class="item">
                                                <div class="title">Cached</div>
                                                <div class="info">958 Mb</div>
                                            </div>
                                            <div class="item">
                                                <div class="title">Total memory</div>
                                                <div class="info">8 Gb</div>
                                            </div>
                                        </div>
                                        <div class="row_devices">
                                            <div class="item">
                                                <div class="title">Speed</div>
                                                <div class="info">2 667 MHz</div>
                                            </div>
                                            <div class="item">
                                                <div class="title">Used Nests</div>
                                                <div class="info">1 <span>/ 2</span></div>
                                            </div>
                                            <div class="item">
                                                <div class="title">Form Factor</div>
                                                <div class="info">SODIMM</div>
                                            </div>
                                            <div class="item">
                                                <div class="title">Hardware Reserved</div>
                                                <div class="info">185 Mb</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="right">
                                        <div class="in-progress">
											<?php include "img/in-progress.svg" ?>
                                        </div>
                                    </div>
                                </div>

                                <div class="overflow_auto">
                                    <table class="device_table device_table_2">
                                        <thead>
                                        <tr>
                                            <td>Device name</td>
                                            <td>Memory</td>
                                            <td>Size</td>
                                            <td>Type</td>
                                            <td>Protection</td>
                                            <td>Compressed</td>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>OPM-Server25</td>
                                            <td>112 Kb</td>
                                            <td>112 Kb</td>
                                            <td>set</td>
                                            <td>public</td>
                                            <td>false</td>
                                        </tr>
                                        <tr>
                                            <td>OPM-Server25</td>
                                            <td>112 Kb</td>
                                            <td>112 Kb</td>
                                            <td>set</td>
                                            <td>public</td>
                                            <td>false</td>
                                        </tr>
                                        <tr>
                                            <td>OPM-Server25</td>
                                            <td>112 Kb</td>
                                            <td>112 Kb</td>
                                            <td>set</td>
                                            <td>public</td>
                                            <td>false</td>
                                        </tr>
                                        <tr>
                                            <td>OPM-Server25</td>
                                            <td>112 Kb</td>
                                            <td>112 Kb</td>
                                            <td>set</td>
                                            <td>public</td>
                                            <td>false</td>
                                        </tr>
                                        <tr>
                                            <td>OPM-Server25</td>
                                            <td>112 Kb</td>
                                            <td>112 Kb</td>
                                            <td>set</td>
                                            <td>public</td>
                                            <td>false</td>
                                        </tr>
                                        <tr>
                                            <td>OPM-Server25</td>
                                            <td>112 Kb</td>
                                            <td>112 Kb</td>
                                            <td>set</td>
                                            <td>public</td>
                                            <td>false</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="module-box module-box_1">
                            <div class="header-box">
                                <h3 class="title">Top Interfaces by Bandwidth Utilization</h3>
                                <div class="wrapper_icon">
                                    <a href="#" class="btn_icon_only">
										<?php include "img/fullscreen.svg" ?>
                                    </a>
                                    <a href="#" class="btn_icon_only">
										<?php include "img/reload.svg" ?>
                                    </a>
                                </div>
                            </div>
                            <div class="body-box">
                                <div class="overflow_auto">
                                    <table class="device_table device_table_3">
                                        <thead>
                                        <tr>
                                            <td>Device name</td>
                                            <td>Receive</td>
                                            <td>Transmit</td>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>
                                                <span class="title">HP NC553i Dual Port FlexFabric 10Gb Converged Network Adapter-Local Area Connection</span>
                                                <span class="sub_title">OPM-Server15</span>
                                            </td>
                                            <td>0.47 $</td>
                                            <td>0.04 %</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="title">HP NC553i Dual Port FlexFabric 10Gb Converged Network Adapter-Local Area Connection</span>
                                                <span class="sub_title">OPM-Server15</span>
                                            </td>
                                            <td>0.47 $</td>
                                            <td>0.04 %</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="title">HP NC553i Dual Port FlexFabric 10Gb Converged Network Adapter-Local Area Connection</span>
                                                <span class="sub_title">OPM-Server15</span>
                                            </td>
                                            <td>0.47 $</td>
                                            <td>0.04 %</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="title">HP NC553i Dual Port FlexFabric 10Gb Converged Network Adapter-Local Area Connection</span>
                                                <span class="sub_title">OPM-Server15</span>
                                            </td>
                                            <td>0.47 $</td>
                                            <td>0.04 %</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="title">HP NC553i Dual Port FlexFabric 10Gb Converged Network Adapter-Local Area Connection</span>
                                                <span class="sub_title">OPM-Server15</span>
                                            </td>
                                            <td>0.47 $</td>
                                            <td>0.04 %</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="title">HP NC553i Dual Port FlexFabric 10Gb Converged Network Adapter-Local Area Connection</span>
                                                <span class="sub_title">OPM-Server15</span>
                                            </td>
                                            <td>0.47 $</td>
                                            <td>0.04 %</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="tab-2" class="tabs-content">
                <div class="row">
                    <div class="col-63">
                        <div class="module-card">
                            <div class="card card_1">
                                <div class="left">
                                    <div class="chart">
                                        <img src="img/in-progress-2.svg" alt="">
                                    </div>
                                </div>
                                <div class="right">
                                    <div class="title">Sensors Summary</div>
                                    <div class="legend">
                                        <div class="item">
                                            <div class="color color_1"></div>
                                            <div class="label">Live</div>
                                        </div>
                                        <div class="item">
                                            <div class="color color_2"></div>
                                            <div class="label">Dead</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card card_2">
                                <div class="wrap_top">
                                    <div class="title">Query time</div>
                                    <div class="hour">1 h</div>
                                </div>
                                <div class="wrap_bottom">
                                    <div class="time">15.42 <span>ms</span></div>
                                </div>
                            </div>
                            <div class="card card_2">
                                <div class="wrap_top">
                                    <div class="title">Throughput</div>
                                    <div class="hour">1 h</div>
                                </div>
                                <div class="wrap_bottom">
                                    <div class="time">153 <span>m</span></div>
                                </div>
                            </div>
                        </div>
                        <div class="module-box module-box_1">
                            <div class="header-box">
                                <h3 class="title">Top Sensors</h3>
                                <div class="wrapper_icon">
                                    <a href="#" class="btn_icon_only">
										<?php include "img/reload.svg" ?>
                                    </a>
                                </div>
                            </div>
                            <div class="body-box">
                                <div class="overflow_auto">
                                    <table class="device_table device_table_3 device_table_4">
                                        <thead>
                                        <tr>
                                            <td>
                                                <a href="#">
													<?php include "img/organization_icon_2.svg" ?>
                                                </a>
                                            </td>
                                            <td>Sensor name</td>
                                            <td>Alerts</td>
                                            <td>Breakdowns</td>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>
                                                <div class="wrap_img">
                                                    <img src="img/organization_logo.jpg" alt="">
                                                </div>
                                            </td>
                                            <td>
                                                <span class="title">HP NC553i Dual Port FlexFabric 10Gb Converged Network Adapter-Local Area Connection</span>
                                                <span class="sub_title">OPM-Server15</span>
                                            </td>
                                            <td>150</td>
                                            <td>32</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="wrap_img">
                                                    <img src="img/organization_logo.jpg" alt="">
                                                </div>
                                            </td>
                                            <td>
                                                <span class="title">HP NC553i Dual Port FlexFabric 10Gb Converged Network Adapter-Local Area Connection</span>
                                                <span class="sub_title">OPM-Server15</span>
                                            </td>
                                            <td>150</td>
                                            <td>32</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="wrap_img">
                                                    <img src="img/organization_logo.jpg" alt="">
                                                </div>
                                            </td>
                                            <td>
                                                <span class="title">HP NC553i Dual Port FlexFabric 10Gb Converged Network Adapter-Local Area Connection</span>
                                                <span class="sub_title">OPM-Server15</span>
                                            </td>
                                            <td>150</td>
                                            <td>32</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="wrap_img">
                                                    <img src="img/organization_logo.jpg" alt="">
                                                </div>
                                            </td>
                                            <td>
                                                <span class="title">HP NC553i Dual Port FlexFabric 10Gb Converged Network Adapter-Local Area Connection</span>
                                                <span class="sub_title">OPM-Server15</span>
                                            </td>
                                            <td>150</td>
                                            <td>32</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="wrap_img">
                                                    <img src="img/organization_logo.jpg" alt="">
                                                </div>
                                            </td>
                                            <td>
                                                <span class="title">HP NC553i Dual Port FlexFabric 10Gb Converged Network Adapter-Local Area Connection</span>
                                                <span class="sub_title">OPM-Server15</span>
                                            </td>
                                            <td>150</td>
                                            <td>32</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="wrap_img">
                                                    <img src="img/organization_logo.jpg" alt="">
                                                </div>
                                            </td>
                                            <td>
                                                <span class="title">HP NC553i Dual Port FlexFabric 10Gb Converged Network Adapter-Local Area Connection</span>
                                                <span class="sub_title">OPM-Server15</span>
                                            </td>
                                            <td>150</td>
                                            <td>32</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-37">
                        <div class="module-box module-box_bg">
                            <div class="header-box">
                                <h3 class="title">Data Center Related <span>All Alerts (1339)</span></h3>
                            </div>
                            <div class="body-box">
                                <div class="tabs">
                                    <ul class="tab-header">
                                        <li class="tab-header__item js-tab-trigger active" data-tabs="1">All (1339)</li>
                                        <li class="tab-header__item js-tab-trigger" data-tabs="2">Critical <span
                                                    class="critical">(839)</span></li>
                                        <li class="tab-header__item js-tab-trigger" data-tabs="3">Warning <span
                                                    class="warning">(85)</span></li>
                                        <li class="tab-header__item js-tab-trigger" data-tabs="4">Informational <span
                                                    class="informational">(415)</span></li>
                                    </ul>

                                    <ul class="tab-content">
                                        <li class="tab-content__item js-tab-content active" data-tabs="1">
                                            <div class="overflow_auto">
                                                <div class="module-table">
                                                    <div class="item_table critical">
                                                        <div class="left">
                                                            <h4 class="title">Alert me when a transaction step goes
                                                                into...
                                                            </h4>
                                                            <div class="wrap_item">
                                                                <div class="item">
                                                                    <div class="label">Time</div>
                                                                    <div class="date">10.12.2020
                                                                        <span class="time">10:25</span>
                                                                        <span class="ago">5 min ago</span>
                                                                    </div>
                                                                </div>
                                                                <div class="item">
                                                                    <div class="label">Device</div>
                                                                    <div class="device">Device name</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="right">
                                                            <div class="alert_notif_status error">Error</div>
                                                        </div>
                                                    </div>
                                                    <div class="item_table critical">
                                                        <div class="left">
                                                            <h4 class="title">Alert me when a transaction step goes
                                                                into...
                                                            </h4>
                                                            <div class="wrap_item">
                                                                <div class="item">
                                                                    <div class="label">Time</div>
                                                                    <div class="date">10.12.2020
                                                                        <span class="time">10:25</span>
                                                                        <span class="ago">5 min ago</span>
                                                                    </div>
                                                                </div>
                                                                <div class="item">
                                                                    <div class="label">Device</div>
                                                                    <div class="device">Device name</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="right">
                                                            <div class="alert_notif_status error">Error</div>
                                                        </div>
                                                    </div>
                                                    <div class="item_table critical">
                                                        <div class="left">
                                                            <h4 class="title">Alert me when a transaction step goes
                                                                into...
                                                            </h4>
                                                            <div class="wrap_item">
                                                                <div class="item">
                                                                    <div class="label">Time</div>
                                                                    <div class="date">10.12.2020
                                                                        <span class="time">10:25</span>
                                                                        <span class="ago">5 min ago</span>
                                                                    </div>
                                                                </div>
                                                                <div class="item">
                                                                    <div class="label">Device</div>
                                                                    <div class="device">Device name</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="right">
                                                            <div class="alert_notif_status error">Error</div>
                                                        </div>
                                                    </div>
                                                    <div class="item_table critical">
                                                        <div class="left">
                                                            <h4 class="title">Alert me when a transaction step goes
                                                                into...
                                                            </h4>
                                                            <div class="wrap_item">
                                                                <div class="item">
                                                                    <div class="label">Time</div>
                                                                    <div class="date">10.12.2020
                                                                        <span class="time">10:25</span>
                                                                        <span class="ago">5 min ago</span>
                                                                    </div>
                                                                </div>
                                                                <div class="item">
                                                                    <div class="label">Device</div>
                                                                    <div class="device">Device name</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="right">
                                                            <div class="alert_notif_status error">Error</div>
                                                        </div>
                                                    </div>
                                                    <div class="item_table critical">
                                                        <div class="left">
                                                            <h4 class="title">Alert me when a transaction step goes
                                                                into...
                                                            </h4>
                                                            <div class="wrap_item">
                                                                <div class="item">
                                                                    <div class="label">Time</div>
                                                                    <div class="date">10.12.2020
                                                                        <span class="time">10:25</span>
                                                                        <span class="ago">5 min ago</span>
                                                                    </div>
                                                                </div>
                                                                <div class="item">
                                                                    <div class="label">Device</div>
                                                                    <div class="device">Device name</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="right">
                                                            <div class="alert_notif_status error">Error</div>
                                                        </div>
                                                    </div>
                                                    <div class="item_table critical">
                                                        <div class="left">
                                                            <h4 class="title">Alert me when a transaction step goes
                                                                into...
                                                            </h4>
                                                            <div class="wrap_item">
                                                                <div class="item">
                                                                    <div class="label">Time</div>
                                                                    <div class="date">10.12.2020
                                                                        <span class="time">10:25</span>
                                                                        <span class="ago">5 min ago</span>
                                                                    </div>
                                                                </div>
                                                                <div class="item">
                                                                    <div class="label">Device</div>
                                                                    <div class="device">Device name</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="right">
                                                            <div class="alert_notif_status error">Error</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="tab-content__item js-tab-content" data-tabs="2">
                                            <div class="overflow_auto">
                                                <div class="module-table">
                                                    <div class="item_table">
                                                        <div class="left">
                                                            <h4 class="title">Alert me when a transaction step goes
                                                                into...
                                                            </h4>
                                                            <div class="wrap_item">
                                                                <div class="item">
                                                                    <div class="label">Time</div>
                                                                    <div class="date">10.12.2020
                                                                        <span class="time">10:25</span>
                                                                        <span class="ago">5 min ago</span>
                                                                    </div>
                                                                </div>
                                                                <div class="item">
                                                                    <div class="label">Device</div>
                                                                    <div class="device">Device name</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="right">
                                                            <div class="alert_notif_status error">Error</div>
                                                        </div>
                                                    </div>
                                                    <div class="item_table">
                                                        <div class="left">
                                                            <h4 class="title">Alert me when a transaction step goes
                                                                into...
                                                            </h4>
                                                            <div class="wrap_item">
                                                                <div class="item">
                                                                    <div class="label">Time</div>
                                                                    <div class="date">10.12.2020
                                                                        <span class="time">10:25</span>
                                                                        <span class="ago">5 min ago</span>
                                                                    </div>
                                                                </div>
                                                                <div class="item">
                                                                    <div class="label">Device</div>
                                                                    <div class="device">Device name</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="right">
                                                            <div class="alert_notif_status error">Error</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="tab-content__item js-tab-content" data-tabs="3">
                                            <div class="overflow_auto">
                                                <div class="module-table">
                                                    <div class="item_table">
                                                        <div class="left">
                                                            <h4 class="title">Alert me when a transaction step goes
                                                                into...
                                                            </h4>
                                                            <div class="wrap_item">
                                                                <div class="item">
                                                                    <div class="label">Time</div>
                                                                    <div class="date">10.12.2020
                                                                        <span class="time">10:25</span>
                                                                        <span class="ago">5 min ago</span>
                                                                    </div>
                                                                </div>
                                                                <div class="item">
                                                                    <div class="label">Device</div>
                                                                    <div class="device">Device name</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="right">
                                                            <div class="alert_notif_status error">Error</div>
                                                        </div>
                                                    </div>
                                                    <div class="item_table">
                                                        <div class="left">
                                                            <h4 class="title">Alert me when a transaction step goes
                                                                into...
                                                            </h4>
                                                            <div class="wrap_item">
                                                                <div class="item">
                                                                    <div class="label">Time</div>
                                                                    <div class="date">10.12.2020
                                                                        <span class="time">10:25</span>
                                                                        <span class="ago">5 min ago</span>
                                                                    </div>
                                                                </div>
                                                                <div class="item">
                                                                    <div class="label">Device</div>
                                                                    <div class="device">Device name</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="right">
                                                            <div class="alert_notif_status error">Error</div>
                                                        </div>
                                                    </div>
                                                    <div class="item_table">
                                                        <div class="left">
                                                            <h4 class="title">Alert me when a transaction step goes
                                                                into...
                                                            </h4>
                                                            <div class="wrap_item">
                                                                <div class="item">
                                                                    <div class="label">Time</div>
                                                                    <div class="date">10.12.2020
                                                                        <span class="time">10:25</span>
                                                                        <span class="ago">5 min ago</span>
                                                                    </div>
                                                                </div>
                                                                <div class="item">
                                                                    <div class="label">Device</div>
                                                                    <div class="device">Device name</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="right">
                                                            <div class="alert_notif_status error">Error</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="tab-content__item js-tab-content" data-tabs="4">
                                            <div class="overflow_auto">
                                                <div class="module-table">
                                                    <div class="item_table">
                                                        <div class="left">
                                                            <h4 class="title">Alert me when a transaction step goes
                                                                into...
                                                            </h4>
                                                            <div class="wrap_item">
                                                                <div class="item">
                                                                    <div class="label">Time</div>
                                                                    <div class="date">10.12.2020
                                                                        <span class="time">10:25</span>
                                                                        <span class="ago">5 min ago</span>
                                                                    </div>
                                                                </div>
                                                                <div class="item">
                                                                    <div class="label">Device</div>
                                                                    <div class="device">Device name</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="right">
                                                            <div class="alert_notif_status error">Error</div>
                                                        </div>
                                                    </div>
                                                    <div class="item_table">
                                                        <div class="left">
                                                            <h4 class="title">Alert me when a transaction step goes
                                                                into...
                                                            </h4>
                                                            <div class="wrap_item">
                                                                <div class="item">
                                                                    <div class="label">Time</div>
                                                                    <div class="date">10.12.2020
                                                                        <span class="time">10:25</span>
                                                                        <span class="ago">5 min ago</span>
                                                                    </div>
                                                                </div>
                                                                <div class="item">
                                                                    <div class="label">Device</div>
                                                                    <div class="device">Device name</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="right">
                                                            <div class="alert_notif_status error">Error</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-100">
                        <div class="module-box module-box_1">
                            <div class="header-box">
                                <h3 class="title">Battery Life Summary</h3>
                                <div class="wrapper_icon">
                                    <a href="#" class="btn_icon_only">
										<?php include "img/reload.svg" ?>
                                    </a>
                                </div>
                            </div>
                            <div class="body-box">
                                <div class="chart">
                                    <img src="img/chart_2.svg" alt="">
                                </div>
                                <div class="overflow_auto">
                                    <table class="device_table device_table_3 device_table_4 device_table_5">
                                        <thead>
                                        <tr>
                                            <td>
                                                <a href="#">
					                                <?php include "img/organization_icon_2.svg" ?>
                                                </a>
                                            </td>
                                            <td>Battery name</td>
                                            <td>Usage</td>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>
                                                <div class="wrap_img">
                                                    <img src="img/organization_logo.jpg" alt="">
                                                </div>
                                            </td>
                                            <td>
                                                <span class="title">HP NC553i Dual Port FlexFabric 10Gb Converged Network Adapter-Local Area Connection</span>
                                                <span class="sub_title">OPM-Server15</span>
                                            </td>
                                            <td>150</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="wrap_img">
                                                    <img src="img/organization_logo.jpg" alt="">
                                                </div>
                                            </td>
                                            <td>
                                                <span class="title">HP NC553i Dual Port FlexFabric 10Gb Converged Network Adapter-Local Area Connection</span>
                                                <span class="sub_title">OPM-Server15</span>
                                            </td>
                                            <td>150</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="wrap_img">
                                                    <img src="img/organization_logo.jpg" alt="">
                                                </div>
                                            </td>
                                            <td>
                                                <span class="title">HP NC553i Dual Port FlexFabric 10Gb Converged Network Adapter-Local Area Connection</span>
                                                <span class="sub_title">OPM-Server15</span>
                                            </td>
                                            <td>150</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="wrap_img">
                                                    <img src="img/organization_logo.jpg" alt="">
                                                </div>
                                            </td>
                                            <td>
                                                <span class="title">HP NC553i Dual Port FlexFabric 10Gb Converged Network Adapter-Local Area Connection</span>
                                                <span class="sub_title">OPM-Server15</span>
                                            </td>
                                            <td>150</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="wrap_img">
                                                    <img src="img/organization_logo.jpg" alt="">
                                                </div>
                                            </td>
                                            <td>
                                                <span class="title">HP NC553i Dual Port FlexFabric 10Gb Converged Network Adapter-Local Area Connection</span>
                                                <span class="sub_title">OPM-Server15</span>
                                            </td>
                                            <td>150</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="wrap_img">
                                                    <img src="img/organization_logo.jpg" alt="">
                                                </div>
                                            </td>
                                            <td>
                                                <span class="title">HP NC553i Dual Port FlexFabric 10Gb Converged Network Adapter-Local Area Connection</span>
                                                <span class="sub_title">OPM-Server15</span>
                                            </td>
                                            <td>150</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>

<?php include "inc/footer.php"; ?>