<?php

it('can get skp id', function () {
    $get_skp_id = config('siasn-api.params_test.get_skp_id');

    expect($get_skp_id)->not->toBeEmpty();

    $this->artisan("siasn-simpeg:get-skp-id {$get_skp_id}")->assertSuccessful();
});

it('can post skp 2021 save', function () {
    $query = config('siasn-api.params_test.post_skp2021_save_query');

    expect($query)->not->toBeEmpty();

    $this->artisan('siasn-simpeg:post-skp2021-save')
        ->expectsQuestion('Copy the json above, fill it and paste it here', $query)
        ->assertSuccessful();
});

it('can post skp save', function () {
    $query = config('siasn-api.params_test.post_skp_save_query');

    expect($query)->not->toBeEmpty();

    $this->artisan('siasn-simpeg:post-skp-save')
        ->expectsQuestion('Copy the json above, fill it and paste it here', $query)
        ->assertSuccessful();
});
