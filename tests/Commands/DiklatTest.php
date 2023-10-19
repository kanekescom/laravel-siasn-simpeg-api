<?php

it('can get diklat id', function () {
    $id = config('siasn-api.params_test.get_diklat_id');

    expect($id)->not->toBeEmpty();

    $this->artisan("siasn-simpeg:get-diklat-id {$id}")->assertSuccessful();
});

it('can post diklat save', function () {
    $query = config('siasn-api.params_test.post_diklat_save_query');

    expect($query)->not->toBeEmpty();
    expect(json_decode($query, true))->toBeArray();

    $this->artisan('siasn-simpeg:post-diklat save')
        ->expectsQuestion('Copy the json above, fill it and paste it here', $query)
        ->assertSuccessful();
});
