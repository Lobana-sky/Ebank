<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class TransferOrder extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'price',
        'count',
        'mobile',
        'note'
    ];
     /**
     * Get the user that owns the turkification.
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
