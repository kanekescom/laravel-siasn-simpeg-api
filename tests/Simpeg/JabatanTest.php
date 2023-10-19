<?php

use Kanekescom\Siasn\Api\Simpeg\Facades\Simpeg;

it('can get jabatan id', function () {
    $id = config('siasn-api.params_test.get_jabatan_id');

    expect($id)->not->toBeEmpty();

    $paths = [
        'idRiwayatJabatan' => $id,
    ];
    $response = Simpeg::getJabatanId($paths);

    expect($response->successful())->toBeTrue();
});

it('can get jabatan pns', function () {
    $nipBaru = config('siasn-api.params_test.get_data_anak_nip_baru');

    expect($nipBaru)->not->toBeEmpty();

    $paths = [
        'nipBaru' => $nipBaru,
    ];
    $response = Simpeg::getJabatanPns($paths);

    expect($nipBaru)->not->toBeEmpty();
    expect($response->successful())->toBeTrue();
});

it('can post jabatan save', function () {
    $query = json_decode(config('siasn-api.params_test.post_jabatan_save_query'), true);

    expect($query)->toBeArray();

    $response = Simpeg::postJabatanSave([], $query);

    expect($response->successful())->toBeTrue();
});
