<?php

namespace Main\Services;

class PageService
{
    protected static string $pageTitle = 'redmouse'; // $_ENV['APP_NAME'] ?? '';
    protected static string $tagPageTitle = '#PAGE_TITLE#';

    static function getTagPageTitle(): string
    {
        return self::$tagPageTitle;
    }

    static function setTitle(string $title)
    {
        self::$pageTitle = $title;
    }

    static function loadData(string $content)
    {
        $content = str_replace(self::$tagPageTitle, self::$pageTitle, $content);
//        todo other
        return $content;
    }
}