<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class App extends Model
{
    use HasFactory, Notifiable;
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'price',
        'image',
        'note',
        'status',
        'section_id',
    ];

    public function users()
    {
        return $this->belongsToMany(User::class, 'app_orders', 'app_id', 'user_id');
    }
    
    public function appSection(): BelongsTo
    {
        return $this->belongsTo(AppSection::class, 'section_id');
    }

}
