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
            //disable modal alerts
            $(".modal-alert-success").hide();
            $('.modal-alert-danger').hide();

            function notifier(alertType){
                if(alertType === "error"){
                    $(".modal-alert-danger").fadeTo(7000,500).slideUp(500, function(){
                        $(".modal-alert-danger").slideUp(500);
                    });
                }else{
                    $(".modal-alert-success").fadeTo(4000,500).slideUp(500, function(){
                        $(".modal-alert-success").slideUp(500);
                    });
                }
                return true
            }

//--------------------Appointments Actions------------------------------------
            // e.preventDefault();
            $('#appointment-request').click(function() {
                // $(this).prop("disabled", true);
                $.ajax({
                    url: 'appointment/create',
                    type: 'post',
                    data: $('#ajax_class_form').serialize()
                })
                .done(response => {
                    if(response.msg === 'Appointment Sent'){
                        notifier('success');
                    }else{
                        notifier('error');
                    }
                    clearInputs();
                })
                .fail(error => {
                    console.log(error);
                    notifier('error');
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
                    dataType: 'json'
                });
            }
            //delete request function
            function deleteRequest(url){
                return $.ajax({
                    url:url,
                    type: 'delete',
                    data: {_token: "{{ csrf_token() }}"},
                    dataType: 'json'
                });
            }
            //Empting inputs
            function clearInputs(){
                $('#appointment-name').val('');
                $('#appointment-number').val('');
                $('#appointment-date').val('');
                $('#appointment-sms').val('');

                $('#slides-title').val('');
                $('#slides-desc').val('');
                $('#slides-image').val('');

                $('#news-title').val('');
                $('#news-image').val('');
                $('#news-desc').val('');

                $('#staff-name').val('');
                $('#staff-dept').val('');
                $('#staff-image').val('');
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
                })
                .done(response => {
                    if(response.msg === "Slide saved Successfully"){
                        notifier('success');
                        clearInputs();
                        $('#add-slide').html('<i class="fa fa-plus-circle"></i> Add Slide');
                        $('#add-slide').attr('data', 'save');
                        renderSlides();
                    } else {
                        notifier('error');
                    }
                })
                .fail(error => {
                    console.log(error);
                    notifier('error');
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
                        notifier('success');
                        renderSlides();
                    }else{
                        notifier('error');
                    }
                })
                .fail(error => {
                    console.log(error);
                    notifier('error');
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
                }).fail(error => {
                    console.log(error);
                    notifier('error');
                }));
            }
            renderSlides();


//----------------------------News Actions--------------------------------------
            //Clossing Modal
            $(".done").click(function(){
                clearInputs();
            });
            $("#news-submition").submit(function(e){
                e.preventDefault();
                var actionUrl = "create/news";
                var id = $('#add-news').attr('data');
                if (id !== 'save') {
                    actionUrl = `edit/news/${id}`;
                }
                $(this).prop("disable", true);
                $.ajax({
                    url: actionUrl,
                    type: "post",
                    data: new FormData(this),
                    dataType: "json",
                    contentType: false,
                    cache: false,
                    processData: false
                })
                .done(response => {
                    if (response.msg === "News saved Successfully") {
                        notifier('success');
                        clearInputs();
                        $('#add-news').html('<i class="fa fa-plus-circle"></i> Add News');
                        $('#add-news').attr('data', 'save');
                        renderNews();
                    } else {
                        notifier('error');
                    }
                })
                .fail(error => {
                    console.log(error);
                    notifier('error');
                });
            });
            //Editing News
            $(document).on("click", ".edit-news", function(){
                var id = $(this).attr('id-data');
                $('#news-title').val($(this).attr('title-data'));
                $('#news-desc').val($(this).attr('desc-data'));
                $('#add-news').attr('data', id);
                $('#add-news').html('<i class="fa fa-save"></i> Save Changes');
            });
            //Deleting News
            $(document).on("click", ".delete-news", function(){
                var id = $(this).attr('data');
                url = `delete/news/${id}`;
                $.when(deleteRequest(url).done(response => {
                    if(response.msg === "News deleted"){
                        notifier('success');
                        renderNews();
                    }else{
                        notifier('error');
                    }
                }).fail(error => {
                    console.log(error);
                    notifier('error');
                }));
            });
            // Rendering News
            renderNews();
            function renderNews(){
                url = "getNews";
                $.when(getRequest(url).done(news => {
                    $('.news-tbody').html('');
                    $('.news_posts').html('');
                    news.forEach(item => {
                        $('.news-tbody').append(`
                            <tr>
                                <th scope="row">
                                    <img src="storage/news/${item.image}" height="40px" alt="image">
                                </th>
                                <td class="color-light" style="width: 20%;"><p>${item.title}</p></td>
                                <td style="width: 50%;">
                                    <p class="color-light">${item.description}</p>
                                </td>
                                <td style="width: 10%;">
                                    <span>
                                        <i class="btn-icon fa fa-edit edit-news"
                                            style="color:blue"
                                            id-data="${item.id}"
                                            title-data="${item.title}"
                                            desc-data="${item.description}"
                                         ></i> | 
                                        <i style="color: red" data="${item.id}" class="btn-icon fa fa-trash delete-news"></i>
                                    </span>
                                </td>
                            </tr>
                        `);
                        $('.news_posts').append(`
                            <br/>
                            <div class="media main_news">
                                <div>
                                    <img class="mr-3" height="200px" src="storage/news/${item.image}" alt="Generic placeholder image">
                                </div>
                                <div class="media-body">
                                    <h5 class="mt-0 news_header">${item.title}</h5>
                                    <p class="news_body">${item.description}</p>
                                    <div class="comment">
                                        <a href="#" class="comment">Add comment</a>
                                    </div>
                                    <div class="media mt-3">
                                        <a class="pr-3" href="#">
                                            <img height="20px" class="rounded" src="images/news_3.jpg" alt="Generic placeholder image">
                                        </a>
                                        <div class="media-body commented">
                                            <h5 class="mt-0">bryan@bryan.com</h5>
                                            <p>
                                                This is a good archivement of this hospita.
                                                I can't wait to come for it
                                                This is a good archivement of this hospita.
                                                I can't wait to come for it
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <hr/>
                            </div>
                        `)
                    });
                }).fail(error => {
                    console.log(error);
                    notifier('error')
                }));
            }

