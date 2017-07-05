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
			right: 30%;
			top: 50%;
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
		.formregistation:hover 
		{ 
			background-color: rgba(255, 255, 255, 1.0);
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
		if(!isset($_SESSION['login'])) 
		{
			session_unset();
		}
		else
		{
			$login = $_SESSION['login'];
			$login = $_SESSION['LoginID'];
			session_unset();
			$_SESSION['login']= $login;	
			$_SESSION['LoginID'] = $login;
		}	

		$query = "SELECT * FROM thead";
		$res=mysql_query($query);
		echo "<Br><Br><Br><Br><Br><Br><Br><Br><Br><Br><Br>";
		while($row = mysql_fetch_assoc($res))
		{
			echo"<a href = 'news.php?ID=".$row['ID']."'><div class = 'formregistation'>
			<form>
			<div class = 'formnews'><div class = 'newsimg'><img src='images/news.png' width = '50' height = '50' align = 'left'></div><div class = 'textheader'>".$row['Header']."</div><Br></div></div>
			</form></div></a><Br>";
		}	
		?>
    </body>
</html>