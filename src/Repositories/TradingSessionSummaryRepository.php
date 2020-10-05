<?php

namespace SteadfastCollective\Digitickets\Repositories;

use SteadfastCollective\Digitickets\Contracts\TradingSessionSummaryRepository as Contract;
use SteadfastCollective\Digitickets\DigiticketsFacade;

class TradingSessionSummaryRepository implements Contract
{
    private static $baseUrl = "tradingsessionsummaries/";

    public static function index(array $filters = [])
    {
        return DigiticketsFacade::get(self::$baseUrl, $filters);
    }

    public static function create(array $data)
    {
        return DigiticketsFacade::post(self::$baseUrl, $data);
    }
}
