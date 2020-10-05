<?php

namespace SteadfastCollective\Digitickets\Repositories;

use SteadfastCollective\Digitickets\ApiRequestor;
use SteadfastCollective\Digitickets\Contract\GiftVoucherRepository as Contract;

class GiftVoucherRepository implements Contract
{
    private static $baseUrl = "giftvouchers/";

    public static function index($filters)
    {
        return resolve(ApiRequestor::class)->get(self::$baseUrl, $filters);
    }

    public static function create($data)
    {
        return resolve(ApiRequestor::class)->post(self::$baseUrl, $data);
    }
}
