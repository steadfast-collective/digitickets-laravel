<?php

namespace SteadfastCollective\Digitickets\Repositories;

use SteadfastCollective\Digitickets\Contracts\CustomerAccountRepository as Contract;
use SteadfastCollective\Digitickets\DigiticketsFacade;

class CustomerAccountRepository implements Contract
{
    private static $baseUrl = "customeraccounts/";

    public static function index(array $filters = [])
    {
        if (isset($filters['customerAccountID'])) {
            return DigiticketsFacade::get(self::$baseUrl . $filters['customerAccountID'], $filters);
        }

        return DigiticketsFacade::get(self::$baseUrl, $filters);
    }

    public static function create(array $data)
    {
        return DigiticketsFacade::post(self::$baseUrl, $data);
    }

    public static function update($thirdPartyID, array $data)
    {
        $data['thirdPartyID'] = $thirdPartyID;

        return DigiticketsFacade::put(self::$baseUrl, $data);
    }
}
