<?php

use App\Models\LandingPage;
use App\Models\SectionUser;
use Illuminate\Support\Str;
use App\Models\BusinesGroup;
use App\Models\SectionPublic;

if(! function_exists('landing_model_v1') ) {
    function landing_model_v1($model)
    {

        $busines_groups  =    BusinesGroup::orderby('id','desc')->count();

        // dd($busines_groups);
        if($busines_groups==0){
        $busenes_group = BusinesGroup::create([  'name'=> 'خدماتی' , 'icon'=> 0 ]);
        $busenes_group = BusinesGroup::create([  'name'=> 'فروشگاهی' , 'icon'=> 0  ]);
        $bugr =  BusinesGroup::where([ ['name','فروشگاهی'], ])->orderby('id','desc')->first();
        $busenes_group = BusinesGroup::create([  'name'=> 'معرفی محصول'  , 'icon'=> 0 , 'parent_id'=>$bugr->id ]);
        }



       $bugr_find =  BusinesGroup::where([ ['name','معرفی محصول'], ])->orderby('id','desc')->first();



    //    ['name', 'status', 'busines_group_id', 'priority', 'code'];

       $random = Str::random(5);

       dd($random);
            //    $LandingPage = LandingPage::create([  'name'=> 'landing_page' , 'icon'=> 0 ]);


// $records = SectionUser::onlySections()->get();
// $records = SectionUser::onlySections()->forLandingPage(10)->get();
// $su = SectionUser::first();

// $sectionPublic = SectionPublic::find(3);
// $sectionPublic->sectionUsers()->create(['user_id' => 1]);
// $sectionUser = SectionUser::find(3);
// $parent = $sectionUser->sectionable;





    }
}

