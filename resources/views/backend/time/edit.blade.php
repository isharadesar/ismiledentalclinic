

@extends('backend.includes.layout')
@section('content')

    <div class="container ">
        <div class="row"><h3 class="mx-auto mt-3">Edit Service Time</h3></div>
        <div class="container">
            <div class="row mx-5 pb-5">
                <div class="col-md-9 mx-auto shadow p-5">
                    <form method="post" action="/time/{{$times->time_id}}">
                        {{@csrf_field()}}
                        <div class="form-row">
                            <label>Day</label>
                            <input type="text" name="day" class="form-control" value="{{$times->day}}">
                        </div>
                        <div class="form-row">
                            <label>From</label>
                            <input type="date" required name="from"  class="form-control"  value="{{$times->from}}" >

                        </div>
                        <div class="form-row">
                            <label>To</label>
                            <input type="date" required name="to"  class="form-control"  value="{{$times->to}}" >

                        </div>




                        <div class="form-row">
                            <button class="btn btn-outline-info btn-lg my-2" type="submit">Update Time</button>
                        </div>


                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection