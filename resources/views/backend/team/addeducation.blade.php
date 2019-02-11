

@extends('backend.includes.layout')
@section('content')

    <div class="container ">
        <div class="row"><h3 class="mx-auto mt-3">Add Education</h3></div>
        <div class="container">
            <div class="row mx-5 pb-5">
                <div class="col-md-9 mx-auto shadow p-5">

                    <form method="post" action="/education/in" enctype="multipart/form-data">
                        {{@csrf_field()}}
                        <div class="form-row">
                            <label>Staff id</label>
                            <input type="number" name="team_id"  readonly class="form-control" value="{{$teams->team_id}}">
                        </div>
                        <div class="form-row">
                            <label>Description</label>
                            <input type="text" name="description"  class="form-control" placeholder="Add description" value="{{old('description')}}" >
                        </div>
                        <div class="form-row">
                            <label>Major Subject</label>
                            <input type="text" name="major_subject"   class="form-control" value="{{old('description')}} " placeholder="Add major subject">
                        </div>
                        <div class="form-row">
                            <label>Organization </label>
                            <input type="text" name="organization"   class="form-control" value="{{old('organization')}} " placeholder="Add organization name">
                        </div>
                        <div class="form-row">
                            <label>Completed year</label>
                            <input type="date" name="complete_year"   class="form-control" value="{{old('complete_year')}} " placeholder="Select completed year">
                        </div>

                        <div class="form-row">
                            <button class="btn btn-outline-info btn-lg my-2" type="submit">Add Staff Education</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection