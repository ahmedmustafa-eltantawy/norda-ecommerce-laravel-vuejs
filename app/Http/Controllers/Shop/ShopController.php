<?php

namespace App\Http\Controllers\Shop;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function home()
    {
        return view('front.home');
    }

    public function shop()
    {
        return view('front.shop');
    }

    public function singleProduct()
    {
        return view('front.single-product');
    }
}
