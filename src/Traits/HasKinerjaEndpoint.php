<?php

namespace Kanekescom\Siasn\Simpeg\Api\Traits;

use Illuminate\Http\Client\Response;
use Kanekescom\Siasn\Simpeg\Api\Helpers\UrlParser;

trait HasKinerjaEndpoint
{
    public function deleteKinerjaperiodikDelete(array $paths = [], array $query = []): Response
    {
        $urlFormat = '/kinerjaperiodik/delete/{idRiwayatKinerjaPeriodik}';
        $urlParsed = (new UrlParser($urlFormat))->parse($paths);

        return $this->delete($urlParsed, $query);
    }

    public function postKinerjaperiodikSave(array $paths = [], array $query = []): Response
    {
        $urlFormat = '/kinerjaperiodik/save';
        $urlParsed = (new UrlParser($urlFormat))->parse($paths);

        return $this->post($urlParsed, $query);
    }
}
