<?php

namespace Main\Helpers;

class StrHelper
{
    public static function outErrors(array $messages)
    {
        return sprintf('<b class="input-error">%s</b>', implode(' / ', $messages));
    }
}