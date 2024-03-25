<?php

namespace Kanekescom\Siasn\Simpeg\Api\Traits;

use Illuminate\Http\Client\Response;
use Illuminate\Support\Facades\Storage;
use Kanekescom\Siasn\Simpeg\Api\Helpers\UrlParser;

trait HasUploadEndpoint
{
    public function getDownloadDok(array $paths = [], array $query = []): Response
    {
        $urlFormat = '/download-dok';
        $urlParsed = (new UrlParser($urlFormat))->parse($paths);

        return $this->get($urlParsed, $query);
    }

    public function downloadDownloadDok(array $paths = [], array $query = [], string $disk = 'local', string $filename = null): string
    {
        $filePath = $query['filePath'];
        $filename = $filename ?? "siasn-simpeg/{$filePath}";

        $content = $this->getDownloadDok($paths, $query)->getBody()->getContents();

        Storage::disk($disk)->put($filename, $content);

        return Storage::disk($disk)->path($filename);
    }

    public function postUploadDok(array $paths = [], array $query = []): Response
    {
        $urlFormat = '/upload-dok';
        $urlParsed = (new UrlParser($urlFormat))->parse($paths);

        return $this->post($urlParsed, $query);
    }

    public function postUploadDokRw(array $paths = [], array $query = []): Response
    {
        $urlFormat = '/upload-dok-rw';
        $urlParsed = (new UrlParser($urlFormat))->parse($paths);

        return $this->post($urlParsed, $query);
    }
}
