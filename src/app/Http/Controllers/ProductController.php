<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use App\Models\Product;
use Illuminate\Contracts\View\Factory;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use Symfony\Component\HttpFoundation\Response;

class ProductController extends Controller
{
    /**
     * 商品一覧
     * 
     * @return Factory|View
     */
    public function index ()
    {
        // 商品データ、ジャンルデータ取得
        if (isset($_GET['genre'])) {
            $genre_id = $_GET['genre'];
            $genre_exists = DB::table('genres')->where('id', $genre_id)->exists();
            if (!$genre_exists) {
                abort(Response::HTTP_NOT_FOUND);
            }
            $genre_name = DB::table('genres')->find($genre_id)->name;
            $products = Product::whereHas('genres', function($query) use ($genre_id) {
                $query->where('id', $genre_id);
            })->get();
        } else {
            $genre_name = "";
            $products = Product::all();
        }

        // 商品データに評価データを結合
        $products_with_evaluations = [];
        foreach ($products as $product) {
            if ($product->name !== 'Unregistered') {
                $watching_times = $product->evaluations()->sum('watching_times');
                $good_number = $product->evaluations()->sum('good_number');
                $product->watching_times = ((int)$watching_times);
                $product->good_number = ((int)$good_number);
                $product->good_number_rate = ((int)$good_number / (int)$watching_times);
                $products_with_evaluations[] = $product;
            }
        }

        // 並び替え
        if (isset($_GET['order'])) {
            $order = $_GET['order'];
        } else {
            $order = 'good_number';
        }
        if (!empty($products_with_evaluations)) {
            foreach ($products_with_evaluations as $key => $value) {
                $array[$key] = $value[$order];
            }
            array_multisort($array, SORT_DESC, $products_with_evaluations);    
        }

        return view('product.index', compact('products_with_evaluations', 'order', 'genre_name'));
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
