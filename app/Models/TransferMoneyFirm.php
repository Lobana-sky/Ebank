<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class TransferMoneyFirm extends Model
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    // protected $table = 'transferMoneyFirm';
    protected $fillable = [
        'name',
        'iban',
        'account_name',
        'image',
    ];
    
    public function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class);
    }
    
}
