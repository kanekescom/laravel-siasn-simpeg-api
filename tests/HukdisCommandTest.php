<?php

it('can get hukdis id', function () {
    $get_hukdis_id = config('siasn-api.params_test.get_hukdis_id');

    $this->artisan("siasn-simpeg:get-hukdis-id {$get_hukdis_id}")->assertSuccessful();
});
