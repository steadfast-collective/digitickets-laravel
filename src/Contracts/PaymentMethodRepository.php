<?php

namespace SteadfastCollective\Digitickets\Contracts;

interface PaymentMethodRepository
{
    public static function index(array $filters = []);

    public static function create(array $data);
}
