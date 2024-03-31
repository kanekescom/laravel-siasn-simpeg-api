<?php

use Kanekescom\Siasn\Simpeg\Api\Diklat;

it('can get diklat id', function () {
    $id = config('siasn-simpeg-api.params_test.get_diklat_id');

    expect($id)->not->toBeEmpty();

    $paths = [
        'idRiwayatDiklat' => $id,
    ];
    $response = Diklat::get($paths);
    $result = $response->collect()->toArray();

    expect($response->successful())->toBeTrue();
    expect($result)->toMatchArray([
        'code' => '1',
    ]);
});

it('can get diklat id directly', function () {
    $id = config('siasn-simpeg-api.params_test.get_diklat_id');

    expect($id)->not->toBeEmpty();

    $response = Diklat::get($id);
    $result = $response->collect()->toArray();

    expect($response->successful())->toBeTrue();
    expect($result)->toMatchArray([
        'code' => '1',
    ]);
});
