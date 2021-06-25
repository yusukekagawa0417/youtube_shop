<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GenreSeeder extends Seeder
{
    /**
     * データベースに対するデータ設定の実行
     *
     * @return void
     */
    public function run()
    {
        DB::table('genres')->insert([
            [
                'name' => '本',
                'parent_id' => '1',
            ],
            [
                'name' => '自己啓発',
                'parent_id' => '1',
            ],
        ]);
    }
}
