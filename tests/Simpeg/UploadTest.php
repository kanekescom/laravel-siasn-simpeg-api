<?php

use Illuminate\Support\Facades\File;
use Kanekescom\Siasn\Api\Simpeg\Facades\Simpeg;

it('can get download dok', function () {
    $query = ['filePath' => config('siasn-simpeg-api.params_test.get_download_dok_filepath')];

    expect($query)->not->toBeEmpty();

    $response = Simpeg::getDownloadDok([], $query);
    $result = $response->getBody()->getContents();

    expect($response->successful())->toBeTrue();
    expect($result)->not->toBeEmpty();
});

it('can download download dok', function () {
    $query = ['filePath' => config('siasn-simpeg-api.params_test.download_download_dok_filepath')];

    expect($query)->not->toBeEmpty();

    $filename = Simpeg::downloadDownloadDok([], $query);

    expect(File::exists($filename))->toBeTrue();
});
