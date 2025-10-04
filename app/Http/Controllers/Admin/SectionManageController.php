<?php

namespace App\Http\Controllers\Admin;

use App\Models\Section;
use App\Models\SectionUser;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SectionManageController extends Controller
{
    public function index(){
        // $SectionUser = SectionUser::find(5);
        // dd($SectionUser->section_id);





        landing_model_v1('Section');
        $sections  =    Section::orderby('id','desc')->get();
        // dd($busenes_groups);
        return view('admin.section.index' , compact(['sections'   ]));


    }
}
