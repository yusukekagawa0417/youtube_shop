<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class GenreProductSeeder extends Seeder
{
    /**
     * データベースに対するデータ設定の実行
     *
     * @return void
     */
    public function run()
    {
        $products = Product::all();
        foreach ($products as $product) {
            $product->genres()->attach(1);
            $product->genres()->attach(2);
        }
    }
}
