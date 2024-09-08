<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Ecard extends Model
{
    use HasFactory;
    protected $fillable = [
        'section_id',
        'name',
        'image',
        'price',
        'note',
        'status',
    ];
    
    /**
     * Get the user that owns the turkification.
     */
    public function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class);
    }
    public function ecardSections(): BelongsTo
    {
        return $this->belongsToMany(EcardSection::class);
    }
}
