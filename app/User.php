<?php

namespace App;

use Faker\Guesser\Name;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'full_name', 'email', 'phone', 'direction', 'user_name', 'password', 'rol_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    // public static function getName() {
    //     return value('full_name');////
    // }

    // public function getNameAttribute($value)
    // {
    //     return ucfirst($value);
    // }
}
