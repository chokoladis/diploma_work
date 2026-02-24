<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/include/header.php'; ?>

    <section class="first" id="first">
        <div class="content">
            <div class="container d-flex">
                <div class="offer wow slideInLeft" data-wow-duration="2s">
                    <div class="krug wow rollIn" data-wow-duration="3s"></div>
                    <div class="plus1 wow rollIn" data-wow-duration="3s"></div>
                    <div class="line1 wow rollIn" data-wow-duration="3s"></div>
                    <div class="line2 wow rollIn " data-wow-duration="3s"></div>
                    <div class="plus2 wow rollIn" data-wow-duration="3s"></div>
                    <div class="offer_body">
                        <h1 class="offer_title">
                            <div class="offer_word"></div>
                            <div class="offer_title_small">принтом у нас</div>
                        </h1>
                        <div class="offer_btn">
                            <a href="/catalog/" class="catalog">Перейти к услугам ▶</a>
                        </div>
                    </div>
                    <div class="tochki"></div>
                </div>
                <div class="slider wow slideInRight">
                    <div class="btns_comand d-flex">
                        <div class="btn_comand prev d-flex justify-content-center">⇦</div>
                        <div class="btn_comand next d-flex justify-content-center">⇨</div>
                    </div>
                    <div class="dline1 wow rollIn" data-wow-delay="3s"></div>
                    <div class="tringles wow rollIn" data-wow-delay="3s"></div>
                    <div class="slider_body wow bounceInRight " data-wow-delay="2s">
                        <?
                            $banners = \Main\Services\Content\BannerService::get();

                            if (!empty($banners)) {
                                $isFirst = true;
                                foreach ($banners as $banner) {
                                    $class = $isFirst ? 'curry' : '';
                                    $isFirst = false;

                                    $fileInfo = json_decode($banner->file, true);
                                    ?>
                                    <div class="slider_item <?=$class?>">
                                        <img src="<?= $fileInfo['path']?>" alt="">
                                        <div class="title_slider ">
                                            <div class="title_img"><?=$banner->title?></div>
                                            <div class="title_price"><?=$banner->description?></div>
                                        </div>
                                    </div>
                                    <?
                                }
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
<? require_once $_SERVER['DOCUMENT_ROOT'] . '/include/footer.php'; ?>