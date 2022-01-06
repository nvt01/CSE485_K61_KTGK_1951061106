<?php
	$db_username = 'root';
	$db_password = '';
	$conn = new PDO( 'mysql:host=localhost;dbname=1951061106_university', $db_username, $db_password );
	if(!$conn){
		die("Kết nối không thành công!");
		header('location:error.php');
	}
?>