<?php

use Kanekescom\Siasn\Api\Simpeg\Facades\Simpeg;

it('can get referensi unor', function () {
    $response = Simpeg::getReferensiUnor();

    expect($response->successful())->toBeTrue();
});
