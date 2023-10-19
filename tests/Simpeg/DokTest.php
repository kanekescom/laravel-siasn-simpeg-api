<?php

use Kanekescom\Siasn\Api\Simpeg\Facades\Simpeg;

it('can get download dok', function () {
    $query = json_decode(config('siasn-api.params_test.get_download_dok_query'), true);

    expect($query)->toBeArray();

    $response = Simpeg::getDownloadDok([], $query);
    $result = $response->collect()->toArray();

    expect($response->successful())->toBeTrue();
    expect($result)->toMatchArray([
        'code' => '1',
    ]);
});

it('can post upload dok', function () {
    $query = json_decode(config('siasn-api.params_test.post_upload_dok_query'), true);

    expect($query)->toBeArray();

    $response = Simpeg::postUploadDok([], $query);
    $result = $response->collect()->toArray();

    expect($response->successful())->toBeTrue();
    expect($result)->toMatchArray([
        'success' => true,
    ]);
});

it('can post upload dok rw', function () {
    $query = json_decode(config('siasn-api.params_test.post_upload_dok_rw_query'), true);

    expect($query)->toBeArray();

    $response = Simpeg::postUploadDokRw([], $query);
    $result = $response->collect()->toArray();

    expect($response->successful())->toBeTrue();
    expect($result)->toMatchArray([
        'success' => true,
    ]);
});
