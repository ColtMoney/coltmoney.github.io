<?php include "inc/head.php"; ?>

<div class="wrapper">
    <aside class="left-sidebar">
        <?php include "inc/sidebar.php"; ?>
    </aside>
    <main class="main-content">
        <div class="wrapper_tabs">
            <?php $tabs = ["Environment Topology Map", "Sensor Hubs & Sensors"]; ?>
            <?php include "inc/tabs-top.php"; ?>
        </div>
        <div id="tab-0" class="tabs-content current">
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
                        <div class="map-box">
                            <?php include "inc/zoom-block.php"; ?>
                            <canvas id="map-1"></canvas>
                            <img src="img/map-itm.png" id="map-itm-img">
                            <img src="img/map-itm-main.png" id="map-itm-img-main">
                            <img src="img/map-itm-big.png" id="map-itm-img-big">
                            <div id="map-big-1" class="map-itm-content">
                                <div class="icon"></div>
                                <div class="type">Computer</div>
                                <ul>
                                    <li><span>IP:</span>10.35.32.45</li>
                                    <li><span>MAC:</span>225.225.255.225</li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li class="tab-content__item js-tab-content" data-tabs="2">

                    </li>
                </ul>
            </div>
        </div>
        <div id="tab-1" class="tabs-content">

        </div>
    </main>
</div>


<?php include "inc/footer.php"; ?>