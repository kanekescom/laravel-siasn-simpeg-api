<?php

it('can get angkakredit id', function () {
    $id = config('siasn-simpeg-api.params_test.get_angkakredit_id');

    expect($id)->not->toBeEmpty();

    $this->artisan("siasn-simpeg:get-angkakredit-id {$id}")
        ->assertSuccessful();
});
