<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    /**
     * Get all of the caetories for the Product.
     */
    public function categories()
    {
        return $this->morphToMany(Category::class, 'categorable');
    }
}
