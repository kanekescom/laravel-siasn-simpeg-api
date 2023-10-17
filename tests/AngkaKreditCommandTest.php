<?php

it('can get angka kredit id', function () {
    $get_angka_kredit_id = config('siasn-api.params_test.get_angka_kredit_id');

    $this->artisan("siasn-simpeg:get-angka-kredit-id {$get_angka_kredit_id}")->assertSuccessful();
});

it('can post angka kredit save', function () {
    $query = config('siasn-api.params_test.post_angka_kredit_save_query');

    $this->artisan('siasn-simpeg:post-angka-kredit-save')
        ->expectsQuestion('Copy the json above, fill it and paste it here', $query)
        ->assertSuccessful();
});
