<?php

namespace App\Http\Controllers\Admin;

use App\Models\SectionUser;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SectionManageController extends Controller
{
    public function index(){
        // landing_config_run('test',null);

        $SectionUser = SectionUser::find(5);

        dd($SectionUser->section_id);

    }
}
