<?php

namespace Kanekescom\Siasn\Api\Simpeg\Traits;

use Illuminate\Http\Client\Response;
use Kanekescom\Siasn\Api\Simpeg\Helpers\UrlParser;

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
