<?php

use Kanekescom\Siasn\Api\Simpeg\Facades\Simpeg;

it('can get data anak', function () {
    $nipBaru = config('siasn-api.params_test.get_data_anak_nip_baru');

    expect($nipBaru)->not->toBeEmpty();

    $paths = [
        'nipBaru' => $nipBaru,
    ];
    $response = Simpeg::getDataAnak($paths);

    expect($response->successful())->toBeTrue();
});

it('can get data ortu', function () {
    $nipBaru = config('siasn-api.params_test.get_data_anak_nip_baru');

    expect($nipBaru)->not->toBeEmpty();

    $paths = [
        'nipBaru' => $nipBaru,
    ];
    $response = Simpeg::getDataOrtu($paths);

    expect($nipBaru)->not->toBeEmpty();
    expect($response->successful())->toBeTrue();
});

it('can get data pasangan', function () {
    $nipBaru = config('siasn-api.params_test.get_data_anak_nip_baru');

    expect($nipBaru)->not->toBeEmpty();

    $paths = [
        'nipBaru' => $nipBaru,
    ];
    $response = Simpeg::getDataPasangan($paths);

    expect($nipBaru)->not->toBeEmpty();
    expect($response->successful())->toBeTrue();
});

it('can get data utama', function () {
    $nipBaru = config('siasn-api.params_test.get_data_anak_nip_baru');

    expect($nipBaru)->not->toBeEmpty();

    $paths = [
        'nipBaru' => $nipBaru,
    ];
    $response = Simpeg::getDataUtama($paths);

    expect($nipBaru)->not->toBeEmpty();
    expect($response->successful())->toBeTrue();
});

it('can post data utama update', function () {
    $query = json_decode(config('siasn-api.params_test.post_data_utama_update_query'), true);

    expect($query)->toBeArray();

    $response = Simpeg::postDataUtamaUpdate([], $query);

    expect($response->successful())->toBeTrue();
});
