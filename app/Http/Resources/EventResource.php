<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class EventResource extends JsonResource
{


    public function toArray($request)
    {

        return [
            'id' => $this->id,
            'title' => $this->title ,
            'kh' => $this->kh ,
            'text' => $this->text ,
            'date_text' => $this->date_text , 
            'created_at' => $this->created_at ,
            'updated_at' => $this->updated_at ,
         ];

    }
}
