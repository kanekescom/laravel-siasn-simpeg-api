<?php

it('can get jabatan id', function () {
    $get_jabatan_id = config('siasn-api.params_test.get_jabatan_id');

    $this->artisan("siasn-simpeg:get-jabatan-id {$get_jabatan_id}")->assertSuccessful();
});

it('can get jabatan pns', function () {
    $nip_baru = config('siasn-api.params_test.nip_baru');

    $this->artisan("siasn-simpeg:get-jabatan-pns {$nip_baru}")->assertSuccessful();
});

it('can post jabatan save', function () {
    $query = config('siasn-api.params_test.post_jabatan_save_query');

    $this->artisan('siasn-simpeg:post-jabatan-save')
        ->expectsQuestion('Copy the json above, fill it and paste it here', $query)
        ->assertSuccessful();
});
