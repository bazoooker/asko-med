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
                                                            <li onclick="filter_one_prop(1,'isAllTime1')" class="tab active">
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
                                                                        <label for="region6">�������� ����� ����������</label> 
                                                                        <select name="district" id="region6">
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
                                                                        <label for="time" class="fancy-checkbox">
                                                                            <input id="time" name='isAllTime1' type="checkbox" >
                                                                            <span class="fancy-checkbox__checkmark"></span>
                                                                            �������������
                                                                        </label>
                                                                        <label for="check-klesh" class="fancy-checkbox">
                                                                            <input id="check-klesh" name='takingMite' type="checkbox">
                                                                            <span class="fancy-checkbox__checkmark"></span>
                                                                            ����� �����
                                                                        </label>
                                                                        <label for="adults" class="fancy-checkbox">
                                                                            <input id="adults" name='adults' type="checkbox">
                                                                            <span class="fancy-checkbox__checkmark"></span>
                                                                            ����� ��������
                                                                        </label>
                                                                        <label for="children" class="fancy-checkbox">
                                                                            <input id="children" name='children' type="checkbox">
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

                                                                <form action=""  rel='2' id='form_2' method="post" name="search-params" class="search-params"> 

                                                                    <div class="search-params__region">
                                                                        <label for="region_2">�������� ����� ����������</label> 
                                                                        <select name="district" id="region_2">
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
                                                                        <label for="time" class="fancy-checkbox">
                                                                            <input id="time" name='isAllTime1' type="checkbox" >
                                                                            <span class="fancy-checkbox__checkmark"></span>
                                                                            �������������
                                                                        </label>
                                                                        <label for="check-klesh" class="fancy-checkbox">
                                                                            <input id="check-klesh" name='takingMite' type="checkbox">
                                                                            <span class="fancy-checkbox__checkmark"></span>
                                                                            ����� �����
                                                                        </label>
                                                                        <label for="adults" class="fancy-checkbox">
                                                                            <input id="adults" name='adults' type="checkbox">
                                                                            <span class="fancy-checkbox__checkmark"></span>
                                                                            ����� ��������
                                                                        </label>
                                                                        <label for="children" class="fancy-checkbox">
                                                                            <input id="children" name='children' type="checkbox">
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

                                            <form action="" id='form_dub_1' method="post" name="search-params" class="search-params"> 

                                                <div class="search-params__region search-params__region_centered">
                                                    <label for="region2">�������� ������</label> 
                                                      <select name="district" id="region2">
                                                            <option value='all'>��� �������</option>
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




                                               <div class="accordeon" style="display: block;"> <!-- ������� 2 ������-->

                                                  <article class="accordeon-item js-accordeon"><!-- ��������� 2 ������ -->
                                                      <header class="accordeon-item__label js-accordeon__label">
                                                          ��������� ����
                                                      </header>

                                                      <div class="accordeon-item__content js-accordeon__content">


<ul>

    <li>�. �������, 656056, �. �������, ��. ������, �. 36, ��� ��� "�����������" ������������ ������<br/>
    ���� ������: ����������� - �������: � 9.00 �� 18.00 ������� � ��������������� ���: � 9.00 �� 17.00<br/>
    ���.: +7(3852) 53-24-70</li>

    <li>�. �������, 656006, �. �������, ��. ����������, �. 45, ���� 303, ��������� ��� ������������ � �. ��������<br/>
    ���.: +7(3852) 73-04-64</li>

    <li>�. �������, ������ 22, 4 ����, �� "�����"<br/>
    ���.: +7(3852) 201-202, ����� 22-004</li>

    <li>�. �������, ��. ������������� 75, ��� ��������� ����� ����������� ���������� �������� ���ѻ<br/>
    ���.: +7(385-2) 25-45-19, 66-70-79, ����� 22-088</li>

    <li>�. �������, ��. ��������������� 36, ��� "����" ������������ �����������������<br/>
    ���.: +7(385-2) 28-26-07, 28-26-08, ����� 22-072</li>

    <li>�. �������, ��. ���������������51� ��. 709, ������������ ��������� ��� �� "�����"<br/>
    ���.: +7(385-2)29-99-60</li>

    <li>�. �������, ��. ����������������, 45, ��� "���-���������" ��������� ������<br/>
    ���.: +7(385-2) 65-80-39, ����� 22-082</li>

    <li>�. �������, ��-� ��������, 6�, ���� �����-���������<br/>
    ���.: +7 (3852) 582�135,+7 (3852) 582�119, +7 (3852) 580�061<br/>
    ����������: ����� 22-005</li>

    <li>�. �������, ��-� ���������������, �. 72, ��� "����"<br/>
    ���� ������: ����������� - �������: � 9.00 �� 18.00 ������� � ��������������� ���: � 9.00 �� 17.00. ���� 13.00-14.00. ������� � �����������-��������<br/>
    ���.: +7 (3852) 63-58-85; +7 (3852) 63-64-76</li>

    <li>�. �������, ������� 21, ��� "����� �����������" ������ � �. ��������<br/>
    ���.: +7(385-2) 28-22-55, ����� 22-026</li>

    <li>�. �������, ��. ������ 36 ��. 410,417, 420, 423, �� ���������������� (��������� ������)<br/>
    ���.: +7(385-2)201-086, ����� 22-045</li>

    <li>�. �������, ��. ������ 47/ ��. ������ 10, ��� "��������� �������� "��������������"<br/>
    ���.: +7(385-2) 63-67-32, 89-047</li>

    <li>�. �������, ��. ������ 87, ��� "���"<br/>
    ���.: +7(385-2) 55-39-18, ����� 22-002</li>

    <li>�. �������, ��. ���������, 74, ��� "��� "������������"<br/>
    ���.: +7(385-2)56-71-74, ����� 22-014</li>

    <li>�. �������, ��. ��������, 88 �, ��� �� ���� �����������<br/>
    ���.: +7(385-2) 567000, ����� 22-058</li>

    <li>�. �������, ��. ������������,40, ����� 22-090, ������ "����-���" ��� "��������� �������� "��������"<br/>
    ���.: +7(385-2) 35-42-03</li>

    <li>�. �������, ��. ������������ 131, ��� "������" ������������ �����������������<br/>
    ���.: +7(385-2) 201421, ����� 22-039</li>

    <li>�. �������, ��. �����������, 24, ��� "�� "��������"<br/>
    ���.: +7(385-2) 36-40-28, ����� 22-034</li>

    <li>�. �����, �.�����, ��. ��������� 205/1 , �� ���� �������� ������� ������<br/>
    ���� ������: �����������-�������: � 9.00 �� 18.00, ���� 13.00-14.00; ��������-�������,�����������<br/>
    ���.: +7(3854)-36-45-00, 36-78-31
    ����������: ����� �������� 22-110</li>

    <li>�. �����, ��. ����������������, 96, ��. 13, ��� "��� "�����������" ������� ������<br/>
    ���.: +7 (3854) 55-55-96</li>

    <li>�. �����, ��.���������, 59/1, ��� "���-���������" ������� ������<br/>
    ���.: +7 (3854) 555-198
    ����������: ����� 22-081</li>

    <li>�. ��������, 658201, ��������� ����, �.��������, ��. ��������, 14-1, ��� ���-��������� ���������� ������<br/>
    ���� ������: ����������� - �������: � 9.00 �� 18.00 ������� � ��������������� ���: � 9.00 �� 17.00<br/>
    ���.: +7 (385-57) 5-99-24</li>

