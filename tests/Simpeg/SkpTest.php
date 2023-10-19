<?php

use Kanekescom\Siasn\Api\Simpeg\Facades\Simpeg;

it('can get skp id', function () {
    $id = config('siasn-api.params_test.get_skp_id');
    $paths = [
        'idRiwayatSkp' => $id,
    ];
    $response = Simpeg::getSkpId($paths);

    expect($id)->not->toBeEmpty();
    expect($response->successful())->toBeTrue();
});

it('can post skp 2021 save', function () {
    $query = json_decode(config('siasn-api.params_test.post_skp2021_save_query'), true);

    expect($query)->toBeArray();

    $response = Simpeg::postSkp2021Save([], $query);

    expect($response->successful())->toBeTrue();
});

it('can post skp save', function () {
    $query = json_decode(config('siasn-api.params_test.post_skp_save_query'), true);

    expect($query)->toBeArray();

    $response = Simpeg::postSkpSave([], $query);

    expect($response->successful())->toBeTrue();
});
