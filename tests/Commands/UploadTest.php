<?php

it('can get download dok', function () {
    $query = config('siasn-simpeg-api.params_test.get_download_dok_filepath');

    expect($query)->not->toBeEmpty();

    $this->artisan('siasn-simpeg:get-download-dok')
        ->expectsQuestion('Write down file path', $query)
        ->assertSuccessful();
});

it('can download download dok', function () {
    $query = config('siasn-simpeg-api.params_test.download_download_dok_filepath');

    expect($query)->not->toBeEmpty();

    $this->artisan('siasn-simpeg:download-download-dok')
        ->expectsQuestion('Write down file path', $query)
        ->assertSuccessful();
});
