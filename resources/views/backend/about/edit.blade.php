@extends('backend.includes.layout')
@section('content')

    <div class="container ">
        <div class="row"><h3 class="mx-auto mt-3">Edit Aboutus</h3></div>
        <div class="container">
            <div class="row m-5">
                <div class="col-md-8 mx-auto shadow p-5">
                    <form method="post" action="/about/{{$abouts->about_id}}">

                        {{@csrf_field()}}
                        <div class="col-md-12">
                            <label for="description" class="label">Description</label>
                            <textarea id="editor" name="description" class="form-control" rows="100" cols="80" >{{$abouts->description}}</textarea>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-outline-info btn-lg" type="submit">Update Aboutus</button>
                        </div>
                    </form>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection