<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EcardOrder extends Model
{
    use HasFactory;
    protected $fillable = [
        'ecard_id',
        'user_id',
        'price',
        'count',
        'note'
    ];
}
