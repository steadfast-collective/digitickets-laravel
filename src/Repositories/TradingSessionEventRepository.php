<?php

namespace SteadfastCollective\Digitickets\Repositories;

use SteadfastCollective\Digitickets\ApiRequestor;

class TradingSessionEventRepository
{
    private static $baseUrl = "tradingsessionevents/";

    public static function index($filters)
    {
        return resolve(ApiRequestor::class)->get(self::$baseUrl, $filters);
    }

    public static function create($data)
    {
        return resolve(ApiRequestor::class)->post(self::$baseUrl, $data);
    }
}
