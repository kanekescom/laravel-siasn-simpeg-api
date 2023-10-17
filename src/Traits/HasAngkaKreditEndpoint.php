<?php

namespace Kanekescom\Siasn\Api\Simpeg\Traits;

use Illuminate\Http\Client\Response;
use Kanekescom\Siasn\Api\Simpeg\Helpers\UrlParser;

trait HasAngkaKreditEndpoint
{
    public function getAngkaKreditId(array $paths = [], array $query = []): Response
    {
        $urlFormat = '/angkakredit/id/{idRiwayatAngkaKredit}';
        $url = (new UrlParser($urlFormat))->parse($paths);

        return $this->get($url, $query);
    }

    public function postAngkaKreditSave(array $paths = [], array $query = []): Response
    {
        $urlFormat = '/angkakredit/save';
        $url = (new UrlParser($urlFormat))->parse($paths);

        return $this->post($url, $query);
    }
}
