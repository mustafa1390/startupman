<?php

namespace App\Http\Resources\Api\User;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class AuthenticationResource extends JsonResource
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
            'user_id' => $this->user_id ,
            'status' => $this->status ,
            'email' => $this->email ,
            'email_verify' => $this->email_verify ,
            'email_code_verify' => $this->email_code_verify ,
            'tell' => $this->tell ,
            'tell_verify' => $this->tell_verify ,
            'tell_code_verify' => $this->tell_code_verify ,
            'cardmelli' => $this->cardmelli ,
            'cardmelli_verify' => $this->cardmelli_verify ,
            'codmelli' => $this->codmelli ,
            'codmelli_verify' => $this->codmelli_verify ,
            'selfi' => $this->selfi ,
            'selfi_verify' => $this->selfi_verify ,
            'document' => $this->document ,
            'document_verify' => $this->document_verify ,
            'step' => number_step_auth($this->id),

        ];
    }
}
