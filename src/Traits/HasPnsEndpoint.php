<?php

namespace Kanekescom\Siasn\Api\Simpeg\Traits;

use Illuminate\Http\Client\Response;
use Illuminate\Support\Facades\Storage;
use Kanekescom\Siasn\Api\Simpeg\Helpers\UrlParser;

trait HasPnsEndpoint
{
    public function getPnsDataAnak(array $paths = [], array $query = []): Response
    {
        $urlFormat = '/pns/data-anak/{nipBaru}';
        $urlParsed = (new UrlParser($urlFormat))->parse($paths);

        return $this->get($urlParsed, $query);
    }

    public function getPnsDataOrtu(array $paths = [], array $query = []): Response
    {
        $urlFormat = '/pns/data-ortu/{nipBaru}';
        $urlParsed = (new UrlParser($urlFormat))->parse($paths);

        return $this->get($urlParsed, $query);
    }

    public function getPnsDataPasangan(array $paths = [], array $query = []): Response
    {
        $urlFormat = '/pns/data-pasangan/{nipBaru}';
        $urlParsed = (new UrlParser($urlFormat))->parse($paths);

        return $this->get($urlParsed, $query);
    }

    public function postPnsDataUtamaUpdate(array $paths = [], array $query = []): Response
    {
        $urlFormat = '/pns/data-utama-update';
        $urlParsed = (new UrlParser($urlFormat))->parse($paths);

        return $this->post($urlParsed, $query);
    }

    public function getPnsDataUtama(array $paths = [], array $query = []): Response
    {
        $urlFormat = '/pns/data-utama/{nipBaru}';
        $urlParsed = (new UrlParser($urlFormat))->parse($paths);

        return $this->get($urlParsed, $query);
    }

    public function getPnsPhoto(array $paths = [], array $query = []): Response
    {
        $urlFormat = '/pns/photo/{idPns}';
        $urlParsed = (new UrlParser($urlFormat))->parse($paths);

        return $this->get($urlParsed, $query);
    }

    public function downloadPnsPhoto(array $paths = [], array $query = [], string $disk = 'local', string $filename = null): string
    {
        $idPns = $paths['idPns'];
        $filename = $filename ?? "siasn-simpeg/pns/photo/{$idPns}.jpg";

        $content = $this->getPnsPhoto($paths, $query)->getBody()->getContents();

        Storage::disk($disk)->put($filename, $content);

        return Storage::disk($disk)->path($filename);
    }
}
