<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php');
$APPLICATION->SetPageProperty("TITLE", "���� | ��������� �� �����");
$APPLICATION->SetTitle("���� | ��������� �� �����");
CModule::IncludeModule("iblock");
?>



                        
                        <!-- TABS CONTAINER. REQUIRED -->
                        <div class="section-tabs section-tabs_horizontal section-tabs_level-1">

                              <!-- TABS -->
                              <div class="section-tabs__tabs container">
                                    <ul>
                                          <li  class="tab tab_big">
                                              <p>��� ������,<br/> ���� ������ ����?</p>
                                              <span>�� ����������, �� ��������. ��� ���� ��������� ��������������, � ����� ����� ����� �� ������.</span>
                                          </li>
                                          <li class="tab tab_big">
                                              <p>��������������<br/> �� ����� �����</p>
                                              <span>�������� ���� ����������� ��� ����������� ������ ��� ����� �����.</span>
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
                                                                ��������� ��������������
                                                            </li>
                                                            <li onclick="filter_one_prop(2,'takingMite')" class="tab">
                                                                ����� ����� �� ������
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
                                                                        <!-- <label for="region1">�������� ����� ����������</label>  -->

                                                                        <!-- ������������� ���� ������ -->
                                                                        <div class="showtype showtype_active-map">

                                                                          <div id="showtype_map" class="showtype__btn">
                                                                            <span class="showtype__text">������</span>
                                                                          </div>

                                                                          <div id="showtype_list" class="showtype__btn">
                                                                            <span class="showtype__text">�������</span>
                                                                          </div>

                                                                        </div>
                                                                        <!-- ������������� ���� ������ ����� -->

                                                                        <select  onchange="get_val_form(1)" name="district" id="region1">
                                                                            <option value='all'>��� �������</option>
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
                                                                            �������������
                                                                        </label>
                                                                        <label for="check-klesh1" class="fancy-checkbox">
                                                                            <input onclick=" get_val_form();" id="check-klesh1" name='takingMite' type="checkbox">
                                                                            <span class="fancy-checkbox__checkmark"></span>
                                                                            ����� �����
                                                                        </label>
                                                                        <label for="adults1" class="fancy-checkbox">
                                                                            <input onclick=" get_val_form();" id="adults1" name='adults' type="checkbox">
                                                                            <span class="fancy-checkbox__checkmark"></span>
                                                                            ����� ��������
                                                                        </label>
                                                                        <label for="children1" class="fancy-checkbox">
                                                                            <input onclick=" get_val_form();" id="children1" name='children' type="checkbox">
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
                                                                           ?><p class="partner__name"><?=$value['NAME']?>: ��</p><? 
                                                                          }else{
                                                                            ?><p class="partner__name"><?=$value['NAME']?>: ���</p><? 
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
                                                                        <label for="region2">�������� ����� ����������</label> 
                                                                        <select onchange="get_val_form(2)" name="district" id="region2">
                                                                            <option value='all'>��� �������</option>
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
                                                                            �������������
                                                                        </label>
                                                                        <label for="check-klesh2" class="fancy-checkbox">
                                                                            <input onclick=" get_val_form(2);" id="check-klesh2" name='takingMite' type="checkbox">
                                                                            <span class="fancy-checkbox__checkmark"></span>
                                                                            ����� �����
                                                                        </label>
                                                                        <label for="adults2" class="fancy-checkbox">
                                                                            <input onclick=" get_val_form(2);" id="adults2" name='adults' type="checkbox">
                                                                            <span class="fancy-checkbox__checkmark"></span>
                                                                            ����� ��������
                                                                        </label>
                                                                        <label for="children2" class="fancy-checkbox">
                                                                            <input onclick=" get_val_form(2);" id="children2" name='children' type="checkbox">
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

                                                          <div class="container">
                                                            
                                                            <p>����������� ������������ ����� ������������ ������������ ������� ������, ��������� ����� � ���������� ���������� �����. ���������� �� ���� ������� ��������� �������� (��. ��������� �����������) ��� ������ �������.</p>

                                                            <p>������� ����� ����� �� ������������</p>

                                                            <ul>
                                                              <li>��� ������������ �� ����� ��������� ���������� �������� ������ ����� �����. </li>
                                                              <li>����������, � ����� ������������ ������, ������� ����� ����� ���� ������������� ����������</li>
                                                              <li>���������� ����� ���������� � ������ ������ (�������, �������) ������ � ����������� ���������. ����������� � ����� ����� � ���� �� ����� 24 �����.</li>
                                                            </ul>

                                                            <p>
                                                              ���������� ����������� �� ���������� ����������� �� ������ �����������, ��� ������� �� ���������� (���� ����� ��������, ����� ���������������� ����-�������, ���� ������ �����), � ���� ����������� ������� - �� ��������, ��� �� ����������� ���������.  
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
                                        <p>��� ������,<br/> ���� ������ ����?</p>
                                        <span>�� ����������, �� ��������. ��� ���� ��������� ��������������, � ����� ����� ����� �� ������.</span>
                                    </header>

                                    <div class="accordeon-item__content js-accordeon__content" style="display: none;">
                                        
                                        <div class="accordeon"> 

                                            <article class="accordeon-item js-accordeon">
                                                <header  class="accordeon-item__label js-accordeon__label">
                                                    ��������� ��������������
                                                </header>

                                                <div class="accordeon-item__content js-accordeon__content" style="display: none;">
                                                    <div class="selects container">

                                                        <form action="" rel='3' id='form_3' method="post" name="search-params" class="search-params"> 

                                                                    <div class="search-params__region">
                                                                        <label for="region1-1">�������� ����� ����������</label> 
                                                                        <select  onchange="get_val_form(3)" name="district" id="region1-1">
                                                                            <option value='all'>��� �������</option>
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
                                                                            �������������
                                                                        </label>
                                                                        <label for="check-klesh1-1" class="fancy-checkbox">
                                                                            <input onclick=" get_val_form(3);" id="check-klesh1-1" name='takingMite' type="checkbox">
                                                                            <span class="fancy-checkbox__checkmark"></span>
                                                                            ����� �����
                                                                        </label>
                                                                        <label for="adults1-1" class="fancy-checkbox">
                                                                            <input onclick=" get_val_form(3);" id="adults1-1" name='adults' type="checkbox">
                                                                            <span class="fancy-checkbox__checkmark"></span>
                                                                            ����� ��������
                                                                        </label>
                                                                        <label for="children1-1" class="fancy-checkbox">
                                                                            <input onclick=" get_val_form(3);" id="children1-1" name='children' type="checkbox">
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
                                                </div>
                                            </article>

                                            <article  class="accordeon-item js-accordeon">
                                                <header onclick="filter_one_prop(4,'takingMite')" class="accordeon-item__label js-accordeon__label">
                                                    ����� ����� �� ������
                                                </header>

                                                <div class="accordeon-item__content js-accordeon__content" style="display: none;">
                                                    <div class="selects container">

                                                        <form action="" rel='4' id='form_4' method="post" name="search-params" class="search-params"> 

                                                                    <div class="search-params__region">
                                                                        <label for="region66">�������� ����� ����������</label> 
                                                                        <select onchange="get_val_form(4)" name="district" id="region66">
                                                                            <option value='all'>��� �������</option>
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
                                                                            �������������
                                                                        </label>
                                                                        <label for="check-klesh2-1" class="fancy-checkbox">
                                                                            <input onclick=" get_val_form(4);" id="check-klesh2-1" name='takingMite' type="checkbox">
                                                                            <span class="fancy-checkbox__checkmark"></span>
                                                                            ����� �����
                                                                        </label>
                                                                        <label for="adults2-1" class="fancy-checkbox">
                                                                            <input onclick=" get_val_form(4);" id="adults2-1" name='adults' type="checkbox">
                                                                            <span class="fancy-checkbox__checkmark"></span>
                                                                            ����� ��������
                                                                        </label>
                                                                        <label for="children2-1" class="fancy-checkbox">
                                                                            <input onclick=" get_val_form(4);" id="children2-1" name='children' type="checkbox">
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
                                                </div>
                                            </article>


                                        </div> 

                                    </div>
                                </article>


                                <article class="accordeon-item js-accordeon">
                                    <header class="accordeon-item__label big js-accordeon__label">
                                        <p>��������������<br/> �� ����� �����</p>
                                        <span>C�������� ����� ���� ����������� ��� ����������� ������ ��� ������ ������.</span>
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

<!-- <input onclick=" get_val_form();" onclick="showMarkers();" type="button" value="��������"> -->

<!-- <input onclick=" get_val_form();" onclick="filter_one_prop('isAllTime1');" type="button" value="��������"> -->

                        <div class="container">
                              <div class="about-section">
                                    <section class="about-item">
                                          <h2>��� ����� �������� ���������?</h2>
                                          <p>�������� ��������� �������� ��������-�������� ������ �������� ������������ �������� � �������������� ���������� �������� �����������. ��������������� ���������������� ���������� ����������� ������� �������, ���������� ������������� ����������� ���������� � �������� �������. ����������� ����������� ������������ - �� ������� ������������� �� ��������� ��������, ���������� � ������������, ���������� ������� ������� ���������� (�� 30%), � ������.</p>
                                          <ul class="h-no-bullets">
                                                <li><a href="/documents/o-kleshchevykh-infektsiyakh/">��������� � �������� ����������</a></li>
                                                <!-- <li><a href="#">��� �� ����� �������?</a></li> -->
                                                <!-- <li><a href="#">��� ������������� ���������?</a></li> -->
                                                <!-- <li><a href="/documents/chto-takoe-immunoglobulin/">��� ����� �������� �� ��������� ����������?</a></li> -->
                                                <!-- <li><a href="/documents/chto-takoe-immunoglobulin/">��� ����� ��������� �� �����?</a></li> -->
                                                <!-- <li><a href="/documents/chto-takoe-immunoglobulin/">��� ����� ��������������?</a></li> -->

                                                <li><a href="/documents/chto-delat-pri-ukuse-kleshcha/">��� ������ ��� ����� �����?</a></li>
                                                <li><a href="/documents/kak-pravilno-udalit-kleshcha/">��� ��������� ������� �����?</a></li>
                                                <li><a href="/documents/o-kleshchevykh-infektsiyakh/">� �������� ���������</a></li>
                                                <li><a href="/documents/chto-takoe-immunoglobulin/">��� ����� ��������������?</a></li>
                                                <li><a href="/documents/o-servisnoy-programme-ospz/">� ��������� ��������� ����</a></li>
                                                <li><a href="/documents/zelenaya-kartochka/">������� ��������</a></li>
                                          </ul>
                                    </section>
                                    <section class="about-item">
                                          <h2>� ��������� ����</h2>
                                          <div class="program">
                                              <div class="program__card"><img src="img/card.jpg" width="120" alt="����������� ��������"></div>
                                              <div class="program__text"><p>
                                                     ��������� ������������� ��������� ��������������� ������ (����) ���������� �� ����������� �������� � ��������� ��� ������� ����� ��������� ������� �������� ����������� ����� �� ���������� <span class="tooltip" data-tip="�������� ���������������� ���������������">����������������</span> ��������� ���������� ����� ������������ ����������� ����������� (���) �� ���� ���������� ������ ��� ����������� ������������ �������������� �������� ���������� �������� ���������� � ��������� �������� ����������� ���������� ����������� �����. 
                                                  </p>
                                                  <ul class="h-no-bullets">
                                                        <li><a href="/documents/o-servisnoy-programme-ospz/">��������� � ���������</a></li>
                                                        <li><a href="/documents/zastrakhovatsya-br-ot-ukusa-kleshcha/">��������� ��������� ���� � ��������</a></li>
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
                                              <p>� ������� ���������� ���������� �� ������� ����� ��������� � ��� ����� <span class="tooltip" data-tip="�������� ���������������� ���������������">����������������</span> � ��������� ��� �� ����� � ��������� �������, ��������� ����� ��������� ���������� ���������, ���������� � ����� ��������� �������� ����, �������� ����������� ���������� � ��� ��� ����������� � ������ ����� ����� � ������ ������. <br>
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

<?include_once($_SERVER['DOCUMENT_ROOT'].'/include/map.php');

require($_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php');
?>