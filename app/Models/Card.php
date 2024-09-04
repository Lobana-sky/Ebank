<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;


class Card extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'image',
        'price',
        'note',
    ];
    
    
    public function user(): BelongsToMany
    {
        return $this->BelongsToMany(User::class);
    }
}
