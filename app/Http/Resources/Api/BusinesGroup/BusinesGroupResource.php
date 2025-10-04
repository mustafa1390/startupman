<?php

namespace App\Http\Resources\Api\BusinesGroup;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource; 

class BusinesGroupResource extends JsonResource
{

        public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'icon' => $this->icon,
            'parent_id' => $this->parent_id,
            'childrenRecursive' => $this->childrenRecursive,
            // 'childrenRecursive' => new ChildBusinesGroupResource($this->childrenRecursive)  ,
            'pdate' => date_frmats($this->created_at) ,
            'created_at' => date_frmats_en($this->created_at) ,
            'updated_at' => $this->updated_at ,
     ];

    }
}
