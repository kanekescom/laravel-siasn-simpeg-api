<?php

it('can get list pensiun instansi', function () {
    $get_list_pensiun_instansi_tgl_awal = config('siasn-api.params_test.get_list_pensiun_instansi_tgl_awal');
    $get_list_pensiun_instansi_tgl_akhir = config('siasn-api.params_test.get_list_pensiun_instansi_tgl_akhir');

    $this->artisan("siasn-simpeg:get-list-pensiun-instansi {$get_list_pensiun_instansi_tgl_awal} {$get_list_pensiun_instansi_tgl_akhir}")->assertSuccessful();
});
