<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class TurkificationOrder extends Model
{
    use HasFactory, Notifiable;
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'user_id',
        'ime',
        'price',
        'note'
    ];
    
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
