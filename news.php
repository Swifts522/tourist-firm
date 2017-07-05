<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
		
	<?php include("menu.html"); 
	include "config.php" ?>
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
		.textheader
		{ 
			position: relative;
			text-align:left;
			right: 15%;
			top: 50%;
			font: 25pt Monotype Corsiva; 
			
		}
		.texttext
		{ 
			position: relative;
			text-align:left;
			align: left;
			top: 0;
			left: -40%;
			font: 15pt Timer New Roman; 
			
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
		.formregistation2 
		{ 
			background-color: rgba(255, 255, 255, 0.7);
			box-shadow: 0 0 50px rgba(0,0,0,0.5); /* Параметры тени */
			width: 70%;
			height: 30%;
			position: relative;
			padding-top: 30%;
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
		$query = "SELECT * FROM thead WHERE ID = '$ID'";
		$res=mysql_query($query);
		echo "<Br><Br><Br><Br><Br><Br><Br><Br><Br><Br><Br>";
		while($row = mysql_fetch_assoc($res))
		{
			echo"<div class = 'formregistation'>
			<form>
			<div class = 'formnews'><div class = 'newsimg'><img src='images/newsopen.png' width = '50' height = '50' align = 'left'></div><div class = 'textheader'>".$row['Header']."</div></div>
			</div>
			</form></div><Br>
			<div class = 'formregistation2'>
			<form>
			<div class = 'formnews'><div class = 'texttext'>".$row['Text']."</div><Br></div></div>
			</form></div>";
		}	
		?>
    </body>
</html>