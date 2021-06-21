<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EvaluationSeeder extends Seeder
{
    /**
     * データベースに対するデータ設定の実行
     *
     * @return void
     */
    public function run()
    {
        DB::table('evaluations')->insert([
            'product_id' => '1',
            'good_number' => '7829',
            'bad_number' => '35',
            'watching_times' => '100124',
        ]);
    }
}
