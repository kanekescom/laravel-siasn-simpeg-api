<?php

use Kanekescom\Siasn\Simpeg\Api\Http\Client\Riwayat;

it('can get rw angkakredit', function () {
    $nipBaru = config('siasn-simpeg-api.params_test.get_pns_rw_angkakredit_nipbaru');

    expect($nipBaru)->not->toBeEmpty();

    $paths = [
        'nipBaru' => $nipBaru,
    ];
    $response = Riwayat::getAngkakredit($paths);
    $result = $response->collect()->toArray();

    expect($response->successful())->toBeTrue();
    expect($result)->toMatchArray([
        'code' => '1',
    ]);
});

it('can get rw angkakredit directly', function () {
    $nipBaru = config('siasn-simpeg-api.params_test.get_pns_rw_angkakredit_nipbaru');

    expect($nipBaru)->not->toBeEmpty();

    $response = Riwayat::getAngkakredit($nipBaru);
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
    $response = Riwayat::getCltn($paths);
    $result = $response->collect()->toArray();

    expect($response->successful())->toBeTrue();
    expect($result)->toMatchArray([
        'code' => '1',
    ]);
});

it('can get rw cltn directly', function () {
    $nipBaru = config('siasn-simpeg-api.params_test.get_pns_rw_cltn_nipbaru');

    expect($nipBaru)->not->toBeEmpty();

    $response = Riwayat::getCltn($nipBaru);
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
    $response = Riwayat::getDiklat($paths);
    $result = $response->collect()->toArray();

    expect($response->successful())->toBeTrue();
    expect($result)->toMatchArray([
        'code' => '1',
    ]);
});

it('can get rw diklat directly', function () {
    $nipBaru = config('siasn-simpeg-api.params_test.get_pns_rw_diklat_nipbaru');

    expect($nipBaru)->not->toBeEmpty();

    $response = Riwayat::getDiklat($nipBaru);
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
    $response = Riwayat::getDp3($paths);
    $result = $response->collect()->toArray();

    expect($response->successful())->toBeTrue();
    expect($result)->toMatchArray([
        'code' => '1',
    ]);
});

it('can get rw dp3 directly', function () {
    $nipBaru = config('siasn-simpeg-api.params_test.get_pns_rw_dp3_nipbaru');

    expect($nipBaru)->not->toBeEmpty();

    $response = Riwayat::getDp3($nipBaru);
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
    $response = Riwayat::getGolongan($paths);
    $result = $response->collect()->toArray();

    expect($response->successful())->toBeTrue();
    expect($result)->toMatchArray([
        'code' => '1',
    ]);
});

it('can get rw golongan directly', function () {
    $nipBaru = config('siasn-simpeg-api.params_test.get_pns_rw_golongan_nipbaru');

    expect($nipBaru)->not->toBeEmpty();

    $response = Riwayat::getGolongan($nipBaru);
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
    $response = Riwayat::getHukdis($paths);
    $result = $response->collect()->toArray();

    expect($response->successful())->toBeTrue();
    expect($result)->toMatchArray([
        'code' => '1',
    ]);
});

it('can get rw hukdis directly', function () {
    $nipBaru = config('siasn-simpeg-api.params_test.get_pns_rw_hukdis_nipbaru');

    expect($nipBaru)->not->toBeEmpty();

    $response = Riwayat::getHukdis($nipBaru);
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
    $response = Riwayat::getJabatan($paths);
    $result = $response->collect()->toArray();

    expect($response->successful())->toBeTrue();
    expect($result)->toMatchArray([
        'code' => '1',
    ]);
});

it('can get rw jabatan directly', function () {
    $nipBaru = config('siasn-simpeg-api.params_test.get_pns_rw_jabatan_nipbaru');

    expect($nipBaru)->not->toBeEmpty();

    $response = Riwayat::getJabatan($nipBaru);
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
    $response = Riwayat::getKursus($paths);
    $result = $response->collect()->toArray();

    expect($response->successful())->toBeTrue();
    expect($result)->toMatchArray([
        'code' => '1',
    ]);
});

it('can get rw kursus directly', function () {
    $nipBaru = config('siasn-simpeg-api.params_test.get_pns_rw_kursus_nipbaru');

    expect($nipBaru)->not->toBeEmpty();

    $response = Riwayat::getKursus($nipBaru);
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
    $response = Riwayat::getMasaKerja($paths);
    $result = $response->collect()->toArray();

    expect($response->successful())->toBeTrue();
    expect($result)->toMatchArray([
        'code' => '1',
    ]);
});

