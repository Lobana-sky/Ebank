<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TransferMoneyFirm extends Model
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    // protected $table = 'transferMoneyFirm';
    protected $fillable = [
        'name',
        'iban',
        'account_name',
        'image',
        'status',
    ];

    public function users()
    {
        return $this->belongsToMany(User::class, 'transfer_money_firm_orders', 'transfer_money_firm_id', 'user_id');
    }
    
}
