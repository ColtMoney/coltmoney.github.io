<div class="system_info_popup device-properties">
    <div class="popup_header">
        <h3 class="system_ip">Connection Properties</h3>
        <a href="" class="close_popup_btn">
            <?php include "img/close_icon.svg" ?>
        </a>
    </div>
    <form class="change-device-name">
        <div class="form-control">
            <label class="form-label">Connection name</label>
            <input type="text" class="control" placeholder="Admgr-mbx">
        </div>
        <div class="btn-wrap">
            <button class="btn btn-primary">Change</button>
        </div>
    </form>
    <div class="module-box">
        <div class="header-box">
            <h3 class="title">Connect Decoration</h3>
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
                        <div class="prop-option">
                            <div class="prop-name">Style</div>
                            <div class="form-control">
                                <label class="checkbox">
                                    <input type="checkbox">
                                    <span class="checkmark"></span>
                                    <div class="checkbox-text">Change color</div>
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
                                    <div class="checkbox-text">Shape</div>
                                </label>
                                <div class="select">
                                    <select>
                                        <option value="1">Shape 1</option>
                                        <option value="2">Shape 2</option>
                                        <option value="3">Shape 3</option>
                                        <option value="4">Shape 4</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="prop-item without-prop-name">
                        <div class="prop-option">
                            <div class="form-control">
                                <label class="checkbox">
                                    <input type="checkbox">
                                    <span class="checkmark"></span>
                                    <div class="checkbox-text">Transparency</div>
                                </label>
                                <div class="control-details">
                                    <input type="text" class="control" placeholder="0">
                                    <div class="details-field">%</div>
                                </div>
                            </div>
                        </div>
                        <div class="prop-option">
                            <div class="form-control">
                                <label class="checkbox">
                                    <input type="checkbox">
                                    <span class="checkmark"></span>
                                    <div class="checkbox-text">Shape</div>
                                </label>
                                <div class="control-details">
                                    <input type="text" class="control" placeholder="0">
                                    <div class="details-field">px</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="right">
                    <div class="device-position">
                        <div class="left">
                            <div class="central sm"><img src="img/box-icon.svg" alt=""></div>
                        </div>
                        <div class="middle"><img src="img/line-dashed.png" alt=""></div>
                        <div class="right">
                            <div class="central sm"><img src="img/box-icon.svg" alt=""></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="module-box">
        <div class="header-box">
            <h3 class="title">Connection between</h3>
            <div class="wrapper_icon">
                <a href="#" class="btn_icon_only">
                    <?php include "img/select-arrow.svg" ?>
                </a>
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