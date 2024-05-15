<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="{{ URL::to('website/js/jquery.payment.js') }}"></script>
<script src="{{ URL::to('website/js/countrycode-list.js') }}"></script>
<script src="{{ URL::to('website/js/popup.js') }}"></script>
<link href="{{ URL::to('website/css/countryflags.css') }}" rel="stylesheet" />
<link href="{{ URL::to('website/css/donationPopupCustom_new.css') }}" rel="stylesheet" type="text/css" />
<script>
    $(document).ready(function() {
        $('[data-toggle="popover"]').popover();
    });
    jQuery(function($) {
        $('[data-numeric]').payment('restrictNumeric');
        $('.cc-number').payment('formatCardNumber');
    });
</script>
<script>
    function popuptabfuc(tabval) {
        // alert(tabval);
        if (tabval == '1') {
            $(".planName").text('once');
            $(".planShortName").text('one time');
            $(".frequency").val('once');
        } else {
            $(".planShortName").text('month');
            $(".planName").text('monthly');
            $(".frequency").val('monthly');
        }
        const div = document.getElementById('tutpoint')
        const cloneDiv = div.cloneNode(true);
        cloneDiv.id = "tutpoint1";
        //   document.body.appendChild(cloneDiv);
        document.getElementById('tutpoint').parentElement.appendChild(cloneDiv).fadeOut(300);
    }
