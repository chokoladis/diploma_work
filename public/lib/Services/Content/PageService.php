<?php

namespace Main\Services\Content;

class PageService
{
    protected static string $pageTitle = 'redmouse'; // $_ENV['APP_NAME'] ?? '';
    protected static string $tagPageTitle = '#PAGE_TITLE#';

    static function getTagPageTitle(): string
    {
        return static::$tagPageTitle;
    }

    static function setTitle(string $title)
    {
        static::$pageTitle = $title;
    }

    static function loadData(string $content)
    {
        $content = str_replace(static::$tagPageTitle, static::$pageTitle, $content);
//        todo other
        return $content;
    }
}