@extends('backend.includes.layout')
@section('content')
    <style>
        #single-staff .card{
            box-shadow: none!important;
        }
    </style>
    <div class="container pl-2 pb-5">
        <div class="row" id="single-staff">

            <div class="col-md-4" >
                <div class="card text-center bg-transparent border-0">
                    @foreach($teams as $row)
                        <div class="card-img-top border-0">
                            <img src="{{asset('images/staffImage').'/'.$row->staff_img}}" style="height: 150px; width:auto"  class="table-thumbnail-img">

                        </div>
                        <div class="card-body">

                            <table class="table table-borderless">
                                <tr>
                                    <td>Name</td>
                                    <td>{{$row->name}}</td>
                                </tr>
                                <tr>
                                    <td>Designation</td>
                                    <td>{{$row->designation}}</td>
                                </tr>
                                <tr>
                                    <td>Gender</td>
                                    <td>{{$row->gender}}</td>
                                </tr>
                                <tr>
                                    <td>Address</td>
                                    <td>{{$row->address}}</td>
                                </tr>
                                <tr>
                                    <td>Contact No.</td>
                                    <td>{{$row->contact}}</td>
                                </tr>
                            </table>

                            <a href="/team/{{$row->team_id}}/edit" class="btn btn-outline-secondary">Edit
                            </a>
                        </div>
                    @endforeach
                </div>

            </div>
            <div class="col-md-4">
                <div class="card text-center bg-transparent border-0">

                    <a href="/team/{{$row->team_id}}/addeducation" class="btn btn-outline-secondary">
                        Add Education</a>
                    @foreach($education as $row)
                        <table class="table  table-borderless" >
                            <thead>

                            <th colspan="2">Education <a href="/team/{{$row->education_id}}/editeducation">
                                    <i class="fa fa-edit"></i></a> </th>

                            </thead>
                            <tbody>
                            <tr>
                                <td>Description</td>
                                <td>{{$row->description}}</td>
                            </tr>
                            <tr>
                                <td>Organization</td>
                                <td>{{$row->organization}}</td>
                            </tr>
                            <tr>
                                <td>Completed year</td>
                                <td>{{$row->complete_year}}</td>
                            </tr>
                            </tbody>

                        </table>
                    @endforeach
                </div>
            </div>
            <div class="col-md-4">
                <div class="card text-center bg-transparent border-0">


                    <a href="/team/{{$row->team_id}}/addexperience" class="btn btn-outline-secondary">
                        Add Experiences</i> </a>
                    @foreach($experience as $row)
                        <table class="table  table-borderless" >
                            <thead>
                            <th colspan="2">Experience <a href="/team/{{$row->experience_id}}
                                        /editexperience"><i class="fa fa-edit"></i></a></th>

                            </thead>
                            <tbody>
                            <tr>
                                <td>Designation</td>
                                <td>{{$row->description}}</td>
                            </tr>
                            <tr>
                                <td>Organization</td>
                                <td>{{$row->previous_organization}}</td>
                            </tr>
                            <tr>
                                <td>Started year</td>
                                <td>{{$row->from}}</td>
                            </tr>
                            <tr>
                                <td>Completed year</td>
                                <td>{{$row->to}}</td>
                            </tr>
                            </tbody>

                        </table>
                    @endforeach
                </div>

            </div>
        </div>
    </div>

@endsection()