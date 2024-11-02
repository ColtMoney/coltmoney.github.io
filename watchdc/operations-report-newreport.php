<?php include "inc/head.php"; ?>

    <div class="wrapper">
        <aside class="left-sidebar">
            <?php include "inc/sidebar.php"; ?>
        </aside>
        <main class="main-content">
            <ul class="big_breadcrumbs">
                <li>New report</li>
            </ul>
            <div class="operations_new_report card-info">
                <div class="left_side">
                    <h3 class="lg-title">Set your check details</h3>
                    <h4 class="sm-title">Select the expected report to generate</h4>
                    <div class="radio_green_btns_wrpr">
                        <label class="radio_green_btn">
                            <input type="radio" name="report_inputs" id="">
                            <span class="radio_green_inner">Inventory Report</span>
                        </label>
                        <label class="radio_green_btn">
                            <input type="radio" name="report_inputs" id="" checked>
                            <span class="radio_green_inner">Node/Device Wise Report</span>
                        </label>
                        <label class="radio_green_btn">
                            <input type="radio" name="report_inputs" id="">
                            <span class="radio_green_inner">Sensor Wise Report</span>
                        </label>
                    </div>
                    <h4 class="sm-title">Set the duration</h4>
                    <div class="datapicker_block">
                        <div class="form-control">
                            <label class="form-label">From</label>
                            <input type="text" class="control" placeholder="Select date">
                        </div>
                        <div class="form-control">
                            <label class="form-label">To</label>
                            <input type="text" class="control" placeholder="Select date">
                        </div>
                    </div>
                    <div class="btns-wrap">
                        <a href="#" class="cancel">Save and Exit</a>
                        <a href="#" class="btn btn-secondary">Generate</a>
                    </div>
                </div>
                <div class="right_side">
                    <img src="img/custom_report_img.svg" alt="">
                    <h3 class="lg-title">Custom report</h3>
                    <p>If you need something special and individual</p>
                    <a href="" class="btn btn-secondary">Generate Report</a>
                </div>
            </div>
        </main>
    </div>

    <?php include "inc/system-info-popup.php"; ?>

<?php include "inc/footer.php"; ?>