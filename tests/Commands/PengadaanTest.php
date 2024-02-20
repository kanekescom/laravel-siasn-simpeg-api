<?php

it('can get pengadaan list pengadaan instansi', function () {
    $tahun = config('siasn-simpeg-api.params_test.get_pengadaan_list_pengadaan_instansi_tahun');

    expect($tahun)->not->toBeEmpty();

    $this->artisan("siasn-simpeg:get-pengadaan-list-pengadaan-instansi {$tahun}")->assertSuccessful();
});
