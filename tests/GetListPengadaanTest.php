<?php

namespace Kanekescom\Siasn\Api\Simpeg\Tests;

use Kanekescom\Siasn\Api\Simpeg\Facades\Simpeg;
use Kanekescom\Siasn\Api\Simpeg\Models\ListPengadaan;

class GetListPengadaanTest extends TestCase
{
    /** @test */
    public function can_get_list_pengadaan()
    {
        $tahun = now()->year;
        $response = Simpeg::getListPengadaan($tahun);

        $this->assertTrue($response->successful());
    }

    /** @test */
    public function can_get_list_pengadaan_as_model()
    {
        $tahun = now()->year;
        $model = (new ListPengadaan($tahun))->all();

        $this->assertTrue(is_array($model));
    }
}
