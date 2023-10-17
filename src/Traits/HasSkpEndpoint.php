<?php

namespace Kanekescom\Siasn\Api\Simpeg\Traits;

use Illuminate\Http\Client\Response;
use Kanekescom\Siasn\Api\Simpeg\Helpers\UrlParser;

trait HasSkpEndpoint
{
    public function getSkp22Id(array $paths = [], array $queries = []): Response
    {
        $urlFormat = "/skp22/id/{idRiwayatSkp}";
        $url = (new UrlParser($urlFormat))->parse($paths);

        return $this->get($url, $queries);
    }

    public function postSkp22Save(array $paths = [], array $queries = []): Response
    {
        $urlFormat = "/skp22/save";
        $url = (new UrlParser($urlFormat))->parse($paths);

        return $this->get($url, $queries);
    }
}
