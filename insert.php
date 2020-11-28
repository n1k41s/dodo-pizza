<?php 
	$con = mysqli_connect("127.0.0.1","root","","urok35");
	$text_zaprosa_vstavit = "INSERT INTO korzina (img, title, name, price)
	VALUES ('{$_GET["img"]}', '{$_GET["title"]}', '{$_GET["name"]}', '{$_GET["price"]}')";

	$zapros_vstavit = mysqli_query($con, $text_zaprosa_vstavit);
	header("location: index.php");
	exit;
	
?>