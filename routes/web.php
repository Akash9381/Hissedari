<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\PropertyController;
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
    return view('frontend.index');
});
Route::view('about','frontend.about');
Route::view('how-it-works','frontend.how-it-works');
Route::view('contact','frontend.contact');
Route::view('blog','frontend.blog');
Route::get('/properties',[PropertyController::class,'AllProperty']);
Route::get('/property/{id}/{slug}',[PropertyController::class,'PropertyDetails']);
Route::view('properties-details','frontend.properties-details');
Route::view('login','frontend.login')->name('login');
Route::view('signup','frontend.signup');

Route::controller(AuthController::class)->group(function(){
    Route::post('authenticate','authenticate')->name('authenticate');
    Route::get('/logout','logout');
});

Route::group(['middleware' => ['role:super-admin']], function(){
    Route::get('admin/property_add',[PropertyController::class,'index']);
    Route::post('admin/property-insert',[PropertyController::class,'store']);
});
