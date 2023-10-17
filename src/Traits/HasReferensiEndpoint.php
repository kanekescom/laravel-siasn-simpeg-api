<?php

namespace Kanekescom\Siasn\Api\Simpeg\Traits;

use Illuminate\Http\Client\Response;
use Kanekescom\Siasn\Api\Simpeg\Helpers\UrlParser;

trait HasReferensiEndpoint
{
    public function getReferensiUnor(array $paths = [], array $query = []): Response
    {
        $urlFormat = '/referensi/ref-unor';
        $url = (new UrlParser($urlFormat))->parse($paths);

        return $this->get($url, $query);
    }
}
