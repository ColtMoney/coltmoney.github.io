<div class="sidebar-panel">
    <ul class="top-nav">
        <li class="menu_mobile"><a href="#"><?php include "img/menu_mobile_burger.svg" ?></a></li>
        <li><a href="#"><?php include "img/logo-icon.svg" ?></a></li>
        <li><a href="#"><?php include "img/star-icon.svg" ?></a></li>
        <li><a href="#"><?php include "img/search-icon.svg" ?></a></li>
        <li><a href="#"><?php include "img/plus-icon.svg" ?></a></li>
    </ul>
    <ul class="bottom-info">
        <li class="bell-info"><a href="#"><?php include "img/bell-icon.svg"; ?><div class="message-count">2</div></a></li>
        <li class="question-info"><a href="#"><?php include "img/question-circle-icon.svg"; ?></a></li>
    </ul>
</div>
<?php // include "inc/alerts-notifications.php"; 
?>
<div class="sidebar-navigation">
    <div class="organization-top">
        <div class="img-wrap">
            <img src="img/logo-org.png" alt="">
        </div>
        <div class="org-text">
            <h4>Organization</h4>
            <a href="organization-settings.php" class="settings">
                <div class="setting-icon"><?php include "img/setting-icon.svg"; ?></div>
                <span>Settings</span>
            </a>
        </div>
        <div class="expand-icon"><?php include "img/select-arrow.svg"; ?></div>
    </div>
    <div class="accordion-item">
        <div class="accordion-title">
            <div class="icon"><?php include "img/select-arrow.svg"; ?></div>
            <span>Site name</span>
        </div>
        <div class="accordion-content">
            <div class="menu-item">
                <div class="menu-cat">Data List</div>
                <ul>
                    <li><a href="#">Data Center Name 1</a></li>
                    <li><a href="#">Data Center Name 1</a></li>
                </ul>
            </div>
            <hr class="m-separate">
        </div>
    </div>
    <div class="main-menu">
        <div class="menu-item">
            <div class="menu-cat">Monitoring</div>
            <ul>
                <li class="active"><a href="monitor-dashboard-load.php"><span class="icon"><?php include "img/nav-icon-1.svg"; ?></span>Monitor Dashboard</a></li>
                <li><a href="monitor-networks-devices.php"><span class="icon"><?php include "img/nav-icon-2.svg"; ?></span>Networks and Systems</a></li>
            </ul>
        </div>
        <div class="menu-item">
            <div class="menu-cat">Alerts</div>
            <ul>
                <li><a href="monitor-alert-dashboard.php"><span class="icon"><?php include "img/nav-icon-4.svg"; ?></span>Alerts Dashboard</a></li>
                <li><a href="action-center.php"><span class="icon"><span class="alert"></span><?php include "img/nav-icon-5.svg"; ?></span>Action Center</a></li>
            </ul>
        </div>
        <div class="menu-item">
            <div class="menu-cat">Operations</div>
            <ul>
                <li><a href="operations-configure-tm.php"><span class="icon"><?php include "img/nav-icon-6.svg"; ?></span>Configure</a></li>
                <li><a href="operations-analytics-pfa.php"><span class="icon"><?php include "img/nav-icon-7.svg"; ?></span>Analytics</a></li>
            </ul>
        </div>
        <hr class="m-separate">
        <div class="menu-item">
            <ul>
                <li><a href="operations-report-newreport.php"><span class="icon"><?php include "img/nav-icon-8.svg"; ?></span>Reports</a></li>
                <li><a href="administration.php"><span class="icon"><?php include "img/nav-icon-9.svg"; ?></span>Administration</a></li>
            </ul>
        </div>
    </div>
    <div class="user-info">
        <div class="img-wrap">
            <img src="img/user-img.jpg" alt="">
        </div>
        <div class="user-details">
            <div class="user-name">Jackie Richards</div>
            <a href="account-setting-account.php" class="settings">
                <div class="setting-icon"><?php include "img/setting-icon.svg"; ?></div>
                <span>Account setting</span>
            </a>
        </div>
    </div>
</div>