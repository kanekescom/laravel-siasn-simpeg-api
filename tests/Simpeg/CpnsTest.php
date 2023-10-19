<?php

use Kanekescom\Siasn\Api\Simpeg\Facades\Simpeg;

it('can post cpns save', function () {
    $query = json_decode(config('siasn-api.params_test.post_cpns_save_query'), true);

    expect($query)->toBeArray();

    $response = Simpeg::postCpnsSave([], $query);

    expect($response->successful())->toBeTrue();
});
