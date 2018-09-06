<?php

namespace Encore\PHPInfo;

use Illuminate\Support\ServiceProvider;

class PHPInfoServiceProvider extends ServiceProvider
{
    /**
     * {@inheritdoc}
     */
    public function boot(PHPInfo $extension)
    {
        if (! PHPInfo::boot()) {
            return ;
        }

        if ($views = $extension->views()) {
            $this->loadViewsFrom($views, 'laravel-admin-phpinfo');
        }

        $this->app->booted(function () {
            PHPInfo::routes(__DIR__.'/../routes/web.php');
        });
    }
}