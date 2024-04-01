<?php

it('can get diklat id', function () {
    $id = config('siasn-simpeg-api.params_test.get_diklat_id');

    expect($id)->not->toBeEmpty();

    $this->artisan("siasn-simpeg:get-diklat-id {$id}")
        ->assertSuccessful();
});
