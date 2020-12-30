<?php
	 if(!empty ($_COOKIE['user'])):		
?>
<head>
<meta http-equiv="refresh" content="1;URL=/index.php" />
</head>
<?php endif;?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Цирк VSRTMEM</title>
		<style>
			a:link 
				{
				color:  #ff0000; /* Цвет ссылок */
				text-decoration: none; /* Отменяем подчеркивание у ссылки */
				}
			a:visited 
				{
				color:  #ff0000; /* Цвет посещенных ссылок */
				text-decoration: none; /* Отменяем подчеркивание у ссылки */
				}
			body
				{
				background-color: #000000 ; /* Цвет фона веб-страницы */
				background-size: 1600px 768px;
				color: white;
				} 
			h1 
				{
				background-color: #ff0000 ; /* Цвет фона под заголовком */
				}
			p 
				{
				color: white; /* Цвет текста */
				}
				
			#header 
				{
				background-image: url(/pics/bg.jpg);
				background-size: 1600px 568px;
				width: 100%;
				height: 430px;
				}
		</style>
			<link rel="stylesheet" href="style.css">
  </head>
	<body>
		<div id="header">
			<a href="index.php">
				<img src="/pics/logo.png" 
				width="100" height="80" alt="logo" >
			</a>
			
			<?php
			 if(empty ($_COOKIE['user'])):		
			?>
			
			<p align="center"><span
                        style="color: red; font-family: segoe UI black; "><u> <b><i>Авторизация</i></span></p></b></u>
			
			<?php endif;?>
			
		</div>
			<?php
			 if(empty ($_COOKIE['user'])):		
			?>
		<div class="container mt-4">
			<form action="phplab/auth.php" method="post">
				<input type="text" class="form-control" name="login"
				id="login" placeholder="Введите логин"><br>	
				<input type="password" class="form-control" name="pass"
				id="pass" placeholder="Введите пароль"><br>
				<button class="btn btn-success" type="submit">Войти</button>
			</form>
		</div>
			<?php endif;?>
		
		
		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
	</body>
</html>