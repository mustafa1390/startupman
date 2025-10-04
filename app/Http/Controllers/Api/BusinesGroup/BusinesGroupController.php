<?php

namespace App\Http\Controllers\Api\BusinesGroup;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\Api\BusinesGroup\BusinesGroupResource;
use App\Models\BusinesGroup;
use App\Traits\ApiResponseController;

class BusinesGroupController extends Controller
{
        use ApiResponseController;



    public function index_list_parent(Request $request)
    {


    //  $data['user_id'] = $request->user()->id;
     $busines_groups = BusinesGroup::where([ ['parent_id','=',null] ])->orderby('id','asc')->get();
     return  BusinesGroupResource::collection($busines_groups);

        // return  New DoctorOfficeResource($doctor);


    }

}
