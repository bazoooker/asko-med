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
                                                                        <label for="region1">�������� ����� ����������</label> 
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
                                                                            <input id="check-klesh1" name='takingMite' type="checkbox">
                                                                            <span class="fancy-checkbox__checkmark"></span>
                                                                            ����� �����
                                                                        </label>
                                                                        <label for="adults1" class="fancy-checkbox">
                                                                            <input id="adults1" name='adults' type="checkbox">
                                                                            <span class="fancy-checkbox__checkmark"></span>
                                                                            ����� ��������
                                                                        </label>
                                                                        <label for="children1" class="fancy-checkbox">
                                                                            <input id="children1" name='children' type="checkbox">
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
                                                                            <input id="time2" name='isAllTime1' type="checkbox" >
                                                                            <span class="fancy-checkbox__checkmark"></span>
                                                                            �������������
                                                                        </label>
                                                                        <label for="check-klesh2" class="fancy-checkbox">
                                                                            <input id="check-klesh2" name='takingMite' type="checkbox">
                                                                            <span class="fancy-checkbox__checkmark"></span>
                                                                            ����� �����
                                                                        </label>
                                                                        <label for="adults2" class="fancy-checkbox">
                                                                            <input id="adults2" name='adults' type="checkbox">
                                                                            <span class="fancy-checkbox__checkmark"></span>
                                                                            ����� ��������
                                                                        </label>
                                                                        <label for="children2" class="fancy-checkbox">
                                                                            <input id="children2" name='children' type="checkbox">
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
                                                    <label for="region3">�������� ������</label> 
                                                      <select name="district" id="region3">
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

                                                  <article class="accordeon-item opened js-accordeon"><!-- ��������� 2 ������ -->
                                                      <header class="accordeon-item__label js-accordeon__label">
                                                          ��������� ����
                                                      </header>

                                                      <div class="accordeon-item__content js-accordeon__content">


<ul class="h-fancy-list">

    <li class="partner">

    <p class="partner__address">�. �������, 656056, ��. ������, �. 36,</p>
    <p class="partner__name">��� ��� "�����������" ������������ ������</p>
    <p class="partner__name">���� ������: ����������� - �������: � 9.00 �� 18.00 ������� � ��������������� ���: � 9.00 �� 17.00
        ���.: +7(3852) 53-24-70</></p>

    </li>

    <li class="partner">

    <p class="partner__address"> �������, 656006, ��. ����������, �. 45, ���� 303, </p>
    <p class="partner__name">��������� ��� ������������ � �. ��������</p>
    <p class="partner__info">���.: +7(3852) 73-04-64</p>

    </li>

    <li class="partner">

    <p class="partner__address"> �������, ������ 22, 4 ����, </p>
    <p class="partner__name">�� "�����"</p>
    <p class="partner__info">���.: +7(3852) 201-202, ����� 22-004</p>

    </li>

    <li class="partner">

    <p class="partner__address"> �������, ��. ������������� 75, </p>
    <p class="partner__name">��� ��������� ����� ����������� ���������� �������� ���ѻ</p>
    <p class="partner__info">���.: +7(385-2) 25-45-19, 66-70-79, ����� 22-088</p>

    </li>

    <li class="partner">

    <p class="partner__address"> �������, ��. ��������������� 36, </p>
    <p class="partner__name">��� "����" ������������ �����������������</p>
    <p class="partner__info">���.: +7(385-2) 28-26-07, 28-26-08, ����� 22-072</p>

    </li>

    <li class="partner">

    <p class="partner__address"> �������, ��. ���������������51� ��. 709, </p>
    <p class="partner__name">������������ ��������� ��� �� "�����"</p>
    <p class="partner__info">���.: +7(385-2)29-99-60</p>

    </li>

    <li class="partner">

    <p class="partner__address"> �������, ��. ����������������, 45, </p>
    <p class="partner__name">��� "���-���������" ��������� ������</p>
    <p class="partner__info">���.: +7(385-2) 65-80-39, ����� 22-082</p>

    </li>

    <li class="partner">

    <p class="partner__address"> �������, ��-� ��������, 6�, </p>
    <p class="partner__name">���� �����-���������</p>
    <p class="partner__info">���.: +7 (3852) 582�135,+7 (3852) 582�119, +7 (3852) 580�061</p>

    <br/>
    ����������: ����� 22-005</li>

    <li class="partner">

    <p class="partner__address"> �������, ��-� ���������������, �. 72, </p>
    <p class="partner__name">��� "����"</p>
    <p class="partner__info">���� ������: ����������� - �������: � 9.00 �� 18.00 ������� � ��������������� ���: � 9.00 �� 17.00. ���� 13.00-14.00. 
    ������� � �����������-��������</p>
    ���.: +7 (3852) 63-58-85; +7 (3852) 63-64-76</li>

    <li class="partner">

    <p class="partner__address"> �������, ������� 21, </p>
    <p class="partner__name">��� "����� �����������" ������ � �. ��������</p>
    <p class="partner__info">���.: +7(385-2) 28-22-55, ����� 22-026</p>

    </li>

    <li class="partner">

    <p class="partner__address"> �������, ��. ������ 36 ��. 410,417, 420, 423, </p>
    <p class="partner__name">�� ���������������� (��������� ������)</p>
    <p class="partner__info">���.: +7(385-2)201-086, ����� 22-045</p>

    </li>

    <li class="partner">

    <p class="partner__address"> �������, ��. ������ 47/ ��. ������ 10, </p>
    <p class="partner__name">��� "��������� �������� "��������������"</p>
    <p class="partner__info">���.: +7(385-2) 63-67-32, 89-047</p>

    </li>

    <li class="partner">

    <p class="partner__address"> �������, ��. ������ 87, </p>
    <p class="partner__name">��� "���"</p>
    <p class="partner__info">���.: +7(385-2) 55-39-18, ����� 22-002</p>

    </li>

    <li class="partner">

    <p class="partner__address"> �������, ��. ���������, 74, </p>
    <p class="partner__name">��� "��� "������������"</p>
    <p class="partner__info">���.: +7(385-2)56-71-74, ����� 22-014</p>

    </li>

    <li class="partner">

    <p class="partner__address"> �������, ��. ��������, 88 �, </p>
    <p class="partner__name">��� �� ���� �����������</p>
    <p class="partner__info">���.: +7(385-2) 567000, ����� 22-058</p>

    </li>

    <li class="partner">

    <p class="partner__address"> �������, ��. ������������,40, ����� 22-090, ������ "����-���" </p>
    <p class="partner__name">��� "��������� �������� "��������"</p>
    <p class="partner__info">���.: +7(385-2) 35-42-03</p>

    </li>

    <li class="partner">

    <p class="partner__address"> �������, ��. ������������ 131, </p>
    <p class="partner__name">��� "������" ������������ �����������������</p>
    <p class="partner__info">���.: +7(385-2) 201421, ����� 22-039</p>

    </li>

    <li class="partner">

    <p class="partner__address"> �������, ��. �����������, 24, </p>
    <p class="partner__name">��� "�� "��������"</p>
    <p class="partner__info">���.: +7(385-2) 36-40-28, ����� 22-034</p>

    </li>

    <li class="partner">

    <p class="partner__address"> �����, �.�����, ��. ��������� 205/1 , </p>
    <p class="partner__name">�� ���� �������� ������� ������</p>
    <p class="partner__info">���� ������: �����������-�������: � 9.00 �� 18.00, ���� 13.00-14.00; ��������-�������,����������� ���.: +7(3854)-36-45-00, 36-78-31    ����������: ����� �������� 22-110</p>

    
   </li>

    <li class="partner">

    <p class="partner__address"> �����, ��. ����������������, 96, ��. 13, </p>
    <p class="partner__name">��� "��� "�����������" ������� ������</p>
    <p class="partner__info">���.: +7 (3854) 55-55-96</p>

    </li>

    <li class="partner">

    <p class="partner__address"> �����, ��.���������, 59/1, </p>
    <p class="partner__name">��� "���-���������" ������� ������</p>
    <p class="partner__info">���.: +7 (3854) 55</p>

    5-198
    ����������: ����� 22-081</li>

    <li class="partner">

    <p class="partner__address"> ��������, 658201, ��������� ����, �.��������, ��. ��������, 14-1, </p>
    <p class="partner__name">��� ���-��������� ���������� ������</p>
    <p class="partner__info">���� ������: ����������� - �������: � 9.00 �� 18.00 ������� � ��������������� ���: � 9.00 �� 17.00 ���.: +7 (385-57) 5-99-24</p>

    </li>

