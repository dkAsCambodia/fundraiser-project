<?php

namespace App\Models;

use App\Enums\Status;
use Filament\Models\Contracts\HasName;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;

class Donor extends Authenticatable implements HasName
{
    use HasApiTokens, HasFactory, HasRoles, Notifiable;

    protected $table = 'users';

    protected $guard_name = 'candidate';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'type',
        'email',
        'password',
        'email_verified_at',
        'contact_number',
        'status',
        'country_code',
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
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
        'status' => Status::class,
    ];

    public function getFilamentName(): string
    {
        return $this->first_name;
    }

    public function getFullName(): string
    {
        return $this->first_name.' '.$this->last_name;
    }

}
