<?php

namespace Main\Tools;

use Illuminate\Filesystem\Filesystem;
use Illuminate\Translation\FileLoader;
use Illuminate\Translation\Translator;
use Illuminate\Validation\Factory;

class Validator
{
    public static function get() : Factory
    {
        $filesystem = new Filesystem();
        $loader = new FileLoader($filesystem, __DIR__. '/lang');
        $translator = new Translator($loader, 'ru'); //todo ?
        return new Factory($translator);
    }
}