<?php

namespace Kanekescom\Siasn\Simpeg\Api\Traits;

use Illuminate\Http\Client\Response;
use Kanekescom\Siasn\Simpeg\Api\Helpers\UrlParser;

trait HasJabatanEndpoint
{
    public function getJabatanId(array $paths = [], array $query = []): Response
    {
        $urlFormat = '/jabatan/id/{idRiwayatJabatan}';
        $urlParsed = (new UrlParser($urlFormat))->parse($paths);

        return $this->get($urlParsed, $query);
    }

    public function getJabatanPns(array $paths = [], array $query = []): Response
    {
        $urlFormat = '/jabatan/pns/{nipBaru}';
        $urlParsed = (new UrlParser($urlFormat))->parse($paths);

        return $this->get($urlParsed, $query);
    }

    public function postJabatanUnorjabatanSave(array $paths = [], array $query = []): Response
    {
        $urlFormat = '/jabatan/unorjabatan/save';
        $urlParsed = (new UrlParser($urlFormat))->parse($paths);

        return $this->post($urlParsed, $query);
    }

    public function postJabatanSave(array $paths = [], array $query = []): Response
    {
        $urlFormat = '/jabatan/save';
        $urlParsed = (new UrlParser($urlFormat))->parse($paths);

        return $this->post($urlParsed, $query);
    }
}
