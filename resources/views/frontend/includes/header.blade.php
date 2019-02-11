<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>i.smile dental clinic</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8" />

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- Custom Theme files -->
    <link href="{{asset('css/bootstrap.css')}}" type="text/css" rel="stylesheet" media="all">
    <link href="{{asset('css/style.css')}}" type="text/css" rel="stylesheet" media="all">
    <!-- font-awesome icons -->
    <link href="{{asset('css/fontawesome-all.min.css')}}" rel="stylesheet">
    <!-- //Custom Theme files -->
    <!-- online-fonts -->
    <link href="//fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet">
</head>

<body>
<!-- banner -->
<div class="banner" id="home">
    <!-- header -->
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-gradient-secondary pt-3">

            <h1>
                <a class="navbar-brand text-white" href="">
                    <img src="{{asset('images/logo.jpg')}}" style="height:25%; width:25%;border-radius: 50%;">



                </a>
            </h1>
            <button class="navbar-toggler ml-md-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-lg-auto text-center">
                    <li class="nav-item  mr-3 active">
                        <a class="nav-link text-white active" href="\">Home
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item  mr-3">
                        <a class="nav-link text-white text-capitalize" href="\abouts">about</a>
                    </li>
                    <li class="nav-item  mr-3 ">
                        <a class="nav-link text-white text-capitalize" href="\services">services</a>
                    </li>


                    <li class="nav-item">
                        <a class="nav-link  text-white text-capitalize" href="\contacts">contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link  text-white text-capitalize" href="\gallerys">Gallery</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link  text-white text-capitalize" href="\teams">Team</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link  text-white text-capitalize" href="\contacts">Contact</a>
                    </li>
                </ul>
            </div>

        </nav>
    </header>
    <!-- //header -->
    <div class="container">
        @foreach($sliders as $slider)

<style>
    .banner {
        background: url("{{asset('images/sliderImage').'/'.$slider->img_url}}") bottom no-repeat;

        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        -ms-background-size: cover;
        background-size: cover;
        position: relative;

    }
</style>

        <div class="banner-text">
            <div class="callbacks_container">
                <ul class="rslides" id="slider3">
                    <li>
                        <div class="slider-info">
                            <span class="">Providing total oral care solution Your smile is important to us</span>
                            <h3>Your smile is important to us</h3>
                            <a class="btn btn-primary mt-3" href="\teams" role="button"><i class="fas fa-calendar mr-3" style="color: white"></i>MAKE APPOINTMENT</a>
                        </div>
                    </li>


                </ul>
            </div>
        </div>
            @endforeach
    </div>
    <!-- //container -->
</div>
<!-- //banner -->
<!-- section-2 -->
<div class="section-2">
    <div class="container-fluid">
        @php
            $services = App\Model\ServiceModel\Service::paginate(7);
        @endphp
        <div class="row slide">
            <div class="col-lg-4 triple-sec">
                <h5 class="text-dark">Our Services</h5>
                <ul class="list-group mt-3">
                    @foreach($services as $service)

                    <li class="list-group-item border-0">
                        <i class="fas fa-tooth mr-3" style="color: white"></i>{{$service->title}}</li>

                </ul>
                @endforeach
            </div>
            <div class="col-lg-4  triple-sec">
                @php
                    $times = App\Model\TimeModel\Time::paginate(3);
                @endphp
                <h5>opening hours</h5>
                <ul class="list-unstyled">
                    @foreach($times as $time)
                    <li class="clearfix py-3">
                        <span class="float-left">{{$time->day}} </span>

                        <div class="value float-right"> {{$time->from}} - {{$time->to}}</div>
                    </li>


                </ul>
                @endforeach
            </div>
            <div class="col-lg-4 triple-sec">
                @php
                    $abouts = App\Model\AboutModel\About::paginate(1);
                @endphp

@foreach($abouts as $about)
                <h5 class="text-black">About us</h5>
                <p class="pt-4">{!! $about->description!!}</p>
            </div>
            @endforeach
        </div>
    </div>
