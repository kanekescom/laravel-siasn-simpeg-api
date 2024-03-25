<?php

namespace Kanekescom\Siasn\Simpeg\Api\Traits;

use Illuminate\Http\Client\Response;
use Kanekescom\Siasn\Simpeg\Api\Helpers\UrlParser;

trait HasPenghargaanEndpoint
{
    public function getPenghargaanId(array $paths = [], array $query = []): Response
    {
        $urlFormat = '/penghargaan/id/{idRiwayatPenghargaan}';
        $urlParsed = (new UrlParser($urlFormat))->parse($paths);

        return $this->get($urlParsed, $query);
    }

    public function postPenghargaanSave(array $paths = [], array $query = []): Response
    {
        $urlFormat = '/penghargaan/save';
        $urlParsed = (new UrlParser($urlFormat))->parse($paths);

        return $this->post($urlParsed, $query);
    }
}
