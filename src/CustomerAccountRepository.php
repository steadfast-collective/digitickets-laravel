<?php

namespace SteadfastCollective\Digitickets;

use Illuminate\Support\Facades\URL;
use SteadfastCollective\Digitickets\ApiRequestor;

class CustomerAccountRepository
{
    private static $baseUrl = "customeraccounts/";

    public static function index($filters)
    {
        return resolve(ApiRequestor::class)->get(self::$baseUrl, $filters);
    }

    public static function create($data)
    {
        return resolve(ApiRequestor::class)->post(self::$baseUrl, $data);
    }

    public static function update($thirdPartyID, $data)
    {
        $data['thirdPartyID'] = $thirdPartyID;

        return resolve(ApiRequestor::class)->put(self::$baseUrl, $data);
    }
}
