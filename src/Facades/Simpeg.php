<?php

namespace Kanekescom\Siasn\Api\Simpeg\Facades;

use Illuminate\Support\Facades\Facade;
use Kanekescom\Siasn\Api\Simpeg\Simpeg as SimpegBuilder;

class Simpeg extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @see \Kanekescom\Siasn\Api\Simpeg
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return SimpegBuilder::class;
    }
}
