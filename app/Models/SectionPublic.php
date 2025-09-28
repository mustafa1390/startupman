<?php

namespace App\Models;

use App\Models\SectionUser;
use Illuminate\Database\Eloquent\Model;

class SectionPublic extends Model
{
    protected $fillable = ['name', 'status', 'type', 'priority'];



    public function sectionUsers()
    {
        return $this->morphMany(SectionUser::class, 'sectionable');
    }
}
