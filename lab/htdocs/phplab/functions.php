<?php

function get_shop($limit, $offset)
{
    global $link;

    $sql = "SELECT * FROM shop LIMIT $limit OFFSET $offset";
    $result = mysqli_query($link, $sql);
    $merch = mysqli_fetch_all($result, MYSQLI_ASSOC);

    return $merch;

}

?>