<?php

use Kanekescom\Siasn\Api\Simpeg\Facades\Simpeg;

it('can get hukdis id', function () {
    $id = config('siasn-api.params_test.get_hukdis_id');

    expect($id)->not->toBeEmpty();

    $paths = [
        'idRiwayatHukdis' => $id,
    ];
    $response = Simpeg::getHukdisId($paths);

    expect($response->successful())->toBeTrue();
});

it('can post hukdis save', function () {
    $query = json_decode(config('siasn-api.params_test.post_hukdis_save_query'), true);

    expect($query)->toBeArray();

    $response = Simpeg::postHukdisSave([], $query);

    expect($response->successful())->toBeTrue();
});
