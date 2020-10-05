<?php

namespace SteadfastCollective\Digitickets\Repositories;

use SteadfastCollective\Digitickets\Contracts\BranchRepository as Contract;
use SteadfastCollective\Digitickets\DigiticketsFacade;

class BranchRepository implements Contract
{
    private static $baseUrl = "branches/";

    public static function index(array $filters = [])
    {
        return DigiticketsFacade::get(self::$baseUrl, $filters);
    }

    public static function show(array $data = [])
    {
        return DigiticketsFacade::get(self::$baseUrl.$data['branchId'], $data);
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
