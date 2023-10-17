<?php

it('can get rw angka kredit', function () {
    $nip_baru = config('siasn-api.params_test.nip_baru');

    $this->artisan("siasn-simpeg:get-rw-angka-kredit {$nip_baru}")->assertSuccessful();
});

it('can get rw cltn', function () {
    $nip_baru = config('siasn-api.params_test.nip_baru');

    $this->artisan("siasn-simpeg:get-rw-cltn {$nip_baru}")->assertSuccessful();
});

it('can get rw diklat', function () {
    $nip_baru = config('siasn-api.params_test.nip_baru');

    $this->artisan("siasn-simpeg:get-rw-diklat {$nip_baru}")->assertSuccessful();
});

it('can get rw dp3', function () {
    $nip_baru = config('siasn-api.params_test.nip_baru');

    $this->artisan("siasn-simpeg:get-rw-dp3 {$nip_baru}")->assertSuccessful();
});

it('can get rw golongan', function () {
    $nip_baru = config('siasn-api.params_test.nip_baru');

    $this->artisan("siasn-simpeg:get-rw-golongan {$nip_baru}")->assertSuccessful();
});

it('can get rw hukdis', function () {
    $nip_baru = config('siasn-api.params_test.nip_baru');

    $this->artisan("siasn-simpeg:get-rw-hukdis {$nip_baru}")->assertSuccessful();
});

it('can get rw jabatan', function () {
    $nip_baru = config('siasn-api.params_test.nip_baru');

    $this->artisan("siasn-simpeg:get-rw-jabatan {$nip_baru}")->assertSuccessful();
});

it('can get rw kursus', function () {
    $nip_baru = config('siasn-api.params_test.nip_baru');

    $this->artisan("siasn-simpeg:get-rw-kursus {$nip_baru}")->assertSuccessful();
});

it('can get rw masa kerja', function () {
    $nip_baru = config('siasn-api.params_test.nip_baru');

    $this->artisan("siasn-simpeg:get-rw-masa-kerja {$nip_baru}")->assertSuccessful();
});

it('can get rw pemberhentian', function () {
    $nip_baru = config('siasn-api.params_test.nip_baru');

    $this->artisan("siasn-simpeg:get-rw-pemberhentian {$nip_baru}")->assertSuccessful();
});

it('can get rw pendidikan', function () {
    $nip_baru = config('siasn-api.params_test.nip_baru');

    $this->artisan("siasn-simpeg:get-rw-pendidikan {$nip_baru}")->assertSuccessful();
});

it('can get rw penghargaan', function () {
    $nip_baru = config('siasn-api.params_test.nip_baru');

    $this->artisan("siasn-simpeg:get-rw-penghargaan {$nip_baru}")->assertSuccessful();
});

it('can get rw pindah instansi', function () {
    $nip_baru = config('siasn-api.params_test.nip_baru');

    $this->artisan("siasn-simpeg:get-rw-pindah-instansi {$nip_baru}")->assertSuccessful();
});

it('can get rw pwk', function () {
    $nip_baru = config('siasn-api.params_test.nip_baru');

    $this->artisan("siasn-simpeg:get-rw-pwk {$nip_baru}")->assertSuccessful();
});

it('can get rw skp', function () {
    $nip_baru = config('siasn-api.params_test.nip_baru');

    $this->artisan("siasn-simpeg:get-rw-skp {$nip_baru}")->assertSuccessful();
});

it('can get rw skp22', function () {
    $nip_baru = config('siasn-api.params_test.nip_baru');

    $this->artisan("siasn-simpeg:get-rw-skp22 {$nip_baru}")->assertSuccessful();
});

it('can get rw unor', function () {
    $nip_baru = config('siasn-api.params_test.nip_baru');

    $this->artisan("siasn-simpeg:get-rw-unor {$nip_baru}")->assertSuccessful();
});
