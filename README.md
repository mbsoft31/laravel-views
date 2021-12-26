# This is my package laravel-views

[![Latest Version on Packagist](https://img.shields.io/packagist/v/mbsoft31/laravel-views.svg?style=flat-square)](https://packagist.org/packages/mbsoft31/laravel-views)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/mbsoft31/laravel-views/run-tests?label=tests)](https://github.com/mbsoft31/laravel-views/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/mbsoft31/laravel-views/Check%20&%20fix%20styling?label=code%20style)](https://github.com/mbsoft31/laravel-views/actions?query=workflow%3A"Check+%26+fix+styling"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/mbsoft31/laravel-views.svg?style=flat-square)](https://packagist.org/packages/mbsoft31/laravel-views)

This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

## Support us

[<img src="https://github-ads.s3.eu-central-1.amazonaws.com/laravel-views.jpg?t=1" width="419px" />](https://spatie.be/github-ad-click/laravel-views)

We invest a lot of resources into creating [best in class open source packages](https://spatie.be/open-source). You can support us by [buying one of our paid products](https://spatie.be/open-source/support-us).

We highly appreciate you sending us a postcard from your hometown, mentioning which of our package(s) you are using. You'll find our address on [our contact page](https://spatie.be/about-us). We publish all received postcards on [our virtual postcard wall](https://spatie.be/open-source/postcards).

## Installation

You can install the package via composer:

```bash
composer require mbsoft31/laravel-views
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="laravel-views-migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="laravel-views-config"
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="laravel-views-views"
```

This is the contents of the published config file:

```php
return [
];
```

## Usage

```php
$laravel-views = new Mbsoft31\LaravelViews();
echo $laravel-views->echoPhrase('Hello, Mbsoft31!');
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Bekhouche Mouadh](https://github.com/mbsoft31)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
