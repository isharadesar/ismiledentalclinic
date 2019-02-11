@extends('backend.includes.layout')
@section('content')
    <div class="container">
        <div class="row"><h3 class="mx-auto mt-3">Add New Time </h3></div>
        <div class="container">
            <div class="row mx-5 pb-5">
                <div class="col-md-9 mx-auto shadow p-5">

                    <form method="post" action="/time/insert" enctype="multipart/form-data">
                        {{@csrf_field()}}
                        <div class="form-row py-2">
                            <label for="day" class="label">Day</label>
                            <input type="text" class="form-control"  required id="day" name="day" placeholder="Enter day" value="{{old('day')}}">
                        </div>
                        <div class="form-row">
                            <label for="time" class="label">From</label>
                            <input type="time"class="form-control" required name="from" value="{{old('from')}}">
                        </div>

                        <div class="form-row">
                            <label for="time" class="label">To</label>
                            <input type="time"class="form-control" required name="to" value="{{old('to')}}">
                        </div>
                        <div class="form-row py-2">
                            <button class="btn theme-blue-background theme-white-color" type="submit">Add Time</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection