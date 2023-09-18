<?php

namespace Kanekescom\Siasn\Api\Simpeg\Tests;

class CommandTest extends TestCase
{
    /** @test */
    public function can_get_ref_unor()
    {
        $this->artisan('siasn-simpeg:get-ref-unor')->assertSuccessful();
    }
}
