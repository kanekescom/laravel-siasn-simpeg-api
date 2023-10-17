<?php

it('can get hukdis id', function () {
    $get_hukdis_id = config('siasn-api.params_test.get_hukdis_id');

    $this->artisan("siasn-simpeg:get-hukdis-id {$get_hukdis_id}")->assertSuccessful();
});

it('can post hukdis save', function () {
    $query = config('siasn-api.params_test.post_hukdis_save_query');

    $this->artisan('siasn-simpeg:post-hukdis-save')
        ->expectsQuestion('Copy the json above, fill it and paste it here', $query)
        ->assertSuccessful();
});
