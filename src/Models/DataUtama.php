<?php

namespace Kanekescom\Siasn\Api\Simpeg\Models;

use Kanekescom\Siasn\Api\Simpeg\Facades\Simpeg;
use Kanekescom\Siasn\Api\Simpeg\Transformers\DataUtamaTransformer;
use League\Fractal\Manager;
use League\Fractal\Resource\Item;

class DataUtama
{
    private $collection;

    /**
     * Create a new instance.
     */
    public function __construct($nipBaru)
    {
        $response = Simpeg::getDataUtama($nipBaru);
        $data = $response->collect()->get('data');

        $this->collection = null;

        if ($response->ok()) {
            $this->collection = collect([]);
        }

        if ($response->ok() && is_array($data)) {
            $transformer = new DataUtamaTransformer;
            $manager = new Manager;
            $data = new Item($data, $transformer);
            $items = $manager->createData($data)->toArray();

            $this->collection = collect($items['data']);
        }
    }

    /**
     * Handle dynamic method calls.
     *
     * @param  string  $method
     * @param  array  $parameters
     */
    public function __call($method, $parameters)
    {
        if (method_exists($this->collection, $method)) {
            return call_user_func_array([$this->collection, $method], $parameters);
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
        if (method_exists((new static)->collection, $method)) {
            return call_user_func_array([(new static)->collection, $method], $parameters);
        }

        throw new \BadMethodCallException("Method {$method} does not exist.");
    }
}
