<!DOCTYPE html>
<?php
session_start();
if(isset($_GET["cat"])){
    $prodcat = '%' . $_GET["cat"] . '%';
    $sql = "select * from tb_product where product_category like '$prodcat' ";
}else{
    $sql = "select * from tb_product";
}

include_once '../SweetBakery/lib/connect.inc';

$result = mysqli_query($link, $sql);
if (mysqli_errno($link)) {
    echo mysqli_error($link);
    exit();
}
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Product</title>
        <link href="css/css/product.css" rel="stylesheet" type="text/css"/>
        <!-- logo-->
        <link rel="icon" href="../SweetBakery/Images/logo.jpg">
        <!--CSS FRAMEWORK-->
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="css/jquery.fancybox.min.css" type="text/css"/>
        <link href = "//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel = "stylesheet">
        <link href="css/animate.css" rel='stylesheet' type='text/css' />
        <link href="css/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>

    </head>
    <style>

    </style>
    <body>
        <!--Menu-->
          <?php include_once '../SweetBakery/menu_visitor.inc'?>
            <h1 style="color: #FF5B35;">Sản Phẩm</h1>
            <br>


            <!-- Tab content -->
            <div class="container" style="margin:auto;vertical-align: middle">
                <div class="row" >
                    <?php

                    while($row=mysqli_fetch_row($result)){
                        echo "<div class='column'>";
                        echo " <div class='card'>";
                        echo "<img src='../SweetBakery/Images/$row[3]'style='width:100%' title='$row[2]'/>";
                        echo "<div class='container'>";
                        echo "<h5>$row[1]</h5>";
                        echo "<p>$row[4] đ</p>";
                        if(isset($_SESSION["customer"])){           echo "<p><a class='btn btn-success btn-lg'  href='product_cart.php?id=$row[0]'>Add to cart</a></p>";}else{
                            echo "<p><a class='btn btn-success btn-lg'  href='Login.php'>Add to cart</a></p>";
                        }

                        echo "</div>";
                        echo "</div>";
                        echo "</div>";
                    }

                    ?>
                </div>
            </div>

            <div class="container">
                <div class="contact-section-grids">
                    <div class="col-md-3 contact-section-grid wow fadeInLeft" data-wow-delay="0.4s">
                        <h4 style="color: #FF5B35">Site Links</h4>
                        <ul>
                            <li class="data" style="color: #FF5B35"><a style="color: #FF5B35" href="#">Về chúng tôi</a></li>
                        </ul>
                        <ul>
                            <li class="data" style="color: #FF5B35"><a style="color: #FF5B35" href="#">Giỏ hàng</a></li>
                        </ul>
                        <ul>
                            <li class="data" style="color: #FF5B35"><a style="color: #FF5B35" href="#">Cửa hàng</a></li>
                        </ul>
                    </div>

                    <div class="col-md-3 contact-section-grid wow fadeInLeft" data-wow-delay="0.4s">
                        <h4 style="color: #FF5B35">Menu</h4>
                        <ul>
                            <li class="data" style="color: #FF5B35"><a style="color: #FF5B35" href="product.php?cat=banhmi" >Bánh Mì</a></li>
                        </ul>
                        <ul>
                            <li class="data" style="color: #FF5B35"><a style="color: #FF5B35" href="product.php?cat=banhkem" >Bánh Kem</a></li>
                        </ul>
                        <ul>
                            <li class="data" style="color: #FF5B35"><a style="color: #FF5B35" href="product.php?cat=banhngot" >Bánh Ngọt</a></li>
                        </ul>
                        <ul>
                            <li class="data" style="color: #FF5B35"><a style="color: #FF5B35" href="product.php?cat=donggoi" >Đóng Gói</a></li>
                        </ul>
                        <ul>
                            <li class="data" style="color: #FF5B35"><a style="color: #FF5B35" href="product.php?cat=theomua" >Theo Mùa</a></li>
                        </ul>
                        <ul>
                            <li class="data" style="color: #FF5B35"><a style="color: #FF5B35" href="product.php?cat=khac" >Khác</a></li>
                        </ul>
                    </div>

                    <div id="link" class="col-md-3 contact-section-grid wow fadeInLeft">
                        <h4 style="color: #FF5B35">Follow Us On...</h4>
                        <a href="#" class="fa fa-facebook"></a>

                        <a href="#" class="fa fa-twitter"></a>
                        <a href="#" class="fa fa-google"></a>
                    </div>
                    <div class="col-md-3 contact-section-grid wow fadeInLeft">
                        <i class="fa fa-map-marker" style="color: #FF5B35" ></i>
                        <h4 style="color: #FF5B35">590 Cách Mạng Tháng Tám, Quận 3, TPHCM</h4>
                        <i class="fa fa-phone" style="color: #FF5B35"></i>
                        <h4 style="color: #FF5B35">099 999 999</h4>

                    </div>

                </div>
            </div>

        </div>
    </div>


</body>
</html>
