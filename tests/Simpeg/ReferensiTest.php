<?php

use Kanekescom\Siasn\Api\Simpeg\Facades\Simpeg;

it('can get referensi unor', function () {
    $response = Simpeg::getReferensiUnor();
    $result = $response->collect()->toArray();

    expect($response->successful())->toBeTrue();
    expect($result)->toMatchArray([
        'code' => '1',
    ]);
});
