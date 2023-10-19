<?php

use Kanekescom\Siasn\Api\Simpeg\Facades\Simpeg;

it('can get kursus id', function () {
    $id = config('siasn-api.params_test.get_kursus_id');
    $paths = [
        'idRiwayatKursus' => $id,
    ];
    $response = Simpeg::getKursusId($paths);

    expect($id)->not->toBeEmpty();
    expect($response->successful())->toBeTrue();
});

it('can post kursus save', function () {
    $query = json_decode(config('siasn-api.params_test.post_kursus_save_query'), true);

    expect($query)->toBeArray();

    $response = Simpeg::postKursusSave([], $query);

    expect($response->successful())->toBeTrue();
});
