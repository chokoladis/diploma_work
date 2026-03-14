<?php

namespace Main\Tools\Handlers\Excel;

use Main\Core\Exceptions\FileReadException;
use Main\DTO\Content\BannerDTO;
use Main\DTO\Content\FileDTO;
use Main\Repositories\Content\BannerRepository;

class BannerExcelHandler extends BaseHandler
{
    public function action() : true
    {
        $banners = [];

        // todo handle columns
        foreach($this->readRow() as $row) {
            $arValues = explode(';', current($row));

            if ($arFile = explode('.', $arValues[1])){
                $ext = array_pop($arFile);
            } else {
                throw new FileReadException("Для строки {$arValues[0]} не указана картинка");
            }

            // todo use sptObjectStorage ?
            $banners[] = new BannerDTO(
                title: $arValues[0],
                imgSrc: new FileDTO(
                    $arValues[1],
                    $this->tempDir.$this->fileName,
                    $ext
                ),
                description: $arValues[2] ?? null,
                link: $arValues[3] ?? null,
                sort: intval($arValues[4] ?? 100),
                section: $arValues[5] ?? null,
                active: isset($arValues[6]) ? filter_var($arValues[6], FILTER_VALIDATE_BOOLEAN) : true,
            );
        }

        $new = new BannerRepository;
        return $new->addByDTO($banners);
    }
}