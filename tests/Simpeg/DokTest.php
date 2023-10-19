<?php

use Kanekescom\Siasn\Api\Simpeg\Facades\Simpeg;

it('can get download dok', function () {
    $query = json_decode(config('siasn-api.params_test.get_download_dok_query'), true);

    expect($query)->toBeArray();

    $response = Simpeg::getDownloadDok([], $query);

    expect($response->successful())->toBeTrue();
});

it('can post upload dok', function () {
    $query = json_decode(config('siasn-api.params_test.post_upload_dok_query'), true);

    expect($query)->toBeArray();

    $response = Simpeg::postUploadDok([], $query);

    expect($response->successful())->toBeTrue();
});

it('can post upload dok rw', function () {
    $query = json_decode(config('siasn-api.params_test.post_upload_dok_rw_query'), true);

    expect($query)->toBeArray();

    $response = Simpeg::postUploadDokRw([], $query);

    expect($response->successful())->toBeTrue();
});
