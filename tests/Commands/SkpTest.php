<?php

it('can get skp id', function () {
    $id = config('siasn-simpeg-api.params_test.get_skp_id');

    expect($id)->not->toBeEmpty();

    $this->artisan("siasn-simpeg:get-skp-id {$id}")
        ->assertSuccessful();
});
