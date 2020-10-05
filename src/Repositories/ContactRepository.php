<?php

namespace SteadfastCollective\Digitickets\Repositories;

use SteadfastCollective\Digitickets\Contracts\ContactRepository as Contract;
use SteadfastCollective\Digitickets\DigiticketsFacade;

class ContactRepository implements Contract
{
    private static $baseUrl = "contacts/";

    public static function index(array $filters = [])
    {
        if (isset($filters['customerID'])) {
            return DigiticketsFacade::get(self::$baseUrl . $filters['customerID'], []);
        }

        return DigiticketsFacade::get(self::$baseUrl, $filters);
    }

    public static function create(array $data)
    {
        return DigiticketsFacade::post(self::$baseUrl, $data);
    }

    public static function update($contactId, array $data)
    {
        return DigiticketsFacade::put(self::$baseUrl . $contactId, $data);
    }
}
