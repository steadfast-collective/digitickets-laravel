<?php

namespace SteadfastCollective\Digitickets\Repositories;

use SteadfastCollective\Digitickets\Contract\PaymentMethodRepository as Contract;
use SteadfastCollective\Digitickets\DigiticketsFacade;

class PaymentMethodRepository implements Contract
{
    private static $baseUrl = "paymentmethods/";

    public static function index(array $filters = [])
    {
        return DigiticketsFacade::get(self::$baseUrl, $filters);
    }

    public static function create(array $data)
    {
        return DigiticketsFacade::post(self::$baseUrl, $data);
    }
}
