<?php
	include_once ("Model/Products.php");
	$pro = new Products();
	$rs = $pro->getProducts1();

	include_once ("View/Products/Discount.php");
?>