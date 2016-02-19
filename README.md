# petstore-php

## Requirements

PHP 5.4.0 and later

## Installation & Usage
### Composer

You can install the bindings via [Composer](http://getcomposer.org/). Add this to your `composer.json`:

```
{
  "repositories": [
    {
      "type": "git",
      "url": "https://github.com/YOUR_GITHUB_ID/petstore-php.git"
    }
  ],
  "require": {
    "wing328/": "*@dev"
  }
}
```

Then install via `composer install`

### Manual Installation

If you do not wish to use Composer, you can download the latest release. Then, to use the bindings, include the `petstore-php.php` file.
```php
    require_once('/path/to/petstore-php/autoload.php');
```

## Tests 

To run the unit tests:
```
composer install
./vendor/bin/phpunit lib/Tests
```

## Author

apiteam@swagger.io


