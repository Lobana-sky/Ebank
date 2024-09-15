<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiAppController;
use App\Http\Controllers\ApiCardController;
use App\Http\Controllers\ApiDataCommunicationController;
use App\Http\Controllers\ApiEbankController;
use App\Http\Controllers\ApiEcardController;
use App\Http\Controllers\ApiProgramController;
use App\Http\Controllers\ApiTransferMoneyFirmController;

Route::get('app',[ApiAppController::class, 'index']);
Route::get('data-communication',[ApiDataCommunicationController::class, 'index']);
Route::get('ebank', [ApiEbankController::class, 'index']);
Route::get('card', [ApiCardController::class, 'index']);
Route::get('ecard', [ApiEcardController::class, 'index']);
Route::get('transfer-money-firm', [ApiTransferMoneyFirmController::class, 'index']);
Route::get('program', [ApiProgramController::class, 'index']);