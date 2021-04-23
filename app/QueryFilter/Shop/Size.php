<?php

namespace App\QueryFilter\Shop;


class Size extends FilterAbstract
{
    protected function applyFilter( $builder )
    {
        return $builder->where('sizes','LIKE', '%'.request()->size.'%' );
    }

}
