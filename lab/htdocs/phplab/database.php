<?php
$link=mysqli_connect('localhost','root','','clowns');

    if(mysqli_connect_errno())
    {
        echo 'ошибка подключения к БД ('. mysqli_connect_errno().'): '. mysqli_connect_error();
        exit();
    }

?>