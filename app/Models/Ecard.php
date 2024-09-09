<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

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
    
    public function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class, 'ecard_orders', 'ecard_id', 'user_id');
    }

    public function ecardSection(): BelongsTo
    {
        return $this->belongsTo(EcardSection::class);
    }
}
