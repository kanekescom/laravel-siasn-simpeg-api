<?php

namespace Kanekescom\Siasn\Api\Simpeg\Traits;

use Illuminate\Http\Client\Response;
use Kanekescom\Siasn\Api\Simpeg\Helpers\UrlParser;

trait HasSkp22Endpoint
{
    public function postSkp2021Save(array $paths = [], array $queries = []): Response
    {
        $urlFormat = '/skp/2021/save';
        $url = (new UrlParser($urlFormat))->parse($paths);

        return $this->get($url, $queries);
    }

    public function getSkpId(array $paths = [], array $queries = []): Response
    {
        $urlFormat = '/skp/id/{idRiwayatSkp}';
        $url = (new UrlParser($urlFormat))->parse($paths);

        return $this->get($url, $queries);
    }

    public function postSkpSave(array $paths = [], array $queries = []): Response
    {
        $urlFormat = '/skp/save';
        $url = (new UrlParser($urlFormat))->parse($paths);

        return $this->get($url, $queries);
    }
}
