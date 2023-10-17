<?php

it('can get skp22 id', function () {
    $get_skp22_id = config('siasn-api.params_test.get_skp22_id');

    $this->artisan("siasn-simpeg:get-skp22-id {$get_skp22_id}")->assertSuccessful();
});
