<?php

namespace Kanekescom\Siasn\Api\Simpeg\Traits;

use Illuminate\Http\Client\Response;
use Kanekescom\Siasn\Api\Simpeg\Helpers\UrlParser;

trait HasPengadaanEndpoint
{
    public function getListPengadaanInstansi(array $paths = [], array $queries = []): Response
    {
        $urlFormat = "/pengadaan/list-pengadaan-instansi";
        $url = (new UrlParser($urlFormat))->parse($paths);

        return $this->get($url, $queries);
    }
}