it('can get rw masakerja directly', function () {
    $nipBaru = config('siasn-simpeg-api.params_test.get_pns_rw_masakerja_nipbaru');

    expect($nipBaru)->not->toBeEmpty();

    $response = Riwayat::getMasaKerja($nipBaru);
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
    $response = Riwayat::getPemberhentian($paths);
    $result = $response->collect()->toArray();

    expect($response->successful())->toBeTrue();
    expect($result)->toMatchArray([
        'code' => '1',
    ]);
});

it('can get rw pemberhentian directly', function () {
    $nipBaru = config('siasn-simpeg-api.params_test.get_pns_rw_pemberhentian_nipbaru');

    expect($nipBaru)->not->toBeEmpty();

    $response = Riwayat::getPemberhentian($nipBaru);
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
    $response = Riwayat::getPendidikan($paths);
    $result = $response->collect()->toArray();

    expect($response->successful())->toBeTrue();
    expect($result)->toMatchArray([
        'code' => '1',
    ]);
});

it('can get rw pendidikan directly', function () {
    $nipBaru = config('siasn-simpeg-api.params_test.get_pns_rw_pendidikan_nipbaru');

    expect($nipBaru)->not->toBeEmpty();

    $response = Riwayat::getPendidikan($nipBaru);
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
    $response = Riwayat::getPenghargaan($paths);
    $result = $response->collect()->toArray();

    expect($response->successful())->toBeTrue();
    expect($result)->toMatchArray([
        'code' => '1',
    ]);
});

it('can get rw penghargaan directly', function () {
    $nipBaru = config('siasn-simpeg-api.params_test.get_pns_rw_penghargaan_nipbaru');

    expect($nipBaru)->not->toBeEmpty();

    $response = Riwayat::getPenghargaan($nipBaru);
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
    $response = Riwayat::getPindahInstansi($paths);
    $result = $response->collect()->toArray();

    expect($response->successful())->toBeTrue();
    expect($result)->toMatchArray([
        'code' => '1',
    ]);
});

it('can get rw pindahinstansi directly', function () {
    $nipBaru = config('siasn-simpeg-api.params_test.get_pns_rw_pindahinstansi_nipbaru');

    expect($nipBaru)->not->toBeEmpty();

    $response = Riwayat::getPindahInstansi($nipBaru);
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
    $response = Riwayat::getPnsunor($paths);
    $result = $response->collect()->toArray();

    expect($response->successful())->toBeTrue();
    expect($result)->toMatchArray([
        'code' => '1',
    ]);
});

it('can get rw pnsunor directly', function () {
    $nipBaru = config('siasn-simpeg-api.params_test.get_pns_rw_pnsunor_nipbaru');

    expect($nipBaru)->not->toBeEmpty();

    $response = Riwayat::getPnsunor($nipBaru);
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
    $response = Riwayat::getPwk($paths);
    $result = $response->collect()->toArray();

    expect($response->successful())->toBeTrue();
    expect($result)->toMatchArray([
        'code' => '1',
    ]);
});

it('can get rw pwk directly', function () {
    $nipBaru = config('siasn-simpeg-api.params_test.get_pns_rw_pwk_nipbaru');

    expect($nipBaru)->not->toBeEmpty();

    $response = Riwayat::getPwk($nipBaru);
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
    $response = Riwayat::getSkp($paths);
    $result = $response->collect()->toArray();

    expect($response->successful())->toBeTrue();
    expect($result)->toMatchArray([
        'code' => '1',
    ]);
});

it('can get rw skp directly', function () {
    $nipBaru = config('siasn-simpeg-api.params_test.get_pns_rw_skp_nipbaru');

    expect($nipBaru)->not->toBeEmpty();

    $response = Riwayat::getSkp($nipBaru);
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
    $response = Riwayat::getSkp22($paths);
    $result = $response->collect()->toArray();

    expect($response->successful())->toBeTrue();
    expect($result)->toMatchArray([
        'code' => '1',
    ]);
});

it('can get rw skp22 directly', function () {
    $nipBaru = config('siasn-simpeg-api.params_test.get_pns_rw_skp22_nipbaru');

    expect($nipBaru)->not->toBeEmpty();

    $response = Riwayat::getSkp22($nipBaru);
    $result = $response->collect()->toArray();

    expect($response->successful())->toBeTrue();
    expect($result)->toMatchArray([
        'code' => '1',
    ]);
});
