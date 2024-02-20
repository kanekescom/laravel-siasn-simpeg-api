<?php

use Kanekescom\Siasn\Api\Simpeg\Facades\Simpeg;

it('can get referensi ref unor', function () {
    $response = Simpeg::getReferensiRefUnor();
    $result = $response->collect()->toArray();

    expect($response->successful())->toBeTrue();
    expect($result)->toMatchArray([
        'code' => '1',
    ]);
});
