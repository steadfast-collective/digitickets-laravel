<?php

namespace SteadfastCollective\Digitickets\Contracts;

interface SessionRepository
{
    public static function index(array $filters = []);

    public static function create(array $data);
}
