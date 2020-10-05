<?php

namespace SteadfastCollective\Digitickets\Contract;

interface ResellerRepository
{
    public static function index(array $filters = []);

    public static function create(array $data);

    public static function update(array $data);
}
