<?php

namespace Kanekescom\Siasn\Simpeg\Api\Http\Client;

use Illuminate\Http\Client\Response;
use Illuminate\Support\Facades\Storage;
use Kanekescom\Siasn\Simpeg\Api\Helpers\UrlParser;
use Kanekescom\Siasn\Simpeg\Api\Simpeg;

class Upload
{
    public static function getDok(array $paths = [], array $query = []): Response
    {
        $urlFormat = '/download-dok';
        $urlParsed = (new UrlParser($urlFormat))->parse($paths);

        return (new Simpeg)->get($urlParsed, $query);
    }

    public static function downloadDok(array $paths = [], array $query = [], string $disk = 'local', ?string $filename = null): string
    {
        $filePath = $query['filePath'];
        $filename = $filename ?? "siasn-simpeg/{$filePath}";

        $content = self::getDok($paths, $query)->getBody()->getContents();

        Storage::disk($disk)->put($filename, $content);

        return Storage::disk($disk)->path($filename);
    }

    public static function uploadDok(array $paths = [], array $query = []): Response
    {
        $urlFormat = '/upload-dok';
        $urlParsed = (new UrlParser($urlFormat))->parse($paths);

        return (new Simpeg)->post($urlParsed, $query);
    }

    public static function uploadDokRw(array $paths = [], array $query = []): Response
    {
        $urlFormat = '/upload-dok-rw';
        $urlParsed = (new UrlParser($urlFormat))->parse($paths);

        return (new Simpeg)->post($urlParsed, $query);
    }
}