</ul>
                                                              


                                                                <!-- <div class='map' id='map_3'>
                                                                    <p>
                                                                        <img style="width: 100%;" src="img/map.png" alt="">
                                                                    </p>   
                                                                </div> -->                                                         
                                                      </div>
                                                  </article><!-- END ��� 2 ������ --> 


                                                  <article class="accordeon-item js-accordeon"><!-- ��������� 2 ������ -->
                                                      <header class="accordeon-item__label js-accordeon__label">
                                                          ��������� �������
                                                      </header>

                                                      <div class="accordeon-item__content js-accordeon__content">



<ul>

    <li>�. �������, 656056, �. �������, ��. ������, �. 36, ��� ��� "�����������" ������������ ������<br/>
    ���� ������: ����������� - �������: � 9.00 �� 18.00 ������� � ��������������� ���: � 9.00 �� 17.00<br/>
    ���.: +7(3852) 53-24-70</li>

    <li>�. �������, 656006, �. �������, ��. ����������, �. 45, ���� 303, ��������� ��� ������������ � �. ��������<br/>
    ���.: +7(3852) 73-04-64</li>

    <li>�. �������, ������ 22, 4 ����, �� "�����"<br/>
    ���.: +7(3852) 201-202, ����� 22-004</li>

    <li>�. �������, ��. ������������� 75, ��� ��������� ����� ����������� ���������� �������� ���ѻ<br/>
    ���.: +7(385-2) 25-45-19, 66-70-79, ����� 22-088</li>

    <li>�. �������, ��. ��������������� 36, ��� "����" ������������ �����������������<br/>
    ���.: +7(385-2) 28-26-07, 28-26-08, ����� 22-072</li>

    <li>�. �������, ��. ���������������51� ��. 709, ������������ ��������� ��� �� "�����"<br/>
    ���.: +7(385-2)29-99-60</li>   

</ul>




                                                                                                                        
                                                      </div>
                                                  </article><!-- END ��� 2 ������ -->

                                                  <article class="accordeon-item js-accordeon"><!-- ��������� 2 ������ -->
                                                      <header class="accordeon-item__label js-accordeon__label">
                                                          ����������� �������
                                                      </header>

                                                      <div class="accordeon-item__content js-accordeon__content">



<ul>

    <li>�. �������, 656056, �. �������, ��. ������, �. 36, ��� ��� "�����������" ������������ ������<br/>
    ���� ������: ����������� - �������: � 9.00 �� 18.00 ������� � ��������������� ���: � 9.00 �� 17.00<br/>
    ���.: +7(3852) 53-24-70</li>

    <li>�. �������, 656006, �. �������, ��. ����������, �. 45, ���� 303, ��������� ��� ������������ � �. ��������<br/>
    ���.: +7(3852) 73-04-64</li>

    <li>�. �������, ������ 22, 4 ����, �� "�����"<br/>
    ���.: +7(3852) 201-202, ����� 22-004</li>

    <li>�. �������, ��. ������������� 75, ��� ��������� ����� ����������� ���������� �������� ���ѻ<br/>
    ���.: +7(385-2) 25-45-19, 66-70-79, ����� 22-088</li>

    <li>�. �������, ��. ��������������� 36, ��� "����" ������������ �����������������<br/>
    ���.: +7(385-2) 28-26-07, 28-26-08, ����� 22-072</li>

    <li>�. �������, ��. ���������������51� ��. 709, ������������ ��������� ��� �� "�����"<br/>
    ���.: +7(385-2)29-99-60</li>   

</ul>




                                                                                                                        
                                                      </div>
                                                  </article><!-- END ��� 2 ������ -->

                                                  <article class="accordeon-item js-accordeon"><!-- ��������� 2 ������ -->
                                                      <header class="accordeon-item__label js-accordeon__label">
                                                          ������������ ����
                                                      </header>

                                                      <div class="accordeon-item__content js-accordeon__content">



