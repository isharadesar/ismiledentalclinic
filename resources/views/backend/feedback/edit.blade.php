

@extends('backend.includes.layout')
@section('content')

    <div class="container ">
        <div class="row"><h3 class="mx-auto mt-3">Edit Feedback</h3></div>
        <div class="container">
            <div class="row mx-5 pb-5">
                <div class="col-md-9 mx-auto shadow p-5">
                    <form method="post" action="/feedback/{{$feedback->feedback_id}}">
                        {{@csrf_field()}}
                        <div class="form-row">
                            <label>Name</label>
                            <input type="text" readonly name="name" class="form-control" value="{{$feedback->name}}">
                        </div>
                        <div class="form-row">
                            <label>Email</label>
                            <input type="email" readonly  name="email" class="form-control" value="{{$feedback->email}}">
                        </div>
                        <div class="form-row">
                            <label>Contact</label>
                            <input type="number" readonly  name="contact" class="form-control" value="{{$feedback->contact}}">
                        </div>
                        <div class="form-row">
                            <label>Message</label>
                            <input type="text"  readonly  name="msg" class="form-control" value="{{$feedback->msg}}">

                        </div>
                        <div class="form-row">
                            <label>Priority</label>
                            <input type="number" name="priority" class="form-control" value="{{$feedback->priority}}">
                        </div>



                        <div class="form-row">
                            <button class="btn btn-outline-info btn-lg my-2" type="submit">Update Feedback</button>
                        </div>


                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection