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
                                                                        <label for="region6">Выберите пункт вакцинации</label> 
                                                                        <select name="district" id="region6">
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
                                                                        <label for="time" class="fancy-checkbox">
                                                                            <input id="time" name='isAllTime1' type="checkbox" >
                                                                            <span class="fancy-checkbox__checkmark"></span>
                                                                            Круглосуточно
                                                                        </label>
                                                                        <label for="check-klesh" class="fancy-checkbox">
                                                                            <input id="check-klesh" name='takingMite' type="checkbox">
                                                                            <span class="fancy-checkbox__checkmark"></span>
                                                                            Прием клеща
                                                                        </label>
                                                                        <label for="adults" class="fancy-checkbox">
                                                                            <input id="adults" name='adults' type="checkbox">
                                                                            <span class="fancy-checkbox__checkmark"></span>
                                                                            Прием взрослых
                                                                        </label>
                                                                        <label for="children" class="fancy-checkbox">
                                                                            <input id="children" name='children' type="checkbox">
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
                                                                        <label for="region_2">Выберите пункт вакцинации</label> 
                                                                        <select name="district" id="region_2">
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
                                                                        <label for="time" class="fancy-checkbox">
                                                                            <input id="time" name='isAllTime1' type="checkbox" >
                                                                            <span class="fancy-checkbox__checkmark"></span>
                                                                            Круглосуточно
                                                                        </label>
                                                                        <label for="check-klesh" class="fancy-checkbox">
                                                                            <input id="check-klesh" name='takingMite' type="checkbox">
                                                                            <span class="fancy-checkbox__checkmark"></span>
                                                                            Прием клеща
                                                                        </label>
                                                                        <label for="adults" class="fancy-checkbox">
                                                                            <input id="adults" name='adults' type="checkbox">
                                                                            <span class="fancy-checkbox__checkmark"></span>
                                                                            Прием взрослых
                                                                        </label>
                                                                        <label for="children" class="fancy-checkbox">
                                                                            <input id="children" name='children' type="checkbox">
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
                                                    <label for="region2">Выберите регион</label> 
                                                      <select name="district" id="region2">
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

                                                  <article class="accordeon-item js-accordeon"><!-- аккордеон 2 уровня -->
                                                      <header class="accordeon-item__label js-accordeon__label">
                                                          Алтайский край
                                                      </header>

                                                      <div class="accordeon-item__content js-accordeon__content">


<ul>

    <li>г. Барнаул, 656056, г. Барнаул, ул. Гоголя, д. 36, ЗАО АСК "Инвестстрах" Барнаульский филиал<br/>
    Часы работы: понедельник - четверг: с 9.00 до 18.00 пятница и предпраздничные дни: с 9.00 до 17.00<br/>
    Тел.: +7(3852) 53-24-70</li>

    <li>г. Барнаул, 656006, г. Барнаул, ул. Балтийская, д. 45, офис 303, Агентство «СК Екатеринбург» в г. Барнауле<br/>
    Тел.: +7(3852) 73-04-64</li>

    <li>г. Барнаул, Ленина 22, 4 этаж, АО "СОГАЗ"<br/>
    Тел.: +7(3852) 201-202, серия 22-004</li>

    <li>г. Барнаул, пр. Комсомольский 75, ООО Алтайский центр страхования «Страховая компания «СДС»<br/>
    Тел.: +7(385-2) 25-45-19, 66-70-79, серия 22-088</li>

    <li>г. Барнаул, пр. Красноармейский 36, САО "ЭРГО" Барнаульское представительство<br/>
    Тел.: +7(385-2) 28-26-07, 28-26-08, серия 22-072</li>

    <li>г. Барнаул, пр. Красноармейский51а оф. 709, Барнаульское агентство ООО СО "ВЕРНА"<br/>
    Тел.: +7(385-2)29-99-60</li>

    <li>г. Барнаул, пр. Социалистический, 45, ООО "НСГ-РОСЭНЕРГО" Алтайский филиал<br/>
    Тел.: +7(385-2) 65-80-39, серия 22-082</li>

    <li>г. Барнаул, пр-т Калинина, 6А, СПАО «РЕСО-Гарантия»<br/>
    Тел.: +7 (3852) 582–135,+7 (3852) 582–119, +7 (3852) 580–061<br/>
    Примечание: серия 22-005</li>

    <li>г. Барнаул, пр-т Красноармейский, д. 72, ЗАО "МАКС"<br/>
    Часы работы: понедельник - четверг: с 9.00 до 18.00 пятница и предпраздничные дни: с 9.00 до 17.00. обед 13.00-14.00. Суббота и воксресенье-выходные<br/>
    Тел.: +7 (3852) 63-58-85; +7 (3852) 63-64-76</li>

    <li>г. Барнаул, Пушкина 21, ООО "Зетта страхование" филиал в г. Барнауле<br/>
    Тел.: +7(385-2) 28-22-55, серия 22-026</li>

    <li>г. Барнаул, ул. Гоголя 36 оф. 410,417, 420, 423, АО Альфастрахование (Алтайский филиал)<br/>
    Тел.: +7(385-2)201-086, серия 22-045</li>

    <li>г. Барнаул, ул. Гоголя 47/ пр. Ленина 10, ООО "Страховое общество "Сургутнефтегаз"<br/>
    Тел.: +7(385-2) 63-67-32, 89-047</li>

    <li>г. Барнаул, ул. Гоголя 87, САО "ВСК"<br/>
    Тел.: +7(385-2) 55-39-18, серия 22-002</li>

    <li>г. Барнаул, ул. Короленко, 74, ПАО "САК "Энергогарант"<br/>
    Тел.: +7(385-2)56-71-74, серия 22-014</li>

    <li>г. Барнаул, ул. Малахова, 88 В, ООО СК «ВТБ Страхование»<br/>
    Тел.: +7(385-2) 567000, серия 22-058</li>

    <li>г. Барнаул, ул. Партизанская,40, серия 22-090, Филиал "АСКО-МЕД" ООО "Страховая компания "АРСЕНАЛЪ"<br/>
    Тел.: +7(385-2) 35-42-03</li>

    <li>г. Барнаул, ул. Пролетарская 131, ООО "Гелиос" Барнаульское представительство<br/>
    Тел.: +7(385-2) 201421, серия 22-039</li>

    <li>г. Барнаул, ул. Профинтерна, 24, ООО "СК "Согласие"<br/>
    Тел.: +7(385-2) 36-40-28, серия 22-034</li>

    <li>г. Бийск, г.Бийск, ул. Советская 205/1 , АО «ГСК «Югория» Бийский филиал<br/>
    Часы работы: понедельник-пятница: с 9.00 до 18.00, обед 13.00-14.00; выходные-суббота,воскресенье<br/>
    Тел.: +7(3854)-36-45-00, 36-78-31
    Примечание: Номер карточки 22-110</li>

    <li>г. Бийск, ул. Социалистическая, 96, оф. 13, ЗАО "АСК "Инвестстрах" Бийский филиал<br/>
    Тел.: +7 (3854) 55-55-96</li>

    <li>г. Бийск, ул.Васильева, 59/1, ООО "НСГ-РОСЭНЕРГО" Бийский филиал<br/>
    Тел.: +7 (3854) 555-198
    Примечание: серия 22-081</li>

    <li>г. Рубцовск, 658201, Алтайский край, г.Рубцовск, ул. Калинина, 14-1, ООО НСГ-РОСЭНЕРГО Рубцовский филиал<br/>
    Часы работы: понедельник - четверг: с 9.00 до 18.00 пятница и предпраздничные дни: с 9.00 до 17.00<br/>
    Тел.: +7 (385-57) 5-99-24</li>

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