</script>
<!-- popupBox Row -->
<div class="center-block">
    <div class="outer">
        <a href="javascript:void();" wire:click="closeModal" class="close__popup"><i class="bi bi-x"></i></a>
        <div class="donationBox">
            <div class="holder">
                <div class="donation_left">
                    <div class="main_img">
                        <img src="{{ !empty($causeDetails->photo) ? env('ADMIN_URL') . 'storage/' . $causeDetails->photo : 'https://ucarecdn.com/ef2e85d9-cab0-4b53-bbaf-74db14adf71b/-/resize/516x/-/format/auto/' }}"
                            alt="image" />
                    </div>
                    <div class="detail"> <img class="adminLogo"
                            src="{{ !empty($causeDetails->logo) ? env('ADMIN_URL') . 'storage/' . $causeDetails->logo : 'https://ucarecdn.com/bf291e65-c36b-4f7e-a66e-37b1018b3ace/-/resize/x50/-/format/auto/' }}"
                            alt="admin-logo">
                        <h2>{{ $causeDetails->title }}</h2>
                        <p><strong>{{ $causeDetails->short_details }}</strong></p>
                        <p><strong>Give confidently. 100% of your donation goes directly to aid and relief
                                programs.</strong></p>
                    </div>
                </div>
                <div class="donation_right">
                    <div class="step1">
                        <div class="header">
                            <h2><i class="bi bi-shield-lock"></i>Secure donation</h2>
                        </div>

                        <!-- slide TAb-->
                        <div class="slidetabs">
                            <input type="radio" id="radio-1" name="tabs"
                                {{ $causeDetails->default_frequency == 'once' ? 'checked' : '' }} />
                            <label class="tab clicktab1" for="radio-1" onclick="popuptabfuc(1)">Give once</label>
                            <input type="radio" id="radio-2" name="tabs"
                                {{ $causeDetails->default_frequency == 'monthly' ? 'checked' : '' }} />
                            <label class="tab clicktab2" for="radio-2" onclick="popuptabfuc(2)">
                                <img id="tutpoint" src="{{ URL::to('website/image/popupImages/heart.svg') }}"
                                    alt="">
                                &nbsp; Monthly</label>
                            <span class="glider"></span>
                        </div>

                        <!-- Tabl Content here-->
                        <div class="tab1Content"
                            style="display:{{ $causeDetails->default_frequency == 'once' ? 'block' : 'none' }};">
                            <div class="radioholder inputSet_custom">

                                @foreach ($suggestedAmountKey as $keyVal)
                                    <div class="paymentsmethod">
                                        <label class="payments_label">
                                            <input type="radio" name="triptype"
                                                value="{{ $causeDetails->suggested_amounts[$keyVal] }}{{Session::get('sessLocation')?->curency_code=='KHR' ? '00' : ''}}">
                                            <span class="check1"><span
                                                    class="currency-symbol">{{Session::get('sessLocation')?->currency_symbol ?? '$'}}</span>{{ $causeDetails->suggested_amounts[$keyVal] }}{{Session::get('sessLocation')?->curency_code=='KHR' ? '00' : ''}}<span>
                                        </label>
                                    </div>
                                @endforeach

                            </div>
                        </div>
                        <!-- Tabl Content here-->

                        <!-- Tabl Content here-->
                        <div class="tab2Content"
                            style="display:{{ $causeDetails->default_frequency == 'monthly' ? 'block' : 'none' }};">
                            <div class="radioholder inputSet_custom">
                                @foreach ($suggestedAmountKey as $keyVal)
                                    <div class="paymentsmethod">
                                        <label class="payments_label">
                                            <input type="radio" name="triptype"
                                                value="{{ $causeDetails->suggested_amounts[$keyVal] }}{{Session::get('sessLocation')?->curency_code=='KHR' ? '00' : ''}}">
                                            <span class="check1"><span
                                                    class="currency-symbol">{{Session::get('sessLocation')?->currency_symbol ?? '$'}}</span>{{ $causeDetails->suggested_amounts[$keyVal] }}{{Session::get('sessLocation')?->curency_code=='KHR' ? '00' : ''}}<span>
                                        </label>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <!-- Tabl Content here-->
                        <div class="group-price-control">
                            <input type="text" class="textbox Final_amount"
                                value="{{ $causeDetails->default_amount }}{{Session::get('sessLocation')?->curency_code=='KHR' ? '00' : ''}}" />
                            <select class="selectbox currency-selector" onchange="currencyselectorFun(this.value)">
                                @forelse ($currencies as $row)
                                <option value="{{$row->curency_code ?? ''}}" data-symbol="{{$row->currency_symbol ?? ''}}" {{ Session::get('sessLocation')?->curency_code == $row->curency_code ? 'selected' : '' }} >{{$row->curency_code ?? ''}} · {{$row->currency_name ?? ''}}</option>
                                @empty
                                <option value="USD" data-symbol="&#36;" {{ Session::get('sessLocation')?->curency_code == 'USD' ? 'selected' : '' }}>USD · United States Dollars</option>
                                @endforelse
                            </select>
                        </div>
                        <div class="inputSet">
                            <div class="paymentscheck">
                                <label>
                                    <input class="clickcheck" type="checkbox">
                                    <span class="check1">Dedicate this donation</span> </label>
                                <div class="inputbox relative" style="display: none;">
                                    <input type="text" placeholder="Name of someone special to me"
                                        class="textbox clickinput" />
                                    <div class="tooltip-detail help_tooltip1 tooltipopen1">
                                        <p>Once you've donated, you'll be able to write a personalized message and
                                            send a card.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-5" style="text-align:right;">
                            <p><b>Total Amount: </b><span class="currency-symbol">{{Session::get('sessLocation')?->currency_symbol ?? '$'}}</span><span
                                    class="Final_amount">{{ $causeDetails->default_amount }}{{Session::get('sessLocation')?->curency_code=='KHR' ? '00' : ''}}</span>
                            </p>
                            <!-- <p><b>Total Campaigns: </b>1</p> -->
                        </div>
                        <div class="bottom_section">
                            <div class="design">Designate to
                                <select class="designselect2">
                                    <option>where needed most</option>
                                    <option>Yemen</option>
                                </select>
                            </div>
                            <button type="button" class="nextButton continue1">Donate</button>
                        </div>
                    </div>

                    <!-- Step2-->
                    <div class="step2">
                        <div class="header_inner"> <a href="javascript:void(0);" class="btn-back backslide"><i
                                    class="bi bi-chevron-left"></i></a> Become a <span
                                class="planName">{{ $causeDetails->default_frequency == 'once' ? 'Give once' : 'monthly' }}</span>
                            supporter </div>
                        <div class="content">
                            <p>Will you consider becoming one of our valued <span
                                    class="planName">{{ $causeDetails->default_frequency == 'once' ? 'once' : 'monthly' }}</span>
                                supporters by converting your
                                <strong><span class="currency-symbol">{{Session::get('sessLocation')?->currency_symbol ?? '$'}}</span><span
                                        class="Final_amount">{{ $causeDetails->default_amount }}{{Session::get('sessLocation')?->curency_code=='KHR' ? '00' : ''}}</span></strong>
                                contribution
                                into a <span
                                    class="planName">{{ $causeDetails->default_frequency == 'once' ? 'once' : 'monthly' }}</span>
                                donation?
                            </p>
                            <p>Ongoing <span
                                    class="planName">{{ $causeDetails->default_frequency == 'once' ? 'once' : 'monthly' }}</span>
                                donations allow us
                                to better focus on our mission.</p>
                        </div>
                        <div class="bottom_price">
                            <div class="gift-div">
                                <button type="button" class="redButton nextButton continue2"
                                    tabindex="5">Donate&nbsp;<span class="currency-symbol">{{Session::get('sessLocation')?->currency_symbol ?? '$'}}</span><span
                                        class="Final_amount">{{ $causeDetails->default_amount }}{{Session::get('sessLocation')?->curency_code=='KHR' ? '00' : ''}}</span>/<span
                                        class="planShortName">{{ $causeDetails->default_frequency == 'once' ? 'once time' : 'month' }}</span></button>
                                <svg class="gift-icon" aria-hidden="true" fill="none" height="73"
                                    viewBox="0 0 72 73" width="72" xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" data-qa="gift-box-icon">
                                    <filter id="a-5747611689829708918" color-interpolation-filters="sRGB"
                                        filterUnits="userSpaceOnUse" height="72.3115" width="71.1349" x="0" y="0">
                                        <feFlood flood-opacity="0" result="BackgroundImageFix"> </feFlood>
                                        <feColorMatrix in="SourceAlpha" result="hardAlpha" type="matrix"
                                            values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"> </feColorMatrix>
                                        <feOffset dx="6" dy="2"></feOffset>
                                        <feGaussianBlur stdDeviation="4"></feGaussianBlur>
                                        <feColorMatrix type="matrix"
                                            values="0 0 0 0 0.591667 0 0 0 0 0.175035 0 0 0 0 0.199399 0 0 0 0.25 0">
                                        </feColorMatrix>
                                        <feBlend in2="BackgroundImageFix" mode="normal"
                                            result="effect1_dropShadow_8986_17614"></feBlend>
                                        <feBlend in="SourceGraphic" in2="effect1_dropShadow_8986_17614"
                                            mode="normal" result="shape"></feBlend>
                                    </filter>
                                    <filter id="b-5747611689829708918" color-interpolation-filters="sRGB"
                                        filterUnits="userSpaceOnUse" height="61.6255" width="61.1349" x="2"
                                        y="6.54346">
                                        <feFlood flood-opacity="0" result="BackgroundImageFix"> </feFlood>
                                        <feColorMatrix in="SourceAlpha" result="hardAlpha" type="matrix"
                                            values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"> </feColorMatrix>
                                        <feOffset dx="3" dy="3"></feOffset>
                                        <feGaussianBlur stdDeviation="1.5"></feGaussianBlur>
                                        <feColorMatrix type="matrix"
                                            values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.15 0"> </feColorMatrix>
                                        <feBlend in2="BackgroundImageFix" mode="normal"
                                            result="effect1_dropShadow_8986_17614"></feBlend>
                                        <feBlend in="SourceGraphic" in2="effect1_dropShadow_8986_17614"
                                            mode="normal" result="shape"></feBlend>
                                    </filter>
                                    <linearGradient id="c-5747611689829708918" gradientUnits="userSpaceOnUse"
                                        x1="33.358" x2="55.1048" y1="36.8415" y2="38.8628">
                                        <stop offset="0" stop-color="#ff6375"></stop>
                                        <stop offset="1" stop-color="#f2394e"></stop>
                                    </linearGradient>
                                    <linearGradient id="d-5747611689829708918" gradientUnits="userSpaceOnUse"
                                        x1="57.652" x2="32.9253" y1="47.3215" y2="61.3441">
                                        <stop offset="0" stop-color="#db3448"></stop>
                                        <stop offset="1" stop-color="#f2394e"></stop>
                                    </linearGradient>
                                    <linearGradient id="e-5747611689829708918">
                                        <stop offset="0" stop-color="#ccc"></stop>
                                        <stop offset="1" stop-color="#fff" stop-opacity="0"> </stop>
                                    </linearGradient>
                                    <linearGradient id="f-5747611689829708918" gradientUnits="userSpaceOnUse"
                                        x1="2.7417" x2="29.5784" xlink:href="#e-5747611689829708918"
                                        y1="5.62305" y2="16.674"></linearGradient>
                                    <linearGradient id="g-5747611689829708918" gradientUnits="userSpaceOnUse"
                                        x1="57.6504" x2="30.8137" xlink:href="#e-5747611689829708918"
                                        y1="5.31152" y2="16.3625"></linearGradient>
                                    <g filter="url(#a-5747611689829708918)">
                                        <g filter="url(#b-5747611689829708918)">
                                            <path
                                                d="m2 20.4733 27.5499-13.92.0169-.00984 27.5667 13.92894.0014.0009v6.8919l-2.4122 1.2362v20.6755l-25.1553 12.8922-25.15525-12.8922v-20.6755l-2.41215-1.2362z"
                                                fill="url(#c-5747611689829708918)"></path>
                                        </g>
                                        <path d="m4.41235 49.2779 25.15525 12.8921v-27.5674l-25.15525-12.8922z"
                                            fill="#ff6375"></path>
                                        <path d="m54.723 49.2779-25.1553 12.8921v-27.5674l25.1553-12.8922z"
                                            fill="#fb4d62"></path>
                                        <path d="m4.41235 30.3253 25.15525 12.8921v-8.6148l-25.15525-12.8922z"
                                            fill="#db3448" fill-opacity=".75"></path>
                                        <path d="m54.723 30.3253-25.1553 12.8921v-8.6148l25.1553-12.8922z"
                                            fill="#db3448" fill-opacity=".5"></path>
                                        <path
                                            d="m29.5499 6.5533-27.5499 13.92 27.5668 14.1274 27.5667-14.1283-27.5667-13.92894z"
                                            fill="#ff7787"></path>
                                        <path d="m2 20.4731 27.5674 14.1284v6.8918l-27.5674-14.1283z" fill="#fb4d62">
                                        </path>
                                        <path d="m57.1345 20.4731-27.5674 14.1284v6.8918l27.5674-14.1283z"
                                            fill="#ff6375"></path>
                                        <path d="m12.3378 53.3394v-27.5674l7.2364 3.7086v27.5675z" fill="#dcdcdc">
                                        </path>
                                        <path
                                            d="m47.1403 25.5949-7.2149 3.6978-10.1245-5.0269-10.2267 5.2146-7.223-3.7014 17.3508-8.8229z"
                                            fill="#f4f4f4"></path>
                                        <path d="m47.142 25.5952-7.2365 3.7087v27.5674l7.2365-3.7087z" fill="#dcdcdc">
                                        </path>
                                        <path
                                            d="m29.5676 62.3113-25.15525-12.8921v-.6892l25.15525 12.8921 25.1553-12.8921v.6892z"
                                            fill="url(#d-5747611689829708918)" fill-opacity=".2"> </path>
                                        <path
                                            d="m45.8044 17.4261c-3.6871-.6226-7.6011 1.431-10.2537 2.8227-.9582.5027-1.7518.9191-2.3105 1.0917-.3618-.1451-.8792-.236-1.4538-.236h-3.9611c-.5567 0-1.0598.0853-1.4196.2226-.5213-.2107-1.1855-.5592-1.9564-.9637-2.6526-1.3917-6.5666-3.4453-10.2537-2.8227-3.9608.6687-4.65037 4.4568-3.9609 4.9658.4446.4109 4.6365.4646 15.7653-.1146.3474.2122.5804.9196 2 .9196h3.7864c.8521 0 1.9341-.7195 2.2136-1 11.2947.5993 15.3177.4941 15.7653.0804.6894-.509-.0001-4.2971-3.9609-4.9658z"
                                            fill="#db3448" fill-opacity=".5"></path>
                                        <path
                                            d="m10.469 20.0297-.004-.0098-.0047-.0094c-.0642-.1276-.1269-.3985-.1665-.8141-.0386-.4048-.0529-.9172-.0381-1.5046.0295-1.1746.1748-2.6343.4655-4.1076.291-1.4746.7256-2.9523 1.3292-4.16833.6061-1.22108 1.3661-2.14551 2.2897-2.56537 1.2648-.5749 2.5766-.25259 3.9015.62535 1.3277.87973 2.6251 2.29152 3.8183 3.80205.8432 1.0675 1.6238 2.1702 2.3226 3.1573.2902.4098.5662.7997.8267 1.1588.4409.6078.84 1.1311 1.1842 1.5038.1718.1861.3371.3425.4931.454.0795.0568.1653.1084.2555.1443v3.2766c-5.8992.8884-9.9813.9034-12.6427.5588-1.3471-.1744-2.3223-.4399-2.9824-.7258-.33-.1429-.5757-.2885-.7487-.426-.1748-.1391-.2631-.2601-.2992-.35z"
                                            fill="#f4f4f4" stroke="url(#f-5747611689829708918)" stroke-width=".5">
                                        </path>
                                        <path
                                            d="m49.9231 19.7182.004-.0098.0047-.0094c.0642-.1276.1269-.3985.1665-.8141.0386-.4048.0528-.9172.0381-1.5046-.0295-1.1746-.1748-2.6343-.4655-4.1076-.291-1.4746-.7257-2.9523-1.3292-4.16835-.6061-1.22108-1.3661-2.14551-2.2897-2.56537-1.2648-.5749-2.5766-.25259-3.9015.62535-1.3277.87973-2.6251 2.29151-3.8183 3.80207-.8432 1.0674-1.6238 2.1702-2.3226 3.1573-.2902.4098-.5662.7996-.8267 1.1588-.4409.6078-.84 1.1311-1.1842 1.5038-.1719.1861-.3371.3424-.4931.454-.0795.0568-.1654.1083-.2555.1443v3.2766c5.8992.8884 9.9813.9033 12.6427.5588 1.3471-.1744 2.3223-.44 2.9824-.7258.33-.1429.5757-.2885.7486-.426.1749-.1391.2632-.2601.2993-.35z"
                                            fill="#f4f4f4" stroke="url(#g-5747611689829708918)" stroke-width=".5">
                                        </path>
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
                            </div>

                            <button type="button" class="continue2 oulineButton" tabindex="5">
                                <span class="btn__text">Keep my <span
                                        class="planShortName">{{ $causeDetails->default_frequency == 'once' ? 'once-time' : 'monthly' }}</span>
                                    <span class="currency-symbol">{{Session::get('sessLocation')?->currency_symbol ?? '$'}}</span><span
                                        class="Final_amount">{{ $causeDetails->default_amount }}{{Session::get('sessLocation')?->curency_code=='KHR' ? '00' : ''}}</span> gift</span> <i
                                    class="fa-solid fa-heart btn__icon"></i> </button>
                        </div>
                    </div>
                    <!-- Step2-->

                    <!-- Step3-->
                    <div class="step3 payment_option">
                        <div class="header_inner"> <a href="javascript:void(0);" class="btn-back backslide"><i
                                    class="bi bi-chevron-left"></i></a> Payment option </div>
                        <div class="step3content">
                            <p><span class="currency-symbol">{{Session::get('sessLocation')?->currency_symbol ?? '$'}}</span><span
                                    class="Final_amount">{{ $causeDetails->default_amount }}{{Session::get('sessLocation')?->curency_code=='KHR' ? '00' : ''}}</span> <small><span
                                        class="Final_currency">{{Session::get('sessLocation')?->curency_code ?? 'USD'}}</span>/<span
                                        class="planShortName">{{ $causeDetails->default_frequency == 'once' ? 'once-time' : 'monthly' }}</small>
                            </p>
                        </div>
                        <div class="fee-checkbox fee-checkbox-checked"> <span class="fee-checkbox-bg"></span>
                            <div class="p-rel inputSet">
                                <label>
                                    <div class="tooltip-custom" style="position:static;">
                                        <input class="clickcheckdedicate" checked type="checkbox">

                                        <span class="check1">Cover transaction costs</span>
                                        <div class="tooltip-detail" style="width:230px;">Would you like to cover
                                            the transaction costs so that we receive 100% of your gift?</div>
                                    </div>
                                    <div class="tooltip-custom"><i style="display: inline-block;"
                                            class="bi bi-info-circle"></i>
                                        <div class="tooltip-detail card_tooltip">By covering ₹84 in transaction
                                            costs, you cover our processing and platform fees.</div>
                                    </div>
                                </label>
                            </div>
                            <div class="p-abs centered-left ms-minus-9 mt-minus-5">
                                <div class="fee-animated-stars-enter-done"><svg class="" aria-hidden="true"
                                        fill="none" height="68" viewBox="0 0 56 68" width="56"
                                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                        <filter id="a-3316130949450301538" color-interpolation-filters="sRGB"
                                            filterUnits="userSpaceOnUse" height="31.4131" width="30.8215" x="7.42749"
                                            y="10.3657">
                                            <feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood>
                                            <feBlend in="SourceGraphic" in2="BackgroundImageFix" mode="normal"
                                                result="shape"></feBlend>
                                            <feColorMatrix in="SourceAlpha" result="hardAlpha" type="matrix"
                                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"></feColorMatrix>
                                            <feOffset dy="-.5"></feOffset>
                                            <feGaussianBlur stdDeviation="1.5"></feGaussianBlur>
                                            <feComposite in2="hardAlpha" k2="-1" k3="1"
                                                operator="arithmetic"></feComposite>
                                            <feColorMatrix type="matrix"
                                                values="0 0 0 0 0.979167 0 0 0 0 0.3525 0 0 0 0 0 0 0 0 0.5 0">
                                            </feColorMatrix>
                                            <feBlend in2="shape" mode="normal"
                                                result="effect1_innerShadow_8986_21698"></feBlend>
                                        </filter>
                                        <linearGradient id="b-3316130949450301538" gradientUnits="userSpaceOnUse"
                                            x1="23.3018" x2="33.5" y1="25.1587" y2="35">
                                            <stop offset="0" stop-color="#ffba07"></stop>
                                            <stop offset="1" stop-color="#ff8a00"></stop>
                                        </linearGradient>
                                        <radialGradient id="c-3316130949450301538" cx="0" cy="0"
                                            gradientTransform="matrix(3.64090919 -8.738167 7.18621663 2.99426209 18.9327 24.4305)"
                                            gradientUnits="userSpaceOnUse" r="1">
                                            <stop offset=".317708" stop-color="#fff491"></stop>
                                            <stop offset="1" stop-color="#fff490" stop-opacity="0"></stop>
                                        </radialGradient>
                                        <linearGradient id="d-3316130949450301538" gradientUnits="userSpaceOnUse"
                                            x1="25.8578" x2="24.1154" y1="57.3837" y2="54.6061">
                                            <stop offset="0" stop-color="#ff522d"></stop>
                                            <stop offset="1" stop-color="#ff7b5f"></stop>
                                        </linearGradient>
                                        <radialGradient id="e-3316130949450301538" cx="0" cy="0"
                                            gradientTransform="matrix(2.583374 -.29682138 .24410427 2.12455258 24.357 55.5499)"
                                            gradientUnits="userSpaceOnUse" r="1">
                                            <stop offset=".317708" stop-color="#ffd3ab"></stop>
                                            <stop offset="1" stop-color="#ffd3ab" stop-opacity="0"></stop>
                                        </radialGradient>
                                        <clipPath id="f-3316130949450301538">
                                            <path d="m0 0h56v68h-56z"></path>
                                        </clipPath>
                                        <g clip-path="url(#f-3316130949450301538)">
                                            <g filter="url(#a-3316130949450301538)">
                                                <path
                                                    d="m15.7885 11.8705c-.0023-.8288.9468-1.3005 1.6061-.7982l7.2797 5.5466c.2618.1995.605.2574.9177.1548l8.6962-2.8524c.7875-.2583 1.5294.4986 1.2554 1.2808l-3.0256 8.6374c-.1088.3106-.0578.6549.1364.9206l5.4001 7.3891c.489.6692-.0015 1.6087-.8302 1.5898l-9.1496-.2084c-.329-.0075-.6407.1474-.8334.4142l-5.3588 7.4191c-.4853.6719-1.5303.4957-1.7685-.2982l-2.6292-8.7662c-.0945-.3153-.3381-.5638-.6514-.6647l-8.71196-2.8038c-.78898-.2539-.94431-1.3023-.26285-1.7741l7.52471-5.2094c.2706-.1874.4317-.4959.4308-.825z"
                                                    fill="url(#b-3316130949450301538)"></path>
                                                <path
                                                    d="m15.7885 11.8705c-.0023-.8288.9468-1.3005 1.6061-.7982l7.2797 5.5466c.2618.1995.605.2574.9177.1548l8.6962-2.8524c.7875-.2583 1.5294.4986 1.2554 1.2808l-3.0256 8.6374c-.1088.3106-.0578.6549.1364.9206l5.4001 7.3891c.489.6692-.0015 1.6087-.8302 1.5898l-9.1496-.2084c-.329-.0075-.6407.1474-.8334.4142l-5.3588 7.4191c-.4853.6719-1.5303.4957-1.7685-.2982l-2.6292-8.7662c-.0945-.3153-.3381-.5638-.6514-.6647l-8.71196-2.8038c-.78898-.2539-.94431-1.3023-.26285-1.7741l7.52471-5.2094c.2706-.1874.4317-.4959.4308-.825z"
                                                    fill="url(#c-3316130949450301538)" fill-opacity=".4"></path>
                                            </g>
                                            <path
                                                d="m27.6127 53.2098c.4692-.1126.8099.4391.4991.8082l-1.1699 1.3895c-.1023.1215-.1408.2843-.1038.4387l.4238 1.7663c.1126.4692-.4392.8099-.8083.4991l-1.3894-1.17c-.1215-.1022-.2843-.1407-.4387-.1037l-1.7663.4238c-.4692.1125-.8099-.4392-.4991-.8083l1.1699-1.3894c.1023-.1215.1408-.2843.1038-.4387l-.4238-1.7663c-.1126-.4693.4392-.81.8083-.4991l1.3894 1.1699c.1215.1023.2843.1408.4387.1038z"
                                                fill="url(#d-3316130949450301538)"></path>
                                            <path
                                                d="m27.6127 53.2098c.4692-.1126.8099.4391.4991.8082l-1.1699 1.3895c-.1023.1215-.1408.2843-.1038.4387l.4238 1.7663c.1126.4692-.4392.8099-.8083.4991l-1.3894-1.17c-.1215-.1022-.2843-.1407-.4387-.1037l-1.7663.4238c-.4692.1125-.8099-.4392-.4991-.8083l1.1699-1.3894c.1023-.1215.1408-.2843.1038-.4387l-.4238-1.7663c-.1126-.4693.4392-.81.8083-.4991l1.3894 1.1699c.1215.1023.2843.1408.4387.1038z"
                                                fill="url(#e-3316130949450301538)" fill-opacity=".4"></path>
                                            <path
                                                d="m50.0525 13.2436c.3656-.2587.8608.0569.7807.4976l-.3906 2.1497c-.024.1322.0061.2685.0838.3782l1.262 1.7836c.2587.3656-.0569.8608-.4975.7807l-2.1498-.3906c-.1322-.024-.2685.0062-.3782.0838l-1.7836 1.262c-.3656.2588-.8608-.0568-.7807-.4975l.3906-2.1497c.024-.1322-.0062-.2685-.0838-.3782l-1.262-1.7836c-.2587-.3656.0568-.8608.4975-.7808l2.1498.3907c.1322.024.2685-.0062.3782-.0838z"
                                                fill="#f90"></path>
                                            <path
                                                d="m9.40768 43.4483c.0297-.68.87682-.972 1.31922-.4549l.9325 1.0901c.1351.1579.3296.2527.5372.2618l1.4332.0626c.6799.0297.9719.8767.4548 1.3192l-1.0901.9325c-.1579.1351-.2527.3296-.2617.5372l-.0626 1.4331c-.0297.68-.8768.972-1.3192.4549l-.9326-1.0901c-.135-.1579-.3296-.2527-.53714-.2617l-1.43317-.0627c-.67992-.0297-.97197-.8767-.45482-1.3191l1.09007-.9326c.15789-.1351.25267-.3296.26174-.5372z"
                                                fill="#8ae5f1"></path>
                                            <circle cx="28.5" cy="4.5" fill="#7dc6ff" r="2.5">
                                            </circle>
                                            <circle cx="15.5" cy="66.5" fill="#ff7f24" r="1.5">
                                            </circle>
                                            <circle cx="49.5" cy="1.5" fill="#8ae5f1" r="1.5">
                                            </circle>
                                        </g>
                                    </svg></div>
                            </div>
                        </div>
                        <div class="bottom_price">
                            <button type="submit" class="nextButton continue3"><span class="flex-shrink-0 me-2"
                                    aria-hidden="true"><svg fill="none" height="24" viewBox="0 0 18 18"
                                        width="24" xmlns="http://www.w3.org/2000/svg" class="d-block">
                                        <g stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="1.5">
                                            <path
                                                d="m15.75 3h-13.5c-.82843 0-1.5.67157-1.5 1.5v9c0 .8284.67157 1.5 1.5 1.5h13.5c.8284 0 1.5-.6716 1.5-1.5v-9c0-.82843-.6716-1.5-1.5-1.5z">
                                            </path>
                                            <path d="m.75 7.5h16.5"></path>
                                        </g>
                                    </svg></span> Credit card</button>
                            <button type="button" tabindex="5" class="oulineButton btn-paypal">
                                <div class="d-flex align-items-center justify-content-center"><svg height="22"
                                        preserveAspectRatio="xMinYMin meet" viewBox="0 0 101 32" width="69"
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
                                    </svg></div>
                            </button>
                            <button type="button" class="btn btn-height p-rel py-0 btn-google-pay"
                                aria-label="Google Pay" data-tracking-element-name="paymentMethod-googlePay"><svg
                                    fill="none" height="31" viewBox="0 0 53 26" width="62"
                                    xmlns="http://www.w3.org/2000/svg" class="d-block mx-auto" aria-hidden="true">
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
                        </div>
                    </div>
                    <!-- Step3-->

                    <!-- paypal-->
                    <div class="steppaypal slidediv card_information">
                        <div class="header_inner"> <a href="javascript:void(0);" class="btn-back backslide"><i
                                    class="bi bi-chevron-left"></i></a> Currency Conversion </div>
                        <div class="step4content">
                            <svg class="d-block mx-auto" fill="none" height="192" viewBox="0 0 192 192"
                                width="192" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink">
                                <filter id="a-3382682994294674009" color-interpolation-filters="sRGB"
                                    filterUnits="userSpaceOnUse" height="32" width="54" x="0" y="73">
                                    <feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood>
                                    <feBlend in="SourceGraphic" in2="BackgroundImageFix" mode="normal"
                                        result="shape"></feBlend>
                                    <feGaussianBlur result="effect1_foregroundBlur_20987_82251" stdDeviation="2">
                                    </feGaussianBlur>
                                </filter>
                                <filter id="b-3382682994294674009" color-interpolation-filters="sRGB"
                                    filterUnits="userSpaceOnUse" height="33" width="74.0015" x="116" y="30">
                                    <feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood>
                                    <feBlend in="SourceGraphic" in2="BackgroundImageFix" mode="normal"
                                        result="shape"></feBlend>
                                    <feGaussianBlur result="effect1_foregroundBlur_20987_82251" stdDeviation="1">
                                    </feGaussianBlur>
                                </filter>
                                <linearGradient id="c-3382682994294674009" gradientUnits="userSpaceOnUse"
                                    x1="123.858" x2="123.858" y1="106" y2="160">
                                    <stop offset="0" stop-color="#ffcdd0"></stop>
                                    <stop offset=".538747" stop-color="#f3a3b1"></stop>
                                    <stop offset="1" stop-color="#e36c89"></stop>
                                </linearGradient>
                                <linearGradient id="d-3382682994294674009" gradientUnits="userSpaceOnUse"
                                    x1="160" x2="91" y1="151" y2="151">
                                    <stop offset="0" stop-color="#ffeaea"></stop>
                                    <stop offset="1" stop-color="#f39cad" stop-opacity="0"></stop>
                                </linearGradient>
                                <linearGradient id="e-3382682994294674009" gradientUnits="userSpaceOnUse"
                                    x1="146" x2="146" y1="101.5" y2="121">
                                    <stop offset="0" stop-color="#ffeaea"></stop>
                                    <stop offset="1" stop-color="#f9b8c0"></stop>
                                </linearGradient>
                                <linearGradient id="f-3382682994294674009" gradientUnits="userSpaceOnUse"
                                    x1="52.6803" x2="52.6803" y1="137.102" y2="160">
                                    <stop offset="0" stop-color="#c7ddff"></stop>
                                    <stop offset="1" stop-color="#82b4ff"></stop>
                                </linearGradient>
                                <linearGradient id="g-3382682994294674009" gradientUnits="userSpaceOnUse"
                                    x1="56.5917" x2="56.5917" y1="137.5" y2="160">
                                    <stop offset="0" stop-color="#e2eeff"></stop>
                                    <stop offset="1" stop-color="#b8d4ff" stop-opacity="0"></stop>
                                </linearGradient>
                                <linearGradient id="h-3382682994294674009">
                                    <stop offset="0" stop-color="#e3efff"></stop>
                                    <stop offset="1" stop-color="#79afff" stop-opacity="0"></stop>
                                </linearGradient>
                                <linearGradient id="i-3382682994294674009" gradientUnits="userSpaceOnUse"
                                    x1="51.7161" x2="51.7161" xlink:href="#h-3382682994294674009" y1="134.402"
                                    y2="143.548"></linearGradient>
                                <linearGradient id="j-3382682994294674009" gradientUnits="userSpaceOnUse"
                                    x1="125" x2="125" y1="107" y2="117">
                                    <stop offset="0" stop-color="#ffeaea"></stop>
                                    <stop offset=".795622" stop-color="#f5a4b2"></stop>
                                </linearGradient>
                                <linearGradient id="k-3382682994294674009" gradientUnits="userSpaceOnUse"
                                    x1="72.1794" x2="79.9847" xlink:href="#h-3382682994294674009" y1="138.252"
                                    y2="136.343"></linearGradient>
                                <linearGradient id="l-3382682994294674009" gradientUnits="userSpaceOnUse"
                                    x1="57.1949" x2="10.2114" y1="104.979" y2="85.2225">
                                    <stop offset="0" stop-color="#cedbee"></stop>
                                    <stop offset="1" stop-color="#eaf1fc"></stop>
                                </linearGradient>
                                <linearGradient id="m-3382682994294674009" gradientUnits="userSpaceOnUse"
                                    x1="161.08" x2="128.165" y1="57.9363" y2="35.77">
                                    <stop offset="0" stop-color="#a5bbdb"></stop>
                                    <stop offset="1" stop-color="#e1ebfb"></stop>
                                </linearGradient>
                                <path
                                    d="m118.617 159.5h-40.5989c8.3875-2.121 15.8666-7.505 21.642-15.067 7.5609-9.901 12.2229-23.557 12.2229-38.62v-7.813c0-.8284.672-1.5 1.5-1.5h44.617c.828 0 1.5.6716 1.5 1.5v7.813c0 14.864-4.601 28.301-12.018 38.013-7.416 9.71-17.625 15.674-28.865 15.674z"
                                    fill="url(#c-3382682994294674009)" stroke="url(#d-3382682994294674009)"></path>
                                <path
                                    d="m137.725 103.038.002-.002c.758-.943 1.902-1.386 3.361-1.386h2.118c.47 0 .85.381.85.85v2.588c0 .47-.38.85-.85.85h-1.009c-.299 0-.588.016-.867.047-.251.034-.433.104-.561.194-.071.049-.131.134-.131.331 0 .289.089.376.176.417.2.09.476.145.843.145h3.458c.271 0 .538-.019.801-.056l.008-.001c.239-.028.416-.092.547-.179.066-.044.123-.119.123-.307 0-.19-.054-.305-.134-.385-.088-.087-.246-.17-.521-.214-.405-.064-.794-.397-.794-.881v-2.167c0-.469.381-.85.85-.85h8.355c.47 0 .85.381.85.85v7.226c0 .469-.38.85-.85.85h-2.298c-.47 0-.85-.381-.85-.85v-3.951c0-.083-.067-.15-.15-.15h-1.072c-.007.007-.017.02-.027.042-.013.028-.02.058-.02.084-.001.025.005.037.006.04l-.306.17c.167.294.25.637.25 1.03 0 .784-.153 1.421-.46 1.911zm0 0c-.726.918-1.075 2.085-1.075 3.472 0 1.039.164 1.908.52 2.584l.001.002c.359.675.876 1.191 1.546 1.538.651.343 1.419.565 2.297.674.87.113 1.841.169 2.912.169.84 0 1.63-.053 2.368-.16.748-.102 1.417-.294 2.002-.58.604-.29 1.082-.713 1.424-1.268zm.373 9.757-.001.001c-.919.88-1.357 2.109-1.357 3.635 0 1.532.438 2.763 1.358 3.637.919.872 2.217 1.282 3.839 1.282h7.936c1.7 0 3.059-.386 4.025-1.211.988-.838 1.452-2.098 1.452-3.708 0-1.603-.465-2.863-1.452-3.707-.965-.825-2.325-1.211-4.025-1.211h-7.936c-1.622 0-2.92.41-3.839 1.282zm13.102 4.014-.008.003c-.266.079-.591.122-.979.122h-8.686c-.246 0-.459-.059-.647-.174-.152-.093-.202-.194-.202-.329 0-.125.048-.229.205-.33.188-.114.399-.173.644-.173h8.686c.389 0 .715.04.983.114.086.026.128.063.155.104.03.047.061.133.061.285 0 .153-.031.237-.06.281-.025.038-.065.074-.152.097z"
                                    fill="#ec7e99" stroke="url(#e-3382682994294674009)" stroke-width=".7"></path>
                                <path
                                    d="m113.214 126.578c-.442 0-.832.293-.963.716-5.966 19.241-19.8364 32.706-36.8721 32.706h37.7041c16.858 0 32.041-13.186 38.856-32.108.232-.642-.25-1.314-.933-1.314z"
                                    fill="#d64a6c" opacity=".3"></path>
                                <path
                                    d="m109.394 153.677c.472.106 1.052.237 1.552 2.372l-.01.011c-.1.803-.259.55-.477.203-.238-.379-.547-.871-.924-.203.413.405.501.946.579 1.425.118.721.212 1.302 1.355 1.076-1.276-1.709-.27-1.622.827-1.528 1.321.114 2.773.239.521-2.752 1.413.844 1.42 2.621 1.426 4.136.002.581.004 1.123.086 1.559 2.236-.086 4.44-.403 6.595-.934.002-.043.003-.087.004-.132.007-.544.017-1.25 3.181-2.17.863-1.82-.362-1.996-1.744-2.194-1.296-.186-2.73-.392-2.71-1.992-3.151-.466-2.556-.614-1.223-.945 1.121-.279 2.763-.688 3.136-1.524 3.434-3.614 4.567-.472 5.617 2.442.442 1.229.871 2.417 1.45 3.041.264.113.476.19.644.236.183-.098.364-.197.545-.298-.057-.209-.209-.487-.366-.774-.448-.817-.932-1.7.672-1.194-.331-.7-.259-.664-.066-.567.208.105.558.28.694-.323 2.227 1.319 1.652-1.266-.669-1.339-.16-.684-.065-.644.099-.575.181.075.445.185.549-.587-.747-.392-.03-1.238.592-1.972.588-.694 1.091-1.288.192-1.303-.115-.125.941-3.526.993-1.81.532-.197.953-1.023 1.306-1.715.34-.667.617-1.21.869-.943-.021-2.051 1.258-4.537 2.464-6.88.664-1.291 1.307-2.539 1.697-3.647.269-.889.122-1.872-.019-2.823-.078-.528-.155-1.045-.159-1.53-.857.868-2.457-.136-1.244-.053.054-.381.074-.673.068-.893h-1.167c-.417.369-.771.665-.706 0h-3.669c.042.074.084.15.126.226.764 1.363 1.626 2.904-.151.73 1.191 4.751-3.607 6.049-7.371 5.902-.407-.382-1.798.076-2.805.407-1.062.349-1.696.558-.289-.512-5.147-3.489-8.539-2.927-11.17-.601-2.321 5.615-5.361 10.598-8.98 14.719 1.436-.045 1.89.591 2.874 1.966.065.091.133.185.203.282-.085 1.059 1.325.947 2.116.883.382-.03.62-.049.477.08 1.62.032-.084.293-.722.032.795.321 1.036.553 1.227.736.201.193.346.333 1.021.467.105 1.606.449 1.683.884 1.782z"
                                    fill="#ffe1e3" opacity=".2"></path>
                                <path
                                    d="m81.0728 130.497c5.7145 14.753 16.6308 25.739 29.7642 29.003h-40.8835c-15.7515 0-29.5097-11.303-36.4615-28.035-.388-.934.3084-1.965 1.3559-1.965h44.794c.6293 0 1.1984.397 1.4309.997z"
                                    fill="url(#f-3382682994294674009)" stroke="url(#g-3382682994294674009)"></path>
                                <path
                                    d="m43.2126 134.363c-.1049 0-.1996.017-.2791.05l.2792.281-.2792-.281-2.537 1.058c-.2661.111-.3297.387-.1601.694l.8366 1.516c.1899.344.7188.577 1.0078.444l1.1496-.529 2.9535 5.352c.2268.412.7912.745 1.2607.745h1.4177c.4695 0 .6662-.333.4394-.745l-4.4717-8.103c-.1467-.266-.5119-.482-.8157-.482zm6.8846-.162c-1.4739 0-2.4098.486-2.7614 1.352-.3491.86-.1115 2.066.6659 3.475s1.8711 2.615 3.1691 3.475c1.3073.866 2.7791 1.352 4.2531 1.352 1.4739 0 2.4099-.486 2.7614-1.352.3491-.86.1115-2.066-.6659-3.475-.7773-1.409-1.8711-2.615-3.169-3.475-1.3074-.866-2.7792-1.352-4.2532-1.352zm3.8754 7.023c-.6047 0-1.0774-.184-1.4967-.509-.4526-.35-.8957-.904-1.328-1.687-.4323-.784-.6-1.337-.534-1.687.0613-.325.33-.509.9346-.509.6047 0 1.0774.184 1.4968.509.4525.35.8956.903 1.3279 1.687.4324.783.6001 1.337.534 1.687-.0613.325-.3299.509-.9346.509zm6.083-7.023c-1.474 0-2.4099.486-2.7615 1.352-.3491.86-.1115 2.066.6659 3.475s1.8712 2.615 3.1691 3.475c1.3073.866 2.7792 1.352 4.2531 1.352 1.474 0 2.4099-.486 2.7615-1.352.349-.86.1115-2.066-.6659-3.475s-1.8712-2.615-3.1691-3.475c-1.3074-.866-2.7792-1.352-4.2531-1.352zm3.8753 7.023c-.6047 0-1.0773-.184-1.4967-.509-.4526-.35-.8956-.904-1.328-1.687-.4323-.784-.6-1.337-.5339-1.687.0612-.325.3299-.509.9346-.509s1.0773.184 1.4967.509c.4525.35.8956.903 1.328 1.687.4323.783.6 1.337.5339 1.687-.0612.325-.3299.509-.9346.509z"
                                    fill="#5a9bfc" stroke="url(#i-3382682994294674009)" stroke-width=".7"></path>
                                <path
                                    d="m47 146c2.0574 2.416 4.2848 4.549 6.6572 6.318h-.0043c5.0295 3.745 10.4735 5.987 15.9779 7.279 1.1872.276 2.4004.403 3.6178.403h30.7514c-6.9971-2.486-13.3437-7.466-18.5177-14z"
                                    fill="#5a9bfc" opacity=".4"></path>
                                <path
                                    d="m124.524 107.601c.283-.319.782-.319 1.065 0l.531.6c.178.201.454.284.714.216l.865-.229c.448-.118.888.218.892.682l.004.449c.003.317.216.594.521.679l.569.158c.502.139.688.753.349 1.148l-.2.233c-.228.266-.228.66 0 .926l.2.233c.339.395.153 1.009-.349 1.148l-.569.158c-.305.085-.518.362-.521.679l-.004.449c-.004.464-.444.8-.892.682l-.865-.229c-.26-.068-.536.015-.714.216l-.531.6c-.283.319-.782.319-1.065 0l-.53-.6c-.179-.201-.455-.284-.714-.216l-.866.229c-.448.118-.888-.218-.892-.682l-.004-.449c-.003-.317-.215-.594-.521-.679l-.568-.158c-.502-.139-.689-.753-.35-1.148l.2-.233c.229-.266.229-.66 0-.926l-.2-.233c-.339-.395-.152-1.009.35-1.148l.568-.158c.306-.085.518-.362.521-.679l.004-.449c.004-.464.444-.8.892-.682l.866.229c.259.068.535-.015.714-.216z"
                                    fill="#f5a4b2" stroke="url(#j-3382682994294674009)" stroke-width=".7"></path>
                                <path
                                    d="m124.55 109.515c.278-.283.735-.283 1.014 0l.114.116c.174.178.429.251.671.193l.373-.088c.351-.084.689.181.693.542.002.256.177.478.426.54l.221.055c.356.089.484.53.23.796-.176.185-.176.477 0 .662.254.266.126.707-.23.796l-.221.055c-.249.062-.424.284-.426.54-.004.361-.342.626-.693.542l-.373-.088c-.242-.058-.497.015-.671.193l-.114.116c-.279.283-.736.283-1.014 0l-.114-.116c-.175-.178-.43-.251-.672-.193l-.373.088c-.351.084-.689-.181-.692-.542-.003-.256-.178-.478-.427-.54l-.22-.055c-.357-.089-.485-.53-.231-.796.177-.185.177-.477 0-.662-.254-.266-.126-.707.231-.796l.22-.055c.249-.062.424-.284.427-.54.003-.361.341-.626.692-.542l.373.088c.242.058.497-.015.672-.193z"
                                    fill="#f091a6"></path>
                                <path
                                    d="m116.413 102c-.553 0-1 .448-1 1v3.475c0 4.609-.411 9.083-1.189 13.35-.111.609.353 1.175.972 1.175.467 0 .871-.33.957-.789.824-4.384 1.26-8.988 1.26-13.736v-3.475c0-.552-.448-1-1-1z"
                                    fill="#f4a0b0"></path>
                                <path
                                    d="m72.7042 136.954.3018-.115-.3018.115.0245.041c.063.104.0592.232-.048.316l-.0326.026.2632.279-.2632-.279c-.5033.399-.3043 1.213.3901 1.596l.045.025c.1479.081.2141.208.2022.313l-.0046.041.3578.108-.3578-.108c-.0766.677.6475 1.277 1.3279 1.273h.0483c.181-.002.3387.098.4083.21l.0251.04c.3959.634 1.271.83 1.7476.466l.0331-.026-.2607-.282.2607.282c.1149-.088.304-.09.461-.006l.0453.025c.6509.349 1.4253.132 1.5095-.508l.0053-.041c.0149-.113.1228-.216.3031-.22l.0482-.001c.6782-.013 1.105-.629.699-1.299l-.0245-.041c-.0629-.103-.0591-.231.0481-.316l.0326-.026c.5033-.399.3043-1.213-.3902-1.596l-.0449-.025c-.148-.081-.2141-.208-.2022-.313l.0046-.041c.0765-.677-.6476-1.277-1.328-1.273l-.0482.001c-.181.001-.3387-.099-.4083-.211l-.0252-.04c-.3958-.634-1.271-.83-1.7475-.466l-.0331.026.2606.282-.2606-.282c-.115.088-.3041.09-.4611.006l-.0452-.025-.1214.288.1214-.288c-.651-.349-1.4254-.132-1.5095.509l-.0054.04.3572.113-.3572-.113c-.0148.113-.1227.216-.3031.22l-.0481.001c-.6783.013-1.1051.629-.6991 1.299z"
                                    fill="#5a9bfc" fill-opacity=".5" stroke="url(#k-3382682994294674009)"
                                    stroke-width=".7"></path>
                                <g filter="url(#a-3382682994294674009)">
                                    <path
                                        d="m49.824 77.3626c-9.4961 7.3561-22.5582 9.8835-34.8649 5.5746-4.0267-1.4098-7.64974-3.4385-10.7964-5.9372-.46036 8.2484-.03903 12.8248 2.50507 20.998.42026.1613.84436.3169 1.27225.4668 14.36278 5.0282 29.57968 2.3282 40.91708-5.9032 1.0354-5.8634 1.3931-9.1089.9669-15.199z"
                                        fill="url(#l-3382682994294674009)"></path>
                                </g>
                                <g filter="url(#b-3382682994294674009)">
                                    <path
                                        d="m188.001 36.6318c-2.732 3.1711-9.824 7.998-14.832 9.6264-4.246 10.6241-13.043 13.8689-22.646 14.7262 14.086.4247 33.672-7.817 37.478-24.3526z"
                                        fill="#d1e3ff"></path>
                                    <path
                                        d="m140.73 32-.515.2283-.903.406c-6.63 3.0079-15.349 7.4639-21.312 11.2868 8.053 11.0993 19.271 17.0369 32.522 17.0637 7.539-.6728 14.584-2.8183 19.317-8.8534-12.969.4822-22.742-7.9509-29.109-20.1314z"
                                        fill="url(#m-3382682994294674009)"></path>
                                </g>
                            </svg>
                            <p>We can only accept USD when using paypal. Your <strong><span
                                        class="currency-symbol">{{Session::get('sessLocation')?->currency_symbol ?? '$'}}</span><span
                                        class="Final_amount">{{ $causeDetails->default_amount }}{{Session::get('sessLocation')?->curency_code=='KHR' ? '00' : ''}}</span></strong> <span
                                    class="Final_currency">{{Session::get('sessLocation')?->curency_code ?? 'USD'}}</span> Donation Converts to
                                USD United State Doller</p>
                        </div>
                        <div class="bottom_price">
                            <form action="{{ route('paypal.checkout') }}" method="post">
                                @csrf
                                <input type="hidden" class="Final_amount" name="amount"
                                    value="{{ $causeDetails->default_amount }}{{Session::get('sessLocation')?->curency_code=='KHR' ? '00' : ''}}" />
                                <input type="hidden" class="Final_currency" name="currency" value="{{Session::get('sessLocation')?->curency_code ?? 'USD'}}" />
                                <input type="hidden" class="Final_currencySymbol" name="currencySymbol"
                                    value="{{Session::get('sessLocation')?->currency_symbol ?? '$'}}" />
                                <input type="hidden" name="account_id" value="{{ $causeDetails->account_id }}" />
                                <input type="hidden" name="cause_detail_id" value="{{ $causeDetails->id }}" />
                                <input type="hidden" class="frequency" name="frequency"
                                    value="{{ !empty($causeDetails->default_frequency) ? $causeDetails->default_frequency : 'once' }}" />
                                <button type="submit" tabindex="5" class="oulineButton btn-paypal">
                                    <div class="d-flex align-items-center justify-content-center"><svg height="22"
                                            preserveAspectRatio="xMinYMin meet" viewBox="0 0 101 32" width="69"
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
                                        </svg></div>
                                </button>
                            </form>
                            <button type="button" tabindex="5" class="oulineButton other_payment"> <span
                                    class="btn__text">Other payment option</span> </button>
                        </div>
                    </div>
                    <!-- paypal-->
                    <script src='https://js.stripe.com/v2/' type='text/javascript'></script>
                    <form class="StripePayment-form"
                        data-stripe-publishable-key="pk_test_51OmTf0KyHXidWMBJVXFlR4ui5cP3aZWIjaUiSCUD4acUcd0LdmYj8vd9afc9DV6pReTtKtf6ge2lgpe8MQvEsn060079WqGxO0">
                        @csrf
                        <!-- Step4-->
                        <div class="step4 card_information">
                            <div class="header_inner"> <a href="javascript:void(0);" class="btn-back backslide"><i
                                        class="bi bi-chevron-left"></i></a> Credit card </div>
                            <div class="step4content">
                                <p>Please provide your card details to continue with your donation.
                                    This card will be charged.</p>
                                <div class="group-shadow">
                                    <div class="row1">
                                        <input type="tel" placeholder="Card number"
                                            class="textbox form-control cc-number card_number" name="card_number"
                                            maxlength='19' />
                                    </div>
                                    <div class="holder">
                                        <div class="column border-left">
                                            <input placeholder="MM/YY" type="text"
                                                class="textbox form-control expirationInput card-expiry-month-year"
                                                name="expiration" maxlength="5" />
                                        </div>
                                        <div class="column relative">
                                            <input type="text" placeholder="CVC"
                                                class="textbox form-control cvvInput card_cvv" name="cvv"
                                                maxlength='3' />

                                            <div class="tooltip-custom bi-info-circle"><i class="bi "></i>
                                                <div class="tooltip-detail card_tooltip">
                                                    <p>For MasterCard or Visa it is the last three digits in the
                                                        signature area on the back of your card. For American Express it
                                                        is the four digits on the front of the card.</p>
                                                </div>

                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <p class="expirationInput-warning text text-danger" style="display:none">Please fillup
                                    correct!</p>
                                <p class="card-warning text text-danger" style="display:none">Invalid card details!
                                </p>
                                <input type="hidden" class="Final_amount" name="amount"
                                    value="{{ $causeDetails->default_amount }}{{Session::get('sessLocation')?->curency_code=='KHR' ? '00' : ''}}" />
                                <input type="hidden" class="Final_currency" name="currency" value="{{Session::get('sessLocation')?->curency_code ?? 'USD'}}" />
                                <input type="hidden" class="Final_currencySymbol" name="currencySymbol"
                                    value="{{Session::get('sessLocation')?->currency_symbol ?? '$'}}" />
                                <input type="hidden" name="description" value="Donate with Stripe Pay" />
                                <input type="hidden" name="account_id" value="{{ $causeDetails->account_id }}" />
                                <input type="hidden" name="cause_detail_id" value="{{ $causeDetails->id }}" />
                                <input type="hidden" class="frequency" name="frequency"
                                    value="{{ !empty($causeDetails->default_frequency) ? $causeDetails->default_frequency : 'once' }}" />

                            </div>
                            <div class="bottom_price">
                                <button type="submit" class="card-btn nextButton1">
                                        <span class="progress-animation"></span>
                                        <span class="btntext"><span class="flex-shrink-0 me-2"
                                            aria-hidden="true"><svg fill="none" height="24" viewBox="0 0 18 18"
                                                width="24" xmlns="http://www.w3.org/2000/svg" class="d-block">
                                                <g stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                    stroke-width="1.5">
                                                    <path
                                                        d="m15.75 3h-13.5c-.82843 0-1.5.67157-1.5 1.5v9c0 .8284.67157 1.5 1.5 1.5h13.5c.8284 0 1.5-.6716 1.5-1.5v-9c0-.82843-.6716-1.5-1.5-1.5z">
                                                    </path>
                                                    <path d="m.75 7.5h16.5"></path>
                                                </g>
                                            </svg></span>Continue</span>
                                        <span class="done-mark success-span"><i class="bi bi-check-circle"></i></span>
                                        <span class="done-mark done-mark-error error-span"><i class="bi bi-x-lg"></i></span>
                                    </button>
                                <button type="button" class="card-success-btn nextButton continue4"
                                    style="display: none"><i class="fa fa-check" aria-hidden="true"></i>
                                    Next</button>
                            </div>
                        </div>
                        <!-- Step4-->

                        <!-- Step5-->
                        <div class="step5 personal_information">
                            <div class="header_inner"> <a href="javascript:void(0);" class="btn-back backslide"><i
                                        class="bi bi-chevron-left"></i></a> Enter your details </div>
                            <div class="step5content">
                                <?php if (!empty(auth()->user()->name)) {
                                    $parts = explode(' ', auth()->user()->name);
                                }
                                ?>
                                <div class="form-group">
                                    <input type="text" placeholder="First name"
                                        class="textbox form-control personalInput FnameInput" name="Fname"
                                        value="{{ !empty($parts[0]) ? $parts[0] : '' }}" />
                                </div>
                                <div class="form-group">
                                    <input type="text" placeholder="Last name"
                                        class="textbox form-control personalInput lnameInput" name="lname"
                                        value="{{ !empty($parts[1]) ? $parts[1] : '' }}" />
                                </div>
                                <div class="form-group">
                                    <input type="email" placeholder="Email address"
                                        class="textbox form-control personalInput emailInput" name="email"
                                        value="{{ auth()->user()->email ?? '' }}" />
                                </div>
                                <div class="form-group">
                                    <input type="tel" name="mobile_country_code" class="tel" id="mobile-number"
                                        placeholder="Contact number" readonly value="{{ auth()->user() ? userInfor()?->mobile_country_code ?? '' : Session::get('sessLocation')?->mobile_country_code }}">
                                    <input type="text" placeholder="Phone number (optional)"
                                        class="form-control textbox phone_number" name="mobile"
                                        value="{{ auth()->user() ? userInfor()?->mobile ?? '' : '' }}" />
                                </div>
                                <p class="email-warning text text-danger" style="display:none;">Email Already Exist!
                                </p>
                                <p class="email-invalid text text-danger" style="display:none;">Invalid Email!</p>
                                <div class="inputSet">
                                    <div class="mt-3">
                                        <label>
                                            <input type="checkbox" value="Donate anonymously" name="donate_anonymously"
                                                @auth {{ !empty(userInfor()->donate_anonymously) ? 'checked' : '' }} @endauth>
                                            <span class="check1">Donate anonymously</span> </label>&nbsp;
                                        <div class="tooltip-custom">
                                            <i class="bi bi-question-circle"></i>
                                            <div class="tooltip-detail help_tooltip1">
                                                <p>Select if you're donating on behalf of an organization. The donation
                                                    receipt will be issued to that organization.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-3">
                                        <label>
                                            <input class="clickcheck" type="checkbox"
                                                @auth {{ !empty(userInfor()->organization_name) ? 'checked' : '' }} @endauth>
                                            <span class="check1">Donate as an organization</span> </label> &nbsp;
                                        <div class="tooltip-custom"><i class="bi bi-question-circle"></i>
                                            <div class="tooltip-detail help_tooltip">
                                                <p>We won't display your information in any public feeds.</p>
                                            </div>
                                        </div>
                                        <div class="inputbox" style="display: @auth {{ !empty(userInfor()->organization_name) ? 'block' : 'none' }} @else none @endauth ;">
                                            <input type="text" name="organization_name"
                                                placeholder="Organization name" class="textbox"
                                                value="{{ auth()->user() ? userInfor()?->organization_name ?? '' : '' }}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="bottom_price">
                                <button type="button" class="personal-btn nextButton1">
                                    <span class="progress-animation"></span>
                                        <span class="btntext">Donate&nbsp;<span class="currency-symbol">{{Session::get('sessLocation')?->currency_symbol ?? '$'}}</span><span
                                        class="Final_amount">{{ $causeDetails->default_amount }}{{Session::get('sessLocation')?->curency_code=='KHR' ? '00' : ''}}</span>/<span
                                        class="planShortName">{{ $causeDetails->default_frequency == 'once' ? 'once time' : 'month' }}</span></span>
                                        <span class="done-mark success-span"><i class="bi bi-check-circle"></i></span>
                                        <span class="done-mark done-mark-error error-span"><i class="bi bi-x-lg"></i></span>
                                </button>
                                <button type="button" class="personal-success-btn nextButton continue5"
                                    style="display: none"><i class="fa fa-check" aria-hidden="true"></i>
                                    Continue</button>
                            </div>
                        </div>
                        <!-- Step5-->

                        <!-- Step6-->
                        <div class="step6 Double_impact">
                            <div class="header_inner"> <a href="javascript:void(0);" class="btn-back backslide"><i
                                        class="bi bi-chevron-left"></i></a> Double your impact </div>
                            <div class="step6content">
                                <div class="impactBlock"> <img
                                        src="{{ URL::to('website/image/popupImages/icon1.svg') }}" alt="icon">
                                    <span><i class="bi bi-plus"></i></span> <img
                                        src="{{ URL::to('website/image/popupImages/icon2.svg') }}" alt="icon">
                                </div>
                                <p class="text-center"> Many employers have a donation matching program that will
                                    double or triple the value of your donation! <br />
                                    <strong>Just enter the name of your employer, and we'll see if your impact can be
                                        amplified!</strong>
                                </p>

                                <div class="form-group">

                                    <div class="inputbox relative" style="">

                                        <input type="text" placeholder="Your company (optional)"
                                            class="textbox clickinput" name="company_name"
                                            value="{{ auth()->user() ? userInfor()?->company_name ?? '' : '' }}" />
                                        <div class="tooltip-detail help_tooltip1 tooltipopen1"
                                            style="display: block;">
                                            <p>Once you've donated, you'll be able to write a personalized message and
                                                send a card.</p>
                                        </div>

                                    </div>


                                </div>
                            </div>
                            <div class="bottom_price">
                                <button type="button" class="nextButton continue6">Continue</button>
                                <button type="button" class="continue6 oulineButton">Skip to the next
                                    step</button>
                            </div>
                        </div>
                        <!-- Step6-->

                        <!-- Step7-->
                        <div class="step7 postal_address">
                            <div class="header_inner"> <a href="javascript:void(0);" class="btn-back backslide"><i
                                        class="bi bi-chevron-left"></i></a> Postal Address </div>
                            <div class="step5content">
                                <div class="form-group">
                                    <input type="text" name="address" placeholder="Street address"
                                        value="{{ auth()->user() ? userInfor()?->address ?? '' : '' }}"
                                        class="textbox" />
                                </div>
                                <div class="form-group">
                                    <input type="text" name="appartment_flour"
                                        placeholder="Apartment / suite / floor"
                                        value="{{ auth()->user() ? userInfor()?->appartment_flour ?? '' : '' }}"
                                        class="textbox" />
                                </div>
                                <div class="form-group">
                                    <input type="text" name="city"s placeholder="Town or city"
                                        value="{{ auth()->user() ? userInfor()?->city ?? '' : '' }}"
                                        class="textbox" />
                                </div>
                                <div class="postal_row">
                                    <div class="postal_col">
                                        <div class="form-group">
                                            <input type="text" name="state" placeholder="State"
                                                value="{{ auth()->user() ? userInfor()?->state ?? '' : '' }}"
                                                class="textbox" />
                                        </div>
                                    </div>
                                    <div class="postal_col">
                                        <div class="form-group">
                                            <input type="text" name="zip" placeholder="Zip code"
                                                value="{{ auth()->user() ? userInfor()?->zip ?? '' : '' }}"
                                                class="textbox" />
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <select class="form-select selectbox2 select2full" name="country">
                                         @forelse ($countries as $row)
                                        <option value="{{$row->country_code ?? ''}}" @auth {{ userInfor()?->country == $row->country_code ? 'selected' : '' }} @endauth {{ Session::get('sessLocation')?->country_code == $row->country_code ? 'selected' : '' }}>{{ucfirst($row->country_name) ?? ''}}</option>
                                        @empty
                                        <option value="" >Country not found!</option>
                                        @endforelse
                                    </select>
                                </div>
                            </div>
                            <div class="bottom_price">
                                <button type="submit" class="nextButton continue7">
                                    <span class="progress-animation"></span>
                                        <span class="btntext">Continue</span>
                                        <span class="done-mark success-span"><i class="bi bi-check-circle"></i></span>
                                        <span class="done-mark done-mark-error error-span"><i class="bi bi-x-lg"></i></span>
                                    </button>
                                <button type="submit" class="oulineButton">Skip to the next step</button>
                            </div>
                        </div>
                        <!-- Step7-->
                    </form>




                </div>
            </div>
        </div>
        <ul class="faqlinks">
            <li class="tooltip-custom"><a href="javascript:void(0);" class="toltipclick">Is my donation secure?
                </a>
                <div class="tooltip-detail tooltipopen"><strong>Is my donation secure?</strong>
                    <div class=" mt-1">
                        <p class="faq-link-text">Yes, we use industry-standard SSL technology to keep your
                            information secure.</p>
                        <p class="faq-link-text mt-1">We partner with Stripe, the industry's established payment
                            processor trusted by some of the world's largest companies.</p>
                        <p class="faq-link-text mt-1">Your sensitive financial information never touches our
                            servers. We send all data directly to Stripe's PCI-compliant servers through SSL.</p>
                    </div>
                </div>
            </li>
            <li class="tooltip-custom"><a href="javascript:void(0);" class="toltipclick">Is this donation
                    tax-deductible? </a>
                <div class="tooltip-detail tooltipopen"><strong>Is this donation tax-deductible?</strong>
                    <div class="mt-1">
                        <p>Your gift is tax deductible as per your local regulations, as we are a tax exempt
                            organization.</p>
                        <p class="mt-1">We will email you a donation receipt. Please keep this, as it is your
                            official record to claim this donation as a tax deduction.</p>
                    </div>
                </div>
            </li>
            <li class="tooltip-custom"><a href="javascript:void(0);" class="toltipclick">Can I cancel my
                    recurring donation? </a>
                <div class="tooltip-detail tooltipopen"><strong>Can I cancel my recurring donation?</strong>
                    <div class="mt-1">
                        <p>Of course. You always remain in full control of your recurring donation, and you’re free
                            to change or cancel it at any time.</p>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</div>
