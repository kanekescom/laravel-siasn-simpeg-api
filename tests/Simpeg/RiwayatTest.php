<?php

use Kanekescom\Siasn\Simpeg\Api\Facades\Simpeg;

it('can get rw angkakredit', function () {
    $nipBaru = config('siasn-simpeg-api.params_test.get_pns_rw_angkakredit_nipbaru');

    expect($nipBaru)->not->toBeEmpty();

    $paths = [
        'nipBaru' => $nipBaru,
    ];
    $response = Simpeg::getPnsRwAngkakredit($paths);
    $result = $response->collect()->toArray();

    expect($response->successful())->toBeTrue();
    expect($result)->toMatchArray([
        'code' => '1',
    ]);
});

it('can get rw cltn', function () {
    $nipBaru = config('siasn-simpeg-api.params_test.get_pns_rw_cltn_nipbaru');

    expect($nipBaru)->not->toBeEmpty();

    $paths = [
        'nipBaru' => $nipBaru,
    ];
    $response = Simpeg::getPnsRwCltn($paths);
    $result = $response->collect()->toArray();

    expect($response->successful())->toBeTrue();
    expect($result)->toMatchArray([
        'code' => '1',
    ]);
});

it('can get rw diklat', function () {
    $nipBaru = config('siasn-simpeg-api.params_test.get_pns_rw_diklat_nipbaru');

    expect($nipBaru)->not->toBeEmpty();

    $paths = [
        'nipBaru' => $nipBaru,
    ];
    $response = Simpeg::getPnsRwDiklat($paths);
    $result = $response->collect()->toArray();

    expect($response->successful())->toBeTrue();
    expect($result)->toMatchArray([
        'code' => '1',
    ]);
});

it('can get rw dp3', function () {
    $nipBaru = config('siasn-simpeg-api.params_test.get_pns_rw_dp3_nipbaru');

    expect($nipBaru)->not->toBeEmpty();

    $paths = [
        'nipBaru' => $nipBaru,
    ];
    $response = Simpeg::getPnsRwDp3($paths);
    $result = $response->collect()->toArray();

    expect($response->successful())->toBeTrue();
    expect($result)->toMatchArray([
        'code' => '1',
    ]);
});

it('can get rw golongan', function () {
    $nipBaru = config('siasn-simpeg-api.params_test.get_pns_rw_golongan_nipbaru');

    expect($nipBaru)->not->toBeEmpty();

    $paths = [
        'nipBaru' => $nipBaru,
    ];
    $response = Simpeg::getPnsRwGolongan($paths);
    $result = $response->collect()->toArray();

    expect($response->successful())->toBeTrue();
    expect($result)->toMatchArray([
        'code' => '1',
    ]);
});

it('can get rw hukdis', function () {
    $nipBaru = config('siasn-simpeg-api.params_test.get_pns_rw_hukdis_nipbaru');

    expect($nipBaru)->not->toBeEmpty();

    $paths = [
        'nipBaru' => $nipBaru,
    ];
    $response = Simpeg::getPnsRwHukdis($paths);
    $result = $response->collect()->toArray();

    expect($response->successful())->toBeTrue();
    expect($result)->toMatchArray([
        'code' => '1',
    ]);
});

it('can get rw jabatan', function () {
    $nipBaru = config('siasn-simpeg-api.params_test.get_pns_rw_jabatan_nipbaru');

    expect($nipBaru)->not->toBeEmpty();

    $paths = [
        'nipBaru' => $nipBaru,
    ];
    $response = Simpeg::getPnsRwJabatan($paths);
    $result = $response->collect()->toArray();

    expect($response->successful())->toBeTrue();
    expect($result)->toMatchArray([
        'code' => '1',
    ]);
});

it('can get rw kursus', function () {
    $nipBaru = config('siasn-simpeg-api.params_test.get_pns_rw_kursus_nipbaru');

    expect($nipBaru)->not->toBeEmpty();

    $paths = [
        'nipBaru' => $nipBaru,
    ];
    $response = Simpeg::getPnsRwKursus($paths);
    $result = $response->collect()->toArray();

    expect($response->successful())->toBeTrue();
    expect($result)->toMatchArray([
        'code' => '1',
    ]);
});

