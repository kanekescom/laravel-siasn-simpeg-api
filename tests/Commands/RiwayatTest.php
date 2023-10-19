<?php

it('can get rw angka kredit', function () {
    $nipBaru = config('siasn-api.params_test.nip_baru');

    expect($nipBaru)->not->toBeEmpty();

    $this->artisan("siasn-simpeg:get-rw-angka-kredit {$nipBaru}")->assertSuccessful();
});

it('can get rw cltn', function () {
    $nipBaru = config('siasn-api.params_test.nip_baru');

    expect($nipBaru)->not->toBeEmpty();

    $this->artisan("siasn-simpeg:get-rw-cltn {$nipBaru}")->assertSuccessful();
});

it('can get rw diklat', function () {
    $nipBaru = config('siasn-api.params_test.nip_baru');

    expect($nipBaru)->not->toBeEmpty();

    $this->artisan("siasn-simpeg:get-rw-diklat {$nipBaru}")->assertSuccessful();
});

it('can get rw dp3', function () {
    $nipBaru = config('siasn-api.params_test.nip_baru');

    expect($nipBaru)->not->toBeEmpty();

    $this->artisan("siasn-simpeg:get-rw-dp3 {$nipBaru}")->assertSuccessful();
});

it('can get rw golongan', function () {
    $nipBaru = config('siasn-api.params_test.nip_baru');

    expect($nipBaru)->not->toBeEmpty();

    $this->artisan("siasn-simpeg:get-rw-golongan {$nipBaru}")->assertSuccessful();
});

it('can get rw hukdis', function () {
    $nipBaru = config('siasn-api.params_test.nip_baru');

    expect($nipBaru)->not->toBeEmpty();

    $this->artisan("siasn-simpeg:get-rw-hukdis {$nipBaru}")->assertSuccessful();
});

it('can get rw jabatan', function () {
    $nipBaru = config('siasn-api.params_test.nip_baru');

    expect($nipBaru)->not->toBeEmpty();

    $this->artisan("siasn-simpeg:get-rw-jabatan {$nipBaru}")->assertSuccessful();
});

it('can get rw kursus', function () {
    $nipBaru = config('siasn-api.params_test.nip_baru');

    expect($nipBaru)->not->toBeEmpty();

    $this->artisan("siasn-simpeg:get-rw-kursus {$nipBaru}")->assertSuccessful();
});

it('can get rw masa kerja', function () {
    $nipBaru = config('siasn-api.params_test.nip_baru');

    expect($nipBaru)->not->toBeEmpty();

    $this->artisan("siasn-simpeg:get-rw-masa-kerja {$nipBaru}")->assertSuccessful();
});

it('can get rw pemberhentian', function () {
    $nipBaru = config('siasn-api.params_test.nip_baru');

    expect($nipBaru)->not->toBeEmpty();

    $this->artisan("siasn-simpeg:get-rw-pemberhentian {$nipBaru}")->assertSuccessful();
});

it('can get rw pendidikan', function () {
    $nipBaru = config('siasn-api.params_test.nip_baru');

    expect($nipBaru)->not->toBeEmpty();

    $this->artisan("siasn-simpeg:get-rw-pendidikan {$nipBaru}")->assertSuccessful();
});

it('can get rw penghargaan', function () {
    $nipBaru = config('siasn-api.params_test.nip_baru');

    expect($nipBaru)->not->toBeEmpty();

    $this->artisan("siasn-simpeg:get-rw-penghargaan {$nipBaru}")->assertSuccessful();
});

it('can get rw pindah instansi', function () {
    $nipBaru = config('siasn-api.params_test.nip_baru');

    expect($nipBaru)->not->toBeEmpty();

    $this->artisan("siasn-simpeg:get-rw-pindah-instansi {$nipBaru}")->assertSuccessful();
});

it('can get rw pwk', function () {
    $nipBaru = config('siasn-api.params_test.nip_baru');

    expect($nipBaru)->not->toBeEmpty();

    $this->artisan("siasn-simpeg:get-rw-pwk {$nipBaru}")->assertSuccessful();
});

it('can get rw skp', function () {
    $nipBaru = config('siasn-api.params_test.nip_baru');

    expect($nipBaru)->not->toBeEmpty();

    $this->artisan("siasn-simpeg:get-rw-skp {$nipBaru}")->assertSuccessful();
});

it('can get rw skp22', function () {
    $nipBaru = config('siasn-api.params_test.nip_baru');

    expect($nipBaru)->not->toBeEmpty();

    $this->artisan("siasn-simpeg:get-rw-skp22 {$nipBaru}")->assertSuccessful();
});

it('can get rw unor', function () {
    $nipBaru = config('siasn-api.params_test.nip_baru');

    expect($nipBaru)->not->toBeEmpty();

    $this->artisan("siasn-simpeg:get-rw-unor {$nipBaru}")->assertSuccessful();
});
