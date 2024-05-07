<div>

    <!-- ==========================================================
2.*Hero_area start
============================================================ -->
    <div class="romana_allPage_area">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="romana_allPage_text text-center">
                        <h1>donation page</h1>
                        <ol class="breadcrumb">
                            <li><a href="/" wire:navigate>Home</a><span></span></li>
                            <li><a href="#">Donation</a></li>
                        </ol>
                    </div>
                </div>
                <!-- column End -->
            </div>
            <!-- row End -->
        </div>
        <!-- container End -->
    </div>
    <!--=============================================
3.*romana_children_area  start
===============================================-->
    <div class="romana_cause_detail_area romana_donation_page" id="donate">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="romana_donation_info">
                        <h3>Donation Information</h3>
                        <h4>You are Donating to </h4>
                        <div class="field select_option_one">
                            <select id="select2">
                                <option value="">Food for Children</option>
                                <option value="1">Food for Children</option>
                                <option value="2">Food for Children</option>
                                <option value="3">Food for Children</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-sm-7 col-sm-offset-1">
                    <div class="romana_donation_info romana_donation_info2">
                        <p>Amount <span>*</span></p>
                        <form action="#">
                            <div class="romana_donation_method">
                                <ul>
                                    <li>
                                        <input type="radio" id="option3" name="selector">
                                        <label for="option3">$5</label>
                                        <div class="check"></div>
                                    </li>
                                    <li>
                                        <input type="radio" id="option4" name="selector" checked>
                                        <label for="option4">$10</label>
                                        <div class="check"></div>
                                    </li>
                                    <li>
                                        <input type="radio" id="option5" name="selector">
                                        <label for="option5">$15</label>
                                        <div class="check"></div>
                                    </li>
                                    <li>
                                        <input type="radio" id="option6" name="selector">
                                        <label for="option6">$20</label>
                                        <div class="check"></div>
                                    </li>
                                    <li><span>or</span>
                                        <input type="text" placeholder="Your Amount(USD)">
                                    </li>
                                </ul>
                            </div>
                        </form>
                    </div>
                    <!-- column End -->
                </div>
            </div>
            <!-- row End -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="romana_cause_detail_form romana_common_form">
                        <h3>Donar Information</h3>
                        <form action="https://formspree.io/crazycafe@gmail.com" method="POST">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="field">
                                        <label class="placeholder">
                                            First name
                                            <span class="star_color">*</span>
                                        </label>
                                        <input id="FistName" type="text" name="donation_FistName" />
                                    </div>
                                    <div class="field">
                                        <label class="placeholder">
                                            Email
                                            <span class="star_color">*</span>
                                        </label>
                                        <input id="userEmail" type="text" name="donation_userEmail" />
                                    </div>
                                    <div class="field">
                                        <label class="placeholder">
                                            Address
                                            <span class="star_color">*</span>
                                        </label>
                                        <input id="address" type="text" name="donation_userEmail" />
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="field">
                                        <label class="placeholder">
                                            Last name
                                            <span class="star_color">*</span>
                                        </label>
                                        <input id="LastName" type="text" name="donation_LastName" />
                                    </div>
                                    <div class="field">
                                        <label class="placeholder">
                                            Phone Number
                                            <span class="star_color">*</span>
                                        </label>
                                        <input id="userPhone" type="text" name="donation_userPhone" />
                                    </div>
                                    <div class="field">
                                        <label class="placeholder">
                                            Additional Note
                                            <span class="star_color">*</span>
                                        </label>
                                        <input id="add_note" type="text" name="donation_add_note" />
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- romana_registration form End -->
                    <div class="romana_donation_method romana_donation_method2">
                        <h3>Donation Method</h3>
                        <form action="#">
                            <ul>
                                <li>
                                    <input type="radio" id="option1" name="selector">
                                    <label for="option1">cart</label>
                                    <div class="check"></div>
                                </li>
                                <li>
                                    <input type="radio" id="option2" name="selector" checked>
                                    <label for="option2">paypal</label>
                                    <div class="check"></div>
                                </li>
                            </ul>
                        </form>
                        <div class="cause_detail_donate_btn">
                            <a href="#" class="hvr-box-shadow-outset">Donate Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- container end -->
    </div>
</div>
