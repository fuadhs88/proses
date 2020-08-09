<?php

namespace Dcat\Admin\Extension\Proses;

use Dcat\Admin\Extension;

class Proses extends Extension
{
    const NAME = 'proses';

    protected $serviceProvider = ProsesServiceProvider::class;

    protected $composer = __DIR__.'/../composer.json';

    protected $assets = __DIR__.'/../resources/assets';

    protected $views = __DIR__.'/../resources/views';

//    protected $lang = __DIR__.'/../resources/lang';

    protected $menu = [
        'title' => 'Proses',
        'path'  => 'proses',
        'icon'  => 'fa-cogs',
    ];
}