<ul>

    <li>г. Барнаул, 656056, г. Барнаул, ул. Гоголя, д. 36, ЗАО АСК "Инвестстрах" Барнаульский филиал<br/>
    Часы работы: понедельник - четверг: с 9.00 до 18.00 пятница и предпраздничные дни: с 9.00 до 17.00<br/>
    Тел.: +7(3852) 53-24-70</li>

    <li>г. Барнаул, 656006, г. Барнаул, ул. Балтийская, д. 45, офис 303, Агентство «СК Екатеринбург» в г. Барнауле<br/>
    Тел.: +7(3852) 73-04-64</li>

    <li>г. Барнаул, Ленина 22, 4 этаж, АО "СОГАЗ"<br/>
    Тел.: +7(3852) 201-202, серия 22-004</li>

    <li>г. Барнаул, пр. Комсомольский 75, ООО Алтайский центр страхования «Страховая компания «СДС»<br/>
    Тел.: +7(385-2) 25-45-19, 66-70-79, серия 22-088</li>

    <li>г. Барнаул, пр. Красноармейский 36, САО "ЭРГО" Барнаульское представительство<br/>
    Тел.: +7(385-2) 28-26-07, 28-26-08, серия 22-072</li>

    <li>г. Барнаул, пр. Красноармейский51а оф. 709, Барнаульское агентство ООО СО "ВЕРНА"<br/>
    Тел.: +7(385-2)29-99-60</li>   

</ul>




                                                                                                                        
                                                      </div>
                                                  </article><!-- END таб 2 уровня -->

                                                  <article class="accordeon-item js-accordeon"><!-- аккордеон 2 уровня -->
                                                      <header class="accordeon-item__label js-accordeon__label">
                                                          Кемеровская область
                                                      </header>

                                                      <div class="accordeon-item__content js-accordeon__content">



<ul>

    <li>г. Барнаул, 656056, г. Барнаул, ул. Гоголя, д. 36, ЗАО АСК "Инвестстрах" Барнаульский филиал<br/>
    Часы работы: понедельник - четверг: с 9.00 до 18.00 пятница и предпраздничные дни: с 9.00 до 17.00<br/>
    Тел.: +7(3852) 53-24-70</li>

    <li>г. Барнаул, 656006, г. Барнаул, ул. Балтийская, д. 45, офис 303, Агентство «СК Екатеринбург» в г. Барнауле<br/>
    Тел.: +7(3852) 73-04-64</li>

    <li>г. Барнаул, Ленина 22, 4 этаж, АО "СОГАЗ"<br/>
    Тел.: +7(3852) 201-202, серия 22-004</li>

    <li>г. Барнаул, пр. Комсомольский 75, ООО Алтайский центр страхования «Страховая компания «СДС»<br/>
    Тел.: +7(385-2) 25-45-19, 66-70-79, серия 22-088</li>

    <li>г. Барнаул, пр. Красноармейский 36, САО "ЭРГО" Барнаульское представительство<br/>
    Тел.: +7(385-2) 28-26-07, 28-26-08, серия 22-072</li>

    <li>г. Барнаул, пр. Красноармейский51а оф. 709, Барнаульское агентство ООО СО "ВЕРНА"<br/>
    Тел.: +7(385-2)29-99-60</li>   

</ul>




                                                                                                                        
                                                      </div>
                                                  </article><!-- END таб 2 уровня -->

                                                  <article class="accordeon-item js-accordeon"><!-- аккордеон 2 уровня -->
                                                      <header class="accordeon-item__label js-accordeon__label">
                                                          Красноярский край
                                                      </header>

                                                      <div class="accordeon-item__content js-accordeon__content">



