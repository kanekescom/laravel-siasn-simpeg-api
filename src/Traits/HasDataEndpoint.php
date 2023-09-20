<?php

namespace Kanekescom\Siasn\Api\Simpeg\Traits;

use Illuminate\Http\Client\Response;

trait HasDataEndpoint
{
    /**
     * Issue a GET request.
     */
    public function getDataUtama($nipBaru): Response
    {
        return $this->get("/pns/data-utama/{$nipBaru}");
    }
}
