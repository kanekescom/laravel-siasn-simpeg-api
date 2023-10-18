<?php

namespace Kanekescom\Siasn\Api\Simpeg\Traits;

use Illuminate\Http\Client\Response;
use Kanekescom\Siasn\Api\Simpeg\Helpers\UrlParser;

trait HasRiwayatEndpoint
{
    public function getRwAngkaKredit(array $paths = [], array $query = []): Response
    {
        $urlFormat = '/pns/rw-angkakredit/{nipBaru}';
        $urlParsed = (new UrlParser($urlFormat))->parse($paths);

        return $this->get($urlParsed, $query);
    }

    public function getRwCltn(array $paths = [], array $query = []): Response
    {
        $urlFormat = '/pns/rw-cltn/{nipBaru}';
        $urlParsed = (new UrlParser($urlFormat))->parse($paths);

        return $this->get($urlParsed, $query);
    }

    public function getRwDiklat(array $paths = [], array $query = []): Response
    {
        $urlFormat = '/pns/rw-diklat/{nipBaru}';
        $urlParsed = (new UrlParser($urlFormat))->parse($paths);

        return $this->get($urlParsed, $query);
    }

    public function getRwDp3(array $paths = [], array $query = []): Response
    {
        $urlFormat = '/pns/rw-dp3/{nipBaru}';
        $urlParsed = (new UrlParser($urlFormat))->parse($paths);

        return $this->get($urlParsed, $query);
    }

    public function getRwGolongan(array $paths = [], array $query = []): Response
    {
        $urlFormat = '/pns/rw-golongan/{nipBaru}';
        $urlParsed = (new UrlParser($urlFormat))->parse($paths);

        return $this->get($urlParsed, $query);
    }

    public function getRwHukdis(array $paths = [], array $query = []): Response
    {
        $urlFormat = '/pns/rw-hukdis/{nipBaru}';
        $urlParsed = (new UrlParser($urlFormat))->parse($paths);

        return $this->get($urlParsed, $query);
    }

    public function getRwJabatan(array $paths = [], array $query = []): Response
    {
        $urlFormat = '/pns/rw-jabatan/{nipBaru}';
        $urlParsed = (new UrlParser($urlFormat))->parse($paths);

        return $this->get($urlParsed, $query);
    }

    public function getRwKursus(array $paths = [], array $query = []): Response
    {
        $urlFormat = '/pns/rw-kursus/{nipBaru}';
        $urlParsed = (new UrlParser($urlFormat))->parse($paths);

        return $this->get($urlParsed, $query);
    }

    public function getRwMasaKerja(array $paths = [], array $query = []): Response
    {
        $urlFormat = '/pns/rw-masakerja/{nipBaru}';
        $urlParsed = (new UrlParser($urlFormat))->parse($paths);

        return $this->get($urlParsed, $query);
    }

    public function getRwPemberhentian(array $paths = [], array $query = []): Response
    {
        $urlFormat = '/pns/rw-pemberhentian/{nipBaru}';
        $urlParsed = (new UrlParser($urlFormat))->parse($paths);

        return $this->get($urlParsed, $query);
    }

    public function getRwPendidikan(array $paths = [], array $query = []): Response
    {
        $urlFormat = '/pns/rw-pendidikan/{nipBaru}';
        $urlParsed = (new UrlParser($urlFormat))->parse($paths);

        return $this->get($urlParsed, $query);
    }

    public function getRwPenghargaan(array $paths = [], array $query = []): Response
    {
        $urlFormat = '/pns/rw-penghargaan/{nipBaru}';
        $urlParsed = (new UrlParser($urlFormat))->parse($paths);

        return $this->get($urlParsed, $query);
    }

    public function getRwPindahInstansi(array $paths = [], array $query = []): Response
    {
        $urlFormat = '/pns/rw-pindahinstansi/{nipBaru}';
        $urlParsed = (new UrlParser($urlFormat))->parse($paths);

        return $this->get($urlParsed, $query);
    }

    public function getRwUnor(array $paths = [], array $query = []): Response
    {
        $urlFormat = '/pns/rw-pnsunor/{nipBaru}';
        $urlParsed = (new UrlParser($urlFormat))->parse($paths);

        return $this->get($urlParsed, $query);
    }

    public function getRwPwk(array $paths = [], array $query = []): Response
    {
        $urlFormat = '/pns/rw-pwk/{nipBaru}';
        $urlParsed = (new UrlParser($urlFormat))->parse($paths);

        return $this->get($urlParsed, $query);
    }

    public function getRwSkp(array $paths = [], array $query = []): Response
    {
        $urlFormat = '/pns/rw-skp/{nipBaru}';
        $urlParsed = (new UrlParser($urlFormat))->parse($paths);

        return $this->get($urlParsed, $query);
    }

    public function getRwSkp22(array $paths = [], array $query = []): Response
    {
        $urlFormat = '/pns/rw-skp22/{nipBaru}';
        $urlParsed = (new UrlParser($urlFormat))->parse($paths);

        return $this->get($urlParsed, $query);
    }
}
