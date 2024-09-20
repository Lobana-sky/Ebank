<?php

use App\Http\Controllers\ApiAllServicesTotalController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiAppController;
use App\Http\Controllers\ApiAppSectionController;
use App\Http\Controllers\ApiCardSectionController;
use App\Http\Controllers\ApiEbankSectionController;
use App\Http\Controllers\ApiCardController;
use App\Http\Controllers\ApiDataCommunicationController;
use App\Http\Controllers\ApiEbankController;
use App\Http\Controllers\ApiEcardController;
use App\Http\Controllers\ApiProgramController;
use App\Http\Controllers\ApiTransferMoneyFirmController;
use App\Http\Controllers\ApiUserController;

Route::get('app',[ApiAppController::class, 'index']);
Route::get('data-communication',[ApiDataCommunicationController::class, 'index']);
Route::get('ebank', [ApiEbankController::class, 'index']);
Route::get('card', [ApiCardController::class, 'index']);
Route::get('ecard', [ApiEcardController::class, 'index']);
Route::get('transfer-money-firm', [ApiTransferMoneyFirmController::class, 'index']);
Route::get('program', [ApiProgramController::class, 'index']);

Route::get('totalRecords',[ApiAllServicesTotalController::class, 'index']);

Route::get('app-sections',[ApiAppSectionController::class, 'index']);
Route::get('app-sections/{id}',[ApiAppSectionController::class, 'getApps']);
Route::get('app/{id}',[ApiAppController::class, 'show']);

Route::get('ebank-sections',[ApiEbankSectionController::class, 'index']);
Route::get('ebank-sections/{id}',[ApiEbankSectionController::class, 'getEbanks']);
Route::get('ebank/{id}',[ApiCardController::class, 'show']);


Route::post('register',[ApiUserController::class, 'store']);

// php artisan route:cache
