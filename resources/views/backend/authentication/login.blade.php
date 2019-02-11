@extends('backend.includes.layout1')
@section('content')
    <style>
        .input-group-text{
            background-color: transparent;
        }
    </style>


    <div class="container-fluid">
        <div class="container col-md-6 col-md-offset-3 mt-5 my-5">
            <div class="row">
                <div class="container text-center pb-3">
                    <h5>Login Form</h5>
                </div>
            </div>
            <div class="shadow">
                <div class="p-3">
                    <form method="post" action="/login">
                        {{csrf_field()}}
                        <div class="form-group">
                            <div class="form-row mt-2">
                                <label for="email" class="label">Email</label>
                                <div class="input-group flex-nowrap">
                                    <input type="email" id="email" name="email" required  class="form-control border-right-0" placeholder="Your Email Address">
                                    <div class="input-group-append">
                                        <span class="input-group-text"><i class="fa fa-envelope"></i></span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row mt-2">
                                <label for="password" class="label">Password</label>
                                <div class="input-group flex-nowrap">
                                    <input type="password" id="password"  required name="password" class="form-control border-right-0" placeholder="Password">
                                    <div class="input-group-append">
                                        <span class="input-group-text"><i class="fa fa-key"></i></span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row mt-2">
                                <button type="submit" class="btn theme-blue-background theme-white-color" >Login</button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>

@endsection