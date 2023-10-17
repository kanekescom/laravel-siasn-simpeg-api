<?php

it('can get angka kredit id', function () {
    $get_angka_kredit_id = config('siasn-api.params_test.get_angka_kredit_id');

    $this->artisan("siasn-simpeg:get-angka-kredit-id {$get_angka_kredit_id}")->assertSuccessful();
});
