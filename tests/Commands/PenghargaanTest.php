<?php

it('can get penghargaan id', function () {
    $id = config('siasn-api.params_test.get_penghargaan_id');

    expect($id)->not->toBeEmpty();

    $this->artisan("siasn-simpeg:get-penghargaan-id {$id}")->assertSuccessful();
});

it('can post penghargaan save', function () {
    $query = config('siasn-api.params_test.post_penghargaan_save_query');

    expect($query)->not->toBeEmpty();
    expect(json_decode($query, true))->toBeArray();

    $this->artisan('siasn-simpeg:post-penghargaan save')
        ->expectsQuestion('Copy the json above, fill it and paste it here', $query)
        ->assertSuccessful();
});
