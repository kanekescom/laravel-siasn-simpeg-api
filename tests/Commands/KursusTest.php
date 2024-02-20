<?php

it('can get kursus id', function () {
    $id = config('siasn-simpeg-api.params_test.get_kursus_id');

    expect($id)->not->toBeEmpty();

    $this->artisan("siasn-simpeg:get-kursus-id {$id}")->assertSuccessful();
});
