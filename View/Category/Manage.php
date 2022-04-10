<br>	
<div style="width: 900px; float: right; margin-right: 170px;">
<center><h2><a style="color: #ff6600;font-weight: bold;font-size: 30px"href="admin.php?mod=category&act=manage">Quản lý phân loại</a></h2></center>
	<table class="table table-bordered">
	<thead>
		<tr>
		<th scope="col">Số thứ tự</th>
		<th scope="col">Mã Phân Loại</th>
		<th scope="col">Tên Phân Loại</th>
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
				<td><?= $row['CategoryID'] ?></td>
				<td><?= $row['CategoryName'] ?></td>
				<td><?= "<a href=\"admin.php?mod=category&act=delete&id=$row[CategoryID]\" onclick=\"return IsDelete()\">" ?><img src="Images/Delete.gif" /></a></td>
				<td><?= "<a href=\"admin.php?mod=category&act=edit&id=$row[CategoryID]\">" ?><img src="Images/Edit.gif" /></a></td>
			</tr>
			<?php $index++;
		} ?>
	</tbody>
	</table>
<br>
</div> 