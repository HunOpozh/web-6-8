<?php
    require_once'phplab/database.php';
    $connection = mysqli_connect('localhost','root','','clowns');
    $query = "SELECT * FROM users";
    $req = mysqli_query($connection, $query);
?>
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
				color:  #ffffff; /* Цвет ссылок */
				text-decoration: none; /* Отменяем подчеркивание у ссылки */
				}
			a:visited 
				{
				color:  #ffffff; /* Цвет посещенных ссылок */
				text-decoration: none; /* Отменяем подчеркивание у ссылки */
				}
			body{
				background-color: #000000 ; /* Цвет фона веб-страницы */
				color: white;
				} 
			h1 {
				background-color: #ff0000 ; /* Цвет фона под заголовком */
				}
			p {
				color: white; /* Цвет текста */
				}
				
			#header 
				{
				background-image: url(/pics/bg.jpg);
				background-size: 1600px 568px;
				width: 100%;
				height: 400px;
				}
 
			#nas 
				{
				background-image: url(/pics/main1.png);
				background-size: 1522px 650px;
				background-repeat: no-repeat;
				width: 100%;
				height: 650px;
				}
			#txt
				{
				top:81%;
				left:57%;
				width: 26%;
				height: 680px;
				position: absolute;
				}
 

			#artis 
				{
				background-image: url(/pics/main2.png);
				background-size:1522px 650px;
				float: right;
				width: 100%;
				height: 650px;
				}
			
			#txt2
				{
				left:15%;
				top:175%;
				height: 650px;
				width:26%;
				position:absolute;
				}

			#rasp 
				{
				background-image: url(/pics/main3.png);
				background-size:1522px 650px;
				float: right;
				width: 100%;
				height: 650px;
				}

			#txt3
				{
				left:58%;
				top:270%;
				height: 300px;
				width:26%;
				position:absolute;
				}
				
			#clear 
				{
				clear: both;
				}
				
			#footer 
				{
				width: 100%;
				height: 30px;
			    font-size: 250%; /* Размер шрифта в процентах */ 
				}
		</style>
  </head>
	<body>
	<div id="container">
	
		<div id="header">
			<a href="#" >
				<img src="/pics/logo.png" 
				width="100" height="80" alt="logo" >
			</a>
            <p align="right"><font size="+2" color=red face="segoe UI black"> <a href="shopstr.php">Магазин</a></font>
			<?php
			 if(empty ($_COOKIE['user'])):	
			?>
		<p align="right"><font size="+2" color=red face="segoe UI black"><a href="auth.php">Войти</a>   &nbsp;   <a href="reg.php">Регистрация</font></a>   <a href="read.php">Admin page(CRUD)</a> <a href="manager.phtml">JS CRUD</a> </font>
                </p>
            <?php else:?>
		<p align="right"><font size="+2" color=white face="segoe UI black">Добро пожаловать <?=$_COOKIE['user']?> &nbsp;<a href="lk.php">Личный кабинет 	</a> &nbsp;<a href="phplab/exit.php">Выход</a></font></u></a>
                </p>
            <?php endif;?>
		<p align="center"><font size="+4" color=red face="segoe UI black"><u> <b><i>Добро пожаловать в цирк VSRTMEM</i></font></p></b></u>
		</div>
		<div id="txt">
			<div><b><font size="+1" ><center>О нас:</font></b></div>
			<div ><font >Наш дружный коллектив существует всего-лишь год,<br>но мы уже успели дать более сотни выступлений.<br>
			Мы любим то ,чем занимаемся ,но лучшей платы за нашу работу,чем ваша радость ,мы и не можем ожидать.
			Приходите на наши выступления и мы сделаем все возможное,<br>чтобы радовать вас каждый раз,как последний.</div>
			<br><a href="lab1(spis).html">список артистов(кликабельно)</a>
			</font>

		</div>
    </body>

		<div id="nas">
		</div>
		
		<div id="txt2">
			<div><b><font size="+1" ><p align="center">Как с нами связаться?</font></b></div></p>
			<div><font> Встретиться лично вы можете с нами в корпусах ДЕН,ТОН,КВА и курилке,но если у вас нет такой возможности,то вы можете узнать ,как связаться с нами по ссылке ниже</div></font>
			<br><a href="lab1(kont).html">тык</a>
		</div>
		
		<div id="artis">
		
		</div>
		
		<div id="rasp">
		</div>
		
		<div id="txt3">
			<div><b><font size="+1" ><p align="center">Когда и где нас искать?</font></b></div></p>
			<div><font> Мы регулярно проводим наши шоу ,посмотреть расписание вы можете,нажав на кнопку ниже</div></font>
			<br><a href="lab1(rasp).html">клик</a>
		</div>
		
		
		<div id="footer">
		<p align="center"><marquee direction="left" behavior="scroll" scrollamount=7><a href="http://risovach.ru/upload/2014/09/mem/petrosyanych_61476909_orig_.jpg" target="_blank"Ы> <font size="+3"> Продам гараж</marquee></a></p>
		</div>
		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
	</body>
</html>