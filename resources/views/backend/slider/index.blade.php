@extends('backend.includes.layout')

@section('content')
    <style>

    </style>
    <div class=" pl-5" >
        <h3>Slider</h3>
        <div>

        {{--<form action="#" method="post" >--}}
        {{--<input type="file" multiple id="gallery-photo-add">--}}
        {{--<input type="file" id="gallery-photo-add" name="files" class="hide" onchange="readURL(this);" />--}}
        {{--<label for="gallery-photo-add" id="lable_file" class="btn-primary btn">Add file(s)</label>--}}
        {{--<div class="gallery">--}}
        {{--</div>--}}
        {{--<input type="submit" class="btn btn-success" id="submit-disabled" disabled >--}}

        {{--</form>--}}



        <!-- Add Trigger modal -->
            <button type="button" class="btn btn-primary my-3" data-toggle="modal" data-target="#mySlide">
                Add Slide
            </button>

            <!-- Add Slider Modal -->
            <div class="modal fade" id="mySlide" tabindex="-1" role="dialog" aria-labelledby="mySlideLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="mySlideLabel">Add a new Slide</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="/slider" method="post" enctype="multipart/form-data">
                                {{@csrf_field()}}
                                <div class="form-row">
                                    <input type="file" id="gallery-photo-add" name="slider_img" class="hide" onchange="readURL(this);" />
                                    <label for="gallery-photo-add" id="lable_file" class="btn-primary btn">Browse Photo</label>
                                </div>
                                <div class="form-row">
                                    <div class="gallery p-3 mb-2"></div>
                                </div>
                                <div class="form-row">
                                    <textarea rows="4" name="description" id="editor" class="form-control" placeholder="Description"></textarea>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-6 pt-2">
                                        <label class="label">Show on FrontPage</label>
                                        <label class="rju-switch">

                                            <input type="checkbox" checked value="1" name="status" >
                                            <span class="rju-yesno-slider round"></span>
                                        </label>
                                    </div>
                                    <div class="col-md-6 pt-3">
                                        <label for="priority">Priority of Slide</label>
                                        <select id="priority" name="priority">
                                            <option value="1">1</option>
                                            <option value="1">1</option>
                                            <option value="1">1</option>
                                            <option value="1">1</option>
                                        </select>

                                    </div>

                                </div>
                                <div class="form-row">
                                    <input type="submit" class="btn btn-success" id="submit-disabled" >
                                </div>



                            </form>
                        </div>
                        {{--<div class="modal-footer">--}}
                        {{--<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>--}}
                        {{--<button type="button" class="btn btn-primary">Save changes</button>--}}
                        {{--</div>--}}
                    </div>
                </div>
            </div>



            {{------------Slider display on table------------}}
            <div class="table-responsive">
                <table class="table">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Image</th>
                        <th>Status</th>
                        <th>Priority</th>
                        <th>Description</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @php
                        $i=1;
                    @endphp
                    @foreach($sliders as $slider)
                        <tr data-toggle="modal" data-target="#exampleModalCenter{{$slider->slider_id}}" >
                            <td>{{$i++}}</td>
                            <td><a href="{{asset('images/sliderImage').'/'.$slider->img_url}}" data-lightbox="sliders"><img src="{{asset('images/sliderImage').'/'.$slider->img_url}}" class="table-thumbnail-img" /></a> </td>
                            <td data-toggle="modal" data-target="#exampleModalCenter{{$slider->slider_id}}" >
                                @if($slider->status == 1)
                                    Active
                                @else
                                    Inactive
                                @endif
                            </td>
                            <td>{{ $slider->priority  }}</td>
                            <td>{!! substr($slider->description,0,100) !!}...</td>
                            <td>
                                <a href="/slider/{{$slider->slider_id}}/edit"><button class="btn btn-success mt-2 "><i class="fa fa-edit"></i></button></a>


                            </td>
                        </tr>

                        {{-------------------------modal for view more-----------------------------}}
                        <div class="modal fade" id="exampleModalCenter{{$slider->slider_id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle{{$slider->slider_id}}" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">

                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="container px-5 ">
                                            <a href="{{asset('images/sliderImage').'/'.$slider->img_url}}" data-lightbox="sliders"><img class="px-3 pb-3" src="{{asset('images/sliderImage').'/'.$slider->img_url}}" style="height: 200px; width: auto;" /></a>
                                            <br/>
                                            {!! $slider->description !!}
                                            <div class="p-3">
                                                Status: @if($slider->status == 1)
                                                    Active
                                                @else
                                                    Inactive
                                                @endif
                                            </div>
                                            <div class="p-3">
                                                priority:{{ $slider->priority  }}

                                            </div>
                                        </div>
                                    </div>
                                    {{--<div class="modal-footer">--}}
                                    {{----}}
                                    {{--</div>--}}
                                </div>
                            </div>
                        </div>
                        {{-------------------------modal for view more-----------------------------}}


                    @endforeach
                    {{--<tr>--}}
                    {{--<td>2</td>--}}
                    {{--<td><img src="{{asset('images/janaki.jpg')}}" style="height: 200px; width: 100px;" /> </td>--}}
                    {{--<td>Active</td>--}}
                    {{--<td>1</td>--}}
                    {{--<td>In dictum nisl non augue hendrerit ultricies. Proin vel libero eget lectus malesuada vehicula a vel lacus.--}}
                    {{--Donec lobortis nisl nec elementum posuere. Aliquam erat volutpat. Quisque nisi odio,--}}
                    {{--gravida eu turpis et, rutrum maximus nulla. Aenean malesuada tortor nibh, et posuere enim pretium sed.--}}
                    {{--Fusce sit amet orci non tellus ullamcorper dictum.--}}
                    {{--</td>--}}
                    {{--<td>--}}
                    {{--<button class="btn btn-success mb-2 "><i class="fa fa-edit"></i>Edit</button>--}}

                    {{--<button class="btn btn-danger"><i class="fa fa-trash-o"></i>Delete</button>--}}
                    {{--</td>--}}
                    {{--</tr>--}}
                    {{--<tr>--}}
                    {{--<td>3</td>--}}
                    {{--<td><img src="{{asset('images/janaki.jpg')}}" style="height: 200px; width: 100px;" /> </td>--}}
                    {{--<td>Active</td>--}}
                    {{--<td>1</td>--}}
                    {{--<td>In dictum nisl non augue hendrerit ultricies. Proin vel libero eget lectus malesuada vehicula a vel lacus.--}}
                    {{--Donec lobortis nisl nec elementum posuere. Aliquam erat volutpat. Quisque nisi odio,--}}
                    {{--gravida eu turpis et, rutrum maximus nulla. Aenean malesuada tortor nibh, et posuere enim pretium sed.--}}
                    {{--Fusce sit amet orci non tellus ullamcorper dictum.--}}
                    {{--</td>--}}
                    {{--<td>--}}
                    {{--<button class="btn btn-success mb-2 "><i class="fa fa-edit"></i>Edit</button>--}}

                    {{--<button class="btn btn-danger"><i class="fa fa-trash-o"></i>Delete</button>--}}
                    {{--</td>--}}
                    {{--</tr>--}}
                    </tbody>

                </table>
                @foreach($sliders as $slider)

                @endforeach
            </div>
            {{--------------------Slider display on table----------------}}
        </div>







    </div>


    {{--<script>--}}
    {{--$("#gallery-photo-add").change(function(){--}}
    {{--$("#lable_file").html($(this).val().split("\\").splice(-1,1)[0] || "Select file");--}}
    {{--});--}}
    {{--</script>--}}
    <script>
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#blah')
                        .attr('src', e.target.result)
                        .width(150)
                        .height(200);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>





@stop()