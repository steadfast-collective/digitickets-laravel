<?php

namespace SteadfastCollective\Digitickets\Repositories;

use SteadfastCollective\Digitickets\ApiRequestor;
use SteadfastCollective\Digitickets\Contracts\TicketRepository as Contract;

class TicketRepository implements Contract
{
    private static $baseUrl = "tickets/";

    public static function index(array $filters = [])
    {
        return resolve(ApiRequestor::class)->get(self::$baseUrl, $filters);
    }

    public static function show(array $data)
    {
        return resolve(ApiRequestor::class)->get(self::$baseUrl.$data['ticketId'], $data);
    }

    public static function create(array $data)
    {
        return resolve(ApiRequestor::class)->post(self::$baseUrl, $data);
    }
}
