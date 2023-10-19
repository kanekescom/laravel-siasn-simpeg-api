<?php

it('can get hukdis id', function () {
    $id = config('siasn-api.params_test.get_hukdis_id');

    expect($id)->not->toBeEmpty();

    $this->artisan("siasn-simpeg:get-hukdis-id {$id}")->assertSuccessful();
});

it('can post hukdis save', function () {
    $query = config('siasn-api.params_test.post_hukdis_save_query');

    expect($query)->not->toBeEmpty();
    expect(json_decode($query, true))->toBeArray();

    $this->artisan('siasn-simpeg:post-hukdis save')
        ->expectsQuestion('Copy the json above, fill it and paste it here', $query)
        ->assertSuccessful();
});
