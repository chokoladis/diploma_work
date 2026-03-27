<?php

namespace Main\DTO\Content;

use Illuminate\Contracts\Support\Arrayable;

class BannerDTO implements Arrayable
{
    public function __construct(
        public string  $title,
        public FileDTO $imgSrc,
        public ?string $description = null,
        public ?string $link = null,
        public ?int    $sort = null,
        public ?string $section = null,
        public bool    $active = true,
    )
    {
    }

    public function toArray(): array
    {
        return [
            'title' => $this->title,
            'file' => json_encode($this->imgSrc),
            'description' => $this->description,
            'link' => $this->link,
            'sort' => $this->sort,
            'section' => $this->section,
            'active' => $this->active,
        ];
    }
}