<?php

namespace Kanekescom\Siasn\Api\Simpeg\Traits;

use Illuminate\Http\Client\Response;
use Kanekescom\Siasn\Api\Simpeg\Helpers\UrlParser;

trait HasDokEndpoint
{
    public function getDownloadDok(array $paths = [], array $query = []): Response
    {
        $urlFormat = '/download-dok';
        $urlParsed = (new UrlParser($urlFormat))->parse($paths);

        return $this->get($urlParsed, $query);
    }

    public function postUploadDok(array $paths = [], array $query = []): Response
    {
        $urlFormat = '/upload-dok';
        $urlParsed = (new UrlParser($urlFormat))->parse($paths);

        return $this->post($urlParsed, $query);
    }

    public function postUploadDokRw(array $paths = [], array $query = []): Response
    {
        $urlFormat = '/upload-dok-rw';
        $urlParsed = (new UrlParser($urlFormat))->parse($paths);

        return $this->post($urlParsed, $query);
    }
}
