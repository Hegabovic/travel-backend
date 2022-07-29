<?php

namespace App\Http\Resources;

use App\Models\Client;
use App\Models\Product;
use Illuminate\Http\Resources\Json\JsonResource;

class BookingsResource extends JsonResource
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
            "booking_id" => $this->id,
            "Client_details" => new ClientsResource($this->client) ,
            "product_details" => new ProductsResource($this->product),
            "booked_on" => $this->booked_on
        ];
    }
}
