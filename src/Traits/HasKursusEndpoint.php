<?php

namespace Kanekescom\Siasn\Simpeg\Api\Traits;

use Illuminate\Http\Client\Response;
use Kanekescom\Siasn\Simpeg\Api\Helpers\UrlParser;

trait HasKursusEndpoint
{
    public function deleteKursusDelete(array $paths = [], array $query = []): Response
    {
        $urlFormat = '/kursus/delete/{idRiwayatKursus}';
        $urlParsed = (new UrlParser($urlFormat))->parse($paths);

        return $this->delete($urlParsed, $query);
    }

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
