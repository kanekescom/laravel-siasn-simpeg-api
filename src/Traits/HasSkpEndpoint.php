<?php

namespace Kanekescom\Siasn\Api\Simpeg\Traits;

use Illuminate\Http\Client\Response;
use Kanekescom\Siasn\Api\Simpeg\Helpers\UrlParser;

trait HasSkpEndpoint
{
    public function postSkp2021Save(array $paths = [], array $query = []): Response
    {
        $urlFormat = '/skp/2021/save';
        $url = (new UrlParser($urlFormat))->parse($paths);

        return $this->get($url, $query);
    }

    public function getSkpId(array $paths = [], array $query = []): Response
    {
        $urlFormat = '/skp/id/{idRiwayatSkp}';
        $url = (new UrlParser($urlFormat))->parse($paths);

        return $this->get($url, $query);
    }

    public function postSkpSave(array $paths = [], array $query = []): Response
    {
        $urlFormat = '/skp/save';
        $url = (new UrlParser($urlFormat))->parse($paths);

        return $this->post($url, $query);
    }
}
