<?php

use Kanekescom\Siasn\Api\Simpeg\Facades\Simpeg;

it('can get penghargaan id', function () {
    $id = config('siasn-api.params_test.get_penghargaan_id');

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

it('can post penghargaan save', function () {
    $query = json_decode(config('siasn-api.params_test.post_penghargaan_save_query'), true);

    expect($query)->toBeArray();

    $response = Simpeg::postPenghargaanSave([], $query);
    $result = $response->collect()->toArray();

    expect($response->successful())->toBeTrue();
    expect($result)->toMatchArray([
        'success' => true,
    ]);
});
