

@extends('backend.includes.layout')
@section('content')

    <div class="container ">
        <div class="row"><h3 class="mx-auto mt-3">Edit Service</h3></div>
        <div class="container">
            <div class="row mx-5 pb-5">
                <div class="col-md-9 mx-auto shadow p-5">
                    <form method="post" action="/service/{{$services->service_id}}">
                        {{@csrf_field()}}
                        <div class="form-row">
                            <label>Service Name</label>
                            <input type="text" name="title" class="form-control" value="{{$services->title}}">
                        </div>
                        <div class="form-row">
                            <label>Description</label>
                            <textarea required name="description" id="editor" class="form-control"  value="{{$services->description}}" >
                            </textarea>
                        </div>




                        <div class="form-row">
                            <button class="btn btn-outline-info btn-lg my-2" type="submit">Update Service</button>
                        </div>


                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection