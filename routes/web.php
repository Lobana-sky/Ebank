<?php

use Illuminate\Support\Facades\Route;

use Illuminate\Http\Request;

use App\Http\Controllers\AppController;
use App\Http\Controllers\AppSectionContoller;
use App\Http\Controllers\AppOrderController;

use App\Http\Controllers\SettingController;

use App\Http\Controllers\CardController;
use App\Http\Controllers\CardOrderController;

use App\Http\Controllers\DataCommunicationController;
use App\Http\Controllers\DataCommunicationOrderController;

use App\Http\Controllers\EbankController;
use App\Http\Controllers\EbankSectionController;
use App\Http\Controllers\EbankOrderController;

use App\Http\Controllers\EcardSectionController;
use App\Http\Controllers\EcardOrderController;
use App\Http\Controllers\EcardController;

use App\Http\Controllers\GameController;
use App\Http\Controllers\GameSectionController;
use App\Http\Controllers\GameOrderController;

use App\Http\Controllers\ProgramController;
use App\Http\Controllers\ProgramOrderController;

use App\Http\Controllers\TransferOrderController;

use App\Http\Controllers\TransferMoneyFirmController;
use App\Http\Controllers\TransferMoneyFirmOrderController;

use App\Http\Controllers\TurkificationOrderController;

use App\Http\Controllers\UserController;
use App\Http\Controllers\User;

use App\Http\Controllers\VipController;
use App\Models\Setting;

use Illuminate\Support\Facades\Session;



use App\Http\Middleware\LoadSettings;

Route::middleware([LoadSettings::class])->group(function () {
    
Route::get('/', function (Request $request) {
    return view('welcome');});

Route::get('/dashboard', function () {
        return view('backend.dashboard');});

Route::get('/home',function (Request $request) {
  
    return view('backend.dashboard');});

Route::group(['middleware'=> 'auth'], function(){

    Route::resource( 'user', UserController::class,);
    
    Route::get('users/{id}/category', [UserController::class, 'showCategory']);
    Route::get('/profile', function () {  return view('backend.users.profile');});
    
    Route::resource('setting', SettingController::class,);
    Route::resource('app', AppController::class,);
    Route::resource('app-section', AppSectionContoller::class,);
    Route::resource('app-order', AppOrderController::class,);
    Route::get('/app/{id}/category',[ AppController::class,'showApps']);
    Route::post('/app/{id}/status',[ AppController::class,'changeStatus']);
    Route::post('/app-section/{id}/status',[ AppSectionContoller::class,'changeStatus']);
    
    
    Route::resource('card' , CardController::class,);
    Route::post('/card/{id}/status' , [CardController::class,'changeStatus']);
    Route::resource('card-order' , CardOrderController::class,);
    
    Route::resource('data-communication' , DataCommunicationController::class,);
    Route::resource('data-communication-order' , DataCommunicationOrderController::class,);
    Route::post('/data-communication/{id}/status',[ DataCommunicationController::class,'changeStatus']);
    
    Route::resource('ebank' , EbankController::class,);
    Route::resource('ebank-section' , EbankSectionController::class,);
    Route::get('/ebank/{id}/category',[ EbankController::class,'showEbanks']);
    Route::resource('ebank-order' , EbankOrderController::class,);
    Route::post('/ebank/{id}/status',[ EbankController::class,'changeStatus']);
    Route::post('/ebank-section/{id}/status',[ EbankSectionController::class,'changeStatus']);

    Route::resource('ecard' , EcardController::class,);
    Route::resource('ecard-section' , EcardSectionController::class,);
    Route::get('/ecard/{id}/category',[ EcardController::class,'showEcards']);
    Route::resource('ecard-order' , EcardOrderController::class,);
    Route::post('/ecard-section/{id}/status',[ EcardSectionController::class,'changeStatus']);
    Route::post('/ecard/{id}/status',[ EcardController::class,'changeStatus']);


    Route::resource('game' , GameController::class,);
    Route::resource('game-section' , GameSectionController::class,);
    Route::get('/game/{id}/category',[ GameController::class,'showGames']);
    Route::resource('game-order' , GameOrderController::class,);
    Route::post('/game-section/{id}/status',[ GameSectionController::class,'changeStatus']);
    Route::post('/game/{id}/status',[ GameController::class,'changeStatus']);


    
    Route::resource('program' , ProgramController::class,);
    Route::post('/program/{id}/status',[ProgramController::class,'changeStatus']);
    Route::resource('program-order' , ProgramOrderController::class,);
    
    Route::resource('transfer-money-firm' , TransferMoneyFirmController::class,);
    Route::post('/transfer-money-firm/{id}/status',[TransferMoneyFirmController::class,'changeStatus']);
    Route::resource('transfer-money-firm-order' , TransferMoneyFirmOrderController::class,);
    
    Route::resource('transfer-order' , TransferOrderController::class,);
    
    Route::resource('turkification-order' , TurkificationOrderController::class,);
    
    Route::resource('vip', VipController::class,);

}); 

}); 
Auth::routes();