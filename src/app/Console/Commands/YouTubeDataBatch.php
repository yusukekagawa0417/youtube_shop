<?php

namespace App\Console\Commands;

use App\Api\YouTube;
use App\Models\Evaluation;
use App\Models\Genre;
use App\Models\Product;
use Carbon\Carbon;
use Exception;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Log;

class YouTubeDataBatch extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:youtube';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'YouTube動画情報取得・保存';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        DB::beginTransaction();
        try {
            // YouTube動画情報取得
            $youtube = new YouTube();
            $video_ids = $youtube->getVideoIdsByChannelIds(config('const.channel_ids'));
            $video_detail_infos = $youtube->getVideoDetailInfosByVideoIds($video_ids);

            foreach ($video_detail_infos as $video_detail_info) {
                // 概要欄取得
                $descriptions = explode("\n", $video_detail_info['snippet']['description']);
                foreach ($descriptions as $description) {
                    // 概要欄に含まれるamazonアフィリのurlにアクセス
                    if (preg_match ('/^https?:\/\/amzn.to\//', $description)) {
                        $headers = get_headers($description);
                        foreach ($headers as $header) {
                            // amazonの商品詳細ページurlからASINを取得
                            preg_match('/creativeASIN=(\w+)/', $header, $match);
                            if (!empty($match)) {
                                // TODO: ASINからpaapiで商品情報（ジャンル含む）を取得
                                // $item_info = $this->executeAwsV4($match[1]);

                                    // TODO: 商品情報を保存（paapi使えるようになるまでは仮データを保存）
                                    $product = Product::where('asin', $match[1])->first();
                                    if (empty($product)) {
                                        $product_new = Product::create([
                                            'asin' => $match[1],
                                            'name' => 'Unregistered',
                                            'description' => 'Unregistered',
                                            'url' => 'Unregistered',
                                            'image' => 'Unregistered',
                                        ]);
                                        $product = $product_new;
                                    }

                                    // 評価を保存
                                    // 同じチャンネル、かつ、同じ商品における評価が既に存在する場合は上書き保存（理由は下記1or2）
                                    // 1. 経時変化する評価データの更新
                                    // 2. 一つのチャンネルで複数回紹介されたものの過大評価防止
                                    $evaluation = $product->evaluations()
                                                          ->where('channel', $video_detail_info['snippet']["channelId"])
                                                          ->first();
                                    $evaluation_data = [
                                        'good_number' => $video_detail_info['statistics']['likeCount'],
                                        'bad_number' => $video_detail_info['statistics']['dislikeCount'],
                                        'watching_times' => $video_detail_info['statistics']['viewCount'],
                                        'channel' => $video_detail_info['snippet']["channelId"],
                                    ];
                                    if (empty($evaluation)) {
                                        $product->evaluations()->create($evaluation_data);
                                    } else {
                                        $evaluation->update($evaluation_data);
                                    }

                                    // TODO: ジャンルを保存（paapi使えるようになるまでは仮データを保存）
                                    // TODO: 多分複数ジャンル存在するためおいおいループで処理（多対多処理の箇所まで含めて）
                                    // $genre = Genre::where('name', '本')->first();
                                    // if (empty($genre)) {
                                    //     $genre_new = Genre::create([
                                    //         'name' => '本',
                                    //         'parent_id' => '1',
                                    //     ]);
                                    //     $genre = $genre_new;
                                    // }
                                    // if (!empty($product_new)) {
                                    //     $product->genres()->attach(
                                    //         ['genre_id' => $genre->id],
                                    //         ['product_id' => $product->id],
                                    //         ['created_at' => Carbon::now()],
                                    //         ['updated_at' => Carbon::now()]
                                    //     );
                                    // }
                            }
                        }
                    }
                }
            }
        } catch(Exception $e) {
            DB::rollback();
            Log::error($e);
            return;
        }
        DB::commit();
    }

    public function executeAwsV4($asin)
    {
        // TODO: paapiを叩くコードを作成（scratchpadで生成したものを貼り付け）
    }
}
