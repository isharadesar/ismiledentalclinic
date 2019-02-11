
<footer class="footer py-md-5 pt-md-3 pb-sm-5">

    <div class="container-fluid py-lg-5 mt-sm-5">
        <div class="row p-sm-4 px-3 py-5">
            <div class="col-lg-4 col-md-6 footer-top mt-lg-0 mt-md-5">
                <h2>
                    <a href="\" class="text-theme text-uppercase">
                        I smile dental clinic
                    </a>
                </h2>
                <p class="mt-2" style="color: green">Ismile Dental Clinic is not an ordinary dental clinic. The doctors possess level of caring, knowledge,kindness and professionalism that is second to none.
                    <br>
                    These qualities showcase all the way through their staff to the comfortable healthy environment.

            </div>
            <div class="col-lg-2  col-md-6 mt-lg-0 mt-5">
                <div class=".footerv2-w3ls">
                    <h3 class="mb-3 w3f_title">Navigation</h3>
                    <hr>
                    <ul class="list-agileits" style="color: green">
                        <li >
                            <a href="/" style="color: green">
                                Home
                            </a>
                        </li>
                        <li class="my-2" style="color: green">
                            <a href="\abouts" style="color: green">
                                About Us
                            </a>
                        </li>
                        <li class="my-2" style="color: green">
                            <a href="\teams" style="color: green">
                            Our team

                        </li>
                        <li class="mb-2">
                            <a href="/services" style="color: green">
                                Services
                            </a>
                        </li>
                        <li>
                            <a href="/contacts" style="color: green">
                                Contact Us
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mt-lg-0 mt-5">
                <div class="footerv2-w3ls">
                    <h3 class="mb-3 w3f_title">Contact Us</h3>
                    <hr>
                    <div class="fv3-contact">
                        <span class="fas fa-envelope-open mr-2" style="color: green"></span>
                        <p>
                            <a href="mailto:example@email.com" style="color: green">
                                ismiledentalclinic18@gmail.com</a>
                        </p>
                    </div>
                    <div class="fv3-contact my-2">
                        <span class="fas fa-phone-volume mr-2" style="color: green"></span>
                        <p style="color: green">01-5244908</p>
                    </div>
                    <div class="fv3-contact">
                        <span class="fas fa-home mr-2" style="color: green"></span>
                        <p style="color: green">Thapagaun,
                            <br>Kathmandu</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mt-lg-0 mt-5">
                <div class="footerv2-w3ls">
                    <h3 class="mb-3 w3f_title">Links</h3>
                    <hr>
                    <ul class="list-agileits">
                        <li>
                            <a href="/" style="color: green">
                                Overview
                            </a>
                        </li>
                        <li class="my-2">
                            <a href="/services" style="color: green">
                                Centres of Excellence
                            </a>
                        </li>
                        <li class="my-2">
                            <a href="/teams" style="color: green">
                                Blog
                            </a>
                        </li>
                        <li class="mb-2">
                            <a href="\contacts" style="color: green">
                                Find us
                            </a>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- //footer bottom -->
</footer>
<!-- //footer -->
<!-- quick contact -->
<form  action="/feedback/insert" method="post" enctype="multipart/form-data">
    {{@csrf_field()}}
    <div class="container">
        <div class="outer-col">
            <div class="heading">Feedback</div>
            <div class="form-col">
                <form action="" method="post">
                    <input type="text" class="form-control" placeholder="Enter Your Name" name="name" required="">
                    <input type="email" class="form-control" placeholder="Enter Your Emailaddress" name="email"  required="">
                    <input type="number" class="form-control" placeholder="Enter Your Contactno" name="contact" required="">
                    <textarea placeholder="Your Message" class="form-control" name="msg"></textarea>
                    {{--<input type="submit"  class="btn_apt" >--}}
                    <button class="btn_apt" type="submit">Add  Feedback</button>

                </form>
            </div>
        </div>
    </div>
</form>
<!-- //quick contact -->

<!-- //copyright -->
<!-- js -->
<script src="{{asset('js/jquery-2.2.3.min.js')}}"></script>
<!-- //js -->
<!-- Banner Responsiveslides -->
<script src="{{asset('js/responsiveslides.min.js')}}"></script>
<script>
    // You can also use "$(window).load(function() {"
    $(function () {
        // Slideshow 4
        $("#slider3").responsiveSlides({
            auto: false,
            pager: true,
            nav: false,
            speed: 500,
            namespace: "callbacks",
            before: function () {
                $('.events').append("<li>before event fired.</li>");
            },
            after: function () {
                $('.events').append("<li>after event fired.</li>");
            }
        });

    });
</script>
<!-- //banner responsive slides -->
<!-- Flexslider-js for-testimonials -->
<script src="{{asset('js/jquery.flexisel.js')}}"></script>
<script>
    $(window).load(function () {
        $("#flexiselDemo1").flexisel({
            visibleItems: 1,
            animationSpeed: 1000,
            autoPlay: false,
            autoPlaySpeed: 3000,
            pauseOnHover: true,
            enableResponsiveBreakpoints: true,
            responsiveBreakpoints: {
                portrait: {
                    changePoint: 480,
                    visibleItems: 1
                },
                landscape: {
                    changePoint: 640,
                    visibleItems: 1
                },
                tablet: {
                    changePoint: 768,
                    visibleItems: 1
                }
            }
        });

    });
</script>
<!-- //Flexslider-js for-testimonials -->
<!-- //fixed quick contact -->
<script>
    $(function () {
        var hidden = true;
        $(".heading").click(function () {
            if (hidden) {
                $(this).parent('.outer-col').animate({
                    bottom: "0"
                }, 1200);
            } else {
                $(this).parent('.outer-col').animate({
                    bottom: "-305px"
                }, 1200);
            }
            hidden = !hidden;
        });
    });
</script>
<!-- //fixed quick contact -->
<!-- start-smooth-scrolling -->
<script src="{{asset('js/easing.js')}}"></script>
<script>
    jQuery(document).ready(function ($) {
        $(".scroll").click(function (event) {
            event.preventDefault();

            $('html,body').animate({
                scrollTop: $(this.hash).offset().top
            }, 1000);
        });
    });
</script>
<script src="{{asset('js/SmoothScroll.min.js')}}"></script>
<!-- //end-smooth-scrolling -->
<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="{{asset('js/bootstrap.js')}}"></script>
</body>

</html>