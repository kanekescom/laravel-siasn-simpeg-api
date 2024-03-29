<?php

use Kanekescom\Siasn\Simpeg\Api\Http\Client\Kursus;

it('can get kursus id', function () {
    $id = config('siasn-simpeg-api.params_test.get_kursus_id');

    expect($id)->not->toBeEmpty();

    $paths = [
        'idRiwayatKursus' => $id,
    ];
    $response = Kursus::get($paths);
    $result = $response->collect()->toArray();

    expect($response->successful())->toBeTrue();
    expect($result)->toMatchArray([
        'code' => '1',
    ]);
});
