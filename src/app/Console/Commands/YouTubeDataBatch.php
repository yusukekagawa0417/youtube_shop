<?php

namespace App\Console\Commands;

use App\Api\YouTube;
use Illuminate\Console\Command;

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
        $youtube = new YouTube();
        $video_ids = $youtube->getVideoIdsByChannelIds(config('const.channel_ids'));
        $video_detail_infos = $youtube->getVideoDetailInfosByVideoIds($video_ids);
        $amazon_urls = [];
        foreach ($video_detail_infos as $video_detail_info) {
            $descriptions = explode("\n", $video_detail_info['snippet']['description']);
            foreach ($descriptions as $description) {
                if (preg_match ('/^https?:\/\/amzn.to\//', $description)) {
                    $amazon_urls[] = $description;
                }
            }
        }

        $asins = [];
        foreach ($amazon_urls as $amazon_url) {
            $headers = get_headers($amazon_url);
            foreach ($headers as $header) {
                preg_match('/creativeASIN=(\w+)/', $header, $match);
                if (!empty($match)) {
                    $asins[] = $match[1];
                }
            }
        }
    }
}
