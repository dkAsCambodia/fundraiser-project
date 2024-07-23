<div>
    <style>
        .paymentsCustoms__field_new {
            min-height: 20px;
            padding: 11px;
            background: #fff;
            /* border: 1px solid #dcdcdc; */
            /* box-sizing: border-box; */
            /* box-shadow: 0px 10px 15px rgba(221, 221, 221, 0.15); */
            /* border-radius: 143px; */
            /* font-size: 14px; */
            /* font-weight: 600; */
            color: #0d0d0d;
            /* max-width: 171px; */
            position: absolute;
        }

        .pageBreadcumb--style1 {
            padding: 130px 0 30px;
        }
    </style>
    <!-- Page Breadcumb -->
    <section class="pageBreadcumb pageBreadcumb--style1 position-relative"
        data-bg-image="{{ URL::to('website/image/bg/pageBreadcumbBg1.jpg') }}">
        <div class="pageBreadcumbTopDown">
            <a class="btn btn--styleOne btn--icon btn--icon2 it-btn" href="#">
                <svg class="btn__icon" width="10" height="14" viewBox="0 0 10 14" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M0.869141 8.70508L1.45508 8.11914C1.60156 8.00195 1.80664 8.00195 1.95312 8.14844L4.23828 10.4922V0.414062C4.23828 0.208984 4.38477 0.0625 4.58984 0.0625H5.41016C5.58594 0.0625 5.76172 0.208984 5.76172 0.414062V10.4922L8.01758 8.14844C8.16406 8.00195 8.36914 8.00195 8.51562 8.11914L9.10156 8.70508C9.21875 8.85156 9.21875 9.05664 9.10156 9.20312L5.23438 13.0703C5.08789 13.1875 4.88281 13.1875 4.73633 13.0703L0.869141 9.20312C0.751953 9.05664 0.751953 8.85156 0.869141 8.70508Z"
                        fill="#60646B" />
                </svg>
                <span class="it-btn__inner">
                    <span class="it-btn__blobs">
                        <span class="it-btn__blob"></span>
                        <span class="it-btn__blob"></span>
                        <span class="it-btn__blob"></span>
                        <span class="it-btn__blob"></span>
                    </span>
                </span>
                <svg class="it-btn__animation" xmlns="http://www.w3.org/2000/svg" version="1.1">
                    <defs>
                        <filter>
                            <feGaussianBlur in="SourceGraphic" result="blur" stdDeviation="10"></feGaussianBlur>
                            <feColorMatrix in="blur" mode="matrix"
                                values="1 0 0 0 0 0 1 0 0 0 0 0 1 0 0 0 0 0 21 -7" result="goo">
                            </feColorMatrix>
                            <feBlend in2="goo" in="SourceGraphic" result="mix"></feBlend>
                        </filter>
                    </defs>
                </svg>
            </a>
        </div>
        <div class="sectionShape sectionShape--top">
            <img src="{{ URL::to('website/image/shapes/pagebreadcumbShapeTop.svg') }}" alt="Gainioz">
        </div>
        <div class="sectionShape sectionShape--bottom">
            <img src="{{ URL::to('website/image/shapes/pagebreadcumbShapeBottom.svg') }}" alt="Gainioz">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="pageTitle text-center">
                        <h2 class="pageTitle__heading text-white text-uppercase mb-25">
                            {{ accountName($causeDetails->account_id) }}</h2>
                        {{-- <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Campaings</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Donation Details</li>
                            </ol>
                        </nav> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Page Breadcumb End -->
    <!-- Donation Details -->
    @php
        $raisedValue = raisedValue($causeDetails->id);
        $getFillPercentage = getFillPercentage($causeDetails->goal, $raisedValue);
        $currency = Session::get('sessLocation');
        $goal_amount = currency($causeDetails->goal);
        $raised_amount = currency($raisedValue);
    @endphp
    <section class="donation pt-130 pb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 mb-30 m-auto">

                    <div class="row" style=" text-align: end; ">
                        <div class="col-md-6"></div>
                        <div class="col-md-6">

                                <a class="btn btn--styleOne btn--secondary it-btn" wire:click="openModal"
                                    wire:loading.attr="disabled">
                                    {{-- <a class="btn btn--styleOne btn--secondary it-btn" onclick="openModal"> --}}
                                    <span class="btn__text">Pay Now</span>
                                    <i class="fa-solid fa-heart btn__icon"></i>
                                    {{-- <span class="it-btn__inner">
                                        <span class="it-btn__blobs">

                                            <div wire:loading>
                                                <img src="{{ URL::to('website/image/loader.gif') }}" alt=""
                                                    width="60px">
                                            </div>
                                        </span>
                                    </span> --}}
                                </a>

                        </div>
                    </div>

                    <!-- <a class="btn btn--styleOne btn--secondary it-btn" href="/login?d={{ $causeDetails->slug }}"> -->
                    <div class="innerWrapper">
                        <div class="donationDetails">

                            <div class="featureBlock__donation featureBlock__donation--style2 mb-50">

                                <h3 class="donationDetails__title text-uppercase">
                                    {{ $causeDetails->title }}
                                </h3>
                                <div class="featureBlock__donation__progress">
                                    <div class="featureBlock__donation__bar">
                                        <span class="featureBlock__donation__text skill-bar"
                                            data-width="{{ $getFillPercentage }}"
                                            style="width: {{ $getFillPercentage }};">{{ $getFillPercentage }}</span>
                                        <div class="featureBlock__donation__line">
                                            <span class="skill-bars">
                                                <span class="skill-bars__line skill-bar"
                                                    data-width="{{ $getFillPercentage }}"
                                                    style="width: {{ $getFillPercentage }};"></span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="featureBlock__eqn">
                                    <div class="featureBlock__eqn__block">
                                        <span class="featureBlock__eqn__title">our goal</span>
                                        <span class="featureBlock__eqn__price">{{Session::get('sessLocation')?->currency_symbol ?? '$'}} {{ $goal_amount }}</span>
                                    </div>
                                    <div class="featureBlock__eqn__block text-center">
                                        <span class="featureBlock__eqn__title">Raised</span>
                                        <span class="featureBlock__eqn__price">{{Session::get('sessLocation')?->currency_symbol ?? '$'}} {{ floor($raised_amount) }}</span>
                                    </div>
                                    <div class="featureBlock__eqn__block text-end">
                                        <span class="featureBlock__eqn__title">to go</span>
                                        <span
                                            class="featureBlock__eqn__price">{{Session::get('sessLocation')?->currency_symbol ?? '$'}} {{ floor($goal_amount) - floor($raised_amount) }}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="sidebarWidget">
                                {{-- <div class="sidebarTitle">
                                    <h6 class="sidebarTitle__heading text-uppercase">Checkout</h5>
                                </div> --}}
                                <div class="donationDetails__payments">
                                    <div class="payments">
                                        <div class="paymentsCustoms">
                                            <div class="paymentsInput">
                                                <input class="paymentsCustoms__field" type="number" value="{{ currency($causeDetails->default_amount) }}"
                                                 placeholder="Custom Donation">
                                            </div>
                                            <div class="paymentsAmountChoice">
                                                @foreach ($causeDetails->suggested_amounts as $key => $suggestedAmounts)
                                                    <div class="payments__method">
                                                        <input class="payments__input" id="pay{{ $key }}"
                                                            type="radio" wire:model.live="customDonation"
                                                            value="{{ $suggestedAmounts }}">
                                                        <label class="paymentsAmountChoice__label"
                                                            for="pay{{ $key }}">{{Session::get('sessLocation')?->currency_symbol ?? '$'}} {{ currency($suggestedAmounts) }}</label>
                                                    </div>
                                                @endforeach
                                               
                                            </div>

                                        </div>
                                        @error('customDonation')
                                            <small class="form-text text-muted text-danger">
                                                {{ $message }}
                                            </small>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="donationDetails__header mb-45">
                                @empty(!$causeDetails->photo)
                                    <figure class="thumb mb-45">
                                        <img src="{{ env('ADMIN_URL') . 'storage/' . $causeDetails->photo }}"
                                            alt="Gainioz" width="100%" height="100%">
                                    </figure>
                                @endempty
                                @empty(!$causeDetails->video)
                                    <figure class="thumb mb-45">
                                        {{-- <video width="100%" height="100%" class="mt-4" controls>
                                            <source src="{{ env('ADMIN_URL') . 'storage/' . $causeDetails->video }}"
                                                type="video/mp4">
                                        </video> --}}
                                        <iframe width="100%" height="400px" class="mt-4" src="{{!empty($causeDetails->video) ? $causeDetails->video : 'https://www.youtube.com/embed/5c0wBo_1lX0?si=2cq74Hd1xpyxvpXQ&amp;controls=0'}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                                    </figure>
                                @endempty
                            </div>
                        </div>
                        {{-- </div> --}}
                        <p class="donationDetails__text mb-30">
                            {!! $causeDetails->page_content !!}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Donation Details End -->
    <div class="popup_Box" id="checkoutpopup" style="display:{{ $modalStatus ? 'block' : 'none' }};">
        @include('livewire/website/donation-model')
    </div>
    {{-- Disable_Browser_Back_JavaScript START --}}
    <script type="text/javascript">
        function preventBack() {
            // alert('case details page');
            window.history.forward();
        }
        setTimeout("preventBack()", 0);
        window.onunload = function () {
            null
        };
    </script>
    {{-- Disable_Browser_Back_JavaScript END --}}
</div>
