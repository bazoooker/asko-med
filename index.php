<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php');
CModule::IncludeModule("iblock");
?>



                        
                        <!-- TABS CONTAINER. REQUIRED -->
                        <div class="section-tabs section-tabs_horizontal section-tabs_level-1">

                              <!-- TABS -->
                              <div class="section-tabs__tabs container">
                                    <ul>
                                          <li onclick="filter_one_prop(1,'isAllTime1')"  class="tab tab_big">
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
                                                            <li onclick="filter_one_prop(1,'isAllTime1')" class="tab active">
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
                                                                        <label for="region1">Выберите пункт вакцинации</label> 
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
                                                                            <input id="check-klesh1" name='takingMite' type="checkbox">
                                                                            <span class="fancy-checkbox__checkmark"></span>
                                                                            Прием клеща
                                                                        </label>
                                                                        <label for="adults1" class="fancy-checkbox">
                                                                            <input id="adults1" name='adults' type="checkbox">
                                                                            <span class="fancy-checkbox__checkmark"></span>
                                                                            Прием взрослых
                                                                        </label>
                                                                        <label for="children1" class="fancy-checkbox">
                                                                            <input id="children1" name='children' type="checkbox">
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
                                                                            <input id="time2" name='isAllTime1' type="checkbox" >
                                                                            <span class="fancy-checkbox__checkmark"></span>
                                                                            Круглосуточно
                                                                        </label>
                                                                        <label for="check-klesh2" class="fancy-checkbox">
                                                                            <input id="check-klesh2" name='takingMite' type="checkbox">
                                                                            <span class="fancy-checkbox__checkmark"></span>
                                                                            Прием клеща
                                                                        </label>
                                                                        <label for="adults2" class="fancy-checkbox">
                                                                            <input id="adults2" name='adults' type="checkbox">
                                                                            <span class="fancy-checkbox__checkmark"></span>
                                                                            Прием взрослых
                                                                        </label>
                                                                        <label for="children2" class="fancy-checkbox">
                                                                            <input id="children2" name='children' type="checkbox">
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

                                            <form action="" id='form_dub_1' method="post" name="search-params" class="search-params"> 

                                                <div class="search-params__region search-params__region_centered">
                                                    <label for="region3">Выберите регион</label> 
                                                      <select name="district" id="region3">
                                                            <option value='all'>Все регионы</option>
                                                          <?
                                                          $code='district';
                                                            $dbRes = CIBlockElement::GetList(array(), array("IBLOCK_ID" => 2, "!PROPERTY_".$code => false), array("PROPERTY_".$code));
                                                            while ($prop_fields = $dbRes->GetNext()){
                                                              // print_r($prop_fields);
                                                              ?><option value='<?=$prop_fields['PROPERTY_DISTRICT_VALUE']?>'><?=$prop_fields['PROPERTY_DISTRICT_VALUE']?></option><?
                                                            }
                                                            ?>
                                                        </select>
                                                </div>

                                            </form>




                                               <div class="accordeon" style="display: block;"> <!-- обертка 2 уровня-->

                                                  <article class="accordeon-item opened js-accordeon"><!-- аккордеон 2 уровня -->
                                                      <header class="accordeon-item__label js-accordeon__label">
                                                          Алтайский край
                                                      </header>

                                                      <div class="accordeon-item__content js-accordeon__content">


<ul class="h-fancy-list">

    <li class="partner">

    <p class="partner__address">г. Барнаул, 656056, ул. Гоголя, д. 36,</p>
    <p class="partner__name">ЗАО АСК "Инвестстрах" Барнаульский филиал</p>
    <p class="partner__name">Часы работы: понедельник - четверг: с 9.00 до 18.00 пятница и предпраздничные дни: с 9.00 до 17.00
        Тел.: +7(3852) 53-24-70</></p>

    </li>

    <li class="partner">

    <p class="partner__address"> Барнаул, 656006, ул. Балтийская, д. 45, офис 303, </p>
    <p class="partner__name">Агентство «СК Екатеринбург» в г. Барнауле</p>
    <p class="partner__info">Тел.: +7(3852) 73-04-64</p>

    </li>

    <li class="partner">

    <p class="partner__address"> Барнаул, Ленина 22, 4 этаж, </p>
    <p class="partner__name">АО "СОГАЗ"</p>
    <p class="partner__info">Тел.: +7(3852) 201-202, серия 22-004</p>

    </li>

    <li class="partner">

    <p class="partner__address"> Барнаул, пр. Комсомольский 75, </p>
    <p class="partner__name">ООО Алтайский центр страхования «Страховая компания «СДС»</p>
    <p class="partner__info">Тел.: +7(385-2) 25-45-19, 66-70-79, серия 22-088</p>

    </li>

    <li class="partner">

    <p class="partner__address"> Барнаул, пр. Красноармейский 36, </p>
    <p class="partner__name">САО "ЭРГО" Барнаульское представительство</p>
    <p class="partner__info">Тел.: +7(385-2) 28-26-07, 28-26-08, серия 22-072</p>

    </li>

    <li class="partner">

    <p class="partner__address"> Барнаул, пр. Красноармейский51а оф. 709, </p>
    <p class="partner__name">Барнаульское агентство ООО СО "ВЕРНА"</p>
    <p class="partner__info">Тел.: +7(385-2)29-99-60</p>

    </li>

    <li class="partner">

    <p class="partner__address"> Барнаул, пр. Социалистический, 45, </p>
    <p class="partner__name">ООО "НСГ-РОСЭНЕРГО" Алтайский филиал</p>
    <p class="partner__info">Тел.: +7(385-2) 65-80-39, серия 22-082</p>

    </li>

    <li class="partner">

    <p class="partner__address"> Барнаул, пр-т Калинина, 6А, </p>
    <p class="partner__name">СПАО «РЕСО-Гарантия»</p>
    <p class="partner__info">Тел.: +7 (3852) 582–135,+7 (3852) 582–119, +7 (3852) 580–061</p>

    <br/>
    Примечание: серия 22-005</li>

    <li class="partner">

    <p class="partner__address"> Барнаул, пр-т Красноармейский, д. 72, </p>
    <p class="partner__name">ЗАО "МАКС"</p>
    <p class="partner__info">Часы работы: понедельник - четверг: с 9.00 до 18.00 пятница и предпраздничные дни: с 9.00 до 17.00. обед 13.00-14.00. 
    Суббота и воксресенье-выходные</p>
    Тел.: +7 (3852) 63-58-85; +7 (3852) 63-64-76</li>

    <li class="partner">

    <p class="partner__address"> Барнаул, Пушкина 21, </p>
    <p class="partner__name">ООО "Зетта страхование" филиал в г. Барнауле</p>
    <p class="partner__info">Тел.: +7(385-2) 28-22-55, серия 22-026</p>

    </li>

    <li class="partner">

    <p class="partner__address"> Барнаул, ул. Гоголя 36 оф. 410,417, 420, 423, </p>
    <p class="partner__name">АО Альфастрахование (Алтайский филиал)</p>
    <p class="partner__info">Тел.: +7(385-2)201-086, серия 22-045</p>

    </li>

    <li class="partner">

    <p class="partner__address"> Барнаул, ул. Гоголя 47/ пр. Ленина 10, </p>
    <p class="partner__name">ООО "Страховое общество "Сургутнефтегаз"</p>
    <p class="partner__info">Тел.: +7(385-2) 63-67-32, 89-047</p>

    </li>

    <li class="partner">

    <p class="partner__address"> Барнаул, ул. Гоголя 87, </p>
    <p class="partner__name">САО "ВСК"</p>
    <p class="partner__info">Тел.: +7(385-2) 55-39-18, серия 22-002</p>

    </li>

    <li class="partner">

    <p class="partner__address"> Барнаул, ул. Короленко, 74, </p>
    <p class="partner__name">ПАО "САК "Энергогарант"</p>
    <p class="partner__info">Тел.: +7(385-2)56-71-74, серия 22-014</p>

    </li>

    <li class="partner">

    <p class="partner__address"> Барнаул, ул. Малахова, 88 В, </p>
    <p class="partner__name">ООО СК «ВТБ Страхование»</p>
    <p class="partner__info">Тел.: +7(385-2) 567000, серия 22-058</p>

    </li>

    <li class="partner">

    <p class="partner__address"> Барнаул, ул. Партизанская,40, серия 22-090, Филиал "АСКО-МЕД" </p>
    <p class="partner__name">ООО "Страховая компания "АРСЕНАЛЪ"</p>
    <p class="partner__info">Тел.: +7(385-2) 35-42-03</p>

    </li>

    <li class="partner">

    <p class="partner__address"> Барнаул, ул. Пролетарская 131, </p>
    <p class="partner__name">ООО "Гелиос" Барнаульское представительство</p>
    <p class="partner__info">Тел.: +7(385-2) 201421, серия 22-039</p>

    </li>

    <li class="partner">

    <p class="partner__address"> Барнаул, ул. Профинтерна, 24, </p>
    <p class="partner__name">ООО "СК "Согласие"</p>
    <p class="partner__info">Тел.: +7(385-2) 36-40-28, серия 22-034</p>

    </li>

    <li class="partner">

    <p class="partner__address"> Бийск, г.Бийск, ул. Советская 205/1 , </p>
    <p class="partner__name">АО «ГСК «Югория» Бийский филиал</p>
    <p class="partner__info">Часы работы: понедельник-пятница: с 9.00 до 18.00, обед 13.00-14.00; выходные-суббота,воскресенье Тел.: +7(3854)-36-45-00, 36-78-31    Примечание: Номер карточки 22-110</p>

    
   </li>

    <li class="partner">

    <p class="partner__address"> Бийск, ул. Социалистическая, 96, оф. 13, </p>
    <p class="partner__name">ЗАО "АСК "Инвестстрах" Бийский филиал</p>
    <p class="partner__info">Тел.: +7 (3854) 55-55-96</p>

    </li>

    <li class="partner">

    <p class="partner__address"> Бийск, ул.Васильева, 59/1, </p>
    <p class="partner__name">ООО "НСГ-РОСЭНЕРГО" Бийский филиал</p>
    <p class="partner__info">Тел.: +7 (3854) 55</p>

    5-198
    Примечание: серия 22-081</li>

    <li class="partner">

    <p class="partner__address"> Рубцовск, 658201, Алтайский край, г.Рубцовск, ул. Калинина, 14-1, </p>
    <p class="partner__name">ООО НСГ-РОСЭНЕРГО Рубцовский филиал</p>
    <p class="partner__info">Часы работы: понедельник - четверг: с 9.00 до 18.00 пятница и предпраздничные дни: с 9.00 до 17.00 Тел.: +7 (385-57) 5-99-24</p>

    </li>

