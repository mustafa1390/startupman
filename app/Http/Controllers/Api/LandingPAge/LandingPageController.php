<?php

namespace App\Http\Controllers\Api\LandingPAge;

use App\Models\LandingPage;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Traits\ApiResponseController;
use App\Http\Resources\Api\LandingPage\LandingPageResource;

class LandingPageController extends Controller
{

        use ApiResponseController;



    public function store(Request $request)
    {




// $Section = Section::find(1);
// $Section->sectionUsers()->create(['user_id' => 1 , 'landing_page_id' => $LandingPage->id ]);
// $sectionPublic = SectionPublic::find(2);
// $sectionPublic->sectionUsers()->create(['user_id' => 1 , 'landing_page_id' => $LandingPage->id ]);
// $sectionPublic = SectionPublic::find(4);

// $sectionPublic->sectionUsers()->create(['user_id' => 1 , 'landing_page_id' => $LandingPage->id]);








// $records = SectionUser::onlySections()->get();
// $records = SectionUser::onlySections()->forLandingPage(10)->get();
// $su = SectionUser::first();

// $sectionPublic = SectionPublic::find(3);
// $sectionPublic->sectionUsers()->create(['user_id' => 1]);
// $sectionUser = SectionUser::find(3);
// $parent = $sectionUser->sectionable;





        $data = $request->all();
        $data['user_id'] = $request->user()->id;
        $data['busines_group_id'] = $request->busines_group_id;


         $random = Str::random(5);
         $LandingPage = LandingPage::create([  'name'=> 'landing_page' ,'user_id'=> $data['user_id'],
        'busines_group_id'=> $data['busines_group_id']  , 'code'=>  $random]);
        $landing_page =  LandingPage::where([ ['code',$random], ])->orderby('id','desc')->first();
        return new LandingPageResource($landing_page); 

    }




    public function update_section(Request $request)
    {



    }
}
