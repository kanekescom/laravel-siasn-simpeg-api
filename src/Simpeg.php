<?php

namespace Kanekescom\Siasn\Simpeg\Api;

use Kanekescom\Helperia\Support\ClassExtender;
use Kanekescom\Siasn\Api\Facades\Siasn;

class Simpeg extends ClassExtender
{
    public function __construct()
    {
        $this->class = Siasn::withSso()->baseUrl(config('siasn-simpeg-api.base_url'));
    }
}
