<?php

use Kanekescom\Siasn\Simpeg\Api\Facades\Simpeg;

it('can get pns list kp instansi', function () {
    $periode = config('siasn-simpeg-api.params_test.get_pns_list_kp_instansi_periode');

    expect($periode)->not->toBeEmpty();

    $query = [
        'periode' => $periode,
    ];
    $response = Simpeg::getPnsListKpInstansi([], $query);
    $result = $response->collect()->toArray();

    expect($response->successful())->toBeTrue();
    expect($result)->toMatchArray([
        'code' => '1',
    ]);
});
