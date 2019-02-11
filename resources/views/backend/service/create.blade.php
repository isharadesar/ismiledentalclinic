@extends('backend.includes.layout')
@section('content')
    <div class="container">
        <div class="row"><h3 class="mx-auto mt-3">Add New Service</h3></div>
        <div class="container">
            <div class="row mx-5 pb-5">
                <div class="col-md-9 mx-auto shadow p-5">

                    <form method="post" action="/service/insert" enctype="multipart/form-data">
                        {{@csrf_field()}}
                        <div class="form-row py-2">
                            <label for="title" class="label">Service Name</label>
                            <input type="text" class="form-control" id="title" name="title" placeholder="Enter service title" value="{{old('title')}}">
                        </div>
                        <div class="form-row">
                            <label>Description</label>
                            <textarea required name="description" id="editor" class="form-control" placeholder="Add  service description" value="{{old('description')}}" >
                            </textarea>
                        </div>

                        <div class="form-row py-2">
                            <button class="btn theme-blue-background theme-white-color" type="submit">Add Service</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection