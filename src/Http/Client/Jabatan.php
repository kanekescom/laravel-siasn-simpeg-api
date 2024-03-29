<?php

namespace Kanekescom\Siasn\Simpeg\Api\Http\Client;

use Illuminate\Http\Client\Response;
use Kanekescom\Siasn\Simpeg\Api\Helpers\UrlParser;
use Kanekescom\Siasn\Simpeg\Api\Simpeg;

class Jabatan
{
    public static function get(array $paths = [], array $query = []): Response
    {
        $urlFormat = '/jabatan/id/{idRiwayatJabatan}';
        $urlParsed = (new UrlParser($urlFormat))->parse($paths);

        return (new Simpeg)->get($urlParsed, $query);
    }

    public static function getNipBaru(array $paths = [], array $query = []): Response
    {
        $urlFormat = '/jabatan/pns/{nipBaru}';
        $urlParsed = (new UrlParser($urlFormat))->parse($paths);

        return (new Simpeg)->get($urlParsed, $query);
    }

    public static function postUnorSave(array $paths = [], array $query = []): Response
    {
        $urlFormat = '/jabatan/unorjabatan/save';
        $urlParsed = (new UrlParser($urlFormat))->parse($paths);

        return (new Simpeg)->post($urlParsed, $query);
    }

    public static function postSave(array $paths = [], array $query = []): Response
    {
        $urlFormat = '/jabatan/save';
        $urlParsed = (new UrlParser($urlFormat))->parse($paths);

        return (new Simpeg)->post($urlParsed, $query);
    }
}
