# Laravel SIASN Simpeg API

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Total Downloads][ico-downloads]][link-downloads]
[![Build Status][ico-travis]][link-travis]
[![StyleCI][ico-styleci]][link-styleci]

This library is the abstraction of SIASN SIMPEG API for access from applications written with Laravel PHP Framework.

## Installation

You can install the package via composer:

``` bash
$ composer require kanekescom/laravel-siasn-simpeg-api
```

The package will automatically register itself.

You can publish the config file with:

``` bash
$ php artisan vendor:publish --provider="Kanekescom\Siasn\Api\Simpeg\SimpegServiceProvider" --tag="config"
```

## Usage

## Change log

Please see the [changelog](CHANGELOG.md) for more information on what has changed recently.

## Testing

``` bash
$ composer test
```

## Contributing

Please see [CONTRIBUTING.md](CONTRIBUTING.md) for details and a todolist.

## Security

If you discover any security related issues, please email imachmadhadikurnia@gmail.com instead of using the issue tracker.

## Credits

- [Achmad Hadi Kurnia][link-author]
- [All Contributors][link-contributors]

## License

MIT. Please see the [license file](LICENSE) for more information.

[ico-version]: https://img.shields.io/packagist/v/kanekescom/laravel-siasn-simpeg-api.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/kanekescom/laravel-siasn-simpeg-api.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/kanekescom/laravel-siasn-simpeg-api/master.svg?style=flat-square
[ico-styleci]: https://styleci.io/repos/12345678/shield

[link-packagist]: https://packagist.org/packages/kanekescom/laravel-siasn-simpeg-api
[link-downloads]: https://packagist.org/packages/kanekescom/laravel-siasn-simpeg-api
[link-travis]: https://travis-ci.org/kanekescom/laravel-siasn-simpeg-api
[link-styleci]: https://styleci.io/repos/12345678
[link-author]: https://github.com/kanekescom
[link-contributors]: ../../contributors
