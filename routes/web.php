<?php

use Illuminate\Support\Facades\Route;

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
    return view('pages.index');
});
Route::get('/aboutus', function (){
    return view("pages.about");
});
Route::get('services', function (){
    return view("pages.services");
});
Route::get('news', function (){
    return view("pages.news");
});
Route::get('contactus', function(){
    return view("pages.contact");
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::post('/appointment/create', 'AppointmentsController@store')->name('appointmentCreate');
