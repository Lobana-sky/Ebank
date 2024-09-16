<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\App;
use App\Models\Card;
use App\Models\DataCommunication;
use App\Models\Ebank;
use App\Models\Ecard;
use App\Models\Game;
use App\Models\Program;
use App\Models\TransferMoneyFirm;

class ApiAllServicesTotalController extends Controller
{
    public function index()
    {
       $appRecords = App::count();
       $cardRecords = Card::count();
       $dataCommunicationRecords = DataCommunication::count();
       $ebankRecords = Ebank::count();
       $ecardRecords = Ecard::count();
       $gameRecords = Game::count();
       $programRecords = Program::count();
       $transferMoneyFirmRecords = TransferMoneyFirm::count();
       return response()->json([
        'appRecords'=>$appRecords,
        'cardRecords'=>$cardRecords,
        'dataCommunicationRecords'=>$dataCommunicationRecords,
        'ebankRecords'=>$ebankRecords,
        'ecardRecords'=>$ecardRecords,
        'gameRecords'=>$gameRecords,
        'programRecords'=>$programRecords,
        'transferMoneyFirmRecords'=>$transferMoneyFirmRecords,
    ]);
    }
}
