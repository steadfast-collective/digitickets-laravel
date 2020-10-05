<?php

namespace SteadfastCollective\Digitickets\Repositories;

use SteadfastCollective\Digitickets\Contracts\PrintMethodRepository as Contract;
use SteadfastCollective\Digitickets\DigiticketsFacade;

class PrintMethodRepository implements Contract
{
    private static $baseUrl = "printmethods/";

    public static function index(array $filters = [])
    {
        return DigiticketsFacade::get(self::$baseUrl, $filters);
    }

    public static function create(array $data)
    {
        return DigiticketsFacade::post(self::$baseUrl, $data);
    }
}
