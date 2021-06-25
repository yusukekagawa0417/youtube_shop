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
            [
                'product_id' => '1',
                'good_number' => '7829',
                'bad_number' => '35',
                'watching_times' => '100124',
            ],
            [
                'product_id' => '1',
                'good_number' => '5110',
                'bad_number' => '1',
                'watching_times' => '300124',
            ],
            [
                'product_id' => '2',
                'good_number' => '133',
                'bad_number' => '12',
                'watching_times' => '15330',
            ],
            [
                'product_id' => '3',
                'good_number' => '133',
                'bad_number' => '12',
                'watching_times' => '15330',
            ],
            [
                'product_id' => '4',
                'good_number' => '133',
                'bad_number' => '12',
                'watching_times' => '15330',
            ],
            [
                'product_id' => '5',
                'good_number' => '133',
                'bad_number' => '12',
                'watching_times' => '15330',
            ],
            [
                'product_id' => '6',
                'good_number' => '133',
                'bad_number' => '12',
                'watching_times' => '15330',
            ],
            [
                'product_id' => '7',
                'good_number' => '133',
                'bad_number' => '12',
                'watching_times' => '15330',
            ],
            [
                'product_id' => '8',
                'good_number' => '133',
                'bad_number' => '12',
                'watching_times' => '15330',
            ],
            [
                'product_id' => '9',
                'good_number' => '133',
                'bad_number' => '12',
                'watching_times' => '15330',
            ],
            [
                'product_id' => '10',
                'good_number' => '133',
                'bad_number' => '12',
                'watching_times' => '15330',
            ],
            [
                'product_id' => '10',
                'good_number' => '133',
                'bad_number' => '12',
                'watching_times' => '15330',
            ],
        ]);
    }
}
