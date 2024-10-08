<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="{{ URL::to('website/js/jquery.payment.js') }}"></script>
<script src="{{ URL::to('website/js/countrycode-list.js') }}"></script>
<script src="{{ URL::to('website/js/popup.js') }}"></script>
<link href="{{ URL::to('website/css/countryflags.css') }}" rel="stylesheet" />
<link href="{{ URL::to('website/css/donationPopupCustom_new.css') }}" rel="stylesheet" type="text/css" />
<script>
    // $(document).ready(function() {
    //     $('[data-toggle="popover"]').popover();
    // });
    // jQuery(function($) {
    //     $('[data-numeric]').payment('restrictNumeric');
    //     $('.cc-number').payment('formatCardNumber');
    // });
</script>
<!-- popupBox Row -->
<div class="center-block">
    <div class="outer">
        <a href="javascript:void();" wire:click="closeModal" class="close__popup"><i class="bi bi-x"></i></a>
        <div class="donationBox">
            <div class="holder">
                <!-- <div class="donation_left">
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
                </div> -->
                <div class="donation_right" style="min-height:650px !important;">
                    <div class="step1">
                        <div class="header_inner">Your Donation Summary!</div>
                            <div class="step8content">
                                <div class="thanksMsg1">
                                    <div class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-check-circle" viewBox="0 0 16 16">
                                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"/>
                                        <path d="m10.97 4.97-.02.022-3.473 4.425-2.093-2.094a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05"/>
                                      </svg></div>
                                      <div> Transaction<br>
                                       You've paid for your Order!<br>
                                        Thank you for your donation {{ $mainCurrencySymbol }}{{ $TotalTransactionAmount }}</div>
                                </div>
                               
                               
                                <div class="scrollable-upsellDiv">
                                @foreach ($upsellTransactionsList  as $key => $upselltransaction)
                                    
                                    <div class="items1" style="{{ $key==0 ? 'background-color:yellow;' : '' }}">
                                        <figure><img src="{{ !empty($upselltransaction->causeDetail->photo) ? env('ADMIN_URL') . 'storage/' . $upselltransaction->causeDetail->photo : 'https://ucarecdn.com/ef2e85d9-cab0-4b53-bbaf-74db14adf71b/-/resize/516x/-/format/auto/' }}" alt=""></figure>
                                        <div class="column">
                                            <div class="hhflex">
                                                <h5><strong>{{ !empty($upselltransaction->causeDetail->title) ? $upselltransaction->causeDetail->title : '' }} </strong></h5>
                                                <div class="total text-center">
                                                    <h5><strong>{{ !empty($upselltransaction->currency_symbol) ? $upselltransaction->currency_symbol : '' }}{{ !empty($upselltransaction->total_amount) ? $upselltransaction->total_amount : '' }}</strong></h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                                </div>
                                 <!-- Tabl Content here-->
                                <div class="items1 Total">
                                    <strong>Total </strong>
                                    <strong>{{ base64_decode($mainCurrency) }} {{ $mainCurrencySymbol }}{{ $TotalTransactionAmount }}</strong>
                                </div>
                            </div>
                            <div class="step9content">
                                <!-- Animation-->
                                <h6>Help spread the word!</h6>
                                <p>1 out of 5 people you share this with will also donate.</p>
                                <!--<ul>
                                    <li><a href="#" wire:click="shareToFacebook"><i class="bi bi-facebook"></i> Share on Facebook</a></li>
                                    <li><a href="#" wire:click="shareToTwitter"><i class="bi bi-twitter-x"></i> Share on Twitter</a></li>
                                    <li><a href="#" wire:click="shareToTelegram"><i class="bi bi-telegram"></i> Share on Telegram</a></li>
                                    <li><a href="#" wire:click="shareViaEmail"><i class="bi bi-envelope-fill"></i> Share via email</a></li>
                                    <li><a href="#" wire:click="shareToYouTube"><i class="bi bi-youtube"></i> Share via YouTube</a></li>
                                </ul> -->
                                    <a href="#" wire:click="shareToFacebook"><i class="bi bi-facebook"></i> </a>
                                    <a href="#" wire:click="shareToTwitter"><i class="bi bi-twitter-x"></i> </a>
                                    <a href="#" wire:click="shareToTelegram"><i class="bi bi-telegram"></i> </a>
                                    <a href="#" wire:click="shareViaEmail"><i class="bi bi-envelope-fill"></i> </a>
                                    <a href="#" wire:click="shareToYouTube"><i class="bi bi-youtube"></i> </a>
                            </div>
                            <div class="bottom_price">
                                <a href="/cause" wire:navigate><button type="button" wire:click="closeModal" class="oulineButton closepopup">Close</button></a>
                            </div>
                        
                    </div>

                    <!-- Step9-->
                    <div class="step9 upsell">
                        <div class="header_inner"> Thank you!</div>
                        <div class="step9content">
                            <div class="thanksMsg">
                                Thank you for your monthly donation of ₹500
                            </div>
                            <!-- Animation-->
                            <div class="thumbs"><img src="{{ URL::to('website/image/popupImages/thumb-icon.png') }}"
                                    alt="" /></div>
                            <!-- Animation-->
                            <h4>Help spread the word!</h4>
                            <p>1 out of 4 people you share
                                this with will also donate.</p>
                            <ul>
                                <li><a href="#"><i class="bi bi-facebook"></i> Share on Facebook</a></li>
                                <li><a href="#"><i class="bi bi-linkedin"></i> Share on LinkedIn</a></li>
                                <li><a href="#"><i class="bi bi-twitter-x"></i> Share on Twitter</a></li>
                                <li><a href="#"><i class="bi bi-envelope-fill"></i> Share via email</a></li>
                            </ul>
                        </div>
                        <div class="bottom_price">

                            <button type="submit" class="oulineButton closepopup">Close</button>
                        </div>
                    </div>
                    <!-- Step8-->

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