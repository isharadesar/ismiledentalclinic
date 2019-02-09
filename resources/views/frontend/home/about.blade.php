<!--Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>I smile dental clinic | About :: </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8" />

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
<div class="inner-banner" id="home">
    <!-- header -->
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-gradient-secondary pt-3">

            <h1>
                <a class="navbar-brand text-white" href="index.html">
                    i smile dental
                    <span>clinic</span>
                </a>
            </h1>
            <button class="navbar-toggler ml-md-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-lg-auto text-center">
                    <li class="nav-item  mr-3">
                        <a class="nav-link text-white" href="index.html">Home
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item  mr-3 active">
                        <a class="nav-link text-white text-capitalize" href="/about">about</a>
                    </li>
                    <li class="nav-item  mr-3">
                        <a class="nav-link text-white text-capitalize" href="services.html">services</a>
                    </li>
                    <li class="nav-item dropdown mr-3">
                        <a class="nav-link dropdown-toggle  text-white text-capitalize" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false">
                            Dropdown
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="gallery.html">Gallery</a>
                            <a class="dropdown-item" href="team.html">Team</a>
                            <div class="dropdown-divider"></div>

                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link  text-white text-capitalize" href="contact.html">contact</a>
                    </li>
                </ul>
            </div>

        </nav>
    </header>
    <!-- //header -->
    <!-- //container -->
</div>
<!-- breadcrumbs -->
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="index.html">Home</a>
        </li>
        <li class="breadcrumb-item active" aria-current="page">About Us</li>
    </ol>
</nav>
<!-- //breadcrumbs -->
<!-- section-2 -->
<div class="section-2 py-md-5 py-3">
    <div class="container">
        @foreach($abouts as $about)
        <div class="title-section text-center pb-5">

            <h4>I smile Dental Clinic</h4>

            <h3 class="w3ls-title text-center text-capitalize">{!! $about->description !!}</h3>
        </div>
            @endforeach
    </div>

</div>



@include('frontend.includes.footer')