<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php');
?>



                        
                        <!-- TABS CONTAINER. REQUIRED -->
                        <div class="section-tabs section-tabs_horizontal section-tabs_level-1">

                              <!-- TABS -->
                              <div class="section-tabs__tabs container">
                                    <ul>
                                          <li class="tab tab_big">
                                              <p>Что делать,<br/> если укусил клещ?</p>
                                              <span>Не волнуйтесь, Вы защищены. Вам надо поставить иммуноглобулин, а клеща можно сдать на анализ.</span>
                                          </li>
                                          <li class="tab tab_big">
                                              <p>Застраховаться<br/> от укуса клеща</p>
                                              <span>Cтраховой полис ОСПЗ гарантирует Вам медицинскую помощь при укусах клещей.</span>
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
                                                            <li class="tab active">
                                                                Поставить иммуноглобулин
                                                            </li>
                                                            <li class="tab">
                                                                Сдать клеща на анализ
                                                            </li>
                                                      </ul>
                                                 </div>

                                                 <!-- TAB-PANELS -->
                                                <div class="section-tabs__content">

                                                      <!-- PANEL -->
                                                      <article class="slide">

                                                            <div class="selects container">

                                                                <form action="#" method="post" name="search-params" class="search-params"> 

                                                                    <div class="search-params__region">
                                                                        <label for="region">Выберите пункт вакцинации</label> 
                                                                        <select name="region" id="region">
                                                                            <option>Все регионы</option>
                                                                            <option>Алтайский край</option>
                                                                            <option>Другой регион</option>
                                                                            <option>Замечательный регион</option>
                                                                            <option>Прекрасно-солнечный регион</option>
                                                                        </select>
                                                                    </div>

                                                                    <div class="search-params__checkboxes">
                                                                        <label for="time" class="fancy-checkbox">
                                                                            <input id="time" type="checkbox" checked="checked">
                                                                            <span class="fancy-checkbox__checkmark"></span>
                                                                            Круглосуточно
                                                                        </label>
                                                                        <label for="check-klesh" class="fancy-checkbox">
                                                                            <input id="check-klesh" type="checkbox">
                                                                            <span class="fancy-checkbox__checkmark"></span>
                                                                            Прием клеща
                                                                        </label>
                                                                        <label for="adults" class="fancy-checkbox">
                                                                            <input id="adults" type="checkbox">
                                                                            <span class="fancy-checkbox__checkmark"></span>
                                                                            Прием взрослых
                                                                        </label>
                                                                        <label for="children" class="fancy-checkbox">
                                                                            <input id="children" type="checkbox">
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

                                                                <form action="" method="post" name="search-params" class="search-params"> 

                                                                    <div class="search-params__region">
                                                                        <label for="region1">Выберите пункт вакцинации</label> 
                                                                        <select name="region1" id="region">
                                                                            <option>Все регионы</option>
                                                                            <option>Алтайский край</option>
                                                                            <option>Другой регион</option>
                                                                            <option>Замечательный регион</option>
                                                                            <option>Прекрасно-солнечный регион</option>
                                                                        </select>
                                                                    </div>

                                                                    <div class="search-params__checkboxes">
                                                                        <label for="time1" class="fancy-checkbox">
                                                                            <input id="time1" type="checkbox">
                                                                            <span class="fancy-checkbox__checkmark"></span>
                                                                            Круглосуточно
                                                                        </label>
                                                                        <label for="check-klesh1" class="fancy-checkbox">
                                                                            <input id="check-klesh1" type="checkbox" checked="checked">
                                                                            <span class="fancy-checkbox__checkmark"></span>
                                                                            Прием клеща
                                                                        </label>
                                                                        <label for="adults1" class="fancy-checkbox">
                                                                            <input id="adults1" type="checkbox">
                                                                            <span class="fancy-checkbox__checkmark"></span>
                                                                            Прием взрослых
                                                                        </label>
                                                                        <label for="children1" class="fancy-checkbox">
                                                                            <input id="children1" type="checkbox">
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
                                                      
                                                      </article>

                                                </div>
                                          </div>

                                    </article>

                                    <!-- PANEL -->
                                    <article class="slide"  style="display:none;">

                                        <div class="selects container content-container">

                                            <form action="" method="post" name="search-params" class="search-params"> 

                                                <div class="search-params__region">
                                                    <label for="region2">Выберите пункт вакцинации</label> 
                                                    <select name="region2" id="region">
                                                        <option>Все регионы</option>
                                                        <option>Алтайский край</option>
                                                        <option>Другой регион</option>
                                                        <option>Замечательный регион</option>
                                                        <option>Прекрасно-солнечный регион</option>
                                                    </select>
                                                </div>

                                                <div class="search-params__checkboxes">
                                                    <label for="time2" class="fancy-checkbox">
                                                        <input id="time2" type="checkbox" checked="checked">
                                                        <span class="fancy-checkbox__checkmark"></span>
                                                        Круглосуточно
                                                    </label>
                                                    <label for="check-klesh2" class="fancy-checkbox">
                                                        <input id="check-klesh2" type="checkbox">
                                                        <span class="fancy-checkbox__checkmark"></span>
                                                        Прием клеща
                                                    </label>
                                                    <label for="adults2" class="fancy-checkbox">
                                                        <input id="adults2" type="checkbox">
                                                        <span class="fancy-checkbox__checkmark"></span>
                                                        Прием взрослых
                                                    </label>
                                                    <label for="children2" class="fancy-checkbox">
                                                        <input id="children2" type="checkbox">
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






                                          <!-- <div class="section-tabs section-tabs_horizontal section-tabs_level-2">

                                                <div class="section-tabs__tabs container">
                                                      <ul>
                                                            <li class="tab active">
                                                                Застраховаться 1
                                                            </li>
                                                            <li class="tab">
                                                                Застраховаться 2
                                                            </li>
                                                      </ul>
                                                 </div>

                                                <div class="section-tabs__content">

                                                      <article class="slide">

                                                            <div class="selects container">

                                                                <form action="" method="post" name="search-params" class="search-params"> 

                                                                    <div class="search-params__region">
                                                                        <label for="region2">Выберите пункт вакцинации</label> 
                                                                        <select name="region2" id="region">
                                                                            <option>Все регионы</option>
                                                                            <option>Алтайский край</option>
                                                                            <option>Другой регион</option>
                                                                            <option>Замечательный регион</option>
                                                                            <option>Прекрасно-солнечный регион</option>
                                                                        </select>
                                                                    </div>

                                                                    <div class="search-params__checkboxes">
                                                                        <label for="time2" class="fancy-checkbox">
                                                                            <input id="time2" type="checkbox" checked="checked">
                                                                            <span class="fancy-checkbox__checkmark"></span>
                                                                            Круглосуточно
                                                                        </label>
                                                                        <label for="check-klesh2" class="fancy-checkbox">
                                                                            <input id="check-klesh2" type="checkbox">
                                                                            <span class="fancy-checkbox__checkmark"></span>
                                                                            Прием клеща
                                                                        </label>
                                                                        <label for="adults2" class="fancy-checkbox">
                                                                            <input id="adults2" type="checkbox">
                                                                            <span class="fancy-checkbox__checkmark"></span>
                                                                            Прием взрослых
                                                                        </label>
                                                                        <label for="children2" class="fancy-checkbox">
                                                                            <input id="children2" type="checkbox">
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
                                                            
                                                      </article>

                                                      <article class="slide" style="display:none;">
                                                            <div class="selects container">

                                                                <form action="" method="post" name="search-params" class="search-params"> 

                                                                    <div class="search-params__region">
                                                                        <label for="region3">Выберите пункт вакцинации</label> 
                                                                        <select name="region3" id="region">
                                                                            <option>Все регионы</option>
                                                                            <option>Алтайский край</option>
                                                                            <option>Другой регион</option>
                                                                            <option>Замечательный регион</option>
                                                                            <option>Прекрасно-солнечный регион</option>
                                                                        </select>
                                                                    </div>

                                                                    <div class="search-params__checkboxes">
                                                                        <label for="time3" class="fancy-checkbox">
                                                                            <input id="time3" type="checkbox" checked="checked">
                                                                            <span class="fancy-checkbox__checkmark"></span>
                                                                            Круглосуточно
                                                                        </label>
                                                                        <label for="check-klesh3" class="fancy-checkbox">
                                                                            <input id="check-klesh3" type="checkbox">
                                                                            <span class="fancy-checkbox__checkmark"></span>
                                                                            Прием клеща
                                                                        </label>
                                                                        <label for="adults3" class="fancy-checkbox">
                                                                            <input id="adults3" type="checkbox">
                                                                            <span class="fancy-checkbox__checkmark"></span>
                                                                            Прием взрослых
                                                                        </label>
                                                                        <label for="children3" class="fancy-checkbox">
                                                                            <input id="children3" type="checkbox">
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
                                                      
                                                      </article>

                                                </div>
                                          </div> -->
                                    
                                    </article>

                              </div>
                        </div> <!-- section-tabs end-->

                        <!-- <div class="container"> -->
                            
                            
                            <div class="accordeon"><!-- обертка 1 уровня-->

                                <article class="accordeon-item js-accordeon"><!-- аккордеон 1 уровня - большая зеленая кнопка-->
                                    <header class="accordeon-item__label js-accordeon__label">
                                        <p>Что делать,<br/> если укусил клещ?</p>
                                        <span>Не волнуйтесь, Вы защищены. Вам надо поставить иммуноглобулин, а клеща можно сдать на анализ.</span>
                                    </header>

                                    <div class="accordeon-item__content js-accordeon__content" style="display: none;">
                                        
                                        <div class="accordeon"> <!-- обертка 2 уровня-->

                                            <article class="accordeon-item js-accordeon"><!-- аккордеон 2 уровня -->
                                                <header class="accordeon-item__label js-accordeon__label">
                                                    Поставить иммуноглобулин
                                                </header>

                                                <div class="accordeon-item__content js-accordeon__content" style="display: none;">
                                                    <div class="selects container">

                                                        <form action="" method="post" name="search-params" class="search-params"> 

                                                            <div class="search-params__region">
                                                                <label for="region4">Выберите пункт вакцинации</label> 
                                                                <select name="region4" id="region">
                                                                    <option>Все регионы</option>
                                                                    <option>Алтайский край</option>
                                                                    <option>Другой регион</option>
                                                                    <option>Замечательный регион</option>
                                                                    <option>Прекрасно-солнечный регион</option>
                                                                </select>
                                                            </div>

                                                            <div class="search-params__checkboxes">
                                                                <label for="time4" class="fancy-checkbox">
                                                                    <input id="time4" type="checkbox" checked="checked">
                                                                    <span class="fancy-checkbox__checkmark"></span>
                                                                    Круглосуточно
                                                                </label>
                                                                <label for="check-klesh4" class="fancy-checkbox">
                                                                    <input id="check-klesh4" type="checkbox">
                                                                    <span class="fancy-checkbox__checkmark"></span>
                                                                    Прием клеща
                                                                </label>
                                                                <label for="adults4" class="fancy-checkbox">
                                                                    <input id="adults4" type="checkbox">
                                                                    <span class="fancy-checkbox__checkmark"></span>
                                                                    Прием взрослых
                                                                </label>
                                                                <label for="children4" class="fancy-checkbox">
                                                                    <input id="children4" type="checkbox">
                                                                    <span class="fancy-checkbox__checkmark"></span>
                                                                    Прием детей
                                                                </label>
                                                            </div>  
                                                        </form>

                                                    </div>

                                                          <div class='map' id='map_5'>
                                                              <p>
                                                                  <img style="width: 100%;" src="img/map.png" alt="">
                                                              </p>   
                                                          </div>                                                         
                                                </div>
                                            </article><!-- END таб 2 уровня -->

                                            <article class="accordeon-item js-accordeon"><!-- аккордеон 2 уровня -->
                                                <header class="accordeon-item__label js-accordeon__label">
                                                    Сдать клеща на анализ
                                                </header>

                                                <div class="accordeon-item__content js-accordeon__content" style="display: none;">
                                                    <div class="selects container">

                                                        <form action="" method="post" name="search-params" class="search-params"> 

                                                            <div class="search-params__region">
                                                                <label for="region5">Выберите пункт вакцинации</label> 
                                                                <select name="region5" id="region">
                                                                    <option>Все регионы</option>
                                                                    <option>Алтайский край</option>
                                                                    <option>Другой регион</option>
                                                                    <option>Замечательный регион</option>
                                                                    <option>Прекрасно-солнечный регион</option>
                                                                </select>
                                                            </div>

                                                            <div class="search-params__checkboxes">
                                                                <label for="time5" class="fancy-checkbox">
                                                                    <input id="time5" type="checkbox" checked="checked">
                                                                    <span class="fancy-checkbox__checkmark"></span>
                                                                    Круглосуточно
                                                                </label>
                                                                <label for="check-klesh5" class="fancy-checkbox">
                                                                    <input id="check-klesh5" type="checkbox">
                                                                    <span class="fancy-checkbox__checkmark"></span>
                                                                    Прием клеща
                                                                </label>
                                                                <label for="adults5" class="fancy-checkbox">
                                                                    <input id="adults5" type="checkbox">
                                                                    <span class="fancy-checkbox__checkmark"></span>
                                                                    Прием взрослых
                                                                </label>
                                                                <label for="children5" class="fancy-checkbox">
                                                                    <input id="children5" type="checkbox">
                                                                    <span class="fancy-checkbox__checkmark"></span>
                                                                    Прием детей
                                                                </label>
                                                            </div>  
                                                        </form>

                                                    </div>
                                                          <div class='map' id='map_6'>
                                                              <p>
                                                                  <img style="width: 100%;" src="img/map.png" alt="">
                                                              </p>   
                                                          </div>                                                
                                                </div>
                                            </article><!-- END таб 2 уровня -->


                                        </div> <!-- обертка 2 уровня-->

                                    </div>
                                </article><!-- END таб 1 уровня - большая зеленая кнопка-->


                                <article class="accordeon-item js-accordeon"><!-- аккордеон 1 уровня - большая зеленая кнопка-->
                                    <header class="accordeon-item__label js-accordeon__label">
                                        <p>Застраховаться<br/> от укуса клеща</p>
                                        <span>Cтраховой полис ОСПЗ гарантирует Вам медицинскую помощь при укусах клещей.</span>
                                    </header>

                                    <div class="accordeon-item__content js-accordeon__content" style="display: none;">
                                        
                                        <div class="accordeon"> <!-- обертка 2 уровня-->

                                            <article class="accordeon-item js-accordeon"><!-- аккордеон 2 уровня -->
                                                <header class="accordeon-item__label js-accordeon__label">
                                                    Поставить иммуноглобулин
                                                </header>

                                                <div class="accordeon-item__content js-accordeon__content" style="display: none;">
                                                    <div class="selects container">

                                                        <form action="" method="post" name="search-params" class="search-params"> 

                                                            <div class="search-params__region">
                                                                <label for="region6">Выберите пункт вакцинации</label> 
                                                                <select name="region6" id="region">
                                                                    <option>Все регионы</option>
                                                                    <option>Алтайский край</option>
                                                                    <option>Другой регион</option>
                                                                    <option>Замечательный регион</option>
                                                                    <option>Прекрасно-солнечный регион</option>
                                                                </select>
                                                            </div>

                                                            <div class="search-params__checkboxes">
                                                                <label for="time6" class="fancy-checkbox">
                                                                    <input id="time6" type="checkbox" checked="checked">
                                                                    <span class="fancy-checkbox__checkmark"></span>
                                                                    Круглосуточно
                                                                </label>
                                                                <label for="check-klesh6" class="fancy-checkbox">
                                                                    <input id="check-klesh6" type="checkbox">
                                                                    <span class="fancy-checkbox__checkmark"></span>
                                                                    Прием клеща
                                                                </label>
                                                                <label for="adults6" class="fancy-checkbox">
                                                                    <input id="adults6" type="checkbox">
                                                                    <span class="fancy-checkbox__checkmark"></span>
                                                                    Прием взрослых
                                                                </label>
                                                                <label for="children6" class="fancy-checkbox">
                                                                    <input id="children6" type="checkbox">
                                                                    <span class="fancy-checkbox__checkmark"></span>
                                                                    Прием детей
                                                                </label>
                                                            </div>  
                                                        </form>

                                                    </div>  
                                                          <div class='map' id='map_7'>
                                                              <p>
                                                                  <img style="width: 100%;" src="img/map.png" alt="">
                                                              </p>   
                                                          </div>                                                                                                                                                         
                                                </div>
                                            </article><!-- END таб 2 уровня -->

                                            <article class="accordeon-item js-accordeon"><!-- аккордеон 2 уровня -->
                                                <header class="accordeon-item__label js-accordeon__label">
                                                    Сдать клеща на анализ
                                                </header>

                                                <div class="accordeon-item__content js-accordeon__content" style="display: none;">
                                                    <div class="selects container">

                                                        <form action="" method="post" name="search-params" class="search-params"> 

                                                            <div class="search-params__region">
                                                                <label for="region7">Выберите пункт вакцинации</label> 
                                                                <select name="region7" id="region">
                                                                    <option>Все регионы</option>
                                                                    <option>Алтайский край</option>
                                                                    <option>Другой регион</option>
                                                                    <option>Замечательный регион</option>
                                                                    <option>Прекрасно-солнечный регион</option>
                                                                </select>
                                                            </div>

                                                            <div class="search-params__checkboxes">
                                                                <label for="time7" class="fancy-checkbox">
                                                                    <input id="time7" type="checkbox" checked="checked">
                                                                    <span class="fancy-checkbox__checkmark"></span>
                                                                    Круглосуточно
                                                                </label>
                                                                <label for="check-klesh7" class="fancy-checkbox">
                                                                    <input id="check-klesh7" type="checkbox">
                                                                    <span class="fancy-checkbox__checkmark"></span>
                                                                    Прием клеща
                                                                </label>
                                                                <label for="adults7" class="fancy-checkbox">
                                                                    <input id="adults7" type="checkbox">
                                                                    <span class="fancy-checkbox__checkmark"></span>
                                                                    Прием взрослых
                                                                </label>
                                                                <label for="children7" class="fancy-checkbox">
                                                                    <input id="children7" type="checkbox">
                                                                    <span class="fancy-checkbox__checkmark"></span>
                                                                    Прием детей
                                                                </label>
                                                            </div>  
                                                        </form>

                                                    </div> 
                                                          <div class='map' id='map_8'>
                                                              <p>
                                                                  <img style="width: 100%;" src="img/map.png" alt="">
                                                              </p>   
                                                          </div>                                                                                                                                                           
                                                </div>
                                            </article><!-- END таб 2 уровня -->


                                        </div> <!-- обертка 2 уровня-->

                                    </div>
                                </article><!-- END таб 1 уровня - большая зеленая кнопка-->

                            </div><!-- END обертка 1 уровня-->

                        <!-- </div> -->

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
    for(i=1;i<=c;i++) {
      eval("infowindow"+i+".close()");
    }
  }

  var markersoverall;

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
   <?
  for ($i=1; $i < 9; $i++) { 
  // $i=1;
  // if (1==1) {
    ?> 
    var map_<?=$i?>;
    map_<?=$i?> = new google.maps.Map(document.getElementById('map_<?=$i?>'), {
              center: {lat: 54, lng: 56},
              zoom: 5,
              mapTypeControlOptions: {
                mapTypeIds: ['roadmap', 'satellite', 'hybrid', 'terrain',
                      'styled_map']
              }
    });

          map_<?=$i?>.mapTypes.set('styled_map', styledMapType);

          map_<?=$i?>.setMapTypeId('styled_map');

  /*  начало вывода элемента инфоблока */

    var contentString1="<div class='popup'><h3>г. Кемерово</h3><p>ул. Островского, 27, МЦ «Ваш доктор»<br>Часы работы: круглосуточно<br>Тел.: (384-2) 36-88-62<br></div>";

    infowindow1 = new google.maps.InfoWindow({
      content: contentString1 });

    var coords1= {lat: 53.319156282435, lng: 70.733756407878};

    setTimeout(function(){
    var marker1 = new google.maps.Marker({
      position: coords1,
      map: map_<?=$i?>,
      title: 'МЦ Ваш доктор',
      icon: '/img/marker.png'
    });

    marker1.addListener('click', function() {
      closeallinfowindows(markersoverall);
      infowindow1.open(map_<?=$i?>, marker1);
    });
    }, 300);

  /*  конец вывода элемента инфоблока */

  /*  начало вывода элемента инфоблока */

    var contentString2="<div class='popup'><h3>г. Кемерово</h3><p>ул. Островского, 27, МЦ «Ваш доктор»<br>Часы работы: круглосуточно<br>Тел.: (384-2) 36-88-62<br></div>";

    infowindow2 = new google.maps.InfoWindow({
      content: contentString2 });

    var coords2= {lat: 53.919156282435, lng: 82.733756407878};

    setTimeout(function(){
    var marker2 = new google.maps.Marker({
      position: coords2,
      map: map_<?=$i?>,
      title: 'МЦ Ваш доктор',
      icon: '/img/marker.png'
    });

    marker2.addListener('click', function() {
      closeallinfowindows(markersoverall);
      infowindow2.open(map_<?=$i?>, marker2);
    });
    }, 300);
    <?
  }
?>
  /*  конец вывода элемента инфоблока */

    markersoverall=2;


  }
  $(document).ready(function(){
    initMap();
  });
</script>



   <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBxQaqnd4oKL9w1hhKE73HHZ_1kg2bZQjU&callback=initMap">
    </script>

<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php');
?>