<?php

namespace SteadfastCollective\Digitickets\Repositories;

use SteadfastCollective\Digitickets\Contracts\TradingSessionRepository as Contract;
use SteadfastCollective\Digitickets\DigiticketsFacade;

class TradingSessionRepository implements Contract
{
    private static $baseUrl = "tradingsessions/";

    public static function index(array $filters = [])
    {
        return DigiticketsFacade::get(self::$baseUrl, $filters);
    }

    public static function create(array $data)
    {
        return DigiticketsFacade::post(self::$baseUrl, $data);
    }
}
