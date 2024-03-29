<?php

use Kanekescom\Siasn\Simpeg\Api\Http\Client\Diklat;

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
