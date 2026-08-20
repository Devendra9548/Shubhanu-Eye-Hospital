<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Cache;

class InstagramService
{
    public function getPosts($limit = 6)
    {
        return Cache::remember(
            'instagram_feed',
            now()->addHours(1),
            function () use ($limit) {

                $userId = config('services.instagram.user_id');
                $accessToken = config('services.instagram.access_token');

                $response = Http::get(
                    "https://graph.instagram.com/{$userId}/media",
                    [
                        'fields' => 'id,caption,media_type,media_url,thumbnail_url,permalink,timestamp',
                        'access_token' => $accessToken,
                        'limit' => $limit,
                    ]
                );

                if ($response->failed()) {
                    \Log::error('Instagram API Error', [
                        'response' => $response->json(),
                    ]);

                    return [];
                }

                return $response->json('data', []);
            }
        );
    }
}