<?php

namespace App\Http\Controllers\Feedback;

use App\Model\FeedbackModel\Feedback;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FeedbackController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $feedback = Feedback::get();
        return view('backend.feedback.index',compact('feedback'));
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

            'name' => 'required',
            'email' => 'required',
            'contact' => 'required',
            'msg'=>'required',


        ]);

        $feedback = new Feedback();
        $randVal = rand(1111,9999);

        $feedback->name = $request->name;
        $feedback->email = $request->email;
        $feedback->contact = $request->contact;
        $feedback->msg = $request->msg;




        if ($feedback->save()) {

            $request->session()->flash('success_msg', 'Thankyou for your feedback');
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
        $feedback =Feedback::find($id);
        return view('backend.feedback.edit',compact('feedback'));
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
        $feedback = new Feedback();

        $feedback->name = $request->name;
        $feedback->email = $request->email;
        $feedback->contact = $request->contact;
        $feedback->msg = $request->msg;
        $feedback->priority = $request->priority;






        if ($feedback->save()) {

            $request->session()->flash('success_msg', 'Feed back shown at homepage  Successfully');
            return redirect()->action(
                'Feedback\FeedbackController@index');
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
        
    }
}
