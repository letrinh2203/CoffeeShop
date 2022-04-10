<br>	
<div style="width: 900px; float: right; margin-right: 170px;">
<center><h2><a style="color: #ff6600;font-weight: bold;font-size: 30px" href="admin.php?mod=group&act=manage">Quản lý nhóm thành viên</a></h2></center>
	<button style="background-color: #990033; border-radius: 5px; padding: 5px; margin: 5px;"><a style="color: #fff;font-size: 20px" href="admin.php?mod=group&act=insert">Thêm</a></button>
	<table class="table table-bordered">
	<thead>
		<tr>
		<th scope="col">Số thứ tự</th>
		<th scope="col">Mã Nhóm</th>
		<th scope="col">Tên Nhóm</th>
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
				<td><?= $row['GroupID'] ?></td>
				<td><?= $row['GroupName'] ?></td>
				<td><?= "<a href=\"admin.php?mod=group&act=delete&id=$row[GroupID]\" onclick=\"return IsDelete()\">" ?><img src="Images/Delete.gif" /></a></td>
				<td><?= "<a href=\"admin.php?mod=group&act=edit&id=$row[GroupID]\">" ?><img src="Images/Edit.gif" /></a></td>
			</tr>
			<?php $index++;
		} ?>
	</tbody>
	</table>

</div>