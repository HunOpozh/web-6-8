<?php
require_once 'phplab/database.php';
include 'phplab/functions.php';
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

            #title1
            {
                position: relative;
                top:33.5%;
                left:50.6%;
                height:600px;
                color:white;
                line-height:1.9;
                width:49%;
            }
            #title2
            {
                position: relative;
                top:33.5%;
                left:50.6%;
                height:600px;
                color:white;
                line-height:1.9;
                width:49%;
            }
            #title3
            {
                position: relative;
                top:33.5%;
                left:50.6%;
                height:600px;
                color:white;
                line-height:1.9;
                width:49%;
            }
            #title0
            {
                position: relative;
                top:33.5%;
                left:50.6%;
                height:600px;
                color:white;
                line-height:1.9;
                width:49%;
            }
            #img1
            {
                position: absolute;
                top:56%;
                left:5.6%;
                height:400px;
                color:white;
                line-height:1.9;
                width:60%;
            }

            #img2
            {
                position: absolute;
                top:136%;
                left:5.6%;
                height:400px;
                color:white;
                line-height:1.9;
                width:60%;
            }

            #img3
            {
                position: absolute;
                top:216%;
                left:5.6%;
                height:400px;
                color:white;
                line-height:1.9;
                width:60%;
            }

            #img0
            {
                position: absolute;
                top:296%;
                left:5.6%;
                height:400px;
                color:white;
                line-height:1.9;
                width:60%;
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

        <p align="center"><font size="+4" color=red face="segoe UI black"><u> <b><i>Наш мерч</i></font></p></b></u>
    </div>


        <?php
            $page = isset ($_GET['page']) ? $_GET['page']: 1;
            $limit = 4;
            $offset = $limit * ($page-1);
            $merchs = get_shop($limit ,$offset);
        ?>

        <?php foreach ($merchs as $merch): ?>
            <div id="img<?=$merch['id']%4?>">
                <img src="/pics/merch/<?=$merch['id']?>.jpg">
            </div>
            <div id="title<?=$merch['id']%4?>">
                <p><h3> <?=$merch['title']?> </h3></p>
                <br/>
                <br/>
                <p><h2> <?=$merch['price']?> </h2></p>
            </div>
        <?php endforeach; ?>

    <ul>
        <?php if($page > 1) { ?>
            <li><a href="/shopstr.php/?page=1">&lt;&lt;</a></li>
            <li><a href="/shopstr.php/?page=<?=$page-1;?>">&lt;</a></li>
        <?php } ?>

        <?php for($i = 1; $i<=6; $i++) { ?>
            <li <?=($i == $page) ? 'class="current"' : '';?>> <a href="/shopstr.php/?page=<?=$i;?>"><?=$i;?></a> </li>
        <?php } ?>

        <?php if($page < 6) { ?>
            <li><a href="/shopstr.php/?page=<?=$page+1;?>">&gt;</a></li>
            <li><a href="/shopstr.php/?page=<?=6;?>">&gt;&gt;</a></li>
        <?php } ?>
    </ul>



<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>