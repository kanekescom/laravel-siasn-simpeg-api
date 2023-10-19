<?php

use Kanekescom\Siasn\Api\Simpeg\Facades\Simpeg;

it('can get skp22 id', function () {
    $id = config('siasn-api.params_test.get_skp22_id');

    expect($id)->not->toBeEmpty();

    $paths = [
        'idRiwayatSkp' => $id,
    ];
    $response = Simpeg::getSkp22Id($paths);

    expect($response->successful())->toBeTrue();
});

it('can post skp22 save', function () {
    $query = json_decode(config('siasn-api.params_test.post_skp22_save_query'), true);

    expect($query)->toBeArray();

    $response = Simpeg::postSkp22Save([], $query);

    expect($response->successful())->toBeTrue();
});
