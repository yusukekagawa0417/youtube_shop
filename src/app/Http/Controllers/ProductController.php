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

    /**
     * 商品詳細
     * 
     * @param Product $product
     * @return Factory|View
     */
    public function show (Product $product)
    {
        return view('product.show', compact('product'));
    }
}