//----------------------------Staff Actions-----------------------------------
            $("#staff-submition").submit(function(e){
                e.preventDefault();
                var actionUrl = "create/staff";
                var id = $('#add-staff').attr('data');
                if (id !== 'save') {
                    actionUrl = `edit/staff/${id}`;
                }
                $(this).prop("disable", true);
                $.ajax({
                    url: actionUrl,
                    type: "post",
                    data: new FormData(this),
                    contentType:false,
                    cache: false,
                    processData: false
                })
                .done(response => {
                    if(response.msg === "Staff saved Successfully"){
                        notifier('success');
                        clearInputs();
                        $('#add-staff').html('<i class="fa fa-plus-circle"></i> Add Staff Member');
                        $('#add-staff').attr('data', 'save');
                        renderStaff();
                    }else{
                        notifier('error');
                    }
                })
                .fail(error => {
                    console.log(error);
                    notifier('error');
                });
            });
            //Editing Staff
            $(document).on("click", ".edit-staff", function(){
                var id = $(this).attr('id-data');
                $('#staff-name').val($(this).attr('name-data'));
                $('#staff-dept').val($(this).attr('dept-data'));
                $('#add-staff').attr('data', id);
                $('#add-staff').html('<i class="fa fa-save"></i> Save Changes');
            });
            //Deleting Staff
            $(document).on("click", ".delete-staff", function(){
                var id = $(this).attr('data');
                url = `delete/staff/${id}`;
                $.when(deleteRequest(url).done(response => {
                    if(response.msg === "Staff deleted"){
                        notifier('success')
                        renderStaff();
                    } else {
                        notifier('error')
                    }
                }).fail(error => {
                    console.log(error);
                    notifier('error');
                }));
            });
            //Rendering Staff
            renderStaff();
            function renderStaff(){
                url = "getStaff";
                $.when(getRequest(url).done(staff => {
                    $('.staff-tbody').html('');
                    $('.team_row').html('');
                    staff.forEach(item => {
                        $('.staff-tbody').append(`
                            <tr>
                                <th scope="row">
                                    <img src="storage/staff/${item.image}" height="40px" alt="image">
                                </th>
                                <td class="color-light"><p>${item.name}</p></td>
                                <td><p class="color-light">${item.department}</p></td>
                                <td>
                                    <span>
                                        <i class="btn-icon fa fa-edit edit-staff"
                                            id-data="${item.id}"
                                            name-data="${item.name}"
                                            dept-data="${item.department}"
                                            style="color:blue"
                                         ></i> | 
                                        <i style="color: red" data="${item.id}" class="btn-icon fa fa-trash delete-staff"></i>
                                    </span>
                                </td>
                            </tr>
                        `);
                        $('.team_row').append(`
                        <div class="col-lg-3 team_col">
                            <div class="team_member">
                                <div class="d-flex flex-column align-items-center justify-content-end">
                                    <img height="150px" src="storage/staff/${item.image}" alt="">
                                </div>
                                <div class="team_member_info">
                                    <div><a class="dept_title" href="#">${item.name}</a></div>
                                    <div class="dept_subtitle">${item.department}</div>
                                </div>
                            </div>
                        </div>
                        `);
                    });
                }).fail(error => {
                    console.log(error);
                    notifier('error');
                }));
            }
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
