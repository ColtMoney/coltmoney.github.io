<div class="system_info_popup device-properties">
    <div class="popup_header">
        <h3 class="system_ip">Device Properties</h3>
        <a href="" class="close_popup_btn">
            <?php include "img/close_icon.svg" ?>
        </a>
    </div>
    <form class="change-device-name">
        <div class="form-control">
            <label class="form-label">Device name</label>
            <input type="text" class="control" placeholder="Admgr-mbx">
        </div>
        <div class="btn-wrap">
            <button class="btn btn-primary">Change</button>
        </div>
    </form>
    <div class="module-box">
        <div class="header-box">
            <h3 class="title">Label Position</h3>
            <div class="wrapper_icon">
                <a href="#" class="btn_icon_only">
                    <?php include "img/select-arrow.svg" ?>
                </a>
            </div>
        </div>
        <div class="body-box">
            <div class="prop-items">
                <div class="left">
                    <div class="prop-item">
                        <div class="prop-name">Colors</div>
                        <div class="prop-option">
                            <div class="form-control">
                                <label class="checkbox">
                                    <input type="checkbox">
                                    <span class="checkmark"></span>
                                    <div class="checkbox-text">Show label</div>
                                </label>
                                <div class="control-color">
                                    <input type="color" class="control">
                                </div>
                            </div>
                        </div>
                        <div class="prop-option">
                            <div class="form-control">
                                <label class="checkbox">
                                    <input type="checkbox">
                                    <span class="checkmark"></span>
                                    <div class="checkbox-text">Label background</div>
                                </label>
                                <div class="control-color">
                                    <input type="color" class="control">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="prop-item">
                        <div class="prop-name">Device Icon</div>
                        <div class="prop-option">
                            <div class="form-control">
                                <label class="circle_radio_btn">
                                    <input type="radio" checked name="device-icon" id="">
                                    <span class="checkmark"></span>Default icon
                                </label>
                                <div class="select">
                                    <select>
                                        <option value="1">Device icon</option>
                                        <option value="2">Device icon 1</option>
                                        <option value="3">Device icon 2</option>
                                        <option value="4">Device icon 3</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="prop-option">
                            <div class="form-control">
                                <label class="circle_radio_btn">
                                    <input type="radio" name="device-icon" id="">
                                    <span class="checkmark"></span>Custom icon
                                </label>
                                <div class="select">
                                    <select>
                                        <option value="1">Device icon</option>
                                        <option value="2">Device icon 1</option>
                                        <option value="3">Device icon 2</option>
                                        <option value="4">Device icon 3</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="right">
                    <div class="device-position">
                        <div class="row">
                            <div class="item active"></div>
                            <div class="item"></div>
                            <div class="item"></div>
                        </div>
                        <div class="row">
                            <div class="item"></div>
                            <div class="central"><img src="img/box-icon.svg" alt=""></div>
                            <div class="item"></div>
                        </div>
                        <div class="row">
                            <div class="item"></div>
                            <div class="item"></div>
                            <div class="item"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="module-box">
        <div class="header-box">
            <h3 class="title">Edit Configuration</h3>
            <div class="wrapper_icon">
                <a href="#" class="btn_icon_only">
                    <?php include "img/select-arrow.svg" ?>
                </a>
            </div>
        </div>
        <div class="body-box">
            <div class="device-config">
                <div class="form-control">
                    <label class="form-label">Name</label>
                    <input type="text" class="control" placeholder="MyName">
                </div>
                <div class="form-control">
                    <label class="form-label">Polling IP Address</label>
                    <input type="text" class="control" placeholder="XXX.XXX.XXX.XXX">
                </div>
                <div class="form-control">
                    <label class="form-label">Subnet Mask</label>
                    <input type="text" class="control" placeholder="XXX.XXX.XXX.XXX">
                </div>
                <div class="form-control">
                    <label class="form-label">SNMP and ICMP Based</label>
                    <div class="select">
                        <select>
                            <option value="1">SNMPv1</option>
                            <option value="2">SNMPv2</option>
                            <option value="3">SNMPv3</option>
                            <option value="4">SNMPv4</option>
                        </select>
                    </div>
                </div>
                <div class="form-control">
                    <label class="form-label">WMI and ICMP Based</label>
                    <div class="select">
                        <select>
                            <option value="1">SNMPv1</option>
                            <option value="2">SNMPv2</option>
                            <option value="3">SNMPv3</option>
                            <option value="4">SNMPv4</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bottom-info">
        <div class="left">
            <div class="delete-device">
                <div class="icon"><img src="img/box-icon.svg" alt=""></div>Delete Device
            </div>
        </div>
        <div class="right">
            <a href="#" class="close">Close</a>
            <a href="#" class="btn btn-primary">Save</a>
        </div>
    </div>
</div>