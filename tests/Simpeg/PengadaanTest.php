<?php

use Kanekescom\Siasn\Api\Simpeg\Facades\Simpeg;

it('can get list pengadaan instansi', function () {
    $tahun = config('siasn-api.params_test.get_list_pengadaan_instansi_tahun');

    expect($tahun)->not->toBeEmpty();

    $query = [
        'tahun' => $tahun,
    ];
    $response = Simpeg::getListPengadaanInstansi([], $query);

    expect($response->successful())->toBeTrue();
});
