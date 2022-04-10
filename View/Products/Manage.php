<div style="width: 900px; float: right;margin-right: 170px">
<center><h2><a style="color: #ff6600;font-weight: bold;font-size: 25px" href="admin.php?mod=products&act=manage">Quản lý sản phẩm</a></h2></center><br>
<button style="background-color: #990033; border-radius: 5px;"><a style="color: #fff;font-size: 20px" href="admin.php?mod=products&act=insert">Thêm</a></button>
	<table class="table table-bordered">
	<thead>
		<tr>
		<th scope="col">Số thứ tự</th>
		<th scope="col">Mã Sản Phẩm</th>
		<th scope="col">Tên Sản Phẩm</th>
		<th scope="col">Chủ đề</th>
		<th scope="col">Phân loại</th>
		<th scope="col">Giá</th>
		<th scope="col">Số lượng</th>
		<th scope="col">Hình ảnh</th>
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
				<td><?= $row['ProductID'] ?></td>
				<td><?= $row['ProductName'] ?></td>
				<td><?= $row['ManufacturerName'] ?></td>
				<td><?= $row['CategoryName'] ?></td>
				<td><?= number_format($row['Price'],0)."VND" ?></td>
				<td><?= $row['Quantity'] ?></td>
				<td><?= "<img src=\"Upload/$row[ImageUrl]\" width=\"30\" />" ?></td>
				<td><?= "<a href=\"admin.php?mod=products&act=delete&id=$row[ProductID]\" onclick=\"return IsDelete()\">" ?><img src="Images/Delete.gif" /></a></td>
				<td><?= "<a href=\"admin.php?mod=products&act=edit&id=$row[ProductID]\">" ?><img src="Images/Edit.gif" /></a></td>
			</tr>
			<?php $index++;
		} ?>
	</tbody>
	</table>

<br>
</div> <!-- /article -->