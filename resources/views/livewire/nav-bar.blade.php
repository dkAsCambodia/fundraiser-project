<!-- header -->
<div>
<header class="header header--styleOne header--styleFive sticky-on">
    <div id="sticky-placeholder"></div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="header__wrapper">
                    <!-- logo start -->
                    <div class="header__logo">
                        <a href="/" wire:navigate class="header__logo__link">
                            {{-- <img src="{{ URL::to('website/image/logos/logo_2.svg') }}" alt="Gainioz"
                                class="header__logo__image"> --}}
                            <img
                                src="{{ $logo ? env('ADMIN_URL') . 'storage/' . $logo : URL::to('admin_panel/logo.png') }}"
                                alt="Gainioz"
                                class="header__logo__image" style=" width: 165px; height: 50px; "
                            >
                        </a>
                    </div>
                    <!-- logo end -->
                    <!-- Main Menu Start -->
                    <div class="header__menu header__menu--style2">
                        <nav class="mainMenu">
                            <ul>
                                <li>
                                    <a href="/" wire:navigate>Home</a>
                                </li>
                                <li><a href="/about" wire:navigate>About</a></li>
                                <li><a href="/cause" wire:navigate>Donations</a></li>
                                <li><a href="/volunteer" wire:navigate>Volunteers</a></li>
                                <li><a href="/contact" wire:navigate>Contacts</a></li>
                            </ul>
                        </nav>
                    </div>
                    <!-- Main Menu End -->
                    <!-- Header Right Buttons Search Cart -->

                    {{-- <div class="header__right">

                    </div> --}}

                    <div class="header__right header__right--style2">
                        @auth
                            @livewire('navigation-menu')
                        @else
                            <div class="header__button">
                                <a class="btn btn--styleOne btn--primary it-btn" href="/login" wire:navigate>
                                    <span class="btn__text">Login</span>
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
                            </div>
                        @endauth
                        {{-- <div class="header__actions">
                            <ul>
                                <li>
                                    <a href="products.html">
                                        <span>2</span>
                                        <svg width="25" height="20" viewBox="0 0 25 20" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M24.2344 7H20.9258L14.9102 0.382812C14.6523 0.0820312 14.2227 0.0820312 13.9648 0.339844C13.6641 0.597656 13.6641 1.02734 13.9219 1.28516L19.0781 7H5.62891L10.7852 1.28516C11.043 1.02734 11.043 0.597656 10.7422 0.339844C10.4844 0.0820312 10.0547 0.0820312 9.79688 0.382812L3.78125 7H0.515625C0.214844 7 0 7.25781 0 7.51562V7.85938C0 8.16016 0.214844 8.375 0.515625 8.375H1.20312L2.49219 17.6133C2.62109 18.6445 3.48047 19.375 4.51172 19.375H20.1953C21.2266 19.375 22.0859 18.6445 22.2148 17.6133L23.5039 8.375H24.2344C24.4922 8.375 24.75 8.16016 24.75 7.85938V7.51562C24.75 7.25781 24.4922 7 24.2344 7ZM20.8828 17.4414C20.7969 17.7852 20.5391 18 20.1953 18H4.51172C4.16797 18 3.91016 17.7852 3.82422 17.4414L2.57812 8.375H22.1289L20.8828 17.4414ZM13.0625 10.7812C13.0625 10.4375 12.7188 10.0938 12.375 10.0938C11.9883 10.0938 11.6875 10.4375 11.6875 10.7812V15.5938C11.6875 15.9805 11.9883 16.2812 12.375 16.2812C12.7188 16.2812 13.0625 15.9805 13.0625 15.5938V10.7812ZM17.875 10.7812C17.875 10.4375 17.5312 10.0938 17.1875 10.0938C16.8008 10.0938 16.5 10.4375 16.5 10.7812V15.5938C16.5 15.9805 16.8008 16.2812 17.1875 16.2812C17.5312 16.2812 17.875 15.9805 17.875 15.5938V10.7812ZM8.25 10.7812C8.25 10.4375 7.90625 10.0938 7.5625 10.0938C7.17578 10.0938 6.875 10.4375 6.875 10.7812V15.5938C6.875 15.9805 7.17578 16.2812 7.5625 16.2812C7.90625 16.2812 8.25 15.9805 8.25 15.5938V10.7812Z"
                                                fill="#7FB432" />
                                        </svg>
                                    </a>
                                </li>
                                <li>
                                    <a href="#template-search">
                                        <svg width="23" height="23" viewBox="0 0 23 23" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M21.8281 21.4609L16.2852 15.918C16.1992 15.832 16.0703 15.7891 15.9414 15.7891H15.4688C16.9727 14.1562 17.875 12.0508 17.875 9.6875C17.875 4.78906 13.8359 0.75 8.9375 0.75C3.99609 0.75 0 4.78906 0 9.6875C0 14.6289 3.99609 18.625 8.9375 18.625C11.2578 18.625 13.4062 17.7227 14.9961 16.2617V16.6914C14.9961 16.8633 15.0391 16.9922 15.125 17.0781L20.668 22.6211C20.8828 22.8359 21.1836 22.8359 21.3984 22.6211L21.8281 22.1914C22.043 21.9766 22.043 21.6758 21.8281 21.4609ZM8.9375 17.25C4.72656 17.25 1.375 13.8984 1.375 9.6875C1.375 5.51953 4.72656 2.125 8.9375 2.125C13.1055 2.125 16.5 5.51953 16.5 9.6875C16.5 13.8984 13.1055 17.25 8.9375 17.25Z"
                                                fill="#7FB432" />
                                        </svg>
                                    </a>
                                </li>
                            </ul>
                        </div> --}}
                        <div class="header__button">
                            <a class="btn btn--styleOne btn--secondary it-btn" href="/cause" wire:navigate>
                                <span class="btn__text">donate&nbsp;now</span>
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
                    <!-- Header Right Buttons Search Cart -->
                </div>
            </div>
        </div>
    </div>
