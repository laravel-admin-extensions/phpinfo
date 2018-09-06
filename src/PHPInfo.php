<?php

namespace Encore\PHPInfo;

use Encore\Admin\Extension;

class PHPInfo extends Extension
{
    public $name = 'phpinfo';

    public $views = __DIR__ . '/../resources/views';

    public $menu = [
        'title' => 'PHP info',
        'path'  => 'phpinfo',
        'icon'  => 'fa-exclamation',
    ];

    public function toCollection()
    {
        $what = static::config('what', INFO_ALL);

        ob_start();

        phpinfo($what);

        $phpinfo = ['phpinfo' => collect()];

        if (preg_match_all('#(?:<h2>(?:<a name=".*?">)?(.*?)(?:</a>)?</h2>)|(?:<tr(?: class=".*?")?><t[hd](?: class=".*?")?>(.*?)\s*</t[hd]>(?:<t[hd](?: class=".*?")?>(.*?)\s*</t[hd]>(?:<t[hd](?: class=".*?")?>(.*?)\s*</t[hd]>)?)?</tr>)#s', ob_get_clean(), $matches, PREG_SET_ORDER)) {

            collect($matches)->each(function ($match) use (&$phpinfo) {
                if (strlen($match[1])) {
                    $phpinfo[$match[1]] = collect();

                } elseif (isset($match[3])) {
                    $keys = array_keys($phpinfo);

                    $phpinfo[end($keys)][$match[2]] = isset($match[4]) ? collect([$match[3], $match[4]]) : $match[3];
                } else {
                    $keys = array_keys($phpinfo);

                    $phpinfo[end($keys)][] = $match[2];
                }
            });
        }

        ob_end_clean();

        return collect($phpinfo);
    }
}