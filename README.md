Outputs information about PHP's configuration
======

`phpinfo()`函数的laravel-admin版本, Inspired by [nova-phpinfo](https://github.com/davidpiesse/nova-phpinfo)

## 截图

![wx20180906-141140](https://user-images.githubusercontent.com/1479100/45138456-113f8900-b1df-11e8-98f0-399cb1e2e1b2.png)

## 安装

```bash
composer require laravel-admin-ext/phpinfo
```

如果要在左侧菜单添加一个链接入口，用下面的命令导入
```bash
php artisan admin:import phpinfo
```

## 配置

在`config/admin.php`文件的`extensions`，加上属于这个扩展的配置
```php

    'extensions' => [

        'phpinfo' => [
        
            // 如果要关掉这个扩展，设置为false
            'enable' => true,
            
            // 设置要显示的内容，参考 http://php.net/manual/en/function.phpinfo.php#refsect1-function.phpinfo-parameters
            'what' => INFO_ALL,
            
            // 设置访问路径，默认为phpinfo
            //'path' => '~phpinfo',
        ]
    ]

```

## 使用

安装完成之后打开`http://localhost/admin/phpinfo`

## 支持

如果觉得这个项目帮你节约了时间，不妨支持一下;)

![-1](https://cloud.githubusercontent.com/assets/1479100/23287423/45c68202-fa78-11e6-8125-3e365101a313.jpg)

License
------------
Licensed under [The MIT License (MIT)](LICENSE).