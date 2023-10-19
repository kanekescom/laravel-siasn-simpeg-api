<?php

use Kanekescom\Siasn\Api\Simpeg\Facades\Simpeg;

it('can get skp id', function () {
    $id = config('siasn-api.params_test.get_skp_id');

    expect($id)->not->toBeEmpty();

    $paths = [
        'idRiwayatSkp' => $id,
    ];
    $response = Simpeg::getSkpId($paths);
    $result = $response->collect()->toArray();

    expect($response->successful())->toBeTrue();
    expect($result)->toMatchArray([
        'code' => '1',
    ]);
});

it('can post skp 2021 save', function () {
    $query = json_decode(config('siasn-api.params_test.post_skp2021_save_query'), true);

    expect($query)->toBeArray();

    $response = Simpeg::postSkp2021Save([], $query);
    $result = $response->collect()->toArray();

    expect($response->successful())->toBeTrue();
    expect($result)->toMatchArray([
        'success' => true,
    ]);
});

it('can post skp save', function () {
    $query = json_decode(config('siasn-api.params_test.post_skp_save_query'), true);

    expect($query)->toBeArray();

    $response = Simpeg::postSkpSave([], $query);
    $result = $response->collect()->toArray();

    expect($response->successful())->toBeTrue();
    expect($result)->toMatchArray([
        'success' => true,
    ]);
});
