<?php

namespace Kanekescom\Siasn\Simpeg\Api\Http\Client;

use Illuminate\Http\Client\Response;
use Kanekescom\Siasn\Simpeg\Api\Helpers\UrlParser;
use Kanekescom\Siasn\Simpeg\Api\Simpeg;

class Referensi
{
    public static function getUnor(array $paths = [], array $query = []): Response
    {
        $urlFormat = '/referensi/ref-unor';
        $urlParsed = (new UrlParser($urlFormat))->parse($paths);

        return (new Simpeg)->get($urlParsed, $query);
    }
}
