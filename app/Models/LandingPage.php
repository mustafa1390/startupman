<?php

namespace App\Models;

use App\Models\BusinesGroup;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class LandingPage extends Model
{
        use  SoftDeletes;


    protected $fillable = ['name', 'status', 'user_id', 'busines_group_id', 'priority', 'code'];

    public function busines_group(){
        return $this->belongsTo(BusinesGroup::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function section_users(){
        return $this->hasMany(SectionUser::class , 'landing_page_id');
    }

}
