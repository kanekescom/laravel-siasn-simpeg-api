<?php

it('can parse url', function () {
    $nipBaru = config('siasn-api.params_test.nip_baru');
    $paths = [
        'nipBaru' => $nipBaru,
    ];
    $urlFormat = '/pns/data-utama/{nipBaru}';
    $urlParsed = (new UrlParser($urlFormat))->parse($paths);
    $urlToBe = "/pns/data-utama/{$nipBaru}";

    expect($urlParsed)->toBe($urlToBe);
});
