<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

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

    public function users(): BelongsToMany
    {
        return $this->BelongsToMany(User::class, 'ebank_orders', 'ebank_id', 'user_id');
    }
    
    public function ebankSection(): BelongsTo
    {
        return $this->belongsTo(ebankSection::class);
    }
    
}
