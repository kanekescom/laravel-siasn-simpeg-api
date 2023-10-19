<?php

use Kanekescom\Siasn\Api\Simpeg\Facades\Simpeg;

it('can get angka kredit id', function () {
    $id = config('siasn-api.params_test.get_angka_kredit_id');
    $paths = [
        'idRiwayatAngkaKredit' => $id,
    ];
    $response = Simpeg::getAngkaKreditId($paths);

    expect($id)->not->toBeEmpty();
    expect($response->successful())->toBeTrue();
});

it('can post angka kredit save', function () {
    $query = json_decode(config('siasn-api.params_test.post_angka_kredit_save_query'), true);

    expect($query)->toBeArray();

    $response = Simpeg::postAngkaKreditSave([], $query);

    expect($response->successful())->toBeTrue();
});
