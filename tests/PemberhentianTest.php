<?php

use Kanekescom\Siasn\Simpeg\Api\Pemberhentian;

it('can get pns list pensiun instansi', function () {
    $tglAwal = config('siasn-simpeg-api.params_test.get_pns_list_pensiun_instansi_tglawal');
    $tglAkhir = config('siasn-simpeg-api.params_test.get_pns_list_pensiun_instansi_tglakhir');

    expect($tglAwal)->not->toBeEmpty();
    expect($tglAkhir)->not->toBeEmpty();

    $query = [
        'tglAwal' => $tglAwal,
        'tglAkhir' => $tglAkhir,
    ];
    $response = Pemberhentian::getPensiunList([], $query);
    $result = $response->collect()->toArray();

    expect($response->successful())->toBeTrue();
    expect($result)->toMatchArray([
        'code' => '1',
    ]);
});
