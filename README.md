<<<<<<< HEAD
# SwaggerClient-php
=======
# petstore-php
>>>>>>> 43c0c359d3be3bcd7168b43937abd3341cc4207f

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
<<<<<<< HEAD
      "url": "https://github.com/swagger/swagger-client.git"
    }
  ],
  "require": {
    "swagger/swagger-client": "*@dev"
=======
      "url": "https://github.com/wing328/petstore-php.git"
    }
  ],
  "require": {
    "wing328/petstore-php": "*@dev"
>>>>>>> 43c0c359d3be3bcd7168b43937abd3341cc4207f
  }
}
```

Then install via `composer install`

### Manual Installation

If you do not wish to use Composer, you can download the latest release. Then, to use the bindings, include the `autoload.php` file.
```php
<<<<<<< HEAD
    require_once('/path/to/SwaggerClient-php/autoload.php');
=======
    require_once('/path/to/petstore-php/autoload.php');
>>>>>>> 43c0c359d3be3bcd7168b43937abd3341cc4207f
```

## Tests 

To run the unit tests:
```
composer install
./vendor/bin/phpunit lib/Tests
```

## Author

apiteam@swagger.io


