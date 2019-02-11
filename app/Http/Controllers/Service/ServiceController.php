<?php

namespace App\Http\Controllers\Service;

use App\Model\ServiceModel\Service;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {$services = Service::get();
        return view('backend.service.index',compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.service.create');
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
            'title' => 'required',


            'description' => 'required',


        ]);

        $services = new Service();
        $services->title = $request->title;


        $services->description=$request->description;




        if ($services->save()) {

            $request->session()->flash('success_msg', 'Services  Created Successfully');
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
        $services = Service::find($id);
        return view('backend.service.edit',compact('services'));
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
        $services = Service::find($id);
        $services->title = $request->title;


        $services->description = $request->description;




        if($services->save())
        {
            $request->session()->flash('success_msg', 'Service   Edit Successfully');
            return redirect()->action(
                'Service\ServiceController@index'
            );
        }else{
            $request->session()->flash('error_msg', 'Oops!!');
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
        $services = Service::find($id);

        if($services->delete())
        {
            session()->flash('success_msg','Service Deleted Successfully ');
            return redirect()->back();
        }else{
            session()->flash('error_msg','Oops! Error Occured..');
            return redirect()->back();
        }
    }

}
