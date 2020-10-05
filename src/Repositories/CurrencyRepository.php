<?php

namespace SteadfastCollective\Digitickets\Repositories;

use SteadfastCollective\Digitickets\Contracts\CurrencyRepository as Contract;
use SteadfastCollective\Digitickets\DigiticketsFacade;

class CurrencyRepository implements Contract
{
    private static $baseUrl = "currencies/";

    public static function index(array $filters = [])
    {
        return DigiticketsFacade::get(self::$baseUrl, $filters);
    }

    public static function create(array $data)
    {
        return DigiticketsFacade::post(self::$baseUrl, $data);
    }
}
