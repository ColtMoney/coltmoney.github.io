<?php include "inc/head.php"; ?>

    <div class="wrapper">
        <aside class="left-sidebar">
            <?php include "inc/sidebar.php"; ?>
        </aside>
        <main class="main-content">
            <ul class="big_breadcrumbs">
                <li>Custom report</li>
                <ul class="links_in_breadcumbs">
                    <li>
                        <a href="">
                            <div class="icon"><?php include "img/links_in_breadcumbs_download.svg"; ?></div> Download report
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <div class="icon"><?php include "img/links_in_breadcumbs_share.svg"; ?></div> Share
                        </a>
                    </li>
                </ul>
            </ul>
            <div class="graphic_cards_wrpr operations_reports_custom">
                <div class="graphic_card_box graphic_item graphic_card_box_25 graphic_card_box_2 graphic_card_box_3 graphic_circles_row">
                    <div class="graphic_header">
                        <h3 class="graphic_name">Graphic Name</h3>
                    </div>
                    <div class="graphic_body">
                        <div class="wrap_grafic">
                            <?php include "img/total-visits.svg"; ?>
                        </div>
                        <ul class="legend">
                            <li>
                                <span class="circle color_1"></span>
                                <span class="text">Legend</span>
                            </li>
                            <li>
                                <span class="circle color_2"></span>
                                <span class="text">Legend</span>
                            </li>
                            <li>
                                <span class="circle color_3"></span>
                                <span class="text">Legend</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="graphic_card_box graphic_item graphic_card_box_2 graphic_card_box_35 graphic_card_box_3">
                    <div class="graphic_header">
                        <h3 class="graphic_name">Graphic Name</h3>
                        <div class="price">100%</div>
                    </div>
                    <div class="graphic_body pb_0">
                        <div class="graphic_wrpr">
                            <?php include "img/operations_reports_custom_graph_1.svg"; ?>
                        </div>
                        <ul class="graphic_item_days">
                            <li>M</li>
                            <li>T</li>
                            <li>W</li>
                            <li>T</li>
                            <li>F</li>
                            <li>S</li>
                            <li>S</li>
                        </ul>
                    </div>
                </div>
                <div class="graphic_card_box graphic_item graphic_card_box_40 graphic_card_box_2 graphic_card_box_3">
                    <div class="graphic_header">
                        <h3 class="graphic_name">Graphic Name</h3>
                    </div>
                    <div class="graphic_body">
                        <div class="wrap_grafic wrap_grafic_2">
                            <img src="img/operations_reports_custom_graph_2.svg" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-group">
                <div class="left">
                    <div class="available_columns_block">
                        <h3 class="title">Available Columns</h3>
                        <form action="" class="search_input_form">
                            <input type="text" class="search_input" placeholder="Search organization">
                            <button class="search_input_btn">
                                <?php include "img/search_input_icon.svg"; ?>
                            </button>
                        </form>
                        <div class="plus_accordion_item active">
                            <div class="plus_accordion_title">
                                <h3>Nodes/Devices</h3>
                            </div>
                            <div class="plus_accordion_body">
                                <ul>
                                    <li><a href="">Collectors</a></li>
                                    <li><a href="">Sensor Hubs</a></li>
                                    <li><a href="">Customer devices</a></li>
                                    <li><a href="">Sensors</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="plus_accordion_item">
                            <div class="plus_accordion_title">
                                <h3>Metrics</h3>
                            </div>
                        </div>
                        <div class="plus_accordion_item">
                            <div class="plus_accordion_title">
                                <h3>Conditions</h3>
                            </div>
                        </div>
                        <div class="plus_accordion_item">
                            <div class="plus_accordion_title">
                                <h3>Values</h3>
                            </div>
                        </div>
                        <div class="plus_accordion_item">
                            <div class="plus_accordion_title">
                                <h3>Dates</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="right">
                    <div class="table_wrpr table-custom full_border_radius">
                        <div class="table-top-title">
                            <h3>Report name</h3>
                            <a href="" class="table_top_filter_btn">
                                <?php include "img/table_top_filter_icon.svg"; ?>
                            </a>
                        </div>
                        <table class="table organization_table operations_custom_table">
                            <thead>
                                <tr>
                                    <th>
                                        <div class="table_filter_trigger"> 
                                            <div class="icon"><?php include "img/table_filter_trigger_icon.svg"; ?></div> Site name
                                        </div>
                                    </th>
                                    <th>
                                        <div class="table_filter_trigger"> 
                                            <div class="icon"><?php include "img/table_filter_trigger_icon.svg"; ?></div> System Health
                                        </div>
                                    </th>
                                    <th>
                                        <div class="table_filter_trigger"> 
                                            <div class="icon"><?php include "img/table_filter_trigger_icon.svg"; ?></div> Conditions
                                        </div>
                                    </th>
                                    <th>
                                        <div class="table_filter_trigger"> 
                                            <div class="icon"><?php include "img/table_filter_trigger_icon.svg"; ?></div> Values
                                        </div>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php for ($i = 0; $i < 8; ++$i): ?>
                                    <tr>
                                        <td>System Health</td>
                                        <td>System Health</td>
                                        <td>172.21.2.101</td>
                                        <td>ESXServer</td>
                                    </tr>
                                <?php endfor; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </main>
    </div>

    <div class="html_popups">
        <div class="popup_wrpr operations_popup">
            <div class="popup_wrpr_inner">
                <div class="popup">
                    <a href="" class="close_popup_btn">
                        <?php include "img/close_icon.svg" ?>
                    </a>
                    <h4 class="lg-title text-center mb_24">Download file</h4>
                    <form action="">
                        <div class="form-control">
                            <label class="form-label">Choose the format</label>
                            <div class="select">
                                <select>
                                    <option value="1">CSV</option>
                                    <option value="2">CSV 1</option>
                                    <option value="3">CSV 2</option>
                                    <option value="4">CSV 3</option>
                                </select>
                            </div>
                        </div>
                        <div class="btn-wrap">
                            <button class="btn btn-primary">Download</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="popup_wrpr operations_popup synchronize_popup">
            <div class="popup_wrpr_inner">
                <div class="popup">
                    <a href="" class="close_popup_btn">
                        <?php include "img/close_icon.svg" ?>
                    </a>
                    <h4 class="lg-title text-center">Synchronize your account</h4>
                    <label class="form-label text-center">Сonnect your account</label>
                    <ul class="synchronize_account_links">
                        <li>
                            <a href="">
                                <?php include "img/synchronize_account_1.svg"; ?>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <?php include "img/synchronize_account_2.svg"; ?>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <?php include "img/synchronize_account_3.svg"; ?>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="popup_wrpr operations_popup share_to_application_popup">
            <div class="popup_wrpr_inner">
                <div class="popup">
                    <a href="" class="close_popup_btn">
                        <?php include "img/close_icon.svg" ?>
                    </a>
                    <h4 class="lg-title text-center">Share</h4>
                    <label class="form-label text-center">Select the application you want to send to</label>
                    <ul class="share_to_application_links">
                        <li>
                            <a href="" class="bg_green">
                                <img src="img/pp-icon.png" alt="">
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <img src="img/google-icon.png" alt="">
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <img src="img/mail-icon.png" alt="">
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <img src="img/app-img-1.png" alt="">
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="popup_wrpr operations_popup">
            <div class="popup_wrpr_inner">
                <div class="popup">
                    <a href="" class="close_popup_btn">
                        <?php include "img/close_icon.svg" ?>
                    </a>
                    <h4 class="lg-title text-center">Save Report into template</h4>
                    <label class="form-label text-center mb_40">You can save the template and download the report at any time</label>
                    <div class="btn-wrap">
                        <a href="" class="btn btn-primary">Button</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php include "inc/footer.php"; ?>