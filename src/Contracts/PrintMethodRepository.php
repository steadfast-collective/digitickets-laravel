<?php

namespace SteadfastCollective\Digitickets\Contract;

interface PrintMethodRepository
{
    public static function index(array $filters = []);

    public static function create(array $data);
}
