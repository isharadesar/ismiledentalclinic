

@extends('backend.includes.layout')
@section('content')

    <div class="container ">
        <div class="row"><h3 class="mx-auto mt-3">Edit Contact</h3></div>
        <div class="container">
            <div class="row mx-5 pb-5">
                <div class="col-md-9 mx-auto shadow p-5">
                    <form method="post" action="/contact/{{$contacts->contact_id}}">
                        {{@csrf_field()}}
                        <div class="form-row">
                            <label>Email</label>
                            <input type="email" name="email" class="form-control" value="{{$contacts->email}}">
                        </div>
                        <div class="form-row">
                            <label>Contact</label>
                            <input type="tel" name="contact" class="form-control" value="{{$contacts->contact}}">
                        </div>
                        <div class="form-row">
                            <label>Web</label>
                            <input type="text" name="web" class="form-control" value="{{$contacts->web}}">
                        </div>



                        <div class="form-row">
                            <button class="btn btn-outline-info btn-lg my-2" type="submit">Update Contact</button>
                        </div>


                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection