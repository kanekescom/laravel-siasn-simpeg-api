<?php

use Kanekescom\Siasn\Api\Simpeg\Facades\Simpeg;

it('can get jabatan id', function () {
    $id = config('siasn-api.params_test.get_jabatan_id');
    $paths = [
        'idRiwayatJabatan' => $id,
    ];
    $response = Simpeg::getJabatanId($paths);

    expect($id)->not->toBeEmpty();
    expect($response->successful())->toBeTrue();
});

it('can get jabatan pns', function () {
    $nipBaru = config('siasn-api.params_test.nip_baru');
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
