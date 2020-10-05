<?php

namespace SteadfastCollective\Digitickets\Repositories;

use SteadfastCollective\Digitickets\Contracts\RedemptionRepository as Contract;
use SteadfastCollective\Digitickets\DigiticketsFacade;

class RedemptionRepository implements Contract
{
    private static $baseUrl = "redemptions/";

    public static function index(array $filters = [])
    {
        return DigiticketsFacade::get(self::$baseUrl, $filters);
    }

    public static function create(array $data)
    {
        return DigiticketsFacade::post(self::$baseUrl, $data);
    }

    public static function update(array $data)
    {
        return DigiticketsFacade::put(self::$baseUrl, $data);
    }
}
