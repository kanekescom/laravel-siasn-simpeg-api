<?php

it('can get kursus id', function () {
    $id = config('siasn-api.params_test.get_kursus_id');

    expect($id)->not->toBeEmpty();

    $this->artisan("siasn-simpeg:get-kursus-id {$id}")->assertSuccessful();
});

it('can post kursus save', function () {
    $query = config('siasn-api.params_test.post_kursus_save_query');

    expect($query)->not->toBeEmpty();
    expect(json_decode($query, true))->toBeArray();

    $this->artisan('siasn-simpeg:post-kursus save')
        ->expectsQuestion('Copy the json above, fill it and paste it here', $query)
        ->assertSuccessful();
});
