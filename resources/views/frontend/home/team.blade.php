@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@if (session()->has('success_msg'))
    <div class="alert alert-success">
        {{ Session::get('success_msg') }}
    </div>
@endif

@if (session()->has('error_msg'))
    <div class="alert alert-danger">
        {{ Session::get('error_msg') }}
    </div>
@endif








@include('frontend.home.header')
<!-- //breadcrumbs -->
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="/">Home</a>
        </li>
        <li class="breadcrumb-item active" aria-current="page">Our Team</li>
    </ol>
</nav>
<section class="team-agile py-lg-5">
    <div class="container py-sm-5 pt-5 pb-0">
        <div class="title-section text-center pb-lg-5">
            <h4>world of medicine</h4>
            <h3 class="w3ls-title text-center text-capitalize">the medical staff</h3>
        </div>
        @foreach($teams as $team)
        <div class="row mt-5 pb-lg-5">
            <div class="col-md-4 border p-0 my-auto">

                <img src="{{asset('images/staffImage').'/'.$team->staff_img}}" class="img-fluid">
            </div>
            <div class="col-md-8 team-text mt-md-0 mt-5">
                <h4>Dr  {{$team->name}}</h4>
                <small>From {{$team->address}}</small>
                <p class="my-3">{{$team->designation}}.</p>

                <a href="#" class="btn_apt" data-toggle="modal" data-target="#exampleModalLabel2">make an appointment </a>
            </div>
            @endforeach
        </div>
    </div>
    </div>
</section>
<div class="modal fade" id="exampleModalLabel2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel2" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3>Fill details below to make an appointment</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="wthree-info">

                    <div class="login">
                        <form  action="/appointment/insert" method="post" enctype="multipart/form-data">
                            {{@csrf_field()}}
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Patient name</label>
                                <input type="text"  required class="form-control" placeholder="Enter your full name " name="patientname" id="recipient-name" required="">
                            </div>
                            <div class="form-group">
                                <label for="recipient-phone" class="col-form-label">Phone</label>
                                <input type="number"  required class="form-control" placeholder="Enter your contact number " name="contact" id="recipient-phone" required="">
                            </div>
                            <div class="form-group">
                                <label for="datepicker" class="col-form-label">Choose Date of Appointment</label>
                                <input class="date form-control" required id="datepicker" name="app_date" type="date" value="" required="" />
                            </div>
                            @php
                                $times = App\Model\TimeModel\Time::get();
                            @endphp
                            <div class="form-group">
                                <label>Select Time</label>
                                <select class="form-control" required name="app_time" >
                                    @foreach($times as $time)
                                        <option value="{{$time->from}}-{{$time->to}}"> {{$time->from}}-{{$time->to}}</option>
                                    @endforeach
                                </select>
                            </div>
                            @php
                                $services = App\Model\ServiceModel\Service::get();
                            @endphp
                            <div class="form-group">
                                <label>Select Service</label>
                                <select class="form-control"  name="service"  required>
                                    @foreach($services as $service)
                                        <option value="{{$service->title}}"> {{$service->title}}</option>
                                    @endforeach
                                </select>
                            </div>






                            <input type="submit" value="Request Appointment" class="btn_apt">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



@include('frontend.includes.footer')