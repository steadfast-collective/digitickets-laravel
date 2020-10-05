<?php

namespace SteadfastCollective\Digitickets\Repositories;

use SteadfastCollective\Digitickets\Contract\GiftVoucherRepository as Contract;
use SteadfastCollective\Digitickets\DigiticketsFacade;

class GiftVoucherRepository implements Contract
{
    private static $baseUrl = "giftvouchers/";

    public static function index(array $filters = [])
    {
        return DigiticketsFacade::get(self::$baseUrl, $filters);
    }

    public static function create(array $data)
    {
        return DigiticketsFacade::post(self::$baseUrl, $data);
    }
}