</ul>
                                                              


                                                                <!-- <div class='map' id='map_3'>
                                                                    <p>
                                                                        <img style="width: 100%;" src="img/map.png" alt="">
                                                                    </p>   
                                                                </div> -->                                                         
                                                      </div>
                                                  </article><!-- END ��� 2 ������ --> 


                                                  <article class="accordeon-item opened js-accordeon"><!-- ��������� 2 ������ -->
                                                      <header class="accordeon-item__label js-accordeon__label">
                                                          ��������� �������
                                                      </header>

                                                      <div class="accordeon-item__content js-accordeon__content">



<ul class="h-fancy-list">

    <li class="partner">
      <p class="partner__address">�. �������, 664003, �. ������� ��. ����������, 1�</p>
      <p class="partner__name">��� "����� �����������" </p>
      <p class="partner__info">���� ������: ����������� - �������: � 9.00 �� 18.00 ������� � ��������������� ���: � 9.00 �� 16.45. ������� 13.00-13.45
���.: +7(3952) 783-788, 783-789, 8 (800) 700-77-07
����������: ����� �������� 38-026</p>        
    </li>

    <li class="partner">
      <p class="partner__address">�. �������, �.�������, ����� ������������, 40, ���� 5</p>
      <p class="partner__name">��� �� "�����"</p>
      <p class="partner__info">���� ������: �����������-�������: � 9.00 �� 18.00, ���� 13.00-14.00; ��������-�������,�����������
���.: +7 (3952) 728�799
����������: ����� �������� 38-074</p>        
    </li> 

    <li class="partner">
      <p class="partner__address">�������, ��. ��������� ����������, 2</p>
      <p class="partner__name">��� �� ������ ��������� ������</p>
    </li>   

</ul>




                                                                                                                        
                                                      </div>
                                                  </article><!-- END ��� 2 ������ -->

                                                  <article class="accordeon-item opened js-accordeon"><!-- ��������� 2 ������ -->
                                                      <header class="accordeon-item__label js-accordeon__label">
                                                          ����������� �������
                                                      </header>

                                                      <div class="accordeon-item__content js-accordeon__content">



<ul class="h-fancy-list">

    <li class="partner">
      <p class="partner__address">�. ��������, ��. ������ 90/5</p>
      <p class="partner__name">��� �� ������ ����������� ������</p>
      <p class="partner__info">���.: +7 (3842)45-25-27</p>        
    </li>

    <li class="partner">
      <p class="partner__address">�. ��������, ��. ��������� 60�</p>
      <p class="partner__name">��� ��� ��������� ����������� ������</p>
      <p class="partner__info">���.: +7 (3842)34-93-44</p>        
    </li> 

    <li class="partner">
      <p class="partner__address">�. ��������, ��.������, 33, ����.2</p>
      <p class="partner__name">��� ���ʻ</p>
      <p class="partner__info">���.: +7 (3842) 44-15-82 (���. 143)</p>        
    </li> 

    <li class="partner">
      <p class="partner__address">�. ��������, ��. 50 ��� �������, 11</p>
      <p class="partner__name">��� "�����������"</p>
      <p class="partner__info">���.: +7 (3842) 39-05-69</p>        
    </li> 

    <li class="partner">
      <p class="partner__address">�. ��������, ��. ������, 32</p>
      <p class="partner__name">�� �����������������</p>
      <p class="partner__info">���.: +7 (3842) 36-31-85</p>        
    </li> 

    <li class="partner">
      <p class="partner__address">�. ��������, ��. ��������</p>
      <p class="partner__name">��� "����� �����������" ������ � ��������</p>
    </li> 

    <li class="partner">
      <p class="partner__address">�. ��������, ��. �������</p>
      <p class="partner__name">�� �����ǻ</p>
      <p class="partner__info">���.: +7 (3842) 45-55-33, 45-46-85</p>        
    </li> 

    <li class="partner">
      <p class="partner__address">�. ��������, ��.���������������, 2</p>
      <p class="partner__name">��� "��������� �������� "��������"</p>
      <p class="partner__info">���.: +7 (3842) 57-59-22, 57-64-05</p>        
    </li> 

    <li class="partner">
      <p class="partner__address">�. ��������, ��.��������, 5</p>
      <p class="partner__name">��� �� "��������� ��� �����������"</p>
      <p class="partner__info">���.: +7 (3842) 36-10-23</p>        
    </li> 

    <li class="partner">
      <p class="partner__address">�. ������, ���.�������������, 8 �</p>
      <p class="partner__name">��� �� "����"</p>
      <p class="partner__info">���.: +7 (38452) 2-11-12</p>        
    </li> 

    <li class="partner">
      <p class="partner__address">�. �����������, ����������������� �������� 13</p>
      <p class="partner__name">�� �� "��������� ����"</p>
    </li>     

</ul>




                                                                                                                        
                                                      </div>
                                                  </article><!-- END ��� 2 ������ -->

                                                  <article class="accordeon-item opened js-accordeon"><!-- ��������� 2 ������ -->
                                                      <header class="accordeon-item__label js-accordeon__label">
                                                          ������������ ����
                                                      </header>

                                                      <div class="accordeon-item__content js-accordeon__content">



<ul class="h-fancy-list">

<li class="partner">
    <p class="partner__address">�. ����������, �. ����������, ��. ����, 19 ���.1,</p>
    <p class="partner__name">������������ ������ �� "�����"</p>
    <p class="partner__info">���� ������: ��. - ��. 8.00 - 19.00; ��. 8.00 - 17.45; ��. - ��. ��������
    ���.: +7 (391) 202-66-99
    ����������: ����� �.�. 24-004</p> 
</li>

<li class="partner">    
    <p class="partner__address">�. ����������, 660049, ������������ ����, �.���������� ��. ��������, 117, ���� 501,</p>
    <p class="partner__name">��������� �������� ��� "���-���������" � �����������</p>
    <p class="partner__info">���� ������: 9-00 �� 18-00 ���� 13-14; ������� �� 17-00
    ���.: +7 (39-12) 27-17-14
    ����������: ����� �.�. 24-087</p> 
     </li>

<li class="partner">
    <p class="partner__address">�. ����������, 660118, ����������, ��. ���������, 7,</p>
    <p class="partner__name">��������� �������� �������� ����������� (��� ������)� � �����������</p>
    <p class="partner__info">���� ������: ���� 09.00�18.00, ������� 13.00�14.00;
    ���.: +7 (391) 205-23-23, ����� �.�. 24-061</p> 
     </li>
<li class="partner">    
    <p class="partner__address">�. ����������, ��������� 113,</p>
    <p class="partner__name">��� ���������� �������� ���������</p>
    <p class="partner__info">���.: +7 (391) 223-04-24, 223-03-31, 251-51-64
    ����������: ����� �.�. 24-034</p> 
     </li>
<li class="partner">    
    <p class="partner__address">�. ����������, �. ���������� ��. ��������, 46,</p>
    <p class="partner__name">�� "�����"</p>
    <p class="partner__info">���� ������: ��. - ��. 8.00 - 19.00; ��. 8.00 - 17.45; ��. - ��. ��������
    ���.: +7 (3912) 223-30-60; 223-29-60
    ����������: ����� �.�. 24-004</p> 
     </li>
<li class="partner">    
    <p class="partner__address">�. ����������, ����������, ��. 9 ���, 55, ��. 294 ,</p>
    <p class="partner__name">�� ���������������� ��������� �������� �������� ������������ ������</p>
    <p class="partner__info">���� ������: �� � ��: 9.00 � 18.00 �������: 13.00 � 14.00
    ���.: +7 (391) 206-84-27, 206-84-28
    ����������: ����� �.�. 24-010</p> 
     </li>
<li class="partner">    
    <p class="partner__address">�. ����������, ���������� ���������, ������������ ����, ���������� �., ��������� �����, 31,</p>
    <p class="partner__name">������, ��������� ��������</p>
    <p class="partner__info">���� ������: 9-00-18-00 ���� 13-14
    ���.: +7(391)205-15-65; 8-800-100-70-07, ����� �.�. 24-062</p> 
     </li>
<li class="partner">    
    <p class="partner__address">�. ����������, ���������� ���������, ������������ ����, ���������� �., �������� �����, 5, ���� 1, ��. � 80,</p>
    <p class="partner__name">��������� ����, ��������� ��������</p>
    <p class="partner__info">���� ������: 9.00-18.00, ��, �� - ���.
    ���.: +7 (391)254-27-40, 205-05-53
    ����������: www.sibspas.ru, ����� �.�.19-053</p> 
     </li>
