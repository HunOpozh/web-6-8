<?php
session_start();
$connection = mysqli_connect('localhost','root','','clowns');
$login = "root";
$password = "toor";

if ( !isset($_SESSION['login']) ) {
    header("Location: 404.php");
}

require_once "phplab/database.php";


if ( isset($_GET['id']) && !empty($_GET['id']) ) {


    $current_user_id = mysqli_real_escape_string($connection, $_GET['id']);
    $query = "SELECT * FROM users WHERE id=" . $current_user_id;
    $req = mysqli_query($connection, $query);
    $user_data = mysqli_fetch_assoc($req);

    if (empty($user_data)) {
        header("Location: 404.php");
    }
}


if ( isset($_POST['submit']) ) {

    $id = mysqli_real_escape_string($connection, $_GET['id']);

    $user_login = $_POST['login'];
    $user_password = $_POST['pass'];
    $user_name = $_POST['name'];
    $user_best = $_POST['best'];

    $query = "UPDATE users SET ,`login`='{$user_login}',`pass`='{$user_password}',`name`='{$user_name}',`best`='{$user_best}' WHERE id = $id";

    $sql = mysqli_query($connection, $query);

    if ($sql) {
        echo "User updated successfully";
    } else {
        echo "Error updating user: " . mysqli_error($connection);
    }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit user</title>
</head>
<body>

<a href="read.php">Back to list of users</a>

<h1>Edit user</h1>

<form action="<?php echo $_SERVER['PHP_SELF'];?>?id=<?php echo isset($user_data) ? $user_data['id'] : "";?>" method="post">
    <input name = "login"
           type="text"
           placeholder="login"
           required
           value="<?php echo isset($user_data) ? $user_data['login'] : "";?>">
    <input name = "pass"
           type="text"
           placeholder="pass"
           required
           value="<?php echo isset($user_data) ? $user_data['pass'] : "";?>">
    <input name = "name"
           type="text"
           placeholder="name"
           required
           value="<?php echo isset($user_data) ? $user_data['name'] : "";?>">
    <textarea name="best" placeholder="best" required>
        <?php echo isset($user_data) ? $user_data['best'] : "";?>
    </textarea>
    <input name = "submit" type="submit" value="submit">
</form>

</body>
</html>