<ul>

    <li>�. �������, 656056, �. �������, ��. ������, �. 36, ��� ��� "�����������" ������������ ������<br/>
    ���� ������: ����������� - �������: � 9.00 �� 18.00 ������� � ��������������� ���: � 9.00 �� 17.00<br/>
    ���.: +7(3852) 53-24-70</li>

    <li>�. �������, 656006, �. �������, ��. ����������, �. 45, ���� 303, ��������� ��� ������������ � �. ��������<br/>
    ���.: +7(3852) 73-04-64</li>

    <li>�. �������, ������ 22, 4 ����, �� "�����"<br/>
    ���.: +7(3852) 201-202, ����� 22-004</li>

    <li>�. �������, ��. ������������� 75, ��� ��������� ����� ����������� ���������� �������� ���ѻ<br/>
    ���.: +7(385-2) 25-45-19, 66-70-79, ����� 22-088</li>

    <li>�. �������, ��. ��������������� 36, ��� "����" ������������ �����������������<br/>
    ���.: +7(385-2) 28-26-07, 28-26-08, ����� 22-072</li>

    <li>�. �������, ��. ���������������51� ��. 709, ������������ ��������� ��� �� "�����"<br/>
    ���.: +7(385-2)29-99-60</li>   

</ul>




                                                                                                                        
                                                      </div>
                                                  </article><!-- END ��� 2 ������ -->

                                                  <article class="accordeon-item js-accordeon"><!-- ��������� 2 ������ -->
                                                      <header class="accordeon-item__label js-accordeon__label">
                                                          ������������� �������
                                                      </header>

                                                      <div class="accordeon-item__content js-accordeon__content">



<ul>

    <li>�. �������, 656056, �. �������, ��. ������, �. 36, ��� ��� "�����������" ������������ ������<br/>
    ���� ������: ����������� - �������: � 9.00 �� 18.00 ������� � ��������������� ���: � 9.00 �� 17.00<br/>
    ���.: +7(3852) 53-24-70</li>

    <li>�. �������, 656006, �. �������, ��. ����������, �. 45, ���� 303, ��������� ��� ������������ � �. ��������<br/>
    ���.: +7(3852) 73-04-64</li>

    <li>�. �������, ������ 22, 4 ����, �� "�����"<br/>
    ���.: +7(3852) 201-202, ����� 22-004</li>

    <li>�. �������, ��. ������������� 75, ��� ��������� ����� ����������� ���������� �������� ���ѻ<br/>
    ���.: +7(385-2) 25-45-19, 66-70-79, ����� 22-088</li>

    <li>�. �������, ��. ��������������� 36, ��� "����" ������������ �����������������<br/>
    ���.: +7(385-2) 28-26-07, 28-26-08, ����� 22-072</li>

    <li>�. �������, ��. ���������������51� ��. 709, ������������ ��������� ��� �� "�����"<br/>
    ���.: +7(385-2)29-99-60</li>   

</ul>




                                                                                                                        
                                                      </div>
                                                  </article><!-- END ��� 2 ������ -->

                                                  <article class="accordeon-item js-accordeon"><!-- ��������� 2 ������ -->
                                                      <header class="accordeon-item__label js-accordeon__label">
                                                          ������ �������
                                                      </header>

                                                      <div class="accordeon-item__content js-accordeon__content">



<ul>

    <li>�. �������, 656056, �. �������, ��. ������, �. 36, ��� ��� "�����������" ������������ ������<br/>
    ���� ������: ����������� - �������: � 9.00 �� 18.00 ������� � ��������������� ���: � 9.00 �� 17.00<br/>
    ���.: +7(3852) 53-24-70</li>

    <li>�. �������, 656006, �. �������, ��. ����������, �. 45, ���� 303, ��������� ��� ������������ � �. ��������<br/>
    ���.: +7(3852) 73-04-64</li>

    <li>�. �������, ������ 22, 4 ����, �� "�����"<br/>
    ���.: +7(3852) 201-202, ����� 22-004</li>

    <li>�. �������, ��. ������������� 75, ��� ��������� ����� ����������� ���������� �������� ���ѻ<br/>
    ���.: +7(385-2) 25-45-19, 66-70-79, ����� 22-088</li>

    <li>�. �������, ��. ��������������� 36, ��� "����" ������������ �����������������<br/>
    ���.: +7(385-2) 28-26-07, 28-26-08, ����� 22-072</li>

    <li>�. �������, ��. ���������������51� ��. 709, ������������ ��������� ��� �� "�����"<br/>
    ���.: +7(385-2)29-99-60</li>   

</ul>




                                                                                                                        
                                                      </div>
                                                  </article><!-- END ��� 2 ������ -->

                                                  <article class="accordeon-item js-accordeon"><!-- ��������� 2 ������ -->
                                                      <header class="accordeon-item__label js-accordeon__label">
                                                          ���������� �����
                                                      </header>

                                                      <div class="accordeon-item__content js-accordeon__content">



<ul>

    <li>�. �������, 656056, �. �������, ��. ������, �. 36, ��� ��� "�����������" ������������ ������<br/>
    ���� ������: ����������� - �������: � 9.00 �� 18.00 ������� � ��������������� ���: � 9.00 �� 17.00<br/>
    ���.: +7(3852) 53-24-70</li>

    <li>�. �������, 656006, �. �������, ��. ����������, �. 45, ���� 303, ��������� ��� ������������ � �. ��������<br/>
    ���.: +7(3852) 73-04-64</li>

    <li>�. �������, ������ 22, 4 ����, �� "�����"<br/>
    ���.: +7(3852) 201-202, ����� 22-004</li>

    <li>�. �������, ��. ������������� 75, ��� ��������� ����� ����������� ���������� �������� ���ѻ<br/>
    ���.: +7(385-2) 25-45-19, 66-70-79, ����� 22-088</li>

    <li>�. �������, ��. ��������������� 36, ��� "����" ������������ �����������������<br/>
    ���.: +7(385-2) 28-26-07, 28-26-08, ����� 22-072</li>

    <li>�. �������, ��. ���������������51� ��. 709, ������������ ��������� ��� �� "�����"<br/>
    ���.: +7(385-2)29-99-60</li>   

</ul>




                                                                                                                        
                                                      </div>
                                                  </article><!-- END ��� 2 ������ -->

                                                  <article class="accordeon-item js-accordeon"><!-- ��������� 2 ������ -->
                                                      <header class="accordeon-item__label js-accordeon__label">
                                                          ���������� �������
                                                      </header>

                                                      <div class="accordeon-item__content js-accordeon__content">



