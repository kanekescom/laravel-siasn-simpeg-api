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

Send DELETE request to /angkakredit/delete/{idRiwayatAngkaKredit} endpoint

```bash
php artisan siasn-simpeg:delete-angkakredit-delete idRiwayatAngkaKredit
```

Send DELETE request to /kinerjaperiodik/delete/{idRiwayatKinerjaPeriodik} endpoint

```bash
php artisan siasn-simpeg:delete-kinerjaperiodik-delete idRiwayatKinerjaPeriodik
```

Send DELETE request to /download-dok endpoint and save into local disk

```bash
php artisan siasn-simpeg:download-download-dok
```

Send GET request to /pns/photo/{idPns} endpoint and save into local disk

```bash
php artisan siasn-simpeg:download-pns-photo idPns
```

Send GET request to /angkakredit/id/{idRiwayatAngkaKredit} endpoint

```bash
php artisan siasn-simpeg:get-angkakredit-id idRiwayatAngkaKredit
```

Send GET request to /diklat/id/{idRiwayatDiklat} endpoint

```bash
php artisan siasn-simpeg:get-diklat-id idRiwayatDiklat
```

Send GET request to /download-dok endpoint

```bash
php artisan siasn-simpeg:get-download-dok
```

Send GET request to /hukdis/id/{idRiwayatHukdis} endpoint

```bash
php artisan siasn-simpeg:get-hukdis-id idRiwayatHukdis
```

Send GET request to /jabatan/id/{idRiwayatJabatan} endpoint

```bash
php artisan siasn-simpeg:get-jabatan-id idRiwayatJabatan
```

Send GET request to /jabatan/pns/{nipBaru} endpoint

```bash
php artisan siasn-simpeg:get-jabatan-pns nipBaru
```

Send GET request to /kursus/id/{idRiwayatKursus} endpoint

```bash
php artisan siasn-simpeg:get-kursus-id idRiwayatKursus
```

Send GET request to /pengadaan/list-pengadaan-instansi endpoint

```bash
php artisan siasn-simpeg:get-pengadaan-list-pengadaan-instansi tahun
```

Send GET request to /penghargaan/id/{idRiwayatPenghargaan} endpoint

```bash
php artisan siasn-simpeg:get-penghargaan-id idRiwayatPenghargaan
```

Send GET request to /pns/data-anak/{nipBaru} endpoint

```bash
php artisan siasn-simpeg:get-pns-data-anak nipBaru
```

Send GET request to /pns/data-ortu/{nipBaru} endpoint

```bash
php artisan siasn-simpeg:get-pns-data-ortu nipBaru
```

Send GET request to /pns/data-pasangan/{nipBaru} endpoint

```bash
php artisan siasn-simpeg:get-pns-data-pasangan nipBaru
```

Send GET request to /pns/data-utama/{nipBaru} endpoint

```bash
php artisan siasn-simpeg:get-pns-data-utama nipBaru
```

Send GET request to /pns/list-kp-instansi endpoint

```bash
php artisan siasn-simpeg:get-pns-list-kp-instansi periode
```

Send GET request to /pns/list-pensiun-instansi endpoint

```bash
php artisan siasn-simpeg:get-pns-list-pensiun-instansi tglAwal tglAkhir
```

Send GET request to /pns/photo/{idPns} endpoint

```bash
php artisan siasn-simpeg:get-pns-photo idPns
```

Send GET request to /pns/rw-angkakredit/{nipBaru} endpoint

```bash
php artisan siasn-simpeg:get-pns-rw-angkakredit nipBaru
```

Send GET request to /pns/rw-cltn/{nipBaru} endpoint

```bash
php artisan siasn-simpeg:get-pns-rw-cltn nipBaru
```

Send GET request to /pns/rw-diklat/{nipBaru} endpoint

```bash
php artisan siasn-simpeg:get-pns-rw-diklat nipBaru
```

Send GET request to /pns/rw-dp3/{nipBaru} endpoint

```bash
php artisan siasn-simpeg:get-pns-rw-dp3 nipBaru
```

Send GET request to /pns/rw-golongan/{nipBaru} endpoint

```bash
php artisan siasn-simpeg:get-pns-rw-golongan nipBaru
```

Send GET request to /pns/rw-hukdis/{nipBaru} endpoint

```bash
php artisan siasn-simpeg:get-pns-rw-hukdis nipBaru
```

