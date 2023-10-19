<?php

use Kanekescom\Siasn\Api\Simpeg\Facades\Simpeg;

it('can get kursus id', function () {
    $id = config('siasn-api.params_test.get_kursus_id');

    expect($id)->not->toBeEmpty();

    $paths = [
        'idRiwayatKursus' => $id,
    ];
    $response = Simpeg::getKursusId($paths);
    $result = $response->collect()->toArray();

    expect($response->successful())->toBeTrue();
    expect($result)->toMatchArray([
        'code' => '1',
    ]);
});

it('can post kursus save', function () {
    $query = json_decode(config('siasn-api.params_test.post_kursus_save_query'), true);

    expect($query)->toBeArray();

    $response = Simpeg::postKursusSave([], $query);
    $result = $response->collect()->toArray();

    expect($response->successful())->toBeTrue();
    expect($result)->toMatchArray([
        'success' => true,
    ]);
});
