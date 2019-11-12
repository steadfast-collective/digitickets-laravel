<?php

namespace SteadfastCollective\Digitickets\Repositories;

use Illuminate\Support\Facades\URL;
use SteadfastCollective\Digitickets\ApiRequestor;

class StatusRepository
{
    private static $baseUrl = "status/";

    public static function index($filters)
    {
        return resolve(ApiRequestor::class)->get(self::$baseUrl, $filters);
    }

    public static function create($data)
    {
        return resolve(ApiRequestor::class)->post(self::$baseUrl, $data);
    }
}