<li class="partner">    
    <p class="partner__address">�. ����������, ��. ��� ��������� �. 22,</p>
    <p class="partner__name">��� "������ ��������� �����������"</p>
    <p class="partner__info">���.: +7 (391) 274-46-88,274-46-80, 227-76-70, ��������������: 8-800-333-88-00
    ����������: ����� �.�.22-037</p> 
     </li>
 <li class="partner">   
    <p class="partner__address">�. ����������, ��. �������� 20,</p>
    <p class="partner__name">��� �����������������</p>
    <p class="partner__info">���.: +7 (391) 252-93-06, ��������������: 8-800-1000-306
    ����������: ����� �.�. 24-045</p> 
     </li>
<li class="partner">    
    <p class="partner__address">�. ����������, ��. ���� ����� �.19,</p>
    <p class="partner__name">��� ���� �������������</p>
    <p class="partner__info">���.: +7 (391) 276-62-09, 276-62-08
    ����������: ����� �.�.24-014</p> 
     </li>
<li class="partner">    
    <p class="partner__address">�. ������, ��. ����������� 55,</p>
    <p class="partner__name">��� ���������� �������� ���������</p>
    <p class="partner__info">���.: (39151) 7-58-35, ����� �.�. 24-034</p> 
     </li>
<li class="partner">    
    <p class="partner__address">�. ������, �. ������, ���. 7, �.9�, ���. 74 ,</p>
    <p class="partner__name">�������� �������������, ������������ ������ �� "�����"</p>
    <p class="partner__info">���� ������: ��. - ��. 8.00 - 19.00; ��. 8.00 - 17.45; ��. - ��. ��������
    ���.: ���.(39151) 6-20-46, ����� �.�. 24-004</p> 
     </li>
<li class="partner">    
    <p class="partner__address">�. ������������, ��. ������ 24/22 ���� 29,</p>
    <p class="partner__name">��� ���������� �������� ���������</p>
    <p class="partner__info">���.: +7 (39197) 4-63-51, 4-66-25
    ����������: ����� �.�. 24-034</p> 
     </li>
<li class="partner">    
    <p class="partner__address">�. ������������, �. ������������ ��. �����������, �.6 ���� 105,</p>
    <p class="partner__name">�������������� �������������, ������������ ������ �� "�����"</p>
    <p class="partner__info">���� ������: ��. - ��. 8.00 - 19.00; ��. 8.00 - 17.45; ��. - ��. ��������
    ���.: +7 (3919) 75-80-25
    ����������: ����� �.�. 24-004</p> 
     </li>
<li class="partner">    
    <p class="partner__address">�. �����������, ��. �������� 46, 1-� ����,</p>
    <p class="partner__name">��� ���������� �������� ���������</p>
    <p class="partner__info">���.: +7 (39169) 3-82-82, 4-36-63
    ����������: ����� �.�. 24-034</p> 
     </li>
<li class="partner">    
    <p class="partner__address">�. �����������, �. ����������� ��. ����������, 52,</p>
    <p class="partner__name">������������� �������������, ������������ ������ �� "�����"</p>
    <p class="partner__info">���� ������: ��. - ��. 8.00 - 19.00; ��. 8.00 - 17.45; ��. - ��. ��������
    ���.: +7 (39169) 3-05-03
    ����������: ����� �.�. 24-004</p> 
     </li>
<li class="partner">    
    <p class="partner__address">�. �����, ��. ��������� 8,</p>
    <p class="partner__name">��� ���������� �������� ���������</p>
    <p class="partner__info">���.: +7 (39161) 3-14-68
    ����������: ����� �.�. 24-034</p> 
     </li>
<li class="partner">    
    <p class="partner__address">�. �����������, 5-� ���������� �.26,</p>
    <p class="partner__name">��� ���������� �������� ���������</p>
    <p class="partner__info">���.: +7 (39145) 5-44-68, 5-40-47
    ����������: ����� 24-034</p> 
     </li>
 <li class="partner">   
    <p class="partner__address">�. ���������, ��. ������� �������� 9,</p>
    <p class="partner__name">��� ���������� �������� ���������</p>
    <p class="partner__info">���.: +7 (39132) 2-05-89
    ����������: ����� �.�. 24-034</p> 
     </li>
 <li class="partner">   
    <p class="partner__address">�. ��������, �. ��������, ��. 30 ��� �����, �. 74,</p>
    <p class="partner__name">����������� �������������, ������������ ������ �� "�����"</p>
    <p class="partner__info">���� ������: ��. - ��. 8.00 - 19.00; ��. 8.00 - 17.45; ��. - ��. ��������
    ���.: +7 (39155) 5-70-70
    ����������: ����� �.�. 24-004</p> 
     </li>
 <li class="partner">   
    <p class="partner__address">�. ��������, �-� ��������� �.16 ��.13,</p>
    <p class="partner__name">��� ���������� �������� ���������</p>
    <p class="partner__info">���.: +7 (39151) 27-8-17
    ����������: ����� �.�. 24-034</p> 
     </li>

</ul>




                                                                                                                        
                                                      </div>
                                                  </article><!-- END ��� 2 ������ -->

                                                  <article class="accordeon-item opened js-accordeon"><!-- ��������� 2 ������ -->
                                                      <header class="accordeon-item__label js-accordeon__label">
                                                          ������������� �������
                                                      </header>

                                                      <div class="accordeon-item__content js-accordeon__content">



<ul class="h-fancy-list">

<li class="partner">
    <p class="partner__address">�. �����������, 630099, ��. ���������, 93, ���� 201, </p>
    <p  class="partner__name">��� "����"</p>
    <p class="partner__info">���� ������: �����������-�������: � 9.00 �� 20.00, �������: � 10.00 �� 16.00; ��������: �����������
        ���.: +7 (383) 220�50�41; +7 (383) 220�50�42
        ����������: ����������� �������� 54-076</p>
    
<li class="partner">
    <p class="partner__address">�. �����������, 630005, �. �����������, ��. ������, �.86 , </p>
    <p  class="partner__name">��� "���"</p>
    <p class="partner__info">���� ������: ��-��. � 9:00 �� 18:00, ��.� 9:00 �� 16:45, ��.��. - ��������
        ���.: +7 (383) 362-46-45</p>
</li>     
<li class="partner">
    <p class="partner__address">�. �����������, 630007 �. �����������, ��. ���������������� 35, </p>
    <p  class="partner__name">�� �� "��������� ����"</p>
    <p class="partner__info">���.: +7(383)266-97-25, ����� 54-053</p>
 </li>    
<li class="partner">
    <p class="partner__address">�. �����������, 630099 �. �����������, ��. ������������, 72, </p>
    <p  class="partner__name">��� �� "�����"</p>
    <p class="partner__info">���.: +7 (383)209-54-44, ����� 54-074</p>
 </li>    
<li class="partner">
    <p class="partner__address">�. �����������, 630099 �. �����������, ��. ������������, 72 ���� 504, </p>
    <p  class="partner__name">��� �� ������������</p>
    <p class="partner__info">���.: +7 (383)2804669, ����� 54-075</p>
  </li>   
<li class="partner">
    <p class="partner__address">�. �����������, ������� �������� 39, </p>
    <p  class="partner__name">��� "����"</p>
    <p class="partner__info">���.: +7 (383)210-57-80, 210-57-86, ����� 54-072</p>
  </li>   
<li class="partner">
    <p class="partner__address">�. �����������, ��. ������, 14/1 ���� 405, </p>
    <p  class="partner__name">��� ������� �����������</p>
    <p class="partner__info">���.: +7 (383) 285-18-38, ����� 54-062</p>
  </li>   
<li class="partner">
    <p class="partner__address">�. �����������, ��. ������, 38, </p>
    <p  class="partner__name">��� "��������� �������� "��������"</p>
    <p class="partner__info">���.: +7 (383) 209-08-88, 209-14-14, ����� 54-034</p>
  </li>   
<li class="partner">
    <p class="partner__address">�. �����������, ��. �����������, 119, </p>
    <p  class="partner__name">��� "����� �����������"</p>
    <p class="partner__info">���.: 8-800-700-77-07, ����� 54-026</p>
  </li>   
<li class="partner">
    <p class="partner__address">�. �����������, ��. ����������� 34, </p>
    <p  class="partner__name">��� "��� "�����-���"</p>
    <p class="partner__info">���.: +7 (383) 218-18-34, 218-22-31, ���� 218-29-24, ����� �.�. 54-049</p>
  </li>   
<li class="partner">
    <p class="partner__address">�. �����������, ��. ������������, 38, </p>
    <p  class="partner__name">�� "����������������"</p>
    <p class="partner__info">���.: +7 (383) 203-59-69, ���� 238-06-51, 8-800-100-03-02, ����� 54-045</p>
    
<li class="partner">
    <p class="partner__address">�. �����������, ��. ����� ��������,64, </p>
    <p  class="partner__name">��� �� "������"</p>
    <p class="partner__info">���.: +7 (383) 209-11-07, ����� 54-039</p>
  </li>   
