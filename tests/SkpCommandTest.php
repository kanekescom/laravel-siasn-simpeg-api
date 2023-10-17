<?php

it('can get skp id', function () {
    $get_skp_id = config('siasn-api.params_test.get_skp_id');

    $this->artisan("siasn-simpeg:get-skp-id {$get_skp_id}")->assertSuccessful();
});
