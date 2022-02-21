<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        // return parent::toArray($request);
        return[
            'id' => $this->id,
            'name' => $this->name,
            'price' => $this->price,
            'stock' => $this->stock == 1 ? 'Available':'Out of Stock',
            'discount' => $this->discount_percent,
            'selling_price' => $this->selling_price,
            'image' => asset($this->photo),
            'description' => $this->description,
            'category_id'=> $this->category_id,
        ];
    }
}
