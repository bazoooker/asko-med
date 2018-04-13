<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>
 <nav class="page-nav">
		<a href="/" class="nav-link nav-link_home">
            <i class="icon icon_home"></i>
        </a>
<?
foreach($arResult as $arItem):
	if($arParams["MAX_LEVEL"] == 1 && $arItem["DEPTH_LEVEL"] > 1) 
		continue;
?>
	<?if($arItem["SELECTED"]):?>
		<a href="<?=$arItem["LINK"]?>" class="nav-link selected"><?=$arItem["TEXT"]?></a>
	<?else:?>
		<a href="<?=$arItem["LINK"]?>" class="nav-link"><?=$arItem["TEXT"]?></a>
	<?endif?>
	
<?endforeach?>

</nav>
<?endif?>

      
                              
                           
