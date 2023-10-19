<?php

it('can get list kp instansi', function () {
    $periode = config('siasn-api.params_test.get_list_kp_instansi_periode');

    expect($periode)->not->toBeEmpty();

    $this->artisan("siasn-simpeg:get-list-kp-instansi {$periode}")->assertSuccessful();
});

it('can post upload dok sk kp', function () {
    $query = config('siasn-api.params_test.post_upload_dok_sk_kp_query');

    expect($query)->not->toBeEmpty();

    $this->artisan("siasn-simpeg:post-upload-dok-sk-kp {$query}")->assertSuccessful();
});
