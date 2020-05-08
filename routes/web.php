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
Route::get('/', 'HomeController@index')->name('dashboard');
Route::get('/home', 'HomeController@index')->name('home');

Route::post('/appointment/create', 'AppointmentsController@store')->name('appointmentCreate');

Route::post('/create/slide', 'SlidesController@store')->name('slidesCreate');
Route::get('/getSlides', 'SlidesController@index')->name('fetchSlides');
Route::post('/edit/slide/{id}', 'SlidesController@update')->name('updateSlide');
Route::delete('/delete/slide/{id}', 'SlidesController@destroy')->name('deleteSlide');

Route::post('/create/news', 'NewsController@store')->name('newsCreate');
Route::get('/getNews', 'NewsController@index')->name('fetchNews');
Route::post('/edit/news/{id}', 'NewsController@update')->name('updatNews');
Route::delete('/delete/news/{id}', 'NewsController@destroy')->name('deleteNews');

Route::post('/create/staff', 'StaffController@store')->name('staffCreate');
Route::get('/getStaff', 'StaffController@index')->name('fetchStaff');
Route::post('/edit/staff/{id}', 'StaffController@update')->name('updateStaff');
Route::delete('/delete/staff/{id}', 'StaffController@destroy')->name('deleteStaff');
