<?php

use Kanekescom\Siasn\Simpeg\Api\Http\Client\Referensi;

it('can get referensi ref unor', function () {
    $response = Referensi::getUnor();
    $result = $response->collect()->toArray();

    expect($response->successful())->toBeTrue();
    expect($result)->toMatchArray([
        'code' => '1',
    ]);
});
