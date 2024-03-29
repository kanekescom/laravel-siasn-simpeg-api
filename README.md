# Laravel SIASN SIMPEG API

[![Latest Version on Packagist](https://img.shields.io/packagist/v/kanekescom/laravel-siasn-simpeg-api.svg?style=flat-square)](https://packagist.org/packages/kanekescom/laravel-siasn-simpeg-api)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/kanekescom/laravel-siasn-simpeg-api/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/kanekescom/laravel-siasn-simpeg-api/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/kanekescom/laravel-siasn-simpeg-api/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/kanekescom/laravel-siasn-simpeg-api/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/kanekescom/laravel-siasn-simpeg-api.svg?style=flat-square)](https://packagist.org/packages/kanekescom/laravel-siasn-simpeg-api)

This library is the abstraction of SIASN SIMPEG API for access from applications written with Laravel PHP Framework.

## Support us

Want to provide tangible support? Use the following platform to contribute to open-source software developers. Every contribution you make is a significant boost to continue building and enhancing technology that benefits everyone.

- Buy Me a Coffee https://s.id/hadibmac
- Patreon https://s.id/hadipatreon
- Saweria https://s.id/hadisaweria

We highly appreciate you sending us a few cups of coffee to accompany us while writing code. Super thanks.

## Use pro version

We also offer a professional version. We're excited for you to try it out, as it allows us to consistently deliver high-quality software. Don't hesitate to contact us at kanekescom@gmail.com for further information.

- Laravel SIASN Referensi Panel
- Laravel SIASN SIMPEG Panel
- SIMPEGDA App

## Installation

You can install the package via composer:

```bash
composer require kanekescom/laravel-siasn-simpeg-api
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="siasn-simpeg-api-config"
```

Or, all installations can be completed with the install command:

```bash
php artisan siasn-simpeg-api:install
```

## Usage

### Using the console

<details>
<summary>AngkaKredit</summary>

Send DELETE request to /angkakredit/delete/{idRiwayatAngkaKredit} endpoint
```bash
php artisan siasn-simpeg:delete-angkakredit-delete {idRiwayatAngkaKredit}
```

Send GET request to /angkakredit/id/{idRiwayatAngkaKredit} endpoint
```bash
php artisan siasn-simpeg:get-angkakredit-id {idRiwayatAngkaKredit}
```

Send POST request to /angkakredit/save endpoint
```bash
php artisan siasn-simpeg:post-angkakredit-save
```
</details>

<details>
<summary>CPNS</summary>

Send POST request to /cpns/save endpoint
```bash
php artisan siasn-simpeg:post-cpns-save
```
</details>

<details>
<summary>Diklat</summary>

Send GET request to /diklat/id/{idRiwayatDiklat} endpoint
```bash
php artisan siasn-simpeg:get-diklat-id {idRiwayatDiklat}
```

Send POST request to /diklat/save endpoint
```bash
php artisan siasn-simpeg:post-diklat-save
```
</details>

<details>
<summary>Upload</summary>

Send GET request to /download-dok endpoint
```bash
php artisan siasn-simpeg:get-download-dok
```

Send GET request to /download-dok endpoint and save into local disk
```bash
php artisan siasn-simpeg:download-download-dok
```

Send POST request to /upload-dok endpoint
```bash
php artisan siasn-simpeg:post-upload-dok
```

Send POST request to /upload-dok-rw endpoint
```bash
php artisan siasn-simpeg:post-upload-dok-rw
```
</details>

<details>
<summary>Hukdis</summary>

Send GET request to /hukdis/id/{idRiwayatHukdis} endpoint
```bash
php artisan siasn-simpeg:get-hukdis-id {idRiwayatHukdis}
```

Send POST request to /hukdis/save endpoint
```bash
php artisan siasn-simpeg:post-hukdis-save
```
</details>

<details>
<summary>Jabatan</summary>

Send GET request to /jabatan/id/{idRiwayatJabatan} endpoint
```bash
php artisan siasn-simpeg:get-jabatan-id {idRiwayatJabatan}
```

Send GET request to /jabatan/pns/{nipBaru} endpoint
```bash
php artisan siasn-simpeg:get-jabatan-pns {nipBaru}
```

Send POST request to /jabatan/unorjabatan/save endpoint
```bash
php artisan siasn-simpeg:post-jabatan-unorjabatan-save
```

Send POST request to /jabatan/save endpoint
```bash
php artisan siasn-simpeg:post-jabatan-save
```
</details>

<details>
<summary>Kinerja</summary>

Send DELETE request to /kinerjaperiodik/delete/{idRiwayatKinerjaPeriodik} endpoint
```bash
php artisan siasn-simpeg:delete-kinerjaperiodik-delete {idRiwayatKinerjaPeriodik}
```

Send POST request to /kinerjaperiodik/save endpoint
```bash
php artisan siasn-simpeg:post-kinerjaperiodik-save
```
</details>

<details>
<summary>Kursus</summary>

Send DELETE request to /kursus/delete/{idRiwayatKursus} endpoint
```bash
php artisan siasn-simpeg:delete-kursus-delete {idRiwayatKursus}
```

Send GET request to /kursus/id/{idRiwayatKursus} endpoint
```bash
php artisan siasn-simpeg:get-kursus-id {idRiwayatKursus}
```

Send POST request to /kursus/save endpoint
```bash
php artisan siasn-simpeg:post-kursus-save
```
</details>

<details>
<summary>Pengadaan</summary>

Send GET request to /pengadaan/list-pengadaan-instansi endpoint
```bash
php artisan siasn-simpeg:get-pengadaan-list-pengadaan-instansi {Tahun}
```
</details>

<details>
<summary>Penghargaan</summary>

Send GET request to /penghargaan/id/{idRiwayatPenghargaan} endpoint
```bash
php artisan siasn-simpeg:get-penghargaan-id {idRiwayatPenghargaan}
```

Send DELETE request to /penghargaan/delete/{idRiwayatPenghargaan} endpoint
```bash
php artisan siasn-simpeg:delete-penghargaan-delete {idRiwayatPenghargaan}
```

Send POST request to /penghargaan/save endpoint
```bash
php artisan siasn-simpeg:post-penghargaan-save
```
</details>

<details>
<summary>PNS</summary>

Send GET request to /pns/data-anak/{nipBaru} endpoint
```bash
php artisan siasn-simpeg:get-pns-data-anak {nipBaru}
```

Send GET request to /pns/data-ortu/{nipBaru} endpoint
```bash
php artisan siasn-simpeg:get-pns-data-ortu {nipBaru}
```

Send GET request to /pns/data-pasangan/{nipBaru} endpoint
```bash
php artisan siasn-simpeg:get-pns-data-pasangan {nipBaru}
```

Send POST request to /pns/data-utama-update endpoint
```bash
php artisan siasn-simpeg:post-pns-data-utama-update
```

Send GET request to /pns/data-utama/{nipBaru} endpoint
```bash
php artisan siasn-simpeg:get-pns-data-utama {nipBaru}
```

Send GET request to /pns/photo/{idPns} endpoint
```bash
php artisan siasn-simpeg:get-pns-photo {idPns}
```

Send GET request to /pns/photo/{idPns} endpoint and save into local disk
```bash
php artisan siasn-simpeg:download-pns-photo {idPns}
```
</details>

<details>
<summary>Kp</summary>

Send GET request to /pns/list-kp-instansi endpoint
```bash
php artisan siasn-simpeg:get-pns-list-kp-instansi s{periode}
```

Send POST request to /upload-dok-sk-kp endpoint
```bash
php artisan siasn-simpeg:post-upload-dok-sk-kp
```
</details>

<details>
<summary>Pemberhentian</summary>

Send GET request to /pns/list-pensiun-instansi endpoint
```bash
php artisan siasn-simpeg:get-pns-list-pensiun-instansi {tglAwal} {tglAkhir}
```
</details>

<details>
<summary>Riwayat</summary>

Send GET request to /pns/rw-angkakredit/{nipBaru} endpoint
```bash
php artisan siasn-simpeg:get-pns-rw-angkakredit {nipBaru}
```

Send GET request to /pns/rw-cltn/{nipBaru} endpoint
```bash
php artisan siasn-simpeg:get-pns-rw-cltn {nipBaru}
```

Send GET request to /pns/rw-diklat/{nipBaru} endpoint
```bash
php artisan siasn-simpeg:get-pns-rw-diklat {nipBaru}
```

Send GET request to /pns/rw-dp3/{nipBaru} endpoint
```bash
php artisan siasn-simpeg:get-pns-rw-dp3 {nipBaru}
```

Send GET request to /pns/rw-golongan/{nipBaru} endpoint
```bash
php artisan siasn-simpeg:get-pns-rw-golongan {nipBaru}
```

Send GET request to /pns/rw-hukdis/{nipBaru} endpoint
```bash
php artisan siasn-simpeg:get-pns-rw-hukdis {nipBaru}
```

Send GET request to /pns/rw-jabatan/{nipBaru} endpoint
```bash
php artisan siasn-simpeg:get-pns-rw-jabatan {nipBaru}
```

Send GET request to /pns/rw-kinerjaperiodik/{nipBaru} endpoint
```bash
php artisan siasn-simpeg:get-pns-rw-kinerjaperiodik {nipBaru}
```

Send GET request to /pns/rw-kursus/{nipBaru} endpoint
```bash
php artisan siasn-simpeg:get-pns-rw-kursus {nipBaru}
```

Send GET request to /pns/rw-masakerja/{nipBaru} endpoint
```bash
php artisan siasn-simpeg:get-pns-rw-masakerja {nipBaru}
```

Send GET request to /pns/rw-pemberhentian/{nipBaru} endpoint
```bash
php artisan siasn-simpeg:get-pns-rw-pemberhentian {nipBaru}
```

Send GET request to /pns/rw-pendidikan/{nipBaru} endpoint
```bash
php artisan siasn-simpeg:get-pns-rw-pendidikan {nipBaru}
```

Send GET request to /pns/rw-penghargaan/{nipBaru} endpoint
```bash
php artisan siasn-simpeg:get-pns-rw-penghargaan {nipBaru}
```

Send GET request to /pns/rw-pindahinstansi/{nipBaru} endpoint
```bash
php artisan siasn-simpeg:get-pns-rw-pindahinstansi {nipBaru}
```

Send GET request to /pns/rw-pnsunor/{nipBaru} endpoint
```bash
php artisan siasn-simpeg:get-pns-rw-pnsunor {nipBaru}
```

Send GET request to /pns/rw-pwk/{nipBaru} endpoint
```bash
php artisan siasn-simpeg:get-pns-rw-pwk {nipBaru}
```

Send GET request to /pns/rw-skp22/{nipBaru} endpoint
```bash
php artisan siasn-simpeg:get-pns-rw-skp22 {nipBaru}
```

Send GET request to /pns/rw-skp/{nipBaru} endpoint
```bash
php artisan siasn-simpeg:get-pns-rw-skp {nipBaru}
```
</details>

<details>
<summary>Referensi</summary>

Send GET request to /referensi/ref-unor endpoint
```bash
php artisan siasn-simpeg:get-referensi-ref-unor
```
</details>

<details>
<summary>Skp</summary>

Send POST request to /skp/2021/save endpoint
```bash
php artisan siasn-simpeg:post-skp2021-save
```

Send GET request to /skp/id/{idRiwayatSkp} endpoint
```bash
php artisan siasn-simpeg:get-skp-id {idRiwayatSkp}
```

Send POST request to /skp/save endpoint
```bash
php artisan siasn-simpeg:post-skp-save
```
</details>

<details>
<summary>Skp 2022</summary>

Send GET request to /skp22/id/{idRiwayatSkp} endpoint
```bash
php artisan siasn-simpeg:get-skp22-id
```

Send POST request to /skp22/save endpoint
```bash
php artisan siasn-simpeg:post-skp22-save
```
</details>

### Using the Client class

<details>
<summary>AngkaKredit</summary>

Delete Angka Kredit from SIASN

```php
use Kanekescom\Siasn\Simpeg\Api\Http\Client\AngkaKredit;

$pathParams = [
    'idRiwayatAngkaKredit' => 'string',
];

AngkaKredit::delete($pathParams);
```

Get Angka Kredit from SIASN

```php
use Kanekescom\Siasn\Simpeg\Api\Http\Client\AngkaKredit;

$pathParams = [
    'idRiwayatAngkaKredit' => 'string',
];

AngkaKredit::get($pathParams);
```

Add Angka Kredit to SIASN

```php
use Kanekescom\Siasn\Simpeg\Api\Http\Client\AngkaKredit;

$queryParams = [
  'bulanMulaiPenailan' => 'string',
  'bulanSelesaiPenailan' => 'string',
  'id' => 'string',
  'isAngkaKreditPertama' => 'string',
  'isIntegrasi' => 'string',
  'isKonversi' => 'string',
  'kreditBaruTotal' => 'string',
  'kreditPenunjangBaru' => 'string',
  'kreditUtamaBaru' => 'string',
  'nomorSk' => 'string',
  'path' => [
    [
      'dok_id' => 'string',
      'dok_nama' => 'string',
      'dok_uri' => 'string',
      'object' => 'string',
      'slug' => 'string',
    ],
  ],
  'pnsId' => 'string',
  'rwJabatanId' => 'string',
  'tahunMulaiPenailan' => 'string',
  'tahunSelesaiPenailan' => 'string',
  'tanggalSk' => 'string',
];

AngkaKredit::postSave([], $queryParams);
```
</details>

<details>
<summary>CPNS</summary>

Add CPNS to SIASN

```php
use Kanekescom\Siasn\Simpeg\Api\Http\Client\Cpns;

$queryParams = [
  'id' => 'string',
  'kartu_pegawai' => 'string',
  'nama_jabatan_angkat_cpns' => 'string',
  'nomor_dokter_pns' => 'string',
  'nomor_sk_cpns' => 'string',
  'nomor_sk_pns' => 'string',
  'nomor_spmt' => 'string',
  'nomor_sttpl' => 'string',
  'path' => [
    [
      'dok_id' => 'string',
      'dok_nama' => 'string',
      'dok_uri' => 'string',
      'object' => 'string',
      'slug' => 'string',
    ],
  ],
  'pertek_cpns_pns_l2th_nomor' => 'string',
  'pertek_cpns_pns_l2th_tanggal' => 'string',
  'pns_orang_id' => 'string',
  'status_cpns_pns' => 'string',
  'tanggal_dokter_pns' => 'string',
  'tgl_sk_cpns' => 'string',
  'tgl_sk_pns' => 'string',
  'tgl_sttpl' => 'string',
  'tmt_pns' => 'string',
];

Cpns::postSave([], $queryParams);
```
</details>

<details>
<summary>Diklat</summary>

Get Diklat from SIASN

```php
use Kanekescom\Siasn\Simpeg\Api\Http\Client\Diklat;

$pathParams = [
    'idRiwayatDiklat' => 'string',
];

Diklat::get($pathParams);
```

Add Diklat to SIASN

```php
use Kanekescom\Siasn\Simpeg\Api\Http\Client\Diklat;

$queryParams = [
  'bobot' => 0,
  'id' => 'string',
  'institusiPenyelenggara' => 'string',
  'jenisKompetensi' => 'string',
  'jumlahJam' => 0,
  'latihanStrukturalId' => 'string',
  'nomor' => 'string',
  'path' => [
    [
      'dok_id' => 'string',
      'dok_nama' => 'string',
      'dok_uri' => 'string',
      'object' => 'string',
      'slug' => 'string',
    ],
  ],
  'pnsOrangId' => 'string',
  'tahun' => 0,
  'tanggal' => 'string',
  'tanggalSelesai' => 'string',
];

Diklat::postSave([], $queryParams);
```
</details>

<details>
<summary>Upload</summary>

Get file from SIASN

```php
use Kanekescom\Siasn\Simpeg\Api\Http\Client\Upload;

$queryParams = [
    'filePath' => 'string',
];

Upload::getDok([], $queryParams);
```

Download file from SIASN

```php
use Kanekescom\Siasn\Simpeg\Api\Http\Client\Upload;

$queryParams = [
    'filePath' => 'string',
];
$filename = 'string';

Upload::downloadDok([], $queryParams, $disk = 'local', $filename);
```

Upload Dok file to SIASN

```php
use Kanekescom\Siasn\Simpeg\Api\Http\Client\Upload;

$queryParams = [
  'file' => 'string',
  'id_ref_dokumen' => 'string',
];

Upload::uploadDok([], $queryParams);
```

Upload Dok Riwayat file to SIASN

```php
use Kanekescom\Siasn\Simpeg\Api\Http\Client\Upload;

$queryParams = [
  'file' => 'string',
  'id_riwayat' => 'string',
  'id_ref_dokumen' => 'string',
];

Upload::uploadDokRw([], $queryParams);
```
</details>

<details>
<summary>Hukdis</summary>

Get Hukdis from SIASN

```php
use Kanekescom\Siasn\Simpeg\Api\Http\Client\Hukdis;

$pathParams = [
    'idRiwayatHukdis' => 'string',
];

Hukdis::get($pathParams);
```

Add Hukdis to SIASN

```php
use Kanekescom\Siasn\Simpeg\Api\Http\Client\Hukdis;

$queryParams = [
  'akhirHukumanTanggal' => 'string',
  'alasanHukumanDisiplinId' => 'string',
  'golonganId' => 'string',
  'golonganLama' => 'string',
  'hukdisYangDiberhentikanId' => 'string',
  'hukumanTanggal' => 'string',
  'id' => 'string',
  'jenisHukumanId' => 'string',
  'jenisTingkatHukumanId' => 'string',
  'kedudukanHukumId' => 'string',
  'keterangan' => 'string',
  'masaBulan' => 'string',
  'masaTahun' => 'string',
  'nomorPp' => 'string',
  'path' => [
    [
      'dok_id' => 'string',
      'dok_nama' => 'string',
      'dok_uri' => 'string',
      'object' => 'string',
      'slug' => 'string',
    ],
  ],
  'pnsOrangId' => 'string',
  'skNomor' => 'string',
  'skPembatalanNomor' => 'string',
  'skPembatalanTanggal' => 'string',
  'skTanggal' => 'string',
];

Hukdis::postSave([], $queryParams);
```
</details>

<details>
<summary>Jabatan</summary>

Get Jabatan by ID from SIASN

```php
use Kanekescom\Siasn\Simpeg\Api\Http\Client\Jabatan;

$pathParams = [
    'idRiwayatJabatan' => 'string',
];

Jabatan::get($pathParams);
```

Get Jabatan by nipBaru from SIASN

```php
use Kanekescom\Siasn\Simpeg\Api\Http\Client\Jabatan;

$pathParams = [
    'nipBaru' => 'string',
];

Jabatan::getNipBaru($pathParams);
```

Add Jabatan Unor to SIASN

```php
use Kanekescom\Siasn\Simpeg\Api\Http\Client\Jabatan;

$queryParams = [
  'eselonId' => 'string',
  'id' => 'string',
  'instansiId' => 'string',
  'jabatanFungsionalId' => 'string',
  'jabatanFungsionalUmumId' => 'string',
  'jenisJabatan' => 'string',
  'jenisMutasiId' => 'string',
  'jenisPenugasanId' => 'string',
  'nomorSk' => 'string',
  'path' => [
    [
      'dok_id' => 'string',
      'dok_nama' => 'string',
      'dok_uri' => 'string',
      'object' => 'string',
      'slug' => 'string',
    ],
  ],
  'pnsId' => 'string',
  'satuanKerjaId' => 'string',
  'subJabatanId' => 'string',
  'tanggalSk' => 'string',
  'tmtJabatan' => 'string',
  'tmtMutasi' => 'string',
  'tmtPelantikan' => 'string',
  'unorId' => 'string',
];

Jabatan::saveUnor([], $queryParams);
```

Add Jabatan to SIASN

```php
use Kanekescom\Siasn\Simpeg\Api\Http\Client\Jabatan;

$queryParams = [
  'eselonId' => 'string',
  'id' => 'string',
  'instansiId' => 'string',
  'jabatanFungsionalId' => 'string',
  'jabatanFungsionalUmumId' => 'string',
  'jenisJabatan' => 'string',
  'nomorSk' => 'string',
  'path' => [
    [
      'dok_id' => 'string',
      'dok_nama' => 'string',
      'dok_uri' => 'string',
      'object' => 'string',
      'slug' => 'string',
    ],
  ],
  'pnsId' => 'string',
  'satuanKerjaId' => 'string',
  'tanggalSk' => 'string',
  'tmtJabatan' => 'string',
  'tmtPelantikan' => 'string',
  'unorId' => 'string',
];

Jabatan::postSave([], $queryParams);
```
</details>

<details>
<summary>Kinerja</summary>

Get Kinerja from SIASN

```php
use Kanekescom\Siasn\Simpeg\Api\Http\Client\Kinerja;

$pathParams = [
    'idRiwayatKinerjaPeriodik' => 'string',
];

Kinerja::get($pathParams);
```

Add Kinerja to SIASN

```php
use Kanekescom\Siasn\Simpeg\Api\Http\Client\Kinerja;

$queryParams = [
  'bulanMulaiPenilaian' => 0,
  'bulanSelesaiPenilaian' => 0,
  'hasilKinerjaNilai' => 0,
  'id' => 'string',
  'koefisienId' => 'string',
  'kuadranKinerjaNilai' => 0,
  'path' => [
    [
      'dok_id' => 'string',
      'dok_nama' => 'string',
      'dok_uri' => 'string',
      'object' => 'string',
      'slug' => 'string',
    ],
  ],
  'penilaiGolongan' => 'string',
  'penilaiJabatanNama' => 'string',
  'penilaiNama' => 'string',
  'penilaiNipNrp' => 'string',
  'penilaiUnorNama' => 'string',
  'perilakuKerjaNilai' => 0,
  'periodikId' => 'string',
  'pnsDinilaiId' => 'string',
  'statusPenilai' => 'string',
  'tahun' => 0,
  'tahunMulaiPenilaian' => 0,
  'tahunSelesaiPenilaian' => 0,
];

Kinerja::postSave([], $queryParams);
```
</details>

<details>
<summary>Kursus</summary>

Delete Kursus from SIASN

```php
use Kanekescom\Siasn\Simpeg\Api\Http\Client\Kursus;

$pathParams = [
    'idRiwayatKursus' => 'string',
];

Kursus::delete($pathParams);
```

Get Kursus from SIASN

```php
use Kanekescom\Siasn\Simpeg\Api\Http\Client\Kursus;

$pathParams = [
    'idRiwayatKursus' => 'string',
];

Kursus::get($pathParams);
```

Add Kursus to SIASN

```php
use Kanekescom\Siasn\Simpeg\Api\Http\Client\Kursus;

$queryParams = [
  'id' => 'string',
  'instansiId' => 'string',
  'institusiPenyelenggara' => 'string',
  'jenisDiklatId' => 'string',
  'jenisKursus' => 'string',
  'jenisKursusSertipikat' => 'string',
  'jumlahJam' => 0,
  'lokasiId' => 'string',
  'namaKursus' => 'string',
  'nomorSertipikat' => 'string',
  'path' => [
    [
      'dok_id' => 'string',
      'dok_nama' => 'string',
      'dok_uri' => 'string',
      'object' => 'string',
      'slug' => 'string',
    ],
  ],
  'pnsOrangId' => 'string',
  'tahunKursus' => 0,
  'tanggalKursus' => 'string',
  'tanggalSelesaiKursus' => 'string',
];

Kursus::postSave([], $queryParams);
```
</details>

<details>
<summary>Pengadaan</summary>

Get Pengadaan from SIASN

```php
use Kanekescom\Siasn\Simpeg\Api\Http\Client\Pengadaan;

$queryParams = [
    'tahun' => 'string',
];

Pengadaan::getList([], $queryParams);
```
</details>

<details>
<summary>Penghargaan</summary>

Delete Penghargaan from SIASN

```php
use Kanekescom\Siasn\Simpeg\Api\Http\Client\Penghargaan;

$pathParams = [
    'idRiwayatPenghargaan' => 'string',
];

Penghargaan::delete($pathParams);
```

Get Penghargaan from SIASN

```php
use Kanekescom\Siasn\Simpeg\Api\Http\Client\Penghargaan;

$pathParams = [
    'idRiwayatPenghargaan' => 'string',
];

Penghargaan::get($pathParams);
```

Add Penghargaan to SIASN

```php
use Kanekescom\Siasn\Simpeg\Api\Http\Client\Penghargaan;

$queryParams = [
  'hargaId' => 'string',
  'id' => 'string',
  'path' => [
    [
      'dok_id' => 'string',
      'dok_nama' => 'string',
      'dok_uri' => 'string',
      'object' => 'string',
      'slug' => 'string',
    ],
  ],
  'pnsOrangId' => 'string',
  'skDate' => 'string',
  'skNomor' => 'string',
  'tahun' => 0,
];

Penghargaan::postSave([], $queryParams);
```
</details>

<details>
<summary>PNS</summary>

Get PNS Data Anak from SIASN

```php
use Kanekescom\Siasn\Simpeg\Api\Http\Client\Pns;

$pathParams = [
    'nipBaru' => 'string',
];

Pns::getDataAnak($pathParams);
```

Get PNS Data Orang Tua from SIASN

```php
use Kanekescom\Siasn\Simpeg\Api\Http\Client\Pns;

$pathParams = [
    'nipBaru' => 'string',
];

Pns::getDataOrtu($pathParams);
```

Get PNS Data Pasangan from SIASN

```php
use Kanekescom\Siasn\Simpeg\Api\Http\Client\Pns;

$pathParams = [
    'nipBaru' => 'string',
];

Pns::getDataPasangan($pathParams);
```

Update Data Utama PNS to SIASN

```php
use Kanekescom\Siasn\Simpeg\Api\Http\Client\Pns;

$queryParams = [
  'agama_id' => 'string',
  'alamat' => 'string',
  'email' => 'string',
  'email_gov' => 'string',
  'kabupaten_id' => 'string',
  'karis_karsu' => 'string',
  'kelas_jabatan' => 'string',
  'kpkn_id' => 'string',
  'lokasi_kerja_id' => 'string',
  'nomor_bpjs' => 'string',
  'nomor_hp' => 'string',
  'nomor_telpon' => 'string',
  'npwp_nomor' => 'string',
  'npwp_tanggal' => 'string',
  'pns_orang_id' => 'string',
  'tanggal_taspen' => 'string',
  'tapera_nomor' => 'string',
  'taspen_nomor' => 'string',
];

Pns::updateDataUtama([], $queryParams);
```

Get PNS Data Utama from SIASN

```php
use Kanekescom\Siasn\Simpeg\Api\Http\Client\Pns;

$pathParams = [
    'nipBaru' => 'string',
];

Pns::getDataUtama($pathParams);
```

Get Photo from SIASN

```php
use Kanekescom\Siasn\Simpeg\Api\Http\Client\Pns;

$pathParams = [
    'idPns' => 'string',
];

Pns::getPhoto($pathParams);
```

Download Photo from SIASN

```php
use Kanekescom\Siasn\Simpeg\Api\Http\Client\Pns;

$pathParams = [
    'idPns' => 'string',
];
$filename = 'string';

Pns::downloadPhoto($pathParams, [], $disk = 'local', $filename);
```
</details>

<details>
<summary>Kp</summary>

Get Kenaikan Pangkat from SIASN

```php
use Kanekescom\Siasn\Simpeg\Api\Http\Client\Kp;

$pathParams = [
    'periode' => 'string',
];

Kp::getList($pathParams);
```

Upload Dok SK file to SIASN

```php
use Kanekescom\Siasn\Simpeg\Api\Http\Client\Kp;

$queryParams = [
  'id_usulan' => 'string',
  'no_sk' => 'string',
  'tgl_sk' => 'string',
  'file' => 'string',
];

Kp::uploadDokSk([], $queryParams);
```
</details>

<details>
<summary>Pemberhentian</summary>

Get Pemberhentian from SIASN

```php
use Kanekescom\Siasn\Simpeg\Api\Http\Client\Pemberhentian;

$pathParams = [
    'tglAwal' => 'string',
    'tglAkhir' => 'string',
];

Pemberhentian::getPensiunList($pathParams);
```
</details>

<details>
<summary>Riwayat</summary>

Get Riwayat Angkakredit from SIASN

```php
use Kanekescom\Siasn\Simpeg\Api\Http\Client\Riwayat;

$pathParams = [
    'nipBaru' => 'string',
];

Riwayat::getAngkakredit($pathParams);
```

Get Riwayat CLTN from SIASN

```php
use Kanekescom\Siasn\Simpeg\Api\Http\Client\Riwayat;

$pathParams = [
    'nipBaru' => 'string',
];

Riwayat::getCltn($pathParams);
```

Get Riwayat Diklat from SIASN

```php
use Kanekescom\Siasn\Simpeg\Api\Http\Client\Riwayat;

$pathParams = [
    'nipBaru' => 'string',
];

Riwayat::getDiklat($pathParams);
```

Get Riwayat DP3 from SIASN

```php
use Kanekescom\Siasn\Simpeg\Api\Http\Client\Riwayat;

$pathParams = [
    'nipBaru' => 'string',
];

Riwayat::getDp3($pathParams);
```

Get Riwayat Golongan from SIASN

```php
use Kanekescom\Siasn\Simpeg\Api\Http\Client\Riwayat;

$pathParams = [
    'nipBaru' => 'string',
];

Riwayat::getGolongan($pathParams);
```

Get Riwayat Hukdis from SIASN

```php
use Kanekescom\Siasn\Simpeg\Api\Http\Client\Riwayat;

$pathParams = [
    'nipBaru' => 'string',
];

Riwayat::getHukdis($pathParams);
```

Get Riwayat Jabatan from SIASN

```php
use Kanekescom\Siasn\Simpeg\Api\Http\Client\Riwayat;

$pathParams = [
    'nipBaru' => 'string',
];

Riwayat::getJabatan($pathParams);
```

Get Riwayat Kinerja Periodik from SIASN

```php
use Kanekescom\Siasn\Simpeg\Api\Http\Client\Riwayat;

$pathParams = [
    'nipBaru' => 'string',
];

Riwayat::getKinerjaperiodik($pathParams);
```

Get Riwayat Kursus from SIASN

```php
use Kanekescom\Siasn\Simpeg\Api\Http\Client\Riwayat;

$pathParams = [
    'nipBaru' => 'string',
];

Riwayat::getKursus($pathParams);
```

Get Riwayat Masa Kerja from SIASN

```php
use Kanekescom\Siasn\Simpeg\Api\Http\Client\Riwayat;

$pathParams = [
    'nipBaru' => 'string',
];

Riwayat::getMasakerja($pathParams);
```

Get Riwayat Pemberhentian from SIASN

```php
use Kanekescom\Siasn\Simpeg\Api\Http\Client\Riwayat;

$pathParams = [
    'nipBaru' => 'string',
];

Riwayat::getPemberhentian($pathParams);
```

Get Riwayat Pendidikan from SIASN

```php
use Kanekescom\Siasn\Simpeg\Api\Http\Client\Riwayat;

$pathParams = [
    'nipBaru' => 'string',
];

Riwayat::getPendidikan($pathParams);
```

Get Riwayat Penghargaan from SIASN

```php
use Kanekescom\Siasn\Simpeg\Api\Http\Client\Riwayat;

$pathParams = [
    'nipBaru' => 'string',
];

Riwayat::getPenghargaan($pathParams);
```

Get Riwayat Pindah Instansi from SIASN

```php
use Kanekescom\Siasn\Simpeg\Api\Http\Client\Riwayat;

$pathParams = [
    'nipBaru' => 'string',
];

Riwayat::getPindahinstansi($pathParams);
```

Get Riwayat PNS Unor from SIASN

```php
use Kanekescom\Siasn\Simpeg\Api\Http\Client\Riwayat;

$pathParams = [
    'nipBaru' => 'string',
];

Riwayat::getPnsunor($pathParams);
```

Get Riwayat PWK from SIASN

```php
use Kanekescom\Siasn\Simpeg\Api\Http\Client\Riwayat;

$pathParams = [
    'nipBaru' => 'string',
];

Riwayat::getPwk($pathParams);
```

Get Riwayat SKP from SIASN

```php
use Kanekescom\Siasn\Simpeg\Api\Http\Client\Riwayat;

$pathParams = [
    'nipBaru' => 'string',
];

Riwayat::getSkp($pathParams);
```

Get Riwayat SKP 2022/Kinerja from SIASN

```php
use Kanekescom\Siasn\Simpeg\Api\Http\Client\Riwayat;

$pathParams = [
    'nipBaru' => 'string',
];

Riwayat::getSkp22($pathParams);
```
</details>

<details>
<summary>Referensi</summary>

Get Referensi from SIASN

```php
use Kanekescom\Siasn\Simpeg\Api\Http\Client\Referensi;

Referensi::getUnor();
```
</details>

<details>
<summary>Skp</summary>

Add SKP 2021 to SIASN

```php
use Kanekescom\Siasn\Simpeg\Api\Http\Client\Skp;

$queryParams = [
  'atasanPejabatPenilai' => 'string',
  'atasanPenilaiGolongan' => 'string',
  'atasanPenilaiJabatan' => 'string',
  'atasanPenilaiNama' => 'string',
  'atasanPenilaiNipNrp' => 'string',
  'atasanPenilaiTmtGolongan' => 'string',
  'atasanPenilaiUnorNama' => 'string',
  'disiplin' => 0,
  'id' => 'string',
  'inisiatifKerja' => 0,
  'integritas' => 0,
  'jenisJabatan' => 'string',
  'jenisPeraturanKinerjaKd' => 'string',
  'jumlah' => 0,
  'kepemimpinan' => 0,
  'kerjasama' => 0,
  'komitmen' => 0,
  'konversiNilai' => 0,
  'nilaiIntegrasi' => 0,
  'nilaiPerilakuKerja' => 0,
  'nilaiPrestasiKerja' => 0,
  'nilaiSkp' => 0,
  'nilairatarata' => 0,
  'orientasiPelayanan' => 0,
  'pejabatPenilai' => 'string',
  'penilaiGolongan' => 'string',
  'penilaiJabatan' => 'string',
  'penilaiNama' => 'string',
  'penilaiNipNrp' => 'string',
  'penilaiTmtGolongan' => 'string',
  'penilaiUnorNama' => 'string',
  'pnsDinilaiOrang' => 'string',
  'statusAtasanPenilai' => 'string',
  'statusPenilai' => 'string',
  'tahun' => 0,
];

Skp::save2021([], $queryParams);
```

Get SKP from SIASN

```php
use Kanekescom\Siasn\Simpeg\Api\Http\Client\Skp;

$pathParams = [
    'idRiwayatSkp' => 'string',
];

Skp::get($pathParams);
```

Add SKP to SIASN

```php
use Kanekescom\Siasn\Simpeg\Api\Http\Client\Skp;

$queryParams = [
  'atasanPejabatPenilai' => 'string',
  'atasanPenilaiGolongan' => 'string',
  'atasanPenilaiJabatan' => 'string',
  'atasanPenilaiNama' => 'string',
  'atasanPenilaiNipNrp' => 'string',
  'atasanPenilaiTmtGolongan' => 'string',
  'atasanPenilaiUnorNama' => 'string',
  'disiplin' => 0,
  'id' => 'string',
  'integritas' => 0,
  'jenisJabatan' => 'string',
  'jumlah' => 0,
  'kepemimpinan' => 0,
  'kerjasama' => 0,
  'komitmen' => 0,
  'nilaiPerilakuKerja' => 0,
  'nilaiPrestasiKerja' => 0,
  'nilaiSkp' => 0,
  'nilairatarata' => 0,
  'orientasiPelayanan' => 0,
  'pejabatPenilai' => 'string',
  'penilaiGolongan' => 'string',
  'penilaiJabatan' => 'string',
  'penilaiNama' => 'string',
  'penilaiNipNrp' => 'string',
  'penilaiTmtGolongan' => 'string',
  'penilaiUnorNama' => 'string',
  'pnsDinilaiOrang' => 'string',
  'pnsUserId' => 'string',
  'statusAtasanPenilai' => 'string',
  'statusPenilai' => 'string',
  'tahun' => 0,
];

Skp::postSave([], $queryParams);
```
</details>

<details>
<summary>Skp 2022</summary>

Get SKP 2022 from SIASN

```php
use Kanekescom\Siasn\Simpeg\Api\Http\Client\Skp22;

$pathParams = [
    'idRiwayatSkp' => 'string',
];

Skp22::get($pathParams);
```

Add SKP 2022 to SIASN

```php
use Kanekescom\Siasn\Simpeg\Api\Http\Client\Skp22;

$queryParams = [
  'hasilKinerjaNilai' => 0,
  'id' => 'string',
  'kuadranKinerjaNilai' => 0,
  'path' => [
    [
      'dok_id' => 'string',
      'dok_nama' => 'string',
      'dok_uri' => 'string',
      'object' => 'string',
      'slug' => 'string',
    ],
  ],
  'penilaiGolongan' => 'string',
  'penilaiJabatan' => 'string',
  'penilaiNama' => 'string',
  'penilaiNipNrp' => 'string',
  'penilaiUnorNama' => 'string',
  'perilakuKerjaNilai' => 0,
  'pnsDinilaiOrang' => 'string',
  'statusPenilai' => 'string',
  'tahun' => 0,
];

Skp22::postSave([], $queryParams);
```
</details>

## Testing

```bash
composer test
```

## Our other cool packages

Need a package for other BKN's Web Service APIs? Consider installing our packages for seamless integration.

### Referensi APIs

- Laravel SIASN Referensi API as API client.
  
```bash
composer require kanekescom/laravel-siasn-referensi-api
```

- Laravel SIASN Referensi as backend.
  
```bash
composer require kanekescom/laravel-siasn-referensi
```
</details>

### SIASNAPI-SIMPEG APIs

- Laravel SIASN SIMPEG API as API client.
  
```bash
composer require kanekescom/laravel-siasn-simpeg-api
```

- Laravel SIASN SIMPEG as backend.
  
```bash
composer require kanekescom/laravel-siasn-simpeg
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Achmad Hadi Kurnia](https://github.com/kanekescom)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
