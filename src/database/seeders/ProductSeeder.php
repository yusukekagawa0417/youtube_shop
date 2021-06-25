<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * データベースに対するデータ設定の実行
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'asin' => 'B079VNN2FX',
                'name' => '自分の中に毒を持て',
                'description' => '長年愛されてきたロングセラーが、満を持しての新装刊。 文字が大きく読みやすくなり、カラー口絵付きで、パワーアップして生...',
                'url' => 'https://www.amazon.co.jp/gp/product/B079VNN2FX/ref=as_li_tl?ie=UTF8&camp=247&creative=1211&creativeASIN=B079VNN2FX&linkCode=as2&tag=kagaway-22&linkId=6a4af7dbd4d106cba81e7d21b0152ebf',
                'image' => '//ws-fe.amazon-adsystem.com/widgets/q?_encoding=UTF8&MarketPlace=JP&ASIN=B079VNN2FX&ServiceVersion=20070822&ID=AsinImage&WS=1&Format=_SL250_&tag=kagaway-22',
            ],
            [
                'asin' => 'B01AHEL75K',
                'name' => 'ゼロ秒思考',
                'description' => '１０万部突破のベストセラー『ゼロ秒思考』のメモ書きを実践し、思考力を磨いた読者でも簡単に解決できない課題が、行動力や...',
                'url' => 'https://www.amazon.co.jp/gp/product/B00HQ6O7BO/ref=as_li_tl?ie=UTF8&camp=247&creative=1211&creativeASIN=B00HQ6O7BO&linkCode=as2&tag=kagaway-22&linkId=772119d8cf2295dd66dc00e19071348a',
                'image' => '//ws-fe.amazon-adsystem.com/widgets/q?_encoding=UTF8&MarketPlace=JP&ASIN=B00HQ6O7BO&ServiceVersion=20070822&ID=AsinImage&WS=1&Format=_SL250_&tag=kagaway-22',
            ],
            [
                'asin' => '4478025819',
                'name' => '嫌われる勇気',
                'description' => '"「あの人」の期待を満たすために生きてはいけない――【対人関係の悩み、人生の悩みを100%消し去る〝勇気〟の対話篇】世界的...',
                'url' => 'https://www.amazon.co.jp/gp/product/B00H7RACY8/ref=as_li_tl?ie=UTF8&camp=247&creative=1211&creativeASIN=B00H7RACY8&linkCode=as2&tag=kagaway-22&linkId=a03c1f9ce659324d4b6d91da5835364b',
                'image' => '//ws-fe.amazon-adsystem.com/widgets/q?_encoding=UTF8&MarketPlace=JP&ASIN=B00H7RACY8&ServiceVersion=20070822&ID=AsinImage&WS=1&Format=_SL250_&tag=kagaway-22',
            ],
            [
                'asin' => 'B00KFB5DJC',
                'name' => '7つの習慣',
                'description' => '全世界4,000万部、国内240万部を超え、今も読み続けられるビジネス書のベストセラー『7つの習慣』は、人生哲学の定番として...',
                'url' => 'https://www.amazon.co.jp/gp/product/B00KFB5DJC/ref=as_li_tl?ie=UTF8&camp=247&creative=1211&creativeASIN=B00KFB5DJC&linkCode=as2&tag=kagaway-22&linkId=6eed84f2817f4665431328d86979d881',
                'image' => '//ws-fe.amazon-adsystem.com/widgets/q?_encoding=UTF8&MarketPlace=JP&ASIN=B00KFB5DJC&ServiceVersion=20070822&ID=AsinImage&WS=1&Format=_SL250_&tag=kagaway-22',
            ],
            [
                'asin' => 'B01AHEL75K',
                'name' => 'ゼロ秒思考',
                'description' => '１０万部突破のベストセラー『ゼロ秒思考』のメモ書きを実践し、思考力を磨いた読者でも簡単に解決できない課題が、行動力や...',
                'url' => 'https://www.amazon.co.jp/gp/product/B00HQ6O7BO/ref=as_li_tl?ie=UTF8&camp=247&creative=1211&creativeASIN=B00HQ6O7BO&linkCode=as2&tag=kagaway-22&linkId=772119d8cf2295dd66dc00e19071348a',
                'image' => '//ws-fe.amazon-adsystem.com/widgets/q?_encoding=UTF8&MarketPlace=JP&ASIN=B00HQ6O7BO&ServiceVersion=20070822&ID=AsinImage&WS=1&Format=_SL250_&tag=kagaway-22',
            ],
            [
                'asin' => '4478025819',
                'name' => '嫌われる勇気',
                'description' => '"「あの人」の期待を満たすために生きてはいけない――【対人関係の悩み、人生の悩みを100%消し去る〝勇気〟の対話篇】世界的...',
                'url' => 'https://www.amazon.co.jp/gp/product/B00H7RACY8/ref=as_li_tl?ie=UTF8&camp=247&creative=1211&creativeASIN=B00H7RACY8&linkCode=as2&tag=kagaway-22&linkId=a03c1f9ce659324d4b6d91da5835364b',
                'image' => '//ws-fe.amazon-adsystem.com/widgets/q?_encoding=UTF8&MarketPlace=JP&ASIN=B00H7RACY8&ServiceVersion=20070822&ID=AsinImage&WS=1&Format=_SL250_&tag=kagaway-22',
            ],
            [
                'asin' => '4478025819',
                'name' => '嫌われる勇気',
                'description' => '"「あの人」の期待を満たすために生きてはいけない――【対人関係の悩み、人生の悩みを100%消し去る〝勇気〟の対話篇】世界的...',
                'url' => 'https://www.amazon.co.jp/gp/product/B00H7RACY8/ref=as_li_tl?ie=UTF8&camp=247&creative=1211&creativeASIN=B00H7RACY8&linkCode=as2&tag=kagaway-22&linkId=a03c1f9ce659324d4b6d91da5835364b',
                'image' => '//ws-fe.amazon-adsystem.com/widgets/q?_encoding=UTF8&MarketPlace=JP&ASIN=B00H7RACY8&ServiceVersion=20070822&ID=AsinImage&WS=1&Format=_SL250_&tag=kagaway-22',
            ],
            [
                'asin' => 'B00KFB5DJC',
                'name' => '7つの習慣',
                'description' => '全世界4,000万部、国内240万部を超え、今も読み続けられるビジネス書のベストセラー『7つの習慣』は、人生哲学の定番として...',
                'url' => 'https://www.amazon.co.jp/gp/product/B00KFB5DJC/ref=as_li_tl?ie=UTF8&camp=247&creative=1211&creativeASIN=B00KFB5DJC&linkCode=as2&tag=kagaway-22&linkId=6eed84f2817f4665431328d86979d881',
                'image' => '//ws-fe.amazon-adsystem.com/widgets/q?_encoding=UTF8&MarketPlace=JP&ASIN=B00KFB5DJC&ServiceVersion=20070822&ID=AsinImage&WS=1&Format=_SL250_&tag=kagaway-22',
            ],
            [
                'asin' => 'B01AHEL75K',
                'name' => 'ゼロ秒思考',
                'description' => '１０万部突破のベストセラー『ゼロ秒思考』のメモ書きを実践し、思考力を磨いた読者でも簡単に解決できない課題が、行動力や...',
                'url' => 'https://www.amazon.co.jp/gp/product/B00HQ6O7BO/ref=as_li_tl?ie=UTF8&camp=247&creative=1211&creativeASIN=B00HQ6O7BO&linkCode=as2&tag=kagaway-22&linkId=772119d8cf2295dd66dc00e19071348a',
                'image' => '//ws-fe.amazon-adsystem.com/widgets/q?_encoding=UTF8&MarketPlace=JP&ASIN=B00HQ6O7BO&ServiceVersion=20070822&ID=AsinImage&WS=1&Format=_SL250_&tag=kagaway-22',
            ],
            [
                'asin' => '4478025819',
                'name' => '嫌われる勇気',
                'description' => '"「あの人」の期待を満たすために生きてはいけない――【対人関係の悩み、人生の悩みを100%消し去る〝勇気〟の対話篇】世界的...',
                'url' => 'https://www.amazon.co.jp/gp/product/B00H7RACY8/ref=as_li_tl?ie=UTF8&camp=247&creative=1211&creativeASIN=B00H7RACY8&linkCode=as2&tag=kagaway-22&linkId=a03c1f9ce659324d4b6d91da5835364b',
                'image' => '//ws-fe.amazon-adsystem.com/widgets/q?_encoding=UTF8&MarketPlace=JP&ASIN=B00H7RACY8&ServiceVersion=20070822&ID=AsinImage&WS=1&Format=_SL250_&tag=kagaway-22',
            ],
        ]);
    }
}
