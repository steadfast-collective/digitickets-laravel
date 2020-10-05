<?php

namespace SteadfastCollective\Digitickets\Repositories;

use Illuminate\Support\Facades\URL;
use SteadfastCollective\Digitickets\ApiRequestor;
use SteadfastCollective\Digitickets\Contracts\WebhookRepository as Contract;

class WebhookRepository implements Contract
{
    private static $baseUrl = "hooks/";

    public static function index(array $filters = [])
    {
        return resolve(ApiRequestor::class)->get(self::$baseUrl, $filters);
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
