<?php

namespace Kanekescom\Siasn\Api\Simpeg\Traits;

use Illuminate\Http\Client\Response;
use Kanekescom\Siasn\Api\Simpeg\Helpers\UrlParser;

trait HasKursusEndpoint
{
    public function getKursusId(array $paths = [], array $query = []): Response
    {
        $urlFormat = '/kursus/id/{idRiwayatKursus}';
        $urlParsed = (new UrlParser($urlFormat))->parse($paths);

        return $this->get($urlParsed, $query);
    }

    public function postKursusSave(array $paths = [], array $query = []): Response
    {
        $urlFormat = '/kursus/save';
        $urlParsed = (new UrlParser($urlFormat))->parse($paths);

        return $this->post($urlParsed, $query);
    }
}
