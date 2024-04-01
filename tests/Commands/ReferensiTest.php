<?php

it('can get referensi ref unor', function () {
    $this->artisan('siasn-simpeg:get-referensi-ref-unor')
        ->assertSuccessful();
});
