<?php

namespace SteadfastCollective\Digitickets\Contracts;

interface CurrencyRepository
{
    public static function index(array $filters = []);

    public static function create(array $data);
}
