# Digitickets PHP

[![Latest Version on Packagist](https://img.shields.io/packagist/v/steadfastcollective/digitickets-laravel.svg?style=flat-square)](https://packagist.org/packages/steadfastcollective/digitickets-laravel)
[![Build Status](https://img.shields.io/travis/steadfastcollective/digitickets-laravel/master.svg?style=flat-square)](https://travis-ci.org/steadfastcollective/digitickets-laravel)
[![Quality Score](https://img.shields.io/scrutinizer/g/steadfastcollective/digitickets-laravel.svg?style=flat-square)](https://scrutinizer-ci.com/g/steadfastcollective/digitickets-laravel)
[![Total Downloads](https://img.shields.io/packagist/dt/steadfastcollective/digitickets-laravel.svg?style=flat-square)](https://packagist.org/packages/steadfastcollective/digitickets-laravel)

digitickets-laravel is a php package to help make calls to a Digitickets API.

## Installation

You can install the package via composer:

```bash
composer require steadfastcollective/digitickets-laravel
```

## Usage

``` php
use SteadfastCollective\Digitickets\Digitickets;

$response = (new Digitickets($ip, $username, $password, $port))
    ->request([
        //
    ]);
```

### Testing

``` bash
composer test
```

### Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

### Security

If you discover any security related issues, please email dev@steadfastcollective.com instead of using the issue tracker.

## Credits

- [Steadfast Collective](https://github.com/steadfastcollective)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
