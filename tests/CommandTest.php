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
    public function can_get_list_pengadaan()
    {
        $tahun = now()->year;

        $this->artisan("siasn-simpeg:get-list-pengadaan {$tahun}")->assertSuccessful();
    }

    /** @test */
    public function can_get_list_pensiun()
    {
        $tglAwal = now()->format('01-01-'.now()->year);
        $tglAkhir = now()->format('d-m-Y');

        $this->artisan("siasn-simpeg:get-list-pensiun {$tglAwal} {$tglAkhir}")->assertSuccessful();
    }

    /** @test */
    public function can_get_riwayat_jabatan()
    {
        $nipBaru = env('PEGAWAI_NIP_BARU');

        $this->artisan("siasn-simpeg:get-rw-jabatan {$nipBaru}")->assertSuccessful();
    }
}
