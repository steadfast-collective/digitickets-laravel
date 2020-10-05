<?php

namespace SteadfastCollective\Digitickets\Repositories;

use SteadfastCollective\Digitickets\Contracts\TradingSessionEventRepository as Contract;
use SteadfastCollective\Digitickets\DigiticketsFacade;

class TradingSessionEventRepository implements Contract
{
    private static $baseUrl = "tradingsessionevents/";

    public static function index(array $filters = [])
    {
        return DigiticketsFacade::get(self::$baseUrl, $filters);
    }

    public static function create(array $data)
    {
        return DigiticketsFacade::post(self::$baseUrl, $data);
    }
}
