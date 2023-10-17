<?php

namespace Kanekescom\Siasn\Api\Simpeg\Traits;

use Illuminate\Http\Client\Response;
use Kanekescom\Siasn\Api\Simpeg\Helpers\UrlParser;

trait HasPemberhentianEndpoint
{
    public function getListPensiunInstansi(array $paths = [], array $query = []): Response
    {
        $urlFormat = '/pns/list-pensiun-instansi';
        $url = (new UrlParser($urlFormat))->parse($paths);

        return $this->get($url, $query);
    }
}
