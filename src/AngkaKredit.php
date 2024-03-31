<?php

namespace Kanekescom\Siasn\Simpeg\Api;

use Illuminate\Http\Client\Response;
use Kanekescom\Siasn\Simpeg\Api\Facades\Simpeg;
use Kanekescom\Siasn\Simpeg\Api\Helpers\UrlParser;

class AngkaKredit
{
    public static function delete(array|string $paths = [], array $query = []): Response
    {
        if (is_string($paths)) {
            $paths = [
                'idRiwayatAngkaKredit' => $paths,
            ];
        }

        $urlFormat = '/angkakredit/delete/{idRiwayatAngkaKredit}';
        $urlParsed = (new UrlParser($urlFormat))->parse($paths);

        return Simpeg::delete($urlParsed, $query);
    }

    public static function get(array|string $paths = [], array $query = []): Response
    {
        if (is_string($paths)) {
            $paths = [
                'idRiwayatAngkaKredit' => $paths,
            ];
        }

        $urlFormat = '/angkakredit/id/{idRiwayatAngkaKredit}';
        $urlParsed = (new UrlParser($urlFormat))->parse($paths);

        return Simpeg::get($urlParsed, $query);
    }

    public static function save(array $paths = [], array $query = []): Response
    {
        $urlFormat = '/angkakredit/save';
        $urlParsed = (new UrlParser($urlFormat))->parse($paths);

        return Simpeg::post($urlParsed, $query);
    }
}
