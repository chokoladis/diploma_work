<?php

namespace Main\Repositories\Content;

use Exception;
use Main\Core\Database\QuerySetBuilder;
use Main\DTO\Content\BannerDTO;
use Main\Models\Content\Banner;
use Main\Services\Content\FileService;
use Main\Tools\Logger;

class BannerRepository
{
    /**
     * @param array<BannerDTO> $arBannerDTO
     */
    public function addByDTO(array $arBannerDTO)
    {
        $logger = Logger::getInstance('banner');

        try {
            $queryBuilder = new QuerySetBuilder(new Banner());
            foreach ($arBannerDTO as $arBanner) {
                if (FileService::save($arBanner->imgSrc, 'banner')) {
                    $queryBuilder->prepareDeferredData($arBanner->toArray());
                } else {
                    $logger->error('Failed to save banner', [error_get_last()]);
                }
            }

            return $queryBuilder->deferredAddition();
        } catch (Exception $e) {
            $logger->error($e->getMessage(), [$e->getLine(), $e->getFile()]);
            throw $e;
        }
    }
}