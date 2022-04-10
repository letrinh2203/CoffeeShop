<head><link REL="SHORTCUT ICON" HREF="Images/Icon.ico"></head>



<?php
    include_once("View/Header.php");
?>
    
    <!--Start Main-->

    <div id="page" class="box">
        <div id="page-in" class="box">

            <!-- Content -->
            <div id="content">
            <?php                    
                    if(isset($_GET["mod"]))
                    {
                         $a = ucfirst($_GET['mod']);
                         $b = ucfirst($_GET['act']);
                        include_once("Controller/".$a."/".$b.".php");
                    }
                    else
                    {
                        include_once("Controller/Products/Manage.php");
                    }
            ?>
            </div> <!-- /content -->

            <!-- Right column -->
            <div id="col" style="float: left; width: 200px; margin-left: 170px; border-right: 3px solid #000; min-height: 200px;">
                <div id="col-in">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">Danh mục quản lý</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr><td><a href="admin.php?mod=products&act=manage">Quản lý sản phẩm</a></td></tr>
                            <tr><td><a href="admin.php?mod=order&act=manage">Quản lý đơn hàng</a></td></tr>
                            <tr><td><a href="admin.php?mod=category&act=manage">Quản lý phân loại</a></td></tr>
                            <tr><td><a href="admin.php?mod=manufacturer&act=manage">Quản lý chủ đề</a></td></tr>
                            <tr><td><a href="admin.php?mod=user&act=manage">Quản lý tài khoản</a></td></tr>
                            <tr><td><a href="admin.php?mod=group&act=manage">Quản lý nhóm tài khoản</a></td></tr>
                            
                        </tbody>
                    </table>
                    
                </div> <!-- /col-in -->
            </div> <!-- /col -->


        </div> <!-- /page-in -->
        </div> <!-- /page -->
    <!--End content-->

<div style="clear: both;"></div>
     <!--End Main-->
    
    <!--Start Footer-->
    <?php
        include_once("View/Footer.php");
    ?>

<?php
    ob_end_flush();
?>