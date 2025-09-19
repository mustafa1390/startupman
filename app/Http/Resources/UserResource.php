<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
{

    public function toArray($request)
    {

        return [
            'id' => $this->id,
            'fname' => $this->fname ,
            'father' => $this->father ,
            'codmelli' => $this->codmelli ,
            'tell' => $this->tell ,
            'birthday' => $this->birthday , 
            'created_at' => $this->created_at ,
            'updated_at' => $this->updated_at ,
         ];

    }
}