Send GET request to /pns/rw-jabatan/{nipBaru} endpoint

```bash
php artisan siasn-simpeg:get-pns-rw-jabatan nipBaru
```

Send GET request to /pns/rw-kinerjaperiodik/{nipBaru} endpoint

```bash
php artisan siasn-simpeg:get-pns-rw-kinerjaperiodik nipBaru
```

Send GET request to /pns/rw-kursus/{nipBaru} endpoint

```bash
php artisan siasn-simpeg:get-pns-rw-kursus nipBaru
```

Send GET request to /pns/rw-masakerja/{nipBaru} endpoint

```bash
php artisan siasn-simpeg:get-pns-rw-masakerja nipBaru
```

Send GET request to /pns/rw-pemberhentian/{nipBaru} endpoint

```bash
php artisan siasn-simpeg:get-pns-rw-pemberhentian nipBaru
```

Send GET request to /pns/rw-pendidikan/{nipBaru} endpoint

```bash
php artisan siasn-simpeg:get-pns-rw-pendidikan nipBaru
```

Send GET request to /pns/rw-penghargaan/{nipBaru} endpoint

```bash
php artisan siasn-simpeg:get-pns-rw-penghargaan nipBaru
```

Send GET request to /pns/rw-pindahinstansi/{nipBaru} endpoint

```bash
php artisan siasn-simpeg:get-pns-rw-pindahinstansi nipBaru
```

Send GET request to /pns/rw-pnsunor/{nipBaru} endpoint

```bash
php artisan siasn-simpeg:get-pns-rw-pnsunor nipBaru
```

Send GET request to /pns/rw-pwk/{nipBaru} endpoint

```bash
php artisan siasn-simpeg:get-pns-rw-pwk nipBaru
```

Send GET request to /pns/rw-skp/{nipBaru} endpoint

```bash
php artisan siasn-simpeg:get-pns-rw-skp nipBaru
```

Send GET request to /pns/rw-skp22/{nipBaru} endpoint

```bash
php artisan siasn-simpeg:get-pns-rw-skp22 nipBaru
```

Send GET request to /referensi/ref-unor endpoint

```bash
php artisan siasn-simpeg:get-referensi-ref-unor
```

Send GET request to /skp/id/{idRiwayatSkp} endpoint

```bash
php artisan siasn-simpeg:get-skp-id idRiwayatSkp
```

Send GET request to /skp22/id/{idRiwayatSkp} endpoint

```bash
php artisan siasn-simpeg:get-skp22-id idRiwayatSkp
```

Send POST request to /angkakredit/save endpoint

```bash
php artisan siasn-simpeg:post-angkakredit-save
```

Send POST request to /cpns/save endpoint

```bash
php artisan siasn-simpeg:post-cpns-save 
```

Send POST request to /diklat/save endpoint

```bash
php artisan siasn-simpeg:post-diklat-save
```

Send POST request to /hukdis/save endpoint

```bash
php artisan siasn-simpeg:post-hukdis-save
```

Send POST request to /jabatan/save endpoint

```bash
php artisan siasn-simpeg:post-jabatan-save 
```

Send POST request to /kinerjaperiodik/save endpoint

```bash
php artisan siasn-simpeg:post-kinerjaperiodik-save
```

Send POST request to /kursus/save endpoint

```bash
php artisan siasn-simpeg:post-kursus-save
```

Send POST request to /penghargaan/save endpoint

```bash
php artisan siasn-simpeg:post-penghargaan-save
```

Send POST request to /pns/data-utama-update endpoint

```bash
php artisan siasn-simpeg:post-pns-data-utama-update 
```

 Send POST request to /skp/save endpoint

```bash
php artisan siasn-simpeg:post-skp-save 
```

Send POST request to /skp/2021/save endpoint

```bash
php artisan siasn-simpeg:post-skp2021-save 
```

 Send POST request to /skp22/save endpoint

```bash
php artisan siasn-simpeg:post-skp22-save
```

Send POST request to /upload-dok endpoint

```bash
php artisan siasn-simpeg:post-upload-dok
```

Send POST request to /upload-dok-rw endpoint

```bash
php artisan siasn-simpeg:post-upload-dok-rw
```

Send POST request to /upload-dok-sk-kp endpoint

```bash
php artisan siasn-simpeg:post-upload-dok-sk-kp
```

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
