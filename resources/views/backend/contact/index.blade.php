@extends('backend.includes.layout')
@section('content')
    <div class="container">
        <div class="container">
            <table class="table table-hover">
                <tr>
                    <th>Email</th>
                    <th>Web</th>
                    <th>Contact</th>


                    <th>Action</th>
                </tr>

                @foreach($contacts as $contact)
                    <tr>



                        <td>{{$contact->email}}</td>
                       <td>{{$contact->web}}</td>
                        <td>{{$contact->contact}}</td>

                        <td>








                            <a href="/contact/{{$contact->contact_id}}/edit" class="btn btn-outline-primary my-1"><i class="fa fa-edit"></i>
                            </a>

                        </td>
                    </tr>
                @endforeach

            </table>
        </div>
    </div>
@endsection