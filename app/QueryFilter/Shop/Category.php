<?php

namespace App\QueryFilter\Shop;


class Category extends FilterAbstract
{
    protected function applyFilter( $builder )
    {
        return $builder->join('categorables', 'products.id', '=', 'categorables.categorable_id')
            ->join('categories', 'categories.id', '=', 'categorables.category_id')
            ->whereIn('categories.name', $this->queryString())
            ->select('products.*', 'categories.name as category_name' );
    }

}
