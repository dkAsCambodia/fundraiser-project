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
                        <h2 class="pageTitle__heading text-white text-uppercase mb-25">Donation Details</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Donation Details</li>
                            </ol>
                        </nav>
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
    @endphp
    <section class="donation pt-130 pb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mb-30 m-auto">
                    <div class="innerWrapper">
                        <div class="donationDetails">
                            <div class="donationDetails__header mb-45">
                                @empty(!$causeDetails->video)
                                    <figure class="thumb mb-45">
                                        <iframe width="100%" height="450px"
                                            src="{{ $causeDetails->video }}">
                                        </iframe>
                                        {{-- <video width="100%" height="100%" class="mt-4" controls>
                                            <source src="{{ env('ADMIN_URL') . 'storage/' . $causeDetails->video }}"
                                                type="video/mp4">
                                        </video> --}}
                                    </figure>
                                @endempty
                                @empty(!$causeDetails->photo)
                                    <figure class="thumb mb-45">
                                        <img src="{{ env('ADMIN_URL') . 'storage/' . $causeDetails->photo }}" alt="Gainioz"
                                            width="100%" height="100%">
                                    </figure>
                                @endempty
                                <h3 class="donationDetails__title text-uppercase">
                                    {{ $causeDetails->title }}
                                </h3>
                            </div>
                            <div class="featureBlock__donation featureBlock__donation--style2 mb-50">
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
                                        <span class="featureBlock__eqn__price">${{ $causeDetails->goal }}</span>
                                    </div>
                                    <div class="featureBlock__eqn__block text-center">
                                        <span class="featureBlock__eqn__title">Raised</span>
                                        <span class="featureBlock__eqn__price">${{ $raisedValue }}</span>
                                    </div>
                                    <div class="featureBlock__eqn__block text-end">
                                        <span class="featureBlock__eqn__title">to go</span>
                                        <span
                                            class="featureBlock__eqn__price">${{ $causeDetails->goal - $raisedValue }}</span>
                                    </div>
                                </div>
                            </div>
                            {{-- <div class="donationDetails__warning">
                                <p>
                                    <svg width="24" height="22" viewBox="0 0 24 22" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M23.8236 19.6887L12.7561 0.966058C12.6007 0.698209 12.3114 0.5 12.0007 0.5C11.6847 0.5 11.3954 0.698209 11.2454 0.966058L0.177863 19.6887C0.0278673 19.9566 -0.0792725 20.3851 0.0760802 20.6476C0.231433 20.9101 0.515353 21.0708 0.826059 21.0708H23.1701C23.4808 21.0708 23.7647 20.9101 23.92 20.6476C24.0807 20.3851 23.9736 19.9512 23.8236 19.6887ZM13.715 18.4995H10.2865V15.9281H13.715V18.4995ZM13.715 14.2139H10.2865V6.49983H13.715V14.2139Z"
                                            fill="black" />
                                    </svg>
                                    <span>Notice:</span> Test mode is enabled. While in test mode no live donations are
                                    processed.
                                </p>
                            </div> --}}
                            {{-- <div class="innerWrapperSidebar"> --}}
                            <div class="sidebarWidget">
                                {{-- <div class="sidebarTitle">
                                    <h6 class="sidebarTitle__heading text-uppercase">Checkout</h5>
                                </div> --}}
                                <div class="donationDetails__payments">
                                    <div class="payments">
                                        <div class="paymentsCustoms">
                                            <div class="paymentsInput">
                                                <input class="paymentsCustoms__field" type="number"
                                                    wire:model.live="customDonation" placeholder="Custom Donation">
                                            </div>
                                            <div class="paymentsAmountChoice">
                                                @foreach ($causeDetails->suggested_amounts as $key => $suggestedAmounts)
                                                    <div class="payments__method">
                                                        <input class="payments__input" id="pay{{ $key }}"
                                                            type="radio" wire:model.live="customDonation"
                                                            value="{{ $suggestedAmounts }}">
                                                        <label class="paymentsAmountChoice__label"
                                                            for="pay{{ $key }}">${{ $suggestedAmounts }}</label>
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
                        </div>
                        {{-- </div> --}}
                        <p class="donationDetails__text mb-30">
                            {!! $causeDetails->page_content !!}
                        </p>
                    </div>
                </div>

                <div class="col-lg-4 mb-30">
                    <div class="sidebarLayout">
                        <div class="innerWrapperSidebar mb-30">
                            <div class="sidebarWidget">
                                {{-- <div class="sidebarTitle">
                                    <h5 class="sidebarTitle__heading text-uppercase mb-30">categories</h5>
                                </div> --}}
                                <div class="sidebarCategories">
                                    <div class="">
                                        <div class="row">
                                            <div class="col-md-6">
                                                @auth
                                                    <a class="btn btn--styleOne btn--secondary it-btn"
                                                        wire:click="checkountNow" wire:loading.attr="disabled">
                                                        <span class="btn__text">Pay Now</span>
                                                        <i class="fa-solid fa-heart btn__icon"></i>
                                                        <span class="it-btn__inner">
                                                            <span class="it-btn__blobs">
                                                                <div wire:loading>
                                                                    <img src="{{ URL::to('website/image/loader.gif') }}"
                                                                        alt="" width="60px">
                                                                </div>
                                                            </span>
                                                        </span>
                                                    </a>
                                                @else
                                                    <a class="btn btn--styleOne btn--secondary it-btn"
                                                        href="/login?d={{ $causeDetails->slug }}">
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
                                                    </a>
                                                @endauth
                                            </div>
                                            <div class="col-md-6" style="text-align: right">
                                                <div>
                                                    <p><b>Total Amount: </b>${{ $totalAmount + (int) $customDonation }}
                                                    </p>
                                                    <p><b>Total Campaigns: </b>{{ $totalCampaign + 1 }}</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="sidebarTitle mt-10 mb-10">
                                            <h5 class="sidebarTitle__heading text-uppercase">Campaign</h5>
                                        </div>
                                        <ul>
                                            <li>
                                                <a>
                                                    <span>
                                                        <img src="{{ env('ADMIN_URL') . 'storage/' . $causeDetails->photo }}"
                                                            alt="Gainioz" style="height: 100px;width: 150px;">
                                                    </span>
                                                    <span class="ml-2">
                                                        <label>
                                                            {{ \Illuminate\Support\Str::limit($causeDetails->title, 100, '...') }}
                                                        </label>
                                                        <p style="text-align: right">${{ $customDonation }}</p>
                                                    </span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="sidebarTitle">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <h5 class="sidebarTitle__heading text-uppercase mb-10 mt-10">Donate
                                                    More</h5>
                                            </div>
                                            <div class="col-md-6" style="text-align: right;">
                                                <a wire:click="resetClick"
                                                    style=" line-height: 45px; color: red; cursor: pointer; ">Reset</a>
                                            </div>
                                        </div>
                                    </div>
                                    <ul style="max-height: 335px; overflow-y: scroll; position:relative;">
                                        @foreach ($getSimilarRecord as $key => $item)
                                            <li>
                                                <a>
                                                    <span>
                                                        <input class="paymentsCustoms__field_new" type="checkbox"
                                                            placeholder="Custom Donation"
                                                            wire:model.live="getSimilarRecord.{{ $key }}.selected"
                                                            value="{{ $item['id'] }}"
                                                            id="similarData-{{ $key }}">
                                                    </span>
                                                    <label for="similarData-{{ $key }}">
                                                        <img src="{{ env('ADMIN_URL') . 'storage/' . $item['photo'] }}"
                                                            alt="Gainioz" style="height: 100px;width: 150px;">
                                                    </label>
                                                    <label class="ml-2">
                                                        <label for="similarData-{{ $key }}">
                                                            {{ \Illuminate\Support\Str::limit($item['title'], 100, '...') }}
                                                        </label>
                                                        @if ($getSimilarRecord[$key]['selected'])
                                                            <p style="text-align: right">
                                                                <input type="number"
                                                                    class="paymentsCustoms__field_new_input"
                                                                    wire:model.live="getSimilarRecord.{{ $key }}.default_amount"
                                                                    style=" width: 100%; ">
                                                            </p>
                                                        @endif
                                                    </label>
                                                </a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>


                            <div class="sidebarContacts">
                                <div class="row mt-10">
                                    <div class="col-md-6">
                                        @auth
                                            <a class="btn btn--styleOne btn--secondary it-btn" wire:click="checkountNow"
                                                wire:loading.attr="disabled">
                                                <span class="btn__text">Pay Now</span>
                                                <i class="fa-solid fa-heart btn__icon"></i>
                                                <span class="it-btn__inner">
                                                    <span class="it-btn__blobs">
                                                        <div wire:loading>
                                                            <img src="{{ URL::to('website/image/loader.gif') }}"
                                                                alt="" width="60px">
                                                        </div>
                                                    </span>
                                                </span>
                                            </a>
                                        @else
                                            <a class="btn btn--styleOne btn--secondary it-btn"
                                                href="/login?d={{ $causeDetails->slug }}">
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
                                            </a>
                                        @endauth
                                    </div>
                                    <div class="col-md-6" style="text-align: right">
                                        <div>
                                            <p><b>Total Amount: </b>${{ $totalAmount + (int) $customDonation }}</p>
                                            <p><b>Total Campaigns: </b>{{ $totalCampaign + 1 }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- <div class="innerWrapperSidebar">
                            <div class="sidebarWidget">
                                <div class="sidebarTitle">
                                    <h5 class="sidebarTitle__heading text-uppercase mb-30">Direct Contact us</h5>
                                </div>
                                <div class="sidebarContacts">
                                    <textarea class="sidebarContacts__input textarea" name="message" id="message" placeholder="Massage*"></textarea>
                                    <a class="btn btn--styleOne btn--secondary it-btn" href="donation-listing.html">
                                        <span class="btn__text">donate now</span>
                                        <i class="fa-solid fa-heart btn__icon"></i>
                                        <span class="it-btn__inner">
                                            <span class="it-btn__blobs">
                                                <span class="it-btn__blob"></span>
                                                <span class="it-btn__blob"></span>
                                                <span class="it-btn__blob"></span>
                                                <span class="it-btn__blob"></span>
                                            </span>
                                        </span>
                                        <svg class="it-btn__animation" xmlns="http://www.w3.org/2000/svg"
                                            version="1.1">
                                            <defs>
                                                <filter>
                                                    <feGaussianBlur in="SourceGraphic" result="blur"
                                                        stdDeviation="10">
                                                    </feGaussianBlur>
                                                    <feColorMatrix in="blur" mode="matrix"
                                                        values="1 0 0 0 0 0 1 0 0 0 0 0 1 0 0 0 0 0 21 -7"
                                                        result="goo">
                                                    </feColorMatrix>
                                                    <feBlend in2="goo" in="SourceGraphic" result="mix">
                                                    </feBlend>
                                                </filter>
                                            </defs>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Donation Details End -->
</div>
