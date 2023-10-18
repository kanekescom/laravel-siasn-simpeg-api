<?php

it('can get diklat id', function () {
    $get_diklat_id = config('siasn-api.params_test.get_diklat_id');

    expect($get_diklat_id)->not->toBeEmpty();

    $this->artisan("siasn-simpeg:get-diklat-id {$get_diklat_id}")->assertSuccessful();
});

it('can post diklat save', function () {
    $query = config('siasn-api.params_test.post_diklat_save_query');

    expect($query)->not->toBeEmpty();

    $this->artisan('siasn-simpeg:post-diklat-save')
        ->expectsQuestion('Copy the json above, fill it and paste it here', $query)
        ->assertSuccessful();
});
