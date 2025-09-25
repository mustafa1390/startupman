<?php

namespace App\Http\Resources\Api\User;

use Illuminate\Http\Request;
use App\Http\Resources\Bank\BankAccountResource;
use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\Api\User\AuthenticationResource;

class ProfileResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray($request)
    {

        return [
            'id' => $this->id,
            'name' => $this->name ,
            'email' => $this->email ,
            'tell' => $this->tell ,
            'image' => $this->image ,
            'remember_token' => $this->remember_token ,
            'authentication' => new AuthenticationResource($this->authentication)  , 

        ];
    }
}
