<?php

namespace SteadfastCollective\Digitickets\Repositories;

use SteadfastCollective\Digitickets\ApiRequestor;
use SteadfastCollective\Digitickets\Contracts\CustomerAccountRepository as Contract;

class CustomerAccountRepository implements Contract
{
    private static $baseUrl = "customeraccounts/";

    public static function index(array $filters = [])
    {
        if (isset($filters['customerAccountID'])) {
            return resolve(ApiRequestor::class)->get(self::$baseUrl . $filters['customerAccountID'], $filters);
        }

        return resolve(ApiRequestor::class)->get(self::$baseUrl, $filters);
    }

    public static function create(array $data)
    {
        return resolve(ApiRequestor::class)->post(self::$baseUrl, $data);
    }

    public static function update($thirdPartyID, array $data)
    {
        $data['thirdPartyID'] = $thirdPartyID;

        return resolve(ApiRequestor::class)->put(self::$baseUrl, $data);
    }
}
