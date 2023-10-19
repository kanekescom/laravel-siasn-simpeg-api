<?php

use Kanekescom\Siasn\Api\Simpeg\Facades\Simpeg;

it('can get diklat id', function () {
    $id = config('siasn-api.params_test.get_diklat_id');

    expect($id)->not->toBeEmpty();

    $paths = [
        'idRiwayatDiklat' => $id,
    ];
    $response = Simpeg::getDiklatId($paths);
    $result = $response->collect()->toArray();

    expect($response->successful())->toBeTrue();
    expect($result)->toMatchArray([
        'code' => '1',
    ]);
});

it('can post diklat save', function () {
    $query = json_decode(config('siasn-api.params_test.post_diklat_save_query'), true);

    expect($query)->toBeArray();

    $response = Simpeg::postDiklatSave([], $query);
    $result = $response->collect()->toArray();

    expect($response->successful())->toBeTrue();
    expect($result)->toMatchArray([
        'success' => true,
    ]);
});