<li class="partner">
    <p class="partner__address">�. �����������, ��. ���������, 5, ������-����� �������, ���� �, ��. 703, </p>
    <p  class="partner__name">��� "������ ��������� �����������"</p>
    <p class="partner__info">���.: +7 (383) 335-81-00, ����� 22-037</p>
  </li>   
<li class="partner">
    <p class="partner__address">�. �����������, ��.����������� 48, </p>
    <p  class="partner__name">��� "��� "������������"</p>
    <p class="partner__info">���.: +7 (383) 211-28-85, ����� 54-014</p>
  </li>   
<li class="partner">    
    <p class="partner__address">�. �����������, ��.������ 230/1, </p>
    <p  class="partner__name">�� "�����"</p>
    <p class="partner__info">���.: +7 (383) 328-06-06, ����� 54-004</p>
</li> 

</ul>




                                                                                                                        
                                                      </div>
                                                  </article><!-- END ��� 2 ������ -->

                                                  <article class="accordeon-item opened js-accordeon"><!-- ��������� 2 ������ -->
                                                      <header class="accordeon-item__label js-accordeon__label">
                                                          ������ �������
                                                      </header>

                                                      <div class="accordeon-item__content js-accordeon__content">



<ul class="h-fancy-list">

    <li class="partner">
      <p class="partner__address">�. ����, �. ����, ��. �����������, 107, ��������� 1/4-1/6</p>
      <p class="partner__name">��� �� "�����"</p>
      <p class="partner__info">���� ������: �����������-�������: � 9.00 �� 18.00, ���� 13.00-14.00; ��������-�������,�����������
���.: +7 (3812) 79�03�49
����������: ����� �������� 55-074</p>        
    </li>  

</ul>




                                                                                                                        
                                                      </div>
                                                  </article><!-- END ��� 2 ������ -->

                                                  <article class="accordeon-item opened js-accordeon"><!-- ��������� 2 ������ -->
                                                      <header class="accordeon-item__label js-accordeon__label">
                                                          ���������� �����
                                                      </header>

                                                      <div class="accordeon-item__content js-accordeon__content">



<ul class="h-fancy-list">

    <li class="partner">
      <p class="partner__address">�. �����-�������, 649000, �. �����-�������, ��. �����-�������, �. 56</p>
      <p class="partner__name">��� "���" �����-��������� ������</p>
      <p class="partner__info">���� ������: �����������-�������: � 9.00 �� 18.00
���.: +7(38822) 47-0-47</p>        
    </li>  

    <li class="partner">
      <p class="partner__address">�. �����-�������, 649002, ���������� �����, ����� �����-�������, ���������������� ��������, �. 9/1</p>
      <p class="partner__name">��� "���-"���������"</p>
      <p class="partner__info">���� ������: ����������� - �������: � 9.00 �� 18.00 ������� � ��������������� ���: � 9.00 �� 17.00. ���� 13.00-14.00
���.: +7 (38822) 2�31�78
����������: ����� 04-082</p>        
    </li>  

</ul>




                                                                                                                        
                                                      </div>
                                                  </article><!-- END ��� 2 ������ -->

                                                  <article class="accordeon-item opened js-accordeon"><!-- ��������� 2 ������ -->
                                                      <header class="accordeon-item__label js-accordeon__label">
                                                          ���������� �������
                                                      </header>

                                                      <div class="accordeon-item__content js-accordeon__content">



<ul class="h-fancy-list">

<li class="partner">
    <p class="partner__address">�. ������, ������, ��. �����������, �. 89-59� ����, </p>
    <p class="partner__name">��������� ����, ��������� ��������</p>
    <p>���� ������: �����������-�������: 9.00 - 18.00, ���� � 13-14; �������-����������� - �������� ���
        ���.: +7 (3902)297-56-2, 297-56-3, ����� �.�. 19-053</p>
</li>    
<li class="partner">
    <p class="partner__address">�. ������, 655017, ������, ��. �����������, �. 124, </p>
    <p class="partner__name">��������� �������� ������������ � �������</p>
    <p>���� ������: ��.-��.: 9.00-18.00, ���� 13.00-13.45, ��.: 9.00-16.45 ���� 13.00-13.45,
        ���.: +7 3902 35-82-86, 35-79-53, ����� �.�. 19-059</p>
</li>    
<li class="partner">
    <p class="partner__address">�. ������, 655017, ���������� �������, �. ������, ��. ����� ������, �. 63, </p>
    <p class="partner__name">��������� �������� �����ǻ � �������</p>
    <p>���� ������: 9-00 - 18-00; ������� 9-00 - 16-45 ��� ����� �������-�����������: ��������
        ���.: +7 (3902) 215-008 ���.103, ����� �.�.19-004</p>
</li>    
<li class="partner">
    <p class="partner__address">�. ������, ������ ��.������ 112/1 ��.10 2 ����, </p>
    <p class="partner__name">������, ���, ��������� ��������</p>
    <p>���� ������: �����������-�������: 9-00-18-00; ������� 9-00-17-00; ���� 13.00-14.00
        ���.: +7(3902) 28-77-71, ����� �.�.19-062</p>
</li>    
<li class="partner">
    <p class="partner__address">�. ������, �. ������, ��. ������, �. 77-22�, </p>
    <p class="partner__name">��������� �������� ��������� � �������</p>
    <p>���� ������: ����������� - �������: 09.00 - 18.00; �������: 09.00 - 16.45; �������, �����������: ��������
        ���.: +7 3902 34-80-20; 8-800-200-01-01, ����� �.�. 19-034</p>
</li>    
<li class="partner">
    <p class="partner__address">�. ������, �. ������, ��. �����������, �. 126, </p>
    <p class="partner__name">��������� �������� �����-��������� � �������</p>
    <p>���� ������: �����������-�������: 9.00-18.00, �������: 10.00-16.00
        ���.: +7 (39022) 2-68-19; 8-800-100-63-65, ����� �.�. 19-005</p>
</li>    
<li class="partner">
    <p class="partner__address">�. ������, ���������� �������, ������, ����� ������ ��, �. 15, </p>
    <p class="partner__name">��������� �������� ������������� � �������</p>
    <p>���� ������: � 08:00 �� 19:00, ��� ��������
        ���.: +7 (3902) 35-83-29; �����:8-800-200-0-900 (������� �����), ����� �.�. 19-001</p>