</div>
<!-- //section-2 -->
<!-- about -->
<div class="agileits-about py-md-5 py-5" id="services">
    <div class="container py-lg-5">


        <div class="title-section text-center pb-md-5">
            <h4>I Smile Dental Clinic</h4>
            <h3 class="w3ls-title text-center text-capitalize">Clinic that you can trust</h3>
        </div>
        @php
            $services = App\Model\ServiceModel\Service::paginate(6);
        @endphp
        <div class="agileits-about-row row  text-center pt-md-0 pt-5">
            @foreach($services as $service)
            <div class="col-lg-4 col-sm-6 agileits-about-grids">

                <div class="p-md-5 p-sm-3">
                    <i class="fas fa-tooth"></i>
                    <h4 class="&#xf0f0;">{{$service->title}}</h4>
                    <p>{!! $service->description !!}.</p>
                </div>

        </div>
            @endforeach

        </div>
    </div>
</div>

    </div>
    <section class="blog_w3ls py-lg-5">
        <div class="container">
            @php
            $teams = App\Model\TeamModel\Team::paginate(3);
            @endphp
            <div class="title-section text-center pb-lg-5">
                <h4>world of medicine</h4>
                <h3 class="w3ls-title text-center text-capitalize">Our Team</h3>
            </div>

            <div class="row py-5">
                <!-- blog grid -->
                @foreach($teams  as $team)
                <div class="col-lg-4 col-md-6">
                    <div class="card border-0 med-blog">
                        <div class="card-header p-0">
                            <a href="">
                                <img class="card-img-bottom" src="{{asset('images/staffImage').'/'.$team->staff_img}}" style="height: 400px;" >

                            </a>
                        </div>
                        <div class="card-body border-0 px-0">
                            <div class="blog_w3icon">
                                <span>
                                    Dr.  {{$team->name}}</span>
                            </div>
                            <div class="pt-2">
                                <h5 class="blog-title card-title font-weight-bold">
                                    <a href="single.html">{{$team->designation}}</a>
                                </h5>
                            </div>

                        </div>
                    </div>
                </div>
                @endforeach
            </div>

        </div>

    </section>
    <!-- //blog -->
    <p><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3532.845522334678!2d85.33161151440146!3d27.691168982798597!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb195fde211ad5%3A0x11a8970c9d050e45!2sismile+dental+clinic!5e0!3m2!1sen!2snp!4v1546321686908" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe></p>
    <!-- testimonials -->




    <div class="testimonials section" id="testimonials">
        <div class="container-fluid p-0">
            <div class="wthree_testimonials_grid_main title-section text-center pb-lg-5">
                <h4>world of medicine</h4>
                <h3 class="w3ls-title text-center text-capitalize">patient's words..</h3>
                <ul id="flexiselDemo1" class="pt-lg-0 pt-5">
                    <li>
                        <div class="wthree_testimonials_grid_main">
                            <div class="row">
                                <div class="col-lg-6 wthree_testimonials_grid">
                                    <p>
                                        Very friendly and hygienic clinic. Doctors are very friendly. Clinic is clean and plus decorated with nice painting. I suggest other to visit this clinic.

                                    </p>
                                    <div class="wthree_testimonials_grid_pos">
                                        <div class="row">
                                            <div class="col-3 grid-test-w3l">
                                                <img src="{{asset('images/te1.jpg')}}" alt=" " class="img-fluid" />
                                            </div>
                                            <div class="col-9 wthree_testimonials_grid1">
                                                <h5>Aabesh Adhikari</h5>
                                                <p></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6  wthree_testimonials_grid mt-lg-0 mt-5">
                                    <p>
                                        Doctor was good while treating with the patient. The hospitality was very nice and cozy.

                                    </p>

                                </div>
                            </div>
                        </div>
                    </li>


                </ul>
            </div>
        </div>
    </div>
</div>