</ul>
                                                              


                                                                <!-- <div class='map' id='map_3'>
                                                                    <p>
                                                                        <img style="width: 100%;" src="img/map.png" alt="">
                                                                    </p>   
                                                                </div> -->                                                         
                                                      </div>
                                                  </article><!-- END таб 2 уровня --> 


                                                  <article class="accordeon-item opened js-accordeon"><!-- аккордеон 2 уровня -->
                                                      <header class="accordeon-item__label js-accordeon__label">
                                                          Иркутская область
                                                      </header>

                                                      <div class="accordeon-item__content js-accordeon__content">



<ul class="h-fancy-list">

    <li class="partner">
      <p class="partner__address">г. Иркутск, 664003, г. Иркутск ул. Коммунаров, 1А</p>
      <p class="partner__name">ООО "Зетта Страхование" </p>
      <p class="partner__info">Часы работы: понедельник - четверг: с 9.00 до 18.00 пятница и предпраздничные дни: с 9.00 до 16.45. перерыв 13.00-13.45
Тел.: +7(3952) 783-788, 783-789, 8 (800) 700-77-07
Примечание: Номер карточки 38-026</p>        
    </li>

    <li class="partner">
      <p class="partner__address">г. Иркутск, г.Иркутск, улица Дзержинского, 40, офис 5</p>
      <p class="partner__name">ООО СО "ВЕРНА"</p>
      <p class="partner__info">Часы работы: понедельник-пятница: с 9.00 до 18.00, обед 13.00-14.00; выходные-суббота,воскресенье
Тел.: +7 (3952) 728–799
Примечание: Номер карточки 38-074</p>        
    </li> 

    <li class="partner">
      <p class="partner__address">Иркутск, ул. Цесовская Набережная, 2</p>
      <p class="partner__name">ООО СК Гелиос Иркутский филиал</p>
    </li>   

</ul>




                                                                                                                        
                                                      </div>
                                                  </article><!-- END таб 2 уровня -->

                                                  <article class="accordeon-item opened js-accordeon"><!-- аккордеон 2 уровня -->
                                                      <header class="accordeon-item__label js-accordeon__label">
                                                          Кемеровская область
                                                      </header>

                                                      <div class="accordeon-item__content js-accordeon__content">



<ul class="h-fancy-list">

    <li class="partner">
      <p class="partner__address">г. Кемерово, пр. Ленина 90/5</p>
      <p class="partner__name">ООО СК Гелиос Кемеровский филиал</p>
      <p class="partner__info">Тел.: +7 (3842)45-25-27</p>        
    </li>

    <li class="partner">
      <p class="partner__address">г. Кемерово, пр. Советский 60Б</p>
      <p class="partner__name">ООО НСГ РОСЭНЕРГО Кемеровский филиал</p>
      <p class="partner__info">Тел.: +7 (3842)34-93-44</p>        
    </li> 

    <li class="partner">
      <p class="partner__address">г. Кемерово, пр.Ленина, 33, корп.2</p>
      <p class="partner__name">САО «ВСК»</p>
      <p class="partner__info">Тел.: +7 (3842) 44-15-82 (доб. 143)</p>        
    </li> 

    <li class="partner">
      <p class="partner__address">г. Кемерово, ул. 50 лет Октября, 11</p>
      <p class="partner__name">ООО "РОСГОССТРАХ"</p>
      <p class="partner__info">Тел.: +7 (3842) 39-05-69</p>        
    </li> 

    <li class="partner">
      <p class="partner__address">г. Кемерово, ул. Кирова, 32</p>
      <p class="partner__name">АО «АльфаСтрахование»</p>
      <p class="partner__info">Тел.: +7 (3842) 36-31-85</p>        
    </li> 

    <li class="partner">
      <p class="partner__address">г. Кемерово, ул. Мичурина</p>
      <p class="partner__name">ООО "Зетта Страхование" филиал в Кемерово</p>
    </li> 

    <li class="partner">
      <p class="partner__address">г. Кемерово, ул. Свободы</p>
      <p class="partner__name">АО «СОГАЗ»</p>
      <p class="partner__info">Тел.: +7 (3842) 45-55-33, 45-46-85</p>        
    </li> 

    <li class="partner">
      <p class="partner__address">г. Кемерово, ул.Большевистсвкая, 2</p>
      <p class="partner__name">ООО "Страховая компания "Согласие"</p>
      <p class="partner__info">Тел.: +7 (3842) 57-59-22, 57-64-05</p>        
    </li> 

    <li class="partner">
      <p class="partner__address">г. Кемерово, ул.Весенняя, 5</p>
      <p class="partner__name">ООО СК "Сибирский дом страхования"</p>
      <p class="partner__info">Тел.: +7 (3842) 36-10-23</p>        
    </li> 

    <li class="partner">
      <p class="partner__address">г. Белово, пер.Цинкзаводской, 8 А</p>
      <p class="partner__name">ОАО СК "БАСК"</p>
      <p class="partner__info">Тел.: +7 (38452) 2-11-12</p>        
    </li> 

    <li class="partner">
      <p class="partner__address">г. Новокузнецк, Кузнецкстроевский проспект 13</p>
      <p class="partner__name">АО СК "Сибирский спас"</p>
    </li>     

</ul>




                                                                                                                        
                                                      </div>
                                                  </article><!-- END таб 2 уровня -->

                                                  <article class="accordeon-item opened js-accordeon"><!-- аккордеон 2 уровня -->
                                                      <header class="accordeon-item__label js-accordeon__label">
                                                          Красноярский край
                                                      </header>

                                                      <div class="accordeon-item__content js-accordeon__content">



<ul class="h-fancy-list">

<li class="partner">
    <p class="partner__address">г. Красноярск, г. Красноярск, пр. Мира, 19 стр.1,</p>
    <p class="partner__name">Красноярский филиал АО "СОГАЗ"</p>
    <p class="partner__info">Часы работы: пн. - чт. 8.00 - 19.00; пт. 8.00 - 17.45; сб. - вс. выходные
    Тел.: +7 (391) 202-66-99
    Примечание: серия м.к. 24-004</p> 
</li>

<li class="partner">    
    <p class="partner__address">г. Красноярск, 660049, Красноярский край, г.Красноярск ул. Урицкого, 117, офис 501,</p>
    <p class="partner__name">Страховая компания ООО "НСГ-РОСЭНЕРГО" в Красноярске</p>
    <p class="partner__info">Часы работы: 9-00 до 18-00 обед 13-14; пятница до 17-00
    Тел.: +7 (39-12) 27-17-14
    Примечание: серия м.к. 24-087</p> 
     </li>

<li class="partner">
    <p class="partner__address">г. Красноярск, 660118, Красноярск, ул. Урванцева, 7,</p>
    <p class="partner__name">Страховая компания «Либерти Страхование (КИТ Финанс)» в Красноярске</p>
    <p class="partner__info">Часы работы: Пн–Пт 09.00–18.00, перерыв 13.00–14.00;
    Тел.: +7 (391) 205-23-23, серия м.к. 24-061</p> 
     </li>
<li class="partner">    
    <p class="partner__address">г. Красноярск, Алексеева 113,</p>
    <p class="partner__name">ООО «Страховая компания «Согласие»</p>
    <p class="partner__info">Тел.: +7 (391) 223-04-24, 223-03-31, 251-51-64
    Примечание: серия м.к. 24-034</p> 
     </li>
<li class="partner">    
    <p class="partner__address">г. Красноярск, г. Красноярск ул. Молокова, 46,</p>
    <p class="partner__name">АО "СОГАЗ"</p>
    <p class="partner__info">Часы работы: пн. - чт. 8.00 - 19.00; пт. 8.00 - 17.45; сб. - вс. выходные
    Тел.: +7 (3912) 223-30-60; 223-29-60
    Примечание: серия м.к. 24-004</p> 
     </li>
<li class="partner">    
    <p class="partner__address">г. Красноярск, Красноярск, ул. 9 мая, 55, оф. 294 ,</p>
    <p class="partner__name">АО «Государственная страховая компания «Югория» Красноярский Филиал</p>
    <p class="partner__info">Часы работы: ПН — ПТ: 9.00 — 18.00 перерыв: 13.00 — 14.00
    Тел.: +7 (391) 206-84-27, 206-84-28
    Примечание: серия м.к. 24-010</p> 
     </li>
<li class="partner">    
    <p class="partner__address">г. Красноярск, Российская Федерация, Красноярский край, Красноярск г., Авиаторов улица, 31,</p>
    <p class="partner__name">ГЕЛИОС, страховая компания</p>
    <p class="partner__info">Часы работы: 9-00-18-00 обед 13-14
    Тел.: +7(391)205-15-65; 8-800-100-70-07, серия м.к. 24-062</p> 
     </li>
<li class="partner">    
    <p class="partner__address">г. Красноярск, Российская Федерация, Красноярский край, Красноярск г., Батурина улица, 5, этаж 1, оф. № 80,</p>
    <p class="partner__name">СИБИРСКИЙ СПАС, страховая компания</p>
    <p class="partner__info">Часы работы: 9.00-18.00, сб, вс - вых.
    Тел.: +7 (391)254-27-40, 205-05-53
    Примечание: www.sibspas.ru, серия м.к.19-053</p> 
     </li>
<li class="partner">    
    <p class="partner__address">г. Красноярск, ул. Ады Лебедевой д. 22,</p>
    <p class="partner__name">ООО "Группа Ренессанс Страхование"</p>
    <p class="partner__info">Тел.: +7 (391) 274-46-88,274-46-80, 227-76-70, круглосуточный: 8-800-333-88-00
    Примечание: серия м.к.22-037</p> 
     </li>
 <li class="partner">   
    <p class="partner__address">г. Красноярск, ул. Горького 20,</p>
    <p class="partner__name">ОАО «АльфаСтрахование»</p>
    <p class="partner__info">Тел.: +7 (391) 252-93-06, круглосуточный: 8-800-1000-306
    Примечание: серия м.к. 24-045</p> 
     </li>
<li class="partner">    
    <p class="partner__address">г. Красноярск, ул. Мате Залки д.19,</p>
    <p class="partner__name">ПАО «САК «Энергогарант»</p>
    <p class="partner__info">Тел.: +7 (391) 276-62-09, 276-62-08
    Примечание: серия м.к.24-014</p> 
     </li>
<li class="partner">    
    <p class="partner__address">г. Ачинск, ул. Декабристов 55,</p>
    <p class="partner__name">ООО «Страховая компания «Согласие»</p>
    <p class="partner__info">Тел.: (39151) 7-58-35, серия м.к. 24-034</p> 
     </li>
<li class="partner">    
    <p class="partner__address">г. Ачинск, г. Ачинск, мкр. 7, д.9А, пом. 74 ,</p>
    <p class="partner__name">Ачинское подразделение, Красноярский филиал АО "СОГАЗ"</p>
    <p class="partner__info">Часы работы: пн. - чт. 8.00 - 19.00; пт. 8.00 - 17.45; сб. - вс. выходные
    Тел.: тел.(39151) 6-20-46, серия м.к. 24-004</p> 
     </li>
