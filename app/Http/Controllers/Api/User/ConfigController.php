<?php

namespace App\Http\Controllers\Api\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\Api\LandingPage\LandingPageResource;
use App\Traits\ApiResponseController;

class ConfigController extends Controller
{
            use ApiResponseController;

    public function config_run(Request $request){
        $user = $request->user();
        $landing_page =  landing_config_run('LandingPage',$user);
        return new LandingPageResource($landing_page);
    }

}
