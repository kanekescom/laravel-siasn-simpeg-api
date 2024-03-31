<?php

namespace Kanekescom\Siasn\Simpeg\Api;

use Illuminate\Http\Client\Response;
use Kanekescom\Siasn\Simpeg\Api\Facades\Simpeg;
use Kanekescom\Siasn\Simpeg\Api\Helpers\UrlParser;

class Kp
{
    public static function getList(array $paths = [], array $query = []): Response
    {
        $urlFormat = '/pns/list-kp-instansi';
        $urlParsed = (new UrlParser($urlFormat))->parse($paths);

        return Simpeg::get($urlParsed, $query);
    }

    public static function uploadDokSk(array $paths = [], array $query = []): Response
    {
        $urlFormat = '/upload-dok-sk-kp';
        $urlParsed = (new UrlParser($urlFormat))->parse($paths);

        return Simpeg::post($urlParsed, $query);
    }
}
