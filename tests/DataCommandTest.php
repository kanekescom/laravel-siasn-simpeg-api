<?php

it('can get data anak', function () {
    $get_data_anak_nip_baru = config('siasn-api.params_test.get_data_anak_nip_baru');

    $this->artisan("siasn-simpeg:get-data-anak {$get_data_anak_nip_baru}")->assertSuccessful();
});

it('can get data ortu', function () {
    $nip_baru = config('siasn-api.params_test.nip_baru');

    $this->artisan("siasn-simpeg:get-data-ortu {$nip_baru}")->assertSuccessful();
});

it('can get data pasangan', function () {
    $nip_baru = config('siasn-api.params_test.nip_baru');

    $this->artisan("siasn-simpeg:get-data-pasangan {$nip_baru}")->assertSuccessful();
});

it('can get data utama', function () {
    $nip_baru = config('siasn-api.params_test.nip_baru');

    $this->artisan("siasn-simpeg:get-data-utama {$nip_baru}")->assertSuccessful();
});
