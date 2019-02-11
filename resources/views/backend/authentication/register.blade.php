@extends('backend.includes.layout1')
@section('content')
    <style>
        .input-group-text{
            background-color: transparent;
        }
    </style>


    <div class="container-fluid">

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif


        <div class="container col-md-6 col-md-offset-3 my-5">
            <div class="row">
                <div class="container text-center pb-3">
                    <h5>Register Form</h5>
                </div>
            </div>
            <div class="shadow">
                <div class="p-3">
                    <form method="post" action="/register">
                        {{csrf_field()}}
                        <div class="form-group">
                            <div class="form-row mt-2">
                                <label for="name" class="label">Name</label>
                                <div class="input-group flex-nowrap">
                                    <input type="text" id="name" required name="name" class="form-control border-right-0" placeholder="Your Name">
                                    <div class="input-group-append">
                                        <span class="input-group-text"><i class="fa fa-user-circle"></i></span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row mt-2">
                                <label for="email" class="label">Email</label>
                                <div class="input-group flex-nowrap">
                                    <input type="email" id="email" required name="email" class="form-control border-right-0" placeholder="Your Email Address">
                                    <div class="input-group-append">
                                        <span class="input-group-text"><i class="fa fa-envelope"></i></span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row mt-2">
                                <label for="password" class="label">Password</label>
                                <div class="input-group flex-nowrap">
                                    <input type="password" id="password" required name="password" class="form-control border-right-0" placeholder="Password">
                                    <div class="input-group-append">
                                        <span class="input-group-text"><i class="fa fa-key"></i></span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row mt-2">
                                <label for="re-password" class="label">Confirm Password</label>
                                <div class="input-group flex-nowrap">
                                    <input type="password" id="re-password" required name="password_confirmation" class="form-control border-right-0" placeholder="Re-type Password">
                                    <div class="input-group-append">
                                        <span class="input-group-text"><i class="fa fa-key"></i></span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row mt-2">
                                <button type="submit" class="btn theme-blue-background theme-white-color" >Register</button>
                            </div>
                        </div>
                    </form>
                    <div class="row pl-3">Already a member? Login from &nbsp; <a href="/login" class="theme-black-color"> here</a></div>
                </div>
            </div>
        </div>
    </div>

@endsection