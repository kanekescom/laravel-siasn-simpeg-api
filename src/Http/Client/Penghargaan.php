<?php

namespace Kanekescom\Siasn\Simpeg\Api\Http\Client;

use Illuminate\Http\Client\Response;
use Kanekescom\Siasn\Simpeg\Api\Helpers\UrlParser;
use Kanekescom\Siasn\Simpeg\Api\Simpeg;

class Penghargaan
{
    public static function get(array|string $paths = [], array $query = []): Response
    {
        if (is_string($paths)) {
            $paths = [
                'idRiwayatPenghargaan' => $paths,
            ];
        }

        $urlFormat = '/penghargaan/id/{idRiwayatPenghargaan}';
        $urlParsed = (new UrlParser($urlFormat))->parse($paths);

        return (new Simpeg)->get($urlParsed, $query);
    }

    public static function delete(array|string $paths = [], array $query = []): Response
    {
        if (is_string($paths)) {
            $paths = [
                'idRiwayatPenghargaan' => $paths,
            ];
        }

        $urlFormat = '/angkakredit/delete/{idRiwayatPenghargaan}';
        $urlParsed = (new UrlParser($urlFormat))->parse($paths);

        return (new Simpeg)->delete($urlParsed, $query);
    }

    public static function save(array $paths = [], array $query = []): Response
    {
        $urlFormat = '/penghargaan/save';
        $urlParsed = (new UrlParser($urlFormat))->parse($paths);

        return (new Simpeg)->post($urlParsed, $query);
    }
}
