<?php

namespace Kanekescom\Siasn\Api\Simpeg\Tests;

use Kanekescom\Siasn\Api\Simpeg\Facades\Simpeg;
use Kanekescom\Siasn\Api\Simpeg\Models\ListPensiun;

class GetListPensiunTest extends TestCase
{
    /** @test */
    public function can_get_list_pensiun()
    {
        $tglAwal = now()->format('01-01-'.now()->year);
        $tglAkhir = now()->format('d-m-Y');

        $response = Simpeg::getListPensiun($tglAwal, $tglAkhir);

        $this->assertTrue($response->successful());
    }

    /** @test */
    public function can_get_list_pensiun_as_model()
    {
        $tglAwal = now()->format('01-01-'.now()->year);
        $tglAkhir = now()->format('d-m-Y');
        $model = (new ListPensiun($tglAwal, $tglAkhir))->all();

        $this->assertTrue(is_array($model));
    }
}
