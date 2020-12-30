<?php
session_start();

if (!isset ($_SESSION["login"]))
{
    header("Location: 404.php");
}

if(isset($_GET["id"]) && !empty($_GET["id"]))
{
    require_once "phplab/database.php";
    $connection = mysqli_connect('localhost','root','','clowns');
    $id = mysqli_real_escape_string($connection, $_GET["id"]);
    $query = "DELETE FROM users WHERE id = $id";

    if (mysqli_query($connection, $query))
    {
        header("Location: read.php");
    }
    else
    {
        die("Error. Not deleted!");
    }

}