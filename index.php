<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1"/>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	</head>
<body>
	<div class="col-12 well">
		<h3 class="text-primary mb-3">Admin</h3>
		<div class="col-md-12">
			<form method="POST" action="add.php">
				<div class="form-group col-md-3">
					<label>Họ và tên</label>
					<input class="form-control" type="text" name="hovaten" />
				</div>
				<div class="form-group col-md-3">
					<label>Ngày sinh</label>
					<input class="form-control" type="text" name="ngaysinh"/>
				</div>
				<div class="form-group col-md-3">
					<label>Giới tính</label> 
					<input class="form-control" type="text" name="gioitinh"/>
				</div>
				<div class="form-group col-md-3">
					<label>Trình độ</label> 
					<input class="form-control" type="text" name="trinhdo"/>
				</div>
				<div class="form-group col-md-3">
					<label>Chuyên môn</label> 
					<input class="form-control" type="text" name="chuyenmon"/>
				</div>
				<div class="form-group col-md-3">
					<label>Học hàm</label> 
					<input class="form-control" type="text" name="hocham"/>
				</div>
				<div class="form-group col-md-3">
					<label>Học vị</label> 
					<input class="form-control" type="text" name="hocvi"/>
				</div>
				<div class="form-group col-md-3">
					<label>Cơ quan</label> 
					<input class="form-control" type="text" name="coquan"/>
				</div>
				<div class="form-group col-md-3">
					<button class="btn btn-primary form-control" type="submit" name="save">Save</button>
				</div>
			</form>
		</div>
		<div class="col-md-12">
			<table class="table table-bordered">
				<thead class="alert-info">
					<tr>
						<th>Họ và tên</th>
						<th>Ngày Sinh</th>
						<th>Giới Tính</th>
						<th>Trình độ</th>
						<th>Chuyên môn</th>
						<th>Học hàm</th>
						<th>Học vị</th>
						<th>Cơ quan</th>
						<th>Thay đổi</th>
					</tr>
				</thead>
				<tbody>
					<?php
						require 'conn.php';
						$sql = $conn->prepare("SELECT * FROM `giangvien`");
						$sql->execute();
						while($fetch = $sql->fetch()){
					?>
					<tr>
						<td><?php echo $fetch['hovaten']?></td>
						<td><?php echo $fetch['ngaysinh']?></td>
						<td><?php echo $fetch['gioitinh']?></td>
						<td><?php echo $fetch['trinhdo']?></td>
						<td><?php echo $fetch['chuyenmon']?></td>
						<td><?php echo $fetch['hocham']?></td>
						<td><?php echo $fetch['hocvi']?></td>
						<td><?php echo $fetch['coquan']?></td>
						<td><button class="btn btn-warning btn-sm" data-toggle="modal" data-target="#update<?php echo $fetch['mgv']?>">Update</button> | <a class="btn btn-danger btn-sm" href="delete.php?id=<?php echo $fetch['mgv']?>">Delete</a></td>
					</tr>
					
					<div class="modal fade" id="update<?php echo $fetch['mgv']?>" aria-hidden="true">
						<div class="modal-dialog">
							<div class="modal-content">
								<form method="POST" action="update.php">
									<div class="modal-header">
										<h3 class="modal-title">Update</h3>
									</div>	
									<div class="modal-body">
										<div class="col-md-2"></div>
										<div class="col-md-8">
											<div class="form-group">
												<label>Họ và tên</label>
												<input class="form-control" type="text" value="<?php echo $fetch['hovaten']?>" name="hovaten"/>
												<input type="hidden" value="<?php echo $fetch['mgv']?>" name="mgv"/>
											</div>
											<div class="form-group">
												<label>Ngày sinh</label>
												<input class="form-control" type="text" value="<?php echo $fetch['ngaysinh']?>" name="ngaysinh"/>
											</div>
											<div class="form-group">
												<label>Giới tính</label> 
												<input class="form-control" type="text" value="<?php echo $fetch['gioitinh']?>" name="gioitinh"/>
											</div>
											<div class="form-group">
												<label>Trình độ</label> 
												<input class="form-control" type="text" value="<?php echo $fetch['trinhdo']?>" name="trinhdo"/>
											</div>
											<div class="form-group">
												<label>Chuyên môn</label> 
												<input class="form-control" type="text" value="<?php echo $fetch['chuyenmon']?>" name="chuyenmon"/>
											</div>
											<div class="form-group">
												<label>Học hàm</label> 
												<input class="form-control" type="text" value="<?php echo $fetch['hocham']?>" name="hocham"/>
											</div>
											<div class="form-group">
												<label>Học vị</label> 
												<input class="form-control" type="text" value="<?php echo $fetch['hocvi']?>" name="hocvi"/>
											</div>
											<div class="form-group">
												<label>Cơ quan</label> 
												<input class="form-control" type="text" value="<?php echo $fetch['coquan']?>" name="coquan"/>
											</div>
										</div>	
										<div class="form-group">
											<button class="btn btn-warning form-control" type="submit" name="update">Update</button>
										</div>
									</div>	
									<br style="clear:both;"/>
									<div class="modal-footer">
										<button class="btn btn-danger" data-dismiss="modal">Close</button>
									</div>
								</form>
							</div>
						</div>
					</div>	
					
					<?php
						}
					?>
				</tbody>
			</table>
		</div>
	</div>
<script src="js/jquery-3.2.1.min.js"></script>	
<script src="js/bootstrap.js"></script>	
</body>
</html>