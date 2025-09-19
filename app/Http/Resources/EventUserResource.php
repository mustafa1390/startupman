<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use App\Http\Resources\UserResource;
use App\Http\Resources\EventResource;
use Illuminate\Http\Resources\Json\JsonResource;

class EventUserResource extends JsonResource
{


    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'user_id' => $this->user_id ,
            'event_id' => $this->event_id ,
            'user' => new UserResource($this->user_id)  ,
            'event' => new EventResource($this->event_id)  ,
            'created_at' => $this->created_at ,
            'updated_at' => $this->updated_at ,
         ];

    }
}
