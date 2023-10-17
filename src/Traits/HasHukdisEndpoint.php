<?php

namespace Kanekescom\Siasn\Api\Simpeg\Traits;

use Illuminate\Http\Client\Response;
use Kanekescom\Siasn\Api\Simpeg\Helpers\UrlParser;

trait HasHukdisEndpoint
{
    public function getHukdisId(array $paths = [], array $query = []): Response
    {
        $urlFormat = '/hukdis/id/{idRiwayatHukdis}';
        $url = (new UrlParser($urlFormat))->parse($paths);

        return $this->get($url, $query);
    }

    public function postHukdisSave(array $paths = [], array $query = []): Response
    {
        $urlFormat = '/hukdis/save';
        $url = (new UrlParser($urlFormat))->parse($paths);

        return $this->post($url, $query);
    }
}
