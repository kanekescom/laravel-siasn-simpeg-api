<?php

it('can get skp22 id', function () {
    $id = config('siasn-simpeg-api.params_test.get_skp22_id');

    expect($id)->not->toBeEmpty();

    $this->artisan("siasn-simpeg:get-skp22-id {$id}")
        ->assertSuccessful();
});
