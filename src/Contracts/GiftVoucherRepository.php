<?php

namespace SteadfastCollective\Digitickets\Contract;

interface GiftVoucherRepository
{
    public static function index(array $filters = []);

    public static function create(array $data);
}
