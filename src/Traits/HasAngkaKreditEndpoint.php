<?php

namespace Kanekescom\Siasn\Api\Simpeg\Traits;

use Illuminate\Http\Client\Response;
use Kanekescom\Siasn\Api\Simpeg\Helpers\UrlParser;

trait HasAngkaKreditEndpoint
{
    public function getAngkaKreditId(array $paths = [], array $query = []): Response
    {
        $urlFormat = '/angkakredit/id/{idRiwayatAngkaKredit}';
        $urlParsed = (new UrlParser($urlFormat))->parse($paths);

        return $this->get($urlParsed, $query);
    }

    public function postAngkaKreditSave(array $paths = [], array $query = []): Response
    {
        $urlFormat = '/angkakredit/save';
        $urlParsed = (new UrlParser($urlFormat))->parse($paths);

        return $this->post($urlParsed, $query);
    }
}
