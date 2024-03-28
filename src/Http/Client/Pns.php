<?php

namespace Kanekescom\Siasn\Simpeg\Api\Http\Client;

use Illuminate\Http\Client\Response;
use Illuminate\Support\Facades\Storage;
use Kanekescom\Siasn\Simpeg\Api\Helpers\UrlParser;
use Kanekescom\Siasn\Simpeg\Api\Simpeg;

class Pns
{
    public static function getDataAnak(array $paths = [], array $query = []): Response
    {
        $urlFormat = '/pns/data-anak/{nipBaru}';
        $urlParsed = (new UrlParser($urlFormat))->parse($paths);

        return (new Simpeg)->get($urlParsed, $query);
    }

    public static function getDataOrtu(array $paths = [], array $query = []): Response
    {
        $urlFormat = '/pns/data-ortu/{nipBaru}';
        $urlParsed = (new UrlParser($urlFormat))->parse($paths);

        return (new Simpeg)->get($urlParsed, $query);
    }

    public static function getDataPasangan(array $paths = [], array $query = []): Response
    {
        $urlFormat = '/pns/data-pasangan/{nipBaru}';
        $urlParsed = (new UrlParser($urlFormat))->parse($paths);

        return (new Simpeg)->get($urlParsed, $query);
    }

    public static function postDataUtamaUpdate(array $paths = [], array $query = []): Response
    {
        $urlFormat = '/pns/data-utama-update';
        $urlParsed = (new UrlParser($urlFormat))->parse($paths);

        return (new Simpeg)->post($urlParsed, $query);
    }

    public static function getDataUtama(array $paths = [], array $query = []): Response
    {
        $urlFormat = '/pns/data-utama/{nipBaru}';
        $urlParsed = (new UrlParser($urlFormat))->parse($paths);

        return (new Simpeg)->get($urlParsed, $query);
    }

    public static function getPhoto(array $paths = [], array $query = []): Response
    {
        $urlFormat = '/pns/photo/{idPns}';
        $urlParsed = (new UrlParser($urlFormat))->parse($paths);

        return (new Simpeg)->get($urlParsed, $query);
    }

    public static function downloadPhoto(array $paths = [], array $query = [], string $disk = 'local', string $filename = null): string
    {
        $idPns = $paths['idPns'];
        $filename = $filename ?? "siasn/simpeg/pns/photo/{$idPns}.jpg";

        $content = self::getPhoto($paths, $query)->getBody()->getContents();

        Storage::disk($disk)->put($filename, $content);

        return Storage::disk($disk)->path($filename);
    }
}
