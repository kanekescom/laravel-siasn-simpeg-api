<?php

it('can get penghargaan id', function () {
    $get_penghargaan_id = config('siasn-api.params_test.get_penghargaan_id');

    $this->artisan("siasn-simpeg:get-penghargaan-id {$get_penghargaan_id}")->assertSuccessful();
});

it('can post penghargaan save', function () {
    $query = config('siasn-api.params_test.post_penghargaan_save_query');

    $this->artisan('siasn-simpeg:post-penghargaan-save')
        ->expectsQuestion('Copy the json above, fill it and paste it here', $query)
        ->assertSuccessful();
});