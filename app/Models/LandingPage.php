<?php

namespace App\Models;

use App\Models\BusinesGroup;
use Illuminate\Database\Eloquent\Model;

class LandingPage extends Model
{

    protected $fillable = ['name', 'status', 'user_id', 'busines_group_id', 'priority', 'code'];

    public function busines_group(){
        return $this->belongsTo(BusinesGroup::class);
    }

    public function section_users(){
        return $this->hasMany(SectionUser::class , 'landing_page_id');
    }

}
