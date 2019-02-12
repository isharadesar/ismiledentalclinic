@extends('backend.includes.layout')

@section('content')

    <div class=" pl-5 pb-5 " >
        <h3>Edit Gallery</h3>
        <div>
            <form action="/gallery/{{$galleries->gallery_id}}" method="post" enctype="multipart/form-data">
                {{@csrf_field()}}

                {{--<input type="hidden"name="_method" value="PUT">--}}



                <div class="form-row">
                    <textarea rows="4" required name="description" id="editor" class="form-control" placeholder="Description">{{$galleries->description}}</textarea>
                </div>

                <div class="form-row py-2">
                    <label for="title" class="label"> Name</label>
                    <input type="text" class="form-control" id="title" name="title" placeholder="Enter service title" value="{{$galleries->title}}">
                </div>



                <div class="form-row">
                    <button class="btn btn-outline-info btn-lg my-2" type="submit">Update Gallery</button>
                </div>



            </form>
        </div>
    </div>

@endsection()