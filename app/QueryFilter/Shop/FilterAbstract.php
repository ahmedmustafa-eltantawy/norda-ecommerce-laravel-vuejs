<?php

use Closure;
use Illuminate\Support\Str;

abstract class FilterAbstract
{

    public function handle( $request, Closure $next )
    {
        if( ! request()->has(  $this->filterName() ) ){
            return $next( $request );
        }

        return $this->applyFilter( $next( $request ) );

    }

    protected function filterName()
    {
        return Str::snake( class_basename( $this ) );
    }

    protected abstract function applyFilter( $builder );

}
