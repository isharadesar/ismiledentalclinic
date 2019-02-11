






@include('frontend.home.header')
<div class="content-wrapper">
    <br>
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

    @yield('content')
</div>


@include('frontend.includes.footer')