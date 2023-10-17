<?php

it('can get angka kredit id', function () {
    $get_jabatan_id = config('siasn-api.params_test.get_jabatan_id');

    $this->artisan("siasn-simpeg:get-jabatan-id {$get_jabatan_id}")->assertSuccessful();
});
