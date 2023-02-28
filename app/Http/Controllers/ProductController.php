<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index() {
        return view('product');
    }

    public function product1() {
        return view('detail-product', ['category' => 'produk1']);
    }

    public function product2()
    {
        return view('detail-product', ['category' => 'produk2']);
    }

    public function product3()
    {
        return view('detail-product', ['category' => 'produk3']);
    }
}
