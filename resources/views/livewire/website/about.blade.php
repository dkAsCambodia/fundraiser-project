<div>
    <!-- Page Breadcumb -->
    <section class="pageBreadcumb pageBreadcumb--style1 position-relative" data-bg-image="{{ URL::to('website/image/bg/pageBreadcumbBg1.jpg') }}">
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
                        <h2 class="pageTitle__heading text-white text-uppercase mb-25">About foundation</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">about us</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Page Breadcumb End -->
    <!-- About -->
    <section class="about pt-120 pb-105">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Section Heading/Title -->
                    <div class="sectionTitle text-center mb-30">
                        <span class="sectionTitle__small justify-content-center">
                            <i class="fa-solid fa-heart btn__icon"></i>
                            about foundation
                        </span>
                        <h2 class="sectionTitle__big">We are always there others need help</h2>
                    </div>
                    <!-- Section Heading/Title End -->
                </div>
                <div class="col-lg-10 mx-auto">
                    <div class="aboutDetails text-center">
                        <p class="aboutDetailsText mb-20">Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                            accusantium
                            doloremque laudantium, totam rem aperiam,
                            eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt
                            explicabo. Nemo
                            enim ipsam
                            voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni
                            dolores eos qui
                            ratione
                            voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet,
                            consectetur,
                            adipisci velit,
                            loremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi
                            architecto
                            beatae vitae
                            dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut
                            fugit,</p>
                        <p class="aboutDetailsText mb-20">Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                            accusantium
                            doloremque laudantium, totam rem aperiam,
                            eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt
                            explicabo. Nemo
                            enim ipsam
                            voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni
                            dolores eos qui
                            ratione
                            voluptatem sequi nesciunt. Neque porro quisquam est,</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About End -->
    <!-- About Feature -->
    <div class="about position-relative">
        <img src="{{ URL::to('website/image/map/map-about-tab.svg') }}" alt="Gainioz" class="map-about-tab">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="featureTab">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="home-tab" data-bs-toggle="tab"
                                    data-bs-target="#home" type="button" role="tab" aria-controls="home"
                                    aria-selected="true">about foundation</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile"
                                    type="button" role="tab" aria-controls="profile" aria-selected="false">our
                                    mission</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact"
                                    type="button" role="tab" aria-controls="contact" aria-selected="false">our
                                    vission</button>
                            </li>
                        </ul>
                        <div class="tab-content pt-55" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel"
                                aria-labelledby="home-tab">
                                <div class="row">
                                    <div class="col-lg-10 mx-auto">
                                        <div class="aboutDetails text-center">
                                            <p class="aboutDetailsText mb-20">Rorem ipsum dolor sit amet, consectetur
                                                adipiscing elit, sed do
                                                eiusmod
                                                tempor incididunt ut labore et dolore magna
                                                aliqua. Ut enim ad minim veniam, quis exercitation ullamco laboris nisi
                                                ut aliquip ex ea
                                                commodo.
                                            </p>
                                            <p class="aboutDetailsText mb-20">Sed ut perspiciatis unde omnis iste natus
                                                error sit voluptatem
                                                accusantium
                                                doloremque laudantium, totam rem aperiam,
                                                eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae
                                                vitae dicta sunt
                                                explicabo.
                                                Nemo enim ipsam
                                                voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia
                                                consequuntur magni dolores
                                                eos
                                                qui ratione
                                                voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum
                                                quia dolor sit amet,
                                                consectetur, adipisci velit,
                                                loremque laudantium, totam rem aperiam, eaque ipsa quae ab illo
                                                inventore veritatis et quasi
                                                architecto beatae vitae
                                                dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit
                                                aspernatur aut odit aut
                                                fugit,
                                            </p>
                                        </div>
                                        <div class="aboutDetailsThumbs pt-100">
                                            <div class="row g-0 align-items-center">
                                                <div class="col-lg-4">
                                                    <div class="aboutDetailsThumb">
                                                        <img src="{{ URL::to('website/image/about/aboutDetailsthumb1.jpg') }}"
                                                            alt="About Gainioz">
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="aboutDetailsThumb aboutDetailsThumb--big">
                                                        <img src="{{ URL::to('website/image/about/aboutDetailsthumb2.jpg') }}"
                                                            alt="About Gainioz">
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="aboutDetailsThumb">
                                                        <img src="{{ URL::to('website/image/about/aboutDetailsthumb3.jpg') }}"
                                                            alt="About Gainioz">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                <div class="row">
                                    <div class="col-lg-10 mx-auto">
                                        <div class="aboutDetails text-center">
                                            <p class="aboutDetailsText mb-20">Rorem ipsum dolor sit amet, consectetur
                                                adipiscing elit, sed do
                                                eiusmod
                                                tempor incididunt ut labore et dolore magna
                                                aliqua. Ut enim ad minim veniam, quis exercitation ullamco laboris nisi
                                                ut aliquip ex ea
                                                commodo.
                                            </p>
                                            <p class="aboutDetailsText mb-20">Sed ut perspiciatis unde omnis iste natus
                                                error sit voluptatem
                                                accusantium
                                                doloremque laudantium, totam rem aperiam,
                                                eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae
                                                vitae dicta sunt
                                                explicabo.
                                                Nemo enim ipsam
                                                voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia
                                                consequuntur magni dolores
                                                eos
                                                qui ratione
                                                voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum
                                                quia dolor sit amet,
                                                consectetur, adipisci velit,
                                                loremque laudantium, totam rem aperiam, eaque ipsa quae ab illo
                                                inventore veritatis et quasi
                                                architecto beatae vitae
                                                dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit
                                                aspernatur aut odit aut
                                                fugit,
                                            </p>
                                        </div>
                                        <div class="aboutDetailsThumbs pt-100">
                                            <div class="row g-0 align-items-center">
                                                <div class="col-lg-4">
                                                    <div class="aboutDetailsThumb">
                                                        <img src="{{ URL::to('website/image/about/aboutDetailsthumb1.jpg') }}"
                                                            alt="About Gainioz">
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="aboutDetailsThumb aboutDetailsThumb--big">
                                                        <img src="{{ URL::to('website/image/about/aboutDetailsthumb2.jpg') }}"
                                                            alt="About Gainioz">
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="aboutDetailsThumb">
                                                        <img src="{{ URL::to('website/image/about/aboutDetailsthumb3.jpg') }}"
                                                            alt="About Gainioz">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                                <div class="row">
                                    <div class="col-lg-10 mx-auto">
                                        <div class="aboutDetails text-center">
                                            <p class="aboutDetailsText mb-20">Rorem ipsum dolor sit amet, consectetur
                                                adipiscing elit, sed do
                                                eiusmod
                                                tempor incididunt ut labore et dolore magna
                                                aliqua. Ut enim ad minim veniam, quis exercitation ullamco laboris nisi
                                                ut aliquip ex ea
                                                commodo.
                                            </p>
                                            <p class="aboutDetailsText mb-20">Sed ut perspiciatis unde omnis iste natus
                                                error sit voluptatem
                                                accusantium
                                                doloremque laudantium, totam rem aperiam,
                                                eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae
                                                vitae dicta sunt
                                                explicabo.
                                                Nemo enim ipsam
                                                voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia
                                                consequuntur magni dolores
                                                eos
                                                qui ratione
                                                voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum
                                                quia dolor sit amet,
                                                consectetur, adipisci velit,
                                                loremque laudantium, totam rem aperiam, eaque ipsa quae ab illo
                                                inventore veritatis et quasi
                                                architecto beatae vitae
                                                dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit
                                                aspernatur aut odit aut
                                                fugit,
                                            </p>
                                        </div>
                                        <div class="aboutDetailsThumbs pt-100">
                                            <div class="row g-0 align-items-center">
                                                <div class="col-lg-4">
                                                    <div class="aboutDetailsThumb">
                                                        <img src="{{ URL::to('website/image/about/aboutDetailsthumb1.jpg') }}"
                                                            alt="About Gainioz">
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="aboutDetailsThumb aboutDetailsThumb--big">
                                                        <img src="{{ URL::to('website/image/about/aboutDetailsthumb2.jpg') }}"
                                                            alt="About Gainioz">
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="aboutDetailsThumb">
                                                        <img src="{{ URL::to('website/image/about/aboutDetailsthumb3.jpg') }}"
                                                            alt="About Gainioz">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About Feature -->
    <!-- Facts -->
    <section class="fact pt-125 pb-95">
        <div class="container">
            <div class="row">
                <div class="col-lg-11 mx-auto">
                    <!-- Section Heading/Title -->
                    <div class="sectionTitle text-center mb-65">
                        <span class="sectionTitle__small justify-content-center">
                            <i class="fa-solid fa-heart btn__icon"></i>
                            help us our goal
                        </span>
                        <h2 class="sectionTitle__big">Small Donations Make Bigger Impact On Someone’s Life, Act Today!
                        </h2>
                    </div>
                    <!-- Section Heading/Title End -->
                </div>
            </div>
            <div class="factBoxes pb-70">
                <div class="factWrapper">
                    <div class="row gx-50">
                        <div class="col-lg-4 col-md-6">
                            <div class="factBlock">
                                <h3 class="factBlock__heading"><span class="factBlock__number">16000,</span><span
                                        class="factBlock__ext">kg</span>
                                </h3>
                                <span class="factBlock__tag">Food</span>
                                <p class="factBlock__text">We help local nonprofits access the funding, tools,
                                    training,</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="factBlock">
                                <h3 class="factBlock__heading"><span class="factBlock__number">23,</span><span
                                        class="factBlock__ext">mln</span>
                                </h3>
                                <span class="factBlock__tag">Food</span>
                                <p class="factBlock__text">We help local nonprofits access the funding, tools,
                                    training,</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="factBlock">
                                <h3 class="factBlock__heading"><span class="factBlock__number">14,000</span><span
                                        class="factBlock__ext">+</span>
                                </h3>
                                <span class="factBlock__tag">Food</span>
                                <p class="factBlock__text">We help local nonprofits access the funding, tools,
                                    training,</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="factWrapper factWrapper--two">
                    <div class="row justify-content-center gx-50">
                        <div class="col-lg-4 col-md-6">
                            <div class="factBlock">
                                <h3 class="factBlock__heading"><span class="factBlock__number">16000,</span><span
                                        class="factBlock__ext">kg</span>
                                </h3>
                                <span class="factBlock__tag">Food</span>
                                <p class="factBlock__text">We help local nonprofits access the funding, tools,
                                    training,</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="factBlock">
                                <h3 class="factBlock__heading"><span class="factBlock__number">23,</span><span
                                        class="factBlock__ext">mln</span>
                                </h3>
                                <span class="factBlock__tag">Food</span>
                                <p class="factBlock__text">We help local nonprofits access the funding, tools,
                                    training,</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-9 mx-auto">
                    <p class="aboutDetailsText mb-20 text-center">Sed ut perspiciatis unde omnis iste natus error sit
                        voluptatem
                        accusantium
                        doloremque laudantium, totam rem aperiam,
                        eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt
                        explicabo. Nemo enim
                        ipsam
                        voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores
                        eos qui
                        ratione
                        voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet,
                        consectetur,
                        adipisci velit,
                        loremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi
                        architecto
                        beatae vitae
                        dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut
                        fugit, voluptas
                        sit aspernatur aut odit aut fugit, voluptas sit aspernatur aut odit aut fugit, voluptas si.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- Facts End -->
    <!-- Volunteers -->
    <section class="volunteersSection pb-120">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Section Heading/Title -->
                    <div class="sectionTitle text-center mb-70">
                        <span class="sectionTitle__small justify-content-center">
                            <i class="fa-solid fa-heart btn__icon"></i>
                            We Change Your Life & World
                        </span>
                        <h2 class="sectionTitle__big">Meet Our Volunteers</h2>
                    </div>
                    <!-- Section Heading/Title End -->
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 mb-45">
                    <div class="volunteerBlock text-center">
                        <figure class="volunteerBlock__figure">
                            <img class="volunteerBlock__figure__thumb" src="{{ URL::to('website/image/volunteers/volunteer1.jpg') }}"
                                alt="Gainioz Volunteers">
                        </figure>
                        <div class="volunteerBlock__content">
                            <h3 class="volunteerBlock__name text-uppercase text-center">
                                <a href="story-details.html">Cameron Williamson</a>
                            </h3>
                            <div class="itSocial itSocial--volunteer">
                                <ul>
                                    <li>
                                        <a class="facebook" href="" rel="nofollow">
                                            <i class="fab fa-facebook-f"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="twitter" href="" rel="nofollow">
                                            <i class="fab fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="instagram" href="" rel="nofollow">
                                            <i class="fab fa-instagram"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="linkedin" href="" rel="nofollow">
                                            <i class="fab fa-linkedin-in"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-45">
                    <div class="volunteerBlock text-center">
                        <figure class="volunteerBlock__figure">
                            <img class="volunteerBlock__figure__thumb" src="{{ URL::to('website/image/volunteers/volunteer2.jpg') }}"
                                alt="Gainioz Volunteers">
                        </figure>
                        <div class="volunteerBlock__content">
                            <h3 class="volunteerBlock__name text-uppercase text-center">
                                <a href="story-details.html">Esther Howard</a>
                            </h3>
                            <div class="itSocial itSocial--volunteer">
                                <ul>
                                    <li>
                                        <a class="facebook" href="" rel="nofollow">
                                            <i class="fab fa-facebook-f"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="twitter" href="" rel="nofollow">
                                            <i class="fab fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="instagram" href="" rel="nofollow">
                                            <i class="fab fa-instagram"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="linkedin" href="" rel="nofollow">
                                            <i class="fab fa-linkedin-in"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-45">
                    <div class="volunteerBlock text-center">
                        <figure class="volunteerBlock__figure">
                            <img class="volunteerBlock__figure__thumb" src="{{ URL::to('website/image/volunteers/volunteer3.jpg') }}"
                                alt="Gainioz Volunteers">
                        </figure>
                        <div class="volunteerBlock__content">
                            <h3 class="volunteerBlock__name text-uppercase text-center">
                                <a href="story-details.html">Guy Hawkins</a>
                            </h3>
                            <div class="itSocial itSocial--volunteer">
                                <ul>
                                    <li>
                                        <a class="facebook" href="" rel="nofollow">
                                            <i class="fab fa-facebook-f"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="twitter" href="" rel="nofollow">
                                            <i class="fab fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="instagram" href="" rel="nofollow">
                                            <i class="fab fa-instagram"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="linkedin" href="" rel="nofollow">
                                            <i class="fab fa-linkedin-in"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-45">
                    <div class="volunteerBlock text-center">
                        <figure class="volunteerBlock__figure">
                            <img class="volunteerBlock__figure__thumb" src="{{ URL::to('website/image/volunteers/volunteer4.jpg') }}"
                                alt="Gainioz Volunteers">
                        </figure>
                        <div class="volunteerBlock__content">
                            <h3 class="volunteerBlock__name text-uppercase text-center">
                                <a href="story-details.html">Savannah Nguyen</a>
                            </h3>
                            <div class="itSocial itSocial--volunteer">
                                <ul>
                                    <li>
                                        <a class="facebook" href="" rel="nofollow">
                                            <i class="fab fa-facebook-f"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="twitter" href="" rel="nofollow">
                                            <i class="fab fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="instagram" href="" rel="nofollow">
                                            <i class="fab fa-instagram"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="linkedin" href="" rel="nofollow">
                                            <i class="fab fa-linkedin-in"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-45">
                    <div class="volunteerBlock text-center">
                        <figure class="volunteerBlock__figure">
                            <img class="volunteerBlock__figure__thumb" src="{{ URL::to('website/image/volunteers/volunteer5.jpg') }}"
                                alt="Gainioz Volunteers">
                        </figure>
                        <div class="volunteerBlock__content">
                            <h3 class="volunteerBlock__name text-uppercase text-center">
                                <a href="story-details.html">Jane Cooper</a>
                            </h3>
                            <div class="itSocial itSocial--volunteer">
                                <ul>
                                    <li>
                                        <a class="facebook" href="" rel="nofollow">
                                            <i class="fab fa-facebook-f"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="twitter" href="" rel="nofollow">
                                            <i class="fab fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="instagram" href="" rel="nofollow">
                                            <i class="fab fa-instagram"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="linkedin" href="" rel="nofollow">
                                            <i class="fab fa-linkedin-in"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-45">
                    <div class="volunteerBlock text-center">
                        <figure class="volunteerBlock__figure">
                            <img class="volunteerBlock__figure__thumb" src="{{ URL::to('website/image/volunteers/volunteer6.jpg') }}"
                                alt="Gainioz Volunteers">
                        </figure>
                        <div class="volunteerBlock__content">
                            <h3 class="volunteerBlock__name text-uppercase text-center">
                                <a href="story-details.html">Robert Fox</a>
                            </h3>
                            <div class="itSocial itSocial--volunteer">
                                <ul>
                                    <li>
                                        <a class="facebook" href="" rel="nofollow">
                                            <i class="fab fa-facebook-f"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="twitter" href="" rel="nofollow">
                                            <i class="fab fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="instagram" href="" rel="nofollow">
                                            <i class="fab fa-instagram"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="linkedin" href="" rel="nofollow">
                                            <i class="fab fa-linkedin-in"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-45">
                    <div class="volunteerBlock text-center">
                        <figure class="volunteerBlock__figure">
                            <img class="volunteerBlock__figure__thumb" src="{{ URL::to('website/image/volunteers/volunteer7.jpg') }}"
                                alt="Gainioz Volunteers">
                        </figure>
                        <div class="volunteerBlock__content">
                            <h3 class="volunteerBlock__name text-uppercase text-center">
                                <a href="story-details.html">Wade Warren</a>
                            </h3>
                            <div class="itSocial itSocial--volunteer">
                                <ul>
                                    <li>
                                        <a class="facebook" href="" rel="nofollow">
                                            <i class="fab fa-facebook-f"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="twitter" href="" rel="nofollow">
                                            <i class="fab fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="instagram" href="" rel="nofollow">
                                            <i class="fab fa-instagram"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="linkedin" href="" rel="nofollow">
                                            <i class="fab fa-linkedin-in"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-45">
                    <div class="volunteerBlock text-center">
                        <figure class="volunteerBlock__figure">
                            <img class="volunteerBlock__figure__thumb" src="{{ URL::to('website/image/volunteers/volunteer8.jpg') }}"
                                alt="Gainioz Volunteers">
                        </figure>
                        <div class="volunteerBlock__content">
                            <h3 class="volunteerBlock__name text-uppercase text-center">
                                <a href="story-details.html">Jenny Wilson</a>
                            </h3>
                            <div class="itSocial itSocial--volunteer">
                                <ul>
                                    <li>
                                        <a class="facebook" href="" rel="nofollow">
                                            <i class="fab fa-facebook-f"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="twitter" href="" rel="nofollow">
                                            <i class="fab fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="instagram" href="" rel="nofollow">
                                            <i class="fab fa-instagram"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="linkedin" href="" rel="nofollow">
                                            <i class="fab fa-linkedin-in"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="sectionButton text-center pt-35">
                        <a class="btn btn--styleOne btn--primary it-btn" href="volunteers.html">
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
    <!-- Volunteers End -->
</div>
