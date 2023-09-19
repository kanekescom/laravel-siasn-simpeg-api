<?php

namespace Kanekescom\Siasn\Api\Simpeg\Traits;

use Illuminate\Http\Client\Response;

trait HasRiwayatEndpoint
{
    /**
     * Issue a GET request.
     */
    public function getRiwayatJabatan($nipBaru): Response
    {
        return $this->get("/pns/rw-jabatan/{$nipBaru}");
    }
}