<ul>

    <li>г. Барнаул, 656056, г. Барнаул, ул. Гоголя, д. 36, ЗАО АСК "Инвестстрах" Барнаульский филиал<br/>
    Часы работы: понедельник - четверг: с 9.00 до 18.00 пятница и предпраздничные дни: с 9.00 до 17.00<br/>
    Тел.: +7(3852) 53-24-70</li>

    <li>г. Барнаул, 656006, г. Барнаул, ул. Балтийская, д. 45, офис 303, Агентство «СК Екатеринбург» в г. Барнауле<br/>
    Тел.: +7(3852) 73-04-64</li>

    <li>г. Барнаул, Ленина 22, 4 этаж, АО "СОГАЗ"<br/>
    Тел.: +7(3852) 201-202, серия 22-004</li>

    <li>г. Барнаул, пр. Комсомольский 75, ООО Алтайский центр страхования «Страховая компания «СДС»<br/>
    Тел.: +7(385-2) 25-45-19, 66-70-79, серия 22-088</li>

    <li>г. Барнаул, пр. Красноармейский 36, САО "ЭРГО" Барнаульское представительство<br/>
    Тел.: +7(385-2) 28-26-07, 28-26-08, серия 22-072</li>

    <li>г. Барнаул, пр. Красноармейский51а оф. 709, Барнаульское агентство ООО СО "ВЕРНА"<br/>
    Тел.: +7(385-2)29-99-60</li>   

</ul>




                                                                                                                        
                                                      </div>
                                                  </article><!-- END таб 2 уровня -->

                                                  <article class="accordeon-item js-accordeon"><!-- аккордеон 2 уровня -->
                                                      <header class="accordeon-item__label js-accordeon__label">
                                                          Новосибирская область
                                                      </header>

                                                      <div class="accordeon-item__content js-accordeon__content">



<ul>

    <li>г. Барнаул, 656056, г. Барнаул, ул. Гоголя, д. 36, ЗАО АСК "Инвестстрах" Барнаульский филиал<br/>
    Часы работы: понедельник - четверг: с 9.00 до 18.00 пятница и предпраздничные дни: с 9.00 до 17.00<br/>
    Тел.: +7(3852) 53-24-70</li>

    <li>г. Барнаул, 656006, г. Барнаул, ул. Балтийская, д. 45, офис 303, Агентство «СК Екатеринбург» в г. Барнауле<br/>
    Тел.: +7(3852) 73-04-64</li>

    <li>г. Барнаул, Ленина 22, 4 этаж, АО "СОГАЗ"<br/>
    Тел.: +7(3852) 201-202, серия 22-004</li>

    <li>г. Барнаул, пр. Комсомольский 75, ООО Алтайский центр страхования «Страховая компания «СДС»<br/>
    Тел.: +7(385-2) 25-45-19, 66-70-79, серия 22-088</li>

    <li>г. Барнаул, пр. Красноармейский 36, САО "ЭРГО" Барнаульское представительство<br/>
    Тел.: +7(385-2) 28-26-07, 28-26-08, серия 22-072</li>

    <li>г. Барнаул, пр. Красноармейский51а оф. 709, Барнаульское агентство ООО СО "ВЕРНА"<br/>
    Тел.: +7(385-2)29-99-60</li>   

</ul>




                                                                                                                        
                                                      </div>
                                                  </article><!-- END таб 2 уровня -->

                                                  <article class="accordeon-item js-accordeon"><!-- аккордеон 2 уровня -->
                                                      <header class="accordeon-item__label js-accordeon__label">
                                                          Омская область
                                                      </header>

                                                      <div class="accordeon-item__content js-accordeon__content">



<ul>

    <li>г. Барнаул, 656056, г. Барнаул, ул. Гоголя, д. 36, ЗАО АСК "Инвестстрах" Барнаульский филиал<br/>
    Часы работы: понедельник - четверг: с 9.00 до 18.00 пятница и предпраздничные дни: с 9.00 до 17.00<br/>
    Тел.: +7(3852) 53-24-70</li>

    <li>г. Барнаул, 656006, г. Барнаул, ул. Балтийская, д. 45, офис 303, Агентство «СК Екатеринбург» в г. Барнауле<br/>
    Тел.: +7(3852) 73-04-64</li>

    <li>г. Барнаул, Ленина 22, 4 этаж, АО "СОГАЗ"<br/>
    Тел.: +7(3852) 201-202, серия 22-004</li>

    <li>г. Барнаул, пр. Комсомольский 75, ООО Алтайский центр страхования «Страховая компания «СДС»<br/>
    Тел.: +7(385-2) 25-45-19, 66-70-79, серия 22-088</li>

    <li>г. Барнаул, пр. Красноармейский 36, САО "ЭРГО" Барнаульское представительство<br/>
    Тел.: +7(385-2) 28-26-07, 28-26-08, серия 22-072</li>

    <li>г. Барнаул, пр. Красноармейский51а оф. 709, Барнаульское агентство ООО СО "ВЕРНА"<br/>
    Тел.: +7(385-2)29-99-60</li>   

</ul>




                                                                                                                        
                                                      </div>
                                                  </article><!-- END таб 2 уровня -->

                                                  <article class="accordeon-item js-accordeon"><!-- аккордеон 2 уровня -->
                                                      <header class="accordeon-item__label js-accordeon__label">
                                                          Республика Алтай
                                                      </header>

                                                      <div class="accordeon-item__content js-accordeon__content">



<ul>

    <li>г. Барнаул, 656056, г. Барнаул, ул. Гоголя, д. 36, ЗАО АСК "Инвестстрах" Барнаульский филиал<br/>
    Часы работы: понедельник - четверг: с 9.00 до 18.00 пятница и предпраздничные дни: с 9.00 до 17.00<br/>
    Тел.: +7(3852) 53-24-70</li>

    <li>г. Барнаул, 656006, г. Барнаул, ул. Балтийская, д. 45, офис 303, Агентство «СК Екатеринбург» в г. Барнауле<br/>
    Тел.: +7(3852) 73-04-64</li>

    <li>г. Барнаул, Ленина 22, 4 этаж, АО "СОГАЗ"<br/>
    Тел.: +7(3852) 201-202, серия 22-004</li>

    <li>г. Барнаул, пр. Комсомольский 75, ООО Алтайский центр страхования «Страховая компания «СДС»<br/>
    Тел.: +7(385-2) 25-45-19, 66-70-79, серия 22-088</li>

    <li>г. Барнаул, пр. Красноармейский 36, САО "ЭРГО" Барнаульское представительство<br/>
    Тел.: +7(385-2) 28-26-07, 28-26-08, серия 22-072</li>

    <li>г. Барнаул, пр. Красноармейский51а оф. 709, Барнаульское агентство ООО СО "ВЕРНА"<br/>
    Тел.: +7(385-2)29-99-60</li>   

