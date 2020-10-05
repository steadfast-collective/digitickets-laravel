<?php

namespace SteadfastCollective\Digitickets\Contracts;

interface PaymentChannelRepository
{
    public static function index(array $filters = []);

    public static function create(array $data);
}
