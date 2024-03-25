<?php

use Kanekescom\Siasn\Simpeg\Api\Facades\Simpeg;

it('can get penghargaan id', function () {
    $id = config('siasn-simpeg-api.params_test.get_penghargaan_id');

    expect($id)->not->toBeEmpty();

    $paths = [
        'idRiwayatPenghargaan' => $id,
    ];
    $response = Simpeg::getPenghargaanId($paths);
    $result = $response->collect()->toArray();

    expect($response->successful())->toBeTrue();
    expect($result)->toMatchArray([
        'code' => '1',
    ]);
});
