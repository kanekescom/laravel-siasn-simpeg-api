<?php

namespace Kanekescom\Siasn\Api\Simpeg\Traits;

use Illuminate\Http\Client\Response;
use Kanekescom\Siasn\Api\Simpeg\Helpers\UrlParser;

trait HasPenghargaanEndpoint
{
    public function getPenghargaanId(array $paths = [], array $query = []): Response
    {
        $urlFormat = '/penghargaan/id/{idRiwayatPenghargaan}';
        $url = (new UrlParser($urlFormat))->parse($paths);

        return $this->get($url, $query);
    }

    public function postPenghargaanSave(array $paths = [], array $query = []): Response
    {
        $urlFormat = '/penghargaan/save';
        $url = (new UrlParser($urlFormat))->parse($paths);

        return $this->post($url, $query);
    }
}