<ul>

    <li>�. �������, 656056, �. �������, ��. ������, �. 36, ��� ��� "�����������" ������������ ������<br/>
    ���� ������: ����������� - �������: � 9.00 �� 18.00 ������� � ��������������� ���: � 9.00 �� 17.00<br/>
    ���.: +7(3852) 53-24-70</li>

    <li>�. �������, 656006, �. �������, ��. ����������, �. 45, ���� 303, ��������� ��� ������������ � �. ��������<br/>
    ���.: +7(3852) 73-04-64</li>

    <li>�. �������, ������ 22, 4 ����, �� "�����"<br/>
    ���.: +7(3852) 201-202, ����� 22-004</li>

    <li>�. �������, ��. ������������� 75, ��� ��������� ����� ����������� ���������� �������� ���ѻ<br/>
    ���.: +7(385-2) 25-45-19, 66-70-79, ����� 22-088</li>

    <li>�. �������, ��. ��������������� 36, ��� "����" ������������ �����������������<br/>
    ���.: +7(385-2) 28-26-07, 28-26-08, ����� 22-072</li>

    <li>�. �������, ��. ���������������51� ��. 709, ������������ ��������� ��� �� "�����"<br/>
    ���.: +7(385-2)29-99-60</li>   

</ul>




                                                                                                                        
                                                      </div>
                                                  </article><!-- END ��� 2 ������ -->

                                                  <article class="accordeon-item js-accordeon"><!-- ��������� 2 ������ -->
                                                      <header class="accordeon-item__label js-accordeon__label">
                                                          ������� �������
                                                      </header>

                                                      <div class="accordeon-item__content js-accordeon__content">



<ul>

    <li>�. �������, 656056, �. �������, ��. ������, �. 36, ��� ��� "�����������" ������������ ������<br/>
    ���� ������: ����������� - �������: � 9.00 �� 18.00 ������� � ��������������� ���: � 9.00 �� 17.00<br/>
    ���.: +7(3852) 53-24-70</li>

    <li>�. �������, 656006, �. �������, ��. ����������, �. 45, ���� 303, ��������� ��� ������������ � �. ��������<br/>
    ���.: +7(3852) 73-04-64</li>

    <li>�. �������, ������ 22, 4 ����, �� "�����"<br/>
    ���.: +7(3852) 201-202, ����� 22-004</li>

    <li>�. �������, ��. ������������� 75, ��� ��������� ����� ����������� ���������� �������� ���ѻ<br/>
    ���.: +7(385-2) 25-45-19, 66-70-79, ����� 22-088</li>

    <li>�. �������, ��. ��������������� 36, ��� "����" ������������ �����������������<br/>
    ���.: +7(385-2) 28-26-07, 28-26-08, ����� 22-072</li>

    <li>�. �������, ��. ���������������51� ��. 709, ������������ ��������� ��� �� "�����"<br/>
    ���.: +7(385-2)29-99-60</li>   

</ul>




                                                                                                                        
                                                      </div>
                                                  </article><!-- END ��� 2 ������ -->

                                                  <article class="accordeon-item js-accordeon"><!-- ��������� 2 ������ -->
                                                      <header class="accordeon-item__label js-accordeon__label">
                                                          ���������� ����������
                                                      </header>

                                                      <div class="accordeon-item__content js-accordeon__content">



<ul>

    <li>�. �������, 656056, �. �������, ��. ������, �. 36, ��� ��� "�����������" ������������ ������<br/>
    ���� ������: ����������� - �������: � 9.00 �� 18.00 ������� � ��������������� ���: � 9.00 �� 17.00<br/>
    ���.: +7(3852) 53-24-70</li>

    <li>�. �������, 656006, �. �������, ��. ����������, �. 45, ���� 303, ��������� ��� ������������ � �. ��������<br/>
    ���.: +7(3852) 73-04-64</li>

    <li>�. �������, ������ 22, 4 ����, �� "�����"<br/>
    ���.: +7(3852) 201-202, ����� 22-004</li>

    <li>�. �������, ��. ������������� 75, ��� ��������� ����� ����������� ���������� �������� ���ѻ<br/>
    ���.: +7(385-2) 25-45-19, 66-70-79, ����� 22-088</li>

    <li>�. �������, ��. ��������������� 36, ��� "����" ������������ �����������������<br/>
    ���.: +7(385-2) 28-26-07, 28-26-08, ����� 22-072</li>

    <li>�. �������, ��. ���������������51� ��. 709, ������������ ��������� ��� �� "�����"<br/>
    ���.: +7(385-2)29-99-60</li>   

