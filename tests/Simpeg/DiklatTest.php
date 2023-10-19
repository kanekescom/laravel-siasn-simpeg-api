<?php

use Kanekescom\Siasn\Api\Simpeg\Facades\Simpeg;

it('can get diklat id', function () {
    $id = config('siasn-api.params_test.get_diklat_id');
    $paths = [
        'idRiwayatDiklat' => $id,
    ];
    $response = Simpeg::getDiklatId($paths);

    expect($id)->not->toBeEmpty();
    expect($response->successful())->toBeTrue();
});

it('can post diklat save', function () {
    $query = json_decode(config('siasn-api.params_test.post_diklat_save_query'), true);

    expect($query)->toBeArray();

    $response = Simpeg::postDiklatSave([], $query);

    expect($response->successful())->toBeTrue();
});
