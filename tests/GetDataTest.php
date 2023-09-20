<?php

namespace Kanekescom\Siasn\Api\Simpeg\Tests;

use Kanekescom\Siasn\Api\Simpeg\Facades\Simpeg;
use Kanekescom\Siasn\Api\Simpeg\Models\DataUtama;

class GetDataTest extends TestCase
{
    /** @test */
    public function can_get_data_utama()
    {
        $nipBaru = env('PEGAWAI_NIP_BARU');
        $response = Simpeg::getDataUtama($nipBaru);

        $this->assertTrue($response->successful());
    }

    /** @test */
    public function can_get_data_utama_as_model()
    {
        $nipBaru = env('PEGAWAI_NIP_BARU');
        $model = (new DataUtama($nipBaru))->all();

        $this->assertTrue(is_array($model));
    }
}
