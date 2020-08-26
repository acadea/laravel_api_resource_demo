<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CompanyResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
//        dd($this->resource->whenLoaded('users'));
//        dump($this->resource->whenLoaded('users'));

        return [
            'id' => $this->id,
            'users' => UserResource::collection($this->whenLoaded('users')),
        ];


    }
}
