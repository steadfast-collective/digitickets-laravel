<?php

namespace SteadfastCollective\Digitickets\Repositories;

use SteadfastCollective\Digitickets\Contracts\PaymentChannelRepository as Contract;
use SteadfastCollective\Digitickets\DigiticketsFacade;

class PaymentChannelRepository implements Contract
{
    private static $baseUrl = "paymentchannels/";

    public static function index(array $filters = [])
    {
        return DigiticketsFacade::get(self::$baseUrl, $filters);
    }

    public static function create(array $data)
    {
        return DigiticketsFacade::post(self::$baseUrl, $data);
    }
}
