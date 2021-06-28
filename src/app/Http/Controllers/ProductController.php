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

        foreach ($products as $product) {
            $product->watching_times = ($product->evaluations()->sum('watching_times'));
            $product->good_number = ($product->evaluations()->sum('good_number'));
            $products_with_evaluations[] = $product;
        }

        foreach ($products_with_evaluations as $key => $value) {
            $good_number[$key] = $value['good_number'];
        }
        array_multisort($good_number, SORT_DESC, $products_with_evaluations);

        return view('product.index', compact('products_with_evaluations'));
    }

    /**
     * 商品詳細
     * 
     * @param Product $product
     * @return Factory|View
     */
    public function show (Product $product)
    {
        $product->watching_times = ($product->evaluations()->sum('watching_times'));
        $product->good_number = ($product->evaluations()->sum('good_number'));

        return view('product.show', compact('product'));
    }
}
