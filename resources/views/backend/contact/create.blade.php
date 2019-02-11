@extends('backend.includes.layout')
@section('content')
    <div class="container">
        <div class="row"><h3 class="mx-auto mt-3">Add New Service</h3></div>
        <div class="container">
            <div class="row mx-5 pb-5">
                <div class="col-md-9 mx-auto shadow p-5">

                    <form method="post" action="/contact/insert" enctype="multipart/form-data">
                        {{@csrf_field()}}
                        <div class="form-row py-2">
                            <label for="email" class="label">Email</label>
                            <input type="email" class="form-control" required id="email" name="email" placeholder="Enter email" value="{{old('email')}}">
                        </div>
                        <div class="form-row py-2">
                            <label for="phone" class="label">Phone</label>
                            <input type="tel" class="form-control" id="phone" required name="contact" placeholder="phone" value="{{old('phone')}}">
                        </div>
                        <div class="form-row py-2">
                            <label for="web" class="label">Web</label>
                            <input type="text" class="form-control" id="web" name="web" required placeholder="Enter web" value="{{old('web')}}">
                        </div>
                        <div class="form-row py-2">
                            <button class="btn theme-blue-background theme-white-color" type="submit">Add contact</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection