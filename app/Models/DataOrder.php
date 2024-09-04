<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataOrder extends Model
{
    use HasFactory;

    protected $fillable = [
        'data_id',
        'user_id',
        'price',
        'count',
        'note',
        'mobile'
    ];
}
