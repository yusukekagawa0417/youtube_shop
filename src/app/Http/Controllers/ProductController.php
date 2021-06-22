<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Contracts\View\Factory;
use Illuminate\View\View;

class ProductController extends Controller
{
    /**
     * 商品一覧
     * 
     * @return Factory|View
     */
    public function index ()
    {
        $products = Product::all();
        return view('product.index', compact('products'));
    }
}