</li>    
<li class="partner">   
    <p class="partner__address">�. ����������, 655600 �� �� �.���������� 8-8-37� ��������:�655603 �/� 216, </p>
    <p class="partner__name">�� ��� "���-���������" (��������� ������ ��� "������������ ��������� ������ - ���������)</p>
    <p>���� ������: 9-00-18-00 ���� 13-14
        ���.: +7(39042) 6-31-11, ����� �.�. 19-087</p>
</li>

</ul>




                                                                                                                        
                                                      </div>
                                                  </article><!-- END ��� 2 ������ -->

                                                  <article class="accordeon-item opened js-accordeon"><!-- ��������� 2 ������ -->
                                                      <header class="accordeon-item__label js-accordeon__label">
                                                          ������� �������
                                                      </header>

                                                      <div class="accordeon-item__content js-accordeon__content">



<ul class="h-fancy-list">

    <li class="partner">
      <p class="partner__address">�. �����, 634050, �. ����� ��. �������, �. 13�</p>
      <p class="partner__name">��� "����� �����������" ������� ������</p>
      <p class="partner__info">���� ������: �����������-�������: � 9.00 �� 17.00, �������: 13.00-14.00
���.: 8 800 700-77-07
����������: ����� �������� 70-026</p>        
    </li>  

    <li class="partner">
      <p class="partner__address">�. �����, 634061, �. �����, ������� ���., ���. ���������, �. 21 �</p>
      <p class="partner__name">��� "��� "������������"</p>
      <p class="partner__info">���� ������: ����������� - �������: � 9.00 �� 18.00 �������: � 9.00 �� 17.30. ���� 13.00-14.00
���.: +7 (3822) 90-25-16, +7 (3822) 43-55-60</p>        
    </li>  

</ul>




                                                                                                                        
                                                      </div>
                                                  </article><!-- END ��� 2 ������ -->

                                                  <article class="accordeon-item opened js-accordeon"><!-- ��������� 2 ������ -->
                                                      <header class="accordeon-item__label js-accordeon__label">
                                                          ���������� ����������
                                                      </header>

                                                      <div class="accordeon-item__content js-accordeon__content">



<ul class="h-fancy-list">

    <li class="partner">
      <p class="partner__address">������, 426057, �. ������, ��. ������� ��������, ��� 43, ���� 139</p>
      <p class="partner__name">��� "����� �����������" �������� ������</p>
      <p class="partner__info">���� ������: �����������-�������: 9:00 - 18:00 �������: 13:00 - 14:00 �������, �������, �����������: ��������
���.: +7(3412) 32-02-57, 32-02-58</p>        
    </li>    

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
                                                                            <input id="time1-1" name='isAllTime1' type="checkbox" >
                                                                            <span class="fancy-checkbox__checkmark"></span>
                                                                            �������������
                                                                        </label>
                                                                        <label for="check-klesh1-1" class="fancy-checkbox">
                                                                            <input id="check-klesh1-1" name='takingMite' type="checkbox">
                                                                            <span class="fancy-checkbox__checkmark"></span>
                                                                            ����� �����
                                                                        </label>
                                                                        <label for="adults1-1" class="fancy-checkbox">
                                                                            <input id="adults1-1" name='adults' type="checkbox">
                                                                            <span class="fancy-checkbox__checkmark"></span>
                                                                            ����� ��������
                                                                        </label>
                                                                        <label for="children1-1" class="fancy-checkbox">
                                                                            <input id="children1-1" name='children' type="checkbox">
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
                                                                            <input id="time2-1" name='isAllTime1' type="checkbox" >
                                                                            <span class="fancy-checkbox__checkmark"></span>
                                                                            �������������
                                                                        </label>
                                                                        <label for="check-klesh2-1" class="fancy-checkbox">
                                                                            <input id="check-klesh2-1" name='takingMite' type="checkbox">
                                                                            <span class="fancy-checkbox__checkmark"></span>
                                                                            ����� �����
                                                                        </label>
                                                                        <label for="adults2-1" class="fancy-checkbox">
                                                                            <input id="adults2-1" name='adults' type="checkbox">
                                                                            <span class="fancy-checkbox__checkmark"></span>
                                                                            ����� ��������
                                                                        </label>
                                                                        <label for="children2-1" class="fancy-checkbox">
                                                                            <input id="children2-1" name='children' type="checkbox">
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


<ul class="h-fancy-list">

    <li class="partner">

    <p class="partner__address">�. �������, 656056, ��. ������, �. 36,</p>
    <p class="partner__name">��� ��� "�����������" ������������ ������</p>
    <p class="partner__name">���� ������: ����������� - �������: � 9.00 �� 18.00 ������� � ��������������� ���: � 9.00 �� 17.00
        ���.: +7(3852) 53-24-70</></p>

    </li>

    <li class="partner">

    <p class="partner__address"> �������, 656006, ��. ����������, �. 45, ���� 303, </p>
    <p class="partner__name">��������� ��� ������������ � �. ��������</p>
    <p class="partner__info">���.: +7(3852) 73-04-64</p>

    </li>

    <li class="partner">

    <p class="partner__address"> �������, ������ 22, 4 ����, </p>
    <p class="partner__name">�� "�����"</p>
    <p class="partner__info">���.: +7(3852) 201-202, ����� 22-004</p>

    </li>

    <li class="partner">

    <p class="partner__address"> �������, ��. ������������� 75, </p>
    <p class="partner__name">��� ��������� ����� ����������� ���������� �������� ���ѻ</p>
    <p class="partner__info">���.: +7(385-2) 25-45-19, 66-70-79, ����� 22-088</p>

    </li>

    <li class="partner">

    <p class="partner__address"> �������, ��. ��������������� 36, </p>
    <p class="partner__name">��� "����" ������������ �����������������</p>
    <p class="partner__info">���.: +7(385-2) 28-26-07, 28-26-08, ����� 22-072</p>

    </li>

    <li class="partner">

    <p class="partner__address"> �������, ��. ���������������51� ��. 709, </p>
    <p class="partner__name">������������ ��������� ��� �� "�����"</p>
    <p class="partner__info">���.: +7(385-2)29-99-60</p>

    </li>

    <li class="partner">

    <p class="partner__address"> �������, ��. ����������������, 45, </p>
    <p class="partner__name">��� "���-���������" ��������� ������</p>
    <p class="partner__info">���.: +7(385-2) 65-80-39, ����� 22-082</p>

    </li>

    <li class="partner">

    <p class="partner__address"> �������, ��-� ��������, 6�, </p>
    <p class="partner__name">���� �����-���������</p>
    <p class="partner__info">���.: +7 (3852) 582�135,+7 (3852) 582�119, +7 (3852) 580�061</p>

    <br/>
    ����������: ����� 22-005</li>

    <li class="partner">

    <p class="partner__address"> �������, ��-� ���������������, �. 72, </p>
    <p class="partner__name">��� "����"</p>
    <p class="partner__info">���� ������: ����������� - �������: � 9.00 �� 18.00 ������� � ��������������� ���: � 9.00 �� 17.00. ���� 13.00-14.00. 
    ������� � �����������-��������</p>
    ���.: +7 (3852) 63-58-85; +7 (3852) 63-64-76</li>

    <li class="partner">

    <p class="partner__address"> �������, ������� 21, </p>
    <p class="partner__name">��� "����� �����������" ������ � �. ��������</p>
    <p class="partner__info">���.: +7(385-2) 28-22-55, ����� 22-026</p>

    </li>

    <li class="partner">

    <p class="partner__address"> �������, ��. ������ 36 ��. 410,417, 420, 423, </p>
    <p class="partner__name">�� ���������������� (��������� ������)</p>
    <p class="partner__info">���.: +7(385-2)201-086, ����� 22-045</p>

    </li>

    <li class="partner">

    <p class="partner__address"> �������, ��. ������ 47/ ��. ������ 10, </p>
    <p class="partner__name">��� "��������� �������� "��������������"</p>
    <p class="partner__info">���.: +7(385-2) 63-67-32, 89-047</p>

    </li>

    <li class="partner">

    <p class="partner__address"> �������, ��. ������ 87, </p>
    <p class="partner__name">��� "���"</p>
    <p class="partner__info">���.: +7(385-2) 55-39-18, ����� 22-002</p>

    </li>

    <li class="partner">

    <p class="partner__address"> �������, ��. ���������, 74, </p>
    <p class="partner__name">��� "��� "������������"</p>
    <p class="partner__info">���.: +7(385-2)56-71-74, ����� 22-014</p>

    </li>

    <li class="partner">

    <p class="partner__address"> �������, ��. ��������, 88 �, </p>
    <p class="partner__name">��� �� ���� �����������</p>
    <p class="partner__info">���.: +7(385-2) 567000, ����� 22-058</p>

    </li>

    <li class="partner">

    <p class="partner__address"> �������, ��. ������������,40, ����� 22-090, ������ "����-���" </p>
    <p class="partner__name">��� "��������� �������� "��������"</p>
    <p class="partner__info">���.: +7(385-2) 35-42-03</p>

    </li>

    <li class="partner">

    <p class="partner__address"> �������, ��. ������������ 131, </p>
    <p class="partner__name">��� "������" ������������ �����������������</p>
    <p class="partner__info">���.: +7(385-2) 201421, ����� 22-039</p>

    </li>

    <li class="partner">

    <p class="partner__address"> �������, ��. �����������, 24, </p>
    <p class="partner__name">��� "�� "��������"</p>
    <p class="partner__info">���.: +7(385-2) 36-40-28, ����� 22-034</p>

    </li>

    <li class="partner">

    <p class="partner__address"> �����, �.�����, ��. ��������� 205/1 , </p>
    <p class="partner__name">�� ���� �������� ������� ������</p>
    <p class="partner__info">���� ������: �����������-�������: � 9.00 �� 18.00, ���� 13.00-14.00; ��������-�������,����������� ���.: +7(3854)-36-45-00, 36-78-31    ����������: ����� �������� 22-110</p>

    
   </li>

    <li class="partner">

    <p class="partner__address"> �����, ��. ����������������, 96, ��. 13, </p>
    <p class="partner__name">��� "��� "�����������" ������� ������</p>
    <p class="partner__info">���.: +7 (3854) 55-55-96</p>

    </li>

    <li class="partner">

    <p class="partner__address"> �����, ��.���������, 59/1, </p>
    <p class="partner__name">��� "���-���������" ������� ������</p>
    <p class="partner__info">���.: +7 (3854) 55</p>

    5-198
    ����������: ����� 22-081</li>

    <li class="partner">

    <p class="partner__address"> ��������, 658201, ��������� ����, �.��������, ��. ��������, 14-1, </p>
    <p class="partner__name">��� ���-��������� ���������� ������</p>
    <p class="partner__info">���� ������: ����������� - �������: � 9.00 �� 18.00 ������� � ��������������� ���: � 9.00 �� 17.00 ���.: +7 (385-57) 5-99-24</p>

    </li>

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



<ul class="h-fancy-list">

    <li class="partner">
      <p class="partner__address">�. �������, 664003, �. ������� ��. ����������, 1�</p>
      <p class="partner__name">��� "����� �����������" </p>
      <p class="partner__info">���� ������: ����������� - �������: � 9.00 �� 18.00 ������� � ��������������� ���: � 9.00 �� 16.45. ������� 13.00-13.45
���.: +7(3952) 783-788, 783-789, 8 (800) 700-77-07
����������: ����� �������� 38-026</p>        
    </li>

    <li class="partner">
      <p class="partner__address">�. �������, �.�������, ����� ������������, 40, ���� 5</p>
      <p class="partner__name">��� �� "�����"</p>
      <p class="partner__info">���� ������: �����������-�������: � 9.00 �� 18.00, ���� 13.00-14.00; ��������-�������,�����������
���.: +7 (3952) 728�799
����������: ����� �������� 38-074</p>        
    </li> 

    <li class="partner">
      <p class="partner__address">�������, ��. ��������� ����������, 2</p>
      <p class="partner__name">��� �� ������ ��������� ������</p>
    </li>   

</ul>




                                                                                                                        
                                                      </div>
                                                  </article><!-- END ��� 2 ������ -->

                                                  <article class="accordeon-item js-accordeon"><!-- ��������� 2 ������ -->
                                                      <header class="accordeon-item__label js-accordeon__label">
                                                          ����������� �������
                                                      </header>

                                                      <div class="accordeon-item__content js-accordeon__content">



<ul class="h-fancy-list">

    <li class="partner">
      <p class="partner__address">�. ��������, ��. ������ 90/5</p>
      <p class="partner__name">��� �� ������ ����������� ������</p>
      <p class="partner__info">���.: +7 (3842)45-25-27</p>        
    </li>

    <li class="partner">
      <p class="partner__address">�. ��������, ��. ��������� 60�</p>
      <p class="partner__name">��� ��� ��������� ����������� ������</p>
      <p class="partner__info">���.: +7 (3842)34-93-44</p>        
    </li> 

    <li class="partner">
      <p class="partner__address">�. ��������, ��.������, 33, ����.2</p>
      <p class="partner__name">��� ���ʻ</p>
      <p class="partner__info">���.: +7 (3842) 44-15-82 (���. 143)</p>        
    </li> 

    <li class="partner">
      <p class="partner__address">�. ��������, ��. 50 ��� �������, 11</p>
      <p class="partner__name">��� "�����������"</p>
      <p class="partner__info">���.: +7 (3842) 39-05-69</p>        
    </li> 

    <li class="partner">
      <p class="partner__address">�. ��������, ��. ������, 32</p>
      <p class="partner__name">�� �����������������</p>
      <p class="partner__info">���.: +7 (3842) 36-31-85</p>        
    </li> 

    <li class="partner">
      <p class="partner__address">�. ��������, ��. ��������</p>
      <p class="partner__name">��� "����� �����������" ������ � ��������</p>
    </li> 

    <li class="partner">
      <p class="partner__address">�. ��������, ��. �������</p>
      <p class="partner__name">�� �����ǻ</p>
      <p class="partner__info">���.: +7 (3842) 45-55-33, 45-46-85</p>        
    </li> 

    <li class="partner">
      <p class="partner__address">�. ��������, ��.���������������, 2</p>
      <p class="partner__name">��� "��������� �������� "��������"</p>
      <p class="partner__info">���.: +7 (3842) 57-59-22, 57-64-05</p>        
    </li> 

    <li class="partner">
      <p class="partner__address">�. ��������, ��.��������, 5</p>
      <p class="partner__name">��� �� "��������� ��� �����������"</p>
      <p class="partner__info">���.: +7 (3842) 36-10-23</p>        
    </li> 

    <li class="partner">
      <p class="partner__address">�. ������, ���.�������������, 8 �</p>
      <p class="partner__name">��� �� "����"</p>
      <p class="partner__info">���.: +7 (38452) 2-11-12</p>        
    </li> 

    <li class="partner">
      <p class="partner__address">�. �����������, ����������������� �������� 13</p>
      <p class="partner__name">�� �� "��������� ����"</p>
    </li>     

</ul>




                                                                                                                        
                                                      </div>
                                                  </article><!-- END ��� 2 ������ -->

                                                  <article class="accordeon-item js-accordeon"><!-- ��������� 2 ������ -->
                                                      <header class="accordeon-item__label js-accordeon__label">
                                                          ������������ ����
                                                      </header>

                                                      <div class="accordeon-item__content js-accordeon__content">



<ul class="h-fancy-list">

<li class="partner">
    <p class="partner__address">�. ����������, �. ����������, ��. ����, 19 ���.1,</p>
    <p class="partner__name">������������ ������ �� "�����"</p>
    <p class="partner__info">���� ������: ��. - ��. 8.00 - 19.00; ��. 8.00 - 17.45; ��. - ��. ��������
    ���.: +7 (391) 202-66-99
    ����������: ����� �.�. 24-004</p> 
</li>

<li class="partner">    
    <p class="partner__address">�. ����������, 660049, ������������ ����, �.���������� ��. ��������, 117, ���� 501,</p>
    <p class="partner__name">��������� �������� ��� "���-���������" � �����������</p>
    <p class="partner__info">���� ������: 9-00 �� 18-00 ���� 13-14; ������� �� 17-00
    ���.: +7 (39-12) 27-17-14
    ����������: ����� �.�. 24-087</p> 
     </li>

<li class="partner">
    <p class="partner__address">�. ����������, 660118, ����������, ��. ���������, 7,</p>
    <p class="partner__name">��������� �������� �������� ����������� (��� ������)� � �����������</p>
    <p class="partner__info">���� ������: ���� 09.00�18.00, ������� 13.00�14.00;
    ���.: +7 (391) 205-23-23, ����� �.�. 24-061</p> 
     </li>
<li class="partner">    
    <p class="partner__address">�. ����������, ��������� 113,</p>
    <p class="partner__name">��� ���������� �������� ���������</p>
    <p class="partner__info">���.: +7 (391) 223-04-24, 223-03-31, 251-51-64
    ����������: ����� �.�. 24-034</p> 
     </li>
<li class="partner">    
    <p class="partner__address">�. ����������, �. ���������� ��. ��������, 46,</p>
    <p class="partner__name">�� "�����"</p>
    <p class="partner__info">���� ������: ��. - ��. 8.00 - 19.00; ��. 8.00 - 17.45; ��. - ��. ��������
    ���.: +7 (3912) 223-30-60; 223-29-60
    ����������: ����� �.�. 24-004</p> 
     </li>
<li class="partner">    
    <p class="partner__address">�. ����������, ����������, ��. 9 ���, 55, ��. 294 ,</p>
    <p class="partner__name">�� ���������������� ��������� �������� �������� ������������ ������</p>
    <p class="partner__info">���� ������: �� � ��: 9.00 � 18.00 �������: 13.00 � 14.00
    ���.: +7 (391) 206-84-27, 206-84-28
    ����������: ����� �.�. 24-010</p> 
     </li>
<li class="partner">    
    <p class="partner__address">�. ����������, ���������� ���������, ������������ ����, ���������� �., ��������� �����, 31,</p>
    <p class="partner__name">������, ��������� ��������</p>
    <p class="partner__info">���� ������: 9-00-18-00 ���� 13-14
    ���.: +7(391)205-15-65; 8-800-100-70-07, ����� �.�. 24-062</p> 
     </li>
<li class="partner">    
    <p class="partner__address">�. ����������, ���������� ���������, ������������ ����, ���������� �., �������� �����, 5, ���� 1, ��. � 80,</p>
    <p class="partner__name">��������� ����, ��������� ��������</p>
    <p class="partner__info">���� ������: 9.00-18.00, ��, �� - ���.
    ���.: +7 (391)254-27-40, 205-05-53
    ����������: www.sibspas.ru, ����� �.�.19-053</p> 
     </li>
<li class="partner">    
    <p class="partner__address">�. ����������, ��. ��� ��������� �. 22,</p>
    <p class="partner__name">��� "������ ��������� �����������"</p>
    <p class="partner__info">���.: +7 (391) 274-46-88,274-46-80, 227-76-70, ��������������: 8-800-333-88-00
    ����������: ����� �.�.22-037</p> 
     </li>
 <li class="partner">   
    <p class="partner__address">�. ����������, ��. �������� 20,</p>
    <p class="partner__name">��� �����������������</p>
    <p class="partner__info">���.: +7 (391) 252-93-06, ��������������: 8-800-1000-306
    ����������: ����� �.�. 24-045</p> 
     </li>
<li class="partner">    
    <p class="partner__address">�. ����������, ��. ���� ����� �.19,</p>
    <p class="partner__name">��� ���� �������������</p>
    <p class="partner__info">���.: +7 (391) 276-62-09, 276-62-08
    ����������: ����� �.�.24-014</p> 
     </li>
<li class="partner">    
    <p class="partner__address">�. ������, ��. ����������� 55,</p>
    <p class="partner__name">��� ���������� �������� ���������</p>
    <p class="partner__info">���.: (39151) 7-58-35, ����� �.�. 24-034</p> 
     </li>
<li class="partner">    
    <p class="partner__address">�. ������, �. ������, ���. 7, �.9�, ���. 74 ,</p>
    <p class="partner__name">�������� �������������, ������������ ������ �� "�����"</p>
    <p class="partner__info">���� ������: ��. - ��. 8.00 - 19.00; ��. 8.00 - 17.45; ��. - ��. ��������
    ���.: ���.(39151) 6-20-46, ����� �.�. 24-004</p> 
     </li>
<li class="partner">    
    <p class="partner__address">�. ������������, ��. ������ 24/22 ���� 29,</p>
    <p class="partner__name">��� ���������� �������� ���������</p>
    <p class="partner__info">���.: +7 (39197) 4-63-51, 4-66-25
    ����������: ����� �.�. 24-034</p> 
     </li>
<li class="partner">    
    <p class="partner__address">�. ������������, �. ������������ ��. �����������, �.6 ���� 105,</p>
    <p class="partner__name">�������������� �������������, ������������ ������ �� "�����"</p>
    <p class="partner__info">���� ������: ��. - ��. 8.00 - 19.00; ��. 8.00 - 17.45; ��. - ��. ��������
    ���.: +7 (3919) 75-80-25
    ����������: ����� �.�. 24-004</p> 
     </li>
<li class="partner">    
    <p class="partner__address">�. �����������, ��. �������� 46, 1-� ����,</p>
    <p class="partner__name">��� ���������� �������� ���������</p>
    <p class="partner__info">���.: +7 (39169) 3-82-82, 4-36-63
    ����������: ����� �.�. 24-034</p> 
     </li>
<li class="partner">    
    <p class="partner__address">�. �����������, �. ����������� ��. ����������, 52,</p>
    <p class="partner__name">������������� �������������, ������������ ������ �� "�����"</p>
    <p class="partner__info">���� ������: ��. - ��. 8.00 - 19.00; ��. 8.00 - 17.45; ��. - ��. ��������
    ���.: +7 (39169) 3-05-03
    ����������: ����� �.�. 24-004</p> 
     </li>
<li class="partner">    
    <p class="partner__address">�. �����, ��. ��������� 8,</p>
    <p class="partner__name">��� ���������� �������� ���������</p>
    <p class="partner__info">���.: +7 (39161) 3-14-68
    ����������: ����� �.�. 24-034</p> 
     </li>
<li class="partner">    
    <p class="partner__address">�. �����������, 5-� ���������� �.26,</p>
    <p class="partner__name">��� ���������� �������� ���������</p>
    <p class="partner__info">���.: +7 (39145) 5-44-68, 5-40-47
    ����������: ����� 24-034</p> 
     </li>
 <li class="partner">   
    <p class="partner__address">�. ���������, ��. ������� �������� 9,</p>
    <p class="partner__name">��� ���������� �������� ���������</p>
    <p class="partner__info">���.: +7 (39132) 2-05-89
    ����������: ����� �.�. 24-034</p> 
     </li>
 <li class="partner">   
    <p class="partner__address">�. ��������, �. ��������, ��. 30 ��� �����, �. 74,</p>
    <p class="partner__name">����������� �������������, ������������ ������ �� "�����"</p>
    <p class="partner__info">���� ������: ��. - ��. 8.00 - 19.00; ��. 8.00 - 17.45; ��. - ��. ��������
    ���.: +7 (39155) 5-70-70
    ����������: ����� �.�. 24-004</p> 
     </li>
 <li class="partner">   
    <p class="partner__address">�. ��������, �-� ��������� �.16 ��.13,</p>
    <p class="partner__name">��� ���������� �������� ���������</p>
    <p class="partner__info">���.: +7 (39151) 27-8-17
    ����������: ����� �.�. 24-034</p> 
     </li>

</ul>




                                                                                                                        
                                                      </div>
                                                  </article><!-- END ��� 2 ������ -->

                                                  <article class="accordeon-item js-accordeon"><!-- ��������� 2 ������ -->
                                                      <header class="accordeon-item__label js-accordeon__label">
                                                          ������������� �������
                                                      </header>

                                                      <div class="accordeon-item__content js-accordeon__content">



<ul class="h-fancy-list">

<li class="partner">
    <p class="partner__address">�. �����������, 630099, ��. ���������, 93, ���� 201, </p>
    <p  class="partner__name">��� "����"</p>
    <p class="partner__info">���� ������: �����������-�������: � 9.00 �� 20.00, �������: � 10.00 �� 16.00; ��������: �����������
        ���.: +7 (383) 220�50�41; +7 (383) 220�50�42
        ����������: ����������� �������� 54-076</p>
    
<li class="partner">
    <p class="partner__address">�. �����������, 630005, �. �����������, ��. ������, �.86 , </p>
    <p  class="partner__name">��� "���"</p>
    <p class="partner__info">���� ������: ��-��. � 9:00 �� 18:00, ��.� 9:00 �� 16:45, ��.��. - ��������
        ���.: +7 (383) 362-46-45</p>
</li>     
<li class="partner">
    <p class="partner__address">�. �����������, 630007 �. �����������, ��. ���������������� 35, </p>
    <p  class="partner__name">�� �� "��������� ����"</p>
    <p class="partner__info">���.: +7(383)266-97-25, ����� 54-053</p>
 </li>    
<li class="partner">
    <p class="partner__address">�. �����������, 630099 �. �����������, ��. ������������, 72, </p>
    <p  class="partner__name">��� �� "�����"</p>
    <p class="partner__info">���.: +7 (383)209-54-44, ����� 54-074</p>
 </li>    
<li class="partner">
    <p class="partner__address">�. �����������, 630099 �. �����������, ��. ������������, 72 ���� 504, </p>
    <p  class="partner__name">��� �� ������������</p>
    <p class="partner__info">���.: +7 (383)2804669, ����� 54-075</p>
  </li>   
<li class="partner">
    <p class="partner__address">�. �����������, ������� �������� 39, </p>
    <p  class="partner__name">��� "����"</p>
    <p class="partner__info">���.: +7 (383)210-57-80, 210-57-86, ����� 54-072</p>
  </li>   
<li class="partner">
    <p class="partner__address">�. �����������, ��. ������, 14/1 ���� 405, </p>
    <p  class="partner__name">��� ������� �����������</p>
    <p class="partner__info">���.: +7 (383) 285-18-38, ����� 54-062</p>
  </li>   
<li class="partner">
    <p class="partner__address">�. �����������, ��. ������, 38, </p>
    <p  class="partner__name">��� "��������� �������� "��������"</p>
    <p class="partner__info">���.: +7 (383) 209-08-88, 209-14-14, ����� 54-034</p>
  </li>   
<li class="partner">
    <p class="partner__address">�. �����������, ��. �����������, 119, </p>
    <p  class="partner__name">��� "����� �����������"</p>
    <p class="partner__info">���.: 8-800-700-77-07, ����� 54-026</p>
  </li>   
<li class="partner">
    <p class="partner__address">�. �����������, ��. ����������� 34, </p>
    <p  class="partner__name">��� "��� "�����-���"</p>
    <p class="partner__info">���.: +7 (383) 218-18-34, 218-22-31, ���� 218-29-24, ����� �.�. 54-049</p>
  </li>   
<li class="partner">
    <p class="partner__address">�. �����������, ��. ������������, 38, </p>
    <p  class="partner__name">�� "����������������"</p>
    <p class="partner__info">���.: +7 (383) 203-59-69, ���� 238-06-51, 8-800-100-03-02, ����� 54-045</p>
    
<li class="partner">
    <p class="partner__address">�. �����������, ��. ����� ��������,64, </p>
    <p  class="partner__name">��� �� "������"</p>
    <p class="partner__info">���.: +7 (383) 209-11-07, ����� 54-039</p>
  </li>   
<li class="partner">
    <p class="partner__address">�. �����������, ��. ���������, 5, ������-����� �������, ���� �, ��. 703, </p>
    <p  class="partner__name">��� "������ ��������� �����������"</p>
    <p class="partner__info">���.: +7 (383) 335-81-00, ����� 22-037</p>
  </li>   
<li class="partner">
    <p class="partner__address">�. �����������, ��.����������� 48, </p>
    <p  class="partner__name">��� "��� "������������"</p>
    <p class="partner__info">���.: +7 (383) 211-28-85, ����� 54-014</p>
  </li>   
<li class="partner">    
    <p class="partner__address">�. �����������, ��.������ 230/1, </p>
    <p  class="partner__name">�� "�����"</p>
    <p class="partner__info">���.: +7 (383) 328-06-06, ����� 54-004</p>
</li> 

</ul>




                                                                                                                        
                                                      </div>
                                                  </article><!-- END ��� 2 ������ -->

                                                  <article class="accordeon-item js-accordeon"><!-- ��������� 2 ������ -->
                                                      <header class="accordeon-item__label js-accordeon__label">
                                                          ������ �������
                                                      </header>

                                                      <div class="accordeon-item__content js-accordeon__content">



<ul class="h-fancy-list">

    <li class="partner">
      <p class="partner__address">�. ����, �. ����, ��. �����������, 107, ��������� 1/4-1/6</p>
      <p class="partner__name">��� �� "�����"</p>
      <p class="partner__info">���� ������: �����������-�������: � 9.00 �� 18.00, ���� 13.00-14.00; ��������-�������,�����������
���.: +7 (3812) 79�03�49
����������: ����� �������� 55-074</p>        
    </li>  

</ul>




                                                                                                                        
                                                      </div>
                                                  </article><!-- END ��� 2 ������ -->

                                                  <article class="accordeon-item js-accordeon"><!-- ��������� 2 ������ -->
                                                      <header class="accordeon-item__label js-accordeon__label">
                                                          ���������� �����
                                                      </header>

                                                      <div class="accordeon-item__content js-accordeon__content">



<ul class="h-fancy-list">

    <li class="partner">
      <p class="partner__address">�. �����-�������, 649000, �. �����-�������, ��. �����-�������, �. 56</p>
      <p class="partner__name">��� "���" �����-��������� ������</p>
      <p class="partner__info">���� ������: �����������-�������: � 9.00 �� 18.00
���.: +7(38822) 47-0-47</p>        
    </li>  

    <li class="partner">
      <p class="partner__address">�. �����-�������, 649002, ���������� �����, ����� �����-�������, ���������������� ��������, �. 9/1</p>
      <p class="partner__name">��� "���-"���������"</p>
      <p class="partner__info">���� ������: ����������� - �������: � 9.00 �� 18.00 ������� � ��������������� ���: � 9.00 �� 17.00. ���� 13.00-14.00
���.: +7 (38822) 2�31�78
����������: ����� 04-082</p>        
    </li>  

</ul>




                                                                                                                        
                                                      </div>
                                                  </article><!-- END ��� 2 ������ -->

                                                  <article class="accordeon-item js-accordeon"><!-- ��������� 2 ������ -->
                                                      <header class="accordeon-item__label js-accordeon__label">
                                                          ���������� �������
                                                      </header>

                                                      <div class="accordeon-item__content js-accordeon__content">



<ul class="h-fancy-list">

<li class="partner">
    <p class="partner__address">�. ������, ������, ��. �����������, �. 89-59� ����, </p>
    <p class="partner__name">��������� ����, ��������� ��������</p>
    <p>���� ������: �����������-�������: 9.00 - 18.00, ���� � 13-14; �������-����������� - �������� ���
        ���.: +7 (3902)297-56-2, 297-56-3, ����� �.�. 19-053</p>
</li>    
<li class="partner">
    <p class="partner__address">�. ������, 655017, ������, ��. �����������, �. 124, </p>
    <p class="partner__name">��������� �������� ������������ � �������</p>
    <p>���� ������: ��.-��.: 9.00-18.00, ���� 13.00-13.45, ��.: 9.00-16.45 ���� 13.00-13.45,
        ���.: +7 3902 35-82-86, 35-79-53, ����� �.�. 19-059</p>
</li>    
<li class="partner">
    <p class="partner__address">�. ������, 655017, ���������� �������, �. ������, ��. ����� ������, �. 63, </p>
    <p class="partner__name">��������� �������� �����ǻ � �������</p>
    <p>���� ������: 9-00 - 18-00; ������� 9-00 - 16-45 ��� ����� �������-�����������: ��������
        ���.: +7 (3902) 215-008 ���.103, ����� �.�.19-004</p>
</li>    
<li class="partner">
    <p class="partner__address">�. ������, ������ ��.������ 112/1 ��.10 2 ����, </p>
    <p class="partner__name">������, ���, ��������� ��������</p>
    <p>���� ������: �����������-�������: 9-00-18-00; ������� 9-00-17-00; ���� 13.00-14.00
        ���.: +7(3902) 28-77-71, ����� �.�.19-062</p>
</li>    
<li class="partner">
    <p class="partner__address">�. ������, �. ������, ��. ������, �. 77-22�, </p>
    <p class="partner__name">��������� �������� ��������� � �������</p>
    <p>���� ������: ����������� - �������: 09.00 - 18.00; �������: 09.00 - 16.45; �������, �����������: ��������
        ���.: +7 3902 34-80-20; 8-800-200-01-01, ����� �.�. 19-034</p>
</li>    
<li class="partner">
    <p class="partner__address">�. ������, �. ������, ��. �����������, �. 126, </p>
    <p class="partner__name">��������� �������� �����-��������� � �������</p>
    <p>���� ������: �����������-�������: 9.00-18.00, �������: 10.00-16.00
        ���.: +7 (39022) 2-68-19; 8-800-100-63-65, ����� �.�. 19-005</p>
</li>    
<li class="partner">
    <p class="partner__address">�. ������, ���������� �������, ������, ����� ������ ��, �. 15, </p>
    <p class="partner__name">��������� �������� ������������� � �������</p>
    <p>���� ������: � 08:00 �� 19:00, ��� ��������
        ���.: +7 (3902) 35-83-29; �����:8-800-200-0-900 (������� �����), ����� �.�. 19-001</p>
</li>    
<li class="partner">   
    <p class="partner__address">�. ����������, 655600 �� �� �.���������� 8-8-37� ��������:�655603 �/� 216, </p>
    <p class="partner__name">�� ��� "���-���������" (��������� ������ ��� "������������ ��������� ������ - ���������)</p>
    <p>���� ������: 9-00-18-00 ���� 13-14
        ���.: +7(39042) 6-31-11, ����� �.�. 19-087</p>
</li>

</ul>




                                                                                                                        
                                                      </div>
                                                  </article><!-- END ��� 2 ������ -->

                                                  <article class="accordeon-item js-accordeon"><!-- ��������� 2 ������ -->
                                                      <header class="accordeon-item__label js-accordeon__label">
                                                          ������� �������
                                                      </header>

                                                      <div class="accordeon-item__content js-accordeon__content">



<ul class="h-fancy-list">

    <li class="partner">
      <p class="partner__address">�. �����, 634050, �. ����� ��. �������, �. 13�</p>
      <p class="partner__name">��� "����� �����������" ������� ������</p>
      <p class="partner__info">���� ������: �����������-�������: � 9.00 �� 17.00, �������: 13.00-14.00
���.: 8 800 700-77-07
����������: ����� �������� 70-026</p>        
    </li>  

    <li class="partner">
      <p class="partner__address">�. �����, 634061, �. �����, ������� ���., ���. ���������, �. 21 �</p>
      <p class="partner__name">��� "��� "������������"</p>
      <p class="partner__info">���� ������: ����������� - �������: � 9.00 �� 18.00 �������: � 9.00 �� 17.30. ���� 13.00-14.00
���.: +7 (3822) 90-25-16, +7 (3822) 43-55-60</p>        
    </li>  
    
</ul>




                                                                                                                        
                                                      </div>
                                                  </article><!-- END ��� 2 ������ -->

                                                  <article class="accordeon-item js-accordeon"><!-- ��������� 2 ������ -->
                                                      <header class="accordeon-item__label js-accordeon__label">
                                                          ���������� ����������
                                                      </header>

                                                      <div class="accordeon-item__content js-accordeon__content">



<ul class="h-fancy-list">

    <li class="partner">
      <p class="partner__address">������, 426057, �. ������, ��. ������� ��������, ��� 43, ���� 139</p>
      <p class="partner__name">��� "����� �����������" �������� ������</p>
      <p class="partner__info">���� ������: �����������-�������: 9:00 - 18:00 �������: 13:00 - 14:00 �������, �������, �����������: ��������
���.: +7(3412) 32-02-57, 32-02-58</p>        
    </li>    

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

<!-- <input onclick="showMarkers();" type="button" value="��������"> -->

<!-- <input onclick="filter_one_prop('isAllTime1');" type="button" value="��������"> -->

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