<li class="partner">    
    <p class="partner__address">г. Железногорск, ул. Ленина 24/22 офис 29,</p>
    <p class="partner__name">ООО «Страховая компания «Согласие»</p>
    <p class="partner__info">Тел.: +7 (39197) 4-63-51, 4-66-25
    Примечание: серия м.к. 24-034</p> 
     </li>
<li class="partner">    
    <p class="partner__address">г. Железногорск, г. Железногорск ул. Маяковского, д.6 офис 105,</p>
    <p class="partner__name">Железногорское подразделение, Красноярский филиал АО "СОГАЗ"</p>
    <p class="partner__info">Часы работы: пн. - чт. 8.00 - 19.00; пт. 8.00 - 17.45; сб. - вс. выходные
    Тел.: +7 (3919) 75-80-25
    Примечание: серия м.к. 24-004</p> 
     </li>
<li class="partner">    
    <p class="partner__address">г. Зеленогорск, ул. Гагарина 46, 1-й этаж,</p>
    <p class="partner__name">ООО «Страховая компания «Согласие»</p>
    <p class="partner__info">Тел.: +7 (39169) 3-82-82, 4-36-63
    Примечание: серия м.к. 24-034</p> 
     </li>
<li class="partner">    
    <p class="partner__address">г. Зеленогорск, г. Зеленогорск ул. Набережная, 52,</p>
    <p class="partner__name">Зеленогорское подразделение, Красноярский филиал АО "СОГАЗ"</p>
    <p class="partner__info">Часы работы: пн. - чт. 8.00 - 19.00; пт. 8.00 - 17.45; сб. - вс. выходные
    Тел.: +7 (39169) 3-05-03
    Примечание: серия м.к. 24-004</p> 
     </li>
<li class="partner">    
    <p class="partner__address">г. Канск, ул. Советская 8,</p>
    <p class="partner__name">ООО «Страховая компания «Согласие»</p>
    <p class="partner__info">Тел.: +7 (39161) 3-14-68
    Примечание: серия м.к. 24-034</p> 
     </li>
<li class="partner">    
    <p class="partner__address">г. Лесосибирск, 5-й микрорайон д.26,</p>
    <p class="partner__name">ООО «Страховая компания «Согласие»</p>
    <p class="partner__info">Тел.: +7 (39145) 5-44-68, 5-40-47
    Примечание: серия 24-034</p> 
     </li>
 <li class="partner">   
    <p class="partner__address">г. Минусинск, ул. Красных партизан 9,</p>
    <p class="partner__name">ООО «Страховая компания «Согласие»</p>
    <p class="partner__info">Тел.: +7 (39132) 2-05-89
    Примечание: серия м.к. 24-034</p> 
     </li>
 <li class="partner">   
    <p class="partner__address">г. Назарово, г. Назарово, ул. 30 лет ВЛКСМ, д. 74,</p>
    <p class="partner__name">Назаровское подразделение, Красноярский филиал АО "СОГАЗ"</p>
    <p class="partner__info">Часы работы: пн. - чт. 8.00 - 19.00; пт. 8.00 - 17.45; сб. - вс. выходные
    Тел.: +7 (39155) 5-70-70
    Примечание: серия м.к. 24-004</p> 
     </li>
 <li class="partner">   
    <p class="partner__address">г. Шарыпово, м-н Пионерный д.16 оф.13,</p>
    <p class="partner__name">ООО «Страховая компания «Согласие»</p>
    <p class="partner__info">Тел.: +7 (39151) 27-8-17
    Примечание: серия м.к. 24-034</p> 
     </li>

</ul>




                                                                                                                        
                                                      </div>
                                                  </article><!-- END таб 2 уровня -->

                                                  <article class="accordeon-item opened js-accordeon"><!-- аккордеон 2 уровня -->
                                                      <header class="accordeon-item__label js-accordeon__label">
                                                          Новосибирская область
                                                      </header>

                                                      <div class="accordeon-item__content js-accordeon__content">



<ul class="h-fancy-list">

<li class="partner">
    <p class="partner__address">г. Новосибирск, 630099, ул. Чаплыгина, 93, офис 201, </p>
    <p  class="partner__name">ЗАО "МАКС"</p>
    <p class="partner__info">Часы работы: понедельник-пятница: с 9.00 до 20.00, суббота: с 10.00 до 16.00; выходной: воскресенье
        Тел.: +7 (383) 220–50–41; +7 (383) 220–50–42
        Примечание: Медицинская карточка 54-076</p>
    
<li class="partner">
    <p class="partner__address">г. Новосибирск, 630005, г. Новосибирск, ул. Фрунзе, д.86 , </p>
    <p  class="partner__name">ООО "ЦСО"</p>
    <p class="partner__info">Часы работы: пн-чт. с 9:00 до 18:00, пт.с 9:00 до 16:45, сб.вс. - выходной
        Тел.: +7 (383) 362-46-45</p>
</li>     
<li class="partner">
    <p class="partner__address">г. Новосибирск, 630007 г. Новосибирск, ул. Коммунистическая 35, </p>
    <p  class="partner__name">АО СК "Сибирский спас"</p>
    <p class="partner__info">Тел.: +7(383)266-97-25, серия 54-053</p>
 </li>    
<li class="partner">
    <p class="partner__address">г. Новосибирск, 630099 г. Новосибирск, ул. Ядринцевская, 72, </p>
    <p  class="partner__name">ООО СО "ВЕРНА"</p>
    <p class="partner__info">Тел.: +7 (383)209-54-44, серия 54-074</p>
 </li>    
<li class="partner">
    <p class="partner__address">г. Новосибирск, 630099 г. Новосибирск, ул. Ядринцевская, 72 офис 504, </p>
    <p  class="partner__name">ООО СК Екатеринбург</p>
    <p class="partner__info">Тел.: +7 (383)2804669, серия 54-075</p>
  </li>   
<li class="partner">
    <p class="partner__address">г. Новосибирск, Красный проспект 39, </p>
    <p  class="partner__name">САО "ЭРГО"</p>
    <p class="partner__info">Тел.: +7 (383)210-57-80, 210-57-86, серия 54-072</p>
  </li>   
<li class="partner">
    <p class="partner__address">г. Новосибирск, ул. Восход, 14/1 офис 405, </p>
    <p  class="partner__name">ООО Абсолют Страхование</p>
    <p class="partner__info">Тел.: +7 (383) 285-18-38, серия 54-062</p>
  </li>   
<li class="partner">
    <p class="partner__address">г. Новосибирск, ул. Гоголя, 38, </p>
    <p  class="partner__name">ООО "Страховая компания "Согласие"</p>
    <p class="partner__info">Тел.: +7 (383) 209-08-88, 209-14-14, серия 54-034</p>
  </li>   
<li class="partner">
    <p class="partner__address">г. Новосибирск, ул. Зыряновская, 119, </p>
    <p  class="partner__name">ООО "Зетта страхование"</p>
    <p class="partner__info">Тел.: 8-800-700-77-07, серия 54-026</p>
  </li>   
<li class="partner">
    <p class="partner__address">г. Новосибирск, ул. Октябрьская 34, </p>
    <p  class="partner__name">ООО "СМО "СИМАЗ-МЕД"</p>
    <p class="partner__info">Тел.: +7 (383) 218-18-34, 218-22-31, факс 218-29-24, серия м.к. 54-049</p>
  </li>   
<li class="partner">
    <p class="partner__address">г. Новосибирск, ул. Орджоникидзе, 38, </p>
    <p  class="partner__name">АО "АльфаСтрахование"</p>
    <p class="partner__info">Тел.: +7 (383) 203-59-69, факс 238-06-51, 8-800-100-03-02, серия 54-045</p>
    
<li class="partner">
    <p class="partner__address">г. Новосибирск, ул. Семьи Шамшиных,64, </p>
    <p  class="partner__name">ООО СК "Гелиос"</p>
    <p class="partner__info">Тел.: +7 (383) 209-11-07, серия 54-039</p>
  </li>   
<li class="partner">
    <p class="partner__address">г. Новосибирск, ул. Советская, 5, бизнес-центр «Кронос», блок Б, оф. 703, </p>
    <p  class="partner__name">ООО "Группа Ренессанс Страхование"</p>
    <p class="partner__info">Тел.: +7 (383) 335-81-00, серия 22-037</p>
  </li>   
<li class="partner">
    <p class="partner__address">г. Новосибирск, ул.Депутатская 48, </p>
    <p  class="partner__name">ПАО "САК "Энергогарант"</p>
    <p class="partner__info">Тел.: +7 (383) 211-28-85, серия 54-014</p>
  </li>   
<li class="partner">    
    <p class="partner__address">г. Новосибирск, ул.Фрунзе 230/1, </p>
    <p  class="partner__name">АО "СОГАЗ"</p>
    <p class="partner__info">Тел.: +7 (383) 328-06-06, серия 54-004</p>
</li> 

</ul>




                                                                                                                        
                                                      </div>
                                                  </article><!-- END таб 2 уровня -->

                                                  <article class="accordeon-item opened js-accordeon"><!-- аккордеон 2 уровня -->
                                                      <header class="accordeon-item__label js-accordeon__label">
                                                          Омская область
                                                      </header>

                                                      <div class="accordeon-item__content js-accordeon__content">



<ul class="h-fancy-list">

    <li class="partner">
      <p class="partner__address">г. Омск, г. Омск, ул. Октябрьская, 107, помещение 1/4-1/6</p>
      <p class="partner__name">ООО СО "ВЕРНА"</p>
      <p class="partner__info">Часы работы: понедельник-пятница: с 9.00 до 18.00, обед 13.00-14.00; выходные-суббота,воскресенье
Тел.: +7 (3812) 79–03–49
Примечание: Номер карточки 55-074</p>        
    </li>  

</ul>




                                                                                                                        
                                                      </div>
                                                  </article><!-- END таб 2 уровня -->

                                                  <article class="accordeon-item opened js-accordeon"><!-- аккордеон 2 уровня -->
                                                      <header class="accordeon-item__label js-accordeon__label">
                                                          Республика Алтай
                                                      </header>

                                                      <div class="accordeon-item__content js-accordeon__content">



<ul class="h-fancy-list">

    <li class="partner">
      <p class="partner__address">г. Горно-Алтайск, 649000, г. Горно-Алтайск, ул. Чорос-Гуркина, д. 56</p>
      <p class="partner__name">САО "ВСК" Горно-Алтайский филиал</p>
      <p class="partner__info">Часы работы: понедельник-пятница: с 9.00 до 18.00
Тел.: +7(38822) 47-0-47</p>        
    </li>  

    <li class="partner">
      <p class="partner__address">г. Горно-Алтайск, 649002, Республика Алтай, город Горно-алтайск, Коммунистический проспект, д. 9/1</p>
      <p class="partner__name">ООО "НСГ-"РОСЭНЕРГО"</p>
      <p class="partner__info">Часы работы: понедельник - четверг: с 9.00 до 18.00 пятница и предпраздничные дни: с 9.00 до 17.00. обед 13.00-14.00
Тел.: +7 (38822) 2–31–78
Примечание: серия 04-082</p>        
    </li>  

