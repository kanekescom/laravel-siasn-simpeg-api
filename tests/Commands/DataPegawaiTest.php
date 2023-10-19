<?php

it('can get data anak', function () {
    $nipBaru = config('siasn-api.params_test.get_data_anak_nip_baru');

    expect($nipBaru)->not->toBeEmpty();

    $this->artisan("siasn-simpeg:get-data-anak {$nipBaru}")->assertSuccessful();
});

it('can get data ortu', function () {
    $nipBaru = config('siasn-api.params_test.nip_baru');

    expect($nipBaru)->not->toBeEmpty();

    $this->artisan("siasn-simpeg:get-data-ortu {$nipBaru}")->assertSuccessful();
});

it('can get data pasangan', function () {
    $nipBaru = config('siasn-api.params_test.nip_baru');

    expect($nipBaru)->not->toBeEmpty();

    $this->artisan("siasn-simpeg:get-data-pasangan {$nipBaru}")->assertSuccessful();
});

it('can get data utama', function () {
    $nipBaru = config('siasn-api.params_test.nip_baru');

    expect($nipBaru)->not->toBeEmpty();

    $this->artisan("siasn-simpeg:get-data-utama {$nipBaru}")->assertSuccessful();
});

it('can post data utama update', function () {
    $query = config('siasn-api.params_test.post_data_utama_update_query');

    expect($query)->not->toBeEmpty();
    expect(json_decode($query, true))->toBeArray();

    $this->artisan('siasn-simpeg:post-data-utama-update')
        ->expectsQuestion('Copy the json above, fill it and paste it here', $query)
        ->assertSuccessful();
});
