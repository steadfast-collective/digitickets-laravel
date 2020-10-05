<?php

namespace SteadfastCollective\Digitickets\Contracts;

interface StatusRepository
{
    public static function index(array $filters = []);

    public static function create(array $data);
}
