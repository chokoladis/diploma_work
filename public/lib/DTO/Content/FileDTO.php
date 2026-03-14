<?php

namespace Main\DTO\Content;

class FileDTO
{
    public function __construct(
        public string $name,
        public string $directory,
        public ?string $extension = null,
    )
    {
    }

//    public function __toString()
//    {
//        $ext =
//            explode('.', $this->name);
//
//        return $this->name;
//    }
}