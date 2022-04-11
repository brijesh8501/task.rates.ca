<?php  require_once '../template-parts/header.php'; ?>
<section class="container" id="quote-insedit-section">

    <div class="quote-form">
        <div class="quote-form-header">
            <ul class="quote-form-steps desktop">
                <li class="quote-form-header-item quote-step-active" tabindex="0" data-target="#driver-info">
                    <span class="quote-form-header-item-label desktop d-none">Driver Info</span>
                    <span class="quote-form-header-item-label mobile d-none">Driver</span>
                </li>
                <li class="quote-form-header-item" tabindex="0" data-target="#vehicle-info">
                    <span class="quote-form-header-item-label desktop d-none">Vehicle Info</span>
                    <span class="quote-form-header-item-label mobile d-none">Vehicles</span>
                </li>
                <li class="quote-form-header-item" tabindex="0" data-target="#review-info">Review</li>
            </ul>
        </div>
        <div class="quote-form-body">
            <div class="quote-form-body-wrapper" id="driver-info">
                <div id="driver-info-msg"></div>
                <form name="driver-form" action="">
                    <div class="input-form-gridbox">
                        <div class="input-form-wrapper w-50">
                            <label for="first-name">First Name <span class="text-danger">*</span></label>
                            <input type="text" class="input-form" name="first-name" id="first-name" data-formatinput="firstletter" autofocus/>
                            <span class="input-form-msg" id="first-name-msg"></span>
                        </div>
                        <div class="input-form-wrapper w-50">
                            <label for="first-name">Last Name <span class="text-danger">*</span></label>
                            <input type="text" class="input-form" name="last-name" id="last-name" data-formatinput="firstletter" />
                            <span class="input-form-msg" id="last-name-msg"></span>
                        </div>
                    </div>
                    <div class="mt-2 input-form-wrapper">
                        <label for="phone-number">Phone Number <span class="text-danger">*</span></label>
                        <input type="text" class="input-form phone-number" name="phone-number" id="phone-number" data-formatinput="none" />
                        <span class="input-form-msg" id="phone-number-msg"></span>
                    </div>
                    <div class="mt-2 input-form-wrapper">
                        <label for="email-address">Email Address <span class="text-danger">*</span></label>
                        <input type="text" class="input-form email" name="email-address" id="email-address" data-formatinput="lowercase" />
                        <span class="input-form-msg" id="email-address-msg"></span>
                    </div>
                    <div class="mt-2 input-form-wrapper">
                        <label for="street-address">Street Address <span class="text-danger">*</span></label>
                        <input type="text" class="input-form" name="street-address" id="street-address" data-formatinput="firstletter" />
                        <span class="input-form-msg" id="street-address-msg"></span>
                    </div>
                    <div class="mt-2 input-form-gridbox">
                        <div class="input-form-wrapper w-33.33">
                            <label for="city">City <span class="text-danger">*</span></label>
                            <input type="txt" class="input-form" name="city" id="city" data-formatinput="firstletter" />
                            <span class="input-form-msg" id="city-msg"></span>
                        </div>
                        <div class="input-form-wrapper w-33.33">
                            <label for="province">Province <span class="text-danger">*</span></label>
                            <input type="txt" class="input-form" name="province" id="province" data-formatinput="firstletter" />
                            <span class="input-form-msg" id="province-msg"></span>
                        </div>
                        <div class="input-form-wrapper w-33.33">
                            <label for="Postal Code">Postal Code <span class="text-danger">*</span></label>
                            <input type="txt" class="input-form postal-code" name="postal-code" id="postal-code" data-formatinput="uppercase" />
                            <span class="input-form-msg" id="postal-code-msg"></span>
                        </div>
                    </div>
                </form>

            </div>
            <div class="quote-form-body-wrapper d-none" id="vehicle-info">
                <div id="vehicle-info-msg"></div>
                <form name="vehicle-form" action="">
                    <div class="input-form-wrapper" id="vehicle-year-box">
                        <label for="vehicle-year">Vehicle Year <span class="text-danger">*</span></label>
                        <input type="text" class="input-form yeardate" name="vehicle-year" id="vehicle-year" data-formatinput="none" />
                        <span class="input-form-msg" id="vehicle-year-msg"></span>
                    </div>
                    <div class="mt-2 input-form-wrapper" id="vehicle-make-box">
                        <label for="vehicle-make">Vehicle Make <span class="text-danger">*</span></label>
                        <input type="text" class="input-form" name="vehicle-make" id="vehicle-make" data-formatinput="uppercase" />
                        <span class="input-form-msg" id="vehicle-make-msg"></span>
                    </div>
                    <div class="mt-2 input-form-wrapper" id="vehicle-model-box">
                        <label for="vehicle-model">Vehicle Model <span class="text-danger">*</span></label>
                        <input type="text" class="input-form" name="vehicle-model" id="vehicle-model" data-formatinput="uppercase" />
                        <span class="input-form-msg" id="vehicle-model-msg"></span>
                    </div>
                    <div class="mt-2 vehicle-add-wrapper">
                        <button type="button" class="icon-btn d-none" id="cancel-update">Cancel</button>
                        <button type="button" class="icon-btn d-none submit-vehicle" id="save-vehicle" name="save-vehicle" data-action="save">
                            <img src="<?php echo SITE_PATH.'assets/icons/save-nobg.png'; ?>" alt="Save no background color" class="save-nobgicon icon d-none"/>
                            <img src="<?php echo SITE_PATH.'assets/icons/save-bg.png'; ?>" alt="Save with background color" class="save-bgicon icon"/>&nbsp;&nbsp;Save Changes
                        </button>
                        <button type="button" class="icon-btn submit-vehicle" id="add-vehicle" name="add-vehicle" data-action="add">
                            <img src="<?php echo SITE_PATH.'assets/icons/plus-nobg.png'; ?>" alt="Add no background color" class="plus-nobgicon icon d-none"/>
                            <img src="<?php echo SITE_PATH.'assets/icons/plus-bg.png'; ?>" alt="Add with background color" class="plus-bgicon icon"/>&nbsp;&nbsp;Add Vehicle
                        </button>
                    </div>
                </form>

                <div class="quote-vehicle-table-wrapper d-none table-wrapper" id="quote-vehicle-table-wrapper">
                    <table border="1" class="table quote-vehicle-table">
                        <thead>
                            <tr>
                                <td width="20%">#Vehicle Year</td>
                                <td width="30%">#Vehicle Make</td>
                                <td width="30%">#Vehicle Model</td>
                            </tr>
                        </thead>
                        <tbody class="text-center" id="data-quote-vehicle-table">
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="quote-form-body-wrapper d-none" id="review-info">
                <h2 class="text-center">Review Information</h2>
                <div class="review-info-wrapper" id="review-info-wrapper"></div>
            </div>

        </div>
        <div class="quote-form-footer">
            <div class="quote-form-footer-wrapper" id="driver-info-btn-wrapper">
                <div class="quote-footer-btn-wrapper">
                    <button class="btn-primary quote-next-btn" id="driver-info-continue-btn">Continue</button>
                </div>
            </div>
            <div class="quote-form-footer-wrapper d-none" id="vehicle-info-btn-wrapper">
                <div class="quote-footer-btn-wrapper">
                    <button class="btn-secondary quote-back-btn">Back</button>
                    <button class="btn-primary quote-next-btn" id="vehicle-info-continue-btn">Continue</button>
                </div>
            </div>
            <div class="quote-form-footer-wrapper d-none" id="review-info-btn-wrapper">
                <div class="quote-footer-btn-wrapper">
                    <button class="btn-secondary quote-back-btn">Back</button>
                    <button class="btn-primary quote-submit-btn" id="submit-quote">Get a Quote</button>
                </div>
            </div>
        </div>

    </div>

</section>

<?php  require_once '../template-parts/footer.php'; ?>