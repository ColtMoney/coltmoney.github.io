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
                <li class="bell-info"><a href="#"><?php include "img/bell-icon.svg"; ?><div class="message-count">2</div></a></li>
                <li class="question-info"><a href="#"><?php include "img/question-circle-icon.svg"; ?></a></li>
            </ul>
        </div>
        <div class="sidebar-navigation">
            <a href="#" class="sidebar_logo">
                <img src="img/logo-wmdc.png" alt="">
            </a>
            <div class="accordion-item">
                <div class="accordion-title">
                    <div class="icon"><?php include "img/select-arrow.svg"; ?></div>
                    <span>Organization name</span>
                    <a href="" class="accordion_plus_btn">
                        <?php include "img/plus-icon.svg"; ?>
                    </a>
                </div>
                <div class="accordion-content">
                    <div class="menu-item">
                        <ul>
                            <li><a href="#">Orzanization Name 1</a></li>
                            <li><a href="#">Orzanization Name 2</a></li>
                            <li><a href="#">Orzanization Name 3</a></li>
                            <li><a href="#">Orzanization Name 4</a></li>
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
            <li>Organizations</li>
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
        <div class="table_wrpr">
            <table class="table organization_table">
                <thead>
                    <tr>
                        <th>
                            <a href="" class="grey_circle_badge">
                                <?php include "img/organization_icon.svg"; ?>
                            </a>
                        </th>
                        <th>Organization Name</th>
                        <th>Default  Gateway</th>
                        <th>Domain</th>
                        <th>Main Adress</th>
                        <th>My role</th>
                    </tr>
                </thead>
                <tbody>
                    <?php for ($i = 0; $i < 10; ++$i): ?>
                    <tr>
                        <td>
                            <div class="organization_table_img_wrpr">
                                <img src="img/organization_logo.jpg" alt="">
                            </div>
                        </td>
                        <td>
                            <h3 class="organization_table_name">Name of organization</h3>
                            <span class="organization_table_sitesnumber">124 site (s)</span>
                        </td>
                        <td>192.168.1.1</td>
                        <td><a href="" class="simple_link">www.watchmy.dc</a></td>
                        <td>London, Park Lane no. 1</td>
                        <td>Administrator</td>
                    </tr>
                    <?php endfor; ?>
                </tbody>
            </table>
        </div>
    </main>
</div>

<?php include "inc/footer.php"; ?>