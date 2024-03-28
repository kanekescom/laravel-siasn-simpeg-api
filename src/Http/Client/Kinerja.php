<?php

namespace Kanekescom\Siasn\Simpeg\Api\Http\Client;

use Illuminate\Http\Client\Response;
use Kanekescom\Siasn\Simpeg\Api\Helpers\UrlParser;
use Kanekescom\Siasn\Simpeg\Api\Simpeg;

class Kinerja
{
    public static function deleteId(array $paths = [], array $query = []): Response
    {
        $urlFormat = '/kinerjaperiodik/delete/{idRiwayatKinerjaPeriodik}';
        $urlParsed = (new UrlParser($urlFormat))->parse($paths);

        return (new Simpeg)->delete($urlParsed, $query);
    }

    public static function postSave(array $paths = [], array $query = []): Response
    {
        $urlFormat = '/kinerjaperiodik/save';
        $urlParsed = (new UrlParser($urlFormat))->parse($paths);

        return (new Simpeg)->post($urlParsed, $query);
    }
}
