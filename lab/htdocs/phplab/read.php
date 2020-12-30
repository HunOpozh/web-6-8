<?php
    session_start();

    require_once 'phplab/dumpname.sql';

    $query = "SELECT * FROM users";
    $req = mysqli_query($connection, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
    <hr>

        <h1>Users</h1>

    <?php if ($req): ?>
        <?php while( $resp = mysqli_fetch_assoc($req) ): ?>
            <hr>
                <h3>
                    <?php echo $resp['users']; ?>
                </h3>

                <p>
                    Name: <?php echo $resp['name']; ?>
                </p>

                <p>
                Login: <?php echo $resp['login']; ?>
                </p>
        <?php endwhile; ?>
    <?php else: ?>
    <p>Sorry none users</p>
    <?php endif; ?>
    </body>
</html>
