<?php

use App\Models\LandingPage;
use App\Models\SectionUser;
use Illuminate\Support\Str;
use App\Models\BusinesGroup;
use App\Models\Section;
use App\Models\SectionPublic;

if(! function_exists('landing_model_v1') ) {
    function landing_model_v1($model)
    {

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
                'name'   => 'عنوان'
            ],[
                'name'   => 'عنوان'
            ]);
            $updateorinsert = Section::updateOrCreate([
                'name'   => 'متن'
            ],[
                'name'   => 'متن'
            ]);
            $updateorinsert = Section::updateOrCreate([
                'name'   => 'مرحله به مرحله'
            ],[
                'name'   => 'مرحله به مرحله'
            ]);
            $updateorinsert = Section::updateOrCreate([
                'name'   => 'قیمت گذاری'
            ],[
                'name'   => 'قیمت گذاری'
            ]);
            $updateorinsert = Section::updateOrCreate([
                'name'   => 'توصیه نامه ها'
            ],[
                'name'   => 'توصیه نامه ها'
            ]);
            $updateorinsert = Section::updateOrCreate([
                'name'   => 'لوگوها'
            ],[
                'name'   => 'لوگوها'
            ]);
         }

    }
}

if(! function_exists('landing_config_run') ) {
    function landing_config_run($model,$user)
    {


        if($model=='LandingPage'){
        $bugr_find =  BusinesGroup::where([ ['name','معرفی محصول'], ])->orderby('id','desc')->first();
        $random = Str::random(5);
         $LandingPage = LandingPage::create([  'name'=> 'landing_page' ,'user_id'=> $user->id,
        'busines_group_id'=> $bugr_find->id  , 'code'=>  $random]);
        $LandingPage =  LandingPage::where([ ['code',$random], ])->orderby('id','desc')->first();

        return $LandingPage;

        }


        if($model=='other'){

 $Section = Section::create([  'name'=> 'Product'  ]);
 $SectionPublic = SectionPublic::create([  'type'=> 'float' , 'name'=> 'right' , 'section_id'=> 1  ]);
 $SectionPublic = SectionPublic::create([  'type'=> 'float' , 'name'=> 'center' , 'section_id'=> 1  ]);
 $SectionPublic = SectionPublic::create([  'type'=> 'float' , 'name'=> 'left' , 'section_id'=> 1  ]);
 $SectionPublic = SectionPublic::create([  'type'=> 'bg' , 'name'=> 'color' , 'section_id'=> 1  ]);
 $SectionPublic = SectionPublic::create([  'type'=> 'bg' , 'name'=> 'url' , 'section_id'=> 1  ]);
 $SectionPublic = SectionPublic::create([  'type'=> 'bg' , 'name'=> 'none' , 'section_id'=> 1  ]);

// $Section = Section::find(1);
// $Section->sectionUsers()->create(['user_id' => 1 , 'landing_page_id' => $LandingPage->id ]);
// $sectionPublic = SectionPublic::find(2);
// $sectionPublic->sectionUsers()->create(['user_id' => 1 , 'landing_page_id' => $LandingPage->id ]);
// $sectionPublic = SectionPublic::find(4);

// $sectionPublic->sectionUsers()->create(['user_id' => 1 , 'landing_page_id' => $LandingPage->id]);


        }


// $records = SectionUser::onlySections()->get();
// $records = SectionUser::onlySections()->forLandingPage(10)->get();
// $su = SectionUser::first();

// $sectionPublic = SectionPublic::find(3);
// $sectionPublic->sectionUsers()->create(['user_id' => 1]);
// $sectionUser = SectionUser::find(3);
// $parent = $sectionUser->sectionable;





    }
}

