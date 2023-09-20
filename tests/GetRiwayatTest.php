<?php

namespace Kanekescom\Siasn\Api\Simpeg\Tests;

use Kanekescom\Siasn\Api\Simpeg\Facades\Simpeg;
use Kanekescom\Siasn\Api\Simpeg\Models\RiwayatJabatan;

class GetRiwayatTest extends TestCase
{
    /** @test */
    public function can_get_riwayat_jabatan()
    {
        $nipBaru = env('PEGAWAI_NIP_BARU');
        $response = Simpeg::getRiwayatJabatan($nipBaru);

        $this->assertTrue($response->successful());
    }

    /** @test */
    public function can_get_riwayat_jabatan_as_model()
    {
        $nipBaru = env('PEGAWAI_NIP_BARU');
        $model = (new RiwayatJabatan($nipBaru))->all();

        $this->assertTrue(is_array($model));
    }
}
