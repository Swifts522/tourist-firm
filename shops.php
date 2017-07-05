<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
		
	<?php include("menu.html"); 
	include "config.php" ?>
	<script src="http://code.jquery.com/jquery-latest.js"></script><!--Подключаем библиотеку Jquery-->

	<link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" rel="stylesheet" type="text/css"/><!--Подключаем стили CSS для библиотеки Jquery UI-->
	<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script><!--Подключаем библиотеку Jquery UI-->
	<style type="text/css">
		.formnews 
		{ 
			width: 500%;
			height: 20%;
			position: relative;
			padding-top: 8%;
			top: 10%;
			right: 0;
			bottom: 0;
			left: -0;
			margin: auto;
			text-align:center;
		}
		.formnews2 
		{ 
			width: 80%;
			height: 50%;
			position: relative;
			padding-bottom: 30%;
			top: 50%;
			right: 0;
			bottom: 0;
			left: -10%;
			margin: auto;
		}
		.newsimg
		{ 
			position: relative;
			left: -40%;
			
		}
		.newsimg2
		{ 
			position: relative;
			left: 50%;
			top:-50%;
			
		}
		.sliderstyle
		{
			position: relative;
			left: 20%;
			top:10%;			
		}
		.textheader
		{ 
			position: relative;
			text-align:left;
			right: 30%;
			top: 50%;
			font: 25pt Monotype Corsiva; 
			
		}
		.textprice
		{ 
			position: relative;
			text-align:right;
			right: 17%;
			top: 28%;
			font: 25pt Monotype Corsiva; 
			
		}
		.formregistation 
		{ 
			background-color: rgba(255, 255, 255, 0.7);
			box-shadow: 0 0 50px rgba(0,0,0,0.5); /* Параметры тени */
			width: 70%;
			height: 30%;
			position: relative;
			padding-top: 8%;
			top: 10%;
			right: 0;
			bottom: 0;
			left: 0;
			margin: auto;
		}
		.buttonform
		{
			position:relative;
			left:75%;
			top: 100%;
		}
		form 
		{
			position: absolute;
			top: 10%;
			right: 50%;
			bottom: 30%;
			left: 35%;
			margin: auto;
		}
	</style>	
    </head>

    <body>
	
	<?php	
		$ID = $_GET["ID"];
		$query = "SELECT * FROM ticket WHERE ID = '$ID'";
		$res=mysql_query($query);
		echo "<Br><Br><Br><Br><Br><Br><Br><Br><Br><Br><Br>";
		$row = mysql_fetch_assoc($res);
		$price = $row['Price'];
		echo "<script type='text/javascript'>
		$(document).ready(function(){
			$( '#slider' ).slider({
				value : 0,//Значение, которое будет выставлено слайдеру при загрузке
				min : 0,//Минимально возможное значение на ползунке
				max : 2,//Максимально возможное значение на ползунке
				step : 1,//Шаг, с которым будет двигаться ползунок
				create: function( event, ui ) {
				val = $( '#slider' ).slider('value');//При создании слайдера, получаем его значение в перемен. val
				$( '#contentSlider' ).html( 'Неделя' );//Заполняем этим значением элемент с id contentSlider
				},
				slide: function( event, ui ) 
				{
					switch(ui.value)
					{
						case 0:
						{
							$( '#contentSlider' ).html('Неделя');//При изменении значения ползунка заполняем элемент с id contentSlider
							$( '#priceSlider' ).html($price);//При изменении значения ползунка заполняем элемент с id contentSlider
							break;
						}
						case 1:
						{
							$( '#contentSlider' ).html('Пол месяца');//При изменении значения ползунка заполняем элемент с id contentSlider
							$( '#priceSlider' ).html($price*1.7);//При изменении значения ползунка заполняем элемент с id contentSlider
							break;
						}
						case 2:
						{
							$( '#contentSlider' ).html('Месяц');//При изменении значения ползунка заполняем элемент с id contentSlider
							$( '#priceSlider' ).html($price*3.7);//При изменении значения ползунка заполняем элемент с id contentSlider
							break;
						}
					}
				}
			});
		});
		</script>";
		
		echo "<div class = 'formregistation'>
		<form>
		<div class = 'formnews'><div class = 'newsimg'><img src='images/shopimg.png' width = '50' height = '50' align = 'left'></div><div class = 'textheader'>".$row['Punkt']."</div>
		<div class = 'newsimg2'><img src='images/money.png' width = '50' height = '50' align = 'left'></div>
		<div class = 'textprice'><span id='priceSlider'>".$row['Price']."</span> руб.</div>
		</div>
		<span id='contentSlider'></span>
		<Br>
		<Br>
		<div id='slider' class = 'sliderstyle'></div>
		</form></div>
		<Br>";	
		?>

    </body>
</html>