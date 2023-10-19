<?php

use Kanekescom\Siasn\Api\Simpeg\Facades\Simpeg;

it('can get list pensiun instansi', function () {
    $tglAwal = config('siasn-api.params_test.get_list_pensiun_instansi_tgl_awal');
    $tglAkhir = config('siasn-api.params_test.get_list_pensiun_instansi_tgl_akhir');

    expect($tglAwal)->not->toBeEmpty();
    expect($tglAkhir)->not->toBeEmpty();

    $paths = [
        'tglAwal' => $tglAwal,
        'tglAkhir' => $tglAkhir,
    ];
    $response = Simpeg::getListPensiunInstansi($paths);
    $result = $response->collect()->toArray();

    expect($response->successful())->toBeTrue();
    expect($result)->toMatchArray([
        'code' => '1',
    ]);
});
