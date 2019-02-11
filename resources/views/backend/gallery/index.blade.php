@extends('backend.includes.layout')
@section('content')
    <div class="container">
        <div class="container">
            <table class="table table-hover">
                <tr>
                    <th>S.N</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Image</th>

                    <th>Action</th>
                </tr>
                @php $i=1; @endphp
                @foreach($galleries as $gallery)
                    <tr>
                        <td>{{$i++}}</td>
                        <td>{{$gallery->title}}</td>
                        <td>{!! $gallery->description!!}</td>
                        <td><img src="{{asset('images/galleryImage').'/'.$gallery->image}}" style="height: 150px; width:auto"> </td>



                        <td>

                            <a href="/gallery/{{$gallery->gallery_id}}/edit" class="btn btn-outline-primary my-1"><i class="fa fa-edit"></i>
                            </a>



                            <button type="button" class="btn btn-outline-danger" data-toggle="modal" data-target="#del{{$gallery->gallery_id}}">
                                Delete
                            </button>

                            <div class="modal fade" id="del{{$gallery->gallery_id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-sm" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Delete Confirmation?</h5>
                                            {{--<button type="button" class="close" data-dismiss="modal" aria-label="Close">--}}
                                            {{--<span aria-hidden="true">&times;</span>--}}
                                            {{--</button>--}}
                                        </div>
                                        <form method="post" action="/delete-gallery/{{$gallery->gallery_id}}">
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