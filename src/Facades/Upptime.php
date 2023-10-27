<?php

namespace laravel-stack\Upptime\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \laravel-stack\Upptime\Upptime
 */
class Upptime extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \laravel-stack\Upptime\Upptime::class;
    }
}
