<?php
    $link = mysqli_connect('127.0.0.1', 'root','','urok35');
    $query = "DELETE FROM korzina WHERE id = '{$_GET['aidi']}'";
 
    $result = mysqli_query($link, $query);
    header('Location: index.php');
?>