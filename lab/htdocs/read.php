<?php
session_start();

require_once "phplab/database.php";
$connection = mysqli_connect('localhost','root','','clowns');
$query = "SELECT * FROM users";
$req = mysqli_query($connection, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Read</title>
</head>
<hr>
<?php if(isset($_SESSION['login'])) : ?>
    <p>You an admin now</p>
    <a href="logout.php">Admin logout</a>
<?php else: ?>
    <a href="admin_login.php">Admin login</a>
<?php endif; ?>

<h1>Users</h1>

<?php if(isset($_SESSION["login"])): ?>
    <a href="create.php">Create new user</a>
<?php endif; ?>

<?php if ($req): ?>
    <?php while( $resp = mysqli_fetch_assoc($req) ): ?>
        <hr>
         <p>
            Name: <?php echo $resp['name']; ?>
        </p>

        <p>
            Login: <?php echo $resp['login']; ?>
        </p>
    <hr>
        <?php if ( isset($_SESSION['login']) ) : ?>
            <a href="edits.php?id=<?php echo $resp['id']; ?>">Edit</a>&nbsp;&nbsp;
            <a href="delete.php?id=<?php echo $resp['id']; ?>">Delete</a>
        <?php endif; ?>
    <hr>
    <?php endwhile; ?>
<?php else: ?>
    <p>Sorry none users</p>
<?php endif; ?>
</body>
</html>