</ul>




                                                                                                                        
                                                      </div>
                                                  </article><!-- END таб 2 уровня -->

                                                  <article class="accordeon-item js-accordeon"><!-- аккордеон 2 уровня -->
                                                      <header class="accordeon-item__label js-accordeon__label">
                                                          Республика Хакасия
                                                      </header>

                                                      <div class="accordeon-item__content js-accordeon__content">



<ul>

    <li>г. Барнаул, 656056, г. Барнаул, ул. Гоголя, д. 36, ЗАО АСК "Инвестстрах" Барнаульский филиал<br/>
    Часы работы: понедельник - четверг: с 9.00 до 18.00 пятница и предпраздничные дни: с 9.00 до 17.00<br/>
    Тел.: +7(3852) 53-24-70</li>

    <li>г. Барнаул, 656006, г. Барнаул, ул. Балтийская, д. 45, офис 303, Агентство «СК Екатеринбург» в г. Барнауле<br/>
    Тел.: +7(3852) 73-04-64</li>

    <li>г. Барнаул, Ленина 22, 4 этаж, АО "СОГАЗ"<br/>
    Тел.: +7(3852) 201-202, серия 22-004</li>

    <li>г. Барнаул, пр. Комсомольский 75, ООО Алтайский центр страхования «Страховая компания «СДС»<br/>
    Тел.: +7(385-2) 25-45-19, 66-70-79, серия 22-088</li>

    <li>г. Барнаул, пр. Красноармейский 36, САО "ЭРГО" Барнаульское представительство<br/>
    Тел.: +7(385-2) 28-26-07, 28-26-08, серия 22-072</li>

    <li>г. Барнаул, пр. Красноармейский51а оф. 709, Барнаульское агентство ООО СО "ВЕРНА"<br/>
    Тел.: +7(385-2)29-99-60</li>   

</ul>




                                                                                                                        
                                                      </div>
                                                  </article><!-- END таб 2 уровня -->

                                                  <article class="accordeon-item js-accordeon"><!-- аккордеон 2 уровня -->
                                                      <header class="accordeon-item__label js-accordeon__label">
                                                          Томская область
                                                      </header>

                                                      <div class="accordeon-item__content js-accordeon__content">



<ul>

    <li>г. Барнаул, 656056, г. Барнаул, ул. Гоголя, д. 36, ЗАО АСК "Инвестстрах" Барнаульский филиал<br/>
    Часы работы: понедельник - четверг: с 9.00 до 18.00 пятница и предпраздничные дни: с 9.00 до 17.00<br/>
    Тел.: +7(3852) 53-24-70</li>

    <li>г. Барнаул, 656006, г. Барнаул, ул. Балтийская, д. 45, офис 303, Агентство «СК Екатеринбург» в г. Барнауле<br/>
    Тел.: +7(3852) 73-04-64</li>

    <li>г. Барнаул, Ленина 22, 4 этаж, АО "СОГАЗ"<br/>
    Тел.: +7(3852) 201-202, серия 22-004</li>

    <li>г. Барнаул, пр. Комсомольский 75, ООО Алтайский центр страхования «Страховая компания «СДС»<br/>
    Тел.: +7(385-2) 25-45-19, 66-70-79, серия 22-088</li>

    <li>г. Барнаул, пр. Красноармейский 36, САО "ЭРГО" Барнаульское представительство<br/>
    Тел.: +7(385-2) 28-26-07, 28-26-08, серия 22-072</li>

    <li>г. Барнаул, пр. Красноармейский51а оф. 709, Барнаульское агентство ООО СО "ВЕРНА"<br/>
    Тел.: +7(385-2)29-99-60</li>   

</ul>




                                                                                                                        
                                                      </div>
                                                  </article><!-- END таб 2 уровня -->

                                                  <article class="accordeon-item js-accordeon"><!-- аккордеон 2 уровня -->
                                                      <header class="accordeon-item__label js-accordeon__label">
                                                          Удмуртская республика
                                                      </header>

                                                      <div class="accordeon-item__content js-accordeon__content">



