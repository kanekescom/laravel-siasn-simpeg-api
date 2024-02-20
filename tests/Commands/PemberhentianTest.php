<?php

it('can get pns list pensiun instansi', function () {
    $tglAwal = config('siasn-simpeg-api.params_test.get_pns_list_pensiun_instansi_tglawal');
    $tglAkhir = config('siasn-simpeg-api.params_test.get_pns_list_pensiun_instansi_tglakhir');

    expect($tglAwal)->not->toBeEmpty();
    expect($tglAkhir)->not->toBeEmpty();

    $this->artisan("siasn-simpeg:get-pns-list-pensiun-instansi {$tglAwal} {$tglAkhir}")->assertSuccessful();
});
