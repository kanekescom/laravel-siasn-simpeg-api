<?php

it('can get list pensiun instansi', function () {
    $tglAwal = config('siasn-api.params_test.get_list_pensiun_instansi_tgl_awal');
    $tglAkhir = config('siasn-api.params_test.get_list_pensiun_instansi_tgl_akhir');

    expect($tglAwal)->not->toBeEmpty();
    expect($tglAkhir)->not->toBeEmpty();

    $this->artisan("siasn-simpeg:get-list-pensiun-instansi {$tglAwal} {$tglAkhir}")->assertSuccessful();
});
