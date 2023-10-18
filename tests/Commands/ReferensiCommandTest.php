<?php

it('can get referensi unor', function () {
    $this->artisan('siasn-simpeg:get-referensi-unor')->assertSuccessful();
});
