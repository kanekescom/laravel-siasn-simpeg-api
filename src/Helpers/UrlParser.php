<?php

namespace Kanekescom\Siasn\Api\Simpeg\Helpers;

class UrlParser
{
    private static $url;

    public function __construct($url)
    {
        self::$url = $url;
    }

    public static function parse(array $paths = [])
    {
        $paths = self::transform($paths)->toArray();

        return str_replace(array_keys($paths), $paths, self::$url);
    }

    public static function transform(array $paths = [])
    {
        return collect($paths)->mapWithKeys(function (string $value, string $key) {
            return [
                '{' . $key . '}' => $value,
            ];
        });
    }
}
