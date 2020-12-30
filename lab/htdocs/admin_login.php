<?php

session_start();

$login = "root";
$pass = "toor";

if (isset($_POST['submit']))
{
    $user_login = $_POST['login'];
    $user_password = $_POST['password'];

    if ( $user_login === $login && $user_password === $pass )
    {
        echo "<p style='color:green;'>Login success</p>";
        $_SESSION['login'] = true;
        header("Location: read.php");

    } else
        {
        echo "<p style='color:#ff0000;'>Wrong login or password</p>";
    }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>

<a href="index.php">Return to main page</a>

<h1>Login</h1>

<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">

    <input name="login" type="text" placeholder="login" required>
    <input name="password" type="password" placeholder="password" required>
    <input name="submit" type="submit" value="Login">

</form>

</body>
</html>
