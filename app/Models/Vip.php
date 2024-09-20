<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;



class Vip extends Model
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'commession_percent',
        'role_name',
    ];
   
    public function users():HasMany
    {
        return $this->hasMany(User::class);
    }
}
