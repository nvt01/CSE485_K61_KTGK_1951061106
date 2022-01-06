<?php
	require_once 'conn.php';
	
	if(ISSET($_POST['save'])){
		try{
			$hovaten = $_POST['hovaten'];
			$ngaysinh = $_POST['ngaysinh'];
			$gioitinh = $_POST['gioitinh'];
			$trinhdo = $_POST['trinhdo'];
			$chuyenmon = $_POST['chuyenmon'];
			$hocham = $_POST['hocham'];
			$hocvi = $_POST['hocvi'];
			$coquan = $_POST['coquan'];

			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$sql = "INSERT INTO `giangvien` (`hovaten`, `ngaysinh`, `gioitinh`,`trinhdo`,`chuyenmon`,`hocham`,`hocvi`,`coquan`) VALUES ('$hovaten', '$ngaysinh', '$gioitinh','$trinhdo','$chuyenmon','$hocham','$hocvi','$coquan')";
			$conn->exec($sql);
		}catch(PDOException $e){
			echo $e->getMessage();
		}
		
		$conn = null;
		header('location:index.php');
	}
?>