<?php

namespace SteadfastCollective\Digitickets\Repositories;

use SteadfastCollective\Digitickets\Contracts\TicketRepository as Contract;
use SteadfastCollective\Digitickets\DigiticketsFacade;

class TicketRepository implements Contract
{
    private static $baseUrl = "tickets/";

    public static function index(array $filters = [])
    {
        return DigiticketsFacade::get(self::$baseUrl, $filters);
    }

    public static function show(array $data)
    {
        return DigiticketsFacade::get(self::$baseUrl.$data['ticketId'], $data);
    }

    public static function create(array $data)
    {
        return DigiticketsFacade::post(self::$baseUrl, $data);
    }
}
