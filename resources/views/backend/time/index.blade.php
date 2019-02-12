@extends('backend.includes.layout')
@section('content')
    <div class="container">
        <div class="container">
            <table class="table table-hover">
                <tr>
                    <th>S.N</th>
                    <th>Day</th>
                    <th>Time</th>

                    <th>Action</th>
                </tr>
                @php $i=1; @endphp
                @foreach($times as $time)
                    <tr>
                        <td>{{$i++}}</td>

                        <td>{{$time->day}}</td>
                        <td>{{$time->from}}-{{$time->to}}</td>



                        <td>








                            <a href="/time/{{$time->time_id}}/edit" class="btn btn-outline-primary my-1"><i class="fa fa-edit"></i>
                            </a>



                        </td>
                    </tr>
                @endforeach

            </table>
        </div>
    </div>
@endsection