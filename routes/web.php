<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
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

Route::get('', function () {
    return redirect('home');

Route::resource('properties', 'PropertiesController');
Route::resource('zones', 'ZonesController');
Route::resource('roomtypes', 'RoomTypesController');
Auth::routes(['verify' => true]);
Route::get('home/{lang}', function ($lang) {
    App::setlocale($lang);
    return view('home');
});
Route::get('home', function () {
    return view('home');
});

