<?php

namespace Kanekescom\Siasn\Simpeg\Api;

use Illuminate\Http\Client\Response;
use Kanekescom\Siasn\Simpeg\Api\Facades\Simpeg;
use Kanekescom\Siasn\Simpeg\Api\Helpers\UrlParser;

class Kinerja
{
    public static function delete(array|string $paths = [], array $query = []): Response
    {
        if (is_string($paths)) {
            $paths = [
                'idRiwayatKinerjaPeriodik' => $paths,
            ];
        }

        $urlFormat = '/kinerjaperiodik/delete/{idRiwayatKinerjaPeriodik}';
        $urlParsed = (new UrlParser($urlFormat))->parse($paths);

        return Simpeg::delete($urlParsed, $query);
    }

    public static function save(array $paths = [], array $query = []): Response
    {
        $urlFormat = '/kinerjaperiodik/save';
        $urlParsed = (new UrlParser($urlFormat))->parse($paths);

        return Simpeg::post($urlParsed, $query);
    }
}
