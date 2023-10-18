<?php

it('can get list kp instansi', function () {
    $get_list_kp_instansi_periode = config('siasn-api.params_test.get_list_kp_instansi_periode');

    expect($get_list_kp_instansi_periode)->not->toBeEmpty();

    $this->artisan("siasn-simpeg:get-list-kp-instansi {$get_list_kp_instansi_periode}")->assertSuccessful();
});

it('can post upload dok sk kp', function () {
    $post_upload_dok_sk_kp_query = config('siasn-api.params_test.post_upload_dok_sk_kp_query');

    expect($post_upload_dok_sk_kp_query)->not->toBeEmpty();

    $this->artisan("siasn-simpeg:post-upload-dok-sk-kp {$post_upload_dok_sk_kp_query}")->assertSuccessful();
});
