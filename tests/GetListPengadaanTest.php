<?php

namespace Kanekescom\Siasn\Api\Simpeg\Tests;

use Kanekescom\Siasn\Api\Simpeg\Facades\Simpeg;

class GetListPengadaanTest extends TestCase
{
    /** @test */
    public function can_get_list_pengadaan()
    {
        $response = Simpeg::getListPengadaan(now()->year);

        $this->assertTrue($response->successful());
    }
}
