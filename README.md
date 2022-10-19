# PHP client to communicate with WriteSonic API

![GitHub Actions](https://github.com/devkind-au/writesonic-php/actions/workflows/main.yml/badge.svg)

WritesonicPhp is a simple SDK implementation of Writesonic API. It helps accessing the API in an object oriented way.

### Getting the API key

please register an account and request an api key at [Writesonic](https://writesonic.com). `<br/>` Please check out the tutorials section for more information`<br/>`   `<ul>` `<li>` [Find your API key](../docs/Find%20Api%20Key) `</li>` `<li>`  [Test an endpoint](../docs/Test%20An%20Endpoint)`</li>` `</ul>`

## Installation

You can install the package via composer:

```bash
composer require devkind/writesonic-php
```

## Usage

### Initialization:

```php
use Devkind\WritesonicPhp;

/** @var \Devkind\WritesonicPhp */
$writesonic  =  new WritesonicPhp(API_KEY);
```

alternatively we can initialize static

```php
/** @var \Devkind\WritesonicPhp */
$writesonic  =  \Devkind\WritesonicPhp::make(API_KEY);
```

## Objects / Endpoints:

Endpoints are basically the type of content that is supported by Writesonic.

Each endpoint requireds an `$engine` and `$language` parameter to query from writesonic.

```
/** @var string $language */
    protected $language = 'en';

    /** @var string $engine */
    protected $engine = 'economy';
```

it supports following engines :

> economy, business

and it supports following languages :

> en, nl, fr, de, it, pl, es, pt-pt, pt-br, ru, ja, zh, bg, cs, da, el, hu, lt, lv, ro, sk, sl, sv, fi, et

in order to change the language or engine we can call the setter methods, which is available on all the endpoints.

to set the language

```php
/** @var \Devkind\WritesonicPhp\Endpoints\GenerateImage */
$endpoint = $writesonic->GenerateImage->setLanguage('br');
```

to set the engine

```php
/** @var \Devkind\WritesonicPhp\Endpoints\GenerateImage */
$endpoint = $writesonic->GenerateImage->setEngine('business');
```

alternatively:

```php
/** @var \Devkind\WritesonicPhp\Endpoints\GenerateImage */
$endpoint = $writesonic->GenerateImage->setEngine('br')->setLanguage('br');
```

All the endpoints can be  called into three different ways

#### as a payload

```php
$object  =  new WritesonicPhp('test123');
/** @var \Devkind\WritesonicPhp\Endpoints\GoogleAds */
$endpoint = $object->GoogleAds;

$array = $endpoint->setPayload([
    "product_name" => 'test',
    "product_description" => 'test',
    "search_term" => 'test',
])->get();
```

#### through the setter methods

```php
$object  =  new WritesonicPhp('test123');
/** @var \Devkind\WritesonicPhp\Endpoints\GoogleAds */
$endpoint = $object->GoogleAds;
/** @var array */
$array = $endpoint->setProductName('test')
    ->setProductDescription('test')
    ->setSearchTerm('test')
    ->get();
```

#### through the `generate` method

```php
/** @var \Devkind\WritesonicPhp\Endpoints\GoogleAds */
$endpoint = $writesonic->GoogleAds;
/** @var array */
$endpoint->generate(
	$product_name,
	$product_description,
	$search_term
);
```

#### through the `get` method

```php
/** @var array */
$endpoint = $writesonic->GoogleAds->get([
    "product_name" => 'test',
    "product_description" => 'test',
    "search_term" => 'test',
]);
```

### Supported Objects / Endpoints:

##### [Click here ](https://github.com/devkindhq/writesonic-php/blob/main/endpoints.md) to view the entire documentation of supported endpoints

### Testing

```bash
composer test
```
### Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

### Security

If you discover any security related issues, please email backend@devkind.com.au instead of using the issue tracker.

## Credits

- [Devkind Developer](https://github.com/devkindhq)
- [Devkind Developer]
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
