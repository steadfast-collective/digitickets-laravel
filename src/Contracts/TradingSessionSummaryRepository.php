<?php

namespace SteadfastCollective\Digitickets\Contracts;

interface TradingSessionSummaryRepository
{
    public static function index(array $filters = []);

    public static function create(array $data);
}
