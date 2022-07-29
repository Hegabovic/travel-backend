<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProductsResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            "title" => $this->title,
            "type" => $this->type,
            "description" => $this->description,
            "is_available" => $this->is_available,
            "purchasing_number" => $this->purchasing_number,
            "capacity" => $this->capacity,
        ];
    }
}
