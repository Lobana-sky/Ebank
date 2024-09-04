<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class Vip extends Model
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'commession_percent',
        'role_name',
    ];
    
    /**
     * Get the user that owns the vip.
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
