<?php

use App\Models\Admin;
use App\Models\Section;
use App\Models\LandingPage;
use App\Models\SectionUser;
use Illuminate\Support\Str;
use App\Models\BusinesGroup;
use App\Models\SectionPublic;
use Illuminate\Support\Facades\Hash;

if(! function_exists('landing_model_v1') ) {
    function landing_model_v1($model)
    {

         if($model == 'SectionPublic'){

            $section = Section::where([ ['name','Title'], ])->first();
            $section_id = $section->id;


            $updateorinsert = SectionPublic::updateOrCreate([
                'type'=> 'float' , 'name'=> 'right' , 'section_id'=> $section_id
            ],[
                'type'=> 'float' , 'name'=> 'right' , 'section_id'=> $section_id
            ]);

            $updateorinsert = SectionPublic::updateOrCreate([
                'type'=> 'float' , 'name'=> 'center' , 'section_id'=> $section_id
            ],[
                'type'=> 'float' , 'name'=> 'center' , 'section_id'=> $section_id
            ]);

            $updateorinsert = SectionPublic::updateOrCreate([
                'type'=> 'float' , 'name'=> 'left' , 'section_id'=> $section_id
            ],[
                'type'=> 'float' , 'name'=> 'left' , 'section_id'=> $section_id
            ]);

            $updateorinsert = SectionPublic::updateOrCreate([
                'type'=> 'bg' , 'name'=> 'color' , 'section_id'=> $section_id
            ],[
                'type'=> 'bg' , 'name'=> 'color' , 'section_id'=> $section_id
            ]);

            $updateorinsert = SectionPublic::updateOrCreate([
                'type'=> 'bg' , 'name'=> 'url' , 'section_id'=> $section_id
            ],[
                'type'=> 'bg' , 'name'=> 'url' , 'section_id'=> $section_id
            ]);

            $updateorinsert = SectionPublic::updateOrCreate([
                'type'=> 'bg' , 'name'=> 'none' , 'section_id'=> $section_id
            ],[
                'type'=> 'bg' , 'name'=> 'none' , 'section_id'=> $section_id
            ]);

         }

         if($model == 'Admin'){

            $updateorinsert = Admin::updateOrCreate([
                'email'   => 'admin@gmail.com'
            ],[
                 'name' => '  مدیریت سایت' ,
                 'email'=> 'admin@gmail.com',
                 'password'=> Hash::make('123456'),
            ]);


         }
         if($model == 'BusinesGroup'){
            $updateorinsert = BusinesGroup::updateOrCreate([
                'name'   => 'خدماتی' , 'icon'=> 0
            ],[
                'name'   => 'خدماتی' , 'icon'=> 0
            ]);
            $updateorinsert = BusinesGroup::updateOrCreate([
                'name'   => 'فروشگاهی' , 'icon'=> 0
            ],[
                'name'   => 'فروشگاهی' , 'icon'=> 0
            ]);
            $bugr =  BusinesGroup::where([ ['name','فروشگاهی'], ])->orderby('id','desc')->first();
            $updateorinsert = BusinesGroup::updateOrCreate([
                'name'   => 'معرفی محصول' , 'icon'=> 0
            ],[
                'name'   => 'معرفی محصول' , 'icon'=> 0 , 'parent_id'=>$bugr->id
            ]);
        }


         if($model == 'Section'){

            $updateorinsert = Section::updateOrCreate([
                'name'   => 'Title'
            ],[
                'name'   => 'Title'
            ]);
            $updateorinsert = Section::updateOrCreate([
                'name'   => 'Text'
            ],[
                'name'   => 'Text'
            ]);
            $updateorinsert = Section::updateOrCreate([
                'name'   => 'Step'
            ],[
                'name'   => 'Step'
            ]);
            $updateorinsert = Section::updateOrCreate([
                'name'   => 'Priceng'
            ],[
                'name'   => 'Priceng'
            ]);
            $updateorinsert = Section::updateOrCreate([
                'name'   => 'Advences'
            ],[
                'name'   => 'Advences'
            ]);
            $updateorinsert = Section::updateOrCreate([
                'name'   => 'Logos'
            ],[
                'name'   => 'Logos'
            ]);
         }

    }
}
 



if(! function_exists('config_run_first') ) {
    function config_run_first()
    {
        landing_model_v1('Admin');
        landing_model_v1('BusinesGroup');
        landing_model_v1('Section');
        landing_model_v1('SectionPublic');
    }
}
