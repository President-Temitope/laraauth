<?php

namespace Callmehalpha\Laraauth;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Callmehalpha\Laraauth\Laraauth
 */
class LaraauthFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'laraauth';
    }
}
