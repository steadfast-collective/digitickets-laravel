<?php

namespace SteadfastCollective\Digitickets\Repositories;

use SteadfastCollective\Digitickets\Contracts\MemberRepository as Contract;
use SteadfastCollective\Digitickets\DigiticketsFacade;

class MemberRepository implements Contract
{
    private static $baseUrl = "members/";

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
