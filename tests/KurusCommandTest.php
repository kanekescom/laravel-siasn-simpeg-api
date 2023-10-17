<?php

it('can get kursus id', function () {
    $get_kursus_id = config('siasn-api.params_test.get_kursus_id');

    $this->artisan("siasn-simpeg:get-kursus-id {$get_kursus_id}")->assertSuccessful();
});
