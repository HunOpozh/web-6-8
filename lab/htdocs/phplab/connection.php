<?php

$host = 'localhost';
$user = 'root';
$pass = '';
$dbName = 'dumpname';
$connection = mysqli_connect($host, $user, $pass, $dbName);

if (mysqli_connect_error())
{
    die("DB connection failed: " . mysqli_connect_error() . ' (' . mysqli_connect_error() . ') ');
}   else
{
    echo "Connection successful!\n" . mysqli_get_host_info($connection) . "<br />";
}


mysqli_query($connection, "Set names UTF8");