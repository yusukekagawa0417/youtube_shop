<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\Factory;
use Illuminate\View\View;

class ProductController extends Controller
{
    /**
     * 商品一覧
     * 
     * @param SearchProductRequest $request
     * @return Factory|View
     */
    public function index (SearchProductRequest $request)
    {
        $data = $request->validated();

        return view('product.index', compact('data'));
    }
}
