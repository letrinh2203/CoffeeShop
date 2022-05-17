<div style="width: 900px; float: right; margin-right: 200px;">

<center><h2><span><a style="color: #ff6600;font-weight: bold;font-size: 30px" href="admin.php?mod=user&act=manage">Quản lý thành viên</a></span></h2></center>
<p>
	<table class="table table-bordered">
	<thead>
		<tr>
		<th scope="col">Số thứ tự</th>
		<th scope="col">Họ Tên</th>
		<th scope="col">Tên Đăng Nhập</th>
		<th scope="col">Nhóm</th>
		<th scope="col">Email</th>
		<th scope="col">Xóa</th>
		<th scope="col">Sửa</th>
		</tr>
	</thead>
	<tbody>
		<?php 
		$index = 1;
		foreach ($ret as $row) { ?>
			<tr>
				<th scope="row"><?= $index ?></th>
				<td><?= $row['FullName'] ?></td>
				<td><?= $row['UserName'] ?></td>
				<td><?= $row['GroupName'] ?></td>
				<td><?= $row['Email'] ?></td>
				<td><?= "<a href=\"admin.php?mod=user&act=delete&id=$row[UserID]\" onclick=\"return IsDelete()\">" ?><img src="Images/Delete.gif" /></a></td>
				<td><?= "<a href=\"admin.php?mod=user&act=edit&id=$row[UserID]\">" ?><img src="Images/Edit.gif" /></a></td>
			</tr>
			<?php $index++;
		} ?>
	</tbody>
	</table>
</p>
</div>