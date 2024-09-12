<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="" />
    <meta name="author" content="" />
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <title>{{ $title ?? 'Welcome' }} - {{ config('app.name') }}</title>
    {{-- <link rel="icon" href="{{ URL::to('website/image/favicon.png') }}" type="image/png"> --}}
    <link rel="icon" href="{{ URL::to('admin_panel/favicon.png') }}" type="image/png">
    <link rel="stylesheet" href="{{ URL::to('website/assets/animation/animate.min.css') }}">
    <link rel="stylesheet" href="{{ URL::to('website/assets/animation/custom-animation.css') }}">
    <link rel="stylesheet" href="{{ URL::to('website/assets/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ URL::to('website/assets/swiper/swiper.min.css') }}">
    <link rel="stylesheet" href="{{ URL::to('website/assets/fontawesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ URL::to('website/assets/nice-select/nice-select.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>

    <link
        href="https://fonts.googleapis.com/css2?family=Barlow:wght@400;500;600;700&amp;family=Oswald:wght@400;500;600;700&amp;display=swap"
        rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="{{ URL::to('website/css/main.css') }}">
    <!-- Toster CSS START Livewire-->
    <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">
    <!-- Toster CSS END Livewire-->
    <style>
        /* Chrome, Safari, Edge, Opera */
        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }
        /* Firefox */
        input[type=number] {
            -moz-appearance: textfield;
        }
        .min-h-screen.flex.flex-col.sm\:justify-center.items-center.pt-6.sm\:pt-0.bg-gray-100 {
            justify-content: unset !important;
            padding-top: 40px;
        }
        .min-h-screen {
            min-height: 68vh;
        }
        .text-danger{
            color: red !important;
        }
    </style>
    <script>
  document.cookie = "latestCurr=USD";
        </script>

    <!-- Google Tag Manager -->
    <script>
        (function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-5TMLLVZR');
    </script>
    <!-- End Google Tag Manager -->

    <!-- Meta Pixel Code -->
    <script>
    !function(f,b,e,v,n,t,s)
    {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
    n.callMethod.apply(n,arguments):n.queue.push(arguments)};
    if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
    n.queue=[];t=b.createElement(e);t.async=!0;
    t.src=v;s=b.getElementsByTagName(e)[0];
    s.parentNode.insertBefore(t,s)}(window, document,'script',
    'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '1357400728980736');
    fbq('track', 'PageView');
    </script>
    <noscript>
        <img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=1357400728980736&ev=PageView&noscript=1"/>
    </noscript>
    <!-- End Meta Pixel Code -->

</head>

<body class="home">
    <!-- Google Tag Manager (noscript) -->
    <noscript>
        <iframe src=“https://www.googletagmanager.com/ns.html?id=GTM-5TMLLVZR” height=“0" width=“0” style=“display:none;visibility:hidden”></iframe>
    </noscript>
   <!-- End Google Tag Manager (noscript) -->
    <!-- Preloader -->
    {{-- <div id="preloader">
        <div class="ctn-preloader" id="ctn-preloader">
            <div class="round_spinner">
                <div class="spinner"></div>
                <div class="text">
                    <img src="{{ URL::to('website/image/logos/logo_1.svg') }}" alt="Gainioz">
                </div>
            </div>
            <h2 class="head">DO GOOD FOR OTHERS</h2>
            <p></p>
        </div>
    </div> --}}
    <!-- Preloader End -->
    <x-livewire-alert::scripts />
    <main class="main main--wrapper4">
        {{-- @dd($logo); --}}
        {{-- <x-navbar /> --}}
        <livewire:nav-bar :logo="$logo??''"/>
        {{ $slot }}
    </main>
    <x-footer />

    <script src="https://js.stripe.com/v3/"></script>

    <!-- Donation Modal START  -->
         <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js'></script>
        <script src="{{ URL::to('website/js/custom.js') }}"></script>
    <!-- Donation Modal END  -->
    <!-- Toster JS START For Livewire-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
        <script>
            document.addEventListener("livewire:init", () => {
                Livewire.on("toast", (event) => {
                    toastr[event.notify](event.message);
                });
            });
        </script>
     <!-- Toster JS END For Livewire-->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="{{ URL::to('website/assets/jquery/jquery.min.js') }}"></script>
    <script src="{{ URL::to('website/assets/bootstrap/js/bootstrap.bundle.js') }}"></script>
    <script src="{{ URL::to('website/assets/swiper/swiper.min.js') }}"></script>
    <script src="{{ URL::to('website/assets/nice-select/jquery.nice-select.min.js') }}"></script>
    <script src="{{ URL::to('website/assets/validator.min.js') }}"></script>
    <script src="{{ URL::to('website/assets/animation/wow.min.js') }}"></script>
    <script src="{{ URL::to('website/js/app.js') }}"></script>

    <script>
        setTimeout(function() {
            $('#alert').hide();
        }, 8000);
    </script>
    @livewireScripts
    {{-- toastr js START for LARAVEL controller--}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>
    <script>
        $(document).ready(function() {
            toastr.options.timeOut = 10000;
            @if (Session::has('error'))
                toastr.error('{{ Session::get('error') }}');
            @elseif(Session::has('success'))
                toastr.success('{{ Session::get('success') }}');
            @elseif(Session::has('warning'))
                toastr.warning('{{ Session::get('warning') }}');
            @endif
        });
    </script>
{{-- toastr js END for LARAVEL controller--}}

</body>

</html>
