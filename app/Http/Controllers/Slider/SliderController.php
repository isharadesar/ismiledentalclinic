<?php

namespace App\Http\Controllers\Slider;

use App\Model\SliderModel\Slider;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sliders = Slider::orderBy('slider_id','asc')->get();
        return view('backend.slider.index',compact('sliders'));
    }

    public function frontend()
    {
        $sliders= Slider::orderBy('slider_id','asc')->get();

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $slider = new Slider();
        $slider->description = $request->description;

        $slider->status = $request->status;

        if($request->status== null){
            $slider->status = 0;
        }

        $slider->priority = $request->priority;
        $randVal = rand(1111,9999);
        $img = $request->file('slider_img');
        $slider->img_url = $randVal.time().$img->getClientOriginalName();

        $img->move(public_path().'/images/'.'sliderImage',$slider->img_url);

        if($slider->save()){
            $request->session()->flash('success_msg', 'Added Successfully.');

        }
        else{
            $request->session()->flash('error_msg', 'Oops!! Error Occured');
        }

        return redirect()->back();




    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $slider= Slider::find($id);
        return view ('backend.slider.edit', compact('slider'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $slider = Slider::find($id);
        $slider->description = $request->description;



        if($request->status== null){
            $slider->status = 0;
        }else{
            $slider->status = $request->status;
        }

        $slider->priority = $request->priority;

        if(!empty($request->slider_img))
        {
            $randVal = rand(1111,9999);
            $img = $request->file('slider_img');
            $slider->img_url = $randVal.time().$img->getClientOriginalName();
            $img->move(public_path().'/images/'.'sliderImage',$slider->img_url);
        }

        if($slider->save()){
            $request->session()->flash('success_msg', 'Updated Successfully.');

        }
        else{
            $request->session()->flash('error_msg', 'Oops!! Error Occured');
        }
        return redirect()->action('Slider\SliderController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
