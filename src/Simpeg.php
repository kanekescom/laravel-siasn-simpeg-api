<?php

namespace Kanekescom\Siasn\Api\Simpeg;

use Kanekescom\Siasn\Api\Facades\Siasn;
use Kanekescom\Siasn\Api\Simpeg\Traits\HasListPengadaanEndpoint;
use Kanekescom\Siasn\Api\Simpeg\Traits\HasListPensiunEndpoint;
use Kanekescom\Siasn\Api\Simpeg\Traits\HasReferensiEndpoint;

class Simpeg
{
    private $response;

    use HasListPengadaanEndpoint;
    use HasListPensiunEndpoint;
    use HasReferensiEndpoint;

    /**
     * Create a new instance.
     */
    public function __construct()
    {
        $this->response = Siasn::baseUrl(config('siasn_simpeg.base_url'));
    }

    /**
     * Handle dynamic method calls.
     *
     * @param  string  $method
     * @param  array  $parameters
     */
    public function __call($method, $parameters)
    {
        if (method_exists($this->response, $method)) {
            return call_user_func_array([$this->response, $method], $parameters);
        }

        throw new \BadMethodCallException("Method {$method} does not exist.");
    }

    /**
     * Handle dynamic static method calls.
     *
     * @param  string  $method
     * @param  array  $parameters
     */
    public static function __callStatic($method, $parameters)
    {
        if (method_exists((new static)->response, $method)) {
            return call_user_func_array([(new static)->response, $method], $parameters);
        }

        throw new \BadMethodCallException("Method {$method} does not exist.");
    }
}
