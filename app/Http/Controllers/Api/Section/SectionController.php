<?php

namespace App\Http\Controllers\Api\Section;

use App\Models\Section;
use App\Models\LandingPage;
use App\Models\SectionUser;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Traits\ApiResponseController;
use App\Http\Resources\Api\Section\SectionResource;
use App\Http\Resources\Api\Section\SectionUserResource;
use App\Http\Resources\Api\LandingPage\LandingPageResource;

class SectionController extends Controller
{

        use ApiResponseController;



    public function index(Request $request)
    {

        $data = $request->all();
        $data['user_id'] = $request->user()->id;
        $sections =  Section::where([ ['status','active'], ])->orderby('id','asc')->get();
        return  SectionResource::collection($sections);

    }

    public function by_landing_page(Request $request)
    {

        $data = $request->all();
        $data['user_id'] = $request->user()->id;
        $data['code'] = $request->code;
        $landing_page =  LandingPage::where([ ['user_id',$data['user_id'] ], ['code',$data['code']], ])->orderby('id','asc')->first();
// $Section = Section::find(1);
// $Section->sectionUsers()->create(['user_id' => $data['user_id'] , 'landing_page_id' => $landing_page->id]);
        $sections =  Section::where([ ['status','active'], ])->orderby('id','asc')->get();
        return  SectionUserResource::collection($sections , $landing_page);

    }
    public function update_section_user(Request $request)
    {

        $data = $request->all();
        $data['user_id'] = $request->user()->id;
        $data['code'] = $request->code;
        $selected = $request->selected;
        $data['section_id'] = $request->section_id;
        $landing_page =  LandingPage::where([ ['user_id',$data['user_id'] ], ['code',$data['code']], ])->orderby('id','asc')->first();

        $Section = Section::find($data['section_id']);
        $sectionable_type = 'App\Models\Section';

        $section_user = SectionUser::where([
            ['user_id',$landing_page->user->id], ['sectionable_id',$data['section_id']],
            ['sectionable_type',$sectionable_type], ['landing_page_id',$landing_page->id],
             ])->orderby('id','desc')->first();


        if($selected=='unselect'){
             if($section_user){
                $section_user->update([ 'status'=>'active']);
             }else{
             $Section->sectionUsers()->create(['user_id' => $data['user_id'] ,
              'landing_page_id' => $landing_page->id ,  'status'=>'active' ]);
             }
        }

        if($selected=='selected'){
                $section_user->update([ 'status'=>'inactive']);
        }

        $sections =  Section::where([ ['status','active'], ])->orderby('id','asc')->get();
        return  SectionUserResource::collection($sections , $landing_page);

    }
}
