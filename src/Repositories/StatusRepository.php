<?php

namespace SteadfastCollective\Digitickets\Repositories;

use SteadfastCollective\Digitickets\Contracts\StatusRepository as Contract;
use SteadfastCollective\Digitickets\DigiticketsFacade;

class StatusRepository implements Contract
{
    private static $baseUrl = "status/";

    public static function index(array $filters = [])
    {
        return DigiticketsFacade::get(self::$baseUrl, $filters);
    }

    public static function create(array $data)
    {
        return DigiticketsFacade::post(self::$baseUrl, $data);
    }
}
