<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class User extends Authenticatable
{

    use HasFactory, Notifiable;

   

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $table="users";
    protected $fillable = [
        'name',
        'first_name',
        'last_name',
        'mobile',
        'role',//1,2,3,4  --- 1 is admin
        'agent_id',
        'vip_id',
        'image',
        'email',
        'gender',
        'nationality',
        'email_verified_at',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function vips(): HasMany
    {
        return $this->hasMany(Vip::class);
    }

    public function turkification_orders(): HasMany
    {
        return $this->hasMany(TurkificationOrder::class);
    }

    public function transfer_money_firms(): BelongsToMany
    {
        return $this->belongsToMany(TransferMoneyFirm::class);
    }

    public function apps(): BelongsToMany
    {
        return $this->belongsToMany(App::class);
    }

}
