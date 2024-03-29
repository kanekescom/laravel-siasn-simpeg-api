<?php

use Kanekescom\Siasn\Simpeg\Api\Http\Client\Skp22;

it('can get skp22 id', function () {
    $id = config('siasn-simpeg-api.params_test.get_skp22_id');

    expect($id)->not->toBeEmpty();

    $paths = [
        'idRiwayatSkp' => $id,
    ];
    $response = Skp22::getId($paths);
    $result = $response->collect()->toArray();

    expect($response->successful())->toBeTrue();
    expect($result)->toMatchArray([
        'code' => '1',
    ]);
});
