<?php

namespace SteadfastCollective\Digitickets\Repositories;

use SteadfastCollective\Digitickets\Contracts\SessionRepository as Contract;
use SteadfastCollective\Digitickets\DigiticketsFacade;

class SessionRepository implements Contract
{
    private static $baseUrl = "sessions/";

    public static function index(array $filters = [])
    {
        return DigiticketsFacade::get(self::$baseUrl, $filters);
    }

    public static function create(array $data)
    {
        return DigiticketsFacade::post(self::$baseUrl, $data);
    }
}
