<?php

it('can get list pengadaan instansi', function () {
    $get_list_pengadaan_instansi_tahun = config('siasn-api.params_test.get_list_pengadaan_instansi_tahun');

    $this->artisan("siasn-simpeg:get-list-pengadaan-instansi {$get_list_pengadaan_instansi_tahun}")->assertSuccessful();
});
