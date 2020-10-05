<?php

namespace SteadfastCollective\Digitickets\Contracts;

interface PrintMethodRepository
{
    public static function index(array $filters = []);

    public static function create(array $data);
}
