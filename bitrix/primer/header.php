<?
if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
	die();
?>
<!DOCTYPE html>
<html lang="ru">

      <head>
            <!-- initial -->
            <meta charset="utf-8" />
            <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible" />
            <meta content="width=device-width, initial-scale=1" name="viewport" />
			<title><?$APPLICATION->ShowTitle();?></title>
			<?$APPLICATION->ShowHead();?>
            <!-- styles -->
            <link href="/css/swiper.min.css" rel="stylesheet"/>            
          
            <link href="/css/main.css" rel="stylesheet"/>     <!-- gulp -->
            <link href="/css/custom.css" rel="stylesheet"/>     <!-- css no preprocessor -->
      </head>

      <body>
        <div id="panel">
			<?$APPLICATION->ShowPanel();?>
		</div>
            
            <div class="page-wrapper"><!-- nessesary container to push footer to the bottom of the page -->
                  <header class="page-header container"> 
                        <!-- TOP BAR -->

                        <div class="page-header__top-bar">
                              <a href="/" class="logo logo_header"></a>

                              <div class="contacts contacts_header">
                                    <a href="tel:73852506555" class="contacts__tel">
                                          <i class="icon icon_tel-white"></i>
                                          +7 (3852) 506-555
                                    </a>
                                    <a href="mailto:office@trade-pioneer.ru" class="contacts__mail">
                                          <i class="icon icon_mail-white"></i>
                                          office@trade-pioneer.ru
                                    </a>
                                    <a href="#" class="btn btn_outline-main">Напишите нам</a>
                              </div>      
                        </div>
                        
                        <!-- NAVIGATION -->
                        <?$APPLICATION->IncludeComponent(
	"bitrix:menu", 
	"menu_top", 
	array(
		"COMPONENT_TEMPLATE" => "menu_top",
		"ROOT_MENU_TYPE" => "left",
		"MENU_CACHE_TYPE" => "N",
		"MENU_CACHE_TIME" => "3600",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"MENU_CACHE_GET_VARS" => array(
		),
		"MAX_LEVEL" => "1",
		"CHILD_MENU_TYPE" => "left",
		"USE_EXT" => "N",
		"DELAY" => "N",
		"ALLOW_MULTI_SELECT" => "N"
	),
	false
);?>
                 
                  </header>

	
						