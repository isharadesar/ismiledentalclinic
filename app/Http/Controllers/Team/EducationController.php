<?php

namespace App\Http\Controllers\Team;

use App\Model\TeamModel\Education;
use App\Model\TeamModel\Team;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EducationController extends Controller
{
    public function addeducation($id)
    {
        $teams =Team::find($id);
        return view('backend.team.addeducation',compact('teams'));
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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

            'major_subject' => 'required',
            'complete_year' => 'required',
            'organization' => 'required',

        ]);

        $education = new Education();
        $education->team_id =$request->team_id;
        $education->description=$request->description;
        $education->major_subject=$request->major_subject;
        $education->complete_year=$request->complete_year;

        $education->organization=$request->organization;





        if ($education->save()) {

            $request->session()->flash('success_msg', 'Education  added Successfully');
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
//        $education=Education::where('education_id','$education->education_id')->find($id);
        $education = Education::find($id);
        return view('backend.team.editeducation',compact('education'));
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


        $education = Education::find($id);
        $education->team_id= $request->team_id;


        $education->description = $request->description;
        $education->major_subject = $request->major_subject;
        $education->organization = $request->organization;
        $education->complete_year = $request->complete_year;









        if($education->save())
        {
            $request->session()->flash('success_msg', 'Education edit Successfully');
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
