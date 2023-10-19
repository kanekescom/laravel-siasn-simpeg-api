<?php

it('can get angka kredit id', function () {
    $id = config('siasn-api.params_test.get_angka_kredit_id');

    expect($id)->not->toBeEmpty();

    $this->artisan("siasn-simpeg:get-angka-kredit-id {$id}")->assertSuccessful();
});

it('can post angka kredit save', function () {
    $query = config('siasn-api.params_test.post_angka_kredit_save_query');

    expect($query)->not->toBeEmpty();
    expect(json_decode($query, true))->toBeArray();

    $this->artisan('siasn-simpeg:post-angka-kredit save')
        ->expectsQuestion('Copy the json above, fill it and paste it here', $query)
        ->assertSuccessful();
});
