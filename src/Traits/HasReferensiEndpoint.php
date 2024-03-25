<?php

namespace Kanekescom\Siasn\Simpeg\Api\Traits;

use Illuminate\Http\Client\Response;
use Kanekescom\Siasn\Simpeg\Api\Helpers\UrlParser;

trait HasReferensiEndpoint
{
    public function getReferensiRefUnor(array $paths = [], array $query = []): Response
    {
        $urlFormat = '/referensi/ref-unor';
        $urlParsed = (new UrlParser($urlFormat))->parse($paths);

        return $this->get($urlParsed, $query);
    }
}
