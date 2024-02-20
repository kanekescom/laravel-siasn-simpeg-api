<?php

it('can get penghargaan id', function () {
    $id = config('siasn-simpeg-api.params_test.get_penghargaan_id');

    expect($id)->not->toBeEmpty();

    $this->artisan("siasn-simpeg:get-penghargaan-id {$id}")->assertSuccessful();
});
