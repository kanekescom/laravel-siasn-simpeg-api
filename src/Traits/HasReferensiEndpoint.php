<?php

namespace Kanekescom\Siasn\Api\Simpeg\Traits;

use Illuminate\Http\Client\Response;

trait HasReferensiEndpoint
{
    /**
     * Issue a GET request.
     */
    public function getRefUnor(): Response
    {
        return $this->get('/referensi/ref-unor');
    }
}
