<?php

use Kanekescom\Siasn\Simpeg\Api\Facades\Simpeg;

it('can get jabatan id', function () {
    $id = config('siasn-simpeg-api.params_test.get_jabatan_id');

    expect($id)->not->toBeEmpty();

    $paths = [
        'idRiwayatJabatan' => $id,
    ];
    $response = Simpeg::getJabatanId($paths);
    $result = $response->collect()->toArray();

    expect($response->successful())->toBeTrue();
    expect($result)->toMatchArray([
        'code' => '1',
    ]);
});
