<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php');
$APPLICATION->SetPageProperty("TITLE", "ОСПЗ | Страховка от клеща");
$APPLICATION->SetTitle("ОСПЗ | Страховка от клеща");
CModule::IncludeModule("iblock");
?>



                        
                        <!-- TABS CONTAINER. REQUIRED -->
                        <div class="section-tabs section-tabs_horizontal section-tabs_level-1">

                              <!-- TABS -->
                              <div class="section-tabs__tabs container">
                                    <ul>
                                          <li  class="tab tab_big">
                                              <p>Что делать,<br/> если укусил клещ?</p>
                                              <span>Не волнуйтесь, Вы защищены. Вам надо поставить иммуноглобулин, а клеща можно сдать на анализ.</span>
                                          </li>
                                          <li class="tab tab_big">
                                              <p>Застраховаться<br/> от укуса клеща</p>
                                              <span>Карточка ОСПЗ гарантирует Вам медицинскую помощь при укусе клеща.</span>
                                          </li>
                                    </ul>
                               </div>

                               <!-- TAB-PANELS -->
                              <div class="section-tabs__content">

                                    <!-- PANEL -->
                                    <article class="slide" style="display:none;">

                                          <!-- TABS CONTAINER. REQUIRED -->
                                          <div class="section-tabs section-tabs_horizontal section-tabs_level-2">

                                                <!-- TABS -->
                                                <div class="section-tabs__tabs container">
                                                      <ul>
                                                            <li  class="tab active">
                                                                Поставить иммуноглобулин
                                                            </li>
                                                            <li onclick="filter_one_prop(2,'takingMite')" class="tab">
                                                                Сдать клеща на анализ
                                                            </li>
                                                      </ul>
                                                 </div>

                                                 <!-- TAB-PANELS -->
                                                <div class="section-tabs__content">

                                                      <!-- PANEL -->
                                                      <article class="slide">

                                                            <div class="selects container">

                                                                <form action="#" method="post" rel='1' id='form_1' name="search-params" class="search-params"> 


                                                                    <div class="search-params__region">
                                                                        <!-- <label for="region1">Выберите пункт вакцинации</label>  -->

                                                                        <!-- переключатель типа вывода -->
                                                                        <div class="showtype showtype_active-map">

                                                                          <div id="showtype_map" class="showtype__btn">
                                                                            <span class="showtype__text">Картой</span>
                                                                          </div>

                                                                          <div id="showtype_list" class="showtype__btn">
                                                                            <span class="showtype__text">Списком</span>
                                                                          </div>

                                                                        </div>
                                                                        <!-- переключатель типа вывода конец -->

                                                                        <select  onchange="get_val_form(1)" name="district" id="region1">
                                                                            <option value='all'>Все регионы</option>
                                                                          <?
                                                                          $code='district';
                                                                            $dbRes = CIBlockElement::GetList(array(), array("IBLOCK_ID" => 3, "!PROPERTY_".$code => false), array("PROPERTY_".$code));
                                                                            while ($prop_fields = $dbRes->GetNext()){
                                                                              // print_r($prop_fields);
                                                                              ?><option value='<?=$prop_fields['PROPERTY_DISTRICT_VALUE']?>'><?=$prop_fields['PROPERTY_DISTRICT_VALUE']?></option><?
                                                                            }
                                                                            ?>
                                                                        </select>
                                                                    </div>

                                                                    <div class="search-params__checkboxes">
                                                                        <label for="time1" class="fancy-checkbox">
                                                                            <input onclick=" get_val_form();" id="time1" name='isAllTime1' type="checkbox" >
                                                                            <span class="fancy-checkbox__checkmark"></span>
                                                                            Круглосуточно
                                                                        </label>
                                                                        <label for="check-klesh1" class="fancy-checkbox">
                                                                            <input onclick=" get_val_form();" id="check-klesh1" name='takingMite' type="checkbox">
                                                                            <span class="fancy-checkbox__checkmark"></span>
                                                                            Прием клеща
                                                                        </label>
                                                                        <label for="adults1" class="fancy-checkbox">
                                                                            <input onclick=" get_val_form();" id="adults1" name='adults' type="checkbox">
                                                                            <span class="fancy-checkbox__checkmark"></span>
                                                                            Прием взрослых
                                                                        </label>
                                                                        <label for="children1" class="fancy-checkbox">
                                                                            <input onclick=" get_val_form();" id="children1" name='children' type="checkbox">
                                                                            <span class="fancy-checkbox__checkmark"></span>
                                                                            Прием детей
                                                                        </label>
                                                                    </div>  
                                                                </form>

                                                            </div>
                                                              


                                                          <div class='map' id='map_1'>
                                                              <p>
                                                                  <img style="width: 100%;" src="img/map.png" alt="">
                                                              </p>   
                                                          </div>

                                                          <div class="show-list container">

                                                            <ul id="partner_1" class="h-fancy-list">

                                            <?                    $resp = CIBlockElement::GetList(array('SORT'=>'ASC'), array("IBLOCK_ID" => 3 ,'ACTIVE'=>'Y'));
                                                                    while($obs = $resp->GetNextElement()){  
                                                                      $arProps = $obs->GetProperties();                                                                    
                                                                        $arFields = $obs->GetFields();
                                                                        // print_r($arFields);
                                                                        ?>
                                                                            <li rel='<?=$arFields["ID"]?>' class="partner">
                                                                <p class="partner__address"><?=$arFields['NAME']?></p>

                                                                <?
                                                                unset($arProps['phone1']);
                                                                unset($arProps['phone2']);
                                                                unset($arProps['latitude']);
                                                                unset($arProps['longitude']);
                                                                unset($arProps['id']);
                                                                unset($arProps['name']);

                                                                  foreach ($arProps as $key => $value) {
                                                                    if ($value['VALUE']) {  
                                                                      if ($value['VALUE']=='1' or $value['VALUE']=='0') {
                                                                          if ($value['VALUE']=='1') {
                                                                           ?><p class="partner__name"><?=$value['NAME']?>: Да</p><? 
                                                                          }else{
                                                                            ?><p class="partner__name"><?=$value['NAME']?>: Нет</p><? 
                                                                          }
                                                                      }else{
                                                                      ?><p class="partner__name"><?=$value['NAME']?>: <?=$value['VALUE']?></p><? 
                                                                      }
                                                                    }
                                                                  }
                                                                ?>                                                               
                                                                                                                                         
                                                              </li>
                                                                        <?
                                                                      }
                                                                     ?>
  
                                                            

                                                            </ul>

                                                          </div>                                                       
                                                            
                                                      </article>

                                                      <!-- PANEL -->
                                                      <article class="slide" style="display:none;">
                                                            <div class="selects container">

                                                                <form action=""  rel='2' id='form_2' method="post" name="search-params" class="search-params"> 

                                                                    <div class="search-params__region">
                                                                        <label for="region2">Выберите пункт вакцинации</label> 
                                                                        <select onchange="get_val_form(2)" name="district" id="region2">
                                                                            <option value='all'>Все регионы</option>
                                                                          <?
                                                                          $code='district';
                                                                            $dbRes = CIBlockElement::GetList(array(), array("IBLOCK_ID" => 3, "!PROPERTY_".$code => false), array("PROPERTY_".$code));
                                                                            while ($prop_fields = $dbRes->GetNext()){
                                                                              // print_r($prop_fields);
                                                                              ?><option value='<?=$prop_fields['PROPERTY_DISTRICT_VALUE']?>'><?=$prop_fields['PROPERTY_DISTRICT_VALUE']?></option><?
                                                                            }
                                                                            ?>
                                                                        </select>
                                                                    </div>

                                                                    <div class="search-params__checkboxes">
                                                                        <label for="time2" class="fancy-checkbox">
                                                                            <input onclick=" get_val_form(2);" id="time2" name='isAllTime1' type="checkbox" >
                                                                            <span class="fancy-checkbox__checkmark"></span>
                                                                            Круглосуточно
                                                                        </label>
                                                                        <label for="check-klesh2" class="fancy-checkbox">
                                                                            <input onclick=" get_val_form(2);" id="check-klesh2" name='takingMite' type="checkbox">
                                                                            <span class="fancy-checkbox__checkmark"></span>
                                                                            Прием клеща
                                                                        </label>
                                                                        <label for="adults2" class="fancy-checkbox">
                                                                            <input onclick=" get_val_form(2);" id="adults2" name='adults' type="checkbox">
                                                                            <span class="fancy-checkbox__checkmark"></span>
                                                                            Прием взрослых
                                                                        </label>
                                                                        <label for="children2" class="fancy-checkbox">
                                                                            <input onclick=" get_val_form(2);" id="children2" name='children' type="checkbox">
                                                                            <span class="fancy-checkbox__checkmark"></span>
                                                                            Прием детей
                                                                        </label>
                                                                    </div>  
                                                                </form>

                                                            </div>
                                                           <div class='map' id='map_2'>
                                                              <p>
                                                                  <img style="width: 100%;" src="img/map.png" alt="">
                                                              </p>   
                                                          </div> 

                                                          <div class="container">
                                                            
                                                            <p>Возможность исследования клеща определяется доступностью пунктов приема, давностью укуса и состоянием удаленного клеща. Проводится за счет средств страховой компании (см. Программу Страховщика) или личных средств.</p>

                                                            <p>Правила сдачи клеща на исследование</p>

                                                            <ul>
                                                              <li>Для исследования на вирус клещевого энцефалита пригодны только живые клещи. </li>
                                                              <li>Высушенные, а также обработанные маслом, спиртом клещи могут дать недостоверные результаты</li>
                                                              <li>Удаленного клеща сохраняйте в чистой посуде (пузырек, баночка) вместе с увлажненной салфеткой. Доставляйте в пункт приёма в срок не более 24 часов.</li>
                                                            </ul>

                                                            <p>
                                                              Заключение лаборатории об отсутствии возбудителя не всегда гарантирует, что болезнь не разовьётся (клещ плохо сохранен, порог чувствительности тест-системы, были другие укусы), а если возбудитель выявлен - не означает, что Вы обязательно заболеете.  
                                                            </p>
                                                          </div>



                                                          

                                                      
                                                      </article>

                                                </div>
                                          </div>

                                    </article>

                                    <!-- PANEL -->
                                    <article class="slide"  style="display:none;">

                                        <div class="selects container content-container">
                                          
                                         <?include_once($_SERVER['DOCUMENT_ROOT'].'/include/get_distric.php');?>
                                        </div>

                                        <div>
                                          
                                        </div>

                                        <!-- <div class='map' id='map_5'>
                                            <p>
                                                <img style="width: 100%;" src="img/map.png" alt="">
                                            </p>   
                                        </div>  -->
                                    </article>

                              </div>
                        </div> <!-- section-tabs end-->

                        <!-- <div class="container"> -->
                            
                            
                            <div class="accordeon">

                                <article class="accordeon-item js-accordeon">
                                    <header  class="accordeon-item__label big js-accordeon__label">
                                        <p>Что делать,<br/> если укусил клещ?</p>
                                        <span>Не волнуйтесь, Вы защищены. Вам надо поставить иммуноглобулин, а клеща можно сдать на анализ.</span>
                                    </header>

                                    <div class="accordeon-item__content js-accordeon__content" style="display: none;">
                                        
                                        <div class="accordeon"> 

                                            <article class="accordeon-item js-accordeon">
                                                <header  class="accordeon-item__label js-accordeon__label">
                                                    Поставить иммуноглобулин
                                                </header>

                                                <div class="accordeon-item__content js-accordeon__content" style="display: none;">
                                                    <div class="selects container">

                                                        <form action="" rel='3' id='form_3' method="post" name="search-params" class="search-params"> 

                                                                    <div class="search-params__region">
                                                                        <label for="region1-1">Выберите пункт вакцинации</label> 
                                                                        <select  onchange="get_val_form(3)" name="district" id="region1-1">
                                                                            <option value='all'>Все регионы</option>
                                                                          <?
                                                                          $code='district';
                                                                            $dbRes = CIBlockElement::GetList(array(), array("IBLOCK_ID" => 3, "!PROPERTY_".$code => false), array("PROPERTY_".$code));
                                                                            while ($prop_fields = $dbRes->GetNext()){
                                                                              // print_r($prop_fields);
                                                                              ?><option value='<?=$prop_fields['PROPERTY_DISTRICT_VALUE']?>'><?=$prop_fields['PROPERTY_DISTRICT_VALUE']?></option><?
                                                                            }
                                                                            ?>
                                                                        </select>
                                                                    </div>

                                                                    <div class="search-params__checkboxes">
                                                                        <label for="time1-1" class="fancy-checkbox">
                                                                            <input onclick=" get_val_form(3);" id="time1-1" name='isAllTime1' type="checkbox" >
                                                                            <span class="fancy-checkbox__checkmark"></span>
                                                                            Круглосуточно
                                                                        </label>
                                                                        <label for="check-klesh1-1" class="fancy-checkbox">
                                                                            <input onclick=" get_val_form(3);" id="check-klesh1-1" name='takingMite' type="checkbox">
                                                                            <span class="fancy-checkbox__checkmark"></span>
                                                                            Прием клеща
                                                                        </label>
                                                                        <label for="adults1-1" class="fancy-checkbox">
                                                                            <input onclick=" get_val_form(3);" id="adults1-1" name='adults' type="checkbox">
                                                                            <span class="fancy-checkbox__checkmark"></span>
                                                                            Прием взрослых
                                                                        </label>
                                                                        <label for="children1-1" class="fancy-checkbox">
                                                                            <input onclick=" get_val_form(3);" id="children1-1" name='children' type="checkbox">
                                                                            <span class="fancy-checkbox__checkmark"></span>
                                                                            Прием детей
                                                                        </label>
                                                                    </div>  
                                                                </form>

                                                    </div>

                                                          <div class='map' id='map_3'>
                                                              <p>
                                                                  <img style="width: 100%;" src="img/map.png" alt="">
                                                              </p>   
                                                          </div>                                                         
                                                </div>
                                            </article>

                                            <article  class="accordeon-item js-accordeon">
                                                <header onclick="filter_one_prop(4,'takingMite')" class="accordeon-item__label js-accordeon__label">
                                                    Сдать клеща на анализ
                                                </header>

                                                <div class="accordeon-item__content js-accordeon__content" style="display: none;">
                                                    <div class="selects container">

                                                        <form action="" rel='4' id='form_4' method="post" name="search-params" class="search-params"> 

                                                                    <div class="search-params__region">
                                                                        <label for="region66">Выберите пункт вакцинации</label> 
                                                                        <select onchange="get_val_form(4)" name="district" id="region66">
                                                                            <option value='all'>Все регионы</option>
                                                                          <?
                                                                          $code='district';
                                                                            $dbRes = CIBlockElement::GetList(array(), array("IBLOCK_ID" => 3, "!PROPERTY_".$code => false), array("PROPERTY_".$code));
                                                                            while ($prop_fields = $dbRes->GetNext()){
                                                                              // print_r($prop_fields);
                                                                              ?><option value='<?=$prop_fields['PROPERTY_DISTRICT_VALUE']?>'><?=$prop_fields['PROPERTY_DISTRICT_VALUE']?></option><?
                                                                            }
                                                                            ?>
                                                                        </select>
                                                                    </div>

                                                                    <div class="search-params__checkboxes">
                                                                        <label for="time2-1" class="fancy-checkbox">
                                                                            <input onclick=" get_val_form(4);" id="time2-1" name='isAllTime1' type="checkbox" >
                                                                            <span class="fancy-checkbox__checkmark"></span>
                                                                            Круглосуточно
                                                                        </label>
                                                                        <label for="check-klesh2-1" class="fancy-checkbox">
                                                                            <input onclick=" get_val_form(4);" id="check-klesh2-1" name='takingMite' type="checkbox">
                                                                            <span class="fancy-checkbox__checkmark"></span>
                                                                            Прием клеща
                                                                        </label>
                                                                        <label for="adults2-1" class="fancy-checkbox">
                                                                            <input onclick=" get_val_form(4);" id="adults2-1" name='adults' type="checkbox">
                                                                            <span class="fancy-checkbox__checkmark"></span>
                                                                            Прием взрослых
                                                                        </label>
                                                                        <label for="children2-1" class="fancy-checkbox">
                                                                            <input onclick=" get_val_form(4);" id="children2-1" name='children' type="checkbox">
                                                                            <span class="fancy-checkbox__checkmark"></span>
                                                                            Прием детей
                                                                        </label>
                                                                    </div>  
                                                                </form>

                                                    </div>
                                                          <div class='map' id='map_4'>
                                                              <p>
                                                                  <img style="width: 100%;" src="img/map.png" alt="">
                                                              </p>   
                                                          </div>                                                
                                                </div>
                                            </article>


                                        </div> 

                                    </div>
                                </article>


                                <article class="accordeon-item js-accordeon">
                                    <header class="accordeon-item__label big js-accordeon__label">
                                        <p>Застраховаться<br/> от укуса клеща</p>
                                        <span>Cтраховой полис ОСПЗ гарантирует Вам медицинскую помощь при укусах клещей.</span>
                                    </header>

                                    <div class="accordeon-item__content js-accordeon__content" style="display: none;">
                                      <?include_once($_SERVER['DOCUMENT_ROOT'].'/include/get_distric_min.php');?>
                                    </div>

                                        <div>
                                          
                                        </div>

                                    </article>

                              </div>
                                        

                                    </div>
                                </article>

                            </div>

                        <!-- </div> -->

