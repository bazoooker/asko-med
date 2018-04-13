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

$arViewModeList = $arResult['VIEW_MODE_LIST'];

$arViewStyles = array(
	'LIST' => array(
		'CONT' => 'bx_sitemap',
		'TITLE' => 'bx_sitemap_title',
		'LIST' => 'bx_sitemap_ul',
	),
	'LINE' => array(
		'CONT' => 'bx_catalog_line',
		'TITLE' => 'bx_catalog_line_category_title',
		'LIST' => 'bx_catalog_line_ul',
		'EMPTY_IMG' => $this->GetFolder().'/images/line-empty.png'
	),
	'TEXT' => array(
		'CONT' => 'bx_catalog_text',
		'TITLE' => 'bx_catalog_text_category_title',
		'LIST' => 'bx_catalog_text_ul'
	),
	'TILE' => array(
		'CONT' => 'bx_catalog_tile',
		'TITLE' => 'bx_catalog_tile_category_title',
		'LIST' => 'bx_catalog_tile_ul',
		'EMPTY_IMG' => $this->GetFolder().'/images/tile-empty.png'
	)
);
$arCurView = $arViewStyles[$arParams['VIEW_MODE']];

$strSectionEdit = CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "SECTION_EDIT");
$strSectionDelete = CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "SECTION_DELETE");
$arSectionDeleteParams = array("CONFIRM" => GetMessage('CT_BCSL_ELEMENT_DELETE_CONFIRM'));

?>


 <section class="page-section container h-section-margin">
                                    <h2>Поставляемая продукция</h2>
                              <div class="swiper-controls-holder">

                                    <div class="swiper-container-products h-stretch">
                                          <div class="swiper-wrapper">
                                          	<div class="swiper-slide">
                              <?
$intCurrentDepth = 1;
			$boolFirst = true;
			$i=0;
			foreach ($arResult['SECTIONS'] as &$arSection)
			{
				$i++;
				if ($i>2) {
					 ?></div>
						<div class="swiper-slide">
					 <?
					 $i=0;
				}
                              ?>                  
                                                <!-- slide -->
                                                
                                                      <a href="<?=$arSection['SECTION_PAGE_URL'];?>" class="product-slider-item">
                                                            <div class="product-slider-item__text">
                                                                 <?=$arSection["NAME"]?>
                                                            </div>
                                                            <div class="product-slider-item__img" style="background-image: url(<?=$arSection['PICTURE']['SRC']?>);"></div>
                                                      </a>

    
                                               
            <?}?>                                    

</div>
                                          </div>
                                          
                                    </div>

                                    <!-- Add Arrows -->
                                    <div class="swiper-button_size-s products-slider-btn_next js-products-slider-btn_next"></div>
                                    <div class="swiper-button_size-s products-slider-btn_prev js-products-slider-btn_prev"></div>

                              </div>
                              <a href="/Catalog/?sect=yes" class="btn btn_filled">вся продукция</a>

                        </section>