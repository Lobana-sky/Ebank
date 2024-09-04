<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\AppController;
use App\Http\Controllers\AppSectionContoller;
use App\Http\Controllers\AppOrderController;

use App\Http\Controllers\CardController;
use App\Http\Controllers\CardOrderController;

use App\Http\Controllers\DataController;
use App\Http\Controllers\DataOrderController;

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

use App\Http\Controllers\TransferController;
use App\Http\Controllers\TransferOrderController;

use App\Http\Controllers\TransferMoneyFirmController;
use App\Http\Controllers\TransferMoneyFirmOrderController;

use App\Http\Controllers\TurkificationOrderController;

use App\Http\Controllers\UserController;
use App\Http\Controllers\User;

use App\Http\Controllers\VipController;



Route::get('/', function () {
    return view('welcome');});
Route::get('/dashboard', function () {
        return view('backend.dashboard');});

Route::get('/home',function () {
    return view('backend.dashboard');});

Route::group(['middleware'=> 'auth'], function(){

    Route::resource( 'user', UserController::class,);
    
    Route::get('users/{id}/category', [UserController::class, 'show_category']);
    Route::get('/profile', function () {  return view('backend.users.profile');});
    
    Route::resource('app', AppController::class,);
    Route::resource('app-section', AppSectionContoller::class,);
    Route::resource('app-order', AppOrderController::class,);
    
    Route::resource('card' , CardController::class,);
    Route::resource('card-order' , CardOrderController::class,);
    
    Route::resource('data' , DataController::class,);
    Route::resource('data-order' , DataOrderController::class,);
    
    Route::resource('ebank' , EbankController::class,);
    Route::resource('ebank-section' , EbankSectionController::class,);
    Route::resource('ebank-order' , EbankOrderController::class,);
    
    Route::resource('ecard' , EcardController::class,);
    Route::resource('ecard-section' , EcardSectionController::class,);
    Route::resource('ecard-order' , EcardOrderController::class,);
    
    Route::resource('game' , GameController::class,);
    Route::resource('game-section' , GameSectionController::class,);
    Route::resource('game-order' , GameOrderController::class,);
    
    Route::resource('program' , ProgramController::class,);
    Route::resource('program-order' , ProgramOrderController::class,);
    
    Route::resource('transfer-money-firm' , TransferMoneyFirmController::class,);
    Route::resource('transfer-money-firm-order' , TransferMoneyFirmOrderController::class,);
    
    Route::resource('transfer' , TransferController::class,);
    Route::resource('transfer-order' , TransferOrderController::class,);
    
    Route::resource('turkification-order' , TurkificationOrderController::class,);
    
    Route::resource('vip', VipController::class,);

});  
Auth::routes();