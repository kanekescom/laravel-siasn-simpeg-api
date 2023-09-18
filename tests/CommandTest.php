<?php

namespace Kanekescom\Siasn\Api\Simpeg\Tests;

class CommandTest extends TestCase
{
    /** @test */
    public function can_get_ref_unor()
    {
        $this->artisan('siasn-simpeg:get-ref-unor')->assertSuccessful();
    }

    /** @test */
    public function can_get_pengadaan_list_instansi()
    {
        $this->artisan('siasn-simpeg:get-list-pengadaan '.(now()->year))->assertSuccessful();
    }
}
