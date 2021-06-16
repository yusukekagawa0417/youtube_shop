<?php

namespace App\Api;

class YouTube
{
    public $youtube;
 
    public function __construct()
    {
        $this->youtube = new \Google_Service_YouTube($this->getClient());
    }
 
    public function getClient()
    {
        $client = new \Google_Client();
        $client->setApplicationName("YouTubeShop");
        $client->setDeveloperKey(config('const.youtube_api_key'));
        return $client;
    }
 
    public function getVideoIdsByChannelIds($channel_ids)
    {
        $video_ids = [];
        foreach ($channel_ids as $channel_id) {
            $part = [
                'snippet',
            ];
            $params = [
                'channelId' => $channel_id,
                'maxResults' => 50,
                'regionCode' => 'JP',
            ];
            $search_results = $this->youtube->search->listSearch($part, $params);
            foreach ($search_results['items'] as $search_result) {
                if (!empty($search_result['id']['videoId'])) {
                    $video_ids[] = $search_result['id']['videoId'];
                }
            }
        }
        return $video_ids;
    }

    public function getVideoDetailInfosByVideoIds($video_ids)
    {
        $video_detail_infos = [];
        foreach ($video_ids as $video_id) {
            $part = [
                'snippet',
            ];
            $params = [
                'id' => $video_id,
                'maxResults' => 50,
                'regionCode' => 'JP',
            ];
            $videos_results = $this->youtube->videos->listVideos($part, $params);
            foreach ($videos_results['items'] as $videos_result) {
                $video_detail_infos[] = $videos_result;
            }
        }

        return $video_detail_infos;
    }
}