<?php

namespace Kiranaryal\PathaoCourierNepal\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Kiranaryal\PathaoCourierNepal\PathaoCourier
 */
class PathaoCourier extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Kiranaryal\PathaoCourierNepal\PathaoCourier::class;
    }
}
