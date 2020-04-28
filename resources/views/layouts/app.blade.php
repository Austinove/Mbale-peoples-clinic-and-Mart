<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Mbale Peoples Clinic and Martenate Home">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Mbale Peoples Clinic and Martenate Home</title>
    <link rel="icon" type="image/gif/png" href="{{asset('first-aid-kit.png')}}">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="{{ asset('styles/bootstrap4/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('plugins/font-awesome-4.7.0/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{ asset('plugins/OwlCarousel2-2.2.1/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{ asset('plugins/OwlCarousel2-2.2.1/owl.theme.default.css')}}">
    <link rel="stylesheet" href="{{ asset('plugins/OwlCarousel2-2.2.1/animate.css')}}">

    {{-- Dynamic stylesheets --}}
    @stack('custom-styles')

</head>
<body>
    <div class="super_container" id="app">
        {{-- <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    Mbale peoples clinic
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav> --}}
        @include('layouts.nav')
        @yield('content')
        @include('layouts.footer')
    </div>
    <script src="{{ asset('js/jquery-3.2.1.min.js')}}"></script>
    <script src="{{ asset('styles/bootstrap4/popper.js')}}"></script>
    <script src="{{ asset('styles/bootstrap4/bootstrap.min.js')}}"></script>

    <script>
        $(document).ready(function(){
            var owl = $(".owl-carousel");
            owl.owlCarousel({
                items: 1,
                autoplay: true,
                loop:true,
                autoPlaySpeed: 1000,
                autoPlayTimeout: 1000,
                autoplayHoverPause: true
            });
        });
    </script>

    <script src="{{ asset('plugins/greensock/TweenMax.min.js')}}"></script>
    <script src="{{ asset('plugins/greensock/TimelineMax.min.js')}}"></script>
    <script src="{{ asset('plugins/scrollmagic/ScrollMagic.min.js')}}"></script>
    <script src="{{ asset('plugins/greensock/animation.gsap.min.js')}}"></script>
    <script src="{{ asset('plugins/greensock/ScrollToPlugin.min.js')}}"></script>
    <script src="{{ asset('plugins/progressbar/progressbar.min.js')}}"></script>
    <script src="{{ asset('plugins/OwlCarousel2-2.2.1/owl.carousel.js')}}"></script>
    <script src="{{ asset('plugins/easing/easing.js')}}"></script>
    <script src="{{ asset('plugins/parallax-js-master/parallax.min.js')}}"></script>
    <script src="{{ asset('js/about.js')}}"></script>
    <script src="{{ asset('js/custom.js')}}"></script>
    
    

</body>
</html>
