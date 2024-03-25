<?php

use Kanekescom\Siasn\Simpeg\Api\Facades\Simpeg;

it('can get skp id', function () {
    $id = config('siasn-simpeg-api.params_test.get_skp_id');

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
