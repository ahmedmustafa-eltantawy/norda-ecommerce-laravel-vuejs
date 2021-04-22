<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
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
            'id' => $this->id,
            'name' => $this->name,
            'price' => $this->price,
            'description' => $this->description,
            'colors' => explode(',', $this->colors),
            'sizes' => explode(',', $this->sizes),
            'stock_quantity' => $this->stock_q,
            'categories' => $this->categories->implode('name', ',')
        ];
    }
}
