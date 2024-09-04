<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;
    protected $fillable = [
        'game_id',
        'name',
        'image',
        'price',
        'note',
    ];
    
    /**
     * Get the user that owns the turkification.
     */
    public function user(): BelongsToMany
    {
        return $this->BelongsToMany(User::class);
    }
}
