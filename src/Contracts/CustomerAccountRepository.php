<?php

namespace SteadfastCollective\Digitickets\Contracts;

interface CustomerAccountRepository
{
    public static function index(array $filters = []);

    public static function create(array $data);

    public static function update($thirdPartyID, array $data);
}
