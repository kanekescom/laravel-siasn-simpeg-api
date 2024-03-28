<?php

namespace Kanekescom\Siasn\Simpeg\Api\Http\Client;

use Illuminate\Http\Client\Response;
use Kanekescom\Siasn\Simpeg\Api\Helpers\UrlParser;
use Kanekescom\Siasn\Simpeg\Api\Simpeg;

class Riwayat
{
    public static function getAngkakredit(array $paths = [], array $query = []): Response
    {
        $urlFormat = '/pns/rw-angkakredit/{nipBaru}';
        $urlParsed = (new UrlParser($urlFormat))->parse($paths);

        return (new Simpeg)->get($urlParsed, $query);
    }

    public static function getCltn(array $paths = [], array $query = []): Response
    {
        $urlFormat = '/pns/rw-cltn/{nipBaru}';
        $urlParsed = (new UrlParser($urlFormat))->parse($paths);

        return (new Simpeg)->get($urlParsed, $query);
    }

    public static function getDiklat(array $paths = [], array $query = []): Response
    {
        $urlFormat = '/pns/rw-diklat/{nipBaru}';
        $urlParsed = (new UrlParser($urlFormat))->parse($paths);

        return (new Simpeg)->get($urlParsed, $query);
    }

    public static function getDp3(array $paths = [], array $query = []): Response
    {
        $urlFormat = '/pns/rw-dp3/{nipBaru}';
        $urlParsed = (new UrlParser($urlFormat))->parse($paths);

        return (new Simpeg)->get($urlParsed, $query);
    }

    public static function getGolongan(array $paths = [], array $query = []): Response
    {
        $urlFormat = '/pns/rw-golongan/{nipBaru}';
        $urlParsed = (new UrlParser($urlFormat))->parse($paths);

        return (new Simpeg)->get($urlParsed, $query);
    }

    public static function getHukdis(array $paths = [], array $query = []): Response
    {
        $urlFormat = '/pns/rw-hukdis/{nipBaru}';
        $urlParsed = (new UrlParser($urlFormat))->parse($paths);

        return (new Simpeg)->get($urlParsed, $query);
    }

    public static function getJabatan(array $paths = [], array $query = []): Response
    {
        $urlFormat = '/pns/rw-jabatan/{nipBaru}';
        $urlParsed = (new UrlParser($urlFormat))->parse($paths);

        return (new Simpeg)->get($urlParsed, $query);
    }

    public static function getKinerjaperiodik(array $paths = [], array $query = []): Response
    {
        $urlFormat = '/pns/rw-kinerjaperiodik/{nipBaru}';
        $urlParsed = (new UrlParser($urlFormat))->parse($paths);

        return (new Simpeg)->get($urlParsed, $query);
    }

    public static function getKursus(array $paths = [], array $query = []): Response
    {
        $urlFormat = '/pns/rw-kursus/{nipBaru}';
        $urlParsed = (new UrlParser($urlFormat))->parse($paths);

        return (new Simpeg)->get($urlParsed, $query);
    }

    public static function getMasakerja(array $paths = [], array $query = []): Response
    {
        $urlFormat = '/pns/rw-masakerja/{nipBaru}';
        $urlParsed = (new UrlParser($urlFormat))->parse($paths);

        return (new Simpeg)->get($urlParsed, $query);
    }

    public static function getPemberhentian(array $paths = [], array $query = []): Response
    {
        $urlFormat = '/pns/rw-pemberhentian/{nipBaru}';
        $urlParsed = (new UrlParser($urlFormat))->parse($paths);

        return (new Simpeg)->get($urlParsed, $query);
    }

    public static function getPendidikan(array $paths = [], array $query = []): Response
    {
        $urlFormat = '/pns/rw-pendidikan/{nipBaru}';
        $urlParsed = (new UrlParser($urlFormat))->parse($paths);

        return (new Simpeg)->get($urlParsed, $query);
    }

    public static function getPenghargaan(array $paths = [], array $query = []): Response
    {
        $urlFormat = '/pns/rw-penghargaan/{nipBaru}';
        $urlParsed = (new UrlParser($urlFormat))->parse($paths);

        return (new Simpeg)->get($urlParsed, $query);
    }

    public static function getPindahinstansi(array $paths = [], array $query = []): Response
    {
        $urlFormat = '/pns/rw-pindahinstansi/{nipBaru}';
        $urlParsed = (new UrlParser($urlFormat))->parse($paths);

        return (new Simpeg)->get($urlParsed, $query);
    }

    public static function getPnsunor(array $paths = [], array $query = []): Response
    {
        $urlFormat = '/pns/rw-pnsunor/{nipBaru}';
        $urlParsed = (new UrlParser($urlFormat))->parse($paths);

        return (new Simpeg)->get($urlParsed, $query);
    }

    public static function getPwk(array $paths = [], array $query = []): Response
    {
        $urlFormat = '/pns/rw-pwk/{nipBaru}';
        $urlParsed = (new UrlParser($urlFormat))->parse($paths);

        return (new Simpeg)->get($urlParsed, $query);
    }

    public static function getSkp(array $paths = [], array $query = []): Response
    {
        $urlFormat = '/pns/rw-skp/{nipBaru}';
        $urlParsed = (new UrlParser($urlFormat))->parse($paths);

        return (new Simpeg)->get($urlParsed, $query);
    }

    public static function getSkp22(array $paths = [], array $query = []): Response
    {
        $urlFormat = '/pns/rw-skp22/{nipBaru}';
        $urlParsed = (new UrlParser($urlFormat))->parse($paths);

        return (new Simpeg)->get($urlParsed, $query);
    }
}
