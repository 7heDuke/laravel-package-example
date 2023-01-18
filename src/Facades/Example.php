<?php

namespace Kreatf\Example\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Kreatf\Example\Example
 */
class Example extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Kreatf\Example\Example::class;
    }
}
