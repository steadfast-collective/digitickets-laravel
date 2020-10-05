<?php

namespace SteadfastCollective\Digitickets\Repositories;

use SteadfastCollective\Digitickets\ApiRequestor;
use SteadfastCollective\Digitickets\Contracts\TradingSessionSummaryRepository as Contract;

class TradingSessionSummaryRepository implements Contract
{
    private static $baseUrl = "tradingsessionsummaries/";

    public static function index(array $filters = [])
    {
        return resolve(ApiRequestor::class)->get(self::$baseUrl, $filters);
    }

    public static function create(array $data)
    {
        return resolve(ApiRequestor::class)->post(self::$baseUrl, $data);
    }
}
