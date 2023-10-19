<?php

it('can get jabatan id', function () {
    $id = config('siasn-api.params_test.get_jabatan_id');

    expect($id)->not->toBeEmpty();

    $this->artisan("siasn-simpeg:get-jabatan-id {$id}")->assertSuccessful();
});

it('can get jabatan pns', function () {
    $nipBaru = config('siasn-api.params_test.nip_baru');

    expect($nipBaru)->not->toBeEmpty();

    $this->artisan("siasn-simpeg:get-jabatan-pns {$nipBaru}")->assertSuccessful();
});

it('can post jabatan save', function () {
    $query = config('siasn-api.params_test.post_jabatan_save_query');

    expect($query)->not->toBeEmpty();
    expect(json_decode($query, true))->toBeArray();

    $this->artisan('siasn-simpeg:post-jabatan save')
        ->expectsQuestion('Copy the json above, fill it and paste it here', $query)
        ->assertSuccessful();
});
