<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;
    protected $fillable = [
        'section_id',
        'name',
        'image',
        'price',
        'status',
        'note',
    ];
    
    /**
     * Get the user that owns the turkification.
     */
    public function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class);
    }
    public function gameSections(): BelongsTo
    {
        return $this->belongsToMany(GameSection::class);
    }
}
