<?php include "inc/head.php"; ?>

<div class="wrapper">
    <aside class="left-sidebar">
        <?php include "inc/sidebar.php"; ?>
    </aside>
    <main class="main-content">
        <div class="wrapper_tabs pfa_page_tabs">
            <?php $tabs = ["Predictive Failure Analysis", "Performance Projection"]; ?>
            <?php include "inc/tabs-top.php"; ?>
        </div>
        <div id="tab-0" class="tabs-content current">
            <div class="graphic_cards_wrpr">
                <?php for ($i = 0; $i < 2; ++$i) : ?>
                    <div class="graphic_card_box graphic_item">
                        <div class="graphic_body">
                            <h3 class="graphic_name">Graphic Name</h3>
                            <div class="graphic_wrpr">
                                <?php include "img/graphic_card_pfa.svg"; ?>
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
                        <div class="graphic_history">
                            <h4 class="graphic_history_title">History</h4>
                            <div class="graphic_history_item">
                                <div class="left">
                                    <h3 class="history_item_title">Item</h3>
                                    <span class="time_ago">30min ago</span>
                                </div>
                                <span class="graphic_history_number green">+150.70</span>
                            </div>
                            <div class="graphic_history_item">
                                <div class="left">
                                    <h3 class="history_item_title">Item</h3>
                                    <span class="time_ago">2hour ago</span>
                                </div>
                                <span class="graphic_history_number red">-590</span>
                            </div>
                            <div class="graphic_history_item">
                                <div class="left">
                                    <h3 class="history_item_title">Item</h3>
                                    <span class="time_ago">30min ago</span>
                                </div>
                                <span class="graphic_history_number green">+150.70</span>
                            </div>
                            <div class="graphic_history_item">
                                <div class="left">
                                    <h3 class="history_item_title">Item</h3>
                                    <span class="time_ago">2hour ago</span>
                                </div>
                                <span class="graphic_history_number red">-590</span>
                            </div>
                            <div class="graphic_history_item">
                                <div class="left">
                                    <h3 class="history_item_title">Item</h3>
                                    <span class="time_ago">30min ago</span>
                                </div>
                                <span class="graphic_history_number green">+150.70</span>
                            </div>
                        </div>
                    </div>
                    <div class="graphic_card_box graphic_item">
                        <div class="graphic_body">
                            <h3 class="graphic_name">Graphic Name</h3>
                            <div class="graphic_wrpr">
                                <?php include "img/graphic_card_pfa.svg"; ?>
                            </div>
                        </div>
                        <div class="graphic_history">
                            <h4 class="graphic_history_title">History</h4>
                            <div class="graphic_history_item">
                                <div class="left">
                                    <h3 class="history_item_title">Item</h3>
                                    <span class="time_ago">30min ago</span>
                                </div>
                                <span class="graphic_history_number green">+150.70</span>
                            </div>
                            <div class="graphic_history_item">
                                <div class="left">
                                    <h3 class="history_item_title">Item</h3>
                                    <span class="time_ago">2hour ago</span>
                                </div>
                                <span class="graphic_history_number red">-590</span>
                            </div>
                            <div class="graphic_history_item">
                                <div class="left">
                                    <h3 class="history_item_title">Item</h3>
                                    <span class="time_ago">30min ago</span>
                                </div>
                                <span class="graphic_history_number green">+150.70</span>
                            </div>
                            <div class="graphic_history_item">
                                <div class="left">
                                    <h3 class="history_item_title">Item</h3>
                                    <span class="time_ago">2hour ago</span>
                                </div>
                                <span class="graphic_history_number red">-590</span>
                            </div>
                            <div class="graphic_history_item">
                                <div class="left">
                                    <h3 class="history_item_title">Item</h3>
                                    <span class="time_ago">30min ago</span>
                                </div>
                                <span class="graphic_history_number green">+150.70</span>
                            </div>
                        </div>
                    </div>
                    <div class="graphic_card_box graphic_item">
                        <div class="graphic_body">
                            <h3 class="graphic_name">Graphic Name</h3>
                            <div class="graphic_wrpr">
                                <?php include "img/graphic_card_pfa.svg"; ?>
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
                        <div class="graphic_history">
                            <h4 class="graphic_history_title">History</h4>
                            <div class="graphic_history_item">
                                <div class="left">
                                    <h3 class="history_item_title">Item</h3>
                                    <span class="time_ago">30min ago</span>
                                </div>
                                <span class="graphic_history_number green">+150.70</span>
                            </div>
                            <div class="graphic_history_item">
                                <div class="left">
                                    <h3 class="history_item_title">Item</h3>
                                    <span class="time_ago">2hour ago</span>
                                </div>
                                <span class="graphic_history_number red">-590</span>
                            </div>
                            <div class="graphic_history_item">
                                <div class="left">
                                    <h3 class="history_item_title">Item</h3>
                                    <span class="time_ago">30min ago</span>
                                </div>
                                <span class="graphic_history_number green">+150.70</span>
                            </div>
                            <div class="graphic_history_item">
                                <div class="left">
                                    <h3 class="history_item_title">Item</h3>
                                    <span class="time_ago">2hour ago</span>
                                </div>
                                <span class="graphic_history_number red">-590</span>
                            </div>
                            <div class="graphic_history_item">
                                <div class="left">
                                    <h3 class="history_item_title">Item</h3>
                                    <span class="time_ago">30min ago</span>
                                </div>
                                <span class="graphic_history_number green">+150.70</span>
                            </div>
                        </div>
                    </div>
                    <div class="graphic_card_box graphic_item">
                        <div class="graphic_body">
                            <h3 class="graphic_name">Graphic Name</h3>
                            <div class="graphic_wrpr">
                                <?php include "img/graphic_card_pfa.svg"; ?>
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
                        <div class="graphic_history">
                            <h4 class="graphic_history_title">History</h4>
                            <div class="graphic_history_item">
                                <div class="left">
                                    <h3 class="history_item_title">Item</h3>
                                    <span class="time_ago">30min ago</span>
                                </div>
                                <span class="graphic_history_number green">+150.70</span>
                            </div>
                            <div class="graphic_history_item">
                                <div class="left">
                                    <h3 class="history_item_title">Item</h3>
                                    <span class="time_ago">2hour ago</span>
                                </div>
                                <span class="graphic_history_number red">-590</span>
                            </div>
                            <div class="graphic_history_item">
                                <div class="left">
                                    <h3 class="history_item_title">Item</h3>
                                    <span class="time_ago">30min ago</span>
                                </div>
                                <span class="graphic_history_number green">+150.70</span>
                            </div>
                            <div class="graphic_history_item">
                                <div class="left">
                                    <h3 class="history_item_title">Item</h3>
                                    <span class="time_ago">2hour ago</span>
                                </div>
                                <span class="graphic_history_number red">-590</span>
                            </div>
                            <div class="graphic_history_item">
                                <div class="left">
                                    <h3 class="history_item_title">Item</h3>
                                    <span class="time_ago">30min ago</span>
                                </div>
                                <span class="graphic_history_number green">+150.70</span>
                            </div>
                        </div>
                    </div>
                <?php endfor; ?>
            </div>
        </div>
        <div id="tab-1" class="tabs-content">
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
            <div class="purple_table_wrpr">
                <div class="table_controls">
                    <a href="" class="table_filter_btn">
                        <?php include "img/filter_purple_icon.svg"; ?>
                    </a>
                    <form action="" class="search_input_form">
                        <input type="text" class="search_input" placeholder="Search organization">
                        <button class="search_input_btn">
                            <?php include "img/search_input_icon.svg"; ?>
                        </button>
                    </form>
                </div>
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
                            <?php for ($i = 0; $i < 9; ++$i) : ?>
                                <tr>
                                    <td>
                                        <label class="checkbox">
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                        </label>
                                    </td>
                                    <td>172.21.2.101</td>
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
            </div>
        </div>
    </main>
</div>

<div class="in_html">
    <?php include "inc/system-info-popup.php"; ?>
</div>

<?php include "inc/footer.php"; ?>