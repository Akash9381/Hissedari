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

use Modules\CpPanel\Http\Controllers\CpPanelController;

Route::prefix('cp-panel')->group(function() {
    Route::get('/login', 'CpPanelController@index')->name('cp-panel.login')->middleware('guest');
    Route::get('/registration', 'CpPanelController@register');
    Route::post('/register', 'CpPanelController@Create')->name('cp-panel.register');
    
    Route::middleware(['auth','role:chanel-partner'])->group(function () {
        Route::get('/profile',[CpPanelController::class,'Profile'])->name('cp.profile');
        Route::get('/profile-summary', 'CpPanelController@Summary');
        Route::post('/profile-summary-store', 'CpPanelController@SummaryUpdate')->name('cp-panel.update');
        Route::get('/references-table',[CpPanelController::class,'Reference']);
        Route::get('/references-table-sample',[CpPanelController::class,'Sample'])->name('sample.refrences');
        Route::post('/references-table-import',[CpPanelController::class,'Import'])->name('cp-panel.import');
        Route::view('/my-references','cp-panel.my-references')->name('cp-panel.myrefrences');        
        Route::get('/referance-delete/{rfr}',[CpPanelController::class,'Delete'])->name('refer.delete');
        Route::get('/referance-download-excel',[CpPanelController::class,'Export'])->name('referance.donload.excel');
        Route::get('/bank-details',[CpPanelController::class,'Bank'])->name('cp-panel.bank.details');
        Route::post('/bank-details-save',[CpPanelController::class,'BankSave'])->name('cp-panel.bank.details.save');
    });
});
