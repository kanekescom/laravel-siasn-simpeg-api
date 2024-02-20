<?php

namespace Kanekescom\Siasn\Api\Simpeg\Traits;

use Illuminate\Http\Client\Response;
use Kanekescom\Siasn\Api\Simpeg\Helpers\UrlParser;

trait HasPengadaanEndpoint
{
    public function getPengadaanListPengadaanInstansi(array $paths = [], array $query = []): Response
    {
        $urlFormat = '/pengadaan/list-pengadaan-instansi';
        $urlParsed = (new UrlParser($urlFormat))->parse($paths);

        return $this->get($urlParsed, $query);
    }
}
