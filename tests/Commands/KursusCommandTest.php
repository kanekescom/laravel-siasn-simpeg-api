<?php

it('can get kursus id', function () {
    $get_kursus_id = config('siasn-api.params_test.get_kursus_id');

    expect($get_kursus_id)->not->toBeEmpty();

    $this->artisan("siasn-simpeg:get-kursus-id {$get_kursus_id}")->assertSuccessful();
});

it('can post kursus save', function () {
    $query = config('siasn-api.params_test.post_kursus_save_query');

    expect($query)->not->toBeEmpty();

    $this->artisan('siasn-simpeg:post-kursus-save')
        ->expectsQuestion('Copy the json above, fill it and paste it here', $query)
        ->assertSuccessful();
});
