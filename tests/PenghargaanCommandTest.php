<?php

it('can get penghargaan id', function () {
    $get_penghargaan_id = config('siasn-api.params_test.get_penghargaan_id');

    $this->artisan("siasn-simpeg:get-penghargaan-id {$get_penghargaan_id}")->assertSuccessful();
});
