<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProductFilterResource extends JsonResource
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
            'category_name' => $this->category_name ?? $this->categories->implode('name', ','),
            'price' => $this->price,
            'discounted_price' => $this->discounted_price,
            'discount_percentage' => floor((1 - ($this->discounted_price / $this->price) ) * 100) . '%' ,
            'description' => $this->description,
            'colors' => explode(',', $this->colors),
            'sizes' => explode(',', $this->sizes),
            'stock_quantity' => $this->stock_q,
            'created_at' => $this->created_at->diffforhumans(),
            'web_route' => route( 'single-product', $this->id )
        ];
    }
}
