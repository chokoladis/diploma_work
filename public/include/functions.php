<?php

if (!function_exists('dump'))
{
    function dump(...$vars)
    {
        echo '<pre>';
        var_dump($vars);
        echo '</pre>';
    }
}