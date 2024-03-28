<?php

use Illuminate\Support\Facades\File;
use Kanekescom\Siasn\Simpeg\Api\Http\Client\Pns;

it('can get pns data anak', function () {
    $nipBaru = config('siasn-simpeg-api.params_test.get_pns_data_anak_nipbaru');

    expect($nipBaru)->not->toBeEmpty();

    $paths = [
        'nipBaru' => $nipBaru,
    ];
    $response = Pns::getDataAnak($paths);
    $result = $response->collect()->toArray();

    expect($response->successful())->toBeTrue();
    expect($result)->toMatchArray([
        'code' => '1',
    ]);
});

it('can get pns data ortu', function () {
    $nipBaru = config('siasn-simpeg-api.params_test.get_pns_data_ortu_nipbaru');

    expect($nipBaru)->not->toBeEmpty();

    $paths = [
        'nipBaru' => $nipBaru,
    ];
    $response = Pns::getDataOrtu($paths);
    $result = $response->collect()->toArray();

    expect($response->successful())->toBeTrue();
    expect($result)->toMatchArray([
        'code' => '1',
    ]);
});

it('can get pns data pasangan', function () {
    $nipBaru = config('siasn-simpeg-api.params_test.get_pns_data_pasangan_nipbaru');

    expect($nipBaru)->not->toBeEmpty();

    $paths = [
        'nipBaru' => $nipBaru,
    ];
    $response = Pns::getDataPasangan($paths);
    $result = $response->collect()->toArray();

    expect($response->successful())->toBeTrue();
    expect($result)->toMatchArray([
        'code' => '1',
    ]);
});

it('can get pns data utama', function () {
    $nipBaru = config('siasn-simpeg-api.params_test.get_pns_data_utama_nipbaru');

    expect($nipBaru)->not->toBeEmpty();

    $paths = [
        'nipBaru' => $nipBaru,
    ];
    $response = Pns::getDataUtama($paths);
    $result = $response->collect()->toArray();

    expect($response->successful())->toBeTrue();
    expect($result)->toMatchArray([
        'code' => '1',
    ]);
});

it('can get pns photo', function () {
    $idPns = config('siasn-simpeg-api.params_test.get_pns_photo_idpns');

    expect($idPns)->not->toBeEmpty();

    $paths = [
        'idPns' => $idPns,
    ];
    $response = Pns::getPhoto($paths);
    $result = $response->getBody()->getContents();

    expect($response->successful())->toBeTrue();
    expect($result)->not->toBeEmpty();
});

it('can download pns photo', function () {
    $idPns = config('siasn-simpeg-api.params_test.download_pns_photo_idpns');

    expect($idPns)->not->toBeEmpty();

    $paths = [
        'idPns' => $idPns,
    ];
    $filename = Pns::downloadPhoto($paths);

    expect(File::exists($filename))->toBeTrue();
});
