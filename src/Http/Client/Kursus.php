<?php

namespace Kanekescom\Siasn\Simpeg\Api\Http\Client;

use Illuminate\Http\Client\Response;
use Kanekescom\Siasn\Simpeg\Api\Helpers\UrlParser;
use Kanekescom\Siasn\Simpeg\Api\Simpeg;

class Kursus
{
    public static function delete(array $paths = [], array $query = []): Response
    {
        $urlFormat = '/kursus/delete/{idRiwayatKursus}';
        $urlParsed = (new UrlParser($urlFormat))->parse($paths);

        return (new Simpeg)->delete($urlParsed, $query);
    }

    public static function get(array $paths = [], array $query = []): Response
    {
        $urlFormat = '/kursus/id/{idRiwayatKursus}';
        $urlParsed = (new UrlParser($urlFormat))->parse($paths);

        return (new Simpeg)->get($urlParsed, $query);
    }

    public static function postSave(array $paths = [], array $query = []): Response
    {
        $urlFormat = '/kursus/save';
        $urlParsed = (new UrlParser($urlFormat))->parse($paths);

        return (new Simpeg)->post($urlParsed, $query);
    }
}
