<?php

use Kanekescom\Siasn\Simpeg\Api\Http\Client\Pengadaan;

it('can get pengadaan list pengadaan instansi', function () {
    $tahun = config('siasn-simpeg-api.params_test.get_pengadaan_list_pengadaan_instansi_tahun');

    expect($tahun)->not->toBeEmpty();

    $query = [
        'tahun' => $tahun,
    ];
    $response = Pengadaan::getList([], $query);
    $result = $response->collect()->toArray();

    expect($response->successful())->toBeTrue();
    expect($result)->toMatchArray([
        'code' => '1',
    ]);
});
