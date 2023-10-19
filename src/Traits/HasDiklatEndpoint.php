<?php

namespace Kanekescom\Siasn\Api\Simpeg\Traits;

use Illuminate\Http\Client\Response;
use Kanekescom\Siasn\Api\Simpeg\Helpers\UrlParser;

trait HasDiklatEndpoint
{
    public function getDiklatId(array $paths = [], array $query = []): Response
    {
        $urlFormat = '/diklat/id/{idRiwayatDiklat}';
        $urlParsed = (new UrlParser($urlFormat))->parse($paths);

        return $this->get($urlParsed, $query);
    }

    public function postDiklatSave(array $paths = [], array $query = []): Response
    {
        $urlFormat = '/diklat/save';
        $urlParsed = (new UrlParser($urlFormat))->parse($paths);

        return $this->post($urlParsed, $query);
    }
}
