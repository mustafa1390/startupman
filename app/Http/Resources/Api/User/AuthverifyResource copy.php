<?php

namespace App\Http\Resources\Api\User;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class AuthverifyResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id ,
            'tell' => $this->tell ,
            'remember_token' => $this->remember_token ,
            'status' => 'success',
        ];
    }
}
