<?php

namespace Kanekescom\Siasn\Simpeg\Api;

use Illuminate\Http\Client\Response;
use Kanekescom\Siasn\Simpeg\Api\Facades\Simpeg;
use Kanekescom\Siasn\Simpeg\Api\Helpers\UrlParser;

class Pengadaan
{
    public static function getList(array $paths = [], array $query = []): Response
    {
        $urlFormat = '/pengadaan/list-pengadaan-instansi';
        $urlParsed = (new UrlParser($urlFormat))->parse($paths);

        return Simpeg::get($urlParsed, $query);
    }
}
