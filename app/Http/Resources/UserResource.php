<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Http\Resources\MissingValue;

class UserResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        $append = [];

        $company = $this->whenLoaded('company');

        if(!($company instanceof MissingValue)){
            data_set($append, 'company', new CompanyResource($company));
        }

        return array_merge([
            'id' => $this->id,

        ], $append);
    }
}
