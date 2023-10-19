<?php

namespace Kanekescom\Siasn\Api\Simpeg\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Kanekescom\Siasn\Api\Simpeg\Simpeg
 */
class Simpeg extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Kanekescom\Siasn\Api\Simpeg\Simpeg::class;
    }
}
