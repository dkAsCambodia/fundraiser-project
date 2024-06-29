<div>
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
                        <h2 class="pageTitle__heading text-white text-uppercase mb-25">Donation Listing</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/" wire:navigate>Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Donation</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Page Breadcumb End -->
    <!-- About Feature -->
    <div class="about position-relative pt-125 pb-130">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Section Heading/Title -->
                    <div class="sectionTitle text-center mb-70">
                        <span class="sectionTitle__small justify-content-center">
                            <i class="fa-solid fa-heart btn__icon"></i>
                            Donation listing
                        </span>
                        <h2 class="sectionTitle__big">Introduce  Our Campains</h2>
                    </div>
                    <!-- Section Heading/Title End -->
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="featureTab featureTab--style2">
                        <div class="tab-content pt-55" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel"
                                aria-labelledby="home-tab">
                                <div class="row gx-3">
                                    {{-- @forelse ($causeDetails as $item)
                                        @php
                                            $raisedValue = raisedValue($item->id);
                                            $getFillPercentage = getFillPercentage($item->goal, $raisedValue);
                                        @endphp
                                        <div class="col-lg-4 col-sm-6 mb-35">
                                            <div class="featureBlock featureBlock--active">
                                                <div class="featureBlock__wrap">
                                                    <figure class="featureBlock__thumb">
                                                        <a class="featureBlock__thumb__link"
                                                            href="/cause-detail/{{ $item->slug }}" wire:navigate>
                                                            <img src="{{ env('ADMIN_URL').'storage/' . $item->photo }}"
                                                                alt="Gainioz Featured Thumb">
                                                        </a>
                                                    </figure>
                                                    <div class="featureBlock__content">
                                                        <h3 class="featureBlock__heading">
                                                            <a class="featureBlock__heading__link"
                                                                href="/cause-detail/{{ $item->slug }}" wire:navigate>
                                                                {{ $item->title }}
                                                        </h3>
                                                        <p class="featureBlock__text">
                                                            {{ $item->short_details }}
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="featureBlock__donation">
                                                    <div class="featureBlock__donation__progress">
                                                        <div class="featureBlock__donation__bar">
                                                            <span class="featureBlock__donation__text skill-bar"
                                                                data-width="{{ $getFillPercentage }}">{{ $getFillPercentage }}</span>
                                                            <div class="featureBlock__donation__line">
                                                                <span class="skill-bars">
                                                                    <span class="skill-bars__line skill-bar"
                                                                        data-width="{{ $getFillPercentage }}"></span>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="featureBlock__eqn">
                                                        <div class="featureBlock__eqn__block">
                                                            <span class="featureBlock__eqn__title">our goal</span>
                                                            <span
                                                                class="featureBlock__eqn__price">${{ $item->goal }}</span>
                                                        </div>
                                                        <div class="featureBlock__eqn__block">
                                                            <span class="featureBlock__eqn__title">Raised</span>
                                                            <span
                                                                class="featureBlock__eqn__price">${{ $raisedValue }}</span>
                                                        </div>
                                                        <div class="featureBlock__eqn__block">
                                                            <span class="featureBlock__eqn__title">to go</span>
                                                            <span
                                                                class="featureBlock__eqn__price">${{ $item->goal - $raisedValue }}</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @empty
                                        <img src="{{ URL::to('website/image/data-not-found.jpg') }}" />
                                    @endforelse --}}

                                    @forelse ($causeDetails as $item)
                                        @php
                                            $raisedValue = raisedValue($item->id);
                                            $getFillPercentage = getFillPercentage($item->goal, $raisedValue);
                                            $currency = Session::get('sessLocation');
                                            $goal_amount = currency($item->goal);
                                            $raised_amount = currency($raisedValue);
                                        @endphp
                                        {{--  @if($raisedValue != $item->goal) --}}
                                        <div class="col-lg-4 col-sm-6 mb-35">
                                            <div class="featureBlock">
                                                <div class="featureBlock__wrap">
                                                    <figure class="featureBlock__thumb">
                                                        <a class="featureBlock__thumb__link" href="/cause-detail/{{ $item->slug }}">
                                                            <img src="{{ env('ADMIN_URL').'storage/' . $item->photo }}"
                                                                alt="{{ $item->title }}">
                                                        </a>
                                                        <a class="featureBlock__hashLink" href="/cause-detail/{{ $item->slug }}" >
                                                            <span class="featureBlock__hashLink__text">#Life</span>
                                                        </a>
                                                    </figure>
                                                    <div class="featureBlock__content">
                                                        <h3 class="featureBlock__heading">
                                                            <a class="featureBlock__heading__link"
                                                                href="/cause-detail/{{ $item->slug }}" >
                                                                {{ $item->title }}
                                                            </a>
                                                        </h3>
                                                        <p class="featureBlock__text">
                                                            {{ $item->short_details }}
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="featureBlock__donation">
                                                    <div class="featureBlock__donation__progress">
                                                        <div class="featureBlock__donation__bar">
                                                            <span class="featureBlock__donation__text skill-bar"
                                                                data-width="{{ $getFillPercentage }}">{{ $getFillPercentage }}</span>
                                                            <div class="featureBlock__donation__line">
                                                                <span class="skill-bars">
                                                                    <span class="skill-bars__line skill-bar"
                                                                        data-width="{{ $getFillPercentage }}"></span>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="featureBlock__eqn">
                                                        <div class="featureBlock__eqn__block">
                                                            <span class="featureBlock__eqn__title">our goal</span>
                                                            <span
                                                                class="featureBlock__eqn__price">{{Session::get('sessLocation')?->currency_symbol ?? '$'}} {{ $goal_amount }}</span>
                                                        </div>
                                                        <div class="featureBlock__eqn__block">
                                                            <span class="featureBlock__eqn__title">Raised</span>
                                                            <span
                                                                class="featureBlock__eqn__price">{{Session::get('sessLocation')?->currency_symbol ?? '$'}} {{ floor($raised_amount) }}</span>
                                                        </div>
                                                        <div class="featureBlock__eqn__block">
                                                            <span class="featureBlock__eqn__title">to go</span>
                                                            <span
                                                                class="featureBlock__eqn__price">{{Session::get('sessLocation')?->currency_symbol ?? '$'}} {{ floor($goal_amount) - floor($raised_amount) }}</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        {{-- @endif --}}
                                    @empty
                                        <img src="{{ URL::to('website/image/data-not-found.jpg') }}" />
                                    @endforelse

                                    {{-- <div class="col-lg-4 col-sm-6 mb-35">
                                        <div class="featureBlock">
                                            <div class="featureBlock__wrap">
                                                <figure class="featureBlock__thumb">
                                                    <a class="featureBlock__thumb__link" href="#">
                                                        <img src="{{ URL::to('website/image/featured/featuredThumb5.jpg') }}"
                                                            alt="Gainioz Featured Thumb">
                                                    </a>
                                                    <a class="featureBlock__hashLink" href="#">
                                                        <span class="featureBlock__hashLink__text">#Life</span>
                                                    </a>
                                                </figure>
                                                <div class="featureBlock__content">
                                                    <h3 class="featureBlock__heading">
                                                        <a class="featureBlock__heading__link"
                                                            href="#">
                                                            You Can Give Kids in India Clean Water
                                                        </a>
                                                    </h3>
                                                    <p class="featureBlock__text">
                                                        We help local nonprofits access the funding, training, and
                                                        support they need to become more
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="featureBlock__donation">
                                                <div class="featureBlock__donation__progress">
                                                    <div class="featureBlock__donation__bar">
                                                        <span class="featureBlock__donation__text skill-bar"
                                                            data-width="85%">85%</span>
                                                        <div class="featureBlock__donation__line">
                                                            <span class="skill-bars">
                                                                <span class="skill-bars__line skill-bar"
                                                                    data-width="85%"></span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="featureBlock__eqn">
                                                    <div class="featureBlock__eqn__block">
                                                        <span class="featureBlock__eqn__title">our goal</span>
                                                        <span class="featureBlock__eqn__price">$28.0000</span>
                                                    </div>
                                                    <div class="featureBlock__eqn__block">
                                                        <span class="featureBlock__eqn__title">Raised</span>
                                                        <span class="featureBlock__eqn__price">$9,9098</span>
                                                    </div>
                                                    <div class="featureBlock__eqn__block">
                                                        <span class="featureBlock__eqn__title">to go</span>
                                                        <span class="featureBlock__eqn__price">$34,000</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-sm-6 mb-35">
                                        <div class="featureBlock">
                                            <div class="featureBlock__wrap">
                                                <figure class="featureBlock__thumb">
                                                    <a class="featureBlock__thumb__link" href="#">
                                                        <img src="{{ URL::to('website/image/featured/featuredThumb6.jpg') }}"
                                                            alt="Gainioz Featured Thumb">
                                                    </a>
                                                    <a class="featureBlock__hashLink" href="#">
                                                        <span class="featureBlock__hashLink__text">#Life</span>
                                                    </a>
                                                </figure>
                                                <div class="featureBlock__content">
                                                    <h3 class="featureBlock__heading">
                                                        <a class="featureBlock__heading__link"
                                                            href="#">
                                                            Lifeskills for Children in South Africa
                                                        </a>
                                                    </h3>
                                                    <p class="featureBlock__text">
                                                        We help local nonprofits access the funding, training, and
                                                        support they need to become more
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="featureBlock__donation">
                                                <div class="featureBlock__donation__progress">
                                                    <div class="featureBlock__donation__bar">
                                                        <span class="featureBlock__donation__text skill-bar"
                                                            data-width="85%">85%</span>
                                                        <div class="featureBlock__donation__line">
                                                            <span class="skill-bars">
                                                                <span class="skill-bars__line skill-bar"
                                                                    data-width="85%"></span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="featureBlock__eqn">
                                                    <div class="featureBlock__eqn__block">
                                                        <span class="featureBlock__eqn__title">our goal</span>
                                                        <span class="featureBlock__eqn__price">$28.0000</span>
                                                    </div>
                                                    <div class="featureBlock__eqn__block">
                                                        <span class="featureBlock__eqn__title">Raised</span>
                                                        <span class="featureBlock__eqn__price">$9,9098</span>
                                                    </div>
                                                    <div class="featureBlock__eqn__block">
                                                        <span class="featureBlock__eqn__title">to go</span>
                                                        <span class="featureBlock__eqn__price">$34,000</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-sm-6 mb-35">
                                        <div class="featureBlock">
                                            <div class="featureBlock__wrap">
                                                <figure class="featureBlock__thumb">
                                                    <a class="featureBlock__thumb__link" href="#">
                                                        <img src="{{ URL::to('website/image/featured/featuredThumb7.jpg') }}"
                                                            alt="Gainioz Featured Thumb">
                                                    </a>
                                                    <a class="featureBlock__hashLink" href="#">
                                                        <span class="featureBlock__hashLink__text">#Life</span>
                                                    </a>
                                                </figure>
                                                <div class="featureBlock__content">
                                                    <h3 class="featureBlock__heading">
                                                        <a class="featureBlock__heading__link"
                                                            href="#">
                                                            Gift an Education… Make a Life Better!
                                                        </a>
                                                    </h3>
                                                    <p class="featureBlock__text">
                                                        We help local nonprofits access the funding, training, and
                                                        support they need to become more
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="featureBlock__donation">
                                                <div class="featureBlock__donation__progress">
                                                    <div class="featureBlock__donation__bar">
                                                        <span class="featureBlock__donation__text skill-bar"
                                                            data-width="85%">85%</span>
                                                        <div class="featureBlock__donation__line">
                                                            <span class="skill-bars">
                                                                <span class="skill-bars__line skill-bar"
                                                                    data-width="85%"></span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="featureBlock__eqn">
                                                    <div class="featureBlock__eqn__block">
                                                        <span class="featureBlock__eqn__title">our goal</span>
                                                        <span class="featureBlock__eqn__price">$28.0000</span>
                                                    </div>
                                                    <div class="featureBlock__eqn__block">
                                                        <span class="featureBlock__eqn__title">Raised</span>
                                                        <span class="featureBlock__eqn__price">$9,9098</span>
                                                    </div>
                                                    <div class="featureBlock__eqn__block">
                                                        <span class="featureBlock__eqn__title">to go</span>
                                                        <span class="featureBlock__eqn__price">$34,000</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-sm-6 mb-35">
                                        <div class="featureBlock">
                                            <div class="featureBlock__wrap">
                                                <figure class="featureBlock__thumb">
                                                    <a class="featureBlock__thumb__link" href="#">
                                                        <img src="{{ URL::to('website/image/featured/featuredThumb8.jpg') }}"
                                                            alt="Gainioz Featured Thumb">
                                                    </a>
                                                    <a class="featureBlock__hashLink" href="#">
                                                        <span class="featureBlock__hashLink__text">#Life</span>
                                                    </a>
                                                </figure>
                                                <div class="featureBlock__content">
                                                    <h3 class="featureBlock__heading">
                                                        <a class="featureBlock__heading__link"
                                                            href="#">
                                                            Let’s Help Children Build a Happy Future
                                                        </a>
                                                    </h3>
                                                    <p class="featureBlock__text">
                                                        We help local nonprofits access the funding, training, and
                                                        support they need to become more
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="featureBlock__donation">
                                                <div class="featureBlock__donation__progress">
                                                    <div class="featureBlock__donation__bar">
                                                        <span class="featureBlock__donation__text skill-bar"
                                                            data-width="85%">85%</span>
                                                        <div class="featureBlock__donation__line">
                                                            <span class="skill-bars">
                                                                <span class="skill-bars__line skill-bar"
                                                                    data-width="85%"></span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="featureBlock__eqn">
                                                    <div class="featureBlock__eqn__block">
                                                        <span class="featureBlock__eqn__title">our goal</span>
                                                        <span class="featureBlock__eqn__price">$28.0000</span>
                                                    </div>
                                                    <div class="featureBlock__eqn__block">
                                                        <span class="featureBlock__eqn__title">Raised</span>
                                                        <span class="featureBlock__eqn__price">$9,9098</span>
                                                    </div>
                                                    <div class="featureBlock__eqn__block">
                                                        <span class="featureBlock__eqn__title">to go</span>
                                                        <span class="featureBlock__eqn__price">$34,000</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-sm-6 mb-35">
                                        <div class="featureBlock">
                                            <div class="featureBlock__wrap">
                                                <figure class="featureBlock__thumb">
                                                    <a class="featureBlock__thumb__link" href="#">
                                                        <img src="{{ URL::to('website/image/featured/featuredThumb9.jpg') }}"
                                                            alt="Gainioz Featured Thumb">
                                                    </a>
                                                    <a class="featureBlock__hashLink" href="#">
                                                        <span class="featureBlock__hashLink__text">#Life</span>
                                                    </a>
                                                </figure>
                                                <div class="featureBlock__content">
                                                    <h3 class="featureBlock__heading">
                                                        <a class="featureBlock__heading__link"
                                                            href="#">
                                                            Help These Children Find Their Smiles
                                                        </a>
                                                    </h3>
                                                    <p class="featureBlock__text">
                                                        We help local nonprofits access the funding, training, and
                                                        support they need to become more
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="featureBlock__donation">
                                                <div class="featureBlock__donation__progress">
                                                    <div class="featureBlock__donation__bar">
                                                        <span class="featureBlock__donation__text skill-bar"
                                                            data-width="85%">85%</span>
                                                        <div class="featureBlock__donation__line">
                                                            <span class="skill-bars">
                                                                <span class="skill-bars__line skill-bar"
                                                                    data-width="85%"></span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="featureBlock__eqn">
                                                    <div class="featureBlock__eqn__block">
                                                        <span class="featureBlock__eqn__title">our goal</span>
                                                        <span class="featureBlock__eqn__price">$28.0000</span>
                                                    </div>
                                                    <div class="featureBlock__eqn__block">
                                                        <span class="featureBlock__eqn__title">Raised</span>
                                                        <span class="featureBlock__eqn__price">$9,9098</span>
                                                    </div>
                                                    <div class="featureBlock__eqn__block">
                                                        <span class="featureBlock__eqn__title">to go</span>
                                                        <span class="featureBlock__eqn__price">$34,000</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-sm-6 mb-35">
                                        <div class="featureBlock">
                                            <div class="featureBlock__wrap">
                                                <figure class="featureBlock__thumb">
                                                    <a class="featureBlock__thumb__link" href="#">
                                                        <img src="{{ URL::to('website/image/featured/featuredThumb10.jpg') }}"
                                                            alt="Gainioz Featured Thumb">
                                                    </a>
                                                    <a class="featureBlock__hashLink" href="#">
                                                        <span class="featureBlock__hashLink__text">#Life</span>
                                                    </a>
                                                </figure>
                                                <div class="featureBlock__content">
                                                    <h3 class="featureBlock__heading">
                                                        <a class="featureBlock__heading__link"
                                                            href="#">
                                                            Little Help Can Make a Big Difference
                                                        </a>
                                                    </h3>
                                                    <p class="featureBlock__text">
                                                        We help local nonprofits access the funding, training, and
                                                        support they need to become more
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="featureBlock__donation">
                                                <div class="featureBlock__donation__progress">
                                                    <div class="featureBlock__donation__bar">
                                                        <span class="featureBlock__donation__text skill-bar"
                                                            data-width="85%">85%</span>
                                                        <div class="featureBlock__donation__line">
                                                            <span class="skill-bars">
                                                                <span class="skill-bars__line skill-bar"
                                                                    data-width="85%"></span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="featureBlock__eqn">
                                                    <div class="featureBlock__eqn__block">
                                                        <span class="featureBlock__eqn__title">our goal</span>
                                                        <span class="featureBlock__eqn__price">$28.0000</span>
                                                    </div>
                                                    <div class="featureBlock__eqn__block">
                                                        <span class="featureBlock__eqn__title">Raised</span>
                                                        <span class="featureBlock__eqn__price">$9,9098</span>
                                                    </div>
                                                    <div class="featureBlock__eqn__block">
                                                        <span class="featureBlock__eqn__title">to go</span>
                                                        <span class="featureBlock__eqn__price">$34,000</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-sm-6 mb-35">
                                        <div class="featureBlock">
                                            <div class="featureBlock__wrap">
                                                <figure class="featureBlock__thumb">
                                                    <a class="featureBlock__thumb__link" href="#">
                                                        <img src="{{ URL::to('website/image/featured/featuredThumb11.jpg') }}"
                                                            alt="Gainioz Featured Thumb">
                                                    </a>
                                                    <a class="featureBlock__hashLink" href="#">
                                                        <span class="featureBlock__hashLink__text">#Life</span>
                                                    </a>
                                                </figure>
                                                <div class="featureBlock__content">
                                                    <h3 class="featureBlock__heading">
                                                        <a class="featureBlock__heading__link"
                                                            href="#">
                                                            Online Donation In The Modern World
                                                        </a>
                                                    </h3>
                                                    <p class="featureBlock__text">
                                                        We help local nonprofits access the funding, training, and
                                                        support they need to become more
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="featureBlock__donation">
                                                <div class="featureBlock__donation__progress">
                                                    <div class="featureBlock__donation__bar">
                                                        <span class="featureBlock__donation__text skill-bar"
                                                            data-width="85%">85%</span>
                                                        <div class="featureBlock__donation__line">
                                                            <span class="skill-bars">
                                                                <span class="skill-bars__line skill-bar"
                                                                    data-width="85%"></span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="featureBlock__eqn">
                                                    <div class="featureBlock__eqn__block">
                                                        <span class="featureBlock__eqn__title">our goal</span>
                                                        <span class="featureBlock__eqn__price">$28.0000</span>
                                                    </div>
                                                    <div class="featureBlock__eqn__block">
                                                        <span class="featureBlock__eqn__title">Raised</span>
                                                        <span class="featureBlock__eqn__price">$9,9098</span>
                                                    </div>
                                                    <div class="featureBlock__eqn__block">
                                                        <span class="featureBlock__eqn__title">to go</span>
                                                        <span class="featureBlock__eqn__price">$34,000</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-sm-6 mb-35">
                                        <div class="featureBlock">
                                            <div class="featureBlock__wrap">
                                                <figure class="featureBlock__thumb">
                                                    <a class="featureBlock__thumb__link" href="#">
                                                        <img src="{{ URL::to('website/image/featured/featuredThumb12.jpg') }}"
                                                            alt="Gainioz Featured Thumb">
                                                    </a>
                                                    <a class="featureBlock__hashLink" href="#">
                                                        <span class="featureBlock__hashLink__text">#Life</span>
                                                    </a>
                                                </figure>
                                                <div class="featureBlock__content">
                                                    <h3 class="featureBlock__heading">
                                                        <a class="featureBlock__heading__link"
                                                            href="#">
                                                            You Can Give poor in India...Clean Water & Food
                                                        </a>
                                                    </h3>
                                                    <p class="featureBlock__text">
                                                        We help local nonprofits access the funding, training, and
                                                        support they need to become more
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="featureBlock__donation">
                                                <div class="featureBlock__donation__progress">
                                                    <div class="featureBlock__donation__bar">
                                                        <span class="featureBlock__donation__text skill-bar"
                                                            data-width="85%">85%</span>
                                                        <div class="featureBlock__donation__line">
                                                            <span class="skill-bars">
                                                                <span class="skill-bars__line skill-bar"
                                                                    data-width="85%"></span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="featureBlock__eqn">
                                                    <div class="featureBlock__eqn__block">
                                                        <span class="featureBlock__eqn__title">our goal</span>
                                                        <span class="featureBlock__eqn__price">$28.0000</span>
                                                    </div>
                                                    <div class="featureBlock__eqn__block">
                                                        <span class="featureBlock__eqn__title">Raised</span>
                                                        <span class="featureBlock__eqn__price">$9,9098</span>
                                                    </div>
                                                    <div class="featureBlock__eqn__block">
                                                        <span class="featureBlock__eqn__title">to go</span>
                                                        <span class="featureBlock__eqn__price">$34,000</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> --}}

                                    {{-- <div class="col-12">
                                        <div class="sectionButton text-center pt-15">
                                            <button class="btn btn--styleOne btn--primary it-btn">
                                                <span class="btn__text">see all Volunteers</span>
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
                                        </div>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About Feature -->
</div>
