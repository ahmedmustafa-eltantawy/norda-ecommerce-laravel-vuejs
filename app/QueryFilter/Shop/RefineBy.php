<?php

namespace App\QueryFilter\Shop;

use Illuminate\Support\Str;

class RefineBy extends FilterAbstract
{
    protected function applyFilter( $builder )
    {
        for( $i = 0; $i < count($this->queryString()); $i++ ){
            $request = Str::camel( $this->queryString()[$i] );
            $builder = $this->$request($builder);
        }

        return $builder;
    }

    public function onSale($builder)
    {
        return $builder->whereRaw('discounted_price < price');
    }

    public function new($builder)
    {
        $date = \Carbon\Carbon::now();
        $today = $date->format('Y-m-d');
        $lastMonth =  $date->sub(7, 'days')->format('Y-m-d');

        return $builder->whereBetween('products.created_at', [ $lastMonth , $today ] );
    }

}
