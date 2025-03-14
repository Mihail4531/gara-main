<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function index()
    {
        $brands = Brand::where('is_active', true)->get();
        return view('page.main', [
            'titlePage' => 'Категории',
            'brands' => $brands,
        ]);
    }
    public function show()
    {
        $brands = Brand::where('is_active', true)->get();
        return view('page.brand', [
            'titlePage' => 'Категории',
            'brands' => $brands,
        ]);
    }
}
