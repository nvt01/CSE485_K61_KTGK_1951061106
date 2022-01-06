<?php
	require_once 'conn.php';
	
	if(ISSET($_POST['update'])){
		try{
			$mgv = $_POST['mgv'];
			$hovaten = $_POST['hovaten'];
			$ngaysinh = $_POST['ngaysinh'];
			$gioitinh = $_POST['gioitinh'];
			$trinhdo = $_POST['trinhdo'];
			$chuyenmon = $_POST['chuyenmon'];
			$hocham = $_POST['hocham'];
			$hocvi = $_POST['hocvi'];
			$coquan = $_POST['coquan'];

			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$sql = "UPDATE `giangvien` SET `hovaten` = '$hovaten', `ngaysinh` = '$ngaysinh', `gioitinh` = '$gioitinh', `trinhdo` = '$trinhdo', `chuyenmon` = '$chuyenmon', `hocham` = '$hocham', `hocvi` = '$hocvi', `coquan` = '$coquan' WHERE `mgv` = '$mgv'";
			$conn->exec($sql);
		}catch(PDOException $e){
			echo $e->getMessage();
		}
		
		$conn = null;
		header('location:index.php');
	}
?>