<ul>

    <li>г. Барнаул, 656056, г. Барнаул, ул. Гоголя, д. 36, ЗАО АСК "Инвестстрах" Барнаульский филиал<br/>
    Часы работы: понедельник - четверг: с 9.00 до 18.00 пятница и предпраздничные дни: с 9.00 до 17.00<br/>
    Тел.: +7(3852) 53-24-70</li>

    <li>г. Барнаул, 656006, г. Барнаул, ул. Балтийская, д. 45, офис 303, Агентство «СК Екатеринбург» в г. Барнауле<br/>
    Тел.: +7(3852) 73-04-64</li>

    <li>г. Барнаул, Ленина 22, 4 этаж, АО "СОГАЗ"<br/>
    Тел.: +7(3852) 201-202, серия 22-004</li>

    <li>г. Барнаул, пр. Комсомольский 75, ООО Алтайский центр страхования «Страховая компания «СДС»<br/>
    Тел.: +7(385-2) 25-45-19, 66-70-79, серия 22-088</li>

    <li>г. Барнаул, пр. Красноармейский 36, САО "ЭРГО" Барнаульское представительство<br/>
    Тел.: +7(385-2) 28-26-07, 28-26-08, серия 22-072</li>

    <li>г. Барнаул, пр. Красноармейский51а оф. 709, Барнаульское агентство ООО СО "ВЕРНА"<br/>
    Тел.: +7(385-2)29-99-60</li>   

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
                                                                        <label for="region3">Выберите пункт вакцинации</label> 
                                                                        <select name="district" id="region3">
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
                                                                        <label for="time" class="fancy-checkbox">
                                                                            <input id="time" name='isAllTime1' type="checkbox" >
                                                                            <span class="fancy-checkbox__checkmark"></span>
                                                                            Круглосуточно
                                                                        </label>
                                                                        <label for="check-klesh" class="fancy-checkbox">
                                                                            <input id="check-klesh" name='takingMite' type="checkbox">
                                                                            <span class="fancy-checkbox__checkmark"></span>
                                                                            Прием клеща
                                                                        </label>
                                                                        <label for="adults" class="fancy-checkbox">
                                                                            <input id="adults" name='adults' type="checkbox">
                                                                            <span class="fancy-checkbox__checkmark"></span>
                                                                            Прием взрослых
                                                                        </label>
                                                                        <label for="children" class="fancy-checkbox">
                                                                            <input id="children" name='children' type="checkbox">
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

                                            <article onclick="filter_one_prop(4,'takingMite')" class="accordeon-item js-accordeon">
                                                <header class="accordeon-item__label js-accordeon__label">
                                                    Сдать клеща на анализ
                                                </header>

                                                <div class="accordeon-item__content js-accordeon__content" style="display: none;">
                                                    <div class="selects container">

                                                        <form action="" rel='4' id='form_4' method="post" name="search-params" class="search-params"> 

                                                                    <div class="search-params__region">
                                                                        <label for="region4">Выберите пункт вакцинации</label> 
                                                                        <select name="district" id="region4">
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
                                                                        <label for="time" class="fancy-checkbox">
                                                                            <input id="time" name='isAllTime1' type="checkbox" >
                                                                            <span class="fancy-checkbox__checkmark"></span>
                                                                            Круглосуточно
                                                                        </label>
                                                                        <label for="check-klesh" class="fancy-checkbox">
                                                                            <input id="check-klesh" name='takingMite' type="checkbox">
                                                                            <span class="fancy-checkbox__checkmark"></span>
                                                                            Прием клеща
                                                                        </label>
                                                                        <label for="adults" class="fancy-checkbox">
                                                                            <input id="adults" name='adults' type="checkbox">
                                                                            <span class="fancy-checkbox__checkmark"></span>
                                                                            Прием взрослых
                                                                        </label>
                                                                        <label for="children" class="fancy-checkbox">
                                                                            <input id="children" name='children' type="checkbox">
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


<ul>

    <li>г. Барнаул, 656056, г. Барнаул, ул. Гоголя, д. 36, ЗАО АСК "Инвестстрах" Барнаульский филиал<br/>
    Часы работы: понедельник - четверг: с 9.00 до 18.00 пятница и предпраздничные дни: с 9.00 до 17.00<br/>
    Тел.: +7(3852) 53-24-70</li>

    <li>г. Барнаул, 656006, г. Барнаул, ул. Балтийская, д. 45, офис 303, Агентство «СК Екатеринбург» в г. Барнауле<br/>
    Тел.: +7(3852) 73-04-64</li>

    <li>г. Барнаул, Ленина 22, 4 этаж, АО "СОГАЗ"<br/>
    Тел.: +7(3852) 201-202, серия 22-004</li>

    <li>г. Барнаул, пр. Комсомольский 75, ООО Алтайский центр страхования «Страховая компания «СДС»<br/>
    Тел.: +7(385-2) 25-45-19, 66-70-79, серия 22-088</li>

    <li>г. Барнаул, пр. Красноармейский 36, САО "ЭРГО" Барнаульское представительство<br/>
    Тел.: +7(385-2) 28-26-07, 28-26-08, серия 22-072</li>

    <li>г. Барнаул, пр. Красноармейский51а оф. 709, Барнаульское агентство ООО СО "ВЕРНА"<br/>
    Тел.: +7(385-2)29-99-60</li>

    <li>г. Барнаул, пр. Социалистический, 45, ООО "НСГ-РОСЭНЕРГО" Алтайский филиал<br/>
    Тел.: +7(385-2) 65-80-39, серия 22-082</li>

    <li>г. Барнаул, пр-т Калинина, 6А, СПАО «РЕСО-Гарантия»<br/>
    Тел.: +7 (3852) 582–135,+7 (3852) 582–119, +7 (3852) 580–061<br/>
    Примечание: серия 22-005</li>

    <li>г. Барнаул, пр-т Красноармейский, д. 72, ЗАО "МАКС"<br/>
    Часы работы: понедельник - четверг: с 9.00 до 18.00 пятница и предпраздничные дни: с 9.00 до 17.00. обед 13.00-14.00. Суббота и воксресенье-выходные<br/>
    Тел.: +7 (3852) 63-58-85; +7 (3852) 63-64-76</li>

    <li>г. Барнаул, Пушкина 21, ООО "Зетта страхование" филиал в г. Барнауле<br/>
    Тел.: +7(385-2) 28-22-55, серия 22-026</li>

    <li>г. Барнаул, ул. Гоголя 36 оф. 410,417, 420, 423, АО Альфастрахование (Алтайский филиал)<br/>
    Тел.: +7(385-2)201-086, серия 22-045</li>

    <li>г. Барнаул, ул. Гоголя 47/ пр. Ленина 10, ООО "Страховое общество "Сургутнефтегаз"<br/>
    Тел.: +7(385-2) 63-67-32, 89-047</li>

    <li>г. Барнаул, ул. Гоголя 87, САО "ВСК"<br/>
    Тел.: +7(385-2) 55-39-18, серия 22-002</li>

    <li>г. Барнаул, ул. Короленко, 74, ПАО "САК "Энергогарант"<br/>
    Тел.: +7(385-2)56-71-74, серия 22-014</li>

    <li>г. Барнаул, ул. Малахова, 88 В, ООО СК «ВТБ Страхование»<br/>
    Тел.: +7(385-2) 567000, серия 22-058</li>

    <li>г. Барнаул, ул. Партизанская,40, серия 22-090, Филиал "АСКО-МЕД" ООО "Страховая компания "АРСЕНАЛЪ"<br/>
    Тел.: +7(385-2) 35-42-03</li>

    <li>г. Барнаул, ул. Пролетарская 131, ООО "Гелиос" Барнаульское представительство<br/>
    Тел.: +7(385-2) 201421, серия 22-039</li>

    <li>г. Барнаул, ул. Профинтерна, 24, ООО "СК "Согласие"<br/>
    Тел.: +7(385-2) 36-40-28, серия 22-034</li>

    <li>г. Бийск, г.Бийск, ул. Советская 205/1 , АО «ГСК «Югория» Бийский филиал<br/>
    Часы работы: понедельник-пятница: с 9.00 до 18.00, обед 13.00-14.00; выходные-суббота,воскресенье<br/>
    Тел.: +7(3854)-36-45-00, 36-78-31
    Примечание: Номер карточки 22-110</li>

    <li>г. Бийск, ул. Социалистическая, 96, оф. 13, ЗАО "АСК "Инвестстрах" Бийский филиал<br/>
    Тел.: +7 (3854) 55-55-96</li>

    <li>г. Бийск, ул.Васильева, 59/1, ООО "НСГ-РОСЭНЕРГО" Бийский филиал<br/>
    Тел.: +7 (3854) 555-198
    Примечание: серия 22-081</li>

    <li>г. Рубцовск, 658201, Алтайский край, г.Рубцовск, ул. Калинина, 14-1, ООО НСГ-РОСЭНЕРГО Рубцовский филиал<br/>
    Часы работы: понедельник - четверг: с 9.00 до 18.00 пятница и предпраздничные дни: с 9.00 до 17.00<br/>
    Тел.: +7 (385-57) 5-99-24</li>

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



