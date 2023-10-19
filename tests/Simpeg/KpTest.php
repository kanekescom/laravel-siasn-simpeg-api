<?php

use Kanekescom\Siasn\Api\Simpeg\Facades\Simpeg;

it('can get list kp instansi', function () {
    $periode = config('siasn-api.params_test.get_list_kp_instansi_periode');

    expect($periode)->not->toBeEmpty();

    $paths = [
        'periode' => $periode,
    ];
    $response = Simpeg::getListKpInstansi($paths);
    $result = $response->collect()->toArray();

    expect($response->successful())->toBeTrue();
    expect($result)->toMatchArray([
        'code' => '1',
    ]);
});

it('can post upload dok sk kp', function () {
    $query = json_decode(config('siasn-api.params_test.post_upload_dok_sk_kp_query'), true);

    expect($query)->toBeArray();

    $response = Simpeg::postUploadDokSkKp([], $query);
    $result = $response->collect()->toArray();

    expect($response->successful())->toBeTrue();
    expect($result)->toMatchArray([
        'success' => true,
    ]);
});
