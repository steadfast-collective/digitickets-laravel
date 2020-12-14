<?php

namespace SteadfastCollective\Digitickets\Logging;

class InfoLog implements Logger
{
    public function log(string $message, array $data = [])
    {
        info($message, $data);
    }
}
