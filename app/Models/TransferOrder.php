<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

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
     
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
