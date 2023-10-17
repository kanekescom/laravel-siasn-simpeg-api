<?php

namespace Kanekescom\Siasn\Api\Simpeg\Traits;

use Illuminate\Http\Client\Response;
use Kanekescom\Siasn\Api\Simpeg\Helpers\UrlParser;

trait HasCpnsEndpoint
{
    public function postCpnsSave(array $paths = [], array $query = []): Response
    {
        $urlFormat = '/cpns/save';
        $url = (new UrlParser($urlFormat))->parse($paths);

        return $this->post($url, $query);
    }
}
