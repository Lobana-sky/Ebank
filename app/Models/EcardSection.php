<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;


class EcardSection extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'image',
        'status',
    ];
  
    
    public function ecards(): HasMany
    {
        return $this->hasMany(Ecard::class);
    }
}
