<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Ebank extends Model
{
    use HasFactory;
    protected $fillable = [
        'section_id',
        'name',
        'image',
        'note',
        'price',
        'status',
    ];
    
    /**
     * Get the user that owns the turkification.
     */
    public function users(): BelongsToMany
    {
        return $this->belongsToMany(user::class);
    }
    public function ebankSection(): BelongsTo
    {
        return $this->belongsTo(ebankSection::class);
    }
}
