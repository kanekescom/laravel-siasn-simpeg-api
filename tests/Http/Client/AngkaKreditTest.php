<?php

use Kanekescom\Siasn\Simpeg\Api\Http\Client\AngkaKredit;

it('can get angkakredit id', function () {
    $id = config('siasn-simpeg-api.params_test.get_angkakredit_id');

    expect($id)->not->toBeEmpty();

    $paths = [
        'idRiwayatAngkaKredit' => $id,
    ];
    $response = AngkaKredit::getId($paths);
    $result = $response->collect()->toArray();

    expect($response->successful())->toBeTrue();
    expect($result)->toMatchArray([
        'code' => '1',
    ]);
});