it('can get rw masakerja', function () {
    $nipBaru = config('siasn-simpeg-api.params_test.get_pns_rw_masakerja_nipbaru');

    expect($nipBaru)->not->toBeEmpty();

    $paths = [
        'nipBaru' => $nipBaru,
    ];
    $response = Simpeg::getPnsRwMasaKerja($paths);
    $result = $response->collect()->toArray();

    expect($response->successful())->toBeTrue();
    expect($result)->toMatchArray([
        'code' => '1',
    ]);
});

it('can get rw pemberhentian', function () {
    $nipBaru = config('siasn-simpeg-api.params_test.get_pns_rw_pemberhentian_nipbaru');

    expect($nipBaru)->not->toBeEmpty();

    $paths = [
        'nipBaru' => $nipBaru,
    ];
    $response = Simpeg::getPnsRwPemberhentian($paths);
    $result = $response->collect()->toArray();

    expect($response->successful())->toBeTrue();
    expect($result)->toMatchArray([
        'code' => '1',
    ]);
});

it('can get rw pendidikan', function () {
    $nipBaru = config('siasn-simpeg-api.params_test.get_pns_rw_pendidikan_nipbaru');

    expect($nipBaru)->not->toBeEmpty();

    $paths = [
        'nipBaru' => $nipBaru,
    ];
    $response = Simpeg::getPnsRwPendidikan($paths);
    $result = $response->collect()->toArray();

    expect($response->successful())->toBeTrue();
    expect($result)->toMatchArray([
        'code' => '1',
    ]);
});

it('can get rw penghargaan', function () {
    $nipBaru = config('siasn-simpeg-api.params_test.get_pns_rw_penghargaan_nipbaru');

    expect($nipBaru)->not->toBeEmpty();

    $paths = [
        'nipBaru' => $nipBaru,
    ];
    $response = Simpeg::getPnsRwPenghargaan($paths);
    $result = $response->collect()->toArray();

    expect($response->successful())->toBeTrue();
    expect($result)->toMatchArray([
        'code' => '1',
    ]);
});

it('can get rw pindahinstansi', function () {
    $nipBaru = config('siasn-simpeg-api.params_test.get_pns_rw_pindahinstansi_nipbaru');

    expect($nipBaru)->not->toBeEmpty();

    $paths = [
        'nipBaru' => $nipBaru,
    ];
    $response = Simpeg::getPnsRwPindahInstansi($paths);
    $result = $response->collect()->toArray();

    expect($response->successful())->toBeTrue();
    expect($result)->toMatchArray([
        'code' => '1',
    ]);
});

it('can get rw pnsunor', function () {
    $nipBaru = config('siasn-simpeg-api.params_test.get_pns_rw_pnsunor_nipbaru');

    expect($nipBaru)->not->toBeEmpty();

    $paths = [
        'nipBaru' => $nipBaru,
    ];
    $response = Simpeg::getPnsRwPnsunor($paths);
    $result = $response->collect()->toArray();

    expect($response->successful())->toBeTrue();
    expect($result)->toMatchArray([
        'code' => '1',
    ]);
});

it('can get rw pwk', function () {
    $nipBaru = config('siasn-simpeg-api.params_test.get_pns_rw_pwk_nipbaru');

    expect($nipBaru)->not->toBeEmpty();

    $paths = [
        'nipBaru' => $nipBaru,
    ];
    $response = Simpeg::getPnsRwPwk($paths);
    $result = $response->collect()->toArray();

    expect($response->successful())->toBeTrue();
    expect($result)->toMatchArray([
        'code' => '1',
    ]);
});

it('can get rw skp', function () {
    $nipBaru = config('siasn-simpeg-api.params_test.get_pns_rw_skp_nipbaru');

    expect($nipBaru)->not->toBeEmpty();

    $paths = [
        'nipBaru' => $nipBaru,
    ];
    $response = Simpeg::getPnsRwSkp($paths);
    $result = $response->collect()->toArray();

    expect($response->successful())->toBeTrue();
    expect($result)->toMatchArray([
        'code' => '1',
    ]);
});

it('can get rw skp22', function () {
    $nipBaru = config('siasn-simpeg-api.params_test.get_pns_rw_skp22_nipbaru');

    expect($nipBaru)->not->toBeEmpty();

    $paths = [
        'nipBaru' => $nipBaru,
    ];
    $response = Simpeg::getPnsRwSkp22($paths);
    $result = $response->collect()->toArray();

    expect($response->successful())->toBeTrue();
    expect($result)->toMatchArray([
        'code' => '1',
    ]);
});
