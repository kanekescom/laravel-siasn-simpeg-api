<?php

namespace Kanekescom\Siasn\Api\Simpeg\Traits;

use Illuminate\Http\Client\Response;
use Kanekescom\Siasn\Api\Simpeg\Helpers\UrlParser;

trait HasDataPegawaiEndpoint
{
    public function getDataAnak(array $paths = [], array $query = []): Response
    {
        $urlFormat = '/pns/data-anak/{nipBaru}';
        $urlParsed = (new UrlParser($urlFormat))->parse($paths);

        return $this->get($urlParsed, $query);
    }

    public function getDataOrtu(array $paths = [], array $query = []): Response
    {
        $urlFormat = '/pns/data-ortu/{nipBaru}';
        $urlParsed = (new UrlParser($urlFormat))->parse($paths);

        return $this->get($urlParsed, $query);
    }

    public function getDataPasangan(array $paths = [], array $query = []): Response
    {
        $urlFormat = '/pns/data-pasangan/{nipBaru}';
        $urlParsed = (new UrlParser($urlFormat))->parse($paths);

        return $this->get($urlParsed, $query);
    }

    public function getDataUtama(array $paths = [], array $query = []): Response
    {
        $urlFormat = '/pns/data-utama/{nipBaru}';
        $urlParsed = (new UrlParser($urlFormat))->parse($paths);

        return $this->get($urlParsed, $query);
    }

    public function postDataUtamaUpdate(array $paths = [], array $query = []): Response
    {
        $urlFormat = '/pns/data-utama-update';
        $urlParsed = (new UrlParser($urlFormat))->parse($paths);

        return $this->post($urlParsed, $query);
    }
}
