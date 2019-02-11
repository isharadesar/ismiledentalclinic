@extends('backend.includes.layout')
@section('content')
    <div class="container">
        <div class="container">
            <table class="table table-hover">
                <tr>

                    <th>About us</th>

                    <th>Action</th>
                </tr>
                {{--@php $i=1; @endphp--}}
                @foreach($abouts as $about)
                    <tr>

                        <td>{!!$about->description!!}</td>
                        <td>
                            <a href="/about/{{$about->about_id}}/edit" class="btn btn-outline-primary"><i class="fa fa-edit"></i></a>

                            <button type="button" class="btn btn-outline-danger" data-toggle="modal" data-target="#del{{$about->about_id}}">
                                Delete
                            </button>
                            <div class="modal fade" id="del{{$about->about_id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-sm" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Delete Confirmation?</h5>

                                        </div>
                                        <form method="post" action="/delete-about/{{$about->about_id}}">
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