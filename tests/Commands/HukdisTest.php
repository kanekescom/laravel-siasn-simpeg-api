<?php

it('can get hukdis id', function () {
    $id = config('siasn-simpeg-api.params_test.get_hukdis_id');

    expect($id)->not->toBeEmpty();

    $this->artisan("siasn-simpeg:get-hukdis-id {$id}")->assertSuccessful();
});
