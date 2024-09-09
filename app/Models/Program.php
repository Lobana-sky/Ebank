<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    use HasFactory; 
    protected $fillable = [
        'name',
        'image',
        'price',
        'note',
        'status',
    ];
    
    public function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class, 'program_orders', 'program_id', 'user_id');
    }

}
