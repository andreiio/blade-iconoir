<p align="center">
    <img src="https://banners.beyondco.de/Blade%20Iconoir.png?theme=light&packageManager=composer+require&packageName=andreiio%2Fblade-iconoir&pattern=architect&style=style_1&description=A+package+to+easily+make+use+of+Iconoir+in+your+Laravel+Blade+views.&md=1&showWatermark=1&fontSize=100px&images=https%3A%2F%2Flaravel.com%2Fimg%2Flogomark.min.svg" width="1280" title="Social Card Blade Iconoir">
</p>

# Blade Iconoir

A package to easily make use of [Iconoir](https://iconoir.com/) in your Laravel Blade views.

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE.md)
[![Build Status][ico-github-actions]][link-github-actions]
[![Style CI][ico-styleci]][link-styleci]
[![Total Downloads][ico-downloads]][link-downloads]

For a full list of available icons see [the `resources/svg` directory](./resources/svg) or search

## Requirements

- PHP 7.4 or higher
- Laravel 8.0 or higher

## Install

```console
composer require andreiio/blade-iconoir
```

## Usage

Icons can be used a self-closing Blade components which will be compiled to SVG icons:
```blade
<x-iconoir-regular-bookmark />
```

You can also pass classes to your icon components:
```blade
<x-iconoir-regular-mail class="w-6 h-6 text-gray-500 fill-current" />
```

And even use inline styles:
```blade
<x-iconoir-solid-warning-triangle style="fill: #F00" />
```
### Icon Naming Convention

Please be aware, that this package uses a different naming convention for the "Style" of the icons than the [original icon author's website](https://iconoir.com/docs/naming-convention##:~:text=Styles). All regular styled icon names are prefixed with 'regular-', as all solid styled icon names are prefixed with '-solid'.

### Raw SVG Icons

If you want to use the raw SVG icons as assets, you can publish them using:

```console
php artisan vendor:publish --tag=blade-iconoir --force
```

Then use them in your views like:

```blade
<img src="{{ asset('vendor/blade-iconoir/regular-bicycle.svg') }}" width="10" height="10"/>
```

### Blade Icons

Blade Iconoir uses Blade Icons under the hood. Please refer to [the Blade Icons readme](https://github.com/blade-ui-kit/blade-icons) for additional functionality.

## Testing

```console
composer test
```

## Credits

- [Andrei Ioniță][link-author]
- [All Contributors][link-contributors]

## License

This project is licensed under the MIT License (MIT) – see the [LICENSE](LICENSE.md) file for details.

[ico-version]: https://img.shields.io/packagist/v/andreiio/blade-iconoir.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-github-actions]: https://img.shields.io/github/actions/workflow/status/andreiio/blade-iconoir/tests.yml?style=flat-square
[ico-styleci]: https://styleci.io/repos/365816298/shield
[ico-downloads]: https://img.shields.io/packagist/dt/andreiio/blade-iconoir.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/andreiio/blade-iconoir
[link-github-actions]: https://github.com/andreiio/blade-iconoir/actions
[link-styleci]: https://styleci.io/repos/365816298
[link-downloads]: https://packagist.org/packages/andreiio/blade-iconoir
[link-author]: https://github.com/andreiio
[link-contributors]: ../../contributors
