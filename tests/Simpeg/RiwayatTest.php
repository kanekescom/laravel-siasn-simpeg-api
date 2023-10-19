<?php

use Kanekescom\Siasn\Api\Simpeg\Facades\Simpeg;

it('can get rw angka kredit', function () {
    $nipBaru = config('siasn-api.params_test.nip_baru');
    $paths = [
        'nipBaru' => $nipBaru,
    ];
    $response = Simpeg::getRwAngkaKredit($paths);

    expect($nipBaru)->not->toBeEmpty();
    expect($response->successful())->toBeTrue();
});

it('can get rw cltn', function () {
    $nipBaru = config('siasn-api.params_test.nip_baru');
    $paths = [
        'nipBaru' => $nipBaru,
    ];
    $response = Simpeg::getRwCltn($paths);

    expect($nipBaru)->not->toBeEmpty();
    expect($response->successful())->toBeTrue();
});

it('can get rw diklat', function () {
    $nipBaru = config('siasn-api.params_test.nip_baru');
    $paths = [
        'nipBaru' => $nipBaru,
    ];
    $response = Simpeg::getRwDiklat($paths);

    expect($nipBaru)->not->toBeEmpty();
    expect($response->successful())->toBeTrue();
});

it('can get rw dp3', function () {
    $nipBaru = config('siasn-api.params_test.nip_baru');
    $paths = [
        'nipBaru' => $nipBaru,
    ];
    $response = Simpeg::getRwDp3($paths);

    expect($nipBaru)->not->toBeEmpty();
    expect($response->successful())->toBeTrue();
});

it('can get rw golongan', function () {
    $nipBaru = config('siasn-api.params_test.nip_baru');
    $paths = [
        'nipBaru' => $nipBaru,
    ];
    $response = Simpeg::getRwGolongan($paths);

    expect($nipBaru)->not->toBeEmpty();
    expect($response->successful())->toBeTrue();
});

it('can get rw hukdis', function () {
    $nipBaru = config('siasn-api.params_test.nip_baru');
    $paths = [
        'nipBaru' => $nipBaru,
    ];
    $response = Simpeg::getRwHukdis($paths);

    expect($nipBaru)->not->toBeEmpty();
    expect($response->successful())->toBeTrue();
});

it('can get rw jabatan', function () {
    $nipBaru = config('siasn-api.params_test.nip_baru');
    $paths = [
        'nipBaru' => $nipBaru,
    ];
    $response = Simpeg::getRwJabatan($paths);

    expect($nipBaru)->not->toBeEmpty();
    expect($response->successful())->toBeTrue();
});

it('can get rw kursus', function () {
    $nipBaru = config('siasn-api.params_test.nip_baru');
    $paths = [
        'nipBaru' => $nipBaru,
    ];
    $response = Simpeg::getRwKursus($paths);

    expect($nipBaru)->not->toBeEmpty();
    expect($response->successful())->toBeTrue();
});

it('can get rw masa kerja', function () {
    $nipBaru = config('siasn-api.params_test.nip_baru');
    $paths = [
        'nipBaru' => $nipBaru,
    ];
    $response = Simpeg::getRwMasaKerja($paths);

    expect($nipBaru)->not->toBeEmpty();
    expect($response->successful())->toBeTrue();
});

it('can get rw pemberhentian', function () {
    $nipBaru = config('siasn-api.params_test.nip_baru');
    $paths = [
        'nipBaru' => $nipBaru,
    ];
    $response = Simpeg::getRwPemberhentian($paths);

    expect($nipBaru)->not->toBeEmpty();
    expect($response->successful())->toBeTrue();
});

it('can get rw pendidikan', function () {
    $nipBaru = config('siasn-api.params_test.nip_baru');
    $paths = [
        'nipBaru' => $nipBaru,
    ];
    $response = Simpeg::getRwPendidikan($paths);

    expect($nipBaru)->not->toBeEmpty();
    expect($response->successful())->toBeTrue();
});

it('can get rw penghargaan', function () {
    $nipBaru = config('siasn-api.params_test.nip_baru');
    $paths = [
        'nipBaru' => $nipBaru,
    ];
    $response = Simpeg::getRwPenghargaan($paths);

    expect($nipBaru)->not->toBeEmpty();
    expect($response->successful())->toBeTrue();
});

it('can get rw pindah instansi', function () {
    $nipBaru = config('siasn-api.params_test.nip_baru');
    $paths = [
        'nipBaru' => $nipBaru,
    ];
    $response = Simpeg::getRwPindahInstansi($paths);

    expect($nipBaru)->not->toBeEmpty();
    expect($response->successful())->toBeTrue();
});

it('can get rw unor', function () {
    $nipBaru = config('siasn-api.params_test.nip_baru');
    $paths = [
        'nipBaru' => $nipBaru,
    ];
    $response = Simpeg::getRwUnor($paths);

    expect($nipBaru)->not->toBeEmpty();
    expect($response->successful())->toBeTrue();
});

it('can get rw pwk', function () {
    $nipBaru = config('siasn-api.params_test.nip_baru');
    $paths = [
        'nipBaru' => $nipBaru,
    ];
    $response = Simpeg::getRwPwk($paths);

    expect($nipBaru)->not->toBeEmpty();
    expect($response->successful())->toBeTrue();
});

it('can get rw skp', function () {
    $nipBaru = config('siasn-api.params_test.nip_baru');
    $paths = [
        'nipBaru' => $nipBaru,
    ];
    $response = Simpeg::getRwSkp($paths);

    expect($nipBaru)->not->toBeEmpty();
    expect($response->successful())->toBeTrue();
});

it('can get rw skp22', function () {
    $nipBaru = config('siasn-api.params_test.nip_baru');
    $paths = [
        'nipBaru' => $nipBaru,
    ];
    $response = Simpeg::getRwSkp22($paths);

    expect($nipBaru)->not->toBeEmpty();
    expect($response->successful())->toBeTrue();
});
