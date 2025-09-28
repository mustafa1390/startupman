<?php

namespace App\Models;

use App\Models\BusinesGroup;
use Illuminate\Database\Eloquent\Model;

class LandingPage extends Model
{

    protected $fillable = ['name', 'status', 'busines_group_id', 'priority', 'code'];

    public function busines_group(){
        return $this->belongsTo(BusinesGroup::class);
    }

}
