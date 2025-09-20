<?php

namespace App\Models;

use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */

    use HasApiTokens, Notifiable;    // ✅ Add HasApiTokens here



    protected $fillable = [
        'name',
        'tell',
        'email',
        'password',
        'remember_token',
    ];

    protected $hidden = [
        'password',
    ];

    public function authentication()
    {
        return $this->hasOne(Authentication::class , 'user_id' );
    }


}
