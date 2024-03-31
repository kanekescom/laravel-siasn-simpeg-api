<?php

namespace Kanekescom\Siasn\Simpeg\Api;

use Illuminate\Http\Client\Response;
use Kanekescom\Siasn\Simpeg\Api\Facades\Simpeg;
use Kanekescom\Siasn\Simpeg\Api\Helpers\UrlParser;

class Riwayat
{
    public static function getAngkakredit(array|string $paths = [], array $query = []): Response
    {
        if (is_string($paths)) {
            $paths = [
                'nipBaru' => $paths,
            ];
        }

        $urlFormat = '/pns/rw-angkakredit/{nipBaru}';
        $urlParsed = (new UrlParser($urlFormat))->parse($paths);

        return Simpeg::get($urlParsed, $query);
    }

    public static function getCltn(array|string $paths = [], array $query = []): Response
    {
        if (is_string($paths)) {
            $paths = [
                'nipBaru' => $paths,
            ];
        }

        $urlFormat = '/pns/rw-cltn/{nipBaru}';
        $urlParsed = (new UrlParser($urlFormat))->parse($paths);

        return Simpeg::get($urlParsed, $query);
    }

    public static function getDiklat(array|string $paths = [], array $query = []): Response
    {
        if (is_string($paths)) {
            $paths = [
                'nipBaru' => $paths,
            ];
        }

        $urlFormat = '/pns/rw-diklat/{nipBaru}';
        $urlParsed = (new UrlParser($urlFormat))->parse($paths);

        return Simpeg::get($urlParsed, $query);
    }

    public static function getDp3(array|string $paths = [], array $query = []): Response
    {
        if (is_string($paths)) {
            $paths = [
                'nipBaru' => $paths,
            ];
        }

        $urlFormat = '/pns/rw-dp3/{nipBaru}';
        $urlParsed = (new UrlParser($urlFormat))->parse($paths);

        return Simpeg::get($urlParsed, $query);
    }

    public static function getGolongan(array|string $paths = [], array $query = []): Response
    {
        if (is_string($paths)) {
            $paths = [
                'nipBaru' => $paths,
            ];
        }

        $urlFormat = '/pns/rw-golongan/{nipBaru}';
        $urlParsed = (new UrlParser($urlFormat))->parse($paths);

        return Simpeg::get($urlParsed, $query);
    }

    public static function getHukdis(array|string $paths = [], array $query = []): Response
    {
        if (is_string($paths)) {
            $paths = [
                'nipBaru' => $paths,
            ];
        }

        $urlFormat = '/pns/rw-hukdis/{nipBaru}';
        $urlParsed = (new UrlParser($urlFormat))->parse($paths);

        return Simpeg::get($urlParsed, $query);
    }

    public static function getJabatan(array|string $paths = [], array $query = []): Response
    {
        if (is_string($paths)) {
            $paths = [
                'nipBaru' => $paths,
            ];
        }

        $urlFormat = '/pns/rw-jabatan/{nipBaru}';
        $urlParsed = (new UrlParser($urlFormat))->parse($paths);

        return Simpeg::get($urlParsed, $query);
    }

    public static function getKinerjaperiodik(array|string $paths = [], array $query = []): Response
    {
        if (is_string($paths)) {
            $paths = [
                'nipBaru' => $paths,
            ];
        }

        $urlFormat = '/pns/rw-kinerjaperiodik/{nipBaru}';
        $urlParsed = (new UrlParser($urlFormat))->parse($paths);

        return Simpeg::get($urlParsed, $query);
    }

    public static function getKursus(array|string $paths = [], array $query = []): Response
    {
        if (is_string($paths)) {
            $paths = [
                'nipBaru' => $paths,
            ];
        }

        $urlFormat = '/pns/rw-kursus/{nipBaru}';
        $urlParsed = (new UrlParser($urlFormat))->parse($paths);

        return Simpeg::get($urlParsed, $query);
    }

    public static function getMasakerja(array|string $paths = [], array $query = []): Response
    {
        if (is_string($paths)) {
            $paths = [
                'nipBaru' => $paths,
            ];
        }

        $urlFormat = '/pns/rw-masakerja/{nipBaru}';
        $urlParsed = (new UrlParser($urlFormat))->parse($paths);

        return Simpeg::get($urlParsed, $query);
    }

    public static function getPemberhentian(array|string $paths = [], array $query = []): Response
    {
        if (is_string($paths)) {
            $paths = [
                'nipBaru' => $paths,
            ];
        }

        $urlFormat = '/pns/rw-pemberhentian/{nipBaru}';
        $urlParsed = (new UrlParser($urlFormat))->parse($paths);

        return Simpeg::get($urlParsed, $query);
    }

    public static function getPendidikan(array|string $paths = [], array $query = []): Response
    {
        if (is_string($paths)) {
            $paths = [
                'nipBaru' => $paths,
            ];
        }

        $urlFormat = '/pns/rw-pendidikan/{nipBaru}';
        $urlParsed = (new UrlParser($urlFormat))->parse($paths);

        return Simpeg::get($urlParsed, $query);
    }

    public static function getPenghargaan(array|string $paths = [], array $query = []): Response
    {
        if (is_string($paths)) {
            $paths = [
                'nipBaru' => $paths,
            ];
        }

        $urlFormat = '/pns/rw-penghargaan/{nipBaru}';
        $urlParsed = (new UrlParser($urlFormat))->parse($paths);

        return Simpeg::get($urlParsed, $query);
    }

    public static function getPindahinstansi(array|string $paths = [], array $query = []): Response
    {
        if (is_string($paths)) {
            $paths = [
                'nipBaru' => $paths,
            ];
        }

        $urlFormat = '/pns/rw-pindahinstansi/{nipBaru}';
        $urlParsed = (new UrlParser($urlFormat))->parse($paths);

        return Simpeg::get($urlParsed, $query);
    }

    public static function getPnsunor(array|string $paths = [], array $query = []): Response
    {
        if (is_string($paths)) {
            $paths = [
                'nipBaru' => $paths,
            ];
        }

        $urlFormat = '/pns/rw-pnsunor/{nipBaru}';
        $urlParsed = (new UrlParser($urlFormat))->parse($paths);

        return Simpeg::get($urlParsed, $query);
    }

    public static function getPwk(array|string $paths = [], array $query = []): Response
    {
        if (is_string($paths)) {
            $paths = [
                'nipBaru' => $paths,
            ];
        }

        $urlFormat = '/pns/rw-pwk/{nipBaru}';
        $urlParsed = (new UrlParser($urlFormat))->parse($paths);

        return Simpeg::get($urlParsed, $query);
    }

    public static function getSkp(array|string $paths = [], array $query = []): Response
    {
        if (is_string($paths)) {
            $paths = [
                'nipBaru' => $paths,
            ];
        }

        $urlFormat = '/pns/rw-skp/{nipBaru}';
        $urlParsed = (new UrlParser($urlFormat))->parse($paths);

        return Simpeg::get($urlParsed, $query);
    }

    public static function getSkp22(array|string $paths = [], array $query = []): Response
    {
        if (is_string($paths)) {
            $paths = [
                'nipBaru' => $paths,
            ];
        }

        $urlFormat = '/pns/rw-skp22/{nipBaru}';
        $urlParsed = (new UrlParser($urlFormat))->parse($paths);

        return Simpeg::get($urlParsed, $query);
    }
}
