<?php

namespace Kanekescom\Siasn\Api\Simpeg\Traits;

use Illuminate\Http\Client\Response;

trait HasListPengadaanEndpoint
{
    /**
     * Issue a GET request.
     */
    public function getListPengadaan($tahun): Response
    {
        return $this->get('/pengadaan/list-pengadaan-instansi', ['tahun' => $tahun]);
    }
}
