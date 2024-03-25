<?php

use Kanekescom\Siasn\Simpeg\Api\Facades\Simpeg;

it('can get referensi ref unor', function () {
    $response = Simpeg::getReferensiRefUnor();
    $result = $response->collect()->toArray();

    expect($response->successful())->toBeTrue();
    expect($result)->toMatchArray([
        'code' => '1',
    ]);
});
