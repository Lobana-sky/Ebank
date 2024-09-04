<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransferOrder extends Model
{
    use HasFactory;
    protected $fillable = [
        'transfer_id',
        'user_id',
        'price',
        'count',
        'mobile',
        'note'
    ];
}
