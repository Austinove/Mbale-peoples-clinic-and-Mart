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

        $(document).ready(function(e){

//--------------------Appointments Actions------------------------------------
            // e.preventDefault();
            $('#appointment-request').click(function() {
                $(this).prop("disabled", true);
                $.ajax({
                    url: 'appointment/create',
                    type: 'post',
                    data: $('#ajax_class_form').serialize(),
                    success: function(response){
                        console.log(response);
                    }
                });
            });

//-----------------------------------Slides Actions----------------------------------
            $('#applySlides').click(function(){
                location.reload(true);
            });
            //get request function
            function getRequest(url){
                return $.ajax({
                    url:url,
                    type: "get",
                    dataType: 'json',
                    success: (res) => {
                        return res;
                        console.log(res);
                    }
                });
            }
            //delete request function
            function deleteRequest(url){
                return $.ajax({
                    url:url,
                    type: 'delete',
                    data: {_token: "{{ csrf_token() }}"},
                    dataType: 'json',
                    sucess: (res) => {
                        return res;
                        console.log(res);
                    }
                });
            }
            //Empting inputs
            function emputyInputs(){
                $('#slides-title').val('');
                $('#slides-desc').val('');
                $('#slides-image').val('');
            }
            //slides creation and editing
            $('#slides-submition').submit(function(e){
                e.preventDefault();
                var actionUrl = "create/slide";
                var id = $('#add-slide').attr('data');
                if (id !== 'save') {
                    actionUrl = `edit/slide/${id}`;
                }
                $(this).prop("disable", true);
                $.ajax({
                    url: actionUrl,
                    type: "post",
                    data: new FormData(this),
                    dataType: 'json',
                    contentType: false,
                    cache: false,
                    processData: false,
                    success: function(response){
                        console.log(response);
                        if(response.msg === "Slide saved Successfully"){
                            emputyInputs();
                            $('#add-slide').html('<i class="fa fa-plus-circle"></i> Add Slide');
                            $('#add-slide').attr('data', 'save');
                            renderSlides();
                        }
                    }
                    
                });
            });
            //Editing Slide
            $(document).on("click", ".edit-slide", function(){
                var id = $(this).attr('id-data');
                $('#slides-title').val($(this).attr('title-data'));
                $('#slides-desc').val($(this).attr('desc-data'));
                $('#add-slide').attr('data', id);
                $('#add-slide').html('<i class="fa fa-save"></i> Save Changes');
            });
            //Deleting Slide
            $(document).on("click", ".delete-slide", function(){
                var id = $(this).attr('data');
                url = `delete/slide/${id}`;
                $.when(deleteRequest(url).done(response => {
                    if(response.msg === "Slide deleted"){
                        renderSlides();
                    }
                }));
            });
            //Rendering Slides;
            function renderSlides() {
                url = "getSlides";
                $.when(getRequest(url).done(slides => {
                    $('.slides-tbody').html('');
                    slides.forEach(slide => {
                        $('.slides-tbody').append(`
                            <tr>
                                <th scope="row">
                                    <img src="storage/slides/${slide.image}" height="40px" alt="image">
                                </th>
                                <td class="color-light" style="width: 20%;"><p>${slide.title}</p></td>
                                <td style="width: 50%;">
                                    <p class="color-light">${slide.description}</p>
                                </td>
                                <td style="width: 10%;">
                                    <span>
                                        <i class="btn-icon fa fa-edit edit-slide"
                                            id-data="${slide.id}"
                                            title-data="${slide.title}" 
                                            desc-data="${slide.description}"
                                            style="color:blue"
                                        ></i> | 
                                        <i style="color: red" data="${slide.id}" class="btn-icon fa fa-trash delete-slide"></i>
                                    </span>
                                </td>
                            </tr>
                        `);
                    });
                }));
            }
            renderSlides();


            //news submitions
            $("#news-submition").submit(function(e){
                e.preventDefault();
                $.ajax({
                    url: "create/news",
                    type: "post",
                    data: new FormData(this),
                    dataType: "json",
                    contentType: false,
                    cache: false,
                    processData: false,
                    success: function(response){
                        console.log(response);
                    }
                });
            });

            //staff submitions
            $("#staff-submition").submit(function(e){
                e.preventDefault();
                $.ajax({
                    url: "create/staff",
                    type: "post",
                    data: new FormData(this),
                    contentType:false,
                    cache: false,
                    processData: false,
                    success: function(response){
                        console.log(response);
                    }
                })
            })
        });
    </script>
    {{-- <script scr="{{ asset('js/formSubmitions.js')}}"></script> --}}
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
    <script src="{{ asset('js/formSubmitions.js')}}"></script>
    
    

</body>
</html>
