<?
// голова без муссора
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");

//   1)
// 1 2 3 4
// 	2)
// 	5 6
CModule::IncludeModule("iblock");
?>

<!-- <input onclick="new_zoom_and_new_center(5,{lat: 14, lng: 16},map=1);" type="button" value="Новый зум и центер"> -->
<script src="http://code.jquery.com/jquery-1.8.3.js"></script>
<style>


.map {
  /*margin-top: 20px;*/
height: 476px;
margin-bottom: 2rem;
}
.gmnoprint img{
  height: 20px !important;
}
</style>


<script>
  function closeallinfowindows(c){
        // console.log(c);
        c.forEach(function(element, index) {
          eval("infowindow_"+c[index]+".close()");
        })
    // for(i=1;i<c.length;i++) {
     
    //   for (var is=1; is<=4;is++) {
    //      console.log(c[i+'_'+is]);
    //       eval("infowindow_"+c[i+'_'+is]+".close()");
    //   }
     
    // }
  }

    var markersoverall;
    var arr_popap=[];
    var mapse=[];
    var markers = [];
    var id_marker=[];

    var district=[];
    district['all']={lat: 54, lng: 56};
    district['Алтайский край']={lat:  52.129671, lng: 82.530013};
    district['г. Москва']={lat:55.755814 , lng:  37.617635};
    district['Иркутская область']={lat: 57.100294, lng: 106.363305};
    district['Кемеровская область']={lat:  54.779047, lng: 87.207361};
    district['Кировская область']={lat: 58.344108, lng: 49.695430};
    district['Красноярский край']={lat:67.236779 , lng: 95.968477};
    district['Ленинградская область']={lat: 59.337013, lng: 29.608975};
    district['Новосибирская область']={lat: 55.582396, lng: 79.264861};
    district['Омская область']={lat: 56.103472, lng: 73.344416};
    district['Республика Алтай']={lat:50.736240, lng: 87.015454};
    district['республика Башкортостан']={lat: 54.271500, lng: 56.525537};
    district['Республика Бурятия']={lat: 52.659101, lng: 109.225881};
    district['Республика Тыва']={lat: 51.584332, lng: 94.793085};
    district['Республика Хакасия']={lat: 53.386357, lng: 89.897078};
    district['Свердловская область']={lat: 58.586755, lng: 61.530761};
    district['Томская область']={lat: 58.584728, lng:82.283824 };
    district['Удмуртская республика']={lat: 57.166784, lng: 52.796972};


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
for($i=1;$i<=4;$i++){
?>
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

 mapse[<?=$i?>]=map_<?=$i?>;

<?
	

  $resp = CIBlockElement::GetList(array('SORT'=>'ASC'), array("IBLOCK_ID" => 3 ,'ACTIVE'=>'Y'));
  while($obs = $resp->GetNextElement()){
      $arProps = $obs->GetProperties();
      $arFields = $obs->GetFields();
      $contentString=(int)$arFields['ID'];

      ?>
      id_marker[<?=(int)$arFields['ID'];?>]='yes';
      arr_popap[arr_popap.length]='<?=(int)$arFields['ID'];?>_<?=$i?>';
      var contentString_<?=$contentString?>_<?=$i?>="<div class='popup'> <h3><?=$arProps['name']['VALUE']?></h3> <p> <?foreach ($arProps as $key => $value) {      if ($value['VALUE'] && $value['CODE']!='id' && $value['CODE']!='longitude' && $value['CODE']!='latitude'  && $value['CODE']!='name' && $value['CODE']!='district'  && $value['CODE']!='phone1'  && $value['CODE']!='phone2') { echo $value['NAME'].': '; if ($value['VALUE']==1) {echo 'Да';} if ($value['VALUE']==2) {echo 'Нет';} if ($value['VALUE']!=2 && $value['VALUE']!=1) {if ($value['CODE']=='phone1' or $value['CODE']=='phone2'){echo "<a href='tel:".$value['VALUE']."'>";}echo  $value['VALUE'];if ($value['CODE']=='phone1' or $value['CODE']=='phone2'){echo"</a>";}} echo"<br>";      }    }?></p></div>";
      infowindow_<?=$contentString?>_<?=$i?> = new google.maps.InfoWindow({
      content: contentString_<?=$contentString?>_<?=$i?> });
      var coords_<?=$contentString?>_<?=$i?>= {lat: <?=$arProps['longitude']['VALUE']?>, lng: <?=$arProps['latitude']['VALUE']?>};
      var marker_<?=$contentString?>_<?=$i?> = new google.maps.Marker({
        position: coords_<?=$contentString?>_<?=$i?>,
        map: map_<?=$i?>,
        title: '<?=$arProps['name']['VALUE']?>_<?=$i?>',
        icon: '/img/icons/i-location_small.png'
      });
      markers['<?=$i?>_<?=$contentString?>']=marker_<?=$contentString?>_<?=$i?>;

      marker_<?=$contentString?>_<?=$i?>.addListener('click', function() {
        closeallinfowindows(markersoverall);
        infowindow_<?=$contentString?>_<?=$i?>.open(map_<?=$i?>, marker_<?=$contentString?>_<?=$i?>);
      });

  <?
  }
}
?>



    markersoverall=arr_popap;




        if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(function(position) {
            var pos = {
              lat: position.coords.latitude,
              lng: position.coords.longitude
            };


             new_zoom_and_new_center(6,pos,1);
             new_zoom_and_new_center(6,pos,2);
             new_zoom_and_new_center(6,pos,3);
            new_zoom_and_new_center(6,pos,4);
          }, function() {
            // handleLocationError(true, infoWindow, map_3.getCenter());


          });
         
        } else {
          // Browser doesn't support Geolocation
          // handleLocationError(false, infoWindow, map_3.getCenter());
          console.log('eror location')
        }
      }

      function handleLocationError(browserHasGeolocation, infoWindow, pos) {
        // infoWindow.setPosition(pos);
        // infoWindow.setContent(browserHasGeolocation ?
        //                       'Error: The Geolocation service failed.' :
        //                       'Error: Your browser doesn\'t support geolocation.');
      }





