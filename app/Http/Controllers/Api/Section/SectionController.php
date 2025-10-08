<?php

namespace App\Http\Controllers\Api\Section;

use App\Models\Section;
use App\Models\LandingPage;
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
        $data['id'] = $request->id;
        $landing_page =  LandingPage::where([ ['user_id',$data['user_id'] ], ['id',$data['id']], ])->orderby('id','asc')->first();
        // $landing_page = $landing_page->id;
        $sections =  Section::where([ ['status','active'], ])->orderby('id','asc')->get();
        return  SectionUserResource::collection($sections , $landing_page);

    }
}
