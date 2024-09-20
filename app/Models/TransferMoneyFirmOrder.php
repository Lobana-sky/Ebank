<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TransferMoneyFirmOrder extends Model
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'transfer_money_firm_id',
        'user_id',
        'sender',
        'value',
        'currency',
        'dekont_no',
        'password',
    ];
}
