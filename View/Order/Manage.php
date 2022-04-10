<br>	
<div style="width: 900px; float: right;margin-right: 170px">
<center><h2><a style="color: #ff6600;font-weight: bold;font-size: 30px;"href="admin.php?mod=order&act=manage">Quản lý đơn hàng</a></h2></center>
	<p>
		<?php 
		foreach($order as $row)
		{
			$index = 1;
			$sum = 0;
			$sumOrder = 0;
			$count = 0;
			echo "<p>Mã đơn hàng: $row[OrderID]</p>";
			
			echo "<p> <i> <strong> <mark> Tình trạng đơn hàng: $row[Status] </mark> </strong> </i></p>";
			
			echo "<p><b>Tên khách hàng: $row[FullName]</b></p>";
			echo "<p> <b>Người Nhận Hàng: $row[namere]</b></p>";
			echo "<p> <b>Ngày Nhận Hàng: $row[reDay]</b></p>";
			echo "<p><b>Ngày đặt hàng: $row[AddedDate]</b></p>";
			echo "<p><b> Phương thức thanh toán: $row[Mode]</b></p>";
			$item = $oi->GetOrderItemByOrder($row['OrderID']); ?>
			<table class="table table-bordered">
				<thead>
					<tr>
					<th scope="col">Sản Phẩm</th>
					<th scope="col">Số Lượng</th>
					<th scope="col">Giá đơn vị</th>
					<th scope="col">Tổng</th>
					<th scope="col">Xóa</th>
					</tr>
				</thead>
				<tbody>
			<?php 
				foreach ($item as $rowitem) { ?>
						<?php 
						$sum+=$rowitem['Quantity']*$rowitem['Price'];
						$count = 0; ?>
							<tr>
								<td><?= $rowitem['ProductName'] ?></td>
								<td><?= $rowitem['Quantity'] ?></td>
								<td><?=  number_format($rowitem['Price'],0)."VND" ?></td>
								<td><?= number_format($sum,0) ?></td>		
							</tr>
							<?php 
							$index++;
							$sumOrder+= $sum;
						} ?>
					<tr>
						<td style="font-weight: bolder;">Tổng đơn hàng:</td>
						<td></td>
						<td></td>
						<td style="font-weight: bolder;"><?= number_format($sumOrder,0) ?></td>
						<td><?= "<a href=\"admin.php?mod=order&act=delete&id=$row[OrderID]\" onclick=\"return IsDelete()\">" ?><img src="Images/Delete.gif" /></a></td>
					</tr>
				</tbody>
			</table>
			<?= "<hr/>"; ?>
		<?php } ?>
		</div>
	</p>
</div>