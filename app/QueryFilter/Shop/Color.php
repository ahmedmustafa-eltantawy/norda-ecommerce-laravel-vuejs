<?php

namespace App\QueryFilter\Shop;


class Color extends FilterAbstract
{
    protected function applyFilter( $builder )
    {
        return $builder->where('colors','LIKE', '%'.request()->color.'%' );
    }

}
