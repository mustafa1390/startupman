<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use App\Http\Resources\UserResource;
use App\Http\Resources\EventResource;
use Illuminate\Http\Resources\Json\JsonResource;

class LotteryUserResource extends JsonResource
{

    public function toArray(Request $request): array
    {

        return [
            'id' => $this->id,
            'title' => $this->title ,
            'event_id' => $this->event_id ,
            'user_id' => $this->user_id ,
            'user' => new UserResource($this->user)  ,
            'event' => new EventResource($this->event_id)  ,
            'created_at' => $this->created_at ,
            'updated_at' => $this->updated_at ,
         ];
    }
}
