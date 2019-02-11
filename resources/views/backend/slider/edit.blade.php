@extends('backend.includes.layout')

@section('content')

    <div class=" pl-5 pb-5 " >
        <h3>Edit Slider</h3>
        <div>
            <form action="/slider/{{$slider->slider_id}}" method="post" enctype="multipart/form-data">
                {{@csrf_field()}}
                <input type="hidden"name="_method" value="PUT">
                <div class="form-row">
                    {{--<input type="hidden" value="{{$slider->img_url}}" name="old_slider_img">--}}
                    <input type="file" id="gallery-photo-add" name="slider_img" class="hide" onchange="readURL(this);" />
                    <label for="gallery-photo-add" id="lable_file" class="btn-primary btn">Browse Photo</label>
                </div>
                <div class="form-row">
                    <div class="gallery p-3 mb-2">

                    </div>
                </div>
                <div class="form-row">
                    Old Image:
                    <img src="{{asset('images/sliderImage').'/'.$slider->img_url }}" style="height: 200px;width: auto;">
                </div>
                <div class="form-row">
                    <textarea rows="4" name="description" class="form-control" placeholder="Description">{{$slider->description}}</textarea>
                </div>
                <div class="form-row">
                    <div class="col-md-6 pt-2">
                        <label class="label">Show on FrontPage</label>
                        <label class="rju-switch">

                            <input type="checkbox"
                                   @if($slider->status == 1)
                                   checked
                                   @endif
                                   name="status" value="1">
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
    </div>

@endsection()