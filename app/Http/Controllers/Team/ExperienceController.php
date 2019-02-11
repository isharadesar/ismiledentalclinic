<?php

namespace App\Http\Controllers\Team;

use App\Model\TeamModel\Experience;
use App\Model\TeamModel\Team;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ExperienceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $experiences = Experience::get();
        return view('backend.team.experiences',compact('experiences'));
    }
    public function addexperience($id)
    {
        $teams =Team::find($id);
        return view('backend.team.addexperience',compact('teams'));
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
        $request->validate([
            'team_id' => 'required',

            'description' => 'required',

            'from' => 'required',
            'to' => 'required',
            'previous_organization' => 'required',

        ]);

        $experiences = new Experience();
        $experiences->team_id =$request->team_id;
        $experiences->description=$request->description;
        $experiences->from=$request->from;
        $experiences->to=$request->to;

        $experiences->previous_organization=$request->previous_organization;





        if ($experiences->save()) {

            $request->session()->flash('success_msg', 'Experience added Successfully');
            return redirect()->back();

        } else {

            $request->session()->flash('error_msg', 'Oops! Error Occured');
            return redirect()->back();

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
        $experience = Experience::find($id);
        return view('backend.team.editexperience',compact('experience'));

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

        $experiences = Experience::find($id);
        $experiences->team_id= $request->team_id;


        $experiences->description = $request->description;
        $experiences->from = $request->from;
        $experiences->to = $request->to;
        $experiences->previous_organization = $request->previous_organization;









        if($experiences->save())
        {
            $request->session()->flash('success_msg', 'Experiences edit Successfully');
            return redirect()->back(
            );
        }else{
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
