<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AdminLTE 2 | Starter</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
{{--<link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">--}}
{{--<link rel="stylesheet" href="{{asset('backend/css/bootstrap.min.css')}}">--}}
<!-- Font Awesome -->
    {{--<link rel="stylesheet" href="{{asset('backend/css/font-awesome.min.css')}}">--}}
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" >
    <!-- Ionicons -->
{{--<link rel="stylesheet" href="{{asset('backend/css/ionicons.min.css')}}">--}}
<!-- Theme style -->
    <link rel="stylesheet" href="{{asset('backend/css/adminlte.min.css')}}">
    <link rel="stylesheet" href="{{asset('backend/css/mystyle-bg.css')}}">
    <link rel="stylesheet" href="{{asset('backend/css/lightbox.min.css')}}">

{{--<link rel="stylesheet" href="{{asset('backend/css/skin-blue.min.css')}}">--}}



<!-- AdminLTE Skins. We have chosen the skin-blue for this starter
          page. However, you can choose any other skin. Make sure you
          apply the skin class to the body tag so the changes take effect. -->
    <!-- <link rel="stylesheet" href="dist/css/skins/skin-blue.min.css"> -->

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand bg-white navbar-light border-bottom">
        <!-- Left navbar links -->
        <ul class="navbar-nav">



                {{--@if(Sentinel::check())--}}


                    {{--<form action="/logout" method="post" id="logout-form" class="my-2">--}}
                        {{--{{csrf_field()}}--}}
                        {{--<a href="#" onclick="document.getElementById('logout-form').submit()">Logout</a>--}}
                    {{--</form>--}}

                {{--@endif--}}






        </ul>

        <!-- SEARCH FORM -->


        <!-- Right navbar links -->
<ul>
            <!-- Notifications Dropdown Menu -->
            <li class="nav-item dropdown">
                <a class="nav-link" data-toggle="dropdown" href="#">
                    <i class="fa fa-user-o"></i>
                </a>

            </li>

        </ul>
    </nav>
    <!-- /.navbar -->