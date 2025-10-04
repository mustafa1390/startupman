<?php

namespace App\Http\Resources\Api\BusinesGroup;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ChildBusinesGroupResource extends JsonResource
{

       public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name' => $this->name, 
     ];

    }

}
