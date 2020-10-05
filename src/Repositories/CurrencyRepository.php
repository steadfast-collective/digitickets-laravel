<?php

namespace SteadfastCollective\Digitickets\Repositories;

use SteadfastCollective\Digitickets\ApiRequestor;
use SteadfastCollective\Digitickets\Contracts\CurrencyRepository as Contract;

class CurrencyRepository implements Contract
{
    private static $baseUrl = "currencies/";

    public static function index(array $filters = [])
    {
        return resolve(ApiRequestor::class)->get(self::$baseUrl, $filters);
    }

    public static function create(array $data)
    {
        return resolve(ApiRequestor::class)->post(self::$baseUrl, $data);
    }
}
