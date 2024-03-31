<?php

namespace Kanekescom\Siasn\Simpeg\Api;

use Illuminate\Http\Client\Response;
use Illuminate\Support\Facades\Storage;
use Kanekescom\Siasn\Simpeg\Api\Facades\Simpeg;
use Kanekescom\Siasn\Simpeg\Api\Helpers\UrlParser;

class Pns
{
    public static function getDataAnak(array|string $paths = [], array $query = []): Response
    {
        if (is_string($paths)) {
            $paths = [
                'nipBaru' => $paths,
            ];
        }

        $urlFormat = '/pns/data-anak/{nipBaru}';
        $urlParsed = (new UrlParser($urlFormat))->parse($paths);

        return Simpeg::get($urlParsed, $query);
    }

    public static function getDataOrtu(array|string $paths = [], array $query = []): Response
    {
        if (is_string($paths)) {
            $paths = [
                'nipBaru' => $paths,
            ];
        }

        $urlFormat = '/pns/data-ortu/{nipBaru}';
        $urlParsed = (new UrlParser($urlFormat))->parse($paths);

        return Simpeg::get($urlParsed, $query);
    }

    public static function getDataPasangan(array|string $paths = [], array $query = []): Response
    {
        if (is_string($paths)) {
            $paths = [
                'nipBaru' => $paths,
            ];
        }

        $urlFormat = '/pns/data-pasangan/{nipBaru}';
        $urlParsed = (new UrlParser($urlFormat))->parse($paths);

        return Simpeg::get($urlParsed, $query);
    }

    public static function updateDataUtama(array $paths = [], array $query = []): Response
    {
        $urlFormat = '/pns/data-utama-update';
        $urlParsed = (new UrlParser($urlFormat))->parse($paths);

        return Simpeg::post($urlParsed, $query);
    }

    public static function getDataUtama(array|string $paths = [], array $query = []): Response
    {
        if (is_string($paths)) {
            $paths = [
                'nipBaru' => $paths,
            ];
        }

        $urlFormat = '/pns/data-utama/{nipBaru}';
        $urlParsed = (new UrlParser($urlFormat))->parse($paths);

        return Simpeg::get($urlParsed, $query);
    }

    public static function getPhoto(array|string $paths = [], array $query = []): Response
    {
        if (is_string($paths)) {
            $paths = [
                'idPns' => $paths,
            ];
        }

        $urlFormat = '/pns/photo/{idPns}';
        $urlParsed = (new UrlParser($urlFormat))->parse($paths);

        return Simpeg::get($urlParsed, $query);
    }

    public static function downloadPhoto(array|string $paths = [], array $query = [], string $disk = 'local', string $filename = ''): string
    {
        if (is_string($paths)) {
            $paths = [
                'idPns' => $paths,
            ];
        }

        $idPns = $paths['idPns'];
        $filename = $filename ?? "siasn/simpeg/pns/photo/{$idPns}.jpg";

        $content = self::getPhoto($paths, $query)->getBody()->getContents();

        Storage::disk($disk)->put($filename, $content);

        return Storage::disk($disk)->path($filename);
    }
}
