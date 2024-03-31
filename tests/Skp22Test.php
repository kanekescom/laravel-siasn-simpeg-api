<?php

use Kanekescom\Siasn\Simpeg\Api\Skp22;

it('can get skp22 id', function () {
    $id = config('siasn-simpeg-api.params_test.get_skp22_id');

    expect($id)->not->toBeEmpty();

    $paths = [
        'idRiwayatSkp' => $id,
    ];
    $response = Skp22::get($paths);
    $result = $response->collect()->toArray();

    expect($response->successful())->toBeTrue();
    expect($result)->toMatchArray([
        'code' => '1',
    ]);
});

it('can get skp22 id directly', function () {
    $id = config('siasn-simpeg-api.params_test.get_skp22_id');

    expect($id)->not->toBeEmpty();

    $response = Skp22::get($id);
    $result = $response->collect()->toArray();

    expect($response->successful())->toBeTrue();
    expect($result)->toMatchArray([
        'code' => '1',
    ]);
});
