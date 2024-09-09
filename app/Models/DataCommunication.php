<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class DataCommunication extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'image',
        'price',
        'note',
        'status',
        'type',//فاتورة   1 :   ---   -2:رصيد
    ];
    
    public function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class, 'data_communication_orders', 'data_id', 'user_id');
    }
}
