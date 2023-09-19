<?php

namespace Kanekescom\Siasn\Api\Simpeg\Tests;

use Kanekescom\Siasn\Api\Simpeg\Facades\Simpeg;

class GetRiwayatJabatanTest extends TestCase
{
    /** @test */
    public function can_get_riwayat_jabatan()
    {
        $nipBaru = env('PEGAWAI_NIP_BARU');
        $response = Simpeg::getRiwayatJabatan($nipBaru);

        $this->assertTrue($response->successful());
    }
}
