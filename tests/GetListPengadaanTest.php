<?php

namespace Kanekescom\Siasn\Api\Simpeg\Tests;

use Kanekescom\Siasn\Api\Simpeg\Facades\Simpeg;

class GetListPengadaanTest extends TestCase
{
    /** @test */
    public function can_get_ref_unor()
    {
        $response = Simpeg::getRefUnor();

        $this->assertTrue($response->successful());
    }

    /** @test */
    public function can_get_pengadaan_list_instansi()
    {
        $response = Simpeg::getListPengadaan(now()->year);

        $this->assertTrue($response->successful());
    }
}
