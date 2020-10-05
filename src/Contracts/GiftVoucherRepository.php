<?php

namespace SteadfastCollective\Digitickets\Contracts;

interface GiftVoucherRepository
{
    public static function index(array $filters = []);

    public static function create(array $data);
}
