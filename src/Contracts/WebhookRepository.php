<?php

namespace SteadfastCollective\Digitickets\Contracts;

interface WebhookRepository
{
    public static function index(array $filters = []);

    public static function create($event, $targetUrl = null);

    public static function delete($id);
}
