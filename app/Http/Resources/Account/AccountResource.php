<?php

namespace App\Http\Resources\Account;

use Illuminate\Http\Resources\Json\Resource;

class AccountResource extends Resource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'username' => $this->username,
            'name' => $this->name,
            'email' => $this->email,
            'mobile' => $this->mobile,
            'telephone' => $this->telephone,
            'address' => $this->address,
            'contact_name' => $this->contact_name,
            'avatarUrl' => $this->avatar //get correct url for avatar
        ];
    }
}
