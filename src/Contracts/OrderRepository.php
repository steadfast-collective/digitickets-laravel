<?php

namespace SteadfastCollective\Digitickets\Contracts;

interface OrderRepository
{
    public static function index(array $filters = []);

    public static function show(array $data);

    public static function create(array $data);

    public static function update(array $data);
}
