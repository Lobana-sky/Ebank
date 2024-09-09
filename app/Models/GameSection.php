<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
class GameSection extends Model
{
    use HasFactory;
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
  
    protected $fillable = [
        'name',
        'image',
        'status',
    ];

    public function games(): HasMany
    {
        return $this->hasMany(Game::class);
    }
}
