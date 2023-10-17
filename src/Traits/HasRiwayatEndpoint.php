<?php

namespace Kanekescom\Siasn\Api\Simpeg\Traits;

use Illuminate\Http\Client\Response;
use Kanekescom\Siasn\Api\Simpeg\Helpers\UrlParser;

trait HasRiwayatEndpoint
{
    public function getRwAngkaKredit(array $paths = [], array $queries = []): Response
    {
        $urlFormat = '/pns/rw-angkakredit/{nipBaru}';
        $url = (new UrlParser($urlFormat))->parse($paths);

        return $this->get($url, $queries);
    }

    public function getRwCltn(array $paths = [], array $queries = []): Response
    {
        $urlFormat = '/pns/rw-cltn/{nipBaru}';
        $url = (new UrlParser($urlFormat))->parse($paths);

        return $this->get($url, $queries);
    }

    public function getRwDiklat(array $paths = [], array $queries = []): Response
    {
        $urlFormat = '/pns/rw-diklat/{nipBaru}';
        $url = (new UrlParser($urlFormat))->parse($paths);

        return $this->get($url, $queries);
    }

    public function getRwDp3(array $paths = [], array $queries = []): Response
    {
        $urlFormat = '/pns/rw-dp3/{nipBaru}';
        $url = (new UrlParser($urlFormat))->parse($paths);

        return $this->get($url, $queries);
    }

    public function getRwGolongan(array $paths = [], array $queries = []): Response
    {
        $urlFormat = '/pns/rw-golongan/{nipBaru}';
        $url = (new UrlParser($urlFormat))->parse($paths);

        return $this->get($url, $queries);
    }

    public function getRwHukdis(array $paths = [], array $queries = []): Response
    {
        $urlFormat = '/pns/rw-hukdis/{nipBaru}';
        $url = (new UrlParser($urlFormat))->parse($paths);

        return $this->get($url, $queries);
    }

    public function getRwJabatan(array $paths = [], array $queries = []): Response
    {
        $urlFormat = '/pns/rw-jabatan/{nipBaru}';
        $url = (new UrlParser($urlFormat))->parse($paths);

        return $this->get($url, $queries);
    }

    public function getRwKursus(array $paths = [], array $queries = []): Response
    {
        $urlFormat = '/pns/rw-kursus/{nipBaru}';
        $url = (new UrlParser($urlFormat))->parse($paths);

        return $this->get($url, $queries);
    }

    public function getRwMasaKerja(array $paths = [], array $queries = []): Response
    {
        $urlFormat = '/pns/rw-masakerja/{nipBaru}';
        $url = (new UrlParser($urlFormat))->parse($paths);

        return $this->get($url, $queries);
    }

    public function getRwPemberhentian(array $paths = [], array $queries = []): Response
    {
        $urlFormat = '/pns/rw-pemberhentian/{nipBaru}';
        $url = (new UrlParser($urlFormat))->parse($paths);

        return $this->get($url, $queries);
    }

    public function getRwPendidikan(array $paths = [], array $queries = []): Response
    {
        $urlFormat = '/pns/rw-pendidikan/{nipBaru}';
        $url = (new UrlParser($urlFormat))->parse($paths);

        return $this->get($url, $queries);
    }

    public function getRwPenghargaan(array $paths = [], array $queries = []): Response
    {
        $urlFormat = '/pns/rw-penghargaan/{nipBaru}';
        $url = (new UrlParser($urlFormat))->parse($paths);

        return $this->get($url, $queries);
    }

    public function getRwPindahInstansi(array $paths = [], array $queries = []): Response
    {
        $urlFormat = '/pns/rw-pindahinstansi/{nipBaru}';
        $url = (new UrlParser($urlFormat))->parse($paths);

        return $this->get($url, $queries);
    }

    public function getRwUnor(array $paths = [], array $queries = []): Response
    {
        $urlFormat = '/pns/rw-pnsunor/{nipBaru}';
        $url = (new UrlParser($urlFormat))->parse($paths);

        return $this->get($url, $queries);
    }

    public function getRwPwk(array $paths = [], array $queries = []): Response
    {
        $urlFormat = '/pns/rw-pwk/{nipBaru}';
        $url = (new UrlParser($urlFormat))->parse($paths);

        return $this->get($url, $queries);
    }

    public function getRwSkp(array $paths = [], array $queries = []): Response
    {
        $urlFormat = '/pns/rw-skp/{nipBaru}';
        $url = (new UrlParser($urlFormat))->parse($paths);

        return $this->get($url, $queries);
    }

    public function getRwSkp22(array $paths = [], array $queries = []): Response
    {
        $urlFormat = '/pns/rw-skp22/{nipBaru}';
        $url = (new UrlParser($urlFormat))->parse($paths);

        return $this->get($url, $queries);
    }
}
