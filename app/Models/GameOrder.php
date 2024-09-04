<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GameOrder extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'game_id',
        'user_id_game',
        'name',
        'count',
        'price',
        'note'
    ];
    

}