</header>
<!-- end header -->
<!-- Mobile Menu Button Start -->
<div class="header header--mobile cc-header-menu mean-container position-relative" id="meanmenu">
    <div class="mean-bar headerBurgerMenu">
        <a href="/" wire:navigate>
            {{-- <img class="mean-bar__logo" alt="Techkit" src="{{ URL::to('website/image/logos/logo_1.svg') }}" /> --}}
            <img class="mean-bar__logo" alt="Techkit" src="{{ $logo ? env('ADMIN_URL') . 'storage/' . $logo : URL::to('admin_panel/logo.png') }}" />
        </a>
        <!-- Header Right Buttons Search Cart -->
        <div class="header__right">
            <div class="header__actions">
                <ul>
                    {{-- <li>
                        <a href="products.html">
                            <svg width="25" height="20" viewBox="0 0 25 20" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M24.2344 7H20.9258L14.9102 0.382812C14.6523 0.0820312 14.2227 0.0820312 13.9648 0.339844C13.6641 0.597656 13.6641 1.02734 13.9219 1.28516L19.0781 7H5.62891L10.7852 1.28516C11.043 1.02734 11.043 0.597656 10.7422 0.339844C10.4844 0.0820312 10.0547 0.0820312 9.79688 0.382812L3.78125 7H0.515625C0.214844 7 0 7.25781 0 7.51562V7.85938C0 8.16016 0.214844 8.375 0.515625 8.375H1.20312L2.49219 17.6133C2.62109 18.6445 3.48047 19.375 4.51172 19.375H20.1953C21.2266 19.375 22.0859 18.6445 22.2148 17.6133L23.5039 8.375H24.2344C24.4922 8.375 24.75 8.16016 24.75 7.85938V7.51562C24.75 7.25781 24.4922 7 24.2344 7ZM20.8828 17.4414C20.7969 17.7852 20.5391 18 20.1953 18H4.51172C4.16797 18 3.91016 17.7852 3.82422 17.4414L2.57812 8.375H22.1289L20.8828 17.4414ZM13.0625 10.7812C13.0625 10.4375 12.7188 10.0938 12.375 10.0938C11.9883 10.0938 11.6875 10.4375 11.6875 10.7812V15.5938C11.6875 15.9805 11.9883 16.2812 12.375 16.2812C12.7188 16.2812 13.0625 15.9805 13.0625 15.5938V10.7812ZM17.875 10.7812C17.875 10.4375 17.5312 10.0938 17.1875 10.0938C16.8008 10.0938 16.5 10.4375 16.5 10.7812V15.5938C16.5 15.9805 16.8008 16.2812 17.1875 16.2812C17.5312 16.2812 17.875 15.9805 17.875 15.5938V10.7812ZM8.25 10.7812C8.25 10.4375 7.90625 10.0938 7.5625 10.0938C7.17578 10.0938 6.875 10.4375 6.875 10.7812V15.5938C6.875 15.9805 7.17578 16.2812 7.5625 16.2812C7.90625 16.2812 8.25 15.9805 8.25 15.5938V10.7812Z"
                                    fill="#7FB432" />
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a href="#template-search">
                            <svg width="23" height="23" viewBox="0 0 23 23" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M21.8281 21.4609L16.2852 15.918C16.1992 15.832 16.0703 15.7891 15.9414 15.7891H15.4688C16.9727 14.1562 17.875 12.0508 17.875 9.6875C17.875 4.78906 13.8359 0.75 8.9375 0.75C3.99609 0.75 0 4.78906 0 9.6875C0 14.6289 3.99609 18.625 8.9375 18.625C11.2578 18.625 13.4062 17.7227 14.9961 16.2617V16.6914C14.9961 16.8633 15.0391 16.9922 15.125 17.0781L20.668 22.6211C20.8828 22.8359 21.1836 22.8359 21.3984 22.6211L21.8281 22.1914C22.043 21.9766 22.043 21.6758 21.8281 21.4609ZM8.9375 17.25C4.72656 17.25 1.375 13.8984 1.375 9.6875C1.375 5.51953 4.72656 2.125 8.9375 2.125C13.1055 2.125 16.5 5.51953 16.5 9.6875C16.5 13.8984 13.1055 17.25 8.9375 17.25Z"
                                    fill="#7FB432" />
                            </svg>
                        </a>
                    </li> --}}
                    <li>
                        @auth
                            @livewire('navigation-menu')
                        @else
                            <a class="btn btn--styleOne btn--primary it-btn" style=" height: 10px; " href="/login"
                                wire:navigate>
                                Login<i class="fa-solid fa-heart btn__icon"></i>
                            </a>
                        @endauth
                    </li>
                    <li>
                        <button class="headerBurgerMenu__button sidebarBtn"
                            onclick="this.classList.toggle('opened');this.setAttribute('aria-expanded', this.classList.contains('opened'))"
                            aria-label="Main Menu">
                            <svg width="50" height="50" viewBox="0 0 100 100">
                                <path class="line line1"
                                    d="M 20,29.000046 H 80.000231 C 80.000231,29.000046 94.498839,28.817352 94.532987,66.711331 94.543142,77.980673 90.966081,81.670246 85.259173,81.668997 79.552261,81.667751 75.000211,74.999942 75.000211,74.999942 L 25.000021,25.000058" />
                                <path class="line line2" d="M 20,50 H 80" />
                                <path class="line line3"
                                    d="M 20,70.999954 H 80.000231 C 80.000231,70.999954 94.498839,71.182648 94.532987,33.288669 94.543142,22.019327 90.966081,18.329754 85.259173,18.331003 79.552261,18.332249 75.000211,25.000058 75.000211,25.000058 L 25.000021,74.999942" />
                            </svg>
                        </button>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- Mobile Menu Button End -->
