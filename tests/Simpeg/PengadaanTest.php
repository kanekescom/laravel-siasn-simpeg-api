<?php

use Kanekescom\Siasn\Api\Simpeg\Facades\Simpeg;

it('can get list pengadaan instansi', function () {
    $tahun = config('siasn-api.params_test.get_list_pengadaan_instansi_tahun');
    $query = [
        'tahun' => $tahun,
    ];
    $response = Simpeg::getListPengadaanInstansi([], $query);

    expect($tahun)->not->toBeEmpty();
    expect($response->successful())->toBeTrue();
});
