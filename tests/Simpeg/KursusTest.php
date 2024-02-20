<?php

use Kanekescom\Siasn\Api\Simpeg\Facades\Simpeg;

it('can get kursus id', function () {
    $id = config('siasn-simpeg-api.params_test.get_kursus_id');

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
