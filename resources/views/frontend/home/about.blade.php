@include('frontend.home.header')
<!-- //breadcrumbs -->
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="/">Home</a>
        </li>
        <li class="breadcrumb-item active" aria-current="page">About Us</li>
    </ol>
</nav>
<!-- section-2 -->
<div class="section-2 py-md-5 py-3">
    <div class="container">
        @foreach($abouts as $about)
        <div class="title-section text-center pb-5">

            <h4>I smile Dental Clinic
           </h4>

            <h3 class="w3ls-title text-center text-capitalize">{!! $about->description !!}</h3>
        </div>
            @endforeach
    </div>

</div>



@include('frontend.includes.footer')