</ul>




                                                                                                                        
                                                      </div>
                                                  </article><!-- END ��� 2 ������ -->

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
                                        <p>��� ������,<br/> ���� ������ ����?</p>
                                        <span>�� ����������, �� ��������. ��� ���� ��������� ��������������, � ����� ����� ����� �� ������.</span>
                                    </header>

                                    <div class="accordeon-item__content js-accordeon__content" style="display: none;">
                                        
                                        <div class="accordeon"> 

                                            <article class="accordeon-item js-accordeon">
                                                <header onclick="filter_one_prop(3,'isAllTime1')" class="accordeon-item__label js-accordeon__label">
                                                    ��������� ��������������
                                                </header>

                                                <div class="accordeon-item__content js-accordeon__content" style="display: none;">
                                                    <div class="selects container">

                                                        <form action="" rel='3' id='form_3' method="post" name="search-params" class="search-params"> 

                                                                    <div class="search-params__region">
                                                                        <label for="region3">�������� ����� ����������</label> 
                                                                        <select name="district" id="region3">
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
                                                                        <label for="time" class="fancy-checkbox">
                                                                            <input id="time" name='isAllTime1' type="checkbox" >
                                                                            <span class="fancy-checkbox__checkmark"></span>
                                                                            �������������
                                                                        </label>
                                                                        <label for="check-klesh" class="fancy-checkbox">
                                                                            <input id="check-klesh" name='takingMite' type="checkbox">
                                                                            <span class="fancy-checkbox__checkmark"></span>
                                                                            ����� �����
                                                                        </label>
                                                                        <label for="adults" class="fancy-checkbox">
                                                                            <input id="adults" name='adults' type="checkbox">
                                                                            <span class="fancy-checkbox__checkmark"></span>
                                                                            ����� ��������
                                                                        </label>
                                                                        <label for="children" class="fancy-checkbox">
                                                                            <input id="children" name='children' type="checkbox">
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

                                            <article onclick="filter_one_prop(4,'takingMite')" class="accordeon-item js-accordeon">
                                                <header class="accordeon-item__label js-accordeon__label">
                                                    ����� ����� �� ������
                                                </header>

                                                <div class="accordeon-item__content js-accordeon__content" style="display: none;">
                                                    <div class="selects container">

                                                        <form action="" rel='4' id='form_4' method="post" name="search-params" class="search-params"> 

                                                                    <div class="search-params__region">
                                                                        <label for="region4">�������� ����� ����������</label> 
                                                                        <select name="district" id="region4">
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
                                                                        <label for="time" class="fancy-checkbox">
                                                                            <input id="time" name='isAllTime1' type="checkbox" >
                                                                            <span class="fancy-checkbox__checkmark"></span>
                                                                            �������������
                                                                        </label>
                                                                        <label for="check-klesh" class="fancy-checkbox">
                                                                            <input id="check-klesh" name='takingMite' type="checkbox">
                                                                            <span class="fancy-checkbox__checkmark"></span>
                                                                            ����� �����
                                                                        </label>
                                                                        <label for="adults" class="fancy-checkbox">
                                                                            <input id="adults" name='adults' type="checkbox">
                                                                            <span class="fancy-checkbox__checkmark"></span>
                                                                            ����� ��������
                                                                        </label>
                                                                        <label for="children" class="fancy-checkbox">
                                                                            <input id="children" name='children' type="checkbox">
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
                                    <header class="accordeon-item__label js-accordeon__label">
                                        <p>��������������<br/> �� ����� �����</p>
                                        <span>C�������� ����� ���� ����������� ��� ����������� ������ ��� ������ ������.</span>
                                    </header>

                                    <div class="accordeon-item__content js-accordeon__content" style="display: none;">

                                    <div class="content-container">
                                            <form action="" id='form_dub_2' method="post" name="search-params" class="search-params"> 

                                                <div class="search-params__region search-params__region_centered">
                                                    <label for="region5">�������� ������</label> 
                                                      <select name="district" id="region5">
                                                            <option value='all'>��� �������</option>
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

<div class="accordeon"> <!-- ������� 2 ������-->

                                                  <article class="accordeon-item js-accordeon"><!-- ��������� 2 ������ -->
                                                      <header class="accordeon-item__label js-accordeon__label">
                                                          ��������� ����
                                                      </header>

                                                      <div class="accordeon-item__content js-accordeon__content">


<ul>

    <li>�. �������, 656056, �. �������, ��. ������, �. 36, ��� ��� "�����������" ������������ ������<br/>
    ���� ������: ����������� - �������: � 9.00 �� 18.00 ������� � ��������������� ���: � 9.00 �� 17.00<br/>
    ���.: +7(3852) 53-24-70</li>

    <li>�. �������, 656006, �. �������, ��. ����������, �. 45, ���� 303, ��������� ��� ������������ � �. ��������<br/>
    ���.: +7(3852) 73-04-64</li>

    <li>�. �������, ������ 22, 4 ����, �� "�����"<br/>
    ���.: +7(3852) 201-202, ����� 22-004</li>

    <li>�. �������, ��. ������������� 75, ��� ��������� ����� ����������� ���������� �������� ���ѻ<br/>
    ���.: +7(385-2) 25-45-19, 66-70-79, ����� 22-088</li>

    <li>�. �������, ��. ��������������� 36, ��� "����" ������������ �����������������<br/>
    ���.: +7(385-2) 28-26-07, 28-26-08, ����� 22-072</li>

    <li>�. �������, ��. ���������������51� ��. 709, ������������ ��������� ��� �� "�����"<br/>
    ���.: +7(385-2)29-99-60</li>

    <li>�. �������, ��. ����������������, 45, ��� "���-���������" ��������� ������<br/>
    ���.: +7(385-2) 65-80-39, ����� 22-082</li>

    <li>�. �������, ��-� ��������, 6�, ���� �����-���������<br/>
    ���.: +7 (3852) 582�135,+7 (3852) 582�119, +7 (3852) 580�061<br/>
    ����������: ����� 22-005</li>

    <li>�. �������, ��-� ���������������, �. 72, ��� "����"<br/>
    ���� ������: ����������� - �������: � 9.00 �� 18.00 ������� � ��������������� ���: � 9.00 �� 17.00. ���� 13.00-14.00. ������� � �����������-��������<br/>
    ���.: +7 (3852) 63-58-85; +7 (3852) 63-64-76</li>

    <li>�. �������, ������� 21, ��� "����� �����������" ������ � �. ��������<br/>
    ���.: +7(385-2) 28-22-55, ����� 22-026</li>

    <li>�. �������, ��. ������ 36 ��. 410,417, 420, 423, �� ���������������� (��������� ������)<br/>
    ���.: +7(385-2)201-086, ����� 22-045</li>

    <li>�. �������, ��. ������ 47/ ��. ������ 10, ��� "��������� �������� "��������������"<br/>
    ���.: +7(385-2) 63-67-32, 89-047</li>

    <li>�. �������, ��. ������ 87, ��� "���"<br/>
    ���.: +7(385-2) 55-39-18, ����� 22-002</li>

    <li>�. �������, ��. ���������, 74, ��� "��� "������������"<br/>
    ���.: +7(385-2)56-71-74, ����� 22-014</li>

    <li>�. �������, ��. ��������, 88 �, ��� �� ���� �����������<br/>
    ���.: +7(385-2) 567000, ����� 22-058</li>

    <li>�. �������, ��. ������������,40, ����� 22-090, ������ "����-���" ��� "��������� �������� "��������"<br/>
    ���.: +7(385-2) 35-42-03</li>

    <li>�. �������, ��. ������������ 131, ��� "������" ������������ �����������������<br/>
    ���.: +7(385-2) 201421, ����� 22-039</li>

    <li>�. �������, ��. �����������, 24, ��� "�� "��������"<br/>
    ���.: +7(385-2) 36-40-28, ����� 22-034</li>

    <li>�. �����, �.�����, ��. ��������� 205/1 , �� ���� �������� ������� ������<br/>
    ���� ������: �����������-�������: � 9.00 �� 18.00, ���� 13.00-14.00; ��������-�������,�����������<br/>
    ���.: +7(3854)-36-45-00, 36-78-31
    ����������: ����� �������� 22-110</li>

    <li>�. �����, ��. ����������������, 96, ��. 13, ��� "��� "�����������" ������� ������<br/>
    ���.: +7 (3854) 55-55-96</li>

    <li>�. �����, ��.���������, 59/1, ��� "���-���������" ������� ������<br/>
    ���.: +7 (3854) 555-198
    ����������: ����� 22-081</li>

    <li>�. ��������, 658201, ��������� ����, �.��������, ��. ��������, 14-1, ��� ���-��������� ���������� ������<br/>
    ���� ������: ����������� - �������: � 9.00 �� 18.00 ������� � ��������������� ���: � 9.00 �� 17.00<br/>
    ���.: +7 (385-57) 5-99-24</li>

