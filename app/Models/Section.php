<?php

namespace App\Models;

use App\Models\SectionUser;
use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    protected $fillable = ['name', 'status', 'priority'];


    public function sectionUsers()
    {
        return $this->morphMany(SectionUser::class, 'sectionable');
    }

}
