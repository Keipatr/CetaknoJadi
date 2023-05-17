<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class productController extends Controller
{
    public function index()
    {
        $products = Product::where('status_delete', 0)->get();

        return view('index', compact('products'));
    }
}
