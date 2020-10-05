<?php

namespace SteadfastCollective\Digitickets\Contracts;

interface ContactRepository
{
    public static function index(array $filters = []);

    public static function create(array $data);

    public static function update($contactId, array $data);
}
