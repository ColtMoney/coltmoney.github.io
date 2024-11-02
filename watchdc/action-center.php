<?php include "inc/head.php"; ?>

    <div class="wrapper">
        <aside class="left-sidebar">
			<?php include "inc/sidebar.php"; ?>
        </aside>
        <main class="main-content">
            <ul class="big_breadcrumbs">
                <li>Сustomize my alerts</li>
            </ul>
            <div class="operations_new_report card-info with_menu">
                <div class="left_side w_100">
                    <h3 class="lg-title">Device</h3>
                    <div class="radio_green_btns_wrpr devices_block">
                        <label class="radio_green_btn">
                            <input type="radio" name="report_inputs" id="">
                            <span class="radio_green_inner">SNMP</span>
                        </label>
                        <label class="radio_green_btn">
                            <input type="radio" name="report_inputs" id="" checked>
                            <span class="radio_green_inner">Server</span>
                        </label>
                        <label class="radio_green_btn">
                            <input type="radio" name="report_inputs" id="">
                            <span class="radio_green_inner">VM</span>
                        </label>
                        <label class="radio_green_btn">
                            <input type="radio" name="report_inputs" id="">
                            <span class="radio_green_inner">Switch</span>
                        </label>
                        <label class="radio_green_btn">
                            <input type="radio" name="report_inputs" id="">
                            <span class="radio_green_inner">Router</span>
                        </label>
                        <label class="radio_green_btn">
                            <input type="radio" name="report_inputs" id="">
                            <span class="radio_green_inner">OS</span>
                        </label>
                        <label class="radio_green_btn">
                            <input type="radio" name="report_inputs" id="">
                            <span class="radio_green_inner">Sensors</span>
                        </label>
                    </div>
                    <h3 class="lg-title">Metrics</h3>
                    <div class="fieldset_group_wrpr">
                        <fieldset class="fieldset fieldset_2 max_w_1076">
                            <legend>Metric</legend>
                            <div class="cols_inputs_wrpr">
                                <div class="col col_3">
                                    <div class="form-control">
                                        <label class="form-label">CPU Utilization</label>
                                        <div class="select">
                                            <select>
                                                <option value="1">Normal</option>
                                                <option value="1">Normal</option>
                                                <option value="1">Normal</option>
                                                <option value="1">Normal</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-control">
                                        <label class="form-label">Memory Utilization</label>
                                        <div class="select">
                                            <select>
                                                <option value="1">Normal</option>
                                                <option value="1">Normal</option>
                                                <option value="1">Normal</option>
                                                <option value="1">Normal</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-control">
                                        <label class="form-label">Disk Space Utilization</label>
                                        <div class="select">
                                            <select>
                                                <option value="1">Normal</option>
                                                <option value="1">Normal</option>
                                                <option value="1">Normal</option>
                                                <option value="1">Normal</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col col_3">
                                    <div class="form-control">
                                        <label class="form-label">Bandwidth Utilization</label>
                                        <div class="select">
                                            <select>
                                                <option value="1">Normal</option>
                                                <option value="1">Normal</option>
                                                <option value="1">Normal</option>
                                                <option value="1">Normal</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-control">
                                        <label class="form-label">Availability/Uptime</label>
                                        <div class="select">
                                            <select>
                                                <option value="1">Normal</option>
                                                <option value="1">Normal</option>
                                                <option value="1">Normal</option>
                                                <option value="1">Normal</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col col_3">
                                    <div class="wrap_radio_btn">
                                        <div class="title_radio">Alert type</div>
                                        <label class="circle_radio_btn">
                                            <input type="radio" name="" id="">
                                            <span class="checkmark"></span> SMS alert
                                        </label>
                                        <label class="circle_radio_btn">
                                            <input type="radio" name="" id="">
                                            <span class="checkmark"></span> Email alert
                                        </label>
                                        <label class="circle_radio_btn">
                                            <input type="radio" name="" id="">
                                            <span class="checkmark"></span> Syslog trap alert
                                        </label>
                                        <label class="circle_radio_btn">
                                            <input type="radio" name="" id="">
                                            <span class="checkmark"></span> IVR alert
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                        <fieldset class="fieldset fieldset_2 max_w_670">
                            <legend>Temperature degree</legend>
                            <div class="cols_inputs_wrpr">
                                <div class="col col_3">
                                    <div class="form-control">
                                        <label class="circle_radio_btn">
                                            <input type="radio" name="" id="">
                                            <span class="checkmark"></span>Temperature degree Celcius
                                        </label>
                                        <div class="control-details">
                                            <input type="text" class="control" placeholder="0">
                                            <div class="details-field input_details_select">°C</div>
                                        </div>
                                    </div>

                                    <div class="form-control">
                                        <label class="circle_radio_btn">
                                            <input type="radio" name="" id="">
                                            <span class="checkmark"></span>Temperature degree Furrenhite
                                        </label>
                                        <div class="control-details">
                                            <input type="text" class="control" placeholder="0">
                                            <div class="details-field input_details_select">°F</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col col_3">
                                    <div class="wrap_radio_btn">
                                        <div class="title_radio">Alert type</div>
                                        <label class="circle_radio_btn">
                                            <input type="radio" name="" id="">
                                            <span class="checkmark"></span> SMS alert
                                        </label>
                                        <label class="circle_radio_btn">
                                            <input type="radio" name="" id="">
                                            <span class="checkmark"></span> Email alert
                                        </label>
                                        <label class="circle_radio_btn">
                                            <input type="radio" name="" id="">
                                            <span class="checkmark"></span> Syslog trap alert
                                        </label>
                                        <label class="circle_radio_btn">
                                            <input type="radio" name="" id="">
                                            <span class="checkmark"></span> IVR alert
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                        <fieldset class="fieldset fieldset_2 max_w_364">
                            <legend>Power Supply failure</legend>
                            <div class="wrap_radio_btn wrap_radio_btn_2">
                                <div class="title_radio">Alert type</div>
                                <label class="circle_radio_btn">
                                    <input type="radio" name="" id="">
                                    <span class="checkmark"></span> SMS alert
                                </label>
                                <label class="circle_radio_btn">
                                    <input type="radio" name="" id="">
                                    <span class="checkmark"></span> Email alert
                                </label>
                                <label class="circle_radio_btn">
                                    <input type="radio" name="" id="">
                                    <span class="checkmark"></span> Syslog trap alert
                                </label>
                                <label class="circle_radio_btn">
                                    <input type="radio" name="" id="">
                                    <span class="checkmark"></span> IVR alert
                                </label>
                            </div>
                        </fieldset>
                    </div>
                    <div class="btns-wrap">
                        <a href="#" class="cancel">Don’t Save</a>
                        <a href="#" class="btn btn-secondary">Save changes</a>
                    </div>
                </div>
                <div class="right_menu">
                    <ul class="operations_sidebar_reports_menu">
                        <li>
                            <a href="" class="active">
                                <div class="icon"><?php include "img/operations_sidebar_reports_menu_1.svg"; ?></div>
                                Device
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <div class="icon"><?php include "img/operations_sidebar_reports_menu_2.svg"; ?></div>
                                Metrics
                            </a>
                            <ul class="sub_menu">
                                <li><a href="">Metric</a></li>
                                <li><a href="">Memory Utilization</a></li>
                                <li><a href="">Power Supply failure</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </main>
    </div>

<div class="in_html">
    <?php include "inc/system-info-popup.php"; ?>
</div>

<?php include "inc/footer.php"; ?>