<!-- popupBox Row -->
<!-- partial -->
<script>
    $("#mobile-number").intlTelInput();
</script>
<script>
    // checking card details valid or not START
    $(document).ready(function() {
        $('.card-btn').click(function(e) {
            var $form = $(".StripePayment-form");
            var expirationValue = $('.card-expiry-month-year').val();
            var card_month = expirationValue.substr(0, 2); // Extract the first two digits as month
            var card_year = expirationValue.substr(3, 2);
            e.preventDefault();
            Stripe.setPublishableKey($form.data('stripe-publishable-key'));
            Stripe.createToken({
                number: $('.card_number').val(),
                cvc: $('.card_cvv').val(),
                exp_month: card_month,
                exp_year: card_year
            }, stripeResponseHandler);
        });

        function stripeResponseHandler(status, response) {
            $(".progress-animation").css("width","100%");
            $(".done-mark").css("top","0");
            if (response.error) {
                // alert(response.error.message);
                $('.card-warning').text(response.error.message);
                $('.card-warning').css("display", "block");
                $('button.card-success-btn').css("display", "none");
                $('.form-control').addClass("inputerror");
                $('.error-span').css("display", "block");
                $('.success-span').css("display", "none");
                setTimeout(function () {
                    $('.success-span').css("display", "none");
                    $('.error-span').css("display", "none");
                    $(".progress-animation").css("width","0%");
                }, 4000)
            } else {
                $('.error-span').css("display", "none");
                $('.success-span').css("display", "block");
                $('.form-control').removeClass("inputerror");
                $('.card-warning').css("display", "none");
                // $('button.card-btn').css("display", "none");
                setTimeout(function () {
                    $('button.card-success-btn').click();
                    $('.success-span').css("display", "none");
                    $('.error-span').css("display", "none");
                    $(".progress-animation").css("width","0%");
                }, 4000)
                

            }
        }
    })
    // checking card details valid or not END
    // Generate StripeToken and call ajax to hit stripe payment gateway START
    $(document).ready(function() {
        var $form = $(".StripePayment-form");
        $form.on('submit', function(e) {

            var expirationValue = $('.card-expiry-month-year').val();
            var card_month = expirationValue.substr(0, 2); // Extract the first two digits as month
            var card_year = expirationValue.substr(3, 2);

            e.preventDefault();
            Stripe.setPublishableKey($form.data('stripe-publishable-key'));
            Stripe.createToken({
                number: $('.card_number').val(),
                cvc: $('.card_cvv').val(),
                exp_month: card_month,
                exp_year: card_year
            }, stripeResponseHandler);
        });

        function stripeResponseHandler(status, response) {
            $(".progress-animation").css("width","100%");
            $(".done-mark").css("top","0");
            if (response.error) {
                $('.error-span').css("display", "block");
                $('.success-span').css("display", "none");
                alert(response.error.message);
            } else {
                // token contains id, last4, and card type
                var token = response['id'];
                // insert the token into the form so it gets submitted to the server
                $form.append("<input type='hidden' name='stripeToken' value='" + token + "'/>");
                // $form.get(0).submit();
                var str = $(".StripePayment-form").serializeArray();
                $.ajax({
                    type: "POST",
                    url: "{{ route('stripe.checkout') }}",
                    data: str,
                    success: function(response) {
                        $('.error-span').css("display", "none");
                        $('.success-span').css("display", "block");
                        // console.log("responsedk "+response);
                        toastr.options.timeOut = 10000;
                        toastr.success('Thank for your donation');
                        setTimeout(function () {
                            window.location.href = response;
                        }, 3000)
                        
                    }
                });
            }
        }
    })
    // Generate StripeToken and call ajax to hit stripe payment gateway END
    // onclick personal information btn validate donation field START
    $(document).ready(function(){
        $('.personal-btn').click( function(){
            $(".progress-animation").css("width","100%");
            $(".done-mark").css("top","0");
            // alert('dddd');
            var fname = $('.FnameInput').val();
            var lname = $('.lnameInput').val();
            var email = $('.emailInput').val();
            
            setTimeout(function () {

                if (fname=='' || lname=='' || email=='') {
                $('.personalInput').addClass("inputerror");
                $('.error-span').css("display", "block");
                $('.success-span').css("display", "none");
                } else {
                    $('.error-span').css("display", "none");
                    $('.success-span').css("display", "block");
                    $('.personalInput').removeClass("inputerror");
                    setTimeout(function () {
                        $('button.personal-success-btn').click();
                        $('.success-span').css("display", "none");
                        $('.error-span').css("display", "none");
                        $(".progress-animation").css("width","0%");
                    }, 2000)
                }
                    
            }, 2000)



            
        });
    });
    // onclick personal information btn validate donation field END
</script>
