<?php

session_start();
$connection = mysqli_connect('localhost','root','','clowns');

$login = "root";
$pass = "toor";

require_once "phplab/database.php";

if(!isset($_SESSION['login']))
{
    header("Location: 404.php");
}

if(isset($_POST["submit"]))
{
    $user_login = $_POST["login"];
    $user_password = $_POST["pass"];
    $user_name = $_POST["name"];
    $user_best = $_POST["best"];
    $query = "INSERT INTO users (";
    $query.= "login, pass, name, best";
    $query .= ") VALUES (";
    $query .= "'{$user_login}','{$user_password}','{$user_name}','{$user_best}'";
    $query .= ")";

    if(mysqli_query($connection, $query))
    {
        header("Location: read.php");
    }   else
    {
        die("Error. Not created!");
    }

}

?>



<!DOCTYPE html>
<html lang ="en";
      <head>
          <meta charset="UTF-8">
          <title>Create new user</title>
      </head>

<body>

    <a href="read.php">Back to list of users</a>
    <h1>Create new user</h1>

    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
        <input name = "login" type="text" placeholder="login"required>
        <input name = "pass" type="text" placeholder="password" required>
        <input name = "name" type="text" placeholder="name" required>
        <textarea name="best">Place your best here...</textarea>
        <input name = "submit" type="submit" value="create"">
    </form>

</body>
