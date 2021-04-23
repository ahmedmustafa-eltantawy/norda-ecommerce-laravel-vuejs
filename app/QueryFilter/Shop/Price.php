<?php

namespace App\QueryFilter\Shop;


class Price extends FilterAbstract
{
    protected function applyFilter( $builder )
    {
        return $builder->whereBetween('price', $this->queryString() );
    }

}
