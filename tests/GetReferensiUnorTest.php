<?php

namespace Kanekescom\Siasn\Api\Simpeg\Tests;

use Kanekescom\Siasn\Api\Simpeg\Facades\Simpeg;
use Kanekescom\Siasn\Api\Simpeg\Models\ReferensiUnor;

class GetReferensiUnorTest extends TestCase
{
    /** @test */
    public function can_get_ref_unor()
    {
        $response = Simpeg::getRefUnor();

        $this->assertTrue($response->successful());
    }

    /** @test */
    public function can_get_ref_unor_as_model()
    {
        $model = ReferensiUnor::all();

        $this->assertTrue(is_array($model));
    }
}
