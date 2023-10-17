<?php

namespace Kanekescom\Siasn\Api\Simpeg\Traits;

use Illuminate\Http\Client\Response;
use Kanekescom\Siasn\Api\Simpeg\Helpers\UrlParser;

trait HasAngkaKreditEndpoint
{
    public function getAngkaKreditId(array $paths = [], array $queries = []): Response
    {
        $urlFormat = "/angkakredit/id/{idRiwayatAngkaKredit}";
        $url = (new UrlParser($urlFormat))->parse($paths);

        return $this->get($url, $queries);
    }

    public function postAngkaKreditSave(array $paths = [], array $queries = []): Response
    {
        $urlFormat = "/angkakredit/save";
        $url = (new UrlParser($urlFormat))->parse($paths);

        return $this->get($url, $queries);
    }
}
