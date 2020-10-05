<?php

namespace SteadfastCollective\Digitickets;

use Illuminate\Support\Facades\Facade;

/**
 * @see \SteadfastCollective\Digitickets\ApiRequestor
 */
class DigiticketsFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'Digitickets';
    }
}
