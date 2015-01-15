<?php

use Sami\Sami;
use Sami\Version\GitVersionCollection;
use Symfony\Component\Finder\Finder;

$iterator = Finder::create()
    ->files()
    ->name('*.php')
    ->exclude('Resources')
    ->exclude('Tests')
    ->in($dir = '/Users/rhuk/Projects/grav/grav/system/src')
;

return new Sami($iterator, array(
    'theme'                => 'grav',
    'title'                => 'Grav API',
    'build_dir'            => __DIR__.'/../user/pages',
    'cache_dir'            => __DIR__.'/cache/grav',
    'default_opened_level' => 2,
    'template_dirs'        => array(__DIR__.'/grav-theme'),
));
