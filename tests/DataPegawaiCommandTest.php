<?php

it('can get data anak', function () {
    $get_data_anak_nip_baru = config('siasn-api.params_test.get_data_anak_nip_baru');

    expect($get_data_anak_nip_baru)->not->toBeEmpty();

    $this->artisan("siasn-simpeg:get-data-anak {$get_data_anak_nip_baru}")->assertSuccessful();
});

it('can get data ortu', function () {
    $nip_baru = config('siasn-api.params_test.nip_baru');

    expect($nip_baru)->not->toBeEmpty();

    $this->artisan("siasn-simpeg:get-data-ortu {$nip_baru}")->assertSuccessful();
});

it('can get data pasangan', function () {
    $nip_baru = config('siasn-api.params_test.nip_baru');

    expect($nip_baru)->not->toBeEmpty();

    $this->artisan("siasn-simpeg:get-data-pasangan {$nip_baru}")->assertSuccessful();
});

it('can get data utama', function () {
    $nip_baru = config('siasn-api.params_test.nip_baru');

    expect($nip_baru)->not->toBeEmpty();

    $this->artisan("siasn-simpeg:get-data-utama {$nip_baru}")->assertSuccessful();
});

it('can post data utama update', function () {
    $query = config('siasn-api.params_test.post_data_utama_update_query');

    expect($query)->not->toBeEmpty();

    $this->artisan('siasn-simpeg:post-data-utama-update')
        ->expectsQuestion('Copy the json above, fill it and paste it here', $query)
        ->assertSuccessful();
});
