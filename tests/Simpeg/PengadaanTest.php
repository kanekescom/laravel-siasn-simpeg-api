<?php

use Kanekescom\Siasn\Api\Simpeg\Facades\Simpeg;

it('can get pengadaan list pengadaan instansi', function () {
    $tahun = config('siasn-simpeg-api.params_test.get_pengadaan_list_pengadaan_instansi_tahun');

    expect($tahun)->not->toBeEmpty();

    $query = [
        'tahun' => $tahun,
    ];
    $response = Simpeg::getPengadaanListPengadaanInstansi([], $query);
    $result = $response->collect()->toArray();

    expect($response->successful())->toBeTrue();
    expect($result)->toMatchArray([
        'code' => '1',
    ]);
});
