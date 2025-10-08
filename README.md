# This is my package testpacakge

[![Latest Version on Packagist](https://img.shields.io/packagist/v/fkrzski/testpacakge.svg?style=for-the-badge)](https://packagist.org/packages/fkrzski/testpacakge)
[![Tests](https://img.shields.io/github/actions/workflow/status/fkrzski/testpacakge/run-tests.yml?branch=main&label=tests&style=for-the-badge)](https://github.com/fkrzski/testpacakge/actions/workflows/run-tests.yml)
[![Total Downloads](https://img.shields.io/packagist/dt/fkrzski/testpacakge.svg?style=for-the-badge)](https://packagist.org/packages/fkrzski/testpacakge)

This is where your description should go. Try and limit it to a paragraph or two. Consider adding a small example.

## Installation

You can install the package via composer:

```bash
composer require fkrzski/testpacakge
```

## Publishing Config

You can publish the config file with:

```bash
php artisan vendor:publish --tag="skeleton-config"
```

## Usage

```php
$skeleton = new Fkrzski\TestPacakge\TestPacakgeClass();
echo $skeleton->echoPhrase('Hello, Fkrzski!');
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](https://github.com/spatie/.github/blob/main/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [fkrzski](https://github.com/fkrzski)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
