<?php

namespace Kanekescom\Siasn\Simpeg\Api;

use Illuminate\Http\Client\Response;
use Kanekescom\Siasn\Simpeg\Api\Facades\Simpeg;
use Kanekescom\Siasn\Simpeg\Api\Helpers\UrlParser;

class Jabatan
{
    public static function get(array|string $paths = [], array $query = []): Response
    {
        if (is_string($paths)) {
            $paths = [
                'idRiwayatJabatan' => $paths,
            ];
        }

        $urlFormat = '/jabatan/id/{idRiwayatJabatan}';
        $urlParsed = (new UrlParser($urlFormat))->parse($paths);

        return Simpeg::get($urlParsed, $query);
    }

    public static function getNipBaru(array|string $paths = [], array $query = []): Response
    {
        if (is_string($paths)) {
            $paths = [
                'nipBaru' => $paths,
            ];
        }

        $urlFormat = '/jabatan/pns/{nipBaru}';
        $urlParsed = (new UrlParser($urlFormat))->parse($paths);

        return Simpeg::get($urlParsed, $query);
    }

    public static function saveUnor(array $paths = [], array $query = []): Response
    {
        $urlFormat = '/jabatan/unorjabatan/save';
        $urlParsed = (new UrlParser($urlFormat))->parse($paths);

        return Simpeg::post($urlParsed, $query);
    }

    public static function save(array $paths = [], array $query = []): Response
    {
        $urlFormat = '/jabatan/save';
        $urlParsed = (new UrlParser($urlFormat))->parse($paths);

        return Simpeg::post($urlParsed, $query);
    }
}
