<?php

namespace SteadfastCollective\Digitickets\Repositories;

use SteadfastCollective\Digitickets\ApiRequestor;
use SteadfastCollective\Digitickets\Contracts\MembershipPlansRepository as Contract;

class MembershipPlansRepository implements Contract
{
    private static $baseUrl = "membershipplans/";

    public static function index(array $filters = [])
    {
        return resolve(ApiRequestor::class)->get(self::$baseUrl, $filters);
    }

    public static function create(array $data)
    {
        return resolve(ApiRequestor::class)->post(self::$baseUrl, $data);
    }

    public static function update(array $data)
    {
        return resolve(ApiRequestor::class)->put(self::$baseUrl, $data);
    }
}
