<?php

namespace Kanekescom\Siasn\Api\Simpeg\Traits;

use Illuminate\Http\Client\Response;
use Kanekescom\Siasn\Api\Simpeg\Helpers\UrlParser;

trait HasDiklatEndpoint
{
    public function getDiklatId(array $paths = [], array $queries = []): Response
    {
        $urlFormat = "/diklat/id/{idRiwayatDiklat}";
        $url = (new UrlParser($urlFormat))->parse($paths);

        return $this->get($url, $queries);
    }

    public function postDiklatSave(array $paths = [], array $queries = []): Response
    {
        $urlFormat = "/diklat/save";
        $url = (new UrlParser($urlFormat))->parse($paths);

        return $this->get($url, $queries);
    }
}
