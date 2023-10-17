<?php

namespace Kanekescom\Siasn\Api\Simpeg\Traits;

use Illuminate\Http\Client\Response;
use Kanekescom\Siasn\Api\Simpeg\Helpers\UrlParser;

trait HasKpEndpoint
{
    public function getListKpInstansi(array $paths = [], array $query = []): Response
    {
        $urlFormat = '/pns/list-kp-instansi';
        $url = (new UrlParser($urlFormat))->parse($paths);

        return $this->get($url, $query);
    }

    public function postUploadDokSkKp(array $paths = [], array $query = []): Response
    {
        $urlFormat = '/upload-dok-sk-kp';
        $url = (new UrlParser($urlFormat))->parse($paths);

        return $this->post($url, $query);
    }
}