</ul>
                                                              


                                                                <!-- <div class='map' id='map_3'>
                                                                    <p>
                                                                        <img style="width: 100%;" src="img/map.png" alt="">
                                                                    </p>   
                                                                </div> -->                                                         
                                                      </div>
                                                  </article><!-- END ��� 2 ������ --> 


                                                  <article class="accordeon-item js-accordeon"><!-- ��������� 2 ������ -->
                                                      <header class="accordeon-item__label js-accordeon__label">
                                                          ��������� �������
                                                      </header>

                                                      <div class="accordeon-item__content js-accordeon__content">



<ul>

    <li>�. �������, 656056, �. �������, ��. ������, �. 36, ��� ��� "�����������" ������������ ������<br/>
    ���� ������: ����������� - �������: � 9.00 �� 18.00 ������� � ��������������� ���: � 9.00 �� 17.00<br/>
    ���.: +7(3852) 53-24-70</li>

    <li>�. �������, 656006, �. �������, ��. ����������, �. 45, ���� 303, ��������� ��� ������������ � �. ��������<br/>
    ���.: +7(3852) 73-04-64</li>

    <li>�. �������, ������ 22, 4 ����, �� "�����"<br/>
    ���.: +7(3852) 201-202, ����� 22-004</li>

    <li>�. �������, ��. ������������� 75, ��� ��������� ����� ����������� ���������� �������� ���ѻ<br/>
    ���.: +7(385-2) 25-45-19, 66-70-79, ����� 22-088</li>

    <li>�. �������, ��. ��������������� 36, ��� "����" ������������ �����������������<br/>
    ���.: +7(385-2) 28-26-07, 28-26-08, ����� 22-072</li>

    <li>�. �������, ��. ���������������51� ��. 709, ������������ ��������� ��� �� "�����"<br/>
    ���.: +7(385-2)29-99-60</li>   

</ul>




                                                                                                                        
                                                      </div>
                                                  </article><!-- END ��� 2 ������ -->

                                                  <article class="accordeon-item js-accordeon"><!-- ��������� 2 ������ -->
                                                      <header class="accordeon-item__label js-accordeon__label">
                                                          ����������� �������
                                                      </header>

                                                      <div class="accordeon-item__content js-accordeon__content">



<ul>

    <li>�. �������, 656056, �. �������, ��. ������, �. 36, ��� ��� "�����������" ������������ ������<br/>
    ���� ������: ����������� - �������: � 9.00 �� 18.00 ������� � ��������������� ���: � 9.00 �� 17.00<br/>
    ���.: +7(3852) 53-24-70</li>

    <li>�. �������, 656006, �. �������, ��. ����������, �. 45, ���� 303, ��������� ��� ������������ � �. ��������<br/>
    ���.: +7(3852) 73-04-64</li>

    <li>�. �������, ������ 22, 4 ����, �� "�����"<br/>
    ���.: +7(3852) 201-202, ����� 22-004</li>

    <li>�. �������, ��. ������������� 75, ��� ��������� ����� ����������� ���������� �������� ���ѻ<br/>
    ���.: +7(385-2) 25-45-19, 66-70-79, ����� 22-088</li>

    <li>�. �������, ��. ��������������� 36, ��� "����" ������������ �����������������<br/>
    ���.: +7(385-2) 28-26-07, 28-26-08, ����� 22-072</li>

    <li>�. �������, ��. ���������������51� ��. 709, ������������ ��������� ��� �� "�����"<br/>
    ���.: +7(385-2)29-99-60</li>   

</ul>




                                                                                                                        
                                                      </div>
                                                  </article><!-- END ��� 2 ������ -->

                                                  <article class="accordeon-item js-accordeon"><!-- ��������� 2 ������ -->
                                                      <header class="accordeon-item__label js-accordeon__label">
                                                          ������������ ����
                                                      </header>

                                                      <div class="accordeon-item__content js-accordeon__content">



