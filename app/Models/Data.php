<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Data extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'image',
        'price',
        'note',
        'type',//فاتورة   1 :   ---   -2:رصيد
    ];
    
    public function user(): BelongsToMany
    {
        return $this->BelongsToMany(User::class);
    }
}
