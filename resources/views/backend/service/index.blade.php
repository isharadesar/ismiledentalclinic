@extends('backend.includes.layout')
@section('content')
    <div class="container">
        <div class="container">
            <table class="table table-hover">
                <tr>
                    <th>S.N</th>
                    <th>Service Title</th>
                    <th>Service Description</th>

                    <th>Action</th>
                </tr>
                @php $i=1; @endphp
                @foreach($services as $service)
                    <tr>
                        <td>{{$i++}}</td>

                        <td>{{$service->title}}</td>
                        <td>{!!  $service->description!!}</td>


                        <td>








                            <a href="/service/{{$service->service_id}}/edit" class="btn btn-outline-primary my-1"><i class="fa fa-edit"></i>
                            </a>
                            <button type="button" class="btn btn-outline-danger" data-toggle="modal" data-target="#del{{$service->service_id}}">
                                Delete
                            </button>

                            <div class="modal fade" id="del{{$service->service_id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-sm" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Delete Confirmation?</h5>

                                        </div>
                                        <form method="post" action="/service-delete/{{$service->service_id}}">
                                            {{@csrf_field()}}
                                            <div class="modal-body">
                                                Are you sure you want to Delete this data?
                                            </div>
                                            <div class="modal-footer">
                                                <button type="submit" class="btn btn-primary">Confirm</button>
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>



                        </td>
                    </tr>
                @endforeach

            </table>
        </div>
    </div>
@endsection