<ul>

    <li>�. �������, 656056, �. �������, ��. ������, �. 36, ��� ��� "�����������" ������������ ������<br/>
    ���� ������: ����������� - �������: � 9.00 �� 18.00 ������� � ��������������� ���: � 9.00 �� 17.00<br/>
    ���.: +7(3852) 53-24-70</li>

    <li>�. �������, 656006, �. �������, ��. ����������, �. 45, ���� 303, ��������� ��� ������������ � �. ��������<br/>
    ���.: +7(3852) 73-04-64</li>

    <li>�. �������, ������ 22, 4 ����, �� "�����"<br/>
    ���.: +7(3852) 201-202, ����� 22-004</li>

    <li>�. �������, ��. ������������� 75, ��� ��������� ����� ����������� ���������� �������� ���ѻ<br/>
    ���.: +7(385-2) 25-45-19, 66-70-79, ����� 22-088</li>

    <li>�. �������, ��. ��������������� 36, ��� "����" ������������ �����������������<br/>
    ���.: +7(385-2) 28-26-07, 28-26-08, ����� 22-072</li>

    <li>�. �������, ��. ���������������51� ��. 709, ������������ ��������� ��� �� "�����"<br/>
    ���.: +7(385-2)29-99-60</li>   

</ul>




                                                                                                                        
                                                      </div>
                                                  </article><!-- END ��� 2 ������ -->

                                                  <article class="accordeon-item js-accordeon"><!-- ��������� 2 ������ -->
                                                      <header class="accordeon-item__label js-accordeon__label">
                                                          ������������� �������
                                                      </header>

                                                      <div class="accordeon-item__content js-accordeon__content">



<ul>

    <li>�. �������, 656056, �. �������, ��. ������, �. 36, ��� ��� "�����������" ������������ ������<br/>
    ���� ������: ����������� - �������: � 9.00 �� 18.00 ������� � ��������������� ���: � 9.00 �� 17.00<br/>
    ���.: +7(3852) 53-24-70</li>

    <li>�. �������, 656006, �. �������, ��. ����������, �. 45, ���� 303, ��������� ��� ������������ � �. ��������<br/>
    ���.: +7(3852) 73-04-64</li>

    <li>�. �������, ������ 22, 4 ����, �� "�����"<br/>
    ���.: +7(3852) 201-202, ����� 22-004</li>

    <li>�. �������, ��. ������������� 75, ��� ��������� ����� ����������� ���������� �������� ���ѻ<br/>
    ���.: +7(385-2) 25-45-19, 66-70-79, ����� 22-088</li>

    <li>�. �������, ��. ��������������� 36, ��� "����" ������������ �����������������<br/>
    ���.: +7(385-2) 28-26-07, 28-26-08, ����� 22-072</li>

    <li>�. �������, ��. ���������������51� ��. 709, ������������ ��������� ��� �� "�����"<br/>
    ���.: +7(385-2)29-99-60</li>   

</ul>




                                                                                                                        
                                                      </div>
                                                  </article><!-- END ��� 2 ������ -->

                                                  <article class="accordeon-item js-accordeon"><!-- ��������� 2 ������ -->
                                                      <header class="accordeon-item__label js-accordeon__label">
                                                          ������ �������
                                                      </header>

                                                      <div class="accordeon-item__content js-accordeon__content">



<ul>

    <li>�. �������, 656056, �. �������, ��. ������, �. 36, ��� ��� "�����������" ������������ ������<br/>
    ���� ������: ����������� - �������: � 9.00 �� 18.00 ������� � ��������������� ���: � 9.00 �� 17.00<br/>
    ���.: +7(3852) 53-24-70</li>

    <li>�. �������, 656006, �. �������, ��. ����������, �. 45, ���� 303, ��������� ��� ������������ � �. ��������<br/>
    ���.: +7(3852) 73-04-64</li>

    <li>�. �������, ������ 22, 4 ����, �� "�����"<br/>
    ���.: +7(3852) 201-202, ����� 22-004</li>

    <li>�. �������, ��. ������������� 75, ��� ��������� ����� ����������� ���������� �������� ���ѻ<br/>
    ���.: +7(385-2) 25-45-19, 66-70-79, ����� 22-088</li>

    <li>�. �������, ��. ��������������� 36, ��� "����" ������������ �����������������<br/>
    ���.: +7(385-2) 28-26-07, 28-26-08, ����� 22-072</li>

    <li>�. �������, ��. ���������������51� ��. 709, ������������ ��������� ��� �� "�����"<br/>
    ���.: +7(385-2)29-99-60</li>   

</ul>




                                                                                                                        
                                                      </div>
                                                  </article><!-- END ��� 2 ������ -->

                                                  <article class="accordeon-item js-accordeon"><!-- ��������� 2 ������ -->
                                                      <header class="accordeon-item__label js-accordeon__label">
                                                          ���������� �����
                                                      </header>

                                                      <div class="accordeon-item__content js-accordeon__content">



<ul>

    <li>�. �������, 656056, �. �������, ��. ������, �. 36, ��� ��� "�����������" ������������ ������<br/>
    ���� ������: ����������� - �������: � 9.00 �� 18.00 ������� � ��������������� ���: � 9.00 �� 17.00<br/>
    ���.: +7(3852) 53-24-70</li>

    <li>�. �������, 656006, �. �������, ��. ����������, �. 45, ���� 303, ��������� ��� ������������ � �. ��������<br/>
    ���.: +7(3852) 73-04-64</li>

    <li>�. �������, ������ 22, 4 ����, �� "�����"<br/>
    ���.: +7(3852) 201-202, ����� 22-004</li>

    <li>�. �������, ��. ������������� 75, ��� ��������� ����� ����������� ���������� �������� ���ѻ<br/>
    ���.: +7(385-2) 25-45-19, 66-70-79, ����� 22-088</li>

    <li>�. �������, ��. ��������������� 36, ��� "����" ������������ �����������������<br/>
    ���.: +7(385-2) 28-26-07, 28-26-08, ����� 22-072</li>

    <li>�. �������, ��. ���������������51� ��. 709, ������������ ��������� ��� �� "�����"<br/>
    ���.: +7(385-2)29-99-60</li>   

</ul>




                                                                                                                        
                                                      </div>
                                                  </article><!-- END ��� 2 ������ -->

                                                  <article class="accordeon-item js-accordeon"><!-- ��������� 2 ������ -->
                                                      <header class="accordeon-item__label js-accordeon__label">
                                                          ���������� �������
                                                      </header>

                                                      <div class="accordeon-item__content js-accordeon__content">



