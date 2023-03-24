<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\GoogleController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PropertyController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
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

Route::view('/home','frontend.index');
Route::controller(HomeController::class)->group(function(){
    Route::get('/','Index');
    Route::get('/home','Index')->name('home');
});

Route::view('about','frontend.about');
Route::view('how-it-works','frontend.how-it-works');
Route::view('contact','frontend.contact');
Route::get('/properties',[PropertyController::class,'AllProperty'])->name('property');
Route::get('/property/{id}/{slug}',[PropertyController::class,'PropertyDetails']);
Route::view('properties-details','frontend.properties-details');
Route::view('login','frontend.login')->name('login')->middleware('guest');
Route::view('admin-login','frontend.admin-login')->name('admin.login')->middleware('guest');
Route::view('forgot-password','frontend.forgot-password')->name('admin.forgotpassword')->middleware('guest');
Route::view('signup','frontend.signup');

Route::view('faq', 'frontend.faq' );

//================Auto Login With Google   ================
Route::get('/google',[GoogleController::class,'LoginWithGoogle']);
Route::any('/google/response',[GoogleController::class,'GoogleResponse']);

// ==================Client Dashboard Urls Starts ==============================

Route::prefix('user')->group(function(){
    Route::group(['middleware' => ['role:user']],function(){
    Route::get('/investment-details',[UserController::class,'InverstorDetails']);
    Route::post('/details',[UserController::class,'InsertData']);
    Route::view('/invested','client-dashboard.invested');
    Route::view('/documents','client-dashboard.documents-details');
    Route::view('/portfolio-summary','client-dashboard.portfolio-summary');
    Route::view('/my-assets','client-dashboard.my-assets');
    Route::get('/profile',[UserController::class,'Profile']);
    Route::get('/linked-payment-account',[UserController::class,'BankAccount']);
    });
});

// ==================Client Dashboard Urls END ==============================

Route::controller(AuthController::class)->group(function(){
    Route::post('authenticate','authenticate')->name('authenticate');
    Route::post('user-login','UserLogin')->name('user.login');
    Route::get('/logout','logout');
    Route::post('register','Register');
});

Route::controller(BlogController::class)->group(function(){
    Route::get('blog','Index')->name('blog');
    Route::get('blog-details/{id}/{slug}','BlogDetails');
    Route::group(['middleware' => ['role:user']],function(){
        Route::get('user/stories','BlogDashboard')->name('blog.dashboard');
        Route::get('user/new-story/{id?}','BlogCreateNewStory');
        Route::post('user/create-story/{id?}','BlogCreate');
        Route::get('user/story-preview/{id}','BlogPreview');
        Route::get('user/publish/story/{id}','BlogPublish');
    });
});

Route::group(['middleware' => ['role:super-admin']], function(){
    Route::get('admin/property_add',[PropertyController::class,'index']);
    Route::post('admin/property-insert',[PropertyController::class,'store']);
    Route::post('/property/update/{id}',[PropertyController::class,'update']);
    Route::get('/admin/manage-property',[PropertyController::class,'ManagePropertyIndex']);
    Route::get('/admin/approval-property',[PropertyController::class,'ApprovalPropertyIndex']);
    Route::get('/admin/edit-property/{id}',[PropertyController::class,'EditProperty']);
    Route::get('/property_image/delete',[PropertyController::class,'PropertyImageDelete']);
    Route::get('/admin/spv-id',[AdminController::class,'SpvId']);
    Route::get('/admin/users',[AdminController::class,'Users']);
    Route::get('/admin/users-profile/{id}',[AdminController::class,'UsersProfile']);
    Route::get('admin/blog-approval',[BlogController::class,'BlogApproval']);
    Route::get('admin/blog-preview/{id}',[BlogController::class,'AdminBlogPreview']);
    Route::get('admin/blog/approved/{id}',[BlogController::class,'AdminBlogApproved']);
});
