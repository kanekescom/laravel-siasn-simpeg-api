<?php

namespace Kanekescom\Siasn\Api\Simpeg\Traits;

use Illuminate\Http\Client\Response;
use Kanekescom\Siasn\Api\Simpeg\Helpers\UrlParser;

trait HasKursusEndpoint
{
    public function getKursusId(array $paths = [], array $query = []): Response
    {
        $urlFormat = '/kursus/id/{idRiwayatKursus}';
        $url = (new UrlParser($urlFormat))->parse($paths);

        return $this->get($url, $query);
    }

    public function postKursusSave(array $paths = [], array $query = []): Response
    {
        $urlFormat = '/kursus/save';
        $url = (new UrlParser($urlFormat))->parse($paths);

        return $this->post($url, $query);
    }
}
