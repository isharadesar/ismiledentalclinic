@extends('backend.includes.layout')
@section('content')
    <div class="container">
        <div class="container">
            <table class="table table-hover">
                <tr>
                    <th>S.N</th>
                    <th>Patient  Name</th>

                    <th>Contact</th>
                    <th>Appointment Date</th>
                    <th>Appointment time</th>
                    <th>Service</th>

                </tr>
                @php $i=1; @endphp
                @foreach($appointments as $appointment)
                    <tr>
                        <td>{{$i++}}</td>

                        <td>{{$appointment->patientname}}</td>

                        <td>{{$appointment->contact}}</td>
                        <td>{{$appointment->app_date}}</td>
                        <td>{{$appointment->app_time}}</td>
                        <td>{{$appointment->service}}</td>
                        <td>













                        </td>
                    </tr>
                @endforeach

            </table>
        </div>
    </div>
@endsection