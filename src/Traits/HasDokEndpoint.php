<?php

namespace Kanekescom\Siasn\Api\Simpeg\Traits;

use Illuminate\Http\Client\Response;
use Kanekescom\Siasn\Api\Simpeg\Helpers\UrlParser;

trait HasDokEndpoint
{
    public function getDownloadDok(array $paths = [], array $queries = []): Response
    {
        $urlFormat = "/download-dok";
        $url = (new UrlParser($urlFormat))->parse($paths);

        return $this->get($url, $queries);
    }

    public function postUploadDok(array $paths = [], array $queries = []): Response
    {
        $urlFormat = "/upload-dok";
        $url = (new UrlParser($urlFormat))->parse($paths);

        return $this->get($url, $queries);
    }

    public function postUploadDokRw(array $paths = [], array $queries = []): Response
    {
        $urlFormat = "/upload-dok-rw";
        $url = (new UrlParser($urlFormat))->parse($paths);

        return $this->get($url, $queries);
    }
}
