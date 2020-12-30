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
				height: 400px;
				}

			#txt
				{
				position:absolute;
				top:83.5%;
				left:12.6%;
				height:450px;
				color:white;
				line-height:1.9;
				}
				
			#txt2
				{
				position:absolute;
				top:86.5%;
				left:64.5%;
				height:450px;
				color:white;
				line-height:1.9;
				}

			#lk
				{
				position:absolute;
				top:30.5%;
				left:0.8%;
				height:450px;
				color:white;
				line-height:1.9;
				}
				
				
				
			#lk1
				{
				width: 34%;
				top: 450%;
				float:left;
				height: 800px;			
				}

			#lk2
				{
				position:absolute;
				left: 55.33%;
				width: 20%;
				top: 55.5%;
				float:right;
				height: 800px;			
				}
		</style>
			<link rel="stylesheet" href="style2.css">
  </head>
	<body>
		<div id="header">
			<a href="index.php">
				<img src="/pics/logo.png" 
				width="100" height="80" alt="logo" >
			</a>
			
			<p align="center"><font size="+4" color=red face="segoe UI black"><u> <b><i>Личный кабинет</i></font></p></b></u>
			
			
		</div>

		<div id="txt">
			<br><font size="+3" face="segoe UI black">Ваш любимый артист:<br>			
			<?php
			 if(!empty ($_COOKIE['lk'])):	
			?> 
			<?=$_COOKIE['lk']?> 
						<?php endif;?>
			</font>
		</div>

		<div id="txt2">
			<br><font size="+3" face="segoe UI black">Изменить выбор</font>
		</div>
		
		
		
		<div id="lk1">
			<img src="/pics/lk1.png" 
			height="700" alt="lk1" title="lk1">
		</div>	

		<div id="lk2">
			<img src="/pics/lk2.png" 
			height="740" alt="lk1" title="lk1">
		</div>	

		<div id="lk" class="container mt-4">
			<form action="phplab/lk1.php" method="post">
				<input type="text" class="form-control" name="best"
				id="best" placeholder="Введите имя своего любимого артиста"><br>
				<button class="btn btn-success" type="submit">Подтверждаю</button>
			</form>
		</div>		
		
		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
	</body>
</html>