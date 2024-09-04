<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
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
    ];

      /**
     * Get the user that owns the turkification.
     */
    public function Games(): BelongsTo
    {
        return $this->belongsTo(Game::class);
    }


}
