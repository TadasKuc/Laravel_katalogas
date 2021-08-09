<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $guarded = [];

    public const ROLE_SUPER_ADMIN = "Super Admin";
    public const ROLE_ADMIN = "Admin";
    public const ROLE_SIMPLE = "Simple";
    public const ROLE_COMPANY = "Company";
    public const ROLE_NEW = "New";

    public const CONFIRMED_YES = "Patvirtintas";
    public const CONFIRMED_NO = "Nepatvirtintas";

    public const ROLE = [
        self::ROLE_SUPER_ADMIN,
        self::ROLE_ADMIN,
        self::ROLE_SIMPLE,
        self::ROLE_COMPANY,
        self::ROLE_NEW
    ];

    public const CONFIRMED = [
        self::CONFIRMED_NO,
        self::CONFIRMED_YES,
    ];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'phone',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function address()
    {
        return $this->hasOne(Address::class);
    }

    public function isSuperAdmin()
    {

        if($this->role === self::ROLE_SUPER_ADMIN)
        {
            return true;
        }
        else
        {
            return false;
        }

    }

}
