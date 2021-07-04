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
                'good_number' => '7929',
                'bad_number' => '35',
                'watching_times' => '110124',
            ],
            [
                'product_id' => '1',
                'good_number' => '5110',
                'bad_number' => '1',
                'watching_times' => '300124',
            ],
            [
                'product_id' => '2',
                'good_number' => '233',
                'bad_number' => '12',
                'watching_times' => '15830',
            ],
            [
                'product_id' => '3',
                'good_number' => '2840',
                'bad_number' => '12',
                'watching_times' => '52909',
            ],
            [
                'product_id' => '4',
                'good_number' => '1800',
                'bad_number' => '12',
                'watching_times' => '594892',
            ],
            [
                'product_id' => '5',
                'good_number' => '3332',
                'bad_number' => '12',
                'watching_times' => '12040',
            ],
            [
                'product_id' => '6',
                'good_number' => '13213',
                'bad_number' => '12',
                'watching_times' => '215230',
            ],
            [
                'product_id' => '7',
                'good_number' => '62211',
                'bad_number' => '12',
                'watching_times' => '992021',
            ],
            [
                'product_id' => '8',
                'good_number' => '97738',
                'bad_number' => '12',
                'watching_times' => '503010',
            ],
            [
                'product_id' => '9',
                'good_number' => '997',
                'bad_number' => '12',
                'watching_times' => '17123',
            ],
            [
                'product_id' => '10',
                'good_number' => '159',
                'bad_number' => '12',
                'watching_times' => '4812',
            ],
            [
                'product_id' => '10',
                'good_number' => '489',
                'bad_number' => '12',
                'watching_times' => '9900',
            ],
            [
                'product_id' => '11',
                'good_number' => '801',
                'bad_number' => '132',
                'watching_times' => '12840',
            ],
            [
                'product_id' => '12',
                'good_number' => '9957',
                'bad_number' => '712',
                'watching_times' => '73957',
            ],
        ]);
    }
}
