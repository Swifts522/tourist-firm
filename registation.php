<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
        <?php include("menu.html");
		include "config.php" ?>
		<style type="text/css">
		.formregistation { 
			background: #5CACEE;
			border: solid 1px #104E8B; 
			width: 40%;
			height: 30%;
			position: absolute;
			padding-top: 8%;
			top: 10%;
			right: 0;
			bottom: 0;
			left: 0;
			margin: auto;
		}
		form {
			position: absolute;
			top: 15%;
			right: 50%;
			bottom: 0;
			left: 35%;
			margin: auto;
		}
		.textregistation
		{
			position: absolute;
			top: 70%;
			left: 43%;
			bottom: 0;
			margin: auto;			
		}
		.textregistation2
		{
			position: absolute;
			top: 70%;
			left: 42%;
			bottom: 0;
			margin: auto;			
		}
		.textcomplete
		{
			position: absolute;
			top: 50%;
			left: 41%;
			bottom: 0;
			margin: auto;			
		}
.button
{
	text-decoration:none; text-align:center; 
			position: absolute;
			top: 45%;
			bottom: 35%;
			left: 25%;
			right: 35%;
			margin: auto;
 padding:11px 32px; 
 border:solid 1px #004F72; 
 -webkit-border-radius:4px;
 -moz-border-radius:4px; 
 border-radius: 4px; 
 font:12px "Times New Roman", Times, serif; 
 font-weight:bold; 
 color:#E5FFFF; 
 background-color:#3BA4C7; 
 background-image: -moz-linear-gradient(top, #3BA4C7 0%, #1982A5 100%); 
 background-image: -webkit-linear-gradient(top, #3BA4C7 0%, #1982A5 100%); 
 background-image: -o-linear-gradient(top, #3BA4C7 0%, #1982A5 100%); 
 background-image: -ms-linear-gradient(top, #3BA4C7 0% ,#1982A5 100%); 
 filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#1982A5', endColorstr='#1982A5',GradientType=0 ); 
 background-image: linear-gradient(top, #3BA4C7 0% ,#1982A5 100%);   
 -webkit-box-shadow:0px 0px 2px #bababa, inset 0px 0px 1px #ffffff; 
 -moz-box-shadow: 0px 0px 2px #bababa,  inset 0px 0px 1px #ffffff;  
 box-shadow:0px 0px 2px #bababa, inset 0px 0px 1px #ffffff;  
  
  }
  .button:hover
  {
 padding:11px 32px; 
 border:solid 1px #004F72; 
 -webkit-border-radius:4px;
 -moz-border-radius:4px; 
 border-radius: 4px; 
 font:12px "Times New Roman", Times, serif; 
 font-weight:bold; 
 color:#E5FFFF; 
 background-color:#3BA4C7; 
 background-image: -moz-linear-gradient(top, #3BA4C7 0%, #1982A5 100%); 
 background-image: -webkit-linear-gradient(top, #3BA4C7 0%, #1982A5 100%); 
 background-image: -o-linear-gradient(top, #3BA4C7 0%, #1982A5 100%); 
 background-image: -ms-linear-gradient(top, #3BA4C7 0% ,#1982A5 100%); 
 filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#1982A5', endColorstr='#1982A5',GradientType=0 ); 
 background-image: linear-gradient(top, #3BA4C7 0% ,#1982A5 100%);   
 -webkit-box-shadow:0px 0px 20px #000000, inset 0px 0px 1px #ffffff; 
 -moz-box-shadow: 0px 0px 20px #000000,  inset 0px 0px 1px #ffffff;  
 box-shadow:0px 0px 20px #000000, inset 0px 0px 1px #ffffff;  
  
 }
 .button:active
 {
 padding:11px 32px; 
 border:solid 1px #004F72; 
 -webkit-border-radius:4px;
 -moz-border-radius:4px; 
 border-radius: 4px; 
 font:12px "Times New Roman", Times, serif; 
 font-weight:bold; 
 color:#E5FFFF; 
 background-color:#3BA4C7; 
 background-image: -moz-linear-gradient(top, #3BA4C7 0%, #1982A5 100%); 
 background-image: -webkit-linear-gradient(top, #3BA4C7 0%, #1982A5 100%); 
 background-image: -o-linear-gradient(top, #3BA4C7 0%, #1982A5 100%); 
 background-image: -ms-linear-gradient(top, #3BA4C7 0% ,#1982A5 100%); 
 filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#1982A5', endColorstr='#1982A5',GradientType=0 ); 
 background-image: linear-gradient(top, #3BA4C7 0% ,#1982A5 100%);   
 -webkit-box-shadow:0px 0px 2px #bababa, inset 0px 0px 1px #ffffff; 
 -moz-box-shadow: 0px 0px 2px #bababa,  inset 0px 0px 1px #ffffff;  
 box-shadow:0px 0px 2px #bababa, inset 0px 0px 1px #ffffff;  

 }
  }
  </style> 
    </head>

    <body>	
		<?php
				if (!isset($_SESSION['registationflag']))
				{
					echo "<div class = 'formregistation'>
					<form action='registation.php' method='post'>					
					<p>
					Логин    <input type='text' name='Name'><Br><Br>
					Пароль   <input type='text' name='Password'><Br><Br>
					<p><input type='submit' class='button'></p>
					</form>	</div>";
					$_SESSION['registationflag'] = 1;
				}
				else if($_SESSION['registationflag'] == 1)
 				{
					$login = $_POST['Name'];
					$password = $_POST['Password'];
					if(empty($login) || empty($password)) 
					{
						echo "<div class = 'formregistation'>
						<form action='registation.php' method='post'>					
						<p>
						Логин    <input type='text' name='Name'><Br><Br>
						Пароль   <input type='text' name='Password'><Br><Br>
						<p><input type='submit' class='button'></p>
						</form></div>
						<div class = 'textregistation'>Необходимо заполнить поля.</div>";							
					}	
					else
					{
						$query = "SELECT * FROM accounts WHERE Name = '$login'";
						$res=mysql_query($query);
						if(mysql_num_rows($res) != 0)
						{
							echo "<div class = 'formregistation'>
							<form action='registation.php' method='post'>					
							<p>
							Логин    <input type='text' name='Name'><Br><Br>
							Пароль   <input type='text' name='Password'><Br><Br>
							<p><input type='submit' class='button'></p>
							</form></div>
							<div class = 'textregistation2'>Данный логин уже используется.</div>";			
						}
						else
						{
							$query = "INSERT INTO accounts (Name, Password) VALUES('$login', '$password')";
							$res=mysql_query($query);
							$_SESSION['registationflag'] = 2;
							$_SESSION['login'] = 1;
							$_SESSION['LoginID'] = mysql_insert_id();
							echo "<script language='JavaScript'> window.location.href = 'registation.php'</script>";
						}
					}
				}
				else
				{
					echo "<div class = 'formregistation'><form action='registation.php'>					
						<p>
						</form></div><div class = 'textcomplete'>Вы успешно зарегистрировались.....</div>";	
					echo "<script language='JavaScript'> 
					function refr_time()
					{
						window.location.href = 'index.php'
						clearInterval(tm);
					}
					var tm=setInterval('refr_time();',3000)</script>";					
				}
				
		?>	
    </body>
</html>