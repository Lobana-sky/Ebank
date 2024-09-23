<?php

use App\Http\Controllers\ApiAllServicesTotalController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiAppController;
use App\Http\Controllers\ApiAppSectionController;
use App\Http\Controllers\ApiEbankSectionController;
use App\Http\Controllers\ApiCardController;
use App\Http\Controllers\ApiDataCommunicationController;
use App\Http\Controllers\ApiEbankController;
use App\Http\Controllers\ApiEcardController;
use App\Http\Controllers\ApiProgramController;
use App\Http\Controllers\ApiTransferMoneyFirmController;
use App\Http\Controllers\ApiUserController;
use App\Http\Controllers\ApiEcardSectionController;
use App\Http\Controllers\ApiGameController;
use App\Http\Controllers\ApiGameSectionController;

// Route::get('app',[ApiAppController::class, 'index']);
// Route::get('data-communication',[ApiDataCommunicationController::class, 'index']);
// Route::get('ebank', [ApiEbankController::class, 'index']);
// Route::get('card', [ApiCardController::class, 'index']);
// Route::get('ecard', [ApiEcardController::class, 'index']);
// Route::get('transfer-money-firm', [ApiTransferMoneyFirmController::class, 'index']);
Route::post('register',[ApiUserController::class, 'store']);
Route::post('login',[ApiUserController::class, 'login']);
Route::middleware('auth:api')->get('myuser',[ApiUserController::class, 'show']);




Route::get('totalRecords',[ApiAllServicesTotalController::class, 'index']);


Route::get('programs', [ApiProgramController::class, 'index']);
Route::get('program/{id}', [ApiProgramController::class, 'show']);

Route::get('transfer-money-firms', [ApiTransferMoneyFirmController::class, 'index']);
Route::get('transfer-money-firm/{id}', [ApiTransferMoneyFirmController::class, 'show']);

Route::get('cards', [ApiCardController::class, 'index']);
Route::get('card/{id}', [ApiCardController::class, 'show']);

Route::get('data-communications', [ApiDataCommunicationController::class, 'index']);
Route::get('data-communication/{id}', [ApiDataCommunicationController::class, 'show']);


Route::get('app-sections',[ApiAppSectionController::class, 'index']);
Route::get('app-sections/{id}',[ApiAppSectionController::class, 'getApps']);
Route::get('app/{id}',[ApiAppController::class, 'show']);

Route::get('ebank-sections',[ApiEbankSectionController::class, 'index']);
Route::get('ebank-sections/{id}',[ApiEbankSectionController::class, 'getEbanks']);
Route::get('ebank/{id}',[ApiEbankController::class, 'show']);

Route::get('ecard-sections',[ApiEcardSectionController::class, 'index']);
Route::get('ecard-sections/{id}',[ApiEcardSectionController::class, 'getEcards']);
Route::get('ecard/{id}',[ApiEcardController::class, 'show']);

Route::get('game-sections',[ApiGameSectionController::class, 'index']);
Route::get('game-sections/{id}',[ApiGameSectionController::class, 'getGames']);
Route::get('game/{id}',[ApiGameController::class, 'show']);
