<br>
<center><h2 class="section-title">Kết quả tìm kiếm</h2></center>
<!-- <div class="main-ver2"> -->
  <div class="zigzag-bottom"></div>
      <div class="container">
        <div class="row">
          <div class="owl-carousel fsihots owl-loaded owl-drag"> 


<?php
	if($result){
		foreach($result as $row){
			$pr= number_format($row['Price'],0);
			// echo $row['ImageUrl'];
			$chuoi = <<<EOD
					<div class="owl-item active" style="width: 250px;">
						<div class="item center" style="text-align:center">	
							<p class="fs-icimg">
								<img class="lazy" src="Upload/{$row['ImageUrl']}" title="{$row['ProductName']}">
							</p>
				
		  
							<p><a style="font-size: 16px; font-weight:bold;">{$row['ProductName']}</b></p>
							<p style="color: #5A88CA;font-size: 16px; font-weight:bold;">Giá: $pr VND</p>
								<div class="button">
									<a href="index.php?mod=products&act=detail&id={$row['ProductID']}">
										<button type="button" class="btn btn-info">CHI TIẾT</button>
									</a>
									<a href="Controller/Cart/Add.php?id={$row['ProductID']}"  onclick="return insertCart({$row['ProductID']})">
										<button type="button" class="btn btn-info">THÊM <i  class="fa fa-shopping-cart"> </i></button>
									</a>
					
							</div>
						</div>
					</div>				
EOD;
							echo $chuoi;
		}
	}
	else {
		echo "<p style=\"color: red; font-size: 25px; text-align:center\">Không tìm thấy sản phẩm nào!<p>";
	}
	?>
				</div>
			</div>		
		</div>
	</div>
<!-- </div> -->

