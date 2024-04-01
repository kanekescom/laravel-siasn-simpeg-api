<?php

it('can get pns data anak', function () {
    $nipBaru = config('siasn-simpeg-api.params_test.get_pns_data_anak_nipbaru');

    expect($nipBaru)->not->toBeEmpty();

    $this->artisan("siasn-simpeg:get-pns-data-anak {$nipBaru}")
        ->assertSuccessful();
});

it('can get pns data ortu', function () {
    $nipBaru = config('siasn-simpeg-api.params_test.get_pns_data_ortu_nipbaru');

    expect($nipBaru)->not->toBeEmpty();

    $this->artisan("siasn-simpeg:get-pns-data-ortu {$nipBaru}")
        ->assertSuccessful();
});

it('can get pns data pasangan', function () {
    $nipBaru = config('siasn-simpeg-api.params_test.get_pns_data_pasangan_nipbaru');

    expect($nipBaru)->not->toBeEmpty();

    $this->artisan("siasn-simpeg:get-pns-data-pasangan {$nipBaru}")
        ->assertSuccessful();
});

it('can get pns data utama', function () {
    $nipBaru = config('siasn-simpeg-api.params_test.get_pns_data_utama_nipbaru');

    expect($nipBaru)->not->toBeEmpty();

    $this->artisan("siasn-simpeg:get-pns-data-utama {$nipBaru}")
        ->assertSuccessful();
});

it('can get pns photo', function () {
    $idPns = config('siasn-simpeg-api.params_test.get_pns_photo_idpns');

    expect($idPns)->not->toBeEmpty();

    $this->artisan("siasn-simpeg:get-pns-photo {$idPns}")
        ->assertSuccessful();
});

it('can download pns photo', function () {
    $idPns = config('siasn-simpeg-api.params_test.download_pns_photo_idpns');

    expect($idPns)->not->toBeEmpty();

    $this->artisan("siasn-simpeg:download-pns-photo {$idPns}")
        ->assertSuccessful();
});
