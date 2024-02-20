<?php

it('can get jabatan id', function () {
    $id = config('siasn-simpeg-api.params_test.get_jabatan_id');

    expect($id)->not->toBeEmpty();

    $this->artisan("siasn-simpeg:get-jabatan-id {$id}")->assertSuccessful();
});
