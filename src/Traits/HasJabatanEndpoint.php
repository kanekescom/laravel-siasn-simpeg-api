<?php

namespace Kanekescom\Siasn\Api\Simpeg\Traits;

use Illuminate\Http\Client\Response;
use Kanekescom\Siasn\Api\Simpeg\Helpers\UrlParser;

trait HasJabatanEndpoint
{
    public function getJabatanId(array $paths = [], array $query = []): Response
    {
        $urlFormat = '/jabatan/id/{idRiwayatJabatan}';
        $url = (new UrlParser($urlFormat))->parse($paths);

        return $this->get($url, $query);
    }

    public function getJabatanPns(array $paths = [], array $query = []): Response
    {
        $urlFormat = '/jabatan/pns/{nipBaru}';
        $url = (new UrlParser($urlFormat))->parse($paths);

        return $this->get($url, $query);
    }

    public function postJabatanSave(array $paths = [], array $query = []): Response
    {
        $urlFormat = '/jabatan/save';
        $url = (new UrlParser($urlFormat))->parse($paths);

        return $this->post($url, $query);
    }
}