function setMapOnAll(no_hide='all_show', map=1) {
  // console.log(no_hide);
  if (no_hide=='all_show' || no_hide=='all_hide') {

    id_marker.forEach(function(element, index) {
      path=''+map+'_'+index+'';
      if (no_hide=='all_hide') {
        markers[path].setVisible(false);  
      }else{
        markers[path].setVisible(true);
      }     
    });
  }else{
    id_marker.forEach(function(element, index) {
      path=''+map+'_'+index+'';
       if(no_hide[index]=='yes'){
          markers[path].setVisible(true);
       }else{
           markers[path].setVisible(false);
       }          
    });
  }

}


function showMarkers(no_hide='all_show', map=1) {
  setMapOnAll(no_hide,map);
}

  $(document).ready(function(){

    initMap();


  });


function filter_one_prop(map=1,name_prop,iblock=3){
  // console.log(map);
 var distric= $('#form_'+map+' select option:selected').val();
  $.ajax({

                      type: 'POST',
                      url: '/include/get_eleme_map.php?IBLOCK_ID='+iblock+'&'+name_prop+'=1&district='+distric,
                      data: 'IBLOCK_ID='+iblock,

                      success: function(data){  
                          if (data!='all_hide') {                       
                           setMapOnAll(JSON.parse(data),map);
                           hide_partnee(JSON.parse(data),map);
                         }else{
                            setMapOnAll(data,map);
                            
                         }
                           $('#form_'+map+' input').prop( "checked", false );
                           $('#form_'+map).find('input[name='+name_prop+']').prop( "checked", true );
                            if (data!='all_hide' && distric!='all' && distric!==undefined) {
                              new_zoom_and_new_center(6,district[distric],map);

                            }

                        }
                      });

}

function new_zoom_and_new_center(zoom,center,map=1){

  if (center['lat']==54 && center['lng']==56) {zoom=4; console.log(zoom);}
  mapse[map].setZoom(zoom);
  // console.log(center);
   mapse[map].setCenter(center);
}
function hide_partnee(hide_elem,map=1){
  $('ul#partner_'+map+' li').hide();

   for (var k in hide_elem){
     
         $('li[rel="'+k+'"]').show();
   }

}

// Считывает GET переменные из строки и возвращает их как ассоциативный массив 
 function getUrlVars(param){
    var vars = [], hash;
    var hashes = param.split('&');
    for(var i = 0; i < hashes.length; i++)
    {
      hash = hashes[i].split('=');
      vars.push(hash[0]);
      vars[hash[0]] = hash[1];
    }
    return vars;
  }

  function getUrlVar(param,name){
    return getUrlVars(param)[name];
  }
function set_new_map(map=1,name_prop,iblock=3){
  var distric=getUrlVar(name_prop,'district');
  $.ajax({

                      type: 'POST',
                      url: '/include/get_eleme_map.php'+name_prop,
                      data: 'IBLOCK_ID='+iblock,

                      success: function(data){ 
                           // console.log(data);  
                          if (data!='all_hide') {                       
                           setMapOnAll(JSON.parse(data),map);
                           hide_partnee(JSON.parse(data),map);
                         }else{
                            setMapOnAll(data,map);
                         }      

                          new_zoom_and_new_center(6,district[distric],map);
                        }
                      });

}




  $('input, textearea, select, span').click(function(e){
    get_val_form($(this).parents('form').attr('rel'));
  });

function get_val_form(map=1){
  // distric='all';
  var  params='?IBLOCK_ID=3';
  var name;
  $('#form_'+map).find ('input, textearea, select').each(function() {
  // добавим новое свойство к объекту $data
  // имя свойства – значение атрибута name элемента
  // значение свойства – значение свойство value элемента
  // datas[this.name] = $(this).val();
 
  if($(this).val()=='on'){
    if ($(this).prop('checked')) {
     params+='&'+this.name+'=1';
    }
  }else{
   params+='&'+this.name+'='+$(this).val();
  }
});

   
set_new_map(map,params);
}




$('#showtype_list').click(function(e){
 var mape = $(this).parents('form').attr('rel');
 var select=$(this).parents('form').find('select').val();
 if (select=='all') {
    var  par='?IBLOCK_ID=3&district=Алтайский край';
//    $(this).parents('form').find('select').children('option[value="Алтайский край"]').click();//attr('selected','selected');

  	$("#form_1 .search-params__region ul.list li[data-value='Кемеровская область']").click();
  	$("#form_1 .search-params__region ul.list li[data-value='Кемеровская область']").addClass('selected');
    $('.option.selected.focus').removeClass('selected focus');
//    $('span.current').html('Алтайский край');
 }
  
  
  filter_one_prop(mape,par);
});

</script>
   <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBxQaqnd4oKL9w1hhKE73HHZ_1kg2bZQjU&language=ru&callback=initMap">
    </script>
<!-- <input onclick="setMapOnAll();" type="button" value="скрыть маркеры"> -->
<!-- <a href="hide_marker();"> скрыть маркеры</a> -->



