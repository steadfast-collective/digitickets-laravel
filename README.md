# Laravel Digitickets

**Still in development.**

[![Latest Version on Packagist](https://img.shields.io/packagist/v/steadfastcollective/digitickets-laravel.svg?style=flat-square)](https://packagist.org/packages/steadfastcollective/digitickets-laravel)
[![Build Status](https://img.shields.io/travis/steadfastcollective/digitickets-laravel/master.svg?style=flat-square)](https://travis-ci.org/steadfastcollective/digitickets-laravel)
[![Quality Score](https://img.shields.io/scrutinizer/g/steadfastcollective/digitickets-laravel.svg?style=flat-square)](https://scrutinizer-ci.com/g/steadfastcollective/digitickets-laravel)
[![Total Downloads](https://img.shields.io/packagist/dt/steadfastcollective/digitickets-laravel.svg?style=flat-square)](https://packagist.org/packages/steadfastcollective/digitickets-laravel)

Laravel Digitickets is a Laravel package to help make API calls to Digitickets. It currently supports the majority of the Digiticket API endpoints.

## Installation

You can install the package via composer:

```bash
composer require steadfastcollective/digitickets-laravel
```

## Usage


```php
use SteadfastCollective\Digitickets\Digitickets;

$response = (new Digitickets($ip, $username, $password, $port))
    ->request([
        //
    ]);
```

This package is built using the repository pattern, where every resource, like an `Order` or a `Customer` is its own repository. Each of these repositories have their own methods. For example, the `OrderRepository` has these methods:

* `index`
* `show`
* `create`
* `update`

If there are any filters or bits of data you need to pass through to the Digitickets API, just pass it through inside an array. Here's a basic example:

```php
$orders = new OrderRepository();

return $orders->index([
    'page' => 2,
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