<ul>

    <li>г. Барнаул, 656056, г. Барнаул, ул. Гоголя, д. 36, ЗАО АСК "Инвестстрах" Барнаульский филиал<br/>
    Часы работы: понедельник - четверг: с 9.00 до 18.00 пятница и предпраздничные дни: с 9.00 до 17.00<br/>
    Тел.: +7(3852) 53-24-70</li>

    <li>г. Барнаул, 656006, г. Барнаул, ул. Балтийская, д. 45, офис 303, Агентство «СК Екатеринбург» в г. Барнауле<br/>
    Тел.: +7(3852) 73-04-64</li>

    <li>г. Барнаул, Ленина 22, 4 этаж, АО "СОГАЗ"<br/>
    Тел.: +7(3852) 201-202, серия 22-004</li>

    <li>г. Барнаул, пр. Комсомольский 75, ООО Алтайский центр страхования «Страховая компания «СДС»<br/>
    Тел.: +7(385-2) 25-45-19, 66-70-79, серия 22-088</li>

    <li>г. Барнаул, пр. Красноармейский 36, САО "ЭРГО" Барнаульское представительство<br/>
    Тел.: +7(385-2) 28-26-07, 28-26-08, серия 22-072</li>

    <li>г. Барнаул, пр. Красноармейский51а оф. 709, Барнаульское агентство ООО СО "ВЕРНА"<br/>
    Тел.: +7(385-2)29-99-60</li>   

</ul>




                                                                                                                        
                                                      </div>
                                                  </article><!-- END таб 2 уровня -->

                                                  <article class="accordeon-item js-accordeon"><!-- аккордеон 2 уровня -->
                                                      <header class="accordeon-item__label js-accordeon__label">
                                                          Кемеровская область
                                                      </header>

                                                      <div class="accordeon-item__content js-accordeon__content">



<ul>

    <li>г. Барнаул, 656056, г. Барнаул, ул. Гоголя, д. 36, ЗАО АСК "Инвестстрах" Барнаульский филиал<br/>
    Часы работы: понедельник - четверг: с 9.00 до 18.00 пятница и предпраздничные дни: с 9.00 до 17.00<br/>
    Тел.: +7(3852) 53-24-70</li>

    <li>г. Барнаул, 656006, г. Барнаул, ул. Балтийская, д. 45, офис 303, Агентство «СК Екатеринбург» в г. Барнауле<br/>
    Тел.: +7(3852) 73-04-64</li>

    <li>г. Барнаул, Ленина 22, 4 этаж, АО "СОГАЗ"<br/>
    Тел.: +7(3852) 201-202, серия 22-004</li>

    <li>г. Барнаул, пр. Комсомольский 75, ООО Алтайский центр страхования «Страховая компания «СДС»<br/>
    Тел.: +7(385-2) 25-45-19, 66-70-79, серия 22-088</li>

    <li>г. Барнаул, пр. Красноармейский 36, САО "ЭРГО" Барнаульское представительство<br/>
    Тел.: +7(385-2) 28-26-07, 28-26-08, серия 22-072</li>

    <li>г. Барнаул, пр. Красноармейский51а оф. 709, Барнаульское агентство ООО СО "ВЕРНА"<br/>
    Тел.: +7(385-2)29-99-60</li>   

</ul>




                                                                                                                        
                                                      </div>
                                                  </article><!-- END таб 2 уровня -->

                                                  <article class="accordeon-item js-accordeon"><!-- аккордеон 2 уровня -->
                                                      <header class="accordeon-item__label js-accordeon__label">
                                                          Красноярский край
                                                      </header>

                                                      <div class="accordeon-item__content js-accordeon__content">



