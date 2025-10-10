<?php

namespace App\Models;

use App\Models\SectionUser;
use Illuminate\Database\Eloquent\Model;

class SectionTemplate extends Model
{


    protected $fillable = ['name', 'status', 'section_id', 'priority', 'path'];


}
