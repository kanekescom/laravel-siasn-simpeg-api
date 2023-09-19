<?php

namespace Kanekescom\Siasn\Api\Simpeg\Traits;

use Illuminate\Http\Client\Response;

trait HasListPensiunEndpoint
{
    /**
     * Issue a GET request.
     */
    public function getListPensiun($tglAwal, $tglAkhir = null): Response
    {
        $tglAkhir = $tglAkhir ?: now()->format('d-m-Y');

        return $this->get('/pns/list-pensiun-instansi', [
            'tglAwal' => $tglAwal,
            'tglAkhir' => $tglAkhir,
        ]);
    }
}
