<?php

namespace SteadfastCollective\Digitickets\Repositories;

use Illuminate\Support\Facades\URL;
use SteadfastCollective\Digitickets\ApiRequestor;

class PrintMethodRepository
{
    private static $baseUrl = "printmethods/";

    public static function index($filters)
    {
        return resolve(ApiRequestor::class)->get(self::$baseUrl, $filters);
    }

    public static function create($data)
    {
        return resolve(ApiRequestor::class)->post(self::$baseUrl, $data);
    }
}
