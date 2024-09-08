<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class EbankSection extends Model
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

      /**
     * Get the user that owns the turkification.
     */
    public function ebanks(): BelongsToMany
    {
        return $this->belongsTo(ebanks::class);
    }
    
}
 