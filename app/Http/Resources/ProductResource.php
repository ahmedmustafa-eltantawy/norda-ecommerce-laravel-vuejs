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

            $this->mergeWhen( $this->discounted_price> 0 , [
                'discounted_price' => $this->discounted_price,
                'discount_percentage' => floor((1 - ($this->discounted_price / $this->price) ) * 100) . '%' ,
            ]),

            $this->mergeWhen( ! \Route::is('api.best-seller') , [
                'description' => isset($this->description) ? $this->description : '',
                'colors' => isset($this->colors) ? explode(',', $this->colors) : '',
                'sizes' => isset($this->sizes) ? explode(',', $this->sizes) : '',
                'stock_quantity' => isset($this->stock_q) ? $this->stock_q : '',
                'categories' => isset($this->categories) ? $this->categories->implode('name', ',') : ''
            ]),

            $this->mergeWhen( \Route::is('api.best-seller') , [
                'category_name' => $this->category_name,
                'total_sales' => $this->total_sales
            ]),

        ];
    }
}
