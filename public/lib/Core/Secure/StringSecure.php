<?php

namespace Main\Core\Secure;

class StringSecure
{
    public static function get(string $value)
    {
        return addslashes(htmlspecialchars(trim($value)));
    }
}