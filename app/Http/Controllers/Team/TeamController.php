<?php

namespace App\Http\Controllers\Team;

use App\Model\TeamModel\Team;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teams = Team::get();
        return view('backend.team.index',compact('teams'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.team.create');
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
            'name' => 'required',
            'address' => 'required',
            'designation' => 'required',
            'gender' => 'required',

            'contact' => 'required',


        ]);

        $teams = new Team();
        $teams->name = $request->name;
        $randVal = rand(1111,9999);
        $img = $request->file('staff_img');
        $teams->staff_img= $randVal.time().$img->getClientOriginalName();
        $img->move(public_path().'/images/'.'staffImage',$teams->staff_img);
        $teams->address =$request->address;
        $teams->designation=$request->designation;
        $teams->gender=$request->gender;

        $teams->contact=$request->contact;




        if ($teams->save()) {

            $request->session()->flash('success_msg', 'Staff  Created Successfully');
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
        $teams = Team::find($id);
        return view('backend.team.edit',compact('teams'));
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
        $teams = Team::find($id);
        $teams->name = $request->name;


        $teams->address = $request->address;
        $teams->designation = $request->designation;
        $teams->job_status = $request->job_status;
        $teams->contact = $request->contact;
        $teams->gender = $request->gender;









        if($teams->save())
        {
            $request->session()->flash('success_msg', 'Staff Detail  Edit Successfully');
            return redirect()->action(
                'Team\TeamController@index'
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
        //
    }
}
