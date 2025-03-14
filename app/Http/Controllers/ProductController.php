<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::where('is_active', true)->get();
        return view('page.products', [
            'titlePage' => 'Продукция',
            'products' => $products,
        ]);
    }

    public function showOrBrand($id)
    {
        $products = Product::where('is_active', true)->where('brand_id', $id)->get();
        return view('page.brand-product', [
            'titlePage' => 'Все записи',
            'products' => $products,
        ]);
    }
}
