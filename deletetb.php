<?php
    $link = mysqli_connect('127.0.0.1', 'root','','urok35');
    $query = "TRUNCATE TABLE korzina";
    $result = mysqli_query($link, $query);
    header('Location: index.php');
?>