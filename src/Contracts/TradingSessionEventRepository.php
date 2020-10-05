<?php

namespace SteadfastCollective\Digitickets\Contracts;

interface TradingSessionEventRepository
{
    public static function index(array $filters = []);

    public static function create(array $data);
}