<ul>

    <li>г. Барнаул, 656056, г. Барнаул, ул. Гоголя, д. 36, ЗАО АСК "Инвестстрах" Барнаульский филиал<br/>
    Часы работы: понедельник - четверг: с 9.00 до 18.00 пятница и предпраздничные дни: с 9.00 до 17.00<br/>
    Тел.: +7(3852) 53-24-70</li>

    <li>г. Барнаул, 656006, г. Барнаул, ул. Балтийская, д. 45, офис 303, Агентство «СК Екатеринбург» в г. Барнауле<br/>
    Тел.: +7(3852) 73-04-64</li>

    <li>г. Барнаул, Ленина 22, 4 этаж, АО "СОГАЗ"<br/>
    Тел.: +7(3852) 201-202, серия 22-004</li>

    <li>г. Барнаул, пр. Комсомольский 75, ООО Алтайский центр страхования «Страховая компания «СДС»<br/>
    Тел.: +7(385-2) 25-45-19, 66-70-79, серия 22-088</li>

    <li>г. Барнаул, пр. Красноармейский 36, САО "ЭРГО" Барнаульское представительство<br/>
    Тел.: +7(385-2) 28-26-07, 28-26-08, серия 22-072</li>

    <li>г. Барнаул, пр. Красноармейский51а оф. 709, Барнаульское агентство ООО СО "ВЕРНА"<br/>
    Тел.: +7(385-2)29-99-60</li>   

</ul>




                                                                                                                        
                                                      </div>
                                                  </article><!-- END таб 2 уровня -->

                                                  <article class="accordeon-item js-accordeon"><!-- аккордеон 2 уровня -->
                                                      <header class="accordeon-item__label js-accordeon__label">
                                                          Новосибирская область
                                                      </header>

                                                      <div class="accordeon-item__content js-accordeon__content">



<ul>

    <li>г. Барнаул, 656056, г. Барнаул, ул. Гоголя, д. 36, ЗАО АСК "Инвестстрах" Барнаульский филиал<br/>
    Часы работы: понедельник - четверг: с 9.00 до 18.00 пятница и предпраздничные дни: с 9.00 до 17.00<br/>
    Тел.: +7(3852) 53-24-70</li>

    <li>г. Барнаул, 656006, г. Барнаул, ул. Балтийская, д. 45, офис 303, Агентство «СК Екатеринбург» в г. Барнауле<br/>
    Тел.: +7(3852) 73-04-64</li>

    <li>г. Барнаул, Ленина 22, 4 этаж, АО "СОГАЗ"<br/>
    Тел.: +7(3852) 201-202, серия 22-004</li>

    <li>г. Барнаул, пр. Комсомольский 75, ООО Алтайский центр страхования «Страховая компания «СДС»<br/>
    Тел.: +7(385-2) 25-45-19, 66-70-79, серия 22-088</li>

    <li>г. Барнаул, пр. Красноармейский 36, САО "ЭРГО" Барнаульское представительство<br/>
    Тел.: +7(385-2) 28-26-07, 28-26-08, серия 22-072</li>

    <li>г. Барнаул, пр. Красноармейский51а оф. 709, Барнаульское агентство ООО СО "ВЕРНА"<br/>
    Тел.: +7(385-2)29-99-60</li>   

</ul>




                                                                                                                        
                                                      </div>
                                                  </article><!-- END таб 2 уровня -->

                                                  <article class="accordeon-item js-accordeon"><!-- аккордеон 2 уровня -->
                                                      <header class="accordeon-item__label js-accordeon__label">
                                                          Омская область
                                                      </header>

                                                      <div class="accordeon-item__content js-accordeon__content">



<ul>

    <li>г. Барнаул, 656056, г. Барнаул, ул. Гоголя, д. 36, ЗАО АСК "Инвестстрах" Барнаульский филиал<br/>
    Часы работы: понедельник - четверг: с 9.00 до 18.00 пятница и предпраздничные дни: с 9.00 до 17.00<br/>
    Тел.: +7(3852) 53-24-70</li>

    <li>г. Барнаул, 656006, г. Барнаул, ул. Балтийская, д. 45, офис 303, Агентство «СК Екатеринбург» в г. Барнауле<br/>
    Тел.: +7(3852) 73-04-64</li>

    <li>г. Барнаул, Ленина 22, 4 этаж, АО "СОГАЗ"<br/>
    Тел.: +7(3852) 201-202, серия 22-004</li>

    <li>г. Барнаул, пр. Комсомольский 75, ООО Алтайский центр страхования «Страховая компания «СДС»<br/>
    Тел.: +7(385-2) 25-45-19, 66-70-79, серия 22-088</li>

    <li>г. Барнаул, пр. Красноармейский 36, САО "ЭРГО" Барнаульское представительство<br/>
    Тел.: +7(385-2) 28-26-07, 28-26-08, серия 22-072</li>

    <li>г. Барнаул, пр. Красноармейский51а оф. 709, Барнаульское агентство ООО СО "ВЕРНА"<br/>
    Тел.: +7(385-2)29-99-60</li>   

</ul>




                                                                                                                        
                                                      </div>
                                                  </article><!-- END таб 2 уровня -->

                                                  <article class="accordeon-item js-accordeon"><!-- аккордеон 2 уровня -->
                                                      <header class="accordeon-item__label js-accordeon__label">
                                                          Республика Алтай
                                                      </header>

                                                      <div class="accordeon-item__content js-accordeon__content">



<ul>

    <li>г. Барнаул, 656056, г. Барнаул, ул. Гоголя, д. 36, ЗАО АСК "Инвестстрах" Барнаульский филиал<br/>
    Часы работы: понедельник - четверг: с 9.00 до 18.00 пятница и предпраздничные дни: с 9.00 до 17.00<br/>
    Тел.: +7(3852) 53-24-70</li>

    <li>г. Барнаул, 656006, г. Барнаул, ул. Балтийская, д. 45, офис 303, Агентство «СК Екатеринбург» в г. Барнауле<br/>
    Тел.: +7(3852) 73-04-64</li>

    <li>г. Барнаул, Ленина 22, 4 этаж, АО "СОГАЗ"<br/>
    Тел.: +7(3852) 201-202, серия 22-004</li>

    <li>г. Барнаул, пр. Комсомольский 75, ООО Алтайский центр страхования «Страховая компания «СДС»<br/>
    Тел.: +7(385-2) 25-45-19, 66-70-79, серия 22-088</li>

    <li>г. Барнаул, пр. Красноармейский 36, САО "ЭРГО" Барнаульское представительство<br/>
    Тел.: +7(385-2) 28-26-07, 28-26-08, серия 22-072</li>

    <li>г. Барнаул, пр. Красноармейский51а оф. 709, Барнаульское агентство ООО СО "ВЕРНА"<br/>
    Тел.: +7(385-2)29-99-60</li>   

