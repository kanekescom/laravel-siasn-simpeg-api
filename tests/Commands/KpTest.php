<?php

it('can get pns list kp instansi', function () {
    $periode = config('siasn-simpeg-api.params_test.get_pns_list_kp_instansi_periode');

    expect($periode)->not->toBeEmpty();

    $this->artisan("siasn-simpeg:get-pns-list-kp-instansi {$periode}")->assertSuccessful();
});
