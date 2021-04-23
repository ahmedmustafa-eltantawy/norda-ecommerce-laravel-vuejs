<?php

namespace App\Models;

use Illuminate\Pipeline\Pipeline;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

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
                    \App\QueryFilters\Shop\Size::class,
                    \App\QueryFilters\Shop\Color::class,
                    \App\QueryFilters\Shop\Price::class,
                    \App\QueryFilters\Shop\RefineBy::class,
                    \App\QueryFilters\Shop\Category::class,
                ])
                ->thenReturn()
                ->paginate( 12 )
                ->withQueryString();
    }
}
