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
    <link rel="stylesheet" href="{{ asset('styles/custom.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('styles/main_styles.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('styles/responsive.css')}}">
    {{-- Dynamic stylesheets --}}
    @stack('custom-styles')

    <link rel="stylesheet" type="text/css" href="{{ asset('styles/bootstrap4/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('plugins/font-awesome-4.7.0/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{ asset('plugins/OwlCarousel2-2.2.1/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{ asset('plugins/OwlCarousel2-2.2.1/owl.theme.default.css')}}">
    <link rel="stylesheet" href="{{ asset('plugins/OwlCarousel2-2.2.1/animate.css')}}">

</head>
<body>
    <div class="super_container" id="app">
        @include('layouts.nav')
        @include('layouts.modals')
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
    <script>
        $(document).ready(function(){
            $('#appointment-request').click(function() {
                $(this).prop("disabled", true);
                $.ajax({
                    url: '{{url("appointment/create")}}',
                    type: 'post',
                    data: $('#ajax_class_form').serialize(),
                    success: function(response){
                        var response = jQuery.parseJSON(response);
                        console.log(response);
                    }
                })
            })
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
    <script src="{{ asset('js/appointment.js')}}"></script>
    
    

</body>
</html>
