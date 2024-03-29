<?php

namespace Kanekescom\Siasn\Simpeg\Api\Http\Client;

use Illuminate\Http\Client\Response;
use Kanekescom\Siasn\Simpeg\Api\Helpers\UrlParser;
use Kanekescom\Siasn\Simpeg\Api\Simpeg;

class Pengadaan
{
    public static function getList(array $paths = [], array $query = []): Response
    {
        $urlFormat = '/pengadaan/list-pengadaan-instansi';
        $urlParsed = (new UrlParser($urlFormat))->parse($paths);

        return (new Simpeg)->get($urlParsed, $query);
    }
}
