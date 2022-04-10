<div style="width: 400px; margin: 0 auto;">
<h2><span><a href="index.php?mod=order&act=add">Đặt hàng</a></span></h2>
  <p>
    <script language="javascript" src="js/function1.js"></script>
  	<form class="form" method="post" action="index.php?mod=order&act=add" onSubmit="return IsInsertOrder()">




        <p><label>Người nhận hàng (*)</label><input type="text" name="nguoinhan" id="nguoinhan" style="margin-left:5px;" /></p>   

        <!-- <p><label>Ngày nhận hàng (*)</label><input type="date" name="ngaynhan" placeholder="YYYY-MM-DD" id="ngaynhan" style="margin-left:5px;" /></p>  -->



        <p><label>Địa chỉ nhận hàng (*)</label><input type="text" name="txtAddress"  id="txtAddress" style="margin-left:5px;" /></p>
        <p><label>Số điện thoại (*)</label><input type="text" maxlength="10" name="txtPhone" id="txtPhone" style="margin-left:39px;"/></p>



        <div  class="form-group">
            <select name="pay" class="form-control">
              <option value="cod" selected="selected">Tiền mặt</option>
              <option value="netbanking">Ví điện tử MOMO</option>
              
            </select>
          </div>
        <p><label >&nbsp;</label><input type="submit" value="Lưu" name="btnSave" id="btnSave" style="margin-left:140px;"/></p>
        <p id="error" class="error"></p>
    </form>

  </p>
</div>
<?php
	include_once("Controller/Cart/Detail.php");
?> 