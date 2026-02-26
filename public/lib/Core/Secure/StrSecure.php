<?php

namespace Main\Core\Secure;

class StrSecure
{
    public static function get(?string $value = null)
    {
        return $value ? addslashes(htmlspecialchars(trim($value))) : null;
    }
}