<ul>

    <li>�. �������, 656056, �. �������, ��. ������, �. 36, ��� ��� "�����������" ������������ ������<br/>
    ���� ������: ����������� - �������: � 9.00 �� 18.00 ������� � ��������������� ���: � 9.00 �� 17.00<br/>
    ���.: +7(3852) 53-24-70</li>

    <li>�. �������, 656006, �. �������, ��. ����������, �. 45, ���� 303, ��������� ��� ������������ � �. ��������<br/>
    ���.: +7(3852) 73-04-64</li>

    <li>�. �������, ������ 22, 4 ����, �� "�����"<br/>
    ���.: +7(3852) 201-202, ����� 22-004</li>

    <li>�. �������, ��. ������������� 75, ��� ��������� ����� ����������� ���������� �������� ���ѻ<br/>
    ���.: +7(385-2) 25-45-19, 66-70-79, ����� 22-088</li>

    <li>�. �������, ��. ��������������� 36, ��� "����" ������������ �����������������<br/>
    ���.: +7(385-2) 28-26-07, 28-26-08, ����� 22-072</li>

    <li>�. �������, ��. ���������������51� ��. 709, ������������ ��������� ��� �� "�����"<br/>
    ���.: +7(385-2)29-99-60</li>   

</ul>




                                                                                                                        
                                                      </div>
                                                  </article><!-- END ��� 2 ������ -->

                                                  <article class="accordeon-item js-accordeon"><!-- ��������� 2 ������ -->
                                                      <header class="accordeon-item__label js-accordeon__label">
                                                          ������� �������
                                                      </header>

                                                      <div class="accordeon-item__content js-accordeon__content">



<ul>

    <li>�. �������, 656056, �. �������, ��. ������, �. 36, ��� ��� "�����������" ������������ ������<br/>
    ���� ������: ����������� - �������: � 9.00 �� 18.00 ������� � ��������������� ���: � 9.00 �� 17.00<br/>
    ���.: +7(3852) 53-24-70</li>

    <li>�. �������, 656006, �. �������, ��. ����������, �. 45, ���� 303, ��������� ��� ������������ � �. ��������<br/>
    ���.: +7(3852) 73-04-64</li>

    <li>�. �������, ������ 22, 4 ����, �� "�����"<br/>
    ���.: +7(3852) 201-202, ����� 22-004</li>

    <li>�. �������, ��. ������������� 75, ��� ��������� ����� ����������� ���������� �������� ���ѻ<br/>
    ���.: +7(385-2) 25-45-19, 66-70-79, ����� 22-088</li>

    <li>�. �������, ��. ��������������� 36, ��� "����" ������������ �����������������<br/>
    ���.: +7(385-2) 28-26-07, 28-26-08, ����� 22-072</li>

    <li>�. �������, ��. ���������������51� ��. 709, ������������ ��������� ��� �� "�����"<br/>
    ���.: +7(385-2)29-99-60</li>   

</ul>




                                                                                                                        
                                                      </div>
                                                  </article><!-- END ��� 2 ������ -->

                                                  <article class="accordeon-item js-accordeon"><!-- ��������� 2 ������ -->
                                                      <header class="accordeon-item__label js-accordeon__label">
                                                          ���������� ����������
                                                      </header>

                                                      <div class="accordeon-item__content js-accordeon__content">



<ul>

    <li>�. �������, 656056, �. �������, ��. ������, �. 36, ��� ��� "�����������" ������������ ������<br/>
    ���� ������: ����������� - �������: � 9.00 �� 18.00 ������� � ��������������� ���: � 9.00 �� 17.00<br/>
    ���.: +7(3852) 53-24-70</li>

    <li>�. �������, 656006, �. �������, ��. ����������, �. 45, ���� 303, ��������� ��� ������������ � �. ��������<br/>
    ���.: +7(3852) 73-04-64</li>

    <li>�. �������, ������ 22, 4 ����, �� "�����"<br/>
    ���.: +7(3852) 201-202, ����� 22-004</li>

    <li>�. �������, ��. ������������� 75, ��� ��������� ����� ����������� ���������� �������� ���ѻ<br/>
    ���.: +7(385-2) 25-45-19, 66-70-79, ����� 22-088</li>

    <li>�. �������, ��. ��������������� 36, ��� "����" ������������ �����������������<br/>
    ���.: +7(385-2) 28-26-07, 28-26-08, ����� 22-072</li>

    <li>�. �������, ��. ���������������51� ��. 709, ������������ ��������� ��� �� "�����"<br/>
    ���.: +7(385-2)29-99-60</li>   

</ul>




                                                                                                                        
                                                      </div>
                                                  </article><!-- END ��� 2 ������ -->

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

<input onclick="showMarkers();" type="button" value="��������">

<input onclick="filter_one_prop('isAllTime1');" type="button" value="��������">

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
      var contentString_<?=$contentString?>="<div class='popup'> <h3><?=$arProps['name']['VALUE']?></h3> <p> <?foreach ($arProps as $key => $value) {      if ($value['VALUE'] && $value['CODE']!='id' && $value['CODE']!='longitude' && $value['CODE']!='latitude' && $value['CODE']!='adults'  && $value['CODE']!='children' && $value['CODE']!='takingMite') { echo $value['NAME'].': '; if ($value['VALUE']==1) {echo '��';} if ($value['VALUE']==2) {echo '���';} if ($value['VALUE']!=2 && $value['VALUE']!=1) {echo $value['VALUE'];} echo"<br>";      }    }?></p></div>";
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

<!-- <input onclick="setMapOnAll();" type="button" value="������ �������"> -->
<!-- <a href="hide_marker();"> ������ �������</a> -->


   <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBxQaqnd4oKL9w1hhKE73HHZ_1kg2bZQjU&callback=initMap">
    </script>

<?*/
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php');
?>