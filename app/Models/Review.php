<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    protected $table = "product_reviews";

    /**
     * The reviews that belong to the product.
     */
    public function products()
    {
        return $this->belongsTo(Products::class);
    }

    /**
     * The reviews that belong to the user.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