</ul>




                                                                                                                        
                                                      </div>
                                                  </article><!-- END таб 2 уровня -->

                                                  <article class="accordeon-item js-accordeon"><!-- аккордеон 2 уровня -->
                                                      <header class="accordeon-item__label js-accordeon__label">
                                                          Республика Хакасия
                                                      </header>

                                                      <div class="accordeon-item__content js-accordeon__content">



<ul>

    <li>г. Барнаул, 656056, г. Барнаул, ул. Гоголя, д. 36, ЗАО АСК "Инвестстрах" Барнаульский филиал<br/>
    Часы работы: понедельник - четверг: с 9.00 до 18.00 пятница и предпраздничные дни: с 9.00 до 17.00<br/>
    Тел.: +7(3852) 53-24-70</li>

    <li>г. Барнаул, 656006, г. Барнаул, ул. Балтийская, д. 45, офис 303, Агентство «СК Екатеринбург» в г. Барнауле<br/>
    Тел.: +7(3852) 73-04-64</li>

    <li>г. Барнаул, Ленина 22, 4 этаж, АО "СОГАЗ"<br/>
    Тел.: +7(3852) 201-202, серия 22-004</li>

    <li>г. Барнаул, пр. Комсомольский 75, ООО Алтайский центр страхования «Страховая компания «СДС»<br/>
    Тел.: +7(385-2) 25-45-19, 66-70-79, серия 22-088</li>

    <li>г. Барнаул, пр. Красноармейский 36, САО "ЭРГО" Барнаульское представительство<br/>
    Тел.: +7(385-2) 28-26-07, 28-26-08, серия 22-072</li>

    <li>г. Барнаул, пр. Красноармейский51а оф. 709, Барнаульское агентство ООО СО "ВЕРНА"<br/>
    Тел.: +7(385-2)29-99-60</li>   

</ul>




                                                                                                                        
                                                      </div>
                                                  </article><!-- END таб 2 уровня -->

                                                  <article class="accordeon-item js-accordeon"><!-- аккордеон 2 уровня -->
                                                      <header class="accordeon-item__label js-accordeon__label">
                                                          Томская область
                                                      </header>

                                                      <div class="accordeon-item__content js-accordeon__content">



<ul>

    <li>г. Барнаул, 656056, г. Барнаул, ул. Гоголя, д. 36, ЗАО АСК "Инвестстрах" Барнаульский филиал<br/>
    Часы работы: понедельник - четверг: с 9.00 до 18.00 пятница и предпраздничные дни: с 9.00 до 17.00<br/>
    Тел.: +7(3852) 53-24-70</li>

    <li>г. Барнаул, 656006, г. Барнаул, ул. Балтийская, д. 45, офис 303, Агентство «СК Екатеринбург» в г. Барнауле<br/>
    Тел.: +7(3852) 73-04-64</li>

    <li>г. Барнаул, Ленина 22, 4 этаж, АО "СОГАЗ"<br/>
    Тел.: +7(3852) 201-202, серия 22-004</li>

    <li>г. Барнаул, пр. Комсомольский 75, ООО Алтайский центр страхования «Страховая компания «СДС»<br/>
    Тел.: +7(385-2) 25-45-19, 66-70-79, серия 22-088</li>

    <li>г. Барнаул, пр. Красноармейский 36, САО "ЭРГО" Барнаульское представительство<br/>
    Тел.: +7(385-2) 28-26-07, 28-26-08, серия 22-072</li>

    <li>г. Барнаул, пр. Красноармейский51а оф. 709, Барнаульское агентство ООО СО "ВЕРНА"<br/>
    Тел.: +7(385-2)29-99-60</li>   

</ul>




                                                                                                                        
                                                      </div>
                                                  </article><!-- END таб 2 уровня -->

                                                  <article class="accordeon-item js-accordeon"><!-- аккордеон 2 уровня -->
                                                      <header class="accordeon-item__label js-accordeon__label">
                                                          Удмуртская республика
                                                      </header>

                                                      <div class="accordeon-item__content js-accordeon__content">



<ul>

    <li>г. Барнаул, 656056, г. Барнаул, ул. Гоголя, д. 36, ЗАО АСК "Инвестстрах" Барнаульский филиал<br/>
    Часы работы: понедельник - четверг: с 9.00 до 18.00 пятница и предпраздничные дни: с 9.00 до 17.00<br/>
    Тел.: +7(3852) 53-24-70</li>

    <li>г. Барнаул, 656006, г. Барнаул, ул. Балтийская, д. 45, офис 303, Агентство «СК Екатеринбург» в г. Барнауле<br/>
    Тел.: +7(3852) 73-04-64</li>

    <li>г. Барнаул, Ленина 22, 4 этаж, АО "СОГАЗ"<br/>
    Тел.: +7(3852) 201-202, серия 22-004</li>

    <li>г. Барнаул, пр. Комсомольский 75, ООО Алтайский центр страхования «Страховая компания «СДС»<br/>
    Тел.: +7(385-2) 25-45-19, 66-70-79, серия 22-088</li>

    <li>г. Барнаул, пр. Красноармейский 36, САО "ЭРГО" Барнаульское представительство<br/>
    Тел.: +7(385-2) 28-26-07, 28-26-08, серия 22-072</li>

    <li>г. Барнаул, пр. Красноармейский51а оф. 709, Барнаульское агентство ООО СО "ВЕРНА"<br/>
    Тел.: +7(385-2)29-99-60</li>   

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

<input onclick="showMarkers();" type="button" value="Показать">

<input onclick="filter_one_prop('isAllTime1');" type="button" value="Свойства">

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