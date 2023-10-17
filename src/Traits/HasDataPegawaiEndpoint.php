<?php

namespace Kanekescom\Siasn\Api\Simpeg\Traits;

use Illuminate\Http\Client\Response;
use Kanekescom\Siasn\Api\Simpeg\Helpers\UrlParser;

trait HasDataPegawaiEndpoint
{
    public function getDataAnak(array $paths = [], array $query = []): Response
    {
        $urlFormat = '/pns/data-anak/{nipBaru}';
        $url = (new UrlParser($urlFormat))->parse($paths);

        return $this->get($url, $query);
    }

    public function getDataOrtu(array $paths = [], array $query = []): Response
    {
        $urlFormat = '/pns/data-ortu/{nipBaru}';
        $url = (new UrlParser($urlFormat))->parse($paths);

        return $this->get($url, $query);
    }

    public function getDataPasangan(array $paths = [], array $query = []): Response
    {
        $urlFormat = '/pns/data-pasangan/{nipBaru}';
        $url = (new UrlParser($urlFormat))->parse($paths);

        return $this->get($url, $query);
    }

    public function getDataUtama(array $paths = [], array $query = []): Response
    {
        $urlFormat = '/pns/data-utama/{nipBaru}';
        $url = (new UrlParser($urlFormat))->parse($paths);
        $url = (new UrlParser($urlFormat))->parse($paths);

        return $this->get($url, $query);
    }

    public function postDataUtamaUpdate(array $paths = [], array $query = []): Response
    {
        $urlFormat = '/pns/data-utama-update';
        $url = (new UrlParser($urlFormat))->parse($paths);

        return $this->post($url, $query);
    }
}
