<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
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

    public function vip(): BelongsTo
    {
        return $this->belongsTo(Vip::class);
    }

    public function turkificationOrders(): HasMany
    {
        return $this->hasMany(TurkificationOrder::class);
    }
    
    public function transferOrders(): HasMany
    {
        return $this->hasMany(TransferOrder::class);
    }

    public function transferMoneyFirms(): BelongsToMany
    {
        return $this->belongsToMany(TransferMoneyFirm::class, 'transfer_money_firm_orders');
    }

    public function apps(): BelongsToMany
    {
        return $this->belongsToMany(App::class, 'app_orders');
    }
    
    public function cards(): BelongsToMany
    {
        return $this->belongsToMany(Card::class, 'card_orders');
    }

    public function DataCommunications(): BelongsToMany
    {
        return $this->belongsToMany(DataCommunication::class, 'data_communication_orders');
    }

    public function datas(): BelongsToMany
    {
        return $this->BelongsToMany(Data::class, 'data_orders');
    }

    public function ebanks(): BelongsToMany
    {
        return $this->BelongsToMany(Ebank::class, 'ebank_orders');
    }

    public function ecards(): BelongsToMany
    {
        return $this->BelongsToMany(Ecard::class, 'ecard_orders');
    }

    public function games(): BelongsToMany
    {
        return $this->belongsToMany(Game::class, 'game_orders');
    }

    public function programs(): BelongsToMany
    {
        return $this->belongsToMany(Program::class, 'program_orders');
    }
}
