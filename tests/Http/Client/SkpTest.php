<?php

use Kanekescom\Siasn\Simpeg\Api\Http\Client\Skp;

it('can get skp id', function () {
    $id = config('siasn-simpeg-api.params_test.get_skp_id');

    expect($id)->not->toBeEmpty();

    $paths = [
        'idRiwayatSkp' => $id,
    ];
    $response = Skp::getId($paths);
    $result = $response->collect()->toArray();

    expect($response->successful())->toBeTrue();
    expect($result)->toMatchArray([
        'code' => '1',
    ]);
});
