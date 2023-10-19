<?php

it('can get skp22 id', function () {
    $id = config('siasn-api.params_test.get_skp22_id');

    expect($id)->not->toBeEmpty();

    $this->artisan("siasn-simpeg:get-skp22-id {$id}")->assertSuccessful();
});

it('can post skp22 save', function () {
    $query = config('siasn-api.params_test.post_skp22_save_query');

    expect($query)->not->toBeEmpty();
    expect(json_decode($query, true))->toBeArray();

    $this->artisan('siasn-simpeg:post-skp22 save')
        ->expectsQuestion('Copy the json above, fill it and paste it here', $query)
        ->assertSuccessful();
});
