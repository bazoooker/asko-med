<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>

 <section class="news">

                              <div class="container page-section">
                                    <h2>Новости и события</h2>
                                    
                                    <div class="swiper-controls-holder">

                                          <!--NEWS SLIDER -->
      <?foreach($arResult["ITEMS"] as $arItem):?>                                    
                                          <div class="swiper-container-news h-stretch">
                                                <div class="swiper-wrapper">

                                                      <div class="swiper-slide">
                                                            <a href="<?=$arItem["DETAIL_PAGE_URL"]?>" class="news-slider-item">
                                                                  <div class="news-slider-item__img" style="background-image: url(<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>);"></div>
                                                                  <div class="news-slider-item__text">
                                                                        <span class="news-slider-item__heading"><?=$arItem["NAME"]?></span>
                                                                        <span class="news-slider-item__ad"><?=$arItem["PREVIEW_TEXT"]?></span>
                                                                  </div>
                                                                  
                                                            </a >
                                                      </div>

		<?endforeach;?>
                                                </div>
                                                <!-- Add Pagination -->
                                                <div class="swiper-pagination"></div>
                                                
                                          </div>
                                    
                                          <!-- Add Arrows -->
                                          <div class="swiper-button_size-s news-slider-btn_next js-news-slider-btn_next"></div>
                                          <div class="swiper-button_size-s news-slider-btn_prev js-news-slider-btn_prev"></div>
                                    </div>
                              </div>

                        </section>

