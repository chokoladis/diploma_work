<?php

namespace Main\DTO\Tools;

readonly class CacheDTO
{
    function __construct(
        public string $key,
        public int $ttl = 3600,
        // dir ?
    )
    {
    }
}