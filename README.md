Outputs information about PHP's configuration
======

The laravel-admin version of the `phpinfo()` function, Inspired by [nova-phpinfo](https://github.com/davidpiesse/nova-phpinfo)

## Screenshot

![wx20180906-141140](https://user-images.githubusercontent.com/1479100/45138456-113f8900-b1df-11e8-98f0-399cb1e2e1b2.png)

## Installation

```bash
composer require laravel-admin-ext/phpinfo
```

If you want to add a link entry in the left menu, use the following command to import
```bash
php artisan admin:import phpinfo
```

## Configuration

In the `extensions` section of the `config/admin.php` file, add configurations
```php

    'extensions' => [

        'phpinfo' => [
        
            // Set this to false if you want to disable this extension
            'enable' => true,
            
            // What information to show，see http://php.net/manual/en/function.phpinfo.php#refsect1-function.phpinfo-parameters
            'what' => INFO_ALL,
            
            // Set access path，defaults to `phpinfo`
            //'path' => '~phpinfo',
        ]
    ]

```

## Usage

Open `http://localhost/admin/phpinfo` in your broswer after install

## Donate

> Help keeping the project development going, by donating a little. Thanks in advance.

[![PayPal Me](https://img.shields.io/badge/Donate-PayPal-green.svg)](https://www.paypal.me/zousong)

![-1](https://cloud.githubusercontent.com/assets/1479100/23287423/45c68202-fa78-11e6-8125-3e365101a313.jpg)

License
------------
Licensed under [The MIT License (MIT)](LICENSE).
