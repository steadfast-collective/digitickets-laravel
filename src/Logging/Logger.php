<?php

namespace SteadfastCollective\Digitickets\Logging;

interface Logger
{
    public function log(string $message, array $data = []);
}
