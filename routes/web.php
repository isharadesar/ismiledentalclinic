<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
//Route::get('/', function () {
//    return view('frontend.includes.layout');
//});
Route::get('/','Home\HomeController@slider');
//Route::get('/','Home\HomeController@feedback');
Route::get('/login', function () {
    return view('backend.authentication.login');
});
Route::get('/register', function () {
    return view('backend.authentication.register');
});
Route::get('/admin', function () {
    return view('backend.includes.layout');
});


Route::post('/feedback/insert','Feedback\FeedbackController@store');
//appointment
Route::get('/appointment/','Appointment\AppointmentController@index');
Route::post('/appointment/insert','Appointment\AppointmentController@store');
//home
Route::get('/abouts','Home\HomeController@about');
Route::get('/services','Home\HomeController@service');
Route::get('/contacts','Home\HomeController@contact');
Route::get('/gallerys','Home\HomeController@gallery');
Route::get('/teams','Home\HomeController@teams');
//Route::get('/','Home\HomeController@feedback');
//login $ logout
Route::get('/login','Auth\LoginController@login')->name('login');
Route::post('/login','Auth\LoginController@postlogin');
Route::post('/logout','Auth\LoginController@logout');
//registration
Route::get('/register','Auth\RegistrationController@register');
Route::post('/register','Auth\RegistrationController@postregister');




Route::group(['middleware'=>['authenticated']],function(){

//About us
    Route::get('/about/','About\AboutController@index');
    Route::get('/about/create','About\AboutController@create');
    Route::post('/about/insert/','About\AboutController@store');
    Route::get('/about/{id}/edit','About\AboutController@edit');
    Route::post('/about/{id}','About\AboutController@update');
    Route::post('/delete-about/{id}','About\AboutController@destroy');

//Slider
    Route::resource('/slider', 'Slider\SliderController' );

//Team
    Route::get('/team/','Team\TeamController@index');
    Route::get('/team/create','Team\TeamController@create');
    Route::post('/team/insert/','Team\TeamController@store');

    Route::get('/team/{id}/edit','Team\TeamController@edit');
    Route::post('/team/{id}','Team\TeamController@update');
    Route::get('/team/{id}/team-index','Team\TeamindexController@index');
//Route::post('/delete-staff/{id}','Staff\StaffController@destroy');

//education

    Route::get('/team/{id}/addeducation','Team\EducationController@addeducation');
    Route::post('/education/in/','Team\EducationController@store');
    Route::get('/team/{id}/editeducation','Team\EducationController@edit');
    Route::post('/education/{id}','Team\EducationController@update');
//experience

    Route::get('/team/{id}/addexperience','Team\ExperienceController@addexperience');
    Route::post('/experience/in/','Team\ExperienceController@store');
    Route::get('/team/{id}/editexperience','Team\ExperienceController@edit');
    Route::post('/experience/{id}','Team\ExperienceController@update');
//service

    Route::get('/service/','Service\ServiceController@index');
    Route::get('/service/create','Service\ServiceController@create');
    Route::post('/service/insert/','Service\ServiceController@store');

    Route::get('/service/{id}/edit','Service\ServiceController@edit');
    Route::post('/service/{id}','Service\ServiceController@update');

    Route::post('/service-delete/{id}','Service\ServiceController@destroy');
//contact
    Route::get('/contact/','Contact\ContactController@index');
    Route::get('/contact/create','Contact\ContactController@create');
    Route::post('/contact/insert/','Contact\ContactController@store');

    Route::get('/contact/{id}/edit','Contact\ContactController@edit');
    Route::post('/contact/{id}','Contact\ContactController@update');


//Gallery
    Route::get('/gallery/','Gallery\GalleryController@index');
    Route::get('/gallery/create','Gallery\GalleryController@create');
    Route::post('/gallery/insert','Gallery\GalleryController@store');
    Route::get('/gallery/{id}/edit','Gallery\GalleryController@edit');
    Route::post('/gallery/{id}','Gallery\GalleryController@update');
    Route::post('/gallery-delete/{id}','Gallery\GalleryController@destory');

//time

    Route::get('/time/','Time\TimeController@index');
    Route::get('/time/create','Time\TimeController@create');
    Route::post('/time/insert','Time\TimeController@store');
    Route::get('/time/{id}/edit','Time\TimeController@edit');
    Route::post('/time/{id}','Time\TimeController@update');
    Route::post('/time-delete/{id}','Time\TimeController@destory');
//feedback
    Route::get('/feedback/','Feedback\FeedbackController@index');
    Route::get('/feedback/{id}/edit','Feedback\FeedbackController@edit');
    Route::post('/feedback/{id}','Feedback\FeedbackController@update');




});