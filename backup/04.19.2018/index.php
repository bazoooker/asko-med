<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php');
CModule::IncludeModule("iblock");
?>



                        
                        <!-- TABS CONTAINER. REQUIRED -->
                        <div class="section-tabs section-tabs_horizontal section-tabs_level-1">

                              <!-- TABS -->
                              <div class="section-tabs__tabs container">
                                    <ul>
                                          <li   class="tab tab_big">
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
                                                            <li onclick="filter_one_prop('isAllTime1')" class="tab active">
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

                                        <div class='map' id='map_5'>
                                            <p>
                                                <img style="width: 100%;" src="img/map.png" alt="">
                                            </p>   
                                        </div> 
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

                                                          <div class='map' id='map_3'>
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
                                                          <div class='map' id='map_4'>
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

                            </div><!-- END ������� 1 ������-->

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