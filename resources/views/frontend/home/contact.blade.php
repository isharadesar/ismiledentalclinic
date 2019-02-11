
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
        <li class="breadcrumb-item active" aria-current="page">Contact</li>
    </ol>
</nav>

<!-- //breadcrumbs -->
<!-- //banner -->
<!-- contact -->
<section class="wthree-row pt-3 pb-lg-5 w3-contact">
    <div class="container py-sm-5 pt-0 pb-5">
        <div class="title-section text-center pb-lg-5">
            <h4>24/7</h4>
            <h3 class="w3ls-title text-center text-capitalize">affordable medicare</h3>
        </div>
        <div class="row contact-form pt-lg-5">
            <!-- contact details -->
            <div class="col-lg-4 contact-bottom mt-lg-0 mt-5">
                <div class="contact-details-top">
                    <h5 class="sub-title-wthree">contact us</h5>
                    <img src="{{asset('images/logo.jpg')}}" alt="team-image" class="img-fluid  mb-3" />
                    <p>I Smile Dental Clinic.
                        <br>
                        Providing total oral care solution<br> Your smile is important to us</p>
                </div>
                <div class="address">
                    <h5 class="sub-title-wthree">contact info</h5>
                    @foreach($contacts as $contact)
                    <div class="row wthree-cicon">
                        <span class="fas fa-envelope-open mr-3"></span>
                        <a href="mailto:info@example.com">{{$contact->email}} </a>
                    </div>
                    <div class="row wthree-cicon">
                        <span class="fas fa-phone-volume mr-3"></span>
                        <h6>{{$contact->contact}}</h6>
                    </div>
                    <div class="row wthree-cicon">
                        <span class="fas fa-globe mr-3"></span>
                        <a href="#">{{$contact->web}}</a>
                    </div>
                        @endforeach
                </div>
                <div class="footerv2-w3ls">
                    <h5 class="sub-title-wthree">follow us</h5>
                    <ul class="social-iconsv2 agileinfo">
                        <li>
                            <a href="https://www.facebook.com/ISmile-Dental-Clinic-779777535700645/">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                        </li>


                        <li>
                            <a href="https://www.instagram.com/i.smiledental/">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- //contact details -->

            <div class="col-lg-8 wthree-form-left px-lg-5 mt-lg-0 mt-5">
                <!-- contact form grid -->
                <div class="contact-top1">
                    <h5 class="sub-title-wthree">contact form</h5>
                    <form  action="/feedback/insert" method="post" enctype="multipart/form-data">
                        {{@csrf_field()}}
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <label for="contact-name">Name
                                    <span>*</span>
                                </label>
                                <input type="text" name="name" class="form-control"  required>
                            </div>
                            <div class="col-md-6 form-group">
                                <label for="contact-email">Email
                                    <span>*</span>
                                </label>
                                <input type="email" name="email" class="form-control"  required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="contact-subject">Contact no
                                <span>*</span>
                            </label>
                            <input type="number"  name="contact" class="form-control"  required>
                        </div>
                        <div class="form-group">
                            <label for="contact-message">
                                Your Message
                                <span>*</span>
                            </label>
                            <textarea class="form-control" name="msg" rows="5"  required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block w-25">Send</button>
                    </form>
                </div>
                <!--  //contact form grid ends here -->
            </div>
        </div>
        <!-- //contact details container -->
    </div>
    <!-- contact map grid -->
    <div class="map contact-right p-sm-5 p-3 pb-lg-5">
        <div class="title-section text-center pb-5">
            <h4>world of medicine</h4>
            <h3 class="w3ls-title text-center text-capitalize">Get directions</h3>
        </div>

        <p><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3532.845522334678!2d85.33161151440146!3d27.691168982798597!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb195fde211ad5%3A0x11a8970c9d050e45!2sismile+dental+clinic!5e0!3m2!1sen!2snp!4v1546321686908" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe></p>
    </div>
    <!--//contact map grid ends here-->
</section>


@include('frontend.includes.footer')