<!-- <input onclick=" get_val_form();" onclick="showMarkers();" type="button" value="Показать"> -->

<!-- <input onclick=" get_val_form();" onclick="filter_one_prop('isAllTime1');" type="button" value="Свойства"> -->

                        <div class="container">
                              <div class="about-section">
                                    <section class="about-item">
                                          <h2>Что такое клещевой энцефалит?</h2>
                                          <p>Клещевой энцефалит является природно-очаговой острой вирусной инфекционной болезнью с трансмиссивным механизмом передачи возбудителя. Характеризуется преимущественным поражением центральной нервной системы, отличается полиморфизмом клинических проявлений и тяжестью течения. Последствия заболевания разнообразны - от полного выздоровления до нарушений здоровья, приводящих к инвалидности, вследствие высокой степени хронизации (до 30%), и смерти.</p>
                                          <ul class="h-no-bullets">
                                                <li><a href="/documents/o-kleshchevykh-infektsiyakh/">Подробнее о клещевом энцефалите</a></li>
                                                <!-- <li><a href="#">Все ли клещи заразны?</a></li> -->
                                                <!-- <li><a href="#">Где распространен энцефалит?</a></li> -->
                                                <!-- <li><a href="/documents/chto-takoe-immunoglobulin/">Что такое прививка от клещевого энцефалита?</a></li> -->
                                                <!-- <li><a href="/documents/chto-takoe-immunoglobulin/">Что такое страховка от клеща?</a></li> -->
                                                <!-- <li><a href="/documents/chto-takoe-immunoglobulin/">Что такое иммуноглобулин?</a></li> -->

                                                <li><a href="/documents/chto-delat-pri-ukuse-kleshcha/">Что делать при укусе клеща?</a></li>
                                                <li><a href="/documents/kak-pravilno-udalit-kleshcha/">Как правильно удалить клеща?</a></li>
                                                <li><a href="/documents/o-kleshchevykh-infektsiyakh/">О клещевых инфекциях</a></li>
                                                <li><a href="/documents/chto-takoe-immunoglobulin/">Что такое иммуноглобулин?</a></li>
                                                <li><a href="/documents/o-servisnoy-programme-ospz/">О сервисной программе ОСПЗ</a></li>
                                                <li><a href="/documents/zelenaya-kartochka/">Зеленая карточка</a></li>
                                          </ul>
                                    </section>
                                    <section class="about-item">
                                          <h2>О программе ОСПЗ</h2>
                                          <div class="program">
                                              <div class="program__card"><img src="img/card.jpg" width="120" alt="Медицинская карточка"></div>
                                              <div class="program__text"><p>
                                                     Программа «Объединенная Сибирская Противоклещевая Защита» (ОСПЗ) направлена на обеспечение надежной и доступной для широких слоев населения системы оказания медицинских услуг по экстренной <span class="tooltip" data-tip="Введение противоклещевого иммуноглобулина">серопрофилактике</span> клещевого энцефалита через добровольное медицинское страхование (ДМС) по всей территории Сибири при партнерском объединенном взаимодействии большого количества лечебных учреждений и страховых компаний посредством операторов медицинских услуг. 
                                                  </p>
                                                  <ul class="h-no-bullets">
                                                        <li><a href="/documents/o-servisnoy-programme-ospz/">Подробнее о программе</a></li>
                                                        <li><a href="/documents/zastrakhovatsya-br-ot-ukusa-kleshcha/">Операторы программы ОСПЗ в регионах</a></li>
                                                  </ul></div>
                                          </div>
                                    </section>
                                </div>
                            </div>

                            <div class="h-bg">
                                <div class="container">
                                    <div class="about-section">
                                        <section class="about-item">
                                              <h2>Скачайте мобильное приложение </h2>
                                              <p>С помощью мобильного приложения Вы сможете найти ближайший к Вам пункт <span class="tooltip" data-tip="Введение противоклещевого иммуноглобулина">серопрофилактики</span> с указанием его на карте и проложить маршрут, используя самые последние технологии навигации, оставаться в курсе последних новостей ОСПЗ, получить оперативную информацию о том как действовать в случае укуса клеща и многое другое. <br>
                                              Позаботьтесь о безопасном отдыхе на природе, установите бесплатное мобильное приложение ОСПЗ в Ваш смартфон!</p>
                                              <ul class="h-no-bullets">
                                                    <li><a href="http://app.sibpz.ru/">Подробнее о приложении</a></li>
                                              </ul>
                                        </section>

                                        <section class="download">
                                                  <div class="download__tel"></div>

                                                  <div class="download__info">
                                                      <p>Отсканируйте QR код или скачайте из вашего marketplace</p>
                                                        <div class="download-links">
                                                              <div class="download-links__qr"></div>
                                                              <div class="download-links__app">
                                                                <a href="https://itunes.apple.com/us/app/ospz/id960750092?l=ru"></a>
                                                                <a href="https://play.google.com/store/apps/details?id=ru.sibpz.ospz"></a>
                                                              </div>
                                                        </div>
                                                  </div>

                                        </section>

                                        

                                    </div>
                                    
                                </div>
                            </div>

<?include_once($_SERVER['DOCUMENT_ROOT'].'/include/map.php');

require($_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php');
?>