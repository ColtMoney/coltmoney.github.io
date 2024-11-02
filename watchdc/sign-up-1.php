<?php include "inc/head.php"; ?>

    <section class="s-sign-up s-intro">
        <div class="top-intro">
            <a href="#" class="logo"><img src="img/logo-wmdc.png" alt=""></a>
            <p>
                Holisticly incubate global models and an expanded array of e-tailers. Continually maximize prospective
                testing procedures with reliable communities.
            </p>
        </div>
        <div class="form-card">
            <div class="proggres-top">
                <div class="status-line in-progress"></div>
                <div class="prog-status in-progress">In progress</div>
                <div class="prog-status waiting">Waiting</div>
            </div>
            <h4 class="sm-title text-center">Create your account</h4>
            <form>
                <div class="form-control">
                    <label class="form-label">First name</label>
                    <input type="text" class="control" placeholder="Enter name">
                </div>
                <div class="form-control">
                    <label class="form-label">Last name</label>
                    <input type="text" class="control" placeholder="Enter last name">
                </div>
                <div class="form-control">
                    <label class="form-label">Email</label>
                    <input type="email" class="control" placeholder="mail@example.com">
                </div>
                <div class="form-control">
                    <label class="form-label">Phone number</label>
                    <div class="control-with-dropdown">
                        <div class="select-dropdown">
                            <div class="selected-wrap">
                                <div class="selected-item"><?php include "img/phone-flag-1.svg"; ?></div>
                                <div class="expand-down"><?php include "img/select-arrow.svg"; ?></div>
                            </div>
                            <div class="dropdown-list">
                                <div class="drop-item">
                                    <div class="flag-icon"><?php include "img/phone-flag-1.svg"; ?></div>
                                    <span>US</span>
                                </div>
                                <div class="drop-item">
                                    <div class="flag-icon"><?php include "img/phone-flag-1.svg"; ?></div>
                                    <span>US</span>
                                </div>
                                <div class="drop-item">
                                    <div class="flag-icon"><?php include "img/phone-flag-1.svg"; ?></div>
                                    <span>US</span>
                                </div>
                            </div>
                        </div>
                        <input type="tel" class="control">
                    </div>
                </div>
                <div class="form-control">
                    <label class="form-label">Password</label>
                    <input type="password" class="control invalid" placeholder="Enter password">
                    <div class="failed-icon"><?php include "img/failed-icon.svg"; ?></div>
                    <span class="control-error">
                    Password should contain a special character, an uppercase, a lowercase
                    and a number
                </span>
                </div>
                <div class="form-control">
                    <label class="form-label">Re-enter your password</label>
                    <input type="password" class="control" placeholder="Re-enter password">
                </div>
                <div class="form-control">
                    <label class="checkbox">
                        <input type="checkbox" checked="checked">
                        <span class="checkmark"></span>
                        <div class="checkbox-text">Remember me</div>
                    </label>
                </div>
                <div class="form-details">
                    <span class="mark">*</span>
                    <p>
                        Required fields. By signing up, you agree to the <a href="#">Free-Trial Agreement</a>, <a
                                href="#">Privacy Policy</a> and <a href="#">Cookie Policy</a>
                    </p>
                </div>
                <div class="recaptcha">
                    <div id="capcha1" class="g-recaptcha" data-sitekey="6LfCJ-wUAAAAAHp6oL28YcsBFdU03Ou65jc9ymyA"></div>
                    <div class="text-danger" id="recaptchaError"></div>

					<?php
					$recaptcha = $_POST['g-recaptcha-response'];
					if ( ! empty( $recaptcha ) ) {
						$secret = '6LfCJ-wUAAAAAPfYdUFHi5Z0k02ksIV1xwoMTls4';
						$res    = file_get_contents( 'https://www.google.com/recaptcha/api/siteverify?secret=' . $secret . '&response=' . $recaptcha );
						$res    = json_decode( $res, true );
					} else {

					}
					?>
                </div>
                <div class="btn-wrap">
                    <button class="btn btn-primary">Enter</button>
                </div>
                <p class="form-btm-text">
                    If you already have an account, please <a href="#">Log in</a>
                </p>
            </form>
        </div>
    </section>

<?php include "inc/footer.php"; ?>