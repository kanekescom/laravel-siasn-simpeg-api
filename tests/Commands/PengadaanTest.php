<?php

it('can get list pengadaan instansi', function () {
    $tahun = config('siasn-api.params_test.get_list_pengadaan_instansi_tahun');

    expect($tahun)->not->toBeEmpty();

    $this->artisan("siasn-simpeg:get-list-pengadaan-instansi {$tahun}")->assertSuccessful();
});
