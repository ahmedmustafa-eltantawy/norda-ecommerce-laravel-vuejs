<?php

namespace App\Models;

use Illuminate\Pipeline\Pipeline;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;

    protected $with = ['reviews'];

    /**
     * Get all of the caetories for the Product.
     */
    public function categories()
    {
        return $this->morphToMany(Category::class, 'categorable');
    }

    /**
     * Get all of the reviews for the Product.
     */
    public function reviews()
    {
        return $this->hasMany(Review::class, 'product_id');
    }

    /**
     * Set the discount price.
     *
     * @param  string  $value
     * @return void
     */
    public function getDiscountedPriceAttribute($value)
    {
        return ceil($this->price * (1 - ($value / $this->price)));
    }

    /**
     * shop page products filteration.
     *
     */
    public static function shopProductsFilteration()
    {
        return  app( Pipeline::class )
                ->send( Product::query() )
                ->through( [
                    \App\QueryFilter\Shop\Size::class,
                    \App\QueryFilter\Shop\Color::class,
                    \App\QueryFilter\Shop\Price::class,
                    \App\QueryFilter\Shop\RefineBy::class,
                    \App\QueryFilter\Shop\Category::class,
                ])
                ->thenReturn()
                ->paginate( 12 )
                ->withQueryString();
    }
}
