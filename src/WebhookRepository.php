<?php

namespace SteadfastCollective\Digitickets;

use Illuminate\Support\Facades\URL;
use SteadfastCollective\Digitickets\ApiRequestor;

class WebhookRepository
{
    private static $baseUrl = "hooks/";

    public static function index()
    {
        return resolve(ApiRequestor::class)->get(self::$baseUrl, []);
    }

    public static function create($event, $targetUrl = null)
    {
        if ($targetUrl === null) {
            $targetUrl = URL::to("/" . config('digitickets.path') . "/webhook");
        }

        return resolve(ApiRequestor::class)->post(self::$baseUrl, [
            "event" => $event,
            "target_url" => $targetUrl,
        ]);
    }

    public static function delete($id)
    {
        return resolve(ApiRequestor::class)->delete(self::$baseUrl . $id, []);
    }
}
