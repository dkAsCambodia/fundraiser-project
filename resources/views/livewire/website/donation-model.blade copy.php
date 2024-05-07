 <!-- Donation Modal START  -->
 <div id="modal" class="uk-modal-container uk-flex-top" uk-modal>
     {{-- @dd($causeDetails); --}}
     <div class="uk-modal-dialog uk-margin-auto-vertical">
         <div class="uk-child-width-1-2@m" uk-grid>
             <div>
                 <div class="uk-card uk-card-default uk-card-body cpost-section">
                     <!-- <h2 class="uk-modal-title">dk1</h2> -->
                     <!-- Design -->
                     <div class="campaign-image-holder campaign-image-holder-desktop">
                         <img src ="{{ !empty($causeDetails->photo) ? env('ADMIN_URL') . 'storage/' . $causeDetails->photo : 'https://ucarecdn.com/ef2e85d9-cab0-4b53-bbaf-74db14adf71b/-/resize/516x/-/format/auto/' }}"
                             alt="campaign-image" class="popup-campaign-image"></img>
                     </div><br />
                     <div class="campaign campaign-desktop" data-qa="campaign-info-section">
                         <div class="campaign-header campaign-header-desktop" data-qa="ask-company-name">
                             {{ accountName($causeDetails->account_id) }}
                         </div>
                         <div class="campaign-body campaign-body-desktop" role="">
                             <div class="min-h-0" data-qa="ask-component">
                                 <h2 class="campaign-title campaign-title-desktop" data-qa="ask-title" dir="auto">
                                     {{ $causeDetails->title }}</h2>
                                 <p data-qa="ask-message" class="campaign-text campaign-text-desktop campaign-text-md"
                                     dir="auto">
                                 <p>{{ $causeDetails->short_details }}</p>
                                 <p>&nbsp;</p>
                                 <p><strong>Give confidently. 100% of your donation goes directly to aid and relief
                                         programs.<br></strong></p>
                                 </p>
                             </div>
                         </div>
                     </div>
                     <!-- Design -->
                 </div>
             </div>
             <div>
                 <div class="uk-card uk-card-default uk-card-body donation-section">

                     <!--Slide section Start -->
                     <div class="form-step-wrap">
                         <div id="step1box" class="slider-step first-step step" data-next-step="step-mortgage-balance">
                             <div class="row tall">
                                 <div class="col-xs-12 form-questions">

                                     <!-- for nodation step1 design START -->
                                     <div class="" style="background:#f5f5f5;">
                                         <div class="innerWrapperSidebar">
                                             <div class="secure-donation"><i class="fa-solid fa-shield"></i> Secure
                                                 Donation</div>
                                             <div class="tab-slider--nav">
                                                 <ul class="tab-slider--tabs">
                                                     <li class="tab-slider--trigger active" rel="tab1"
                                                         onclick="popuptabfuc(1)">Give once</li>
                                                     <li class="tab-slider--trigger" rel="tab2"
                                                         onclick="popuptabfuc(2)">Monthly</li>
                                                 </ul>
                                             </div>
                                             <div class="tab-slider--container">
                                                 <div id="tab1" class="tab-slider--body">
                                                     <div class="payments__method mb-2 radio-suggamount">
                                                         <input class="payments__input" id="paysix" type="radio"
                                                             value="{{ $causeDetails->suggested_amounts['six'] }}">
                                                         <label class="paymentsAmountChoice__label radio-button-inline"
                                                             for="paysix"><span
                                                                 class="currency-symbol">$</span>{{ $causeDetails->suggested_amounts['six'] }}</label>
                                                     </div>
                                                     <div class="payments__method mb-2 radio-suggamount">
                                                         <input class="payments__input" id="payfive" type="radio"
                                                             value="{{ $causeDetails->suggested_amounts['five'] }}">
                                                         <label class="paymentsAmountChoice__label radio-button-inline"
                                                             for="payfive"><span
                                                                 class="currency-symbol">$</span>{{ $causeDetails->suggested_amounts['five'] }}</label>
                                                     </div>
                                                     <div class="payments__method mb-2 radio-suggamount">
                                                         <input class="payments__input" id="payfour" type="radio"
                                                             value="{{ $causeDetails->suggested_amounts['four'] }}">
                                                         <label class="paymentsAmountChoice__label radio-button-inline"
                                                             for="payfour"><span
                                                                 class="currency-symbol">$</span>{{ $causeDetails->suggested_amounts['four'] }}</label>
                                                     </div>
                                                     <div class="payments__method mb-2 radio-suggamount">
                                                         <input class="payments__input" id="paythree" type="radio"
                                                             value="{{ $causeDetails->suggested_amounts['three'] }}">
                                                         <label class="paymentsAmountChoice__label radio-button-inline"
                                                             for="paythree"><span
                                                                 class="currency-symbol">$</span>{{ $causeDetails->suggested_amounts['three'] }}</label>
                                                     </div>
                                                     <div class="payments__method mb-2 radio-suggamount">
                                                         <input class="payments__input" id="paytwo" type="radio"
                                                             value="{{ $causeDetails->suggested_amounts['two'] }}">
                                                         <label class="paymentsAmountChoice__label radio-button-inline"
                                                             for="paytwo"><span
                                                                 class="currency-symbol">$</span>{{ $causeDetails->suggested_amounts['two'] }}</label>
                                                     </div>
                                                     <div class="payments__method mb-2 radio-suggamount">
                                                         <input class="payments__input" id="payone" type="radio"
                                                             value="{{ $causeDetails->suggested_amounts['one'] }}">
                                                         <label class="paymentsAmountChoice__label radio-button-inline"
                                                             for="payone"><span
                                                                 class="currency-symbol">$</span>{{ $causeDetails->suggested_amounts['one'] }}</label>
                                                     </div>
                                                 </div>
                                                 <div id="tab2" class="tab-slider--body">
                                                     <div class="payments__method mb-2 radio-suggamount">
                                                         <input class="payments__input" id="payone" type="radio"
                                                             value="{{ $causeDetails->suggested_amounts['one'] }}">
                                                         <label class="paymentsAmountChoice__label radio-button-inline"
                                                             for="payone"><span
                                                                 class="currency-symbol">$</span>{{ $causeDetails->suggested_amounts['one'] }}</label>
                                                     </div>
                                                     <div class="payments__method mb-2 radio-suggamount">
                                                         <input class="payments__input" id="paytwo" type="radio"
                                                             value="{{ $causeDetails->suggested_amounts['two'] }}">
                                                         <label class="paymentsAmountChoice__label radio-button-inline"
                                                             for="paytwo"><span
                                                                 class="currency-symbol">$</span>{{ $causeDetails->suggested_amounts['two'] }}</label>
                                                     </div>
                                                     <div class="payments__method mb-2 radio-suggamount">
                                                         <input class="payments__input" id="paythree" type="radio"
                                                             value="{{ $causeDetails->suggested_amounts['three'] }}">
                                                         <label class="paymentsAmountChoice__label radio-button-inline"
                                                             for="paythree"><span
                                                                 class="currency-symbol">$</span>{{ $causeDetails->suggested_amounts['three'] }}</label>
                                                     </div>
                                                     <div class="payments__method mb-2 radio-suggamount">
                                                         <input class="payments__input" id="payfour" type="radio"
                                                             value="{{ $causeDetails->suggested_amounts['four'] }}">
                                                         <label class="paymentsAmountChoice__label radio-button-inline"
                                                             for="payfour"><span
                                                                 class="currency-symbol">$</span>{{ $causeDetails->suggested_amounts['four'] }}</label>
                                                     </div>
                                                     <div class="payments__method mb-2 radio-suggamount">
                                                         <input class="payments__input" id="payfive" type="radio"
                                                             value="{{ $causeDetails->suggested_amounts['five'] }}">
                                                         <label class="paymentsAmountChoice__label radio-button-inline"
                                                             for="payfive"><span
                                                                 class="currency-symbol">$</span>{{ $causeDetails->suggested_amounts['five'] }}</label>
                                                     </div>
                                                     <div class="payments__method mb-2 radio-suggamount">
                                                         <input class="payments__input" id="paysix" type="radio"
                                                             value="{{ $causeDetails->suggested_amounts['six'] }}">
                                                         <label class="paymentsAmountChoice__label radio-button-inline"
                                                             for="paysix"><span
                                                                 class="currency-symbol">$</span>{{ $causeDetails->suggested_amounts['six'] }}</label>
                                                     </div>
                                                 </div>
                                             </div>



                                             <div class=""
                                                 style="min-height: 300px !important; position: relative;">
                                                 <!--[if BLOCK]><![endif]-->
                                                 {{-- @foreach ($causeDetails->suggested_amounts as $key => $suggestedAmounts)
                                                    <!-- <div class="payments__method mb-2">
                                                        <input class="payments__input" id="pay{{ $key }}" type="radio"

                                                            value="{{ $suggestedAmounts }}">
                                                        <label class="paymentsAmountChoice__label radio-button-inline"
                                                            for="pay{{ $key }}">${{ $suggestedAmounts }}</label>
                                                    </div> -->
                                                @endforeach --}}
                                                 <!--[if ENDBLOCK]><![endif]-->

                                                 <div class="paymentsInput" style="margin-top:50px;">
                                                     <div class="customDonationFieldDiv">
                                                         <x-input class="block w-full" type="number"
                                                             class="Final_amount" placeholder="Custom Donation"
                                                             value="{{ $causeDetails->default_amount }}" />
                                                         <select
                                                             class="form-control currency-dropdown  currency-selector"
                                                             onchange="currencyselectorFun(this.value)">
                                                             <option value="USD" data-symbol="&#36;"
                                                                 selected="selected">United States Dollars</option>
                                                             <option value="THB" data-symbol="&#3647;">Thailand
                                                                 Baht</option>
                                                             <option value="INR" data-symbol="&#8377;">India Rupees
                                                             </option>
                                                             <option value="CNY" data-symbol="&#165;">China Yuan
                                                                 Renmimbi</option>
                                                             <option value="MYR" data-symbol="&#82;&#77;">Malaysia
                                                                 Ringgit</option>
                                                             <option value="PHP" data-symbol="&#8369;">Philippines
                                                                 Pesos</option>
                                                             <option value="IDR" data-symbol="&#82;&#112;">
                                                                 Indonesia Rupiah</option>
                                                             <option value="SAR" data-symbol="&#65020;">Saudi
                                                                 Arabia Riyal</option>
                                                             <option value="EUR" data-symbol="&#8364;">Euro
                                                             </option>
                                                             <option value="AUD" data-symbol="&#36;">Australia
                                                                 Dollars</option>
                                                             <option value="SGD" data-symbol="&#36;">Singapore
                                                                 Dollars</option>
                                                             <option value="PKR" data-symbol="&#8360;">Pakistan
                                                                 Rupees</option>
                                                             <option value="GBP" data-symbol="&#163;">United
                                                                 Kingdom Pounds</option>
                                                             <option value="HKD" data-symbol="&#36;">Hong Kong
                                                                 Dollars</option>
                                                             <option value="DZD" data-symbol="&#1583;&#1580;">
                                                                 Algeria Dinars</option>
                                                             <option value="BSD" data-symbol="&#36;">Bahamas
                                                                 Dollars</option>
                                                             <option value="BBD" data-symbol="&#36;">Barbados
                                                                 Dollars</option>
                                                             <option value="BMD" data-symbol="&#36;">Bermuda
                                                                 Dollars</option>
                                                             <option value="CAD" data-symbol="&#36;">Canada Dollars
                                                             </option>
                                                             <option value="CLP" data-symbol="&#36;">Chile Pesos
                                                             </option>
                                                             <option value="DKK" data-symbol="&#107;&#114;">Denmark
                                                                 Kroner</option>
                                                             <option value="XCD" data-symbol="&#36;">Eastern
                                                                 Caribbean Dollars</option>
                                                             <option value="EGP" data-symbol="&#163;">Egypt Pounds
                                                             </option>
                                                             <option value="FJD" data-symbol="&#36;">Fiji Dollars
                                                             </option>
                                                             <option value="HUF" data-symbol="&#70;&#116;">Hungary
                                                                 Forint</option>
                                                             <option value="ISK" data-symbol="&#107;&#114;">Iceland
                                                                 Krona</option>
                                                             <option value="ILS" data-symbol="&#8362;">Israel New
                                                                 Shekels</option>
                                                             <option value="JMD" data-symbol="&#74;&#36;">Jamaica
                                                                 Dollars</option>
                                                             <option value="JPY" data-symbol="&#165;">Japan Yen
                                                             </option>
                                                             <option value="JOD" data-symbol="&#74;&#68;">Jordan
                                                                 Dinar</option>
                                                             <option value="KRW" data-symbol="&#8361;">Korea
                                                                 (South) Won</option>
                                                             <option value="LBP" data-symbol="&#163;">Lebanon
                                                                 Pounds</option>
                                                             <option value="NZD" data-symbol="&#36;">New Zealand
                                                                 Dollars</option>
                                                             <option value="NOK" data-symbol="&#107;&#114;">Norway
                                                                 Kroner</option>
                                                             <option value="ZAR" data-symbol="&#82;">South Africa
                                                                 Rand</option>
                                                             <option value="SEK" data-symbol="&#107;&#114;">Sweden
                                                                 Krona</option>
                                                             <option value="CHF" data-symbol="&#67;&#72;&#70;">
                                                                 Switzerland Francs</option>
                                                             <option value="TWD" data-symbol="&#78;&#84;&#36;">
                                                                 Taiwan Dollars</option>
                                                             <option value="TTD" data-symbol="&#36;">Trinidad and
                                                                 Tobago Dollars</option>
                                                             <option value="ZMK" data-symbol="&#90;&#75;">Zambia
                                                                 Kwacha</option>

                                                         </select>
                                                     </div>
                                                 </div>

                                                 <div class="myCheckDiv" style="margin-top:10px;">
                                                     <label for="remember_me" class="flex items-center full-width"
                                                         data-tooltip-location="right"
                                                         data-tooltip="Once you've donated, you'll be able to write a personalized message and send a card.">
                                                         <input type="checkbox"
                                                             class="rounded border-gray-300 text-green-600 shadow-sm focus:ring-green-500"
                                                             id="myCheck" onclick="checkboxFunction()"
                                                             name="remember">
                                                         <p class="ms-2 text-sm text-gray-600">Dedicate this donation
                                                         </p>
                                                     </label>
                                                 </div>
                                                 <x-input class="mt-1 w-full" name="commentsPost__input"
                                                     type="text" placeholder="Name of someone special to me"
                                                     id="checkboxInput" style="display:none" />

                                                 <div style="position: absolute; bottom:0;width:100%; ">
                                                     <div class="row" style="text-align:right;">
                                                         <p><b>Total Amount:</b><span class="currency-symbol">$</span>
                                                             <span
                                                                 class="Final_amount">{{ $causeDetails->default_amount }}</span>
                                                         </p>
                                                         <!-- <p><b>Total Campaigns: </b>1</p> -->
                                                     </div>
                                                     <!-- <div class=""> -->
                                                     <!--[if BLOCK]><![endif]-->

                                                     <div class="row DesignateToDiv">
                                                         <p class="DesignateTo">Designate to</p>
                                                         <select class="form-control DesignateTo-dropdown">
                                                             <option value="where needed most">where needed most
                                                             </option>
                                                             <option value="Yemen">Yemen</option>
                                                             <select>
                                                     </div>
                                                     <button type="button" tabindex="3"
                                                         class="full-width btn-next btn btn--styleOne btn--secondary it-btn  d-block">
                                                         <span class="btn__text">Pay Now</span>
                                                         <i class="fa-solid fa-heart btn__icon"></i>
                                                         <span class="it-btn__inner">
                                                             <span class="it-btn__blobs">
                                                                 <span class="it-btn__blob"></span>
                                                                 <span class="it-btn__blob"></span>
                                                                 <span class="it-btn__blob"></span>
                                                                 <span class="it-btn__blob"></span>
                                                             </span>
                                                         </span>
                                                     </button>

                                                     <!-- </div> -->

                                                 </div>
                                             </div>
                                         </div>
                                     </div>
                                     <!-- for nodation step1 design END -->

                                 </div>
                                 <!-- /Form Questions -->
                             </div>

                         </div>
                         <!-- Upper Text -->
                         <div id="step-mortgage-balance" class="slider-step step" data-next-step="step-home-value"
                             data-back-to="step1box">
                             <div class="row">
                                 <div class="col-xs-12  ">
                                     <!-- for nodation step2 design START -->
                                     <div class="" style="background:#f5f5f5;">
                                         <div class="innerWrapperSidebar">
                                             <div class="secure-donation">
                                                 <a class="btn-back"><i
                                                         class="fa fa-angle-left"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Become
                                                     a <span class="planName">Give once</span> supporter</a>
                                             </div>
                                             <div class=""
                                                 style="min-height: 500px !important; position: relative;">
                                                 <div class="block mt-4">
                                                     <div class="campaign-body campaign-body-desktop" role="">
                                                         <div class="min-h-0" data-qa="ask-component">
                                                             <center>
                                                                 <h5 class="campaign-title campaign-title-desktop"
                                                                     data-qa="ask-title" dir="auto">Will you
                                                                     consider becoming one of our valued <span
                                                                         class="planName">Give once</span>
                                                                     supporters by converting your <strong><span
                                                                             class="currency-symbol">$</span><span
                                                                             class="Final_amount">{{ $causeDetails->default_amount }}</span>
                                                                     </strong> contribution into a <span
                                                                         class="planName">Give once</span> donation?
                                                                     Ongoing <span class="planName">Give once</span>
                                                                     donations allow us to better focus
                                                                     on our mission.</h5>
                                                                 <center>
                                                         </div>
                                                     </div>
                                                 </div>

                                                 <div class=""
                                                     style=" position: absolute; bottom: 0;width:100%; ">
                                                     <div class="gift-div">
                                                         <button type="button" tabindex="5"
                                                             class="btn-next full-width btn btn-danger bg-danger text text-light px-10">Donate
                                                             <span class="currency-symbol">$</span><span
                                                                 class="Final_amount">{{ $causeDetails->default_amount }}</span>/<span
                                                                 class="planShortName">once</span></button>
                                                         <svg class="gift-icon p-abs centered-left z-index-2 ms-minus-5 mt-0-5"
                                                             aria-hidden="true" fill="none" height="73"
                                                             viewBox="0 0 72 73" width="72"
                                                             xmlns="http://www.w3.org/2000/svg"
                                                             xmlns:xlink="http://www.w3.org/1999/xlink"
                                                             data-qa="gift-box-icon">
                                                             <filter id="a-5747611689829708918"
                                                                 color-interpolation-filters="sRGB"
                                                                 filterUnits="userSpaceOnUse" height="72.3115"
                                                                 width="71.1349" x="0" y="0">
                                                                 <feFlood flood-opacity="0"
                                                                     result="BackgroundImageFix"></feFlood>
                                                                 <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                                                     type="matrix"
                                                                     values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0">
                                                                 </feColorMatrix>
                                                                 <feOffset dx="6" dy="2"></feOffset>
                                                                 <feGaussianBlur stdDeviation="4"></feGaussianBlur>
                                                                 <feColorMatrix type="matrix"
                                                                     values="0 0 0 0 0.591667 0 0 0 0 0.175035 0 0 0 0 0.199399 0 0 0 0.25 0">
                                                                 </feColorMatrix>
                                                                 <feBlend in2="BackgroundImageFix" mode="normal"
                                                                     result="effect1_dropShadow_8986_17614"></feBlend>
                                                                 <feBlend in="SourceGraphic"
                                                                     in2="effect1_dropShadow_8986_17614"
                                                                     mode="normal" result="shape"></feBlend>
                                                             </filter>
                                                             <filter id="b-5747611689829708918"
                                                                 color-interpolation-filters="sRGB"
                                                                 filterUnits="userSpaceOnUse" height="61.6255"
                                                                 width="61.1349" x="2" y="6.54346">
                                                                 <feFlood flood-opacity="0"
                                                                     result="BackgroundImageFix"></feFlood>
                                                                 <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                                                     type="matrix"
                                                                     values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0">
                                                                 </feColorMatrix>
                                                                 <feOffset dx="3" dy="3"></feOffset>
                                                                 <feGaussianBlur stdDeviation="1.5"></feGaussianBlur>
                                                                 <feColorMatrix type="matrix"
                                                                     values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.15 0">
                                                                 </feColorMatrix>
                                                                 <feBlend in2="BackgroundImageFix" mode="normal"
                                                                     result="effect1_dropShadow_8986_17614"></feBlend>
                                                                 <feBlend in="SourceGraphic"
                                                                     in2="effect1_dropShadow_8986_17614"
                                                                     mode="normal" result="shape"></feBlend>
                                                             </filter>
                                                             <linearGradient id="c-5747611689829708918"
                                                                 gradientUnits="userSpaceOnUse" x1="33.358"
                                                                 x2="55.1048" y1="36.8415" y2="38.8628">
                                                                 <stop offset="0" stop-color="#ff6375"></stop>
                                                                 <stop offset="1" stop-color="#f2394e"></stop>
                                                             </linearGradient>
                                                             <linearGradient id="d-5747611689829708918"
                                                                 gradientUnits="userSpaceOnUse" x1="57.652"
                                                                 x2="32.9253" y1="47.3215" y2="61.3441">
                                                                 <stop offset="0" stop-color="#db3448"></stop>
                                                                 <stop offset="1" stop-color="#f2394e"></stop>
                                                             </linearGradient>
                                                             <linearGradient id="e-5747611689829708918">
                                                                 <stop offset="0" stop-color="#ccc"></stop>
                                                                 <stop offset="1" stop-color="#fff"
                                                                     stop-opacity="0"></stop>
                                                             </linearGradient>
                                                             <linearGradient id="f-5747611689829708918"
                                                                 gradientUnits="userSpaceOnUse" x1="2.7417"
                                                                 x2="29.5784" xlink:href="#e-5747611689829708918"
                                                                 y1="5.62305" y2="16.674"></linearGradient>
                                                             <linearGradient id="g-5747611689829708918"
                                                                 gradientUnits="userSpaceOnUse" x1="57.6504"
                                                                 x2="30.8137" xlink:href="#e-5747611689829708918"
                                                                 y1="5.31152" y2="16.3625"></linearGradient>
                                                             <g filter="url(#a-5747611689829708918)">
                                                                 <g filter="url(#b-5747611689829708918)">
                                                                     <path
                                                                         d="m2 20.4733 27.5499-13.92.0169-.00984 27.5667 13.92894.0014.0009v6.8919l-2.4122 1.2362v20.6755l-25.1553 12.8922-25.15525-12.8922v-20.6755l-2.41215-1.2362z"
                                                                         fill="url(#c-5747611689829708918)"></path>
                                                                 </g>
                                                                 <path
                                                                     d="m4.41235 49.2779 25.15525 12.8921v-27.5674l-25.15525-12.8922z"
                                                                     fill="#ff6375"></path>
                                                                 <path
                                                                     d="m54.723 49.2779-25.1553 12.8921v-27.5674l25.1553-12.8922z"
                                                                     fill="#fb4d62"></path>
                                                                 <path
                                                                     d="m4.41235 30.3253 25.15525 12.8921v-8.6148l-25.15525-12.8922z"
                                                                     fill="#db3448" fill-opacity=".75"></path>
                                                                 <path
                                                                     d="m54.723 30.3253-25.1553 12.8921v-8.6148l25.1553-12.8922z"
                                                                     fill="#db3448" fill-opacity=".5"></path>
                                                                 <path
                                                                     d="m29.5499 6.5533-27.5499 13.92 27.5668 14.1274 27.5667-14.1283-27.5667-13.92894z"
                                                                     fill="#ff7787"></path>
                                                                 <path
                                                                     d="m2 20.4731 27.5674 14.1284v6.8918l-27.5674-14.1283z"
                                                                     fill="#fb4d62"></path>
                                                                 <path
                                                                     d="m57.1345 20.4731-27.5674 14.1284v6.8918l27.5674-14.1283z"
                                                                     fill="#ff6375"></path>
                                                                 <path
                                                                     d="m12.3378 53.3394v-27.5674l7.2364 3.7086v27.5675z"
                                                                     fill="#dcdcdc"></path>
                                                                 <path
                                                                     d="m47.1403 25.5949-7.2149 3.6978-10.1245-5.0269-10.2267 5.2146-7.223-3.7014 17.3508-8.8229z"
                                                                     fill="#f4f4f4"></path>
                                                                 <path
                                                                     d="m47.142 25.5952-7.2365 3.7087v27.5674l7.2365-3.7087z"
                                                                     fill="#dcdcdc"></path>
                                                                 <path
                                                                     d="m29.5676 62.3113-25.15525-12.8921v-.6892l25.15525 12.8921 25.1553-12.8921v.6892z"
                                                                     fill="url(#d-5747611689829708918)"
                                                                     fill-opacity=".2"></path>
                                                                 <path
                                                                     d="m45.8044 17.4261c-3.6871-.6226-7.6011 1.431-10.2537 2.8227-.9582.5027-1.7518.9191-2.3105 1.0917-.3618-.1451-.8792-.236-1.4538-.236h-3.9611c-.5567 0-1.0598.0853-1.4196.2226-.5213-.2107-1.1855-.5592-1.9564-.9637-2.6526-1.3917-6.5666-3.4453-10.2537-2.8227-3.9608.6687-4.65037 4.4568-3.9609 4.9658.4446.4109 4.6365.4646 15.7653-.1146.3474.2122.5804.9196 2 .9196h3.7864c.8521 0 1.9341-.7195 2.2136-1 11.2947.5993 15.3177.4941 15.7653.0804.6894-.509-.0001-4.2971-3.9609-4.9658z"
                                                                     fill="#db3448" fill-opacity=".5"></path>
                                                                 <path
                                                                     d="m10.469 20.0297-.004-.0098-.0047-.0094c-.0642-.1276-.1269-.3985-.1665-.8141-.0386-.4048-.0529-.9172-.0381-1.5046.0295-1.1746.1748-2.6343.4655-4.1076.291-1.4746.7256-2.9523 1.3292-4.16833.6061-1.22108 1.3661-2.14551 2.2897-2.56537 1.2648-.5749 2.5766-.25259 3.9015.62535 1.3277.87973 2.6251 2.29152 3.8183 3.80205.8432 1.0675 1.6238 2.1702 2.3226 3.1573.2902.4098.5662.7997.8267 1.1588.4409.6078.84 1.1311 1.1842 1.5038.1718.1861.3371.3425.4931.454.0795.0568.1653.1084.2555.1443v3.2766c-5.8992.8884-9.9813.9034-12.6427.5588-1.3471-.1744-2.3223-.4399-2.9824-.7258-.33-.1429-.5757-.2885-.7487-.426-.1748-.1391-.2631-.2601-.2992-.35z"
                                                                     fill="#f4f4f4"
                                                                     stroke="url(#f-5747611689829708918)"
                                                                     stroke-width=".5"></path>
                                                                 <path
                                                                     d="m49.9231 19.7182.004-.0098.0047-.0094c.0642-.1276.1269-.3985.1665-.8141.0386-.4048.0528-.9172.0381-1.5046-.0295-1.1746-.1748-2.6343-.4655-4.1076-.291-1.4746-.7257-2.9523-1.3292-4.16835-.6061-1.22108-1.3661-2.14551-2.2897-2.56537-1.2648-.5749-2.5766-.25259-3.9015.62535-1.3277.87973-2.6251 2.29151-3.8183 3.80207-.8432 1.0674-1.6238 2.1702-2.3226 3.1573-.2902.4098-.5662.7996-.8267 1.1588-.4409.6078-.84 1.1311-1.1842 1.5038-.1719.1861-.3371.3424-.4931.454-.0795.0568-.1654.1083-.2555.1443v3.2766c5.8992.8884 9.9813.9033 12.6427.5588 1.3471-.1744 2.3223-.44 2.9824-.7258.33-.1429.5757-.2885.7486-.426.1749-.1391.2632-.2601.2993-.35z"
                                                                     fill="#f4f4f4"
                                                                     stroke="url(#g-5747611689829708918)"
                                                                     stroke-width=".5"></path>
                                                                 <path
                                                                     d="m27.3922 17.498c-1.6553.0001-7.6553-13.37515-13.1553-10.87509-3.5 2.00014 9.4703 11.74249 13.1553 10.87509z"
                                                                     fill="#dcdcdc"></path>
                                                                 <path
                                                                     d="m32.9999 17.1864c1.6553.0002 7.6553-13.37507 13.1553-10.87501 3.5 2.00013-9.4703 11.74251-13.1553 10.87501z"
                                                                     fill="#dcdcdc"></path>
                                                                 <path
                                                                     d="m26.5256 18.0437c.2721-.9838 1.2851-1.3759 2.3057-1.3805.3098-.0014.6782-.0249 1.1217-.0812.5022-.0638.9385-.1108 1.309-.1455.9169-.0858 1.7218.5308 1.8747 1.4389.2481 1.4727.4432 3.5148-.3104 3.8119-1.1972.4719-3.5916-.2431-5.7466 0-1.3613.1535-1.0028-2.0209-.5541-3.6436z"
                                                                     fill="#f4f4f4"></path>
                                                             </g>
                                                         </svg>
                                                         </button>
                                                     </div>
                                                     <button type="button" tabindex="5"
                                                         class="full-width btn-next btn btn--styleOne btn--secondary it-btn  d-block">
                                                         <span class="btn__text">Keep my one-time <span
                                                                 class="currency-symbol">$</span><span
                                                                 class="Final_amount">{{ $causeDetails->default_amount }}</span>
                                                             gift</span>
                                                         <i class="fa-solid fa-heart btn__icon"></i>
                                                         <span class="it-btn__inner">
                                                             <span class="it-btn__blobs">
                                                                 <span class="it-btn__blob"></span>
                                                                 <span class="it-btn__blob"></span>
                                                                 <span class="it-btn__blob"></span>
                                                                 <span class="it-btn__blob"></span>
                                                             </span>
                                                         </span>
                                                     </button>
                                                     <!-- <input type='button' value='Keep my one-time $70,000 gift' tabindex="5" class="keep-btn fw-bold btn btn-success text text-light form-control btn-next"/> -->
                                                 </div>
                                             </div>
                                         </div>
                                     </div>
                                     <!-- for nodation step2 design END -->
                                 </div>
                             </div>
                         </div>
                         <!-- Mortgage Balance -->
                         <div id="step-home-value" class="slider-step step" data-next-step="step-interest-rate"
                             data-back-to="step-mortgage-balance">
                             <!-- for nodation step3 design START -->
                             <div class="" style="background:#f5f5f5;">
                                 <div class="innerWrapperSidebar">
                                     <div class="secure-donation">
                                         <a id="back-home-value" class="btn-back"><i
                                                 class="fa fa-angle-left"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Payment
                                             option</a>
                                     </div>
                                     <div class="" style="min-height: 500px !important; position: relative;">
                                         <div class="block mt-4">
                                             <div class="campaign-body campaign-body-desktop" role="">
                                                 <div class="min-h-0" data-qa="ask-component">
                                                     <center>
                                                         <h3 class="campaign-title campaign-title-desktop fw-bold"
                                                             data-qa="ask-title" dir="auto"><span
                                                                 class="currency-symbol">$</span><span
                                                                 class="Final_amount">{{ $causeDetails->default_amount }}</span>
                                                         </h3>
                                                         <center>
                                                 </div>
                                             </div>
                                         </div>

                                         <div role="checkbox" id="popover-fees" data-tooltip-location="right"
                                             data-tooltip="By covering ៛6,307 in transaction costs, you cover our processing and platform fees."
                                             class="fee-checkbox fee-checkbox-checked" aria-checked="true"
                                             tabindex="0" data-qa="cover-fee-checkbox"
                                             data-tracking-element-name="coverFee">
                                             <span class="fee-checkbox-bg"></span>
                                             <div
                                                 class="fixed-container d-flex align-items-center justify-content-center p-rel">
                                                 <div class="p-abs centered-left ms-minus-9 mt-minus-5">
                                                     <div>
                                                         <svg class="" aria-hidden="true" fill="none"
                                                             height="68" viewBox="0 0 56 68" width="56"
                                                             xmlns="http://www.w3.org/2000/svg"
                                                             xmlns:xlink="http://www.w3.org/1999/xlink">
                                                             <filter id="a-8621503249551849589"
                                                                 color-interpolation-filters="sRGB"
                                                                 filterUnits="userSpaceOnUse" height="31.4131"
                                                                 width="30.8215" x="7.42749" y="10.3657">
                                                                 <feFlood flood-opacity="0"
                                                                     result="BackgroundImageFix"></feFlood>
                                                                 <feBlend in="SourceGraphic" in2="BackgroundImageFix"
                                                                     mode="normal" result="shape"></feBlend>
                                                                 <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                                                     type="matrix"
                                                                     values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0">
                                                                 </feColorMatrix>
                                                                 <feOffset dy="-.5"></feOffset>
                                                                 <feGaussianBlur stdDeviation="1.5"></feGaussianBlur>
                                                                 <feComposite in2="hardAlpha" k2="-1"
                                                                     k3="1" operator="arithmetic">
                                                                 </feComposite>
                                                                 <feColorMatrix type="matrix"
                                                                     values="0 0 0 0 0.979167 0 0 0 0 0.3525 0 0 0 0 0 0 0 0 0.5 0">
                                                                 </feColorMatrix>
                                                                 <feBlend in2="shape" mode="normal"
                                                                     result="effect1_innerShadow_8986_21698"></feBlend>
                                                             </filter>
                                                             <linearGradient id="b-8621503249551849589"
                                                                 gradientUnits="userSpaceOnUse" x1="23.3018"
                                                                 x2="33.5" y1="25.1587" y2="35">
                                                                 <stop offset="0" stop-color="#ffba07"></stop>
                                                                 <stop offset="1" stop-color="#ff8a00"></stop>
                                                             </linearGradient>
                                                             <radialGradient id="c-8621503249551849589" cx="0"
                                                                 cy="0"
                                                                 gradientTransform="matrix(3.64090919 -8.738167 7.18621663 2.99426209 18.9327 24.4305)"
                                                                 gradientUnits="userSpaceOnUse" r="1">
                                                                 <stop offset=".317708" stop-color="#fff491"></stop>
                                                                 <stop offset="1" stop-color="#fff490"
                                                                     stop-opacity="0"></stop>
                                                             </radialGradient>
                                                             <linearGradient id="d-8621503249551849589"
                                                                 gradientUnits="userSpaceOnUse" x1="25.8578"
                                                                 x2="24.1154" y1="57.3837" y2="54.6061">
                                                                 <stop offset="0" stop-color="#ff522d"></stop>
                                                                 <stop offset="1" stop-color="#ff7b5f"></stop>
                                                             </linearGradient>
                                                             <radialGradient id="e-8621503249551849589" cx="0"
                                                                 cy="0"
                                                                 gradientTransform="matrix(2.583374 -.29682138 .24410427 2.12455258 24.357 55.5499)"
                                                                 gradientUnits="userSpaceOnUse" r="1">
                                                                 <stop offset=".317708" stop-color="#ffd3ab"></stop>
                                                                 <stop offset="1" stop-color="#ffd3ab"
                                                                     stop-opacity="0"></stop>
                                                             </radialGradient>
                                                             <clipPath id="f-8621503249551849589">
                                                                 <path d="m0 0h56v68h-56z"></path>
                                                             </clipPath>
                                                             <g clip-path="url(#f-8621503249551849589)">
                                                                 <g filter="url(#a-8621503249551849589)">
                                                                     <path
                                                                         d="m15.7885 11.8705c-.0023-.8288.9468-1.3005 1.6061-.7982l7.2797 5.5466c.2618.1995.605.2574.9177.1548l8.6962-2.8524c.7875-.2583 1.5294.4986 1.2554 1.2808l-3.0256 8.6374c-.1088.3106-.0578.6549.1364.9206l5.4001 7.3891c.489.6692-.0015 1.6087-.8302 1.5898l-9.1496-.2084c-.329-.0075-.6407.1474-.8334.4142l-5.3588 7.4191c-.4853.6719-1.5303.4957-1.7685-.2982l-2.6292-8.7662c-.0945-.3153-.3381-.5638-.6514-.6647l-8.71196-2.8038c-.78898-.2539-.94431-1.3023-.26285-1.7741l7.52471-5.2094c.2706-.1874.4317-.4959.4308-.825z"
                                                                         fill="url(#b-8621503249551849589)"></path>
                                                                     <path
                                                                         d="m15.7885 11.8705c-.0023-.8288.9468-1.3005 1.6061-.7982l7.2797 5.5466c.2618.1995.605.2574.9177.1548l8.6962-2.8524c.7875-.2583 1.5294.4986 1.2554 1.2808l-3.0256 8.6374c-.1088.3106-.0578.6549.1364.9206l5.4001 7.3891c.489.6692-.0015 1.6087-.8302 1.5898l-9.1496-.2084c-.329-.0075-.6407.1474-.8334.4142l-5.3588 7.4191c-.4853.6719-1.5303.4957-1.7685-.2982l-2.6292-8.7662c-.0945-.3153-.3381-.5638-.6514-.6647l-8.71196-2.8038c-.78898-.2539-.94431-1.3023-.26285-1.7741l7.52471-5.2094c.2706-.1874.4317-.4959.4308-.825z"
                                                                         fill="url(#c-8621503249551849589)"
                                                                         fill-opacity=".4"></path>
                                                                 </g>
                                                                 <path
                                                                     d="m27.6127 53.2098c.4692-.1126.8099.4391.4991.8082l-1.1699 1.3895c-.1023.1215-.1408.2843-.1038.4387l.4238 1.7663c.1126.4692-.4392.8099-.8083.4991l-1.3894-1.17c-.1215-.1022-.2843-.1407-.4387-.1037l-1.7663.4238c-.4692.1125-.8099-.4392-.4991-.8083l1.1699-1.3894c.1023-.1215.1408-.2843.1038-.4387l-.4238-1.7663c-.1126-.4693.4392-.81.8083-.4991l1.3894 1.1699c.1215.1023.2843.1408.4387.1038z"
                                                                     fill="url(#d-8621503249551849589)"></path>
                                                                 <path
                                                                     d="m27.6127 53.2098c.4692-.1126.8099.4391.4991.8082l-1.1699 1.3895c-.1023.1215-.1408.2843-.1038.4387l.4238 1.7663c.1126.4692-.4392.8099-.8083.4991l-1.3894-1.17c-.1215-.1022-.2843-.1407-.4387-.1037l-1.7663.4238c-.4692.1125-.8099-.4392-.4991-.8083l1.1699-1.3894c.1023-.1215.1408-.2843.1038-.4387l-.4238-1.7663c-.1126-.4693.4392-.81.8083-.4991l1.3894 1.1699c.1215.1023.2843.1408.4387.1038z"
                                                                     fill="url(#e-8621503249551849589)"
                                                                     fill-opacity=".4"></path>
                                                                 <path
                                                                     d="m50.0525 13.2436c.3656-.2587.8608.0569.7807.4976l-.3906 2.1497c-.024.1322.0061.2685.0838.3782l1.262 1.7836c.2587.3656-.0569.8608-.4975.7807l-2.1498-.3906c-.1322-.024-.2685.0062-.3782.0838l-1.7836 1.262c-.3656.2588-.8608-.0568-.7807-.4975l.3906-2.1497c.024-.1322-.0062-.2685-.0838-.3782l-1.262-1.7836c-.2587-.3656.0568-.8608.4975-.7808l2.1498.3907c.1322.024.2685-.0062.3782-.0838z"
                                                                     fill="#f90"></path>
                                                                 <path
                                                                     d="m9.40768 43.4483c.0297-.68.87682-.972 1.31922-.4549l.9325 1.0901c.1351.1579.3296.2527.5372.2618l1.4332.0626c.6799.0297.9719.8767.4548 1.3192l-1.0901.9325c-.1579.1351-.2527.3296-.2617.5372l-.0626 1.4331c-.0297.68-.8768.972-1.3192.4549l-.9326-1.0901c-.135-.1579-.3296-.2527-.53714-.2617l-1.43317-.0627c-.67992-.0297-.97197-.8767-.45482-1.3191l1.09007-.9326c.15789-.1351.25267-.3296.26174-.5372z"
                                                                     fill="#8ae5f1"></path>
                                                                 <circle cx="28.5" cy="4.5" fill="#7dc6ff"
                                                                     r="2.5"></circle>
                                                                 <circle cx="15.5" cy="66.5" fill="#ff7f24"
                                                                     r="1.5"></circle>
                                                                 <circle cx="49.5" cy="1.5" fill="#8ae5f1"
                                                                     r="1.5"></circle>
                                                             </g>
                                                         </svg>
                                                     </div>
                                                 </div>
                                                 <span class="flex-shrink-0 icon-slot icon-slot-18 me-2">
                                                     <span class="p-abs centered font-size-18">
                                                         <svg fill="none" height="20" viewBox="0 0 20 20"
                                                             width="20" xmlns="http://www.w3.org/2000/svg"
                                                             class="icon-stroke d-block">
                                                             <g stroke="currentColor" stroke-width="2">
                                                                 <path
                                                                     d="m16 1h-12c-1.65685 0-3 1.34315-3 3v12c0 1.6569 1.34315 3 3 3h12c1.6569 0 3-1.3431 3-3v-12c0-1.65685-1.3431-3-3-3z">
                                                                 </path>
                                                                 <path d="m15.5 6-7.5625 8-3.4375-3.6364"
                                                                     stroke-linecap="round" stroke-linejoin="round">
                                                                 </path>
                                                             </g>
                                                         </svg>
                                                     </span>
                                                 </span>
                                                 <span class="label-4 text-truncate text-noselect">Cover transaction
                                                     costs</span>
                                                 <span class="flex-shrink-0 icon-slot icon-slot-18 line-height-20 ms-2"
                                                     data-tooltip-location="right"
                                                     data-tooltip="By covering ៛6,307 in transaction costs, you cover our processing and platform fees.">
                                                     <!-- <button type="button" data-qa="transaction-cost-tip" class="btn-icon p-abs centered font-size-18 text-white" aria-label="Transaction costs explanation"> -->
                                                     <svg width="16" data-tooltip-location="right"
                                                         data-tooltip="By covering ៛6,307 in transaction costs, you cover our processing and platform fees."
                                                         height="16" viewBox="0 0 16 16" fill="none"
                                                         xmlns="http://www.w3.org/2000/svg"
                                                         class="icon-stroke d-block">
                                                         <path
                                                             d="M8.00016 14.6668C11.6821 14.6668 14.6668 11.6821 14.6668 8.00016C14.6668 4.31826 11.6821 1.3335 8.00016 1.3335C4.31826 1.3335 1.3335 4.31826 1.3335 8.00016C1.3335 11.6821 4.31826 14.6668 8.00016 14.6668Z"
                                                             stroke="currentColor" stroke-linecap="round"
                                                             stroke-linejoin="round"></path>
                                                         <path
                                                             d="M6.06006 5.99989C6.21679 5.55434 6.52616 5.17863 6.93336 4.93931C7.34056 4.7 7.81932 4.61252 8.28484 4.69237C8.75036 4.77222 9.1726 5.01424 9.47678 5.37558C9.78095 5.73691 9.94743 6.19424 9.94672 6.66656C9.94672 7.99989 7.94673 8.66656 7.94673 8.66656"
                                                             stroke="currentColor" stroke-linecap="round"
                                                             stroke-linejoin="round"></path>
                                                         <path d="M8 11.2446H8.0075" stroke="currentColor"
                                                             stroke-width="2" stroke-linecap="round"
                                                             stroke-linejoin="round"></path>
                                                     </svg>
                                                     <!-- </button> -->
                                                 </span>
                                             </div>
                                         </div>

                                         <div class="" style=" position: absolute; bottom: 0;width:100%; ">

                                             <form action="{{ route('make.payment') }}" method="post">
                                                 @csrf
                                                 <input type="hidden" class="StripeFinal_amount" name="amount"
                                                     value="{{ $causeDetails->default_amount }}00" />
                                                 <input type="hidden" id="curdk" name="currency"
                                                     value="USD" />
                                                 <input type="hidden" name="description"
                                                     value="Global Payment Gateway created by DK" />
                                                 <script src="https://checkout.stripe.com/checkout.js" class="stripe-button" data-key="{{ env('STRIPE_KEY') }}"
                                                     data-amount="{{ $causeDetails->default_amount }}00" data-name="HELP US OUR GOAL"
                                                     data-email="getmoredonationsofficial@gmail.com" data-description="Donate with Stripe Pay"
                                                     data-image="https://idignity.org/wp-content/uploads/2015/11/icon-circle-donate-1.png" data-currency="USD"
                                                     data-label="Pay Now"></script>
                                                 <button type="submit"
                                                     class="btn-primary bg-primary text text-light full-width btn btn-primary btn-height d-flex justify-content-center align-items-center"
                                                     data-qa="cc-button"
                                                     data-tracking-element-name="paymentMethod-creditCard"><span
                                                         class="flex-shrink-0 me-2" aria-hidden="true"><svg
                                                             fill="none" height="24" viewBox="0 0 18 18"
                                                             width="24" xmlns="http://www.w3.org/2000/svg"
                                                             class="d-block">
                                                             <g stroke="currentColor" stroke-linecap="round"
                                                                 stroke-linejoin="round" stroke-width="1.5">
                                                                 <path
                                                                     d="m15.75 3h-13.5c-.82843 0-1.5.67157-1.5 1.5v9c0 .8284.67157 1.5 1.5 1.5h13.5c.8284 0 1.5-.6716 1.5-1.5v-9c0-.82843-.6716-1.5-1.5-1.5z">
                                                                 </path>
                                                                 <path d="m.75 7.5h16.5"></path>
                                                             </g>
                                                         </svg></span><span class="text-truncate">Credit
                                                         card</span></button>

                                             </form>
                                             <button type="button" tabindex="7"
                                                 class="paypal-btn btn-next full-width btn btn-light bg-light text text-light px-10">
                                                 <center><svg height="22" preserveAspectRatio="xMinYMin meet"
                                                         viewBox="0 0 101 32" width="69"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                         <g fill="#003087">
                                                             <path
                                                                 d="m12.237 2.8h-7.8c-.5 0-1 .4-1.1.9l-3.1 20c-.1.4.2.7.6.7h3.7c.5 0 1-.4 1.1-.9l.8-5.4c.1-.5.5-.9 1.1-.9h2.5c5.1 0 8.1-2.5 8.9-7.4.3-2.1 0-3.8-1-5-1.1-1.3-3.1-2-5.7-2zm.9 7.3c-.4 2.8-2.6 2.8-4.6 2.8h-1.2l.8-5.2c0-.3.3-.5.6-.5h.5c1.4 0 2.7 0 3.4.8.5.4.7 1.1.5 2.1z">
                                                             </path>
                                                             <path
                                                                 d="m35.437 10h-3.7c-.3 0-.6.2-.6.5l-.2 1-.3-.4c-.8-1.2-2.6-1.6-4.4-1.6-4.1 0-7.6 3.1-8.3 7.5-.4 2.2.1 4.3 1.4 5.7 1.1 1.3 2.8 1.9 4.7 1.9 3.3 0 5.2-2.1 5.2-2.1l-.2 1c-.1.4.2.8.6.8h3.4c.5 0 1-.4 1.1-.9l2-12.8c.1-.2-.3-.6-.7-.6zm-5.1 7.2c-.4 2.1-2 3.6-4.2 3.6-1.1 0-1.9-.3-2.5-1s-.8-1.6-.6-2.6c.3-2.1 2.1-3.6 4.2-3.6 1.1 0 1.9.4 2.5 1 .5.7.7 1.6.6 2.6z">
                                                             </path>
                                                             <path
                                                                 d="m55.337 10h-3.7c-.4 0-.7.2-.9.5l-5.2 7.6-2.2-7.3c-.1-.5-.6-.8-1-.8h-3.7c-.4 0-.8.4-.6.9l4.1 12.1-3.9 5.4c-.3.4 0 1 .5 1h3.7c.4 0 .7-.2.9-.5l12.5-18c.3-.3 0-.9-.5-.9z">
                                                             </path>
                                                         </g>
                                                         <g fill="#009cde">
                                                             <path
                                                                 d="m67.737 2.8h-7.8c-.5 0-1 .4-1.1.9l-3.1 19.9c-.1.4.2.7.6.7h4c.4 0 .7-.3.7-.6l.9-5.7c.1-.5.5-.9 1.1-.9h2.5c5.1 0 8.1-2.5 8.9-7.4.3-2.1 0-3.8-1-5-1.2-1.2-3.1-1.9-5.7-1.9zm.9 7.3c-.4 2.8-2.6 2.8-4.6 2.8h-1.2l.8-5.2c0-.3.3-.5.6-.5h.5c1.4 0 2.7 0 3.4.8.5.4.6 1.1.5 2.1z">
                                                             </path>
                                                             <path
                                                                 d="m90.937 10h-3.7c-.3 0-.6.2-.6.5l-.2 1-.3-.4c-.8-1.2-2.6-1.6-4.4-1.6-4.1 0-7.6 3.1-8.3 7.5-.4 2.2.1 4.3 1.4 5.7 1.1 1.3 2.8 1.9 4.7 1.9 3.3 0 5.2-2.1 5.2-2.1l-.2 1c-.1.4.2.8.6.8h3.4c.5 0 1-.4 1.1-.9l2-12.8c0-.2-.3-.6-.7-.6zm-5.2 7.2c-.4 2.1-2 3.6-4.2 3.6-1.1 0-1.9-.3-2.5-1s-.8-1.6-.6-2.6c.3-2.1 2.1-3.6 4.2-3.6 1.1 0 1.9.4 2.5 1 .6.7.8 1.6.6 2.6z">
                                                             </path>
                                                             <path
                                                                 d="m95.337 3.3-3.2 20.3c-.1.4.2.7.6.7h3.2c.5 0 1-.4 1.1-.9l3.2-19.9c.1-.4-.2-.7-.6-.7h-3.6c-.4 0-.6.2-.7.5z">
                                                             </path>
                                                         </g>
                                                     </svg>
                                                 </center>
                                             </button>
                                             <p></p>
                                             <button id="next-home-value" tabindex="7" type="button"
                                                 class="btn btn-dark text text-light full-width btn btn-height p-rel py-0 btn-google-pay"
                                                 aria-label="Google Pay"
                                                 data-tracking-element-name="paymentMethod-googlePay"><svg
                                                     fill="none" height="31" viewBox="0 0 53 26"
                                                     width="62" xmlns="http://www.w3.org/2000/svg"
                                                     class="d-block mx-auto" aria-hidden="true">
                                                     <g fill="#fff">
                                                         <path
                                                             d="m25.011 13.6095v5.8583h-1.8898v-14.48819h4.9134c1.1969 0 2.3307.44095 3.2126 1.25985.8819.7559 1.3228 1.88976 1.3228 3.08661 0 1.19683-.4409 2.26773-1.3228 3.08663s-1.9528 1.2598-3.2126 1.2598zm0-6.86611v5.03941h3.1496c.6929 0 1.3858-.252 1.8268-.7559 1.0078-.9449 1.0078-2.51973.0629-3.46461l-.0629-.06299c-.504-.50394-1.1339-.8189-1.8268-.75591z">
                                                         </path>
                                                         <path
                                                             d="m36.9168 9.26294c1.3858 0 2.4567.37795 3.2756 1.13386.8189.7559 1.1968 1.7638 1.1968 3.0236v6.0473h-1.7638v-1.3859h-.063c-.7559 1.1339-1.8267 1.7008-3.0866 1.7008-1.0708 0-2.0157-.3149-2.7716-.9449-.6929-.6299-1.1339-1.5118-1.1339-2.4567 0-1.0078.378-1.8267 1.1339-2.4566.7559-.63 1.8267-.8819 3.0866-.8819 1.1338 0 2.0157.1889 2.7086.6299v-.441c0-.6299-.2519-1.2598-.7559-1.6378-.5039-.4409-1.1338-.6929-1.8267-.6929-1.0709 0-1.8898.441-2.4567 1.3229l-1.6378-1.0079c1.0079-1.32284 2.3307-1.95276 4.0945-1.95276zm-2.3937 7.18106c0 .504.2519.9449.6299 1.1969.4409.315.9449.5039 1.4488.5039.7559 0 1.5118-.3149 2.0787-.8819.63-.5669.9449-1.2598.9449-2.0157-.5669-.441-1.3858-.6929-2.4567-.6929-.7559 0-1.3858.189-1.8897.5669-.504.315-.7559.7559-.7559 1.3228z">
                                                         </path>
                                                         <path
                                                             d="m51.5937 9.57788-6.2362 14.29922h-1.8897l2.3307-4.9764-4.0945-9.25983h2.0157l2.9607 7.11813h.0629l2.8977-7.11813h1.9527z">
                                                         </path>
                                                     </g>
                                                     <path
                                                         d="m17.5146 12.3496c0-.5669-.0629-1.1339-.1259-1.7008h-7.87405v3.2126h4.47245c-.189 1.0079-.7559 1.9528-1.6378 2.5197v2.0787h2.7087c1.5748-1.4488 2.4566-3.5905 2.4566-6.1102z"
                                                         fill="#4285f4"></path>
                                                     <path
                                                         d="m9.51486 20.4756c2.26774 0 4.15744-.7559 5.54334-2.0158l-2.7087-2.0787c-.7559.5039-1.7008.8189-2.83464.8189-2.14173 0-4.0315-1.4488-4.66142-3.4646h-2.77165v2.1417c1.44882 2.8347 4.28346 4.5985 7.43307 4.5985z"
                                                         fill="#34a853"></path>
                                                     <path
                                                         d="m4.85386 13.7354c-.37795-1.0078-.37795-2.1417 0-3.2126v-2.1417h-2.77165c-1.196852 2.3307-1.196852 5.1024 0 7.4961z"
                                                         fill="#fbbc04"></path>
                                                     <path
                                                         d="m9.51461 7.12126c1.19689 0 2.33069.44095 3.21259 1.25985l2.3937-2.3937c-1.5118-1.38583-3.5276-2.20473-5.5433-2.14174-3.1496 0-6.04724 1.76378-7.43307 4.59843l2.77165 2.1417c.56693-2.01572 2.4567-3.46454 4.59843-3.46454z"
                                                         fill="#ea4335"></path>
                                                 </svg></button>
                                             <!-- <button type="button" id="next-home-value" tabindex="7" class="full-width btn-next btn btn--styleOne btn--secondary it-btn  d-block">
                                                <span class="btn__text">Keep my one-time $70,000 gift</span>
                                                </button> -->

                                         </div>
                                     </div>
                                 </div>
                             </div>
                             <!-- for nodation step3 design END -->
                         </div>
                         <!-- /Home Value -->
                         <div id="step-interest-rate" class="slider-step step" data-next-step="step-home-buy-process"
                             data-back-to="step-home-value">
                             <!-- Interest Rate -->
                             <div class="row">
                                 <div class="col-xs-12  ">
                                     <h1>Under Maintainance</h1>

                                 </div>
                             </div>
                             <div class="row">
                                 <div class="col-xs-12">
                                     <input id="next-interest-rate" type='button' value='Continue' tabindex="9"
                                         class="btn-success form-control btn-next" />
                                 </div>
                             </div>
                             <div class="row">
                                 <div class="col-xs-12">
                                     <a id="back-interest-rate" class="btn-back">back</a>
                                 </div>
                             </div>
                         </div>
                         <!-- /Interest Rate -->
                         <div id="step-home-buy-process" class="slider-step step">
                             <!-- Home Buy Process -->
                             <div class="row">
                                 <div class="col-xs-12 ">
                                     <label class="purchase">Describe your home buying progress.</label>
                                     <p id="mortgagegoal-error" class="input-error">Please Select Home Buying Progress
                                     </p>
                                     <select name="mortgagegoal" class="form-control purchase" tabindex="10">
                                         <option value="">---Select---</option>
                                         <option value="signed_pa">I have a signed purchase agreement</option>
                                         <option value="offer_pending">I am in the process of making an offer on a home
                                         </option>
                                         <option value="buying_soon">I want to buy a home in the next few months
                                         </option>
                                         <option value="preapproval_letter">I need a pre-approval letter</option>
                                         <option value="researching">I want to buy a home 6 or more months from now
                                         </option>
                                     </select>
                                 </div>
                             </div>
                             <div class="row">
                                 <div class="col-xs-12">
                                     <input id="next-home-buy-process" type='button' value='Continue'
                                         tabindex="11" class="btn-success form-control btn-next" />
                                 </div>
                             </div>
                             <div class="row">
                                 <div class="col-xs-12">
                                     <a id="back-home-buy-process" class="btn-back">back</a>
                                 </div>
                             </div>
                         </div>

                         <div class="clear"></div>
                     </div>
                     <!--Slide section End -->

                 </div>
             </div>
         </div>
         <!-- For Tooltip Code Start -->
         <div class="row">
             <div class="col-sm-1"></div>
             <div class="col-sm-2">
                 <p class="customtooltip left-customtooltip"
                     data-tooltip="Is my donation secure?

                    Yes, we use industry-standard SSL technology to keep your information secure.

                    We partner with Stripe, the industry's established payment processor trusted by some of the world's largest companies.

                    Your sensitive financial information never touches our servers. We send all data directly to Stripe's PCI-compliant servers through SSL.">
                     Is my donation secure?</p>
             </div>
             <div class="col-sm-3">
                 <p class="customtooltip middle-customtooltip"
                     data-tooltip="Is this donation tax-deductible?

                    Your gift is tax deductible as per your local regulations, as we are a tax exempt organization.

                    We will email you a donation receipt. Please keep this, as it is your official record to claim this donation as a tax deduction.">
                     Is this donation tax-deductible?</p>
             </div>
             <div class="col-sm-3">
                 <p class="customtooltip right-customtooltip"
                     data-tooltip="Can I cancel my recurring donation?

                    Of course. You always remain in full control of your recurring donation, and you’re free to change or cancel it at any time.">
                     Can I cancel my recurring donation?</p>
             </div>
             <div class="col-sm-3"></div>
         </div>
         <!-- For Tooltip Code End -->
     </div>

     <div class="uk-position uk-position-small uk-light">
         <button id="modal-close"class="uk-icon-button uk-button-default uk-width-auto@m" type="button">
             <span uk-icon="close"></span>
         </button>
     </div>
 </div>
 <!-- Donation Modal END  -->
