<?php

namespace Kanekescom\Siasn\Simpeg\Api\Traits;

use Illuminate\Http\Client\Response;
use Kanekescom\Siasn\Simpeg\Api\Helpers\UrlParser;

trait HasRiwayatEndpoint
{
    public function getPnsRwAngkakredit(array $paths = [], array $query = []): Response
    {
        $urlFormat = '/pns/rw-angkakredit/{nipBaru}';
        $urlParsed = (new UrlParser($urlFormat))->parse($paths);

        return $this->get($urlParsed, $query);
    }

    public function getPnsRwCltn(array $paths = [], array $query = []): Response
    {
        $urlFormat = '/pns/rw-cltn/{nipBaru}';
        $urlParsed = (new UrlParser($urlFormat))->parse($paths);

        return $this->get($urlParsed, $query);
    }

    public function getPnsRwDiklat(array $paths = [], array $query = []): Response
    {
        $urlFormat = '/pns/rw-diklat/{nipBaru}';
        $urlParsed = (new UrlParser($urlFormat))->parse($paths);

        return $this->get($urlParsed, $query);
    }

    public function getPnsRwDp3(array $paths = [], array $query = []): Response
    {
        $urlFormat = '/pns/rw-dp3/{nipBaru}';
        $urlParsed = (new UrlParser($urlFormat))->parse($paths);

        return $this->get($urlParsed, $query);
    }

    public function getPnsRwGolongan(array $paths = [], array $query = []): Response
    {
        $urlFormat = '/pns/rw-golongan/{nipBaru}';
        $urlParsed = (new UrlParser($urlFormat))->parse($paths);

        return $this->get($urlParsed, $query);
    }

    public function getPnsRwHukdis(array $paths = [], array $query = []): Response
    {
        $urlFormat = '/pns/rw-hukdis/{nipBaru}';
        $urlParsed = (new UrlParser($urlFormat))->parse($paths);

        return $this->get($urlParsed, $query);
    }

    public function getPnsRwJabatan(array $paths = [], array $query = []): Response
    {
        $urlFormat = '/pns/rw-jabatan/{nipBaru}';
        $urlParsed = (new UrlParser($urlFormat))->parse($paths);

        return $this->get($urlParsed, $query);
    }

    public function getPnsRwKinerjaperiodik(array $paths = [], array $query = []): Response
    {
        $urlFormat = '/pns/rw-kinerjaperiodik/{nipBaru}';
        $urlParsed = (new UrlParser($urlFormat))->parse($paths);

        return $this->get($urlParsed, $query);
    }

    public function getPnsRwKursus(array $paths = [], array $query = []): Response
    {
        $urlFormat = '/pns/rw-kursus/{nipBaru}';
        $urlParsed = (new UrlParser($urlFormat))->parse($paths);

        return $this->get($urlParsed, $query);
    }

    public function getPnsRwMasakerja(array $paths = [], array $query = []): Response
    {
        $urlFormat = '/pns/rw-masakerja/{nipBaru}';
        $urlParsed = (new UrlParser($urlFormat))->parse($paths);

        return $this->get($urlParsed, $query);
    }

    public function getPnsRwPemberhentian(array $paths = [], array $query = []): Response
    {
        $urlFormat = '/pns/rw-pemberhentian/{nipBaru}';
        $urlParsed = (new UrlParser($urlFormat))->parse($paths);

        return $this->get($urlParsed, $query);
    }

    public function getPnsRwPendidikan(array $paths = [], array $query = []): Response
    {
        $urlFormat = '/pns/rw-pendidikan/{nipBaru}';
        $urlParsed = (new UrlParser($urlFormat))->parse($paths);

        return $this->get($urlParsed, $query);
    }

    public function getPnsRwPenghargaan(array $paths = [], array $query = []): Response
    {
        $urlFormat = '/pns/rw-penghargaan/{nipBaru}';
        $urlParsed = (new UrlParser($urlFormat))->parse($paths);

        return $this->get($urlParsed, $query);
    }

    public function getPnsRwPindahinstansi(array $paths = [], array $query = []): Response
    {
        $urlFormat = '/pns/rw-pindahinstansi/{nipBaru}';
        $urlParsed = (new UrlParser($urlFormat))->parse($paths);

        return $this->get($urlParsed, $query);
    }

    public function getPnsRwPnsunor(array $paths = [], array $query = []): Response
    {
        $urlFormat = '/pns/rw-pnsunor/{nipBaru}';
        $urlParsed = (new UrlParser($urlFormat))->parse($paths);

        return $this->get($urlParsed, $query);
    }

    public function getPnsRwPwk(array $paths = [], array $query = []): Response
    {
        $urlFormat = '/pns/rw-pwk/{nipBaru}';
        $urlParsed = (new UrlParser($urlFormat))->parse($paths);

        return $this->get($urlParsed, $query);
    }

    public function getPnsRwSkp(array $paths = [], array $query = []): Response
    {
        $urlFormat = '/pns/rw-skp/{nipBaru}';
        $urlParsed = (new UrlParser($urlFormat))->parse($paths);

        return $this->get($urlParsed, $query);
    }

    public function getPnsRwSkp22(array $paths = [], array $query = []): Response
    {
        $urlFormat = '/pns/rw-skp22/{nipBaru}';
        $urlParsed = (new UrlParser($urlFormat))->parse($paths);

        return $this->get($urlParsed, $query);
    }
}
