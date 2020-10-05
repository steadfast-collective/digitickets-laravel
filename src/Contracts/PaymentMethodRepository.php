<?php

namespace SteadfastCollective\Digitickets\Contract;

interface PaymentMethodRepository
{
    public static function index(array $filters = []);

    public static function create(array $data);
}
