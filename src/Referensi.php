<?php

namespace Kanekescom\Siasn\Simpeg\Api;

use Illuminate\Http\Client\Response;
use Kanekescom\Siasn\Simpeg\Api\Facades\Simpeg;
use Kanekescom\Siasn\Simpeg\Api\Helpers\UrlParser;

class Referensi
{
    public static function getUnor(array $paths = [], array $query = []): Response
    {
        $urlFormat = '/referensi/ref-unor';
        $urlParsed = (new UrlParser($urlFormat))->parse($paths);

        return Simpeg::get($urlParsed, $query);
    }
}
