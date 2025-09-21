<?php

namespace App\Models;

use App\Models\Role\Role;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{

    protected $fillable = [
        'name',
        'email',
        'password',
        'role_id',
    ];



    public function role(){
        return $this->belongsTo(Role::class);
    }

}
