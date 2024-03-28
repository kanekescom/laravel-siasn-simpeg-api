<?php

namespace Kanekescom\Siasn\Simpeg\Api\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Kanekescom\Siasn\Simpeg\Api\Simpeg
 */
class Simpeg extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Kanekescom\Siasn\Simpeg\Api\Simpeg::class;
    }
}
