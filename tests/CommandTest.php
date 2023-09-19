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
    public function can_get_ref_unor_as_model()
    {
        $this->artisan('siasn-simpeg:get-ref-unor --model')->assertSuccessful();
    }

    /** @test */
    public function can_get_list_pengadaan()
    {
        $tahun = now()->year;

        $this->artisan("siasn-simpeg:get-list-pengadaan {$tahun}")->assertSuccessful();
    }

    /** @test */
    public function can_get_list_pengadaan_as_model()
    {
        $tahun = now()->year;

        $this->artisan("siasn-simpeg:get-list-pengadaan {$tahun} --model")->assertSuccessful();
    }

    /** @test */
    public function can_get_list_pensiun()
    {
        $tglAwal = now()->format('01-01-'.now()->year);
        $tglAkhir = now()->format('d-m-Y');

        $this->artisan("siasn-simpeg:get-list-pensiun {$tglAwal} {$tglAkhir}")->assertSuccessful();
    }

    /** @test */
    public function can_get_list_pensiun_as_model()
    {
        $tglAwal = now()->format('01-01-'.now()->year);
        $tglAkhir = now()->format('d-m-Y');

        $this->artisan("siasn-simpeg:get-list-pensiun {$tglAwal} {$tglAkhir} --model")->assertSuccessful();
    }

    /** @test */
    public function can_get_riwayat_jabatan()
    {
        $nipBaru = env('PEGAWAI_NIP_BARU');

        $this->artisan("siasn-simpeg:get-rw-jabatan {$nipBaru}")->assertSuccessful();
    }

    /** @test */
    public function can_get_riwayat_jabatan_as_model()
    {
        $nipBaru = env('PEGAWAI_NIP_BARU');

        $this->artisan("siasn-simpeg:get-rw-jabatan {$nipBaru} --model")->assertSuccessful();
    }
}
