<?php

namespace SteadfastCollective\Digitickets;

use Illuminate\Support\Facades\URL;
use SteadfastCollective\Digitickets\ApiRequestor;

class PaymentChannelRepository
{
    private static $baseUrl = "paymentchannels/";

    public static function index($filters)
    {
        return resolve(ApiRequestor::class)->get(self::$baseUrl, $filters);
    }

    public static function create($data)
    {
        return resolve(ApiRequestor::class)->post(self::$baseUrl, $data);
    }
}
