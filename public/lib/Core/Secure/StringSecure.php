<?php

namespace Main\Core\Secure;

class StringSecure
{
    public static function get(?string $value = null)
    {
        return $value ? addslashes(htmlspecialchars(trim($value))) : null;
    }
}