<?php

use Kanekescom\Siasn\Simpeg\Api\Http\Client\Hukdis;

it('can get hukdis id', function () {
    $id = config('siasn-simpeg-api.params_test.get_hukdis_id');

    expect($id)->not->toBeEmpty();

    $paths = [
        'idRiwayatHukdis' => $id,
    ];
    $response = Hukdis::get($paths);
    $result = $response->collect()->toArray();

    expect($response->successful())->toBeTrue();
    expect($result)->toMatchArray([
        'code' => '1',
    ]);
});
