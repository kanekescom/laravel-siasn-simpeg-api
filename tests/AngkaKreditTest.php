<?php

use Kanekescom\Siasn\Simpeg\Api\AngkaKredit;

it('can get angkakredit id', function () {
    $id = config('siasn-simpeg-api.params_test.get_angkakredit_id');

    expect($id)->not->toBeEmpty();

    $paths = [
        'idRiwayatAngkaKredit' => $id,
    ];
    $response = AngkaKredit::get($paths);
    $result = $response->collect()->toArray();

    expect($response->successful())->toBeTrue();
    expect($result)->toMatchArray([
        'code' => '1',
    ]);
});

it('can get angkakredit id directly', function () {
    $id = config('siasn-simpeg-api.params_test.get_angkakredit_id');

    expect($id)->not->toBeEmpty();

    $response = AngkaKredit::get($id);
    $result = $response->collect()->toArray();

    expect($response->successful())->toBeTrue();
    expect($result)->toMatchArray([
        'code' => '1',
    ]);
});
