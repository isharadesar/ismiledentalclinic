@extends('backend.includes.layout')
@section('content')
    <div class="container">
        <div class="row"><h3 class="mx-auto mt-3">Add New Staff</h3></div>
        <div class="container">
            <div class="row mx-5 pb-5">
                <div class="col-md-9 mx-auto shadow p-5">

                    <form method="post" action="/team/insert" enctype="multipart/form-data">
                        {{@csrf_field()}}

                        <div class="form-row py-2">
                            <label for="title" class="label">Staff name</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Enter staff name" value="{{old('name')}}">
                        </div>

                        <div class="form-row py-2">
                            <div class="col-md-6 my-auto">
                                <input type="file" id="gallery-photo-add"  name="staff_img" class="hide" onchange="readURL(this);" />
                                <label for="gallery-photo-add" id="lable_file" class="btn theme-blue-background theme-white-color">Browse Photo</label>
                            </div>
                            <div class="col-md-6">
                                <label for="title" class="label">Address</label>
                                <input type="text" class="form-control" id="address" name="address" placeholder="Enter Address" value="{{old('address')}}">
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="gallery"></div>
                        </div>

                        <div class="form-row py-2">
                            <div class="col-md-6">
                                <label for="title" class="label">Designation</label>
                                <input type="text" class="form-control" id="designation" name="designation" placeholder="Enter Designation" value="{{old('designation')}}">
                            </div>
                            <div class="col-md-6">
                                <label for="gender"  class="label">gender</label>
                                <select  name ="gender" class="form-control">
                                    <option disabled selected>Select</option>
                                    <option value="male" >male</option>
                                    <option value="female" >female</option>

                                </select>
                            </div>
                        </div>



                        {{--<div class="form-row py-2">--}}
                        {{--<label for="title" class="label">job status</label>--}}
                        {{--<input type="text" class="form-control" id="job_status" name="job_status" placeholder="Enter staff name">--}}
                        {{--</div>--}}
                        <div class="form-row py-2">
                            <label for="title" class="label">contact</label>
                            <input type="number" class="form-control" id="contact" name="contact" placeholder="EnterContact Number" value="{{old('contact')}}">
                        </div>
                        {{--<div class="form-row py-2">--}}
                        {{--<label for="title" class="label">type id</label>--}}
                        {{--<input type="text" class="form-control" id="type_id" name="type_id" placeholder="Enter staff name">--}}
                        {{--</div>--}}






                        <div class="form-row py-2">
                            <button class="btn theme-blue-background theme-white-color" type="submit">Add Staff</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    {{--<script>--}}
    {{--CKEDITOR.replace('text-editor');--}}
    {{--</script>--}}
@endsection