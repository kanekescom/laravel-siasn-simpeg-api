<?php

namespace Kanekescom\Siasn\Api\Simpeg\Tests;

use Kanekescom\Siasn\Api\Simpeg\Facades\Simpeg;

class GetReferensiUnorTest extends TestCase
{
    /** @test */
    public function can_get_ref_unor()
    {
        $response = Simpeg::getRefUnor();

        $this->assertTrue($response->successful());
    }
}
