<?php

it('can get download dok', function () {
    $query = config('siasn-api.params_test.get_download_dok_query');

    $this->artisan('siasn-simpeg:get-download-dok')
        ->expectsQuestion('Copy the json above, fill it and paste it here', $query)
        ->assertSuccessful();
});

it('can post upload dok', function () {
    $query = config('siasn-api.params_test.post_upload_dok_query');

    $this->artisan('siasn-simpeg:post-upload-dok')
        ->expectsQuestion('Copy the json above, fill it and paste it here', $query)
        ->assertSuccessful();
});

it('can post upload dok rw', function () {
    $query = config('siasn-api.params_test.post_upload_dok_rw_query');

    $this->artisan('siasn-simpeg:post-upload-dok-rw')
        ->expectsQuestion('Copy the json above, fill it and paste it here', $query)
        ->assertSuccessful();
});
