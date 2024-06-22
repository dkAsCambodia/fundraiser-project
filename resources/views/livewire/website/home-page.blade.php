<div>
    <!-- Hero/Welcome Section Start -->
    <section class="hero hero--style5" data-bg-image="{{ URL::to('website/image/update/home4-hero-bg1.jpg') }}">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-xl-6 col-lg-8 mb-30">
                    <div class="hero__content">
                        <span class="hero__title hero__title--small wow animate__fadeInUp animate__animated"
                            data-wow-duration="1200ms" data-wow-delay="200ms"><i class="fa-solid fa-heart btn__icon"></i>We
                            Beleve
                            That</span>
                        <h1 class="hero__title hero__title--big text-white wow animate__fadeInUp animate__animated"
                            data-wow-duration="1200ms" data-wow-delay="300ms">fundraising For Others</h1>
                        <p class="hero__text text-white wow animate__fadeInUp animate__animated"
                            data-wow-duration="1200ms" data-wow-delay="400ms">We help nonprofits from Australia to
                            Ukraine (and hundreds of places in between)
                            access the tools, training,</p>
                        <a class="btn btn--styleOne btn--primary it-btn wow animate__fadeInUp animate__animated"
                            data-wow-duration="1200ms" data-wow-delay="500ms" href="#">
                            <span class="btn__text">join the journey</span>
                            <i class="fa-solid fa-heart btn__icon"></i>
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
                                        <feGaussianBlur in="SourceGraphic" result="blur" stdDeviation="10">
                                        </feGaussianBlur>
                                        <feColorMatrix in="blur" mode="matrix"
                                            values="1 0 0 0 0 0 1 0 0 0 0 0 1 0 0 0 0 0 21 -7" result="goo">
                                        </feColorMatrix>
                                        <feBlend in2="goo" in="SourceGraphic" result="mix"></feBlend>
                                    </filter>
                                </defs>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero/Welcome Section End -->
    
    {{-- <livewire:payment-form/> --}}
    <!-- About && Features && Donner Section -->
    <section class="about pt-125">
        <img class="about__shape about__shape--one" src="{{ URL::to('website/image/shapes/love-shape3.svg') }}"
            alt="Gainioz Shape">
        <img class="about__shape about__shape--two" src="{{ URL::to('website/image/shapes/love-shape4.svg') }}"
            alt="Gainioz Shape">
        <img class="about__shape about__shape--three" src="{{ URL::to('website/image/shapes/love-shape5.svg') }}"
            alt="Gainioz Shape">
        <div class="aboutArea position-relative">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 mb-30">
                        <div class="aboutContent">
                            <!-- Section Heading/Title -->
                            <div class="sectionTitle mb-20">
                                <span class="sectionTitle__small">
                                    <i class="fa-solid fa-heart btn__icon"></i>
                                    about foundation
                                </span>
                                <h2 class="sectionTitle__big">what have we done with
                                    your help</h2>
                            </div>
                            <!-- Section Heading/Title End -->
                            <p class="aboutContent__text">
                                There are many variations of passages of Lorem Ipsum available, but the majority have
                                suffered
                                alteration in some form,
                                by injected humour, or randomised words which don't look even slightly believable. If
                                you are going to
                                use a passage Lorem of
                                Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle
                                There are many
                                variations of
                                passages
                            </p>
                            <span class="aboutContent__quote">join our Action and everyone can help</span>
                            <a class="btn btn--styleOne btn--secondary it-btn" href="#">
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
                                <svg class="it-btn__animation" xmlns="http://www.w3.org/2000/svg" version="1.1">
                                    <defs>
                                        <filter>
                                            <feGaussianBlur in="SourceGraphic" result="blur" stdDeviation="10">
                                            </feGaussianBlur>
                                            <feColorMatrix in="blur" mode="matrix"
                                                values="1 0 0 0 0 0 1 0 0 0 0 0 1 0 0 0 0 0 21 -7" result="goo">
                                            </feColorMatrix>
                                            <feBlend in2="goo" in="SourceGraphic" result="mix"></feBlend>
                                        </filter>
                                    </defs>
                                </svg>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="row g-4">
                            <div class="col-lg-6 col-md-6">
                                <div class="missionBlock bgSecondary">
                                    <div class="missionBlock__icon">
                                        <img src="{{ URL::to('website/image/icons/mission-icon1.svg') }}"
                                            alt="Gainioz Mission">
                                    </div>
                                    <div class="missionBlock__content">
                                        <span class="missionBlock__counter">1600</span>
                                        <p class="missionBlock__title">SOLAR PANEL</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="missionBlock bgPrimary">
                                    <div class="missionBlock__icon">
                                        <img src="{{ URL::to('website/image/icons/mission-icon2.svg') }}"
                                            alt="Gainioz Mission">
                                    </div>
                                    <div class="missionBlock__content">
                                        <span class="missionBlock__counter">289</span>
                                        <p class="missionBlock__title">Build HOme</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="missionBlock bgPrimary">
                                    <div class="missionBlock__icon">
                                        <img src="{{ URL::to('website/image/icons/mission-icon3.svg') }}"
                                            alt="Gainioz Mission">
                                    </div>
                                    <div class="missionBlock__content">
                                        <span class="missionBlock__counter">16<span>k</span></span>
                                        <p class="missionBlock__title">Give Job</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="missionBlock bgSecondary">
                                    <div class="missionBlock__icon">
                                        <img src="{{ URL::to('website/image/icons/mission-icon4.svg') }}"
                                            alt="Gainioz Mission">
                                    </div>
                                    <div class="missionBlock__content">
                                        <span class="missionBlock__counter">24<span>mln</span></span>
                                        <p class="missionBlock__title">Pure water</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="featureArea pt-100">
            <div class="featureArea__map">
                <img src="{{ URL::to('website/image/shapes/map.png') }}" alt="Gainioz Map">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="keyFeatureBox mb-30">
                            <div class="row">
                                <div class="col-lg-4 wow animate__fadeInLeft" data-wow-duration="1200ms"
                                    data-wow-delay="200ms">
                                    <div class="keyFeatureBlock mb-30">
                                        <div class="keyFeatureBlock__left">
                                            <span class="keyFeatureBlock__icon">
                                                <img src="{{ URL::to('website/image/icons/icon1.svg') }}"
                                                    alt="Gainioz Feature_Icon">
                                            </span>
                                        </div>
                                        <div class="keyFeatureBlock__content">
                                            <h3 class="keyFeatureBlock__heading">
                                                <a class="keyFeatureBlock__heading__link" href="services.html">
                                                    healthy Food
                                                </a>
                                            </h3>
                                            <p class="keyFeatureBlock__text">We help local nonprofits access the
                                                funding, tools, training,</p>
                                        </div>
                                        <div class="keyFeatureBlock__skill skill-bar" data-width="80%">
                                            <span class="keyFeatureBlock__skill__bar"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 wow animate__fadeInLeft" data-wow-duration="1200ms"
                                    data-wow-delay="300ms">
                                    <div class="keyFeatureBlock mb-30">
                                        <div class="keyFeatureBlock__left">
                                            <span class="keyFeatureBlock__icon">
                                                <img src="{{ URL::to('website/image/icons/icon2.svg') }}"
                                                    alt="Gainioz Feature_Icon">
                                            </span>
                                        </div>
                                        <div class="keyFeatureBlock__content">
                                            <h3 class="keyFeatureBlock__heading">
                                                <a class="keyFeatureBlock__heading__link" href="services.html">
                                                    Dedicated
                                                </a>
                                            </h3>
                                            <p class="keyFeatureBlock__text">We help local nonprofits access the
                                                funding, tools, training,</p>
                                        </div>
                                        <div class="keyFeatureBlock__skill skill-bar" data-width="94%">
                                            <span class="keyFeatureBlock__skill__bar"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 wow animate__fadeInLeft" data-wow-duration="1200ms"
                                    data-wow-delay="400ms">
                                    <div class="keyFeatureBlock mb-30">
                                        <div class="keyFeatureBlock__left">
                                            <span class="keyFeatureBlock__icon">
                                                <img src="{{ URL::to('website/image/icons/icon3.svg') }}"
                                                    alt="Gainioz Feature_Icon">
                                            </span>
                                        </div>
                                        <div class="keyFeatureBlock__content">
                                            <h3 class="keyFeatureBlock__heading">
                                                <a class="keyFeatureBlock__heading__link" href="services.html">
                                                    Strong Team
                                                </a>
                                            </h3>
                                            <p class="keyFeatureBlock__text">We help local nonprofits access the
                                                funding, tools, training,</p>
                                        </div>
                                        <div class="keyFeatureBlock__skill skill-bar" data-width="70%">
                                            <span class="keyFeatureBlock__skill__bar"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="donnerArea pt-70 pb-95">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="donnerAreaContent text-center mb-30">
                                <h2 class="donnerAreaContent__bigTitle wow animate__fadeInUp"
                                    data-wow-duration="1200ms" data-wow-delay="200ms">
                                    <span class="donnerAreaContent__bigTitle__number">250</span>
                                    <span class="donnerAreaContent__bigTitle__text">mln</span>
                                </h2>
                                <h3 class="donnerAreaContent__heading text-uppercase wow animate__fadeInUp"
                                    data-wow-duration="1200ms" data-wow-delay="300ms">People Live with a disability
                                </h3>
                                <a class="btn btn--styleOne btn--black it-btn wow animate__fadeInUp"
                                    data-wow-duration="1200ms" data-wow-delay="400ms" href="#">
                                    <span class="btn__text">BECAME A VOLEENTEER</span>
                                    <i class="fa-solid fa-heart btn__icon"></i>
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
                                                <feGaussianBlur in="SourceGraphic" result="blur" stdDeviation="10">
                                                </feGaussianBlur>
                                                <feColorMatrix in="blur" mode="matrix"
                                                    values="1 0 0 0 0 0 1 0 0 0 0 0 1 0 0 0 0 0 21 -7" result="goo">
                                                </feColorMatrix>
                                                <feBlend in2="goo" in="SourceGraphic" result="mix"></feBlend>
                                            </filter>
                                        </defs>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="featureArea__main cc-slide-wrap">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-8">
                            <!-- Section Heading/Title -->
                            <div class="sectionTitle mb-65">
                                <span class="sectionTitle__small">
                                    <i class="fa-solid fa-heart btn__icon"></i>
                                    need your help
                                </span>
                                <h2 class="sectionTitle__big">Featured Campaigns</h2>
                            </div>
                            <!-- Section Heading/Title End -->
                        </div>
                        <div class="col-md-4">
                            <div class="sliderNav sliderNav--style1 mb-65">
                                <span class="sliderNav__btn btn-prev">
                                    <svg width="15" height="10" viewBox="0 0 15 10" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M5.75 9.40625L6.375 8.78125C6.5 8.625 6.5 8.40625 6.34375 8.25L3.84375 5.8125H14.625C14.8125 5.8125 15 5.65625 15 5.4375V4.5625C15 4.375 14.8125 4.1875 14.625 4.1875H3.84375L6.34375 1.78125C6.5 1.625 6.5 1.40625 6.375 1.25L5.75 0.625C5.59375 0.5 5.375 0.5 5.21875 0.625L1.09375 4.75C0.96875 4.90625 0.96875 5.125 1.09375 5.28125L5.21875 9.40625C5.375 9.53125 5.59375 9.53125 5.75 9.40625Z"
                                            fill="white" />
                                    </svg>
                                </span>
                                <span class="sliderNav__btn btn-next">
                                    <svg width="14" height="10" viewBox="0 0 14 10" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M9.21875 0.625L8.59375 1.25C8.46875 1.40625 8.46875 1.625 8.625 1.78125L11.125 4.1875H0.375C0.15625 4.1875 0 4.375 0 4.5625V5.4375C0 5.65625 0.15625 5.8125 0.375 5.8125H11.125L8.625 8.25C8.46875 8.40625 8.46875 8.625 8.59375 8.78125L9.21875 9.40625C9.375 9.53125 9.59375 9.53125 9.75 9.40625L13.875 5.28125C14 5.125 14 4.90625 13.875 4.75L9.75 0.625C9.59375 0.5 9.375 0.5 9.21875 0.625Z"
                                            fill="white" />
                                    </svg>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="cc-sliderStyle1 swiper">
                        <div class="swiper-wrapper">

                            @forelse ($causeDetails as $item)
                                <div class="swiper-slide">
                                    <div class="featureBlock featureBlock--active">
                                        <div class="featureBlock__wrap">
                                            <figure class="featureBlock__thumb">
                                                <a
                                                    class="featureBlock__thumb__link"href="/cause-detail/{{ $item->slug }}">
                                                    <img src="{{ env('ADMIN_URL').'storage/' . $item->photo }}"
                                                        alt="Gainioz Featured Thumb">
                                                </a>
                                                {{-- <a
                                                    class="featureBlock__hashLink"href="/cause-detail/{{ $item->slug }}">
                                                    <span class="featureBlock__hashLink__text">
                                                        #{{ $item->causeCate->title }}
                                                    </span>
                                                </a> --}}
                                            </figure>
                                            <div class="featureBlock__content">
                                                <h3 class="featureBlock__heading">
                                                    <a class="featureBlock__heading__link"
                                                        href="/cause-detail/{{ $item->slug }}">
                                                        {{ $item->title }}
                                                    </a>
                                                </h3>
                                                <p class="featureBlock__text">
                                                    {{ $item->short_details }}
                                                </p>
                                            </div>
                                        </div>
                                        @php
                                            $raisedValue = raisedValue($item->id);
                                            $getFillPercentage = getFillPercentage($item->goal, $raisedValue);
                                            $goal_amount = currency($item->goal);
                                            $raised_amount = currency($raisedValue);
                                        @endphp
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
                                                    <span class="featureBlock__eqn__price">{{Session::get('sessLocation')?->currency_symbol ?? '$'}} {{ $goal_amount }}</span>
                                                </div>
                                                <div class="featureBlock__eqn__block">
                                                    <span class="featureBlock__eqn__title">Raised</span>
                                                    <span class="featureBlock__eqn__price">{{Session::get('sessLocation')?->currency_symbol ?? '$'}} {{ floor($raised_amount) }}</span>
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
                            @empty
                            @endforelse
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About && Features && Doner End -->
    <!-- Testimonials -->
    <section class="review pt-110 pb-100 position-relative overflow-hidden cc-slide-wrap3">
        <img src="{{ URL::to('website/image/shapes/testi-shape1.svg') }}" alt="Gainioz Shape"
            class="review__shape review__shape--one">
        <img src="{{ URL::to('website/image/shapes/testi-shape2.svg') }}" alt="Gainioz Shape"
            class="review__shape review__shape--two">
        <div class="mask mask--review position-absolute">
            <img src="{{ URL::to('website/image/update/shape1.jpg') }}" alt="Gainioz Shape" class="mask__thumb">
            <img class="mask__overlay" src="{{ URL::to('website/image/shapes/testi-shape4.svg') }}"
                alt="Gainioz Shape">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-8 mx-auto">
                    <!-- Section Heading/Title -->
                    <div class="sectionTitle text-center mb-65">
                        <span class="sectionTitle__small justify-content-center">
                            <i class="fa-solid fa-heart btn__icon"></i>
                            Testimonial
                        </span>
                        <h2 class="sectionTitle__big">People Say about our foundation</h2>
                    </div>
                    <!-- Section Heading/Title End -->
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="review__box mb-30">
                        <div class="sliderNav sliderNav--style2">
                            <span class="sliderNav__btn btn-prev" tabindex="0" role="button"
                                aria-label="Previous slide">
                                <svg width="15" height="10" viewBox="0 0 15 10" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M5.75 9.40625L6.375 8.78125C6.5 8.625 6.5 8.40625 6.34375 8.25L3.84375 5.8125H14.625C14.8125 5.8125 15 5.65625 15 5.4375V4.5625C15 4.375 14.8125 4.1875 14.625 4.1875H3.84375L6.34375 1.78125C6.5 1.625 6.5 1.40625 6.375 1.25L5.75 0.625C5.59375 0.5 5.375 0.5 5.21875 0.625L1.09375 4.75C0.96875 4.90625 0.96875 5.125 1.09375 5.28125L5.21875 9.40625C5.375 9.53125 5.59375 9.53125 5.75 9.40625Z"
                                        fill="currentColor"></path>
                                </svg>
                            </span>
                            <span class="sliderNav__btn btn-next" tabindex="0" role="button"
                                aria-label="Next slide">
                                <svg width="14" height="10" viewBox="0 0 14 10" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M9.21875 0.625L8.59375 1.25C8.46875 1.40625 8.46875 1.625 8.625 1.78125L11.125 4.1875H0.375C0.15625 4.1875 0 4.375 0 4.5625V5.4375C0 5.65625 0.15625 5.8125 0.375 5.8125H11.125L8.625 8.25C8.46875 8.40625 8.46875 8.625 8.59375 8.78125L9.21875 9.40625C9.375 9.53125 9.59375 9.53125 9.75 9.40625L13.875 5.28125C14 5.125 14 4.90625 13.875 4.75L9.75 0.625C9.59375 0.5 9.375 0.5 9.21875 0.625Z"
                                        fill="currentColor"></path>
                                </svg>
                            </span>
                        </div>
                        <ul class="review__box__images">
                            <li><img src="{{ URL::to('website/image/auth/reviewAuth2.png') }}"
                                    alt="Gainioz Reviewer"></li>
                            <li><img src="{{ URL::to('website/image/auth/reviewAuth3.png') }}"
                                    alt="Gainioz Reviewer"></li>
                            <li><img src="{{ URL::to('website/image/auth/reviewAuth4.png') }}"
                                    alt="Gainioz Reviewer"></li>
                            <li><img src="{{ URL::to('website/image/auth/reviewAuth5.png') }}"
                                    alt="Gainioz Reviewer"></li>
                        </ul>
                        <div class="reviewblock text-center">
                            <span class="reviewblock__quoteIcon__two">
                                <svg width="300" height="263" viewBox="0 0 300 263" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M271.875 131.5H225V94C225 73.4922 241.406 56.5 262.5 56.5H267.188C274.805 56.5 281.25 50.6406 281.25 42.4375V14.3125C281.25 6.69531 274.805 0.25 267.188 0.25H262.5C210.352 0.25 168.75 42.4375 168.75 94V234.625C168.75 250.445 181.055 262.75 196.875 262.75H271.875C287.109 262.75 300 250.445 300 234.625V159.625C300 144.391 287.109 131.5 271.875 131.5ZM103.125 131.5H56.25V94C56.25 73.4922 72.6562 56.5 93.75 56.5H98.4375C106.055 56.5 112.5 50.6406 112.5 42.4375V14.3125C112.5 6.69531 106.055 0.25 98.4375 0.25H93.75C41.6016 0.25 0 42.4375 0 94V234.625C0 250.445 12.3047 262.75 28.125 262.75H103.125C118.359 262.75 131.25 250.445 131.25 234.625V159.625C131.25 144.391 118.359 131.5 103.125 131.5Z"
                                        fill="#F8F7F7" />
                                </svg>
                            </span>
                            <div class="testi-slider-active1 swiper">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="reviewblock__content">
                                            <img class="reviewblock__author__image"
                                                src="{{ URL::to('website/image/auth/reviewAuth1.png') }}"
                                                alt="Gainioz Reviewer">
                                            <span class="reviewblock__quoteIcon__one">
                                                <svg width="24" height="22" viewBox="0 0 24 22"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M21.75 10.9951H18V7.99512C18 6.35449 19.3125 4.99512 21 4.99512H21.375C21.9844 4.99512 22.5 4.52637 22.5 3.87012V1.62012C22.5 1.01074 21.9844 0.495117 21.375 0.495117H21C16.8281 0.495117 13.5 3.87012 13.5 7.99512V19.2451C13.5 20.5107 14.4844 21.4951 15.75 21.4951H21.75C22.9688 21.4951 24 20.5107 24 19.2451V13.2451C24 12.0264 22.9688 10.9951 21.75 10.9951ZM8.25 10.9951H4.5V7.99512C4.5 6.35449 5.8125 4.99512 7.5 4.99512H7.875C8.48438 4.99512 9 4.52637 9 3.87012V1.62012C9 1.01074 8.48438 0.495117 7.875 0.495117H7.5C3.32812 0.495117 0 3.87012 0 7.99512V19.2451C0 20.5107 0.984375 21.4951 2.25 21.4951H8.25C9.46875 21.4951 10.5 20.5107 10.5 19.2451V13.2451C10.5 12.0264 9.46875 10.9951 8.25 10.9951Z"
                                                        fill="#EB9309" />
                                                </svg>
                                            </span>
                                            <h4 class="reviewblock__qotes">“ I ah4preciate your amazing services and
                                                professional staff for
                                                all your
                                                hard work and
                                                creative thinking! It was fun,
                                                and I hope to work with you again soon “</h4>
                                            <span class="reviewblock__author__name">Rasalina Willams</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mvv pt-100">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="mvvTabs">
                            <div class="mvvTabs__wrapper d-flex align-items-start">
                                <div class="nav nav-pills mb-30" id="v-pills-tab" role="tablist"
                                    aria-orientation="vertical">
                                    <button class="mvvTabs__button nav-link active" id="v-pills-home-tab"
                                        data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button"
                                        role="tab" aria-controls="v-pills-home" aria-selected="true">Our
                                        MIssion</button>
                                    <button class="mvvTabs__button nav-link" id="v-pills-profile-tab"
                                        data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button"
                                        role="tab" aria-controls="v-pills-profile" aria-selected="false">Our
                                        Vision</button>
                                    <button class="mvvTabs__button nav-link" id="v-pills-messages-tab"
                                        data-bs-toggle="pill" data-bs-target="#v-pills-messages" type="button"
                                        role="tab" aria-controls="v-pills-messages" aria-selected="false">Our
                                        Values</button>
                                </div>
                                <div class="tab-content mb-30" id="v-pills-tabContent">
                                    <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel"
                                        aria-labelledby="v-pills-home-tab">
                                        <div class="mvvTabs__content">
                                            <h2 class="mvvTabs__heading">Listen, Act, Learn, Repeat</h2>
                                            <p class="mvvTabs__text mb-25">There are many variations of passages of
                                                Lorem Ipsum available, but
                                                the
                                                majority have suffered
                                                alteration in some form,
                                                by injected humour, or randomised words which don't look even slightly
                                                believable. If you are
                                                going to use a passage of
                                                Lorem Ipsum, you need to be sure there isn't anything embarrassing
                                                hidden in the middle There
                                                are many variations</p>
                                            <div class="mvvTabs__skills">
                                                <div class="mvvTabs__skills__block mb-20">
                                                    <h4 class="mvvTabs__skills__counter"><span
                                                            class="mvvTabs__skills__counter">45</span>%</h4>
                                                    <span class="mvvTabs__skills__title color-title">kids need
                                                        help</span>
                                                </div>
                                                <div class="mvvTabs__skills__block mb-20">
                                                    <h4 class="mvvTabs__skills__counter">$<span
                                                            class="mvvTabs__skills__counter">140</span>k</h4>
                                                    <span class="mvvTabs__skills__title color-title">raised Now</span>
                                                </div>
                                                <div class="mvvTabs__skills__block mb-20">
                                                    <h4 class="mvvTabs__skills__counter"><span
                                                            class="mvvTabs__skills__counter">189</span>+</h4>
                                                    <span class="mvvTabs__skills__title color-title">Voleenteer</span>
                                                </div>
                                            </div>
                                            <p class="mvvTabs__text mb-0">There are many variations of passages of
                                                Lorem Ipsum available, but
                                                the
                                                majority have suffered alteration in some form,
                                                by injected humour.</p>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="v-pills-profile" role="tabpanel"
                                        aria-labelledby="v-pills-profile-tab">
                                        <div class="mvvTabs__content">
                                            <h2 class="mvvTabs__heading">Listen, Act, Learn, Repeat</h2>
                                            <p class="mvvTabs__text mb-25">There are many variations of passages of
                                                Lorem Ipsum available, but
                                                the
                                                majority have suffered
                                                alteration in some form,
                                                by injected humour, or randomised words which don't look even slightly
                                                believable. If you are
                                                going to use a passage of
                                                Lorem Ipsum, you need to be sure there isn't anything embarrassing
                                                hidden in the middle There
                                                are many variations</p>
                                            <div class="mvvTabs__skills">
                                                <div class="mvvTabs__skills__block mb-20">
                                                    <h4 class="mvvTabs__skills__counter"><span
                                                            class="mvvTabs__skills__counter">45</span>%</h4>
                                                    <span class="mvvTabs__skills__title color-title">kids need
                                                        help</span>
                                                </div>
                                                <div class="mvvTabs__skills__block mb-20">
                                                    <h4 class="mvvTabs__skills__counter">$<span
                                                            class="mvvTabs__skills__counter">140</span>k</h4>
                                                    <span class="mvvTabs__skills__title color-title">raised Now</span>
                                                </div>
                                                <div class="mvvTabs__skills__block mb-20">
                                                    <h4 class="mvvTabs__skills__counter"><span
                                                            class="mvvTabs__skills__counter">189</span>+</h4>
                                                    <span class="mvvTabs__skills__title color-title">Voleenteer</span>
                                                </div>
                                            </div>
                                            <p class="mvvTabs__text mb-0">There are many variations of passages of
                                                Lorem Ipsum available, but
                                                the
                                                majority have suffered alteration in some form,
                                                by injected humour.</p>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="v-pills-messages" role="tabpanel"
                                        aria-labelledby="v-pills-messages-tab">
                                        <div class="mvvTabs__content">
                                            <h2 class="mvvTabs__heading">Listen, Act, Learn, Repeat</h2>
                                            <p class="mvvTabs__text mb-25">There are many variations of passages of
                                                Lorem Ipsum available, but
                                                the
                                                majority have suffered
                                                alteration in some form,
                                                by injected humour, or randomised words which don't look even slightly
                                                believable. If you are
                                                going to use a passage of
                                                Lorem Ipsum, you need to be sure there isn't anything embarrassing
                                                hidden in the middle There
                                                are many variations</p>
                                            <div class="mvvTabs__skills">
                                                <div class="mvvTabs__skills__block mb-20">
                                                    <h4 class="mvvTabs__skills__counter"><span
                                                            class="mvvTabs__skills__counter">45</span>%</h4>
                                                    <span class="mvvTabs__skills__title color-title">kids need
                                                        help</span>
                                                </div>
                                                <div class="mvvTabs__skills__block mb-20">
                                                    <h4 class="mvvTabs__skills__counter">$<span
                                                            class="mvvTabs__skills__counter">140</span>k</h4>
                                                    <span class="mvvTabs__skills__title color-title">raised Now</span>
                                                </div>
                                                <div class="mvvTabs__skills__block mb-20">
                                                    <h4 class="mvvTabs__skills__counter"><span
                                                            class="mvvTabs__skills__counter">189</span>+</h4>
                                                    <span class="mvvTabs__skills__title color-title">Voleenteer</span>
                                                </div>
                                            </div>
                                            <p class="mvvTabs__text mb-0">There are many variations of passages of
                                                Lorem Ipsum available, but
                                                the
                                                majority have suffered alteration in some form,
                                                by injected humour.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Testimonials End -->

    <!-- Sponsors -->
    <section class="sponsors pb-60">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="sponsorsTitle">
                        <span class="sponsorsTitle__line"></span>
                        <h2 class="sponsorsTitle__heading text-uppercase">“ Become Support Partner ”</h2>
                        <span class="sponsorsTitle__line"></span>
                    </div>
                </div>
            </div>
            <div class="sponsors--style2">
                <div class="sponsor-slider-active swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="sponsorsItem mb-40">
                                <img src="{{ URL::to('website/image/sponsors/sponsors1.png') }}"
                                    alt="Gainioz Sponsors">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="sponsorsItem mb-40">
                                <img src="{{ URL::to('website/image/sponsors/sponsors2.png') }}"
                                    alt="Gainioz Sponsors">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="sponsorsItem mb-40">
                                <img src="{{ URL::to('website/image/sponsors/sponsors3.png') }}"
                                    alt="Gainioz Sponsors">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="sponsorsItem mb-40">
                                <img src="{{ URL::to('website/image/sponsors/sponsors4.png') }}"
                                    alt="Gainioz Sponsors">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="sponsorsItem mb-40">
                                <img src="{{ URL::to('website/image/sponsors/sponsors5.png') }}"
                                    alt="Gainioz Sponsors">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="sponsorsItem mb-40">
                                <img src="{{ URL::to('website/image/sponsors/sponsors6.png') }}"
                                    alt="Gainioz Sponsors">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Sponsors End -->
</div>
