<?php include "inc/head.php"; ?>

    <div class="wrapper">
        <aside class="left-sidebar">
            <?php include "inc/sidebar.php"; ?>
        </aside>
        <main class="main-content">
            <ul class="big_breadcrumbs">
                <li>Node / Device Wise Report</li>
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
                    <h3 class="lg-title">Metrics Matrix</h3>
                    <div class="fieldset_group_wrpr">
                        <fieldset class="fieldset max_w_690">
                            <legend>CPU Utilization</legend>
                            <label class="form_bold_label">Load</label>
                            <div class="cols_inputs_wrpr">
                                <div class="col">
                                    <div class="form-control">
                                        <label class="form-label">More than</label>
                                        <div class="control-details">
                                            <input type="text" class="control" placeholder="0">
                                            <div class="details-field">%</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-control">
                                        <label class="form-label">Less than</label>
                                        <div class="control-details">
                                            <input type="text" class="control" placeholder="0">
                                            <div class="details-field">%</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-control">
                                        <label class="form-label">Equal to</label>
                                        <div class="control-details">
                                            <input type="text" class="control" placeholder="0">
                                            <div class="details-field">%</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <label class="form_bold_label">Date and Time</label>
                            <div class="group_inputs_with_radio">
                                <label class="circle_radio_btn">
                                    <input type="radio" name="" id="" checked>
                                    <span class="checkmark"></span> Date span
                                </label>
                                <div class="cols_inputs_wrpr">
                                    <div class="col">
                                        <div class="form-control">
                                            <label class="form-label">From date/time</label>
                                            <div class="multiple_control_group datepicker_controls_group">
                                                <div class="control_with_icon">
                                                    <input type="text" class="control" placeholder="Select date">
                                                    <div class="icon">
                                                        <?php include "img/calendar_icon.svg"; ?>
                                                    </div>
                                                </div>
                                                <div class="control_with_icon time_input_wrpr">
                                                    <input type="text" class="control" placeholder="Time">
                                                    <div class="icon">
                                                        <?php include "img/clock_icon.svg"; ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-control">
                                            <label class="form-label">To date/time</label>
                                            <div class="multiple_control_group datepicker_controls_group">
                                                <div class="control_with_icon">
                                                    <input type="text" class="control" placeholder="Select date">
                                                    <div class="icon">
                                                        <?php include "img/calendar_icon.svg"; ?>
                                                    </div>
                                                </div>
                                                <div class="control_with_icon time_input_wrpr">
                                                    <input type="text" class="control" placeholder="Time">
                                                    <div class="icon">
                                                        <?php include "img/clock_icon.svg"; ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <label class="circle_radio_btn">
                                <input type="radio" name="" id="">
                                <span class="checkmark"></span> Last 30 days
                            </label>
                            <label class="circle_radio_btn">
                                <input type="radio" name="" id="">
                                <span class="checkmark"></span> Last 7 days
                            </label>
                            <label class="circle_radio_btn">
                                <input type="radio" name="" id="">
                                <span class="checkmark"></span> Last 24 hours
                            </label>
                            <label class="circle_radio_btn">
                                <input type="radio" name="" id="">
                                <span class="checkmark"></span> Current utilization summary (Last 2 hours)
                            </label>
                        </fieldset>
                        <fieldset class="fieldset max_w_690">
                            <legend>Memory Utilization</legend>
                            <label class="form_bold_label">Load</label>
                            <div class="cols_inputs_wrpr">
                                <div class="col">
                                    <div class="form-control">
                                        <label class="form-label">More than</label>
                                        <div class="control-details">
                                            <input type="text" class="control" placeholder="0">
                                            <div class="details-field">%</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-control">
                                        <label class="form-label">Less than</label>
                                        <div class="control-details">
                                            <input type="text" class="control" placeholder="0">
                                            <div class="details-field">%</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-control">
                                        <label class="form-label">Equal to</label>
                                        <div class="control-details">
                                            <input type="text" class="control" placeholder="0">
                                            <div class="details-field">%</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <label class="form_bold_label">Date and Time</label>
                            <div class="group_inputs_with_radio">
                                <label class="circle_radio_btn">
                                    <input type="radio" name="" id="" checked>
                                    <span class="checkmark"></span> Date span
                                </label>
                                <div class="cols_inputs_wrpr">
                                    <div class="col">
                                        <div class="form-control">
                                            <label class="form-label">From date/time</label>
                                            <div class="multiple_control_group datepicker_controls_group">
                                                <div class="control_with_icon">
                                                    <input type="text" class="control" placeholder="Select date" disabled>
                                                    <div class="icon">
                                                        <?php include "img/calendar_icon.svg"; ?>
                                                    </div>
                                                </div>
                                                <div class="control_with_icon time_input_wrpr">
                                                    <input type="text" class="control" placeholder="Time" disabled>
                                                    <div class="icon">
                                                        <?php include "img/clock_icon.svg"; ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-control">
                                            <label class="form-label">To date/time</label>
                                            <div class="multiple_control_group datepicker_controls_group">
                                                <div class="control_with_icon">
                                                    <input type="text" class="control" placeholder="Select date" disabled>
                                                    <div class="icon">
                                                        <?php include "img/calendar_icon.svg"; ?>
                                                    </div>
                                                </div>
                                                <div class="control_with_icon time_input_wrpr">
                                                    <input type="text" class="control" placeholder="Time" disabled>
                                                    <div class="icon">
                                                        <?php include "img/clock_icon.svg"; ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <label class="circle_radio_btn">
                                <input type="radio" name="" id="">
                                <span class="checkmark"></span> Last 30 days
                            </label>
                            <label class="circle_radio_btn">
                                <input type="radio" name="" id="">
                                <span class="checkmark"></span> Last 7 days
                            </label>
                            <label class="circle_radio_btn">
                                <input type="radio" name="" id="">
                                <span class="checkmark"></span> Last 24 hours
                            </label>
                            <label class="circle_radio_btn">
                                <input type="radio" name="" id="">
                                <span class="checkmark"></span> Current utilization summary (Last 2 hours)
                            </label>
                        </fieldset>
                        <fieldset class="fieldset max_w_690">
                            <legend>Disk Space Utilization</legend>
                            <label class="form_bold_label">Load</label>
                            <div class="cols_inputs_wrpr">
                                <div class="col">
                                    <div class="form-control">
                                        <label class="form-label">More than</label>
                                        <div class="control-details">
                                            <input type="text" class="control" placeholder="0">
                                            <div class="details-field">%</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-control">
                                        <label class="form-label">Less than</label>
                                        <div class="control-details">
                                            <input type="text" class="control" placeholder="0">
                                            <div class="details-field">%</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-control">
                                        <label class="form-label">Equal to</label>
                                        <div class="control-details">
                                            <input type="text" class="control" placeholder="0">
                                            <div class="details-field">%</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <label class="form_bold_label">Date and Time</label>
                            <div class="group_inputs_with_radio">
                                <label class="circle_radio_btn">
                                    <input type="radio" name="" id="" checked>
                                    <span class="checkmark"></span> Date span
                                </label>
                                <div class="cols_inputs_wrpr">
                                    <div class="col">
                                        <div class="form-control">
                                            <label class="form-label">From date/time</label>
                                            <div class="multiple_control_group datepicker_controls_group">
                                                <div class="control_with_icon">
                                                    <input type="text" class="control" placeholder="Select date" disabled>
                                                    <div class="icon">
                                                        <?php include "img/calendar_icon.svg"; ?>
                                                    </div>
                                                </div>
                                                <div class="control_with_icon time_input_wrpr">
                                                    <input type="text" class="control" placeholder="Time" disabled>
                                                    <div class="icon">
                                                        <?php include "img/clock_icon.svg"; ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-control">
                                            <label class="form-label">To date/time</label>
                                            <div class="multiple_control_group datepicker_controls_group">
                                                <div class="control_with_icon">
                                                    <input type="text" class="control" placeholder="Select date" disabled>
                                                    <div class="icon">
                                                        <?php include "img/calendar_icon.svg"; ?>
                                                    </div>
                                                </div>
                                                <div class="control_with_icon time_input_wrpr">
                                                    <input type="text" class="control" placeholder="Time" disabled>
                                                    <div class="icon">
                                                        <?php include "img/clock_icon.svg"; ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <label class="circle_radio_btn">
                                <input type="radio" name="" id="">
                                <span class="checkmark"></span> Last 30 days
                            </label>
                            <label class="circle_radio_btn">
                                <input type="radio" name="" id="">
                                <span class="checkmark"></span> Last 7 days
                            </label>
                            <label class="circle_radio_btn">
                                <input type="radio" name="" id="">
                                <span class="checkmark"></span> Last 24 hours
                            </label>
                            <label class="circle_radio_btn">
                                <input type="radio" name="" id="">
                                <span class="checkmark"></span> Current utilization summary (Last 2 hours)
                            </label>
                        </fieldset>
                        <fieldset class="fieldset max_w_690">
                            <legend>Bandwidth Utilization</legend>
                            <label class="form_bold_label">Load</label>
                            <div class="cols_inputs_wrpr">
                                <div class="col">
                                    <div class="form-control">
                                        <label class="form-label">More than</label>
                                        <div class="control-details">
                                            <input type="text" class="control" placeholder="0">
                                            <div class="details-field">%</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-control">
                                        <label class="form-label">Less than</label>
                                        <div class="control-details">
                                            <input type="text" class="control" placeholder="0">
                                            <div class="details-field">%</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-control">
                                        <label class="form-label">Equal to</label>
                                        <div class="control-details">
                                            <input type="text" class="control" placeholder="0">
                                            <div class="details-field">%</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <label class="form_bold_label">Date and Time</label>
                            <div class="group_inputs_with_radio">
                                <label class="circle_radio_btn">
                                    <input type="radio" name="" id="" checked>
                                    <span class="checkmark"></span> Date span
                                </label>
                                <div class="cols_inputs_wrpr">
                                    <div class="col">
                                        <div class="form-control">
                                            <label class="form-label">From date/time</label>
                                            <div class="multiple_control_group datepicker_controls_group">
                                                <div class="control_with_icon">
                                                    <input type="text" class="control" placeholder="Select date" disabled>
                                                    <div class="icon">
                                                        <?php include "img/calendar_icon.svg"; ?>
                                                    </div>
                                                </div>
                                                <div class="control_with_icon time_input_wrpr">
                                                    <input type="text" class="control" placeholder="Time" disabled>
                                                    <div class="icon">
                                                        <?php include "img/clock_icon.svg"; ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-control">
                                            <label class="form-label">To date/time</label>
                                            <div class="multiple_control_group datepicker_controls_group">
                                                <div class="control_with_icon">
                                                    <input type="text" class="control" placeholder="Select date" disabled>
                                                    <div class="icon">
                                                        <?php include "img/calendar_icon.svg"; ?>
                                                    </div>
                                                </div>
                                                <div class="control_with_icon time_input_wrpr">
                                                    <input type="text" class="control" placeholder="Time" disabled>
                                                    <div class="icon">
                                                        <?php include "img/clock_icon.svg"; ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <label class="circle_radio_btn">
                                <input type="radio" name="" id="">
                                <span class="checkmark"></span> Last 30 days
                            </label>
                            <label class="circle_radio_btn">
                                <input type="radio" name="" id="">
                                <span class="checkmark"></span> Last 7 days
                            </label>
                            <label class="circle_radio_btn">
                                <input type="radio" name="" id="">
                                <span class="checkmark"></span> Last 24 hours
                            </label>
                            <label class="circle_radio_btn">
                                <input type="radio" name="" id="">
                                <span class="checkmark"></span> Current utilization summary (Last 2 hours)
                            </label>
                        </fieldset>
                        <fieldset class="fieldset max_w_795">
                            <legend>Temperature</legend>
                            <label class="form_bold_label">Load</label>
                            <div class="cols_inputs_wrpr">
                                <div class="col">
                                    <div class="form-control">
                                        <label class="form-label">More than</label>
                                        <div class="control-details">
                                            <input type="text" class="control" placeholder="0">
                                            <div class="details-field input_details_select">°C <?php include "img/input_details_select_arrow.svg"; ?></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-control">
                                        <label class="form-label">Less than</label>
                                        <div class="control-details">
                                            <input type="text" class="control" placeholder="0">
                                            <div class="details-field input_details_select">°F <?php include "img/input_details_select_arrow.svg"; ?></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-control">
                                        <label class="form-label">Equal to</label>
                                        <div class="control-details">
                                            <input type="text" class="control" placeholder="0">
                                            <div class="details-field input_details_select">°F <?php include "img/input_details_select_arrow.svg"; ?></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <label class="form_bold_label">Date and Time</label>
                            <div class="group_inputs_with_radio">
                                <label class="circle_radio_btn">
                                    <input type="radio" name="" id="" checked>
                                    <span class="checkmark"></span> Date span
                                </label>
                                <div class="cols_inputs_wrpr">
                                    <div class="col">
                                        <div class="form-control">
                                            <label class="form-label">From date/time</label>
                                            <div class="multiple_control_group datepicker_controls_group">
                                                <div class="control_with_icon">
                                                    <input type="text" class="control" placeholder="Select date" disabled>
                                                    <div class="icon">
                                                        <?php include "img/calendar_icon.svg"; ?>
                                                    </div>
                                                </div>
                                                <div class="control_with_icon time_input_wrpr">
                                                    <input type="text" class="control" placeholder="Time" disabled>
                                                    <div class="icon">
                                                        <?php include "img/clock_icon.svg"; ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-control">
                                            <label class="form-label">To date/time</label>
                                            <div class="multiple_control_group datepicker_controls_group">
                                                <div class="control_with_icon">
                                                    <input type="text" class="control" placeholder="Select date" disabled>
                                                    <div class="icon">
                                                        <?php include "img/calendar_icon.svg"; ?>
                                                    </div>
                                                </div>
                                                <div class="control_with_icon time_input_wrpr">
                                                    <input type="text" class="control" placeholder="Time" disabled>
                                                    <div class="icon">
                                                        <?php include "img/clock_icon.svg"; ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <label class="circle_radio_btn">
                                <input type="radio" name="" id="">
                                <span class="checkmark"></span> Last 30 days
                            </label>
                            <label class="circle_radio_btn">
                                <input type="radio" name="" id="">
                                <span class="checkmark"></span> Last 7 days
                            </label>
                            <label class="circle_radio_btn">
                                <input type="radio" name="" id="">
                                <span class="checkmark"></span> Last 24 hours
                            </label>
                            <label class="circle_radio_btn">
                                <input type="radio" name="" id="">
                                <span class="checkmark"></span> Current utilization summary (Last 2 hours)
                            </label>
                        </fieldset>
                        <fieldset class="fieldset max_w_795">
                            <legend>Power Supply</legend>
                            <div class="form-control power_supply_status">
                                <label class="form-label">Status</label>
                                <div class="select">
                                    <select>
                                        <option value="1">Normal</option>
                                        <option value="2">Normal 1</option>
                                        <option value="3">Normal 2</option>
                                        <option value="4">Normal 3</option>
                                    </select>
                                </div>
                            </div>
                            <label class="form_bold_label">Date and Time</label>
                            <div class="group_inputs_with_radio">
                                <label class="circle_radio_btn">
                                    <input type="radio" name="" id="" checked>
                                    <span class="checkmark"></span> Date span
                                </label>
                                <div class="cols_inputs_wrpr">
                                    <div class="col">
                                        <div class="form-control">
                                            <label class="form-label">From date/time</label>
                                            <div class="multiple_control_group datepicker_controls_group">
                                                <div class="control_with_icon">
                                                    <input type="text" class="control" placeholder="Select date" disabled>
                                                    <div class="icon">
                                                        <?php include "img/calendar_icon.svg"; ?>
                                                    </div>
                                                </div>
                                                <div class="control_with_icon time_input_wrpr">
                                                    <input type="text" class="control" placeholder="Time" disabled>
                                                    <div class="icon">
                                                        <?php include "img/clock_icon.svg"; ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-control">
                                            <label class="form-label">To date/time</label>
                                            <div class="multiple_control_group datepicker_controls_group">
                                                <div class="control_with_icon">
                                                    <input type="text" class="control" placeholder="Select date" disabled>
                                                    <div class="icon">
                                                        <?php include "img/calendar_icon.svg"; ?>
                                                    </div>
                                                </div>
                                                <div class="control_with_icon time_input_wrpr">
                                                    <input type="text" class="control" placeholder="Time" disabled>
                                                    <div class="icon">
                                                        <?php include "img/clock_icon.svg"; ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <label class="circle_radio_btn">
                                <input type="radio" name="" id="">
                                <span class="checkmark"></span> Last 30 days
                            </label>
                            <label class="circle_radio_btn">
                                <input type="radio" name="" id="">
                                <span class="checkmark"></span> Last 7 days
                            </label>
                            <label class="circle_radio_btn">
                                <input type="radio" name="" id="">
                                <span class="checkmark"></span> Last 24 hours
                            </label>
                            <label class="circle_radio_btn">
                                <input type="radio" name="" id="">
                                <span class="checkmark"></span> Current utilization summary (Last 2 hours)
                            </label>
                        </fieldset>
                        <fieldset class="fieldset max_w_795">
                            <legend>Availability / Uptime</legend>
                            <label class="form_bold_label">Load</label>
                            <div class="cols_inputs_wrpr max_w_661">
                                <div class="col">
                                    <div class="form-control">
                                        <label class="form-label">More than</label>
                                        <div class="control-details">
                                            <input type="text" class="control" placeholder="0">
                                            <div class="details-field">%</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-control">
                                        <label class="form-label">Less than</label>
                                        <div class="control-details">
                                            <input type="text" class="control" placeholder="0">
                                            <div class="details-field">%</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-control">
                                        <label class="form-label">Equal to</label>
                                        <div class="control-details">
                                            <input type="text" class="control" placeholder="0">
                                            <div class="details-field">%</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <label class="form_bold_label">Date and Time</label>
                            <div class="group_inputs_with_radio">
                                <label class="circle_radio_btn">
                                    <input type="radio" name="" id="" checked>
                                    <span class="checkmark"></span> Date span
                                </label>
                                <div class="cols_inputs_wrpr">
                                    <div class="col">
                                        <div class="form-control">
                                            <label class="form-label">From date/time</label>
                                            <div class="multiple_control_group datepicker_controls_group">
                                                <div class="control_with_icon">
                                                    <input type="text" class="control" placeholder="Select date" disabled>
                                                    <div class="icon">
                                                        <?php include "img/calendar_icon.svg"; ?>
                                                    </div>
                                                </div>
                                                <div class="control_with_icon time_input_wrpr">
                                                    <input type="text" class="control" placeholder="Time" disabled>
                                                    <div class="icon">
                                                        <?php include "img/clock_icon.svg"; ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-control">
                                            <label class="form-label">To date/time</label>
                                            <div class="multiple_control_group datepicker_controls_group">
                                                <div class="control_with_icon">
                                                    <input type="text" class="control" placeholder="Select date" disabled>
                                                    <div class="icon">
                                                        <?php include "img/calendar_icon.svg"; ?>
                                                    </div>
                                                </div>
                                                <div class="control_with_icon time_input_wrpr">
                                                    <input type="text" class="control" placeholder="Time" disabled>
                                                    <div class="icon">
                                                        <?php include "img/clock_icon.svg"; ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <label class="circle_radio_btn">
                                <input type="radio" name="" id="">
                                <span class="checkmark"></span> Last 30 days
                            </label>
                            <label class="circle_radio_btn">
                                <input type="radio" name="" id="">
                                <span class="checkmark"></span> Last 7 days
                            </label>
                            <label class="circle_radio_btn">
                                <input type="radio" name="" id="">
                                <span class="checkmark"></span> Last 24 hours
                            </label>
                            <label class="circle_radio_btn">
                                <input type="radio" name="" id="">
                                <span class="checkmark"></span> Current utilization summary (Last 2 hours)
                            </label>
                        </fieldset>
                        <fieldset class="fieldset max_w_795">
                            <legend>Interface Utilization</legend>
                            <label class="form_bold_label">Load</label>
                            <div class="cols_inputs_wrpr max_w_661">
                                <div class="col">
                                    <div class="form-control">
                                        <label class="form-label">More than</label>
                                        <div class="control-details">
                                            <input type="text" class="control" placeholder="0">
                                            <div class="details-field">%</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-control">
                                        <label class="form-label">Less than</label>
                                        <div class="control-details">
                                            <input type="text" class="control" placeholder="0">
                                            <div class="details-field">%</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-control">
                                        <label class="form-label">Equal to</label>
                                        <div class="control-details">
                                            <input type="text" class="control" placeholder="0">
                                            <div class="details-field">%</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <label class="form_bold_label">Date and Time</label>
                            <div class="group_inputs_with_radio">
                                <label class="circle_radio_btn">
                                    <input type="radio" name="" id="" checked>
                                    <span class="checkmark"></span> Date span
                                </label>
                                <div class="cols_inputs_wrpr">
                                    <div class="col">
                                        <div class="form-control">
                                            <label class="form-label">From date/time</label>
                                            <div class="multiple_control_group datepicker_controls_group">
                                                <div class="control_with_icon">
                                                    <input type="text" class="control" placeholder="Select date" disabled>
                                                    <div class="icon">
                                                        <?php include "img/calendar_icon.svg"; ?>
                                                    </div>
                                                </div>
                                                <div class="control_with_icon time_input_wrpr">
                                                    <input type="text" class="control" placeholder="Time" disabled>
                                                    <div class="icon">
                                                        <?php include "img/clock_icon.svg"; ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-control">
                                            <label class="form-label">To date/time</label>
                                            <div class="multiple_control_group datepicker_controls_group">
                                                <div class="control_with_icon">
                                                    <input type="text" class="control" placeholder="Select date" disabled>
                                                    <div class="icon">
                                                        <?php include "img/calendar_icon.svg"; ?>
                                                    </div>
                                                </div>
                                                <div class="control_with_icon time_input_wrpr">
                                                    <input type="text" class="control" placeholder="Time" disabled>
                                                    <div class="icon">
                                                        <?php include "img/clock_icon.svg"; ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <label class="circle_radio_btn">
                                <input type="radio" name="" id="">
                                <span class="checkmark"></span> Last 30 days
                            </label>
                            <label class="circle_radio_btn">
                                <input type="radio" name="" id="">
                                <span class="checkmark"></span> Last 7 days
                            </label>
                            <label class="circle_radio_btn">
                                <input type="radio" name="" id="">
                                <span class="checkmark"></span> Last 24 hours
                            </label>
                            <label class="circle_radio_btn">
                                <input type="radio" name="" id="">
                                <span class="checkmark"></span> Current utilization summary (Last 2 hours)
                            </label>
                        </fieldset>
                    </div>
                    <div class="btns-wrap">
                        <a href="#" class="cancel">Save and close</a>
                        <a href="#" class="btn btn-secondary">Generate</a>
                    </div>
                </div>
                <div class="right_menu">
                    <ul class="operations_sidebar_reports_menu">
                        <li>
                            <a href="" class="active">
                                <div class="icon"><?php include "img/operations_sidebar_reports_menu_1.svg"; ?></div> Device
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <div class="icon"><?php include "img/operations_sidebar_reports_menu_2.svg"; ?></div> Metrics
                            </a>
                            <ul class="sub_menu">
                                <li><a href="">CPU Utilization</a></li>
                                <li><a href="">Memory Utilization</a></li>
                                <li><a href="">Disk Space Utilization</a></li>
                                <li><a href="">Bandwidth Utilization</a></li>
                                <li><a href="">Temperature</a></li>
                                <li><a href="">Power Supply</a></li>
                                <li><a href="">Interface Utilization</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </main>
    </div>

    <?php include "inc/system-info-popup.php"; ?>

<?php include "inc/footer.php"; ?>