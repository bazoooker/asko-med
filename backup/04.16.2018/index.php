<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php');
?>



                        
                        <!-- TABS CONTAINER. REQUIRED -->
                        <div class="section-tabs section-tabs_horizontal section-tabs_level-1">

                              <!-- TABS -->
                              <div class="section-tabs__tabs container">
                                    <ul>
                                          <li class="tab tab_big">
                                              <p>��� ������,<br/> ���� ������ ����?</p>
                                              <span>�� ����������, �� ��������. ��� ���� ��������� ��������������, � ����� ����� ����� �� ������.</span>
                                          </li>
                                          <li class="tab tab_big">
                                              <p>��������������<br/> �� ����� �����</p>
                                              <span>C�������� ����� ���� ����������� ��� ����������� ������ ��� ������ ������.</span>
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
                                                                ��������� ��������������
                                                            </li>
                                                            <li class="tab">
                                                                ����� ����� �� ������
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
                                                                        <label for="region">�������� ����� ����������</label> 
                                                                        <select name="region" id="region">
                                                                            <option>��� �������</option>
                                                                            <option>��������� ����</option>
                                                                            <option>������ ������</option>
                                                                            <option>������������� ������</option>
                                                                            <option>���������-��������� ������</option>
                                                                        </select>
                                                                    </div>

                                                                    <div class="search-params__checkboxes">
                                                                        <label for="time" class="fancy-checkbox">
                                                                            <input id="time" type="checkbox" checked="checked">
                                                                            <span class="fancy-checkbox__checkmark"></span>
                                                                            �������������
                                                                        </label>
                                                                        <label for="check-klesh" class="fancy-checkbox">
                                                                            <input id="check-klesh" type="checkbox">
                                                                            <span class="fancy-checkbox__checkmark"></span>
                                                                            ����� �����
                                                                        </label>
                                                                        <label for="adults" class="fancy-checkbox">
                                                                            <input id="adults" type="checkbox">
                                                                            <span class="fancy-checkbox__checkmark"></span>
                                                                            ����� ��������
                                                                        </label>
                                                                        <label for="children" class="fancy-checkbox">
                                                                            <input id="children" type="checkbox">
                                                                            <span class="fancy-checkbox__checkmark"></span>
                                                                            ����� �����
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
                                                                        <label for="region1">�������� ����� ����������</label> 
                                                                        <select name="region1" id="region">
                                                                            <option>��� �������</option>
                                                                            <option>��������� ����</option>
                                                                            <option>������ ������</option>
                                                                            <option>������������� ������</option>
                                                                            <option>���������-��������� ������</option>
                                                                        </select>
                                                                    </div>

                                                                    <div class="search-params__checkboxes">
                                                                        <label for="time1" class="fancy-checkbox">
                                                                            <input id="time1" type="checkbox">
                                                                            <span class="fancy-checkbox__checkmark"></span>
                                                                            �������������
                                                                        </label>
                                                                        <label for="check-klesh1" class="fancy-checkbox">
                                                                            <input id="check-klesh1" type="checkbox" checked="checked">
                                                                            <span class="fancy-checkbox__checkmark"></span>
                                                                            ����� �����
                                                                        </label>
                                                                        <label for="adults1" class="fancy-checkbox">
                                                                            <input id="adults1" type="checkbox">
                                                                            <span class="fancy-checkbox__checkmark"></span>
                                                                            ����� ��������
                                                                        </label>
                                                                        <label for="children1" class="fancy-checkbox">
                                                                            <input id="children1" type="checkbox">
                                                                            <span class="fancy-checkbox__checkmark"></span>
                                                                            ����� �����
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
                                                    <label for="region2">�������� ����� ����������</label> 
                                                    <select name="region2" id="region">
                                                        <option>��� �������</option>
                                                        <option>��������� ����</option>
                                                        <option>������ ������</option>
                                                        <option>������������� ������</option>
                                                        <option>���������-��������� ������</option>
                                                    </select>
                                                </div>

                                                <div class="search-params__checkboxes">
                                                    <label for="time2" class="fancy-checkbox">
                                                        <input id="time2" type="checkbox" checked="checked">
                                                        <span class="fancy-checkbox__checkmark"></span>
                                                        �������������
                                                    </label>
                                                    <label for="check-klesh2" class="fancy-checkbox">
                                                        <input id="check-klesh2" type="checkbox">
                                                        <span class="fancy-checkbox__checkmark"></span>
                                                        ����� �����
                                                    </label>
                                                    <label for="adults2" class="fancy-checkbox">
                                                        <input id="adults2" type="checkbox">
                                                        <span class="fancy-checkbox__checkmark"></span>
                                                        ����� ��������
                                                    </label>
                                                    <label for="children2" class="fancy-checkbox">
                                                        <input id="children2" type="checkbox">
                                                        <span class="fancy-checkbox__checkmark"></span>
                                                        ����� �����
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
                                                                �������������� 1
                                                            </li>
                                                            <li class="tab">
                                                                �������������� 2
                                                            </li>
                                                      </ul>
                                                 </div>

                                                <div class="section-tabs__content">

                                                      <article class="slide">

                                                            <div class="selects container">

                                                                <form action="" method="post" name="search-params" class="search-params"> 

                                                                    <div class="search-params__region">
                                                                        <label for="region2">�������� ����� ����������</label> 
                                                                        <select name="region2" id="region">
                                                                            <option>��� �������</option>
                                                                            <option>��������� ����</option>
                                                                            <option>������ ������</option>
                                                                            <option>������������� ������</option>
                                                                            <option>���������-��������� ������</option>
                                                                        </select>
                                                                    </div>

                                                                    <div class="search-params__checkboxes">
                                                                        <label for="time2" class="fancy-checkbox">
                                                                            <input id="time2" type="checkbox" checked="checked">
                                                                            <span class="fancy-checkbox__checkmark"></span>
                                                                            �������������
                                                                        </label>
                                                                        <label for="check-klesh2" class="fancy-checkbox">
                                                                            <input id="check-klesh2" type="checkbox">
                                                                            <span class="fancy-checkbox__checkmark"></span>
                                                                            ����� �����
                                                                        </label>
                                                                        <label for="adults2" class="fancy-checkbox">
                                                                            <input id="adults2" type="checkbox">
                                                                            <span class="fancy-checkbox__checkmark"></span>
                                                                            ����� ��������
                                                                        </label>
                                                                        <label for="children2" class="fancy-checkbox">
                                                                            <input id="children2" type="checkbox">
                                                                            <span class="fancy-checkbox__checkmark"></span>
                                                                            ����� �����
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
                                                                        <label for="region3">�������� ����� ����������</label> 
                                                                        <select name="region3" id="region">
                                                                            <option>��� �������</option>
                                                                            <option>��������� ����</option>
                                                                            <option>������ ������</option>
                                                                            <option>������������� ������</option>
                                                                            <option>���������-��������� ������</option>
                                                                        </select>
                                                                    </div>

                                                                    <div class="search-params__checkboxes">
                                                                        <label for="time3" class="fancy-checkbox">
                                                                            <input id="time3" type="checkbox" checked="checked">
                                                                            <span class="fancy-checkbox__checkmark"></span>
                                                                            �������������
                                                                        </label>
                                                                        <label for="check-klesh3" class="fancy-checkbox">
                                                                            <input id="check-klesh3" type="checkbox">
                                                                            <span class="fancy-checkbox__checkmark"></span>
                                                                            ����� �����
                                                                        </label>
                                                                        <label for="adults3" class="fancy-checkbox">
                                                                            <input id="adults3" type="checkbox">
                                                                            <span class="fancy-checkbox__checkmark"></span>
                                                                            ����� ��������
                                                                        </label>
                                                                        <label for="children3" class="fancy-checkbox">
                                                                            <input id="children3" type="checkbox">
                                                                            <span class="fancy-checkbox__checkmark"></span>
                                                                            ����� �����
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
                            
                            
                            <div class="accordeon"><!-- ������� 1 ������-->

                                <article class="accordeon-item js-accordeon"><!-- ��������� 1 ������ - ������� ������� ������-->
                                    <header class="accordeon-item__label js-accordeon__label">
                                        <p>��� ������,<br/> ���� ������ ����?</p>
                                        <span>�� ����������, �� ��������. ��� ���� ��������� ��������������, � ����� ����� ����� �� ������.</span>
                                    </header>

                                    <div class="accordeon-item__content js-accordeon__content" style="display: none;">
                                        
                                        <div class="accordeon"> <!-- ������� 2 ������-->

                                            <article class="accordeon-item js-accordeon"><!-- ��������� 2 ������ -->
                                                <header class="accordeon-item__label js-accordeon__label">
                                                    ��������� ��������������
                                                </header>

                                                <div class="accordeon-item__content js-accordeon__content" style="display: none;">
                                                    <div class="selects container">

                                                        <form action="" method="post" name="search-params" class="search-params"> 

                                                            <div class="search-params__region">
                                                                <label for="region4">�������� ����� ����������</label> 
                                                                <select name="region4" id="region">
                                                                    <option>��� �������</option>
                                                                    <option>��������� ����</option>
                                                                    <option>������ ������</option>
                                                                    <option>������������� ������</option>
                                                                    <option>���������-��������� ������</option>
                                                                </select>
                                                            </div>

                                                            <div class="search-params__checkboxes">
                                                                <label for="time4" class="fancy-checkbox">
                                                                    <input id="time4" type="checkbox" checked="checked">
                                                                    <span class="fancy-checkbox__checkmark"></span>
                                                                    �������������
                                                                </label>
                                                                <label for="check-klesh4" class="fancy-checkbox">
                                                                    <input id="check-klesh4" type="checkbox">
                                                                    <span class="fancy-checkbox__checkmark"></span>
                                                                    ����� �����
                                                                </label>
                                                                <label for="adults4" class="fancy-checkbox">
                                                                    <input id="adults4" type="checkbox">
                                                                    <span class="fancy-checkbox__checkmark"></span>
                                                                    ����� ��������
                                                                </label>
                                                                <label for="children4" class="fancy-checkbox">
                                                                    <input id="children4" type="checkbox">
                                                                    <span class="fancy-checkbox__checkmark"></span>
                                                                    ����� �����
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
                                            </article><!-- END ��� 2 ������ -->

                                            <article class="accordeon-item js-accordeon"><!-- ��������� 2 ������ -->
                                                <header class="accordeon-item__label js-accordeon__label">
                                                    ����� ����� �� ������
                                                </header>

                                                <div class="accordeon-item__content js-accordeon__content" style="display: none;">
                                                    <div class="selects container">

                                                        <form action="" method="post" name="search-params" class="search-params"> 

                                                            <div class="search-params__region">
                                                                <label for="region5">�������� ����� ����������</label> 
                                                                <select name="region5" id="region">
                                                                    <option>��� �������</option>
                                                                    <option>��������� ����</option>
                                                                    <option>������ ������</option>
                                                                    <option>������������� ������</option>
                                                                    <option>���������-��������� ������</option>
                                                                </select>
                                                            </div>

                                                            <div class="search-params__checkboxes">
                                                                <label for="time5" class="fancy-checkbox">
                                                                    <input id="time5" type="checkbox" checked="checked">
                                                                    <span class="fancy-checkbox__checkmark"></span>
                                                                    �������������
                                                                </label>
                                                                <label for="check-klesh5" class="fancy-checkbox">
                                                                    <input id="check-klesh5" type="checkbox">
                                                                    <span class="fancy-checkbox__checkmark"></span>
                                                                    ����� �����
                                                                </label>
                                                                <label for="adults5" class="fancy-checkbox">
                                                                    <input id="adults5" type="checkbox">
                                                                    <span class="fancy-checkbox__checkmark"></span>
                                                                    ����� ��������
                                                                </label>
                                                                <label for="children5" class="fancy-checkbox">
                                                                    <input id="children5" type="checkbox">
                                                                    <span class="fancy-checkbox__checkmark"></span>
                                                                    ����� �����
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
                                            </article><!-- END ��� 2 ������ -->


                                        </div> <!-- ������� 2 ������-->

                                    </div>
                                </article><!-- END ��� 1 ������ - ������� ������� ������-->


                                <article class="accordeon-item js-accordeon"><!-- ��������� 1 ������ - ������� ������� ������-->
                                    <header class="accordeon-item__label js-accordeon__label">
                                        <p>��������������<br/> �� ����� �����</p>
                                        <span>C�������� ����� ���� ����������� ��� ����������� ������ ��� ������ ������.</span>
                                    </header>

                                    <div class="accordeon-item__content js-accordeon__content" style="display: none;">
                                        
                                        <div class="accordeon"> <!-- ������� 2 ������-->

                                            <article class="accordeon-item js-accordeon"><!-- ��������� 2 ������ -->
                                                <header class="accordeon-item__label js-accordeon__label">
                                                    ��������� ��������������
                                                </header>

                                                <div class="accordeon-item__content js-accordeon__content" style="display: none;">
                                                    <div class="selects container">

                                                        <form action="" method="post" name="search-params" class="search-params"> 

                                                            <div class="search-params__region">
                                                                <label for="region6">�������� ����� ����������</label> 
                                                                <select name="region6" id="region">
                                                                    <option>��� �������</option>
                                                                    <option>��������� ����</option>
                                                                    <option>������ ������</option>
                                                                    <option>������������� ������</option>
                                                                    <option>���������-��������� ������</option>
                                                                </select>
                                                            </div>

                                                            <div class="search-params__checkboxes">
                                                                <label for="time6" class="fancy-checkbox">
                                                                    <input id="time6" type="checkbox" checked="checked">
                                                                    <span class="fancy-checkbox__checkmark"></span>
                                                                    �������������
                                                                </label>
                                                                <label for="check-klesh6" class="fancy-checkbox">
                                                                    <input id="check-klesh6" type="checkbox">
                                                                    <span class="fancy-checkbox__checkmark"></span>
                                                                    ����� �����
                                                                </label>
                                                                <label for="adults6" class="fancy-checkbox">
                                                                    <input id="adults6" type="checkbox">
                                                                    <span class="fancy-checkbox__checkmark"></span>
                                                                    ����� ��������
                                                                </label>
                                                                <label for="children6" class="fancy-checkbox">
                                                                    <input id="children6" type="checkbox">
                                                                    <span class="fancy-checkbox__checkmark"></span>
                                                                    ����� �����
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
                                            </article><!-- END ��� 2 ������ -->

                                            <article class="accordeon-item js-accordeon"><!-- ��������� 2 ������ -->
                                                <header class="accordeon-item__label js-accordeon__label">
                                                    ����� ����� �� ������
                                                </header>

                                                <div class="accordeon-item__content js-accordeon__content" style="display: none;">
                                                    <div class="selects container">

                                                        <form action="" method="post" name="search-params" class="search-params"> 

                                                            <div class="search-params__region">
                                                                <label for="region7">�������� ����� ����������</label> 
                                                                <select name="region7" id="region">
                                                                    <option>��� �������</option>
                                                                    <option>��������� ����</option>
                                                                    <option>������ ������</option>
                                                                    <option>������������� ������</option>
                                                                    <option>���������-��������� ������</option>
                                                                </select>
                                                            </div>

                                                            <div class="search-params__checkboxes">
                                                                <label for="time7" class="fancy-checkbox">
                                                                    <input id="time7" type="checkbox" checked="checked">
                                                                    <span class="fancy-checkbox__checkmark"></span>
                                                                    �������������
                                                                </label>
                                                                <label for="check-klesh7" class="fancy-checkbox">
                                                                    <input id="check-klesh7" type="checkbox">
                                                                    <span class="fancy-checkbox__checkmark"></span>
                                                                    ����� �����
                                                                </label>
                                                                <label for="adults7" class="fancy-checkbox">
                                                                    <input id="adults7" type="checkbox">
                                                                    <span class="fancy-checkbox__checkmark"></span>
                                                                    ����� ��������
                                                                </label>
                                                                <label for="children7" class="fancy-checkbox">
                                                                    <input id="children7" type="checkbox">
                                                                    <span class="fancy-checkbox__checkmark"></span>
                                                                    ����� �����
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
                                            </article><!-- END ��� 2 ������ -->


                                        </div> <!-- ������� 2 ������-->

                                    </div>
                                </article><!-- END ��� 1 ������ - ������� ������� ������-->

                            </div><!-- END ������� 1 ������-->

                        <!-- </div> -->

                        <div class="container">
                              <div class="about-section">
                                    <section class="about-item">
                                          <h2>��� ����� �������� ���������?</h2>
                                          <p>�������� ��������� �������� ��������-�������� ������ �������� ������������ �������� � �������������� ���������� �������� �����������. ��������������� ���������������� ���������� ����������� ������� �������, ���������� ������������� ����������� ���������� � �������� �������. ����������� ����������� ������������ - �� ������� ������������� �� ��������� ��������, ���������� � ������������, ���������� ������� ������� ���������� (�� 30%), � ������.</p>
                                          <ul class="h-no-bullets">
                                                <li><a href="#">��������� � �������� ����������</a></li>
                                                <li><a href="#">��� �� ����� �������?</a></li>
                                                <li><a href="#">��� ������������� ���������?</a></li>
                                                <li><a href="#">��� ����� �������� �� ��������� ����������?</a></li>
                                                <li><a href="#">��� ����� ��������� �� �����?</a></li>
                                                <li><a href="/documents/chto-takoe-immunoglobulin/">��� ����� ��������������?</a></li>
                                          </ul>
                                    </section>
                                    <section class="about-item">
                                          <h2>� ��������� ����</h2>
                                          <div class="program">
                                              <div class="program__card"><img src="img/card.jpg" width="120" alt="����������� ��������"></div>
                                              <div class="program__text"><p>
                                                     ��������� ������������� ��������� ��������������� ������ (����) ���������� �� ����������� �������� � ��������� ��� ������� ����� ��������� ������� �������� ����������� ����� �� ���������� ���������������� ��������� ���������� ����� ������������ ����������� ����������� (���) �� ���� ���������� ������ ��� ����������� ������������ �������������� �������� ���������� �������� ���������� � ��������� �������� ����������� ���������� ����������� �����. 
                                                  </p>
                                                  <ul class="h-no-bullets">
                                                        <li><a href="/documents/o-servisnoy-programme-ospz/">��������� � ���������</a></li>
                                                        <li><a href="/">��������� ��������� ���� � ��������</a></li>
                                                  </ul></div>
                                          </div>
                                    </section>
                                </div>
                            </div>

                            <div class="h-bg">
                                <div class="container">
                                    <div class="about-section">
                                        <section class="about-item">
                                              <h2>�������� ��������� ���������� </h2>
                                              <p>� ������� ���������� ���������� �� ������� ����� ��������� � ��� ����� ���������� � ��������� ��� �� ����� � ��������� �������, ��������� ����� ��������� ���������� ���������, ���������� � ����� ��������� �������� ����, �������� ����������� ���������� � ��� ��� ����������� � ������ ����� ����� � ������ ������. <br>
                                              ������������ � ���������� ������ �� �������, ���������� ���������� ��������� ���������� ���� � ��� ��������!</p>
                                              <ul class="h-no-bullets">
                                                    <li><a href="http://app.sibpz.ru/">��������� � ����������</a></li>
                                              </ul>
                                        </section>

                                        <section class="download">
                                                  <div class="download__tel"></div>

                                                  <div class="download__info">
                                                      <p>������������ QR ��� ��� �������� �� ������ marketplace</p>
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

  /*  ������ ������ �������� ��������� */

    var contentString1="<div class='popup'><h3>�. ��������</h3><p>��. �����������, 27, �� ���� ������<br>���� ������: �������������<br>���.: (384-2) 36-88-62<br></div>";

    infowindow1 = new google.maps.InfoWindow({
      content: contentString1 });

    var coords1= {lat: 53.319156282435, lng: 70.733756407878};

    setTimeout(function(){
    var marker1 = new google.maps.Marker({
      position: coords1,
      map: map_<?=$i?>,
      title: '�� ��� ������',
      icon: '/img/marker.png'
    });

    marker1.addListener('click', function() {
      closeallinfowindows(markersoverall);
      infowindow1.open(map_<?=$i?>, marker1);
    });
    }, 300);

  /*  ����� ������ �������� ��������� */

  /*  ������ ������ �������� ��������� */

    var contentString2="<div class='popup'><h3>�. ��������</h3><p>��. �����������, 27, �� ���� ������<br>���� ������: �������������<br>���.: (384-2) 36-88-62<br></div>";

    infowindow2 = new google.maps.InfoWindow({
      content: contentString2 });

    var coords2= {lat: 53.919156282435, lng: 82.733756407878};

    setTimeout(function(){
    var marker2 = new google.maps.Marker({
      position: coords2,
      map: map_<?=$i?>,
      title: '�� ��� ������',
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
  /*  ����� ������ �������� ��������� */

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