</ul>




                                                                                                                        
                                                      </div>
                                                  </article><!-- END таб 2 уровня -->

                                                  <article class="accordeon-item opened js-accordeon"><!-- аккордеон 2 уровня -->
                                                      <header class="accordeon-item__label js-accordeon__label">
                                                          Республика Хакасия
                                                      </header>

                                                      <div class="accordeon-item__content js-accordeon__content">



<ul class="h-fancy-list">

<li class="partner">
    <p class="partner__address">г. Абакан, Абакан, ул. Чертыгашева, д. 89-59Н офис, </p>
    <p class="partner__name">СИБИРСКИЙ СПАС, страховая компания</p>
    <p>Часы работы: понедельник-пятница: 9.00 - 18.00, обед с 13-14; суббота-воскресенье - выходные дни
        Тел.: +7 (3902)297-56-2, 297-56-3, серия м.к. 19-053</p>
</li>    
<li class="partner">
    <p class="partner__address">г. Абакан, 655017, Абакан, ул. Чертыгашева, д. 124, </p>
    <p class="partner__name">Страховая компания «Ингосстрах» в Абакане</p>
    <p>Часы работы: Пн.-Чт.: 9.00-18.00, обед 13.00-13.45, Пт.: 9.00-16.45 обед 13.00-13.45,
        Тел.: +7 3902 35-82-86, 35-79-53, серия м.к. 19-059</p>
</li>    
<li class="partner">
    <p class="partner__address">г. Абакан, 655017, Республика Хакасия, г. Абакан, ул. Карла Маркса, д. 63, </p>
    <p class="partner__name">Страховая компания «СОГАЗ» в Абакане</p>
    <p>Часы работы: 9-00 - 18-00; пятница 9-00 - 16-45 без обеда суббота-воскресенье: выходной
        Тел.: +7 (3902) 215-008 доб.103, серия м.к.19-004</p>
</li>    
<li class="partner">
    <p class="partner__address">г. Абакан, Абакан ул.Кирова 112/1 оф.10 2 этаж, </p>
    <p class="partner__name">Гелиос, ООО, Страховая компания</p>
    <p>Часы работы: понедельник-четверг: 9-00-18-00; пятница 9-00-17-00; обед 13.00-14.00
        Тел.: +7(3902) 28-77-71, серия м.к.19-062</p>
</li>    
<li class="partner">
    <p class="partner__address">г. Абакан, г. Абакан, ул. Кирова, д. 77-22Н, </p>
    <p class="partner__name">Страховая компания «Согласие» в Абакане</p>
    <p>Часы работы: Понедельник - четверг: 09.00 - 18.00; Пятница: 09.00 - 16.45; Суббота, воскресенье: выходной
        Тел.: +7 3902 34-80-20; 8-800-200-01-01, серия м.к. 19-034</p>
</li>    
<li class="partner">
    <p class="partner__address">г. Абакан, г. Абакан, ул. Чертыгашева, д. 126, </p>
    <p class="partner__name">Страховая компания «РЕСО-гарантия» в Абакане</p>
    <p>Часы работы: понедельник-пятница: 9.00-18.00, суббота: 10.00-16.00
        Тел.: +7 (39022) 2-68-19; 8-800-100-63-65, серия м.к. 19-005</p>
</li>    
<li class="partner">
    <p class="partner__address">г. Абакан, Республика Хакасия, Абакан, Карла Маркса ул, д. 15, </p>
    <p class="partner__name">Страховая компания «Росгосстрах» в Абакане</p>
    <p>Часы работы: с 08:00 до 19:00, без перерыва
        Тел.: +7 (3902) 35-83-29; центр:8-800-200-0-900 (Контакт центр), серия м.к. 19-001</p>
