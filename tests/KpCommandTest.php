<?php

it('can get list kp instansi', function () {
    $get_list_kp_instansi_periode = config('siasn-api.params_test.get_list_kp_instansi_periode');

    $this->artisan("siasn-simpeg:get-list-kp-instansi {$get_list_kp_instansi_periode}")->assertSuccessful();
});
