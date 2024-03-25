<?php

namespace Kanekescom\Siasn\Simpeg\Api\Traits;

use Illuminate\Http\Client\Response;
use Kanekescom\Siasn\Simpeg\Api\Helpers\UrlParser;

trait HasKpEndpoint
{
    public function getPnsListKpInstansi(array $paths = [], array $query = []): Response
    {
        $urlFormat = '/pns/list-kp-instansi';
        $urlParsed = (new UrlParser($urlFormat))->parse($paths);

        return $this->get($urlParsed, $query);
    }

    public function postUploadDokSkKp(array $paths = [], array $query = []): Response
    {
        $urlFormat = '/upload-dok-sk-kp';
        $urlParsed = (new UrlParser($urlFormat))->parse($paths);

        return $this->post($urlParsed, $query);
    }
}
