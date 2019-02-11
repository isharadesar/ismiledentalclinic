@extends('backend.includes.layout')

@section('content')

    <div class="pl-5" >
        <div class="row"><h3 class="mx-auto mt-3">Add About Us</h3></div>
        <div class="container">
            <div class="row mx-5 pb-5">
                <div class="col-md-9 mx-auto shadow p-5">
                    <form action="/about/insert" method="post" enctype="multipart/form-data">
                        {{@csrf_field()}}


                        <div class="col-md-12 pl-0">
                            <label for="description" class="label">Description</label>
                            <textarea id="editor" name="description" class="form-control"></textarea>


                            <div class="form-row py-2">
                                <button class="btn theme-blue-background theme-white-color" type="submit">Add About</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        </div>



@endsection()