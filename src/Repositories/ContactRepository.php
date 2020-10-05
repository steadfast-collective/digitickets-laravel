<?php

namespace SteadfastCollective\Digitickets\Repositories;

use SteadfastCollective\Digitickets\ApiRequestor;
use SteadfastCollective\Digitickets\Contracts\ContactRepository as Contract;

class ContactRepository implements Contract
{
    private static $baseUrl = "contacts/";

    public static function index(array $filters = [])
    {
        if (isset($filters['customerID'])) {
            return resolve(ApiRequestor::class)->get(self::$baseUrl . $filters['customerID'], []);
        }

        return resolve(ApiRequestor::class)->get(self::$baseUrl, $filters);
    }

    public static function create(array $data)
    {
        return resolve(ApiRequestor::class)->post(self::$baseUrl, $data);
    }

    public static function update($contactId, array $data)
    {
        return resolve(ApiRequestor::class)->put(self::$baseUrl . $contactId, $data);
    }
}
