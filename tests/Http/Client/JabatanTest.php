<?php

use Kanekescom\Siasn\Simpeg\Api\Http\Client\Jabatan;

it('can get jabatan id', function () {
    $id = config('siasn-simpeg-api.params_test.get_jabatan_id');

    expect($id)->not->toBeEmpty();

    $paths = [
        'idRiwayatJabatan' => $id,
    ];
    $response = Jabatan::getId($paths);
    $result = $response->collect()->toArray();

    expect($response->successful())->toBeTrue();
    expect($result)->toMatchArray([
        'code' => '1',
    ]);
});

it('can get jabatan nipbaru', function () {
    $nipBaru = config('siasn-simpeg-api.params_test.get_jabatan_nipbaru');

    expect($nipBaru)->not->toBeEmpty();

    $paths = [
        'nipBaru' => $nipBaru,
    ];
    $response = Jabatan::getNipBaru($paths);
    $result = $response->collect()->toArray();

    expect($response->successful())->toBeTrue();
    expect($result)->toMatchArray([
        'code' => '1',
    ]);
});
