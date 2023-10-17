<?php

it('can get diklat id', function () {
    $get_diklat_id = config('siasn-api.params_test.get_diklat_id');

    $this->artisan("siasn-simpeg:get-diklat-id {$get_diklat_id}")->assertSuccessful();
});
