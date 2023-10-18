<?php

it('can get skp22 id', function () {
    $get_skp22_id = config('siasn-api.params_test.get_skp22_id');

    expect($get_skp22_id)->not->toBeEmpty();

    $this->artisan("siasn-simpeg:get-skp22-id {$get_skp22_id}")->assertSuccessful();
});

it('can post skp22 save', function () {
    $query = config('siasn-api.params_test.post_skp22_save_query');

    expect($query)->not->toBeEmpty();

    $this->artisan('siasn-simpeg:post-skp22-save')
        ->expectsQuestion('Copy the json above, fill it and paste it here', $query)
        ->assertSuccessful();
});
