<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProductReviewsResource extends JsonResource
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
            'review' => $this->review,
            'rate' => $this->rate,
            'created_at' => $this->created_at->diffforhumans(),
            'reviewer' => $this->user->name,
        ];
    }
}
