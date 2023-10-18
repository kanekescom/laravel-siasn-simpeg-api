<?php

it('can post cpns save', function () {
    $query = config('siasn-api.params_test.post_cpns_save_query');

    expect($query)->not->toBeEmpty();

    $this->artisan('siasn-simpeg:post-cpns-save')
        ->expectsQuestion('Copy the json above, fill it and paste it here', $query)
        ->assertSuccessful();
});
