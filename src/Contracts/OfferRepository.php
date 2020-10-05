<?php

namespace SteadfastCollective\Digitickets\Contracts;

interface OfferRepository
{
    public static function index(array $filters = []);

    public static function create(array $data);

    public static function update(array $data);
}
