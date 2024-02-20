<?php

use Kanekescom\Siasn\Api\Simpeg\Facades\Simpeg;

it('can get hukdis id', function () {
    $id = config('siasn-simpeg-api.params_test.get_hukdis_id');

    expect($id)->not->toBeEmpty();

    $paths = [
        'idRiwayatHukdis' => $id,
    ];
    $response = Simpeg::getHukdisId($paths);
    $result = $response->collect()->toArray();

    expect($response->successful())->toBeTrue();
    expect($result)->toMatchArray([
        'code' => '1',
    ]);
});
