<?php

namespace App\Http\Resources\Account;

use Illuminate\Http\Resources\Json\ResourceCollection;

class AccountCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'data' => $this->collection->transform(function($item){
                return [
                    'username' => $item->username,
                    'name' => $item->name,
                    'email' => $item->email,
                    'mobile' => $item->mobile,
                    'telephone' => $item->telephone,
                    'address' => $item->address,
                    'contact_name' => $item->contact_name,
                    'avatarUrl' => $item->avatar //get correct url for avatar
                ];
            }),
        ];
    }
}
