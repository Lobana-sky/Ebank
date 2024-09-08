<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;


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
    
    public function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class);
    }

    
    public function appSection(): BelongsTo
    {
        return $this->belongsTo(AppSection::class);
    }




}
