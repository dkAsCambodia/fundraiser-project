<div>
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
                        <h2 class="pageTitle__heading text-white text-uppercase mb-25">Contact us</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Contact</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Page Breadcumb End -->
    <!-- Contact -->
    <div class="contact contact--layout1">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-40">
                    <div class="contactBlock text-center">
                        <figure class="contactBlock__figure">
                            <img class="contactBlock__figure__thumb" src="{{ URL::to('website/image/update/flag1.png') }}" alt="Gainioz Contact">
                        </figure>
                        <div class="contactBlock__content">
                            <h2 class="contactBlock__heading text-uppercase">united states</h2>
                            <p class="contactBlock__text">2972 Westheimer Rd. Santa Ana, Illinois 85486</p>
                            <a class="contactBlock__email connect" href="#">info@yourdomain.com</a>
                            <a class="contactBlock__phone connect" href="#">+1266 - 568 - 8894</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-40">
                    <div class="contactBlock text-center">
                        <figure class="contactBlock__figure">
                            <img class="contactBlock__figure__thumb" src="{{ URL::to('website/image/update/flag2.png') }}" alt="Gainioz Contact">
                        </figure>
                        <div class="contactBlock__content">
                            <h2 class="contactBlock__heading text-uppercase">Belgium</h2>
                            <p class="contactBlock__text">2972 Westheimer Rd. Santa Ana, Illinois 85486</p>
                            <a class="contactBlock__email connect" href="#">info@yourdomain.com</a>
                            <a class="contactBlock__phone connect" href="#">+1266 - 568 - 8894</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-40">
                    <div class="contactBlock text-center">
                        <figure class="contactBlock__figure">
                            <img class="contactBlock__figure__thumb" src="{{ URL::to('website/image/update/flag3.png') }}" alt="Gainioz Contact">
                        </figure>
                        <div class="contactBlock__content">
                            <h2 class="contactBlock__heading text-uppercase">United Kingdom</h2>
                            <p class="contactBlock__text">2972 Westheimer Rd. Santa Ana, Illinois 85486</p>
                            <a class="contactBlock__email connect" href="#">info@yourdomain.com</a>
                            <a class="contactBlock__phone connect" href="#">+1266 - 568 - 8894</a>
                        </div>
                    </div>
                </div>
            </div>
            <form id="contact-form" action="#"
                class="it-contact-form commentsPost commentsPost--style2 pt-45 pb-25">
                <div class="row g-4">
                    <div class="col-md-6">
                        <div class="commentsPost__input">
                            <input name="name" type="text" placeholder="Enter your name*">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="commentsPost__input">
                            <input name="email" type="text" placeholder="Enter your email*">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="commentsPost__input">
                            <input name="phone" type="text" placeholder="Enter your  number*">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="commentsPost__input">
                            <input name="subject" type="text" placeholder="Subject*">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="commentsPost__input">
                            <textarea name="message" placeholder="Enter your Massage*"></textarea>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="commentsPost__check">
                            <div class="form-group form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Save my name, email, and website
                                    in this
                                    browser for the next time I comment.</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="commentsPost__button text-center">
                            <button type="submit" class="btn btn--styleOne btn--primary it-btn">
                                <span class="btn__text">Send massage</span>
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
                            </button>
                        </div>
                    </div>
                </div>
                <div class="form-response"></div>
            </form>
        </div>
    </div>
    <!-- Contact End -->
    <div id="myMap">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d14599.594381298903!2d90.42194549999999!3d23.822204699999997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1644251033908!5m2!1sen!2sbd"
            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>
</div>