<!-- Mobile Menu Navbar -->
<div class="cc cc--slideNav">
    <div class="cc__logo mb-40">
        <a href="/" wire:navigate>
            {{-- <img class="mean-bar__logo" alt="Techkit" src="{{ URL::to('website/image/logos/logo_1.svg') }}" /> --}}
            <img class="mean-bar__logo" alt="Techkit" src="{{ $logo ? env('ADMIN_URL') . 'storage/' . $logo : URL::to('admin_panel/logo.png') }}" />
        </a>
    </div>
    <div class="offscreen-navigation mb-40">
        <nav class="menu-main-primary-container">
            <ul class="menu">
                <li class="list menu-item-parent">
                    <a class="animation" href="/" wire:navigate>Home</a>
                </li>
                <li class="list menu-item-parent">
                    <a class="animation" href="/about" wire:navigate>About</a>
                </li>
                <li class="list menu-item-parent">
                    <a class="animation" href="/cause" wire:navigate>Donations</a>
                </li>
                <li class="list menu-item-parent">
                    <a class="animation" href="/volunteer" wire:navigate>Volunteers</a>
                </li>
                <li class="list menu-item-parent">
                    <a class="animation" href="/contact" wire:navigate>Contacts</a>
                </li>
            </ul>
        </nav>
    </div>
    <div class="itSocial itSocial--sidebar mb-40">
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
    <div class="cc__button">
        <div class="header__button">
            <a class="btn btn--styleOne btn--secondary it-btn" href="/cause" wire:navigate>
                <span class="btn__text">donate now</span>
                <i class="fa-solid fa-heart btn__icon"></i>
                {{-- <span class="it-btn__inner">
                    <span class="it-btn__blobs">
                        <span class="it-btn__blob"></span>
                        <span class="it-btn__blob"></span>
                        <span class="it-btn__blob"></span>
                        <span class="it-btn__blob"></span>
                    </span>
                </span> --}}
                {{-- <svg class="it-btn__animation" xmlns="http://www.w3.org/2000/svg" version="1.1">
                    <defs>
                        <filter id="goo">
                            <feGaussianBlur in="SourceGraphic" result="blur" stdDeviation="10">
                            </feGaussianBlur>
                            <feColorMatrix in="blur" mode="matrix"
                                values="1 0 0 0 0 0 1 0 0 0 0 0 1 0 0 0 0 0 21 -7" result="goo">
                            </feColorMatrix>
                            <feBlend in2="goo" in="SourceGraphic" result="mix"></feBlend>
                        </filter>
                    </defs>
                </svg> --}}
            </a>
        </div>
    </div>
</div>
<!-- Mobile Menu Navbar End -->
</div>
