<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LogUser extends Model
{
    protected $fillable = [
        'name', 'ip', 'act', 'prev' , 'url' , 'user_id' ,'redirect' ,'agents' ,
    ];
}