</li>    
<li class="partner">   
    <p class="partner__address">г. Саяногорск, 655600 РФ РХ г.Саяногорск 8-8-37Н почтовый:т655603 а/я 216, </p>
    <p class="partner__name">ХФ ООО "НСГ-РОСЭНЕРГО" (Хакасский филиал ООО "Национальная страховая группа - РОСЭНЕРГО)</p>
    <p>Часы работы: 9-00-18-00 обед 13-14
        Тел.: +7(39042) 6-31-11, серия м.к. 19-087</p>
</li>

</ul>




                                                                                                                        
                                                      </div>
                                                  </article><!-- END таб 2 уровня -->

                                                  <article class="accordeon-item opened js-accordeon"><!-- аккордеон 2 уровня -->
                                                      <header class="accordeon-item__label js-accordeon__label">
                                                          Томская область
                                                      </header>

                                                      <div class="accordeon-item__content js-accordeon__content">



<ul class="h-fancy-list">

    <li class="partner">
      <p class="partner__address">г. Томск, 634050, г. Томск ул. Шишкова, д. 13а</p>
      <p class="partner__name">ООО "Зетта Страхование" Томский филиал</p>
      <p class="partner__info">Часы работы: понедельник-пятница: с 9.00 до 17.00, перерыв: 13.00-14.00
Тел.: 8 800 700-77-07
Примечание: Номер карточки 70-026</p>        
    </li>  

    <li class="partner">
      <p class="partner__address">г. Томск, 634061, г. Томск, Томская обл., пер. Нечевский, д. 21 А</p>
      <p class="partner__name">ПАО "САК "ЭНЕРГОГАРАНТ"</p>
      <p class="partner__info">Часы работы: понедельник - четверг: с 9.00 до 18.00 пятница: с 9.00 до 17.30. обед 13.00-14.00
Тел.: +7 (3822) 90-25-16, +7 (3822) 43-55-60</p>        
    </li>  

</ul>




                                                                                                                        
                                                      </div>
                                                  </article><!-- END таб 2 уровня -->

                                                  <article class="accordeon-item opened js-accordeon"><!-- аккордеон 2 уровня -->
                                                      <header class="accordeon-item__label js-accordeon__label">
                                                          Удмуртская республика
                                                      </header>

                                                      <div class="accordeon-item__content js-accordeon__content">



<ul class="h-fancy-list">

    <li class="partner">
      <p class="partner__address">Ижевск, 426057, г. Ижевск, ул. Максима Горького, дом 43, офис 139</p>
      <p class="partner__name">ООО "Зетта Страхование" Ижевский филиал</p>
      <p class="partner__info">Часы работы: понедельник-четверг: 9:00 - 18:00 перерыв: 13:00 - 14:00 пятница, суббота, воскресенье: выходной
Тел.: +7(3412) 32-02-57, 32-02-58</p>        
    </li>    

</ul>




                                                                                                                        
                                                      </div>
                                                  </article><!-- END таб 2 уровня -->

                                              </div>


                                            <!-- </form> -->

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
                                    <header onclick="filter_one_prop(3,'isAllTime1')" class="accordeon-item__label js-accordeon__label">
                                        <p>Что делать,<br/> если укусил клещ?</p>
                                        <span>Не волнуйтесь, Вы защищены. Вам надо поставить иммуноглобулин, а клеща можно сдать на анализ.</span>
                                    </header>

                                    <div class="accordeon-item__content js-accordeon__content" style="display: none;">
                                        
                                        <div class="accordeon"> 

                                            <article class="accordeon-item js-accordeon">
                                                <header onclick="filter_one_prop(3,'isAllTime1')" class="accordeon-item__label js-accordeon__label">
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
                                                                            <input id="time1-1" name='isAllTime1' type="checkbox" >
                                                                            <span class="fancy-checkbox__checkmark"></span>
                                                                            Круглосуточно
                                                                        </label>
                                                                        <label for="check-klesh1-1" class="fancy-checkbox">
                                                                            <input id="check-klesh1-1" name='takingMite' type="checkbox">
                                                                            <span class="fancy-checkbox__checkmark"></span>
                                                                            Прием клеща
                                                                        </label>
                                                                        <label for="adults1-1" class="fancy-checkbox">
                                                                            <input id="adults1-1" name='adults' type="checkbox">
                                                                            <span class="fancy-checkbox__checkmark"></span>
                                                                            Прием взрослых
                                                                        </label>
                                                                        <label for="children1-1" class="fancy-checkbox">
                                                                            <input id="children1-1" name='children' type="checkbox">
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
                                                                            <input id="time2-1" name='isAllTime1' type="checkbox" >
                                                                            <span class="fancy-checkbox__checkmark"></span>
                                                                            Круглосуточно
                                                                        </label>
                                                                        <label for="check-klesh2-1" class="fancy-checkbox">
                                                                            <input id="check-klesh2-1" name='takingMite' type="checkbox">
                                                                            <span class="fancy-checkbox__checkmark"></span>
                                                                            Прием клеща
                                                                        </label>
                                                                        <label for="adults2-1" class="fancy-checkbox">
                                                                            <input id="adults2-1" name='adults' type="checkbox">
                                                                            <span class="fancy-checkbox__checkmark"></span>
                                                                            Прием взрослых
                                                                        </label>
                                                                        <label for="children2-1" class="fancy-checkbox">
                                                                            <input id="children2-1" name='children' type="checkbox">
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
                                    <header class="accordeon-item__label js-accordeon__label">
                                        <p>Застраховаться<br/> от укуса клеща</p>
                                        <span>Cтраховой полис ОСПЗ гарантирует Вам медицинскую помощь при укусах клещей.</span>
                                    </header>

                                    <div class="accordeon-item__content js-accordeon__content" style="display: none;">

                                    <div class="content-container">
                                            <form action="" id='form_dub_2' method="post" name="search-params" class="search-params"> 

                                                <div class="search-params__region search-params__region_centered">
                                                    <label for="region5">Выберите регион</label> 
                                                      <select name="district" id="region5">
                                                            <option value='all'>Все регионы</option>
                                                          <?
                                                          $code='district';
                                                            $dbRes = CIBlockElement::GetList(array(), array("IBLOCK_ID" => 2, "!PROPERTY_".$code => false), array("PROPERTY_".$code));
                                                            while ($prop_fields = $dbRes->GetNext()){
                                                              // print_r($prop_fields);
                                                              ?><option value='<?=$prop_fields['PROPERTY_DISTRICT_VALUE']?>'><?=$prop_fields['PROPERTY_DISTRICT_VALUE']?></option><?
                                                            }
                                                            ?>
                                                        </select>
                                                </div>

                                            </form>
                                    </div>

<div class="accordeon"> <!-- обертка 2 уровня-->

                                                                                                    <article class="accordeon-item js-accordeon"><!-- аккордеон 2 уровня -->
                                                      <header class="accordeon-item__label js-accordeon__label">
                                                          Алтайский край
                                                      </header>

                                                      <div class="accordeon-item__content js-accordeon__content">


<ul class="h-fancy-list">

    <li class="partner">

    <p class="partner__address">г. Барнаул, 656056, ул. Гоголя, д. 36,</p>
    <p class="partner__name">ЗАО АСК "Инвестстрах" Барнаульский филиал</p>
    <p class="partner__name">Часы работы: понедельник - четверг: с 9.00 до 18.00 пятница и предпраздничные дни: с 9.00 до 17.00
        Тел.: +7(3852) 53-24-70</></p>

    </li>

    <li class="partner">

    <p class="partner__address"> Барнаул, 656006, ул. Балтийская, д. 45, офис 303, </p>
    <p class="partner__name">Агентство «СК Екатеринбург» в г. Барнауле</p>
    <p class="partner__info">Тел.: +7(3852) 73-04-64</p>

    </li>

    <li class="partner">

    <p class="partner__address"> Барнаул, Ленина 22, 4 этаж, </p>
    <p class="partner__name">АО "СОГАЗ"</p>
    <p class="partner__info">Тел.: +7(3852) 201-202, серия 22-004</p>

    </li>

    <li class="partner">

    <p class="partner__address"> Барнаул, пр. Комсомольский 75, </p>
    <p class="partner__name">ООО Алтайский центр страхования «Страховая компания «СДС»</p>
    <p class="partner__info">Тел.: +7(385-2) 25-45-19, 66-70-79, серия 22-088</p>

    </li>

    <li class="partner">

    <p class="partner__address"> Барнаул, пр. Красноармейский 36, </p>
    <p class="partner__name">САО "ЭРГО" Барнаульское представительство</p>
    <p class="partner__info">Тел.: +7(385-2) 28-26-07, 28-26-08, серия 22-072</p>

    </li>

    <li class="partner">

    <p class="partner__address"> Барнаул, пр. Красноармейский51а оф. 709, </p>
    <p class="partner__name">Барнаульское агентство ООО СО "ВЕРНА"</p>
    <p class="partner__info">Тел.: +7(385-2)29-99-60</p>

    </li>

    <li class="partner">

    <p class="partner__address"> Барнаул, пр. Социалистический, 45, </p>
    <p class="partner__name">ООО "НСГ-РОСЭНЕРГО" Алтайский филиал</p>
    <p class="partner__info">Тел.: +7(385-2) 65-80-39, серия 22-082</p>

    </li>

    <li class="partner">

    <p class="partner__address"> Барнаул, пр-т Калинина, 6А, </p>
    <p class="partner__name">СПАО «РЕСО-Гарантия»</p>
    <p class="partner__info">Тел.: +7 (3852) 582–135,+7 (3852) 582–119, +7 (3852) 580–061</p>

    <br/>
    Примечание: серия 22-005</li>

    <li class="partner">

    <p class="partner__address"> Барнаул, пр-т Красноармейский, д. 72, </p>
    <p class="partner__name">ЗАО "МАКС"</p>
    <p class="partner__info">Часы работы: понедельник - четверг: с 9.00 до 18.00 пятница и предпраздничные дни: с 9.00 до 17.00. обед 13.00-14.00. 
    Суббота и воксресенье-выходные</p>
    Тел.: +7 (3852) 63-58-85; +7 (3852) 63-64-76</li>

    <li class="partner">

    <p class="partner__address"> Барнаул, Пушкина 21, </p>
    <p class="partner__name">ООО "Зетта страхование" филиал в г. Барнауле</p>
    <p class="partner__info">Тел.: +7(385-2) 28-22-55, серия 22-026</p>

    </li>

    <li class="partner">

    <p class="partner__address"> Барнаул, ул. Гоголя 36 оф. 410,417, 420, 423, </p>
    <p class="partner__name">АО Альфастрахование (Алтайский филиал)</p>
    <p class="partner__info">Тел.: +7(385-2)201-086, серия 22-045</p>

    </li>

    <li class="partner">

    <p class="partner__address"> Барнаул, ул. Гоголя 47/ пр. Ленина 10, </p>
    <p class="partner__name">ООО "Страховое общество "Сургутнефтегаз"</p>
    <p class="partner__info">Тел.: +7(385-2) 63-67-32, 89-047</p>

    </li>

    <li class="partner">

    <p class="partner__address"> Барнаул, ул. Гоголя 87, </p>
    <p class="partner__name">САО "ВСК"</p>
    <p class="partner__info">Тел.: +7(385-2) 55-39-18, серия 22-002</p>

    </li>

    <li class="partner">

    <p class="partner__address"> Барнаул, ул. Короленко, 74, </p>
    <p class="partner__name">ПАО "САК "Энергогарант"</p>
    <p class="partner__info">Тел.: +7(385-2)56-71-74, серия 22-014</p>

    </li>

    <li class="partner">

    <p class="partner__address"> Барнаул, ул. Малахова, 88 В, </p>
    <p class="partner__name">ООО СК «ВТБ Страхование»</p>
    <p class="partner__info">Тел.: +7(385-2) 567000, серия 22-058</p>

    </li>

    <li class="partner">

    <p class="partner__address"> Барнаул, ул. Партизанская,40, серия 22-090, Филиал "АСКО-МЕД" </p>
    <p class="partner__name">ООО "Страховая компания "АРСЕНАЛЪ"</p>
    <p class="partner__info">Тел.: +7(385-2) 35-42-03</p>

    </li>

    <li class="partner">

    <p class="partner__address"> Барнаул, ул. Пролетарская 131, </p>
    <p class="partner__name">ООО "Гелиос" Барнаульское представительство</p>
    <p class="partner__info">Тел.: +7(385-2) 201421, серия 22-039</p>

    </li>

    <li class="partner">

    <p class="partner__address"> Барнаул, ул. Профинтерна, 24, </p>
    <p class="partner__name">ООО "СК "Согласие"</p>
    <p class="partner__info">Тел.: +7(385-2) 36-40-28, серия 22-034</p>

    </li>

    <li class="partner">

    <p class="partner__address"> Бийск, г.Бийск, ул. Советская 205/1 , </p>
    <p class="partner__name">АО «ГСК «Югория» Бийский филиал</p>
    <p class="partner__info">Часы работы: понедельник-пятница: с 9.00 до 18.00, обед 13.00-14.00; выходные-суббота,воскресенье Тел.: +7(3854)-36-45-00, 36-78-31    Примечание: Номер карточки 22-110</p>

    
   </li>

    <li class="partner">

    <p class="partner__address"> Бийск, ул. Социалистическая, 96, оф. 13, </p>
    <p class="partner__name">ЗАО "АСК "Инвестстрах" Бийский филиал</p>
    <p class="partner__info">Тел.: +7 (3854) 55-55-96</p>

    </li>

    <li class="partner">

    <p class="partner__address"> Бийск, ул.Васильева, 59/1, </p>
    <p class="partner__name">ООО "НСГ-РОСЭНЕРГО" Бийский филиал</p>
    <p class="partner__info">Тел.: +7 (3854) 55</p>

    5-198
    Примечание: серия 22-081</li>

    <li class="partner">

    <p class="partner__address"> Рубцовск, 658201, Алтайский край, г.Рубцовск, ул. Калинина, 14-1, </p>
    <p class="partner__name">ООО НСГ-РОСЭНЕРГО Рубцовский филиал</p>
    <p class="partner__info">Часы работы: понедельник - четверг: с 9.00 до 18.00 пятница и предпраздничные дни: с 9.00 до 17.00 Тел.: +7 (385-57) 5-99-24</p>

    </li>

</ul>
                                                              


                                                                <!-- <div class='map' id='map_3'>
                                                                    <p>
                                                                        <img style="width: 100%;" src="img/map.png" alt="">
                                                                    </p>   
                                                                </div> -->                                                         
                                                      </div>
                                                  </article><!-- END таб 2 уровня --> 


                                                  <article class="accordeon-item js-accordeon"><!-- аккордеон 2 уровня -->
                                                      <header class="accordeon-item__label js-accordeon__label">
                                                          Иркутская область
                                                      </header>

                                                      <div class="accordeon-item__content js-accordeon__content">



<ul class="h-fancy-list">

    <li class="partner">
      <p class="partner__address">г. Иркутск, 664003, г. Иркутск ул. Коммунаров, 1А</p>
      <p class="partner__name">ООО "Зетта Страхование" </p>
      <p class="partner__info">Часы работы: понедельник - четверг: с 9.00 до 18.00 пятница и предпраздничные дни: с 9.00 до 16.45. перерыв 13.00-13.45
Тел.: +7(3952) 783-788, 783-789, 8 (800) 700-77-07
Примечание: Номер карточки 38-026</p>        
    </li>

    <li class="partner">
      <p class="partner__address">г. Иркутск, г.Иркутск, улица Дзержинского, 40, офис 5</p>
      <p class="partner__name">ООО СО "ВЕРНА"</p>
      <p class="partner__info">Часы работы: понедельник-пятница: с 9.00 до 18.00, обед 13.00-14.00; выходные-суббота,воскресенье
Тел.: +7 (3952) 728–799
Примечание: Номер карточки 38-074</p>        
    </li> 

    <li class="partner">
      <p class="partner__address">Иркутск, ул. Цесовская Набережная, 2</p>
      <p class="partner__name">ООО СК Гелиос Иркутский филиал</p>
    </li>   

</ul>




                                                                                                                        
                                                      </div>
                                                  </article><!-- END таб 2 уровня -->

                                                  <article class="accordeon-item js-accordeon"><!-- аккордеон 2 уровня -->
                                                      <header class="accordeon-item__label js-accordeon__label">
                                                          Кемеровская область
                                                      </header>

                                                      <div class="accordeon-item__content js-accordeon__content">



<ul class="h-fancy-list">

    <li class="partner">
      <p class="partner__address">г. Кемерово, пр. Ленина 90/5</p>
      <p class="partner__name">ООО СК Гелиос Кемеровский филиал</p>
      <p class="partner__info">Тел.: +7 (3842)45-25-27</p>        
    </li>

    <li class="partner">
      <p class="partner__address">г. Кемерово, пр. Советский 60Б</p>
      <p class="partner__name">ООО НСГ РОСЭНЕРГО Кемеровский филиал</p>
      <p class="partner__info">Тел.: +7 (3842)34-93-44</p>        
    </li> 

    <li class="partner">
      <p class="partner__address">г. Кемерово, пр.Ленина, 33, корп.2</p>
      <p class="partner__name">САО «ВСК»</p>
      <p class="partner__info">Тел.: +7 (3842) 44-15-82 (доб. 143)</p>        
    </li> 

    <li class="partner">
      <p class="partner__address">г. Кемерово, ул. 50 лет Октября, 11</p>
      <p class="partner__name">ООО "РОСГОССТРАХ"</p>
      <p class="partner__info">Тел.: +7 (3842) 39-05-69</p>        
    </li> 

    <li class="partner">
      <p class="partner__address">г. Кемерово, ул. Кирова, 32</p>
      <p class="partner__name">АО «АльфаСтрахование»</p>
      <p class="partner__info">Тел.: +7 (3842) 36-31-85</p>        
    </li> 

    <li class="partner">
      <p class="partner__address">г. Кемерово, ул. Мичурина</p>
      <p class="partner__name">ООО "Зетта Страхование" филиал в Кемерово</p>
    </li> 

    <li class="partner">
      <p class="partner__address">г. Кемерово, ул. Свободы</p>
      <p class="partner__name">АО «СОГАЗ»</p>
      <p class="partner__info">Тел.: +7 (3842) 45-55-33, 45-46-85</p>        
    </li> 

    <li class="partner">
      <p class="partner__address">г. Кемерово, ул.Большевистсвкая, 2</p>
      <p class="partner__name">ООО "Страховая компания "Согласие"</p>
      <p class="partner__info">Тел.: +7 (3842) 57-59-22, 57-64-05</p>        
    </li> 

    <li class="partner">
      <p class="partner__address">г. Кемерово, ул.Весенняя, 5</p>
      <p class="partner__name">ООО СК "Сибирский дом страхования"</p>
      <p class="partner__info">Тел.: +7 (3842) 36-10-23</p>        
    </li> 

    <li class="partner">
      <p class="partner__address">г. Белово, пер.Цинкзаводской, 8 А</p>
      <p class="partner__name">ОАО СК "БАСК"</p>
      <p class="partner__info">Тел.: +7 (38452) 2-11-12</p>        
    </li> 

    <li class="partner">
      <p class="partner__address">г. Новокузнецк, Кузнецкстроевский проспект 13</p>
      <p class="partner__name">АО СК "Сибирский спас"</p>
    </li>     

</ul>




                                                                                                                        
                                                      </div>
                                                  </article><!-- END таб 2 уровня -->

                                                  <article class="accordeon-item js-accordeon"><!-- аккордеон 2 уровня -->
                                                      <header class="accordeon-item__label js-accordeon__label">
                                                          Красноярский край
                                                      </header>

                                                      <div class="accordeon-item__content js-accordeon__content">



<ul class="h-fancy-list">

<li class="partner">
    <p class="partner__address">г. Красноярск, г. Красноярск, пр. Мира, 19 стр.1,</p>
    <p class="partner__name">Красноярский филиал АО "СОГАЗ"</p>
    <p class="partner__info">Часы работы: пн. - чт. 8.00 - 19.00; пт. 8.00 - 17.45; сб. - вс. выходные
    Тел.: +7 (391) 202-66-99
    Примечание: серия м.к. 24-004</p> 
</li>

<li class="partner">    
    <p class="partner__address">г. Красноярск, 660049, Красноярский край, г.Красноярск ул. Урицкого, 117, офис 501,</p>
    <p class="partner__name">Страховая компания ООО "НСГ-РОСЭНЕРГО" в Красноярске</p>
    <p class="partner__info">Часы работы: 9-00 до 18-00 обед 13-14; пятница до 17-00
    Тел.: +7 (39-12) 27-17-14
    Примечание: серия м.к. 24-087</p> 
     </li>

<li class="partner">
    <p class="partner__address">г. Красноярск, 660118, Красноярск, ул. Урванцева, 7,</p>
    <p class="partner__name">Страховая компания «Либерти Страхование (КИТ Финанс)» в Красноярске</p>
    <p class="partner__info">Часы работы: Пн–Пт 09.00–18.00, перерыв 13.00–14.00;
    Тел.: +7 (391) 205-23-23, серия м.к. 24-061</p> 
     </li>
<li class="partner">    
    <p class="partner__address">г. Красноярск, Алексеева 113,</p>
    <p class="partner__name">ООО «Страховая компания «Согласие»</p>
    <p class="partner__info">Тел.: +7 (391) 223-04-24, 223-03-31, 251-51-64
    Примечание: серия м.к. 24-034</p> 
     </li>
<li class="partner">    
    <p class="partner__address">г. Красноярск, г. Красноярск ул. Молокова, 46,</p>
    <p class="partner__name">АО "СОГАЗ"</p>
    <p class="partner__info">Часы работы: пн. - чт. 8.00 - 19.00; пт. 8.00 - 17.45; сб. - вс. выходные
    Тел.: +7 (3912) 223-30-60; 223-29-60
    Примечание: серия м.к. 24-004</p> 
     </li>
<li class="partner">    
    <p class="partner__address">г. Красноярск, Красноярск, ул. 9 мая, 55, оф. 294 ,</p>
    <p class="partner__name">АО «Государственная страховая компания «Югория» Красноярский Филиал</p>
    <p class="partner__info">Часы работы: ПН — ПТ: 9.00 — 18.00 перерыв: 13.00 — 14.00
    Тел.: +7 (391) 206-84-27, 206-84-28
    Примечание: серия м.к. 24-010</p> 
     </li>
<li class="partner">    
    <p class="partner__address">г. Красноярск, Российская Федерация, Красноярский край, Красноярск г., Авиаторов улица, 31,</p>
    <p class="partner__name">ГЕЛИОС, страховая компания</p>
    <p class="partner__info">Часы работы: 9-00-18-00 обед 13-14
    Тел.: +7(391)205-15-65; 8-800-100-70-07, серия м.к. 24-062</p> 
     </li>
<li class="partner">    
    <p class="partner__address">г. Красноярск, Российская Федерация, Красноярский край, Красноярск г., Батурина улица, 5, этаж 1, оф. № 80,</p>
    <p class="partner__name">СИБИРСКИЙ СПАС, страховая компания</p>
    <p class="partner__info">Часы работы: 9.00-18.00, сб, вс - вых.
    Тел.: +7 (391)254-27-40, 205-05-53
    Примечание: www.sibspas.ru, серия м.к.19-053</p> 
     </li>
<li class="partner">    
    <p class="partner__address">г. Красноярск, ул. Ады Лебедевой д. 22,</p>
    <p class="partner__name">ООО "Группа Ренессанс Страхование"</p>
    <p class="partner__info">Тел.: +7 (391) 274-46-88,274-46-80, 227-76-70, круглосуточный: 8-800-333-88-00
    Примечание: серия м.к.22-037</p> 
     </li>
 <li class="partner">   
    <p class="partner__address">г. Красноярск, ул. Горького 20,</p>
    <p class="partner__name">ОАО «АльфаСтрахование»</p>
    <p class="partner__info">Тел.: +7 (391) 252-93-06, круглосуточный: 8-800-1000-306
    Примечание: серия м.к. 24-045</p> 
     </li>
<li class="partner">    
    <p class="partner__address">г. Красноярск, ул. Мате Залки д.19,</p>
    <p class="partner__name">ПАО «САК «Энергогарант»</p>
    <p class="partner__info">Тел.: +7 (391) 276-62-09, 276-62-08
    Примечание: серия м.к.24-014</p> 
     </li>
<li class="partner">    
    <p class="partner__address">г. Ачинск, ул. Декабристов 55,</p>
    <p class="partner__name">ООО «Страховая компания «Согласие»</p>
    <p class="partner__info">Тел.: (39151) 7-58-35, серия м.к. 24-034</p> 
     </li>
<li class="partner">    
    <p class="partner__address">г. Ачинск, г. Ачинск, мкр. 7, д.9А, пом. 74 ,</p>
    <p class="partner__name">Ачинское подразделение, Красноярский филиал АО "СОГАЗ"</p>
    <p class="partner__info">Часы работы: пн. - чт. 8.00 - 19.00; пт. 8.00 - 17.45; сб. - вс. выходные
    Тел.: тел.(39151) 6-20-46, серия м.к. 24-004</p> 
     </li>
<li class="partner">    
    <p class="partner__address">г. Железногорск, ул. Ленина 24/22 офис 29,</p>
    <p class="partner__name">ООО «Страховая компания «Согласие»</p>
    <p class="partner__info">Тел.: +7 (39197) 4-63-51, 4-66-25
    Примечание: серия м.к. 24-034</p> 
     </li>
<li class="partner">    
    <p class="partner__address">г. Железногорск, г. Железногорск ул. Маяковского, д.6 офис 105,</p>
    <p class="partner__name">Железногорское подразделение, Красноярский филиал АО "СОГАЗ"</p>
    <p class="partner__info">Часы работы: пн. - чт. 8.00 - 19.00; пт. 8.00 - 17.45; сб. - вс. выходные
    Тел.: +7 (3919) 75-80-25
    Примечание: серия м.к. 24-004</p> 
     </li>
<li class="partner">    
    <p class="partner__address">г. Зеленогорск, ул. Гагарина 46, 1-й этаж,</p>
    <p class="partner__name">ООО «Страховая компания «Согласие»</p>
    <p class="partner__info">Тел.: +7 (39169) 3-82-82, 4-36-63
    Примечание: серия м.к. 24-034</p> 
     </li>
<li class="partner">    
    <p class="partner__address">г. Зеленогорск, г. Зеленогорск ул. Набережная, 52,</p>
    <p class="partner__name">Зеленогорское подразделение, Красноярский филиал АО "СОГАЗ"</p>
    <p class="partner__info">Часы работы: пн. - чт. 8.00 - 19.00; пт. 8.00 - 17.45; сб. - вс. выходные
    Тел.: +7 (39169) 3-05-03
    Примечание: серия м.к. 24-004</p> 
     </li>
<li class="partner">    
    <p class="partner__address">г. Канск, ул. Советская 8,</p>
    <p class="partner__name">ООО «Страховая компания «Согласие»</p>
    <p class="partner__info">Тел.: +7 (39161) 3-14-68
    Примечание: серия м.к. 24-034</p> 
     </li>
<li class="partner">    
    <p class="partner__address">г. Лесосибирск, 5-й микрорайон д.26,</p>
    <p class="partner__name">ООО «Страховая компания «Согласие»</p>
    <p class="partner__info">Тел.: +7 (39145) 5-44-68, 5-40-47
    Примечание: серия 24-034</p> 
     </li>
 <li class="partner">   
    <p class="partner__address">г. Минусинск, ул. Красных партизан 9,</p>
    <p class="partner__name">ООО «Страховая компания «Согласие»</p>
    <p class="partner__info">Тел.: +7 (39132) 2-05-89
    Примечание: серия м.к. 24-034</p> 
     </li>
 <li class="partner">   
    <p class="partner__address">г. Назарово, г. Назарово, ул. 30 лет ВЛКСМ, д. 74,</p>
    <p class="partner__name">Назаровское подразделение, Красноярский филиал АО "СОГАЗ"</p>
    <p class="partner__info">Часы работы: пн. - чт. 8.00 - 19.00; пт. 8.00 - 17.45; сб. - вс. выходные
    Тел.: +7 (39155) 5-70-70
    Примечание: серия м.к. 24-004</p> 
     </li>
 <li class="partner">   
    <p class="partner__address">г. Шарыпово, м-н Пионерный д.16 оф.13,</p>
    <p class="partner__name">ООО «Страховая компания «Согласие»</p>
    <p class="partner__info">Тел.: +7 (39151) 27-8-17
    Примечание: серия м.к. 24-034</p> 
     </li>

</ul>




                                                                                                                        
                                                      </div>
                                                  </article><!-- END таб 2 уровня -->

                                                  <article class="accordeon-item js-accordeon"><!-- аккордеон 2 уровня -->
                                                      <header class="accordeon-item__label js-accordeon__label">
                                                          Новосибирская область
                                                      </header>

                                                      <div class="accordeon-item__content js-accordeon__content">



<ul class="h-fancy-list">

<li class="partner">
    <p class="partner__address">г. Новосибирск, 630099, ул. Чаплыгина, 93, офис 201, </p>
    <p  class="partner__name">ЗАО "МАКС"</p>
    <p class="partner__info">Часы работы: понедельник-пятница: с 9.00 до 20.00, суббота: с 10.00 до 16.00; выходной: воскресенье
        Тел.: +7 (383) 220–50–41; +7 (383) 220–50–42
        Примечание: Медицинская карточка 54-076</p>
    
<li class="partner">
    <p class="partner__address">г. Новосибирск, 630005, г. Новосибирск, ул. Фрунзе, д.86 , </p>
    <p  class="partner__name">ООО "ЦСО"</p>
    <p class="partner__info">Часы работы: пн-чт. с 9:00 до 18:00, пт.с 9:00 до 16:45, сб.вс. - выходной
        Тел.: +7 (383) 362-46-45</p>
</li>     
<li class="partner">
    <p class="partner__address">г. Новосибирск, 630007 г. Новосибирск, ул. Коммунистическая 35, </p>
    <p  class="partner__name">АО СК "Сибирский спас"</p>
    <p class="partner__info">Тел.: +7(383)266-97-25, серия 54-053</p>
 </li>    
<li class="partner">
    <p class="partner__address">г. Новосибирск, 630099 г. Новосибирск, ул. Ядринцевская, 72, </p>
    <p  class="partner__name">ООО СО "ВЕРНА"</p>
    <p class="partner__info">Тел.: +7 (383)209-54-44, серия 54-074</p>
 </li>    
<li class="partner">
    <p class="partner__address">г. Новосибирск, 630099 г. Новосибирск, ул. Ядринцевская, 72 офис 504, </p>
    <p  class="partner__name">ООО СК Екатеринбург</p>
    <p class="partner__info">Тел.: +7 (383)2804669, серия 54-075</p>
  </li>   
<li class="partner">
    <p class="partner__address">г. Новосибирск, Красный проспект 39, </p>
    <p  class="partner__name">САО "ЭРГО"</p>
    <p class="partner__info">Тел.: +7 (383)210-57-80, 210-57-86, серия 54-072</p>
  </li>   
<li class="partner">
    <p class="partner__address">г. Новосибирск, ул. Восход, 14/1 офис 405, </p>
    <p  class="partner__name">ООО Абсолют Страхование</p>
    <p class="partner__info">Тел.: +7 (383) 285-18-38, серия 54-062</p>
  </li>   
<li class="partner">
    <p class="partner__address">г. Новосибирск, ул. Гоголя, 38, </p>
    <p  class="partner__name">ООО "Страховая компания "Согласие"</p>
    <p class="partner__info">Тел.: +7 (383) 209-08-88, 209-14-14, серия 54-034</p>
  </li>   
<li class="partner">
    <p class="partner__address">г. Новосибирск, ул. Зыряновская, 119, </p>
    <p  class="partner__name">ООО "Зетта страхование"</p>
    <p class="partner__info">Тел.: 8-800-700-77-07, серия 54-026</p>
  </li>   
<li class="partner">
    <p class="partner__address">г. Новосибирск, ул. Октябрьская 34, </p>
    <p  class="partner__name">ООО "СМО "СИМАЗ-МЕД"</p>
    <p class="partner__info">Тел.: +7 (383) 218-18-34, 218-22-31, факс 218-29-24, серия м.к. 54-049</p>
  </li>   
<li class="partner">
    <p class="partner__address">г. Новосибирск, ул. Орджоникидзе, 38, </p>
    <p  class="partner__name">АО "АльфаСтрахование"</p>
    <p class="partner__info">Тел.: +7 (383) 203-59-69, факс 238-06-51, 8-800-100-03-02, серия 54-045</p>
    
<li class="partner">
    <p class="partner__address">г. Новосибирск, ул. Семьи Шамшиных,64, </p>
    <p  class="partner__name">ООО СК "Гелиос"</p>
    <p class="partner__info">Тел.: +7 (383) 209-11-07, серия 54-039</p>
  </li>   
<li class="partner">
    <p class="partner__address">г. Новосибирск, ул. Советская, 5, бизнес-центр «Кронос», блок Б, оф. 703, </p>
    <p  class="partner__name">ООО "Группа Ренессанс Страхование"</p>
    <p class="partner__info">Тел.: +7 (383) 335-81-00, серия 22-037</p>
  </li>   
<li class="partner">
    <p class="partner__address">г. Новосибирск, ул.Депутатская 48, </p>
    <p  class="partner__name">ПАО "САК "Энергогарант"</p>
    <p class="partner__info">Тел.: +7 (383) 211-28-85, серия 54-014</p>
  </li>   
<li class="partner">    
    <p class="partner__address">г. Новосибирск, ул.Фрунзе 230/1, </p>
    <p  class="partner__name">АО "СОГАЗ"</p>
    <p class="partner__info">Тел.: +7 (383) 328-06-06, серия 54-004</p>
</li> 

</ul>




                                                                                                                        
                                                      </div>
                                                  </article><!-- END таб 2 уровня -->

                                                  <article class="accordeon-item js-accordeon"><!-- аккордеон 2 уровня -->
                                                      <header class="accordeon-item__label js-accordeon__label">
                                                          Омская область
                                                      </header>

                                                      <div class="accordeon-item__content js-accordeon__content">



<ul class="h-fancy-list">

    <li class="partner">
      <p class="partner__address">г. Омск, г. Омск, ул. Октябрьская, 107, помещение 1/4-1/6</p>
      <p class="partner__name">ООО СО "ВЕРНА"</p>
      <p class="partner__info">Часы работы: понедельник-пятница: с 9.00 до 18.00, обед 13.00-14.00; выходные-суббота,воскресенье
Тел.: +7 (3812) 79–03–49
Примечание: Номер карточки 55-074</p>        
    </li>  

</ul>




                                                                                                                        
                                                      </div>
                                                  </article><!-- END таб 2 уровня -->

                                                  <article class="accordeon-item js-accordeon"><!-- аккордеон 2 уровня -->
                                                      <header class="accordeon-item__label js-accordeon__label">
                                                          Республика Алтай
                                                      </header>

                                                      <div class="accordeon-item__content js-accordeon__content">



<ul class="h-fancy-list">

    <li class="partner">
      <p class="partner__address">г. Горно-Алтайск, 649000, г. Горно-Алтайск, ул. Чорос-Гуркина, д. 56</p>
      <p class="partner__name">САО "ВСК" Горно-Алтайский филиал</p>
      <p class="partner__info">Часы работы: понедельник-пятница: с 9.00 до 18.00
Тел.: +7(38822) 47-0-47</p>        
    </li>  

    <li class="partner">
      <p class="partner__address">г. Горно-Алтайск, 649002, Республика Алтай, город Горно-алтайск, Коммунистический проспект, д. 9/1</p>
      <p class="partner__name">ООО "НСГ-"РОСЭНЕРГО"</p>
      <p class="partner__info">Часы работы: понедельник - четверг: с 9.00 до 18.00 пятница и предпраздничные дни: с 9.00 до 17.00. обед 13.00-14.00
Тел.: +7 (38822) 2–31–78
Примечание: серия 04-082</p>        
    </li>  

</ul>




                                                                                                                        
                                                      </div>
                                                  </article><!-- END таб 2 уровня -->

                                                  <article class="accordeon-item js-accordeon"><!-- аккордеон 2 уровня -->
                                                      <header class="accordeon-item__label js-accordeon__label">
                                                          Республика Хакасия
                                                      </header>

                                                      <div class="accordeon-item__content js-accordeon__content">



<ul class="h-fancy-list">

<li class="partner">
    <p class="partner__address">г. Абакан, Абакан, ул. Чертыгашева, д. 89-59Н офис, </p>
    <p class="partner__name">СИБИРСКИЙ СПАС, страховая компания</p>
    <p>Часы работы: понедельник-пятница: 9.00 - 18.00, обед с 13-14; суббота-воскресенье - выходные дни
        Тел.: +7 (3902)297-56-2, 297-56-3, серия м.к. 19-053</p>
</li>    
<li class="partner">
    <p class="partner__address">г. Абакан, 655017, Абакан, ул. Чертыгашева, д. 124, </p>
    <p class="partner__name">Страховая компания «Ингосстрах» в Абакане</p>
    <p>Часы работы: Пн.-Чт.: 9.00-18.00, обед 13.00-13.45, Пт.: 9.00-16.45 обед 13.00-13.45,
        Тел.: +7 3902 35-82-86, 35-79-53, серия м.к. 19-059</p>
</li>    
<li class="partner">
    <p class="partner__address">г. Абакан, 655017, Республика Хакасия, г. Абакан, ул. Карла Маркса, д. 63, </p>
    <p class="partner__name">Страховая компания «СОГАЗ» в Абакане</p>
    <p>Часы работы: 9-00 - 18-00; пятница 9-00 - 16-45 без обеда суббота-воскресенье: выходной
        Тел.: +7 (3902) 215-008 доб.103, серия м.к.19-004</p>
</li>    
<li class="partner">
    <p class="partner__address">г. Абакан, Абакан ул.Кирова 112/1 оф.10 2 этаж, </p>
    <p class="partner__name">Гелиос, ООО, Страховая компания</p>
    <p>Часы работы: понедельник-четверг: 9-00-18-00; пятница 9-00-17-00; обед 13.00-14.00
        Тел.: +7(3902) 28-77-71, серия м.к.19-062</p>
</li>    
<li class="partner">
    <p class="partner__address">г. Абакан, г. Абакан, ул. Кирова, д. 77-22Н, </p>
    <p class="partner__name">Страховая компания «Согласие» в Абакане</p>
    <p>Часы работы: Понедельник - четверг: 09.00 - 18.00; Пятница: 09.00 - 16.45; Суббота, воскресенье: выходной
        Тел.: +7 3902 34-80-20; 8-800-200-01-01, серия м.к. 19-034</p>
</li>    
<li class="partner">
    <p class="partner__address">г. Абакан, г. Абакан, ул. Чертыгашева, д. 126, </p>
    <p class="partner__name">Страховая компания «РЕСО-гарантия» в Абакане</p>
    <p>Часы работы: понедельник-пятница: 9.00-18.00, суббота: 10.00-16.00
        Тел.: +7 (39022) 2-68-19; 8-800-100-63-65, серия м.к. 19-005</p>
</li>    
<li class="partner">
    <p class="partner__address">г. Абакан, Республика Хакасия, Абакан, Карла Маркса ул, д. 15, </p>
    <p class="partner__name">Страховая компания «Росгосстрах» в Абакане</p>
    <p>Часы работы: с 08:00 до 19:00, без перерыва
        Тел.: +7 (3902) 35-83-29; центр:8-800-200-0-900 (Контакт центр), серия м.к. 19-001</p>
</li>    
<li class="partner">   
    <p class="partner__address">г. Саяногорск, 655600 РФ РХ г.Саяногорск 8-8-37Н почтовый:т655603 а/я 216, </p>
    <p class="partner__name">ХФ ООО "НСГ-РОСЭНЕРГО" (Хакасский филиал ООО "Национальная страховая группа - РОСЭНЕРГО)</p>
    <p>Часы работы: 9-00-18-00 обед 13-14
        Тел.: +7(39042) 6-31-11, серия м.к. 19-087</p>
</li>

</ul>




                                                                                                                        
                                                      </div>
                                                  </article><!-- END таб 2 уровня -->

                                                  <article class="accordeon-item js-accordeon"><!-- аккордеон 2 уровня -->
                                                      <header class="accordeon-item__label js-accordeon__label">
                                                          Томская область
                                                      </header>

                                                      <div class="accordeon-item__content js-accordeon__content">



<ul class="h-fancy-list">

    <li class="partner">
      <p class="partner__address">г. Томск, 634050, г. Томск ул. Шишкова, д. 13а</p>
      <p class="partner__name">ООО "Зетта Страхование" Томский филиал</p>
      <p class="partner__info">Часы работы: понедельник-пятница: с 9.00 до 17.00, перерыв: 13.00-14.00
Тел.: 8 800 700-77-07
Примечание: Номер карточки 70-026</p>        
    </li>  

    <li class="partner">
      <p class="partner__address">г. Томск, 634061, г. Томск, Томская обл., пер. Нечевский, д. 21 А</p>
      <p class="partner__name">ПАО "САК "ЭНЕРГОГАРАНТ"</p>
      <p class="partner__info">Часы работы: понедельник - четверг: с 9.00 до 18.00 пятница: с 9.00 до 17.30. обед 13.00-14.00
Тел.: +7 (3822) 90-25-16, +7 (3822) 43-55-60</p>        
    </li>  
    
</ul>




                                                                                                                        
                                                      </div>
                                                  </article><!-- END таб 2 уровня -->

                                                  <article class="accordeon-item js-accordeon"><!-- аккордеон 2 уровня -->
                                                      <header class="accordeon-item__label js-accordeon__label">
                                                          Удмуртская республика
                                                      </header>

                                                      <div class="accordeon-item__content js-accordeon__content">



<ul class="h-fancy-list">

    <li class="partner">
      <p class="partner__address">Ижевск, 426057, г. Ижевск, ул. Максима Горького, дом 43, офис 139</p>
      <p class="partner__name">ООО "Зетта Страхование" Ижевский филиал</p>
      <p class="partner__info">Часы работы: понедельник-четверг: 9:00 - 18:00 перерыв: 13:00 - 14:00 пятница, суббота, воскресенье: выходной
Тел.: +7(3412) 32-02-57, 32-02-58</p>        
    </li>    

</ul>




                                                                                                                        
                                                      </div>
                                                  </article><!-- END таб 2 уровня -->

                                              </div>


                                            <!-- </form> -->

                                        </div>

                                        <div>
                                          
                                        </div>

                                    </article>

                              </div>
                                        

                                    </div>
                                </article>

                            </div>

                        <!-- </div> -->

<!-- <input onclick="showMarkers();" type="button" value="Показать"> -->

<!-- <input onclick="filter_one_prop('isAllTime1');" type="button" value="Свойства"> -->

                        <div class="container">
                              <div class="about-section">
                                    <section class="about-item">
                                          <h2>Что такое клещевой энцефалит?</h2>
                                          <p>Клещевой энцефалит является природно-очаговой острой вирусной инфекционной болезнью с трансмиссивным механизмом передачи возбудителя. Характеризуется преимущественным поражением центральной нервной системы, отличается полиморфизмом клинических проявлений и тяжестью течения. Последствия заболевания разнообразны - от полного выздоровления до нарушений здоровья, приводящих к инвалидности, вследствие высокой степени хронизации (до 30%), и смерти.</p>
                                          <ul class="h-no-bullets">
                                                <li><a href="#">Подробнее о клещевом энцефалите</a></li>
                                                <li><a href="#">Все ли клещи заразны?</a></li>
                                                <li><a href="#">Где распространен энцефалит?</a></li>
                                                <li><a href="#">Что такое прививка от клещевого энцефалита?</a></li>
                                                <li><a href="#">Что такое страховка от клеща?</a></li>
                                                <li><a href="/documents/chto-takoe-immunoglobulin/">Что такое иммуноглобулин?</a></li>
                                          </ul>
                                    </section>
                                    <section class="about-item">
                                          <h2>О программе ОСПЗ</h2>
                                          <div class="program">
                                              <div class="program__card"><img src="img/card.jpg" width="120" alt="Медицинская карточка"></div>
                                              <div class="program__text"><p>
                                                     Программа «Объединенная Сибирская Противоклещевая Защита» (ОСПЗ) направлена на обеспечение надежной и доступной для широких слоев населения системы оказания медицинских услуг по экстренной серопрофилактике клещевого энцефалита через добровольное медицинское страхование (ДМС) по всей территории Сибири при партнерском объединенном взаимодействии большого количества лечебных учреждений и страховых компаний посредством операторов медицинских услуг. 
                                                  </p>
                                                  <ul class="h-no-bullets">
                                                        <li><a href="/documents/o-servisnoy-programme-ospz/">Подробнее о программе</a></li>
                                                        <li><a href="/">Операторы программы ОСПЗ в регионах</a></li>
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
                                              <p>С помощью мобильного приложения Вы сможете найти ближайший к Вам пункт вакцинации с указанием его на карте и проложить маршрут, используя самые последние технологии навигации, оставаться в курсе последних новостей ОСПЗ, получить оперативную информацию о том как действовать в случае укуса клеща и многое другое. <br>
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
/*
?>
<script src="http://code.jquery.com/jquery-1.8.3.js"></script>

<style>


.map {
  margin-top: 20px;
height: 476px;
}
.gmnoprint img{
  height: 20px !important;
}
</style>


<script>
  function closeallinfowindows(c){
        // console.log(length);
    for(i=1;i<c.length;i++) {
      // console.log(c[i]+' '+i);
      eval("infowindow"+c[i]+".close()");
    }
  }

    var markersoverall;
    var arr_popap=[];
    var maps=[];
    var markers = [];
  function initMap() {

  var styledMapType = new google.maps.StyledMapType(
  [
    {
      "elementType": "geometry",
      "stylers": [
        {
          "color": "#cbede5"
        }
      ]
    },
    {
      "elementType": "labels.text.fill",
      "stylers": [
        {
          "color": "#808080"
        }
      ]
    },
    {
      "featureType": "water",
      "elementType": "geometry",
      "stylers": [
        {
          "color": "#fdfeff"
        }
      ]
    }
  ]
  );
    
    map = new google.maps.Map(document.getElementById('map'), {
              center: {lat: 54, lng: 56},
              zoom: 5,
              mapTypeControlOptions: {
                mapTypeIds: ['roadmap', 'satellite', 'hybrid', 'terrain',
                      'styled_map']
              }
    });

          map.mapTypes.set('styled_map', styledMapType);

          map.setMapTypeId('styled_map');




<?

  $resp = CIBlockElement::GetList(array('SORT'=>'ASC'), array("IBLOCK_ID" => 3 ,'ACTIVE'=>'Y'));
  while($obs = $resp->GetNextElement()){
      $arProps = $obs->GetProperties();
      $contentString=(int)$arProps['id']['VALUE'];
      ?>
      arr_popap[arr_popap.length]=<?=(int)$arProps['id']['VALUE'];?>;
      var contentString_<?=$contentString?>="<div class='popup'> <h3><?=$arProps['name']['VALUE']?></h3> <p> <?foreach ($arProps as $key => $value) {      if ($value['VALUE'] && $value['CODE']!='id' && $value['CODE']!='longitude' && $value['CODE']!='latitude' && $value['CODE']!='adults'  && $value['CODE']!='children' && $value['CODE']!='takingMite') { echo $value['NAME'].': '; if ($value['VALUE']==1) {echo 'Да';} if ($value['VALUE']==2) {echo 'Нет';} if ($value['VALUE']!=2 && $value['VALUE']!=1) {echo $value['VALUE'];} echo"<br>";      }    }?></p></div>";
      infowindow<?=$contentString?> = new google.maps.InfoWindow({
      content: contentString_<?=$contentString?> });
      var coords<?=$contentString?>= {lat: <?=$arProps['longitude']['VALUE']?>, lng: <?=$arProps['latitude']['VALUE']?>};
      var marker_<?=$contentString?> = new google.maps.Marker({
        position: coords<?=$contentString?>,
        map: map,
        title: '<?=$arProps['name']['VALUE']?>',
        icon: '/img/marker.png'
      });
      markers[<?=$contentString?>]=marker_<?=$contentString?>;

      marker_<?=$contentString?>.addListener('click', function() {
        closeallinfowindows(markersoverall);
        infowindow<?=$contentString?>.open(map, marker_<?=$contentString?>);
      });

  <?
  exit();
  }
  ?>
// marker1.setVisible(false);
// marker1.setVisible(true);

    markersoverall=arr_popap;




  }
// console.log(markers);
function setMapOnAll(no_hide,map) {
  // console.log(no_hide);

  markers.forEach(function(element, index) {


     // console.log('hide'+index)
    // console.log(no_hide.find('10'));
    // if (no_hide) {
    //   if (no_hide[index]!='yes') {
    //     element.setMap(map);
    //   }
    // }else{
       // element.setMap(map);
    // }
    
    if (map=== null) {
      element.setVisible(false);
      console.log('yes');
    }else{
      console.log('no');
      element.setVisible(true);
    }
    // var map_html=$('#map').html();

});

      // setTimeout(function(){
           $('.map_duble').empty();
 // $('.map_duble').append($('#map'));
 $('#map').clone().appendTo('.map_duble');
    // },5000)
  
  // for (var i = 0; i < markers.length; i++) {
  //   // find
  //   markers[i].setMap(map);
  // }
  
  
}


function showMarkers() {
  setMapOnAll('ss',map);
}

  $(document).ready(function(){

    initMap();


  });


function filter_one_prop(name_prop,iblock=3){
  $.ajax({
                      type: 'POST',
                      url: '/include/get_eleme_map.php?IBLOCK_ID='+iblock+'&'+name_prop+'=1',
                      data: 'IBLOCK_ID='+iblock,

                      success: function(data){                         
                           setMapOnAll(JSON.parse(data),null);
                            // setMapOnAll(null);
                        }
                      });
}




</script>

<!-- <input onclick="setMapOnAll();" type="button" value="скрыть маркеры"> -->
<!-- <a href="hide_marker();"> скрыть маркеры</a> -->


   <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBxQaqnd4oKL9w1hhKE73HHZ_1kg2bZQjU&callback=initMap">
    </script>

<?*/
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php');
?>