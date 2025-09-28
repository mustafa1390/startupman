<?php

namespace App\Models;

use App\Models\User;
use App\Models\Section;
use App\Models\LandingPage;
use Illuminate\Database\Eloquent\Model;

class SectionUser extends Model
{

    protected $fillable = ['user_id', 'sectionable_type', 'sectionable_id', 'landing_page_id', 'priority', 'status'];


    public function sectionable()
    {
        return $this->morphTo();
    }




    // 🔎 Scope: only Section type
    public function scopeOnlySections($query)
    {
        return $query->where('sectionable_type', Section::class);
    }

    // 🔎 Scope: filter by LandingPage
    public function scopeForLandingPage($query, $landingPageId)
    {
        return $query->where('landing_page_id', $landingPageId);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function scopeForUser($query, $userId)
    {
        return $query->whereHas('sectionUsers', function ($q) use ($userId) {
            $q->where('user_id', $userId);
        });
    }


    public function landing_page(){
        return $this->belongsTo(LandingPage::class);
    }




}
