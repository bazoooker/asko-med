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
<div class="swiper-container-main">
     <div class="swiper-wrapper">

<?foreach($arResult["ITEMS"] as $arItem):?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>
       <div class="swiper-slide" style="background-image: url(<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>);">
                                      <div class="container">
                                            <div class="slide-content">
                                                  <div class="slide-content__additional slide-content__additional_top">
                                                        всегда в наличии
                                                  </div>
                                                  <a href="#" class="slide-content__additional slide-content__additional_bottom" href="#">
                                                        все предложения
                                                  </a>
                                                  <a class="slide-content__offer">
                                                        <span class="slide-content__offer-heading"><?echo $arItem["NAME"]?></span>   
                                                <?if($arParams["DISPLAY_PREVIEW_TEXT"]!="N" && $arItem["PREVIEW_TEXT"]):?>
													<?echo $arItem["PREVIEW_TEXT"];?>
												<?endif;?>
                                                  </a>
                                            </div> 
                                      </div>
                                                 
                                </div>
<?endforeach;?>
	</div>
      <!-- Add Arrows -->
      <div class="swiper-button_size-l hero-slider-btn_next js-hero-slider-btn_next"></div>
      <div class="swiper-button_size-l hero-slider-btn_prev js-hero-slider-btn_prev"></div>
</div>
