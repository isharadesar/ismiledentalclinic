<?php

namespace App\Http\Controllers\Gallery;

use App\Model\GalleryModel\Gallery;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $galleries = Gallery::get();
        return view('backend.gallery.index',compact('galleries'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.gallery.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([

            'image' => 'required',
            'title' => 'required',
            'description' => 'required',


        ]);

        $galleries = new Gallery();
        $randVal = rand(1111,9999);
        $img = $request->file('image');
        $galleries->image= $randVal.time().$img->getClientOriginalName();
        $img->move(public_path().'/images/'.'galleryImage',$galleries->image);
        $galleries->title = $request->title;
        $galleries->description = $request->description;





        if ($galleries->save()) {

            $request->session()->flash('success_msg', 'Gallery  Created Successfully');
            return redirect()->back();
        } else {

            $request->session()->flash('error_msg', 'Oops! Error Occured');
            return redirect()->back();

        }
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
        $galleries =Gallery::find($id);
        return view('backend.gallery.edit',compact('galleries'));
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
        $request->validate([


            'title' => 'required',
            'description' => 'required',


        ]);
        $galleries = new Gallery();

        $galleries->title = $request->title;
        $galleries->description = $request->description;





        if ($galleries->save()) {

            $request->session()->flash('success_msg', 'Gallery Edit Successfully');
            return redirect()->action(
                'Gallery\GalleryController@index');
        } else {

            $request->session()->flash('error_msg', 'Oops! Error Occured');
            return redirect()->back();

        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $galleries = Gallery::find($id);

        if($galleries->delete())
        {
            session()->flash('success_msg','Gallery Deleted Successfully ');
            return redirect()->back();
        }else{
            session()->flash('error_msg','Oops! Error Occured..');
            return redirect()->back();
        }

    }
}
