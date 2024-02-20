<?php

it('can get rw angkakredit', function () {
    $nipBaru = config('siasn-simpeg-api.params_test.get_pns_rw_angkakredit_nipbaru');

    expect($nipBaru)->not->toBeEmpty();

    $this->artisan("siasn-simpeg:get-pns-rw-angkakredit {$nipBaru}")->assertSuccessful();
});

it('can get rw cltn', function () {
    $nipBaru = config('siasn-simpeg-api.params_test.get_pns_rw_cltn_nipbaru');

    expect($nipBaru)->not->toBeEmpty();

    $this->artisan("siasn-simpeg:get-pns-rw-cltn {$nipBaru}")->assertSuccessful();
});

it('can get rw diklat', function () {
    $nipBaru = config('siasn-simpeg-api.params_test.get_pns_rw_diklat_nipbaru');

    expect($nipBaru)->not->toBeEmpty();

    $this->artisan("siasn-simpeg:get-pns-rw-diklat {$nipBaru}")->assertSuccessful();
});

it('can get rw dp3', function () {
    $nipBaru = config('siasn-simpeg-api.params_test.get_pns_rw_dp3_nipbaru');

    expect($nipBaru)->not->toBeEmpty();

    $this->artisan("siasn-simpeg:get-pns-rw-dp3 {$nipBaru}")->assertSuccessful();
});

it('can get rw golongan', function () {
    $nipBaru = config('siasn-simpeg-api.params_test.get_pns_rw_golongan_nipbaru');

    expect($nipBaru)->not->toBeEmpty();

    $this->artisan("siasn-simpeg:get-pns-rw-golongan {$nipBaru}")->assertSuccessful();
});

it('can get rw hukdis', function () {
    $nipBaru = config('siasn-simpeg-api.params_test.get_pns_rw_hukdis_nipbaru');

    expect($nipBaru)->not->toBeEmpty();

    $this->artisan("siasn-simpeg:get-pns-rw-hukdis {$nipBaru}")->assertSuccessful();
});

it('can get rw jabatan', function () {
    $nipBaru = config('siasn-simpeg-api.params_test.get_pns_rw_jabatan_nipbaru');

    expect($nipBaru)->not->toBeEmpty();

    $this->artisan("siasn-simpeg:get-pns-rw-jabatan {$nipBaru}")->assertSuccessful();
});

it('can get rw kinerjaperiodik', function () {
    $nipBaru = config('siasn-simpeg-api.params_test.get_pns_rw_kinerjaperiodik_nipbaru');

    expect($nipBaru)->not->toBeEmpty();

    $this->artisan("siasn-simpeg:get-pns-rw-kinerjaperiodik {$nipBaru}")->assertSuccessful();
});

it('can get rw kursus', function () {
    $nipBaru = config('siasn-simpeg-api.params_test.get_pns_rw_kursus_nipbaru');

    expect($nipBaru)->not->toBeEmpty();

    $this->artisan("siasn-simpeg:get-pns-rw-kursus {$nipBaru}")->assertSuccessful();
});

it('can get rw masakerja', function () {
    $nipBaru = config('siasn-simpeg-api.params_test.get_pns_rw_masakerja_nipbaru');

    expect($nipBaru)->not->toBeEmpty();

    $this->artisan("siasn-simpeg:get-pns-rw-masakerja {$nipBaru}")->assertSuccessful();
});

it('can get rw pemberhentian', function () {
    $nipBaru = config('siasn-simpeg-api.params_test.get_pns_rw_pemberhentian_nipbaru');

    expect($nipBaru)->not->toBeEmpty();

    $this->artisan("siasn-simpeg:get-pns-rw-pemberhentian {$nipBaru}")->assertSuccessful();
});

it('can get rw pendidikan', function () {
    $nipBaru = config('siasn-simpeg-api.params_test.get_pns_rw_pendidikan_nipbaru');

    expect($nipBaru)->not->toBeEmpty();

    $this->artisan("siasn-simpeg:get-pns-rw-pendidikan {$nipBaru}")->assertSuccessful();
});

it('can get rw penghargaan', function () {
    $nipBaru = config('siasn-simpeg-api.params_test.get_pns_rw_penghargaan_nipbaru');

    expect($nipBaru)->not->toBeEmpty();

    $this->artisan("siasn-simpeg:get-pns-rw-penghargaan {$nipBaru}")->assertSuccessful();
});

it('can get rw pindahinstansi', function () {
    $nipBaru = config('siasn-simpeg-api.params_test.get_pns_rw_pindahinstansi_nipbaru');

    expect($nipBaru)->not->toBeEmpty();

    $this->artisan("siasn-simpeg:get-pns-rw-pindahinstansi {$nipBaru}")->assertSuccessful();
});

it('can get rw pnsunor', function () {
    $nipBaru = config('siasn-simpeg-api.params_test.get_pns_rw_pnsunor_nipbaru');

    expect($nipBaru)->not->toBeEmpty();

    $this->artisan("siasn-simpeg:get-pns-rw-pnsunor {$nipBaru}")->assertSuccessful();
});

it('can get rw pwk', function () {
    $nipBaru = config('siasn-simpeg-api.params_test.get_pns_rw_pwk_nipbaru');

    expect($nipBaru)->not->toBeEmpty();

    $this->artisan("siasn-simpeg:get-pns-rw-pwk {$nipBaru}")->assertSuccessful();
});

it('can get rw skp', function () {
    $nipBaru = config('siasn-simpeg-api.params_test.get_pns_rw_skp_nipbaru');

    expect($nipBaru)->not->toBeEmpty();

    $this->artisan("siasn-simpeg:get-pns-rw-skp {$nipBaru}")->assertSuccessful();
});

it('can get rw skp22', function () {
    $nipBaru = config('siasn-simpeg-api.params_test.get_pns_rw_skp22_nipbaru');

    expect($nipBaru)->not->toBeEmpty();

    $this->artisan("siasn-simpeg:get-pns-rw-skp22 {$nipBaru}")->assertSuccessful();
});
