<?php

namespace Kanekescom\Siasn\Simpeg\Api\Traits;

use Illuminate\Http\Client\Response;
use Kanekescom\Siasn\Simpeg\Api\Helpers\UrlParser;

trait HasPengadaanEndpoint
{
    public function getPengadaanListPengadaanInstansi(array $paths = [], array $query = []): Response
    {
        $urlFormat = '/pengadaan/list-pengadaan-instansi';
        $urlParsed = (new UrlParser($urlFormat))->parse($paths);

        return $this->get($urlParsed, $query);
    }
}
