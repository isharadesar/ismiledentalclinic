<?php

namespace App\Http\Controllers\Home;

use App\Model\AboutModel\About;
use App\Model\ContactModel\Contact;
use App\Model\FeedbackModel\Feedback;
use App\Model\GalleryModel\Gallery;
use App\Model\ServiceModel\Service;
use App\Model\SliderModel\Slider;
use App\Model\TeamModel\Team;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function team()
    {
        $abouts = About::get();
        return view('frontend.includes.header',compact('abouts'));
    }
    public function about()
    {
        $abouts = About::paginate(1);
        return view('frontend.home.about',compact('abouts'));
    }
    public function service()
    {
        $services = Service::get();
        return view('frontend.home.service',compact('services'));
    }
    public function contact()
    {
        $contacts = Contact::get();
        return view('frontend.home.contact',compact('contacts'));
    }
    public function gallery()
    {
        $galleries = Gallery::get();
        return view('frontend.home.gallery',compact('galleries'));
    }
    public function teams()
    {
        $teams = Team::get();
        return view('frontend.home.team',compact('teams'));
    }
    public function slider()
    {
        $sliders = Slider::paginate(1);

        $feedback = Feedback::where('priority', 1)->get();
        return view('frontend.includes.layout', compact('sliders', 'feedback'));
    }
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
        //
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
        //
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
        //
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
