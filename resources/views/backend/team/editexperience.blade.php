@extends('backend.includes.layout')
@section('content')

    <div class="container ">
        <div class="row"><h3 class="mx-auto mt-3">Edit Experience</h3></div>
        <div class="container">
            <div class="row mx-5 pb-5">
                <div class="col-md-9 mx-auto shadow p-5">
                    <form method="post" action="/experience/{{$experience->experience_id}}" enctype="multipart/form-data">
                        {{@csrf_field()}}
                        <div class="form-row">
                            <div class="col-md-6">
                                <label>Staff ID</label>
                                <input type="number" name="team_id"  readonly class="form-control" value="{{$experience->team_id}}">
                            </div>
                            <div class="col-md-6">
                                <label>Designation on previous Organization</label>
                                <input type="text" name="description" class="form-control" value="{{$experience->description}}" >
                            </div>
                        </div>

                        <div class="form-row">
                            <label>Previous Organization</label>
                            <input type="text" name="previous_organization"   class="form-control" value="{{$experience->previous_organization}}">
                        </div>
                        <div class="form-row">
                            <div class="col-md-6">
                                <label>Year From </label>
                                <input type="date" name="year_from"   class="form-control" value="{{$experience->from}} ">
                            </div>
                            <div class="col-md-6">
                                <label>Year To</label>
                                <input type="date" name="year_to"   class="form-control" value="{{$experience->to}}">
                            </div>
                        </div>


                        <div class="form-row py-2">
                            <button class="btn btn-outline-info btn-lg" type="submit">Update Staff Experience</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection