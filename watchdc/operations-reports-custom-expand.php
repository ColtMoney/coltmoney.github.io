<?php include "inc/head.php"; ?>

    <div class="wrapper">
        <aside class="left-sidebar">
            <?php include "inc/sidebar.php"; ?>
        </aside>
        <main class="main-content">
            <ul class="big_breadcrumbs">
                <li>Custom report</li>
            </ul>
            <div class="operations_new_report card-info">
                <div class="left_side w_100">
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
                    <div class="btns-wrap">
                        <a href="#" class="cancel maxw_84">Back</a>
                        <a href="#" class="btn btn-secondary">Next</a>
                    </div>
                </div>
            </div>
        </main>
    </div>

    <?php include "inc/system-info-popup.php"; ?>

<?php include "inc/